<?php

require_once 'modeles/recette.php';
require_once 'framework/controller.php';
require_once 'framework/vue.php';

class ControllerAccueil extends Controller {

	private $recette;
    private $titre = "Home";

	public function __construct() {
		$this->recette = new Recette();
	}

	// Affiche la liste de toutes les recettes du blog
	public function index() {
		$recettes = $this->recette->getRecettes();
		$this->genererVue($this->titre, array('recettes' => $recettes));
	// code à implémenter
	// récupérer la liste des recettes
	// générer la vue
	}
}