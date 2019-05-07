<?php
require_once 'framework/modele.php';
class Recette extends Modele {
 	// Renvoie la liste des recettes du blog
	public function getRecettes() {
 	// code à implémenter
 	// retourne la liste des recettes
 	// utiliser pour cela executerRequete avec la requête SQL
	}

 	// Renvoie les informations sur une recette
	public function getRecette($idRecette) {
 	// code à implémenter
 	// retourne la recette ou génère un message d'erreur via une exeption : Aucune recette ne correspond à l'identifiant '$idRecette'
	 // utiliser pour cela executerRequete avec la requête SQL et $idRecette en paramètre (attention les paramètres sont sous forme de tableau)
	}

 	// Renvoie les ingrédients d'une recette
	public function getIngredients($idRecette) {
 	// code à implémenter
 	// retourne la liste des ingrédientscode
 	// utiliser pour cela executerRequete avec la requête SQL et $idRecette en paramètre (attention les paramètres sont sous forme de tableau)
	}
}
