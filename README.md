![separe](https://github.com/studoo-app/.github/blob/main/profile/studoo-banner-logo.png)
# Cyber CMD INJECTION CTF 1
[![Version](https://img.shields.io/badge/Version-1.0.0-blue)]()

## Description
Ce projet propose Challenge Capture The Flag basé sur l'exploitation de failles Command injection.

## Installation
- Cloner le projet
- Se placer dans le dossier `/website` et lancer la commande `composer edu:init` afin de créer le fichier `.env`
- Lancer la commande `composer install` afin d'installer les dépendances
- `docker-compose up -d` pour lancer les containers

Ce projet propose :
- l'application web disponible à l'adresse `http://localhost:8000`

## liste des challenges
 - lister un dossier
 - lire un fichier
 - decompresser un dossier et lire un fichier
 - compresser et download des fichiers
 - uploader un fichier avec la commande `curl` et l'option `-F`
 - ajouter du contenu a un fichier avec la commande `echo` et l'option `>>`