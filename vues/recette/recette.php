<div id="global">
	<article>
		<header>
			<img class="imgRecette" src="img/tartiflette.jpg" alt="Tartiflette" />
			<h1 class="titreRecette">
				Tartiflette
			</h1>
			<time>
				07/01/2019
			</time>
		</header>
		<p>
			La tartiflette savoyarde est un gratin de pommes de terre avec du
			Reblochon fondu dessus
		</p>
	</article>
	<hr />
	<header>
		<h2 id="titreIngredient">
			Ingrédients
		</h2>
		<ul>
			<li>750 g Pommes de terre</li>
			<li>1 u Reblochon</li>
			<li>200 g Lardons</li>
			<li>3 cs Crème fraîche épaisse</li>
			<li>2 u Oignons</li>
			<li>20 g Beurre</li>
			<li>1 cc Sel</li>
			<li>1 p Poivre</li>
		</ul>
	</header>
	<h2 id="titreCommentaire">
		Commentaires
	</h2>
	<div class="divCommentaire">
		<p>Nicolas : Super recette </p>
		<p> Note : 5/5 </p>
		<p>
			09/01/2019
		</p>
		<hr>
	</div>
	<form method="post" action="index.php?controller=recette&action=commenter&id=idrecette" >
		<input id="auteur" name="auteur" type="text" placeholder="Votre Nom"/><br />
		<textarea id="txtCommentaire" name="contenu" rows="4" placeholder="Votre commentaire" ></textarea><br/>
		<label for="note">Note</label><br />
		<select name="note" id="note">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
		<br />
		<input type="submit" value="Commenter" />
	</form>
	<div id="erreur">
		<p> Erreurs </p>
	</div>
</div>