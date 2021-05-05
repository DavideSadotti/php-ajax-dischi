<?php include  __DIR__ . '/partials/template/header.php'; ?>
 
    <!-- CORPO DELLA PAGINA -->
    <main>
      <div id="app">

        <select @click="genre" v-model="selected" class="genere">
          <option disabled value="">Scegli il genere</option>
          <option v-for="genre in genreList" v-bind:value="genre">{{ genre }}</option>
        </select>

        <select @click="ordina" v-model="order" class="ordina">
          <option disabled value="">Scegli l'ordine</option>
          <option value="asc">Più Vecchio</option>
          <option value="dis">Più Nuovo</option>
        </select>

        <div class="container">
          <div v-for="cd in list" class="album" v-if="cd.genre == selected || selected == 'Tutti'">
            <img :src="cd.poster" alt=""></img>
            <h3>{{ cd.title }}</h3>
            <p>{{ cd.author }}</p>
            <p>{{ cd.year }}</p>
          </div>
        </div>
        <button type="button" @click="ordina"></button>
      </div>
    </main>

    <?php include  __DIR__ . '/partials/template/footer.php'; ?>

    <!-- JAVASCRIPT -->
    <script src="js/script.js"></script>
  </body>
</html>
