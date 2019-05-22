<?php

require_once 'modeles/recette.php';
require_once 'modeles/commentaire.php';
require_once 'framework/controller.php';
require_once 'framework/vue.php';
require_once 'framework/requete.php';

class ControllerRecette extends Controller {

    private $recette;
    private $commentaire;
    private $title = "Recette";

    public function __construct() {
        $this->recette = new Recette();
        $this->commentaire = new Commentaire();
    }

    public function index() {

        $recettes = $this->recette->getRecettes();
        $this->genererVue($this->title, array('recettes' => $recettes));
    }

    // Affiche les détails sur une recette
    public function recette() {

        $recetteId = $this->requete->getParametre('id');

        $selectedRecette = $this->recette->getRecetteById(array($recetteId));
        $assocIngredients = $this->recette->getIngredients(array($recetteId));
        $assocCommentaires = $this->commentaire->getCommentaires(array($recetteId));

        $this->genererVue($this->title, array('recette' => $selectedRecette, 'ingredients' => $assocIngredients, 'commentaires' => $assocCommentaires));
    }

    // Ajoute un commentaire à une recette
    public function commentaire() {
        $recetteId = $this->requete->getParametre('id');
        $author = $this->requete->getParametre('auteur');
        $content = $this->requete->getParametre('contenu');
        $note = $this->requete->getParametre('note');

        $this->commentaire->addCommentaire($recetteId, $author, $content, $note);

        $this->SetAction("recette");

        $this->recette();
    }
}