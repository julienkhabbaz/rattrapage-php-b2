<?php

namespace App\EventSubscriber;

use App\Entity\Contact;
use App\Entity\Produit;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;

class EntityCreatedSubscriber implements EventSubscriber
{
    public function getSubscribedEvents()
    {
        return [
            Events::prePersist
        ];
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $object = $args->getObject();

        if ($object instanceof Contact) {
            $object->setCreated(new \DateTime('now'));
            $object->setContactDate(new \DateTime('now'));
        }
        if ($object instanceof Produit) {
            $object->setCreated(new \DateTime('now'));
        }
    }
}
