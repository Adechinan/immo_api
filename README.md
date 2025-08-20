# immo_api

Bienvenue sur **immo_api**, l’API dédiée à la gestion des biens immobiliers. Ce projet vise à simplifier la consultation, l’ajout et la gestion de propriétés immobilières via une interface web ou mobile.

## Fonctionnalités principales

- **Ajout de biens immobiliers** (appartements, maisons, terrains, locaux commerciaux…)
- **Consultation des biens disponibles** avec filtres (prix, localisation, type, etc.)
- **Modification et suppression** d’annonces immobilières
- **Gestion des utilisateurs** (agents, propriétaires, clients)
- **Authentification sécurisée** (JWT, OAuth2)

## Prérequis

- [Laravel][(https://laravel.com/docs/12.x/installation)/)](le framework php utilisé pour cette api)
- [xampp][(https://www.postgresql.org/](https://www.apachefriends.org/download.html))](un server local pour lancer MySQL et apache)
- [insomnia ][((https://insomnia.rest/download))](pour tester l'api)
- [composer][(https://getcomposer.org/download/)] (le gestionnaire de dépendances php)
- [laravel-modules][(https://laravelmodules.com/docs/12/getting-started/introduction)](une dépendance laravel pour adopter une architecture modulaire sur laravel)

## Installation

1. **Clonez le dépôt :**
   ```bash
   git clone https://github.com/Adechinan/immo_api.git
   cd immo_api
   ```

2. **Configurez la base de données :**
   - Modifiez le fichier `.env` pour indiquer vos paramètres de connexion (voir `.env.example`).

4. **Lancez le serveur :**
   ```bash
   php artisan serve
   ```

## Utilisation

- Testez les endpoints pour créer, consulter, modifier ou supprimer des biens immobiliers.

## Exemples d’endpoints

- `GET /api/bien` : liste des biens
- `POST /api/bien` : ajouter un bien
- `PUT /api/bien/{id}` : modifier un bien
- `DELETE api/bien/{id}` : supprimer un bien
- `POST /auth/login` : connexion utilisateur

## Contribuer

1. Forkez le projet
2. Créez votre branche (`git checkout -b feature/ma-nouvelle-feature`)
3. Commitez vos changements (`git commit -am 'Ajout nouvelle feature'`)
4. Poussez la branche (`git push origin feature/ma-nouvelle-feature`)
5. Ouvrez une Pull Request

## Licence

Ce projet est sous licence MIT.

## Contact

Pour toute question, suggestion ou bug, ouvrez une issue sur le dépôt ou contactez [Adechinan](https://github.com/Adechinan).

---
**immo_api** – La solution simple pour la gestion immobilière en ligne.
