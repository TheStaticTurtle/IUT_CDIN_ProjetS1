# Projet de CDIN en S1

## Sujet :

Créer une interface web permettant de créer une équipe de 4 joueurs composée d'un gardien, d'un défenseur, d'un milieu et d'un attaquant.
L'équipe sera stockée dans la session PHP et pourra être remise à zéro via un bouton (RAZ).

Si un gardien (ou un autre joueur) est déjà présent dans l'équipe, le clic sur Ajouter dans la page gardien (ou sur une autre page) le remplace par celui sur lequel l'utilisateur vient de cliquer.

```php
$players = array(
     1 => array(  "nom" => "Lloris", "prenom" => "Hugo", "poste" => "Gardien"),
     2 => array(  "nom" => "Pavard", "prenom" => "Benjamin", "poste" => "Défenseur"),
     4 => array(  "nom" => "Varane", "prenom" => "Raphaël", "poste" => "Défenseur"),
     5 => array(  "nom" => "Lenglet", "prenom" => "Clément", "poste" => "Défenseur"),
     6 => array(  "nom" => "Ndombele", "prenom" => "Tanguy", "poste" => "Milieu"),
     7 => array(  "nom" => "Griezmann", "prenom" => "Antoine", "poste" => "Attaquant"),
     9 => array(  "nom" => "Giroud", "prenom" => "Olivier", "poste" => "Attaquant"),
    10 => array(  "nom" => "Mbappé", "prenom" => "Kylian", "poste" => "Attaquant"),
    12 => array(  "nom" => "Tolisso", "prenom" => "Corentin", "poste" => "Milieu"),
    13 => array(  "nom" => "Kanté", "prenom" => "N'Golo", "poste" => "Milieu"),
    16 => array(  "nom" => "Mandanda", "prenom" => "Steve", "poste" => "Gardien"),
    17 => array(  "nom" => "Sissoko", "prenom" => "Moussa", "poste" => "Milieu"),
    18 => array(  "nom" => "Fékir", "prenom" => "Nabil", "poste" => "Attaquant"),
    21 => array(  "nom" => "Dubois", "prenom" => "Léo", "poste" => "Défenseur"),
    23 => array(  "nom" => "Areola", "prenom" => "Alphonse", "poste" => "Gardien"),
);
```
 

En vous basant sur le tableau PHP ci-dessus (inclus dans toutes vos pages), créez 1 page gardien.php qui va lister tous les gardiens du tableau, et qui permettra donc d'ajouter un gardien dans l'équipe stockée en session.

Faites de même pour les défenseurs, milieux et attaquants. Vous crérez donc 4 pages différentes, mais avec une intégration Html commune, à base d'include PHP et de css.

L’interface si dessous devra être réalisée avec Bootstrap et devra être responsive : sur 2 colonnes puis sur 1 colonne lorsque l’écran devient trop petit pour un affichage correct sur 2 colonnes.

##### Interface mobile
![Desktop interface](https://i.ibb.co/dJXr14m/index.png)
##### Interface bureau
![Mobile interface](https://i.ibb.co/LvYpg4X/index2.png)
