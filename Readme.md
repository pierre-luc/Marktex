Markex
======

Marktex permet de créer des documents PDF à partir de source écrite en Markdown.

Installation
============

cd Markex
sh install.sh

Usage
=====

## Création d'un document

marktex --create <Nom du document>



## Compilation
marktex <Nom du document>


Exemple
=======

marktex --create Exemple

Le fichier Exemple.md est créé s'il n'existait pas.

Le fichier Exemple.tex est créé également.
Vous pouvez modifier le titre du document et tout ce qui concerne le document dans ce fichier.

Dépendances
===========

perl doit être installé.
La bibliothèque XML::simple sera installée.

la compilation LaTeX se fait avec xelatex.
