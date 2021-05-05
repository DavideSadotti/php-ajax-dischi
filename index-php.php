<?php 
  include  __DIR__ . '/partials/template/header.php';
  include __DIR__ . '/database.php'; 
?>
 
    <!-- CORPO DELLA PAGINA -->
    <main>
      <div id="app">

        <select class="genere">
          <option disabled>Scegli il genere</option>
          <option>Rock</option>
          <option>Pop</option>
          <option>Jazz</option>
          <option>Metal</option>
        </select>

        <select class="ordina">
          <option disabled>Scegli l'ordine</option>
          <option>Più Vecchio</option>
          <option>Più Nuovo</option>
        </select>

        <div class="container">
            <?php foreach($list as $item): ?>
                <div class="album">
                    <img src="<?php echo $item['poster']; ?>"></img>
                    <h3><?php echo $item['title']; ?></h3>
                    <p><?php echo $item['author']; ?></p>
                    <p><?php echo $item['year']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
      </div>
    </main>

    <?php include  __DIR__ . '/partials/template/footer.php'; ?>

    <!-- JAVASCRIPT -->
    <!-- <script src="js/script.js"></script> -->
  </body>
</html>