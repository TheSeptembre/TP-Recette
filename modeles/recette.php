<?php

require_once 'framework/modele.php';

class Recette extends Modele {

    // Renvoie la liste des recettes du blog
    public function getRecettes() {
        $sql = "SELECT * FROM recette";
        return $this->executeRequete($sql);
    }

    // Renvoie les informations sur une recette
    public function getRecetteById($recetteId) {
        $sql = "SELECT * FROM recette WHERE id = ?";
        return $this->executeRequete($sql, $recetteId)->fetch(PDO::FETCH_ASSOC);
    }

    // Renvoie les ingrédients d'une recette
    public function getIngredients($recetteId) {
        $sql = "SELECT nom, quantite, unit FROM ingredient WHERE idRecette = ?";
        return $this->executeRequete($sql, $recetteId)->fetchAll(PDO::FETCH_ASSOC);
    }
}