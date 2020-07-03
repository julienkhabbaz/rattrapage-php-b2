<?php

namespace App\Repository;

use App\Entity\Produit;
use App\Entity\ProduitSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }



    public function findProduitPromotion()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.promo = :val')
            ->setParameter('val', true)
            ->orderBy('p.id', 'ASC')
            //->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

      /**
     * @return Produit[]
     */
    public function findLatest(): array
    {
    	return $this->findVisibleQuery()
    	->setMaxResults(1)
    	->getQuery()
    	->getResult();
    }

      /**
     * 
     * @return Query
     */
    public function findAllVisibleQuery(ProduitSearch $search): Query
    {
    	$query = $this->findVisibleQuery();
    	if($search->getNom()){
    		$query = $query
    		->andwhere('p.name <= :name')
    		->setParameter('name', $search->getNom());
    	}
    	
    	return $query->getQuery();
    	
    }

    private function findVisibleQuery() : QueryBuilder
    {
    	return $this->createQueryBuilder('p');
    	
    }

    public function findSearch(ProduitSearch $search): array
    {

        $query = $this->getSearchQuery($search);
        return $query->getQuery()->getResult();
    }


    private function getSearchQuery(ProduitSearch $search): QueryBuilder
    {
        $query = $this
            ->createQueryBuilder('p');
           
        if (!empty($search->q)) {
            $query = $query
                ->andWhere('p.name LIKE :q')
                ->setParameter('q', "%{$search->q}%");
        }

        return $query;
    }

    // /**
    //  * @return Produit[] Returns an array of Produit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Produit
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
