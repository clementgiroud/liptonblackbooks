<h2><?php echo $title; ?></h2>
<p><a href='<?= site_url('Blackbooks/create'); ?>'>Créer</a></p>
<?php foreach ($book as $book_item): ?>

      <h3><?php echo $book_item['Titre']; ?></h3>
      <div class="main">
            <?php echo $book_item['Auteur'].$book_item['Categorie']; ?>
      </div>
      <p><a href="<?= site_url('blackbooks/'.$book_item['id']); ?>">Voir le livre</a></p>
      <p><a href="<?php echo site_url('blackbooks/update/'.$book_item['id']); ?>">Modifier le livre</a></p>
      <p><a href="<?= site_url('blackbooks/delete/'.$book_item['id']); ?>">Supprimer le livre</a></p>

<?php endforeach; ?>
