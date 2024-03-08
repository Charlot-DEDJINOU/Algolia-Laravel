# Projet Laravel avec Algolia

Ce projet est une application Laravel qui utilise Algolia pour la recherche avancée.

## Configuration

### Installation

1. Clonez ce dépôt sur votre machine locale.
2. Exécutez `composer install` pour installer les dépendances PHP.
3. Copiez le fichier `.env.example` en `.env` et configurez les variables d'environnement nécessaires, telles que l'identifiant d'application Algolia et la clé d'API.
4. Générez une nouvelle clé d'application Laravel en utilisant la commande `php artisan key:generate`.
5. Exécutez les migrations avec la commande `php artisan migrate` pour créer les tables de base de données nécessaires.
6. Indexez vos modèles avec Algolia en utilisant la commande `php artisan scout:import 'App\Models\Produit'`.

### Utilisation

- Lancez le serveur de développement en exécutant `php artisan serve`. L'application sera accessible à l'adresse http://localhost:8000 par défaut.
- Explorez les fonctionnalités de recherche avancée en utilisant l'interface utilisateur de l'application.
- Modifiez et étendez le projet selon vos besoins.

## Développement

- Assurez-vous de suivre les meilleures pratiques de développement Laravel.
- Lisez la documentation officielle d'Algolia pour tirer le meilleur parti de ses fonctionnalités de recherche.

## Contribuer

Les contributions sont les bienvenues ! Si vous souhaitez contribuer à ce projet, veuillez ouvrir une issue pour discuter des modifications proposées.

## Versions Utilisées

- **Package Algolia Scout Extended:** 1.0
- **PHP:** ^7.1.3
- **Laravel Framework:** 5.6.*
