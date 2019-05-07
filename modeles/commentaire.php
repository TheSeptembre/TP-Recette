<?php
require_once 'framework/modele.php';
class Commentaire extends Modele { 
 	// Renvoie la liste des commentaires associés à une recette
	public function getCommentaires($idRecette) {
 	// code à implémenter
 	// retourne la liste des commentaires
 	// utiliser pour cela executerRequete avec la requête SQL
	}

 	// Ajoute un commentaire dans la base
	public function ajouterCommentaire($idRecette, $auteur, $contenu, $note) {
 	// code à implémenter
 	// requête d'insert pour ajouter un commentaire
 	// utiliser pour cela executerRequete avec la requête SQL et $idRecette, $auteur, $contenu, $note et $date en paramètre (attention les paramètres sont sous forme de tableau)
	}

} 