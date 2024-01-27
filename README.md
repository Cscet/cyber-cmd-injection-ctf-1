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
 <!--- - lister le contenu du dossier courant avec la commande `ls -al` -->
 - visualiser le contenu du fichier `flag.txt` avec la commande `cat flag.txt`
 - visualiser le contenu du fichier `flag.txt` avec la commande `cat flag.txt` en utilisant la commande `grep`
 - visualiser le contenu du fichier `flag.txt` avec la commande `cat flag.txt` en utilisant la commande `tar`
 - Passer en root et créer un nouvel utilisateur 'admin' avec le mot de passe 'admin' avec la commande `sudo su` et `useradd admin`
 - uploader un fichier avec la commande `curl` et l'option `-F`
 - visualiser la liste des users avec la commande `cat /etc/passwd`
 - ajouter du contenu a un fichier avec la commande `echo` et l'option `>>`