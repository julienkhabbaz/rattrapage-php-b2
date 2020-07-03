1. Qu'est-ce qu'un container de services ? Quel est son rôle ?

Un conteneur de services (ou conteneur d'injection de dépendances) est simplement un objet PHP qui gère l'instanciation de services (c'est-à-dire des objets).

2. Quelle est la différence entre les commandes make:entity et make:user lorsqu'on utilise la console
Symfony ?

make:entity c'est poour la creation des classes 
make:entity c'est pour la creation d'une classe utilisateur generer par symfony et elle doit implementer impérativement UserInterface.

3. Quelle commande utiliser pour charger les fixtures dans la base de données ?

php bin/console doctrine:fixtures:load

4. Résumez de manière simple le fonctionnement du système de versions "Semver"

Semver est une spécification décrivant une méthode de codage de la nature du changement entre les versions d'une "interface publique", directement dans la chaîne de version.
Une interface publique peut être une interface de programmation d'application (API), une interface de ligne de commande ou une interface utilisateur graphique 
Tout ce dont un tiers dépend pour avoir des interactions prévisibles avec doit être versionné avec semver. 

5. Qu'est-ce qu'un Repository ? A quoi sert-il ?

C'est partie qui interagit avec une base de données. On utilise ceux par défaut dans la plupart des cas, mais en on a besoin si on ad des requêtes spécifiques.

6. Quelle commande utiliser pour voir la liste des routes ?
php bin/console debug:router

7. Dans un template Twig, quelle variable globale permet d'accéder à la requête courante, l'utilisateur
courant, etc...?

{{ app.user }}

8. Pour mettre à jour la structure de la base de données, quelles sont les 2 possibilités que nous avons
abordées en cours ?

1 possibilte c'est effectuer une migration par php bin/console make:migration et apres php bin/console doctrine:migrations:migrate

2: lancer cette commande  php bin/console doctrine:schema:update --force

9. Quelle commande permet de créer une classe de contrôleur ?

php bin/console make:controller 

10. Décrivez succintement l'outil Flex de Symfony

Symfony Flex est le moyen de gérer les applications Symfony.
Il est basé sur les recettes Symfony, qui sont un ensemble d'instructions automatisées pour intégrer des packages tiers dans les applications Symfony.
Son but est  d'Automatiser l’installation et la suppression de vos dépendances en fournissant une configuration par défaut sans avoir à aller lire la doc pour trouver quelle configuration écrire, quelles routes charger ou autre tâche rébarbative à effectuer. 


