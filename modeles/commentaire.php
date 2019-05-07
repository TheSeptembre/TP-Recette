<?php

require_once 'framework/modele.php';

class Commentaire extends Modele {

    private $TableName = "commentaire";

    // Renvoie la liste des commentaires associés à une recette
    public function getCommentaires($recetteId) {
        $sql = "SELECT auteur, contenu, note, dateCreation FROM commentaire WHERE idRecette = ?";
        return $this->executeRequete($sql, $recetteId);
    }

    // Ajoute un commentaire dans la base
    public function addCommentaire($recetteId, $author, $content, $note) {
        $sql = "INSERT INTO commentaire (`idRecette`, `auteur`, `contenu`, `note`, `dateCreation`) VALUES (?, ?, ?, ?, ?)";
        $date = new DateTime();
        $this->executeRequete($sql, array(intval($recetteId), $author, $content, $note, $date->format("Y-m-d")));
    }
}