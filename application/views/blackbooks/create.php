<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>


<?php if(!isset($book) ) { $book = array( 'Titre' => "" , 'Auteur' => "", 'Categorie' => "" )  ; } ?>

<?php echo form_open("Blackbooks/create"); ?>

<form>
  <label for="titre">Titre</label>
  <input type="input" name="Titre" value="<?= $book['Auteur']; ?>"/>
  <label for="categorie">Catégorie</label>
  <input type="input" name="Categorie" value="<?= $book['Titre']; ?>"/>
  <label for="auteur">Auteur</label>
  <input type="input" name="Auteur" value="<?= $book['Categorie']; ?>"/>

  <input type="submit" name="submit" value="Valider"/>
  </form>
