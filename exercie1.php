<?php
// Tableau d'entiers
$entiers = array(2, 3, 4, 5);

// Initialisation du produit à 1
$produit = 1;

// Parcourir le tableau pour calculer le produit
foreach ($entiers as $entier) {
    $produit *= $entier;
}

// Affichage du produit
echo "Le produit de tous les éléments du tableau est : $produit";
?>
