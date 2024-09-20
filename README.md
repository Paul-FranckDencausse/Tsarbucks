
# TsarBucks

**TsarBucks** est un site parodique inspiré d'une célèbre chaîne de cafés, conçu pour offrir une expérience unique avec un design moderne et entièrement **responsive**. Il présente divers salons de café fictifs inspirés de figures historiques russes, avec un design élégant et des fonctionnalités modernes.

## Table des matières

- [Aperçu](#aperçu)
- [Caractéristiques principales](#caractéristiques-principales)
- [Technologies utilisées](#technologies-utilisées)
- [Installation](#installation)
- [Fonctionnalités Responsives](#fonctionnalités-responsives)
- [Contribuer](#contribuer)

## Aperçu

Le site TsarBucks propose des salons de café thématiques avec des descriptions détaillées, des images immersives et une navigation intuitive. Chaque page met en avant une ambiance unique inspirée de l’histoire de la Russie. 

L'objectif est de créer une expérience utilisateur fluide, quel que soit l'appareil utilisé : ordinateur, tablette ou smartphone.

## Caractéristiques principales

- **Responsive Design** : Optimisé pour tous types d'écrans, du mobile aux grands écrans d'ordinateur.
- **Navigation fluide** : Un système de navigation simple et intuitif permettant de passer d'un salon à un autre en un clic.
- **Images optimisées** : Les images sont chargées de manière à minimiser le temps de chargement tout en maintenant une qualité optimale.
- **Thèmes historiques** : Chaque salon de café est dédié à une figure historique russe, apportant un storytelling unique.
  
## Technologies utilisées

- **Symfony** : Framework PHP utilisé pour la structure du site.
- **Bootstrap 5** : Utilisé pour le responsive design, avec un focus sur les composants adaptatifs et les grilles flexibles.
- **Twig** : Moteur de template pour une séparation claire de la logique et de la vue.
- **HTML5 & CSS3** : Langages de base pour la structuration et la mise en page.
- **JavaScript** : Pour des éléments interactifs et dynamiques.
  
## Installation

1. Clonez le dépôt Git sur votre machine locale :
   ```bash
   git clone https://github.com/Paul-FranckDencausse/TsarBucks.git
   ```
2. Accédez au répertoire du projet :
   ```bash
   cd TsarBucks
   ```
3. Installez les dépendances via Composer :
   ```bash
   composer install
   ```
4. Lancer le serveur local Symfony :
   ```bash
   symfony server:start
   ```
5. Accédez au site à l'adresse suivante : 

## Fonctionnalités Responsives

L'une des principales priorités lors du développement de TsarBucks était de s'assurer que le site offre une expérience utilisateur cohérente, peu importe la taille de l'écran. Voici quelques-unes des fonctionnalités spécifiques liées au design responsive :

- **Grille flexible avec Bootstrap** : Utilisation du système de grille flexbox pour ajuster la mise en page et la disposition des éléments automatiquement selon la taille de l'écran.
  
- **Images adaptatives** : Les images sont redimensionnées et adaptées automatiquement pour offrir des temps de chargement rapides sans sacrifier la qualité visuelle.

- **Menus et navigation** : Le menu de navigation passe d'une barre classique sur les grands écrans à un menu "hamburger" sur les petits appareils, facilitant ainsi la navigation sur mobile.

- **Cartes et boutons** : Chaque salon de café est présenté dans des cartes adaptées aux écrans mobiles, avec des boutons CTA (`Call To Action`) placés stratégiquement et redimensionnés automatiquement.

## Contribuer

Les contributions sont les bienvenues pour améliorer ce projet. Si vous avez des idées, des suggestions ou des corrections, n'hésitez pas à faire une pull request ou à ouvrir une issue sur le dépôt GitHub.

