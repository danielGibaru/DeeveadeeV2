
    <div class="col-8">
      <div class="card-group">
        <h1 class="text-center" style="font-family : Comfortaa"><?= $castingActeur[0]['prenomA']." ".$castingActeur[0]['nomA']?> a joué dans:</h1>
          <div class="row">
            <?php foreach ($castingActeur as $castingActeurs): ?>
              <div id="DvD" class="card col-4">
                <h4 class="card-title"><?= $castingActeurs['titreD'] ?></h4>
                <a href="<?= site_url('viewDvdBy/'.$castingActeurs['id']); ?>" class="thumbnail">
                  <img id="imgDvd" class="card-img-top"  src="/assets/img/<?= $castingActeurs['imgD']?>" alt="Card image cap">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Synopsis :</h5>
                  <div id="filmSynopsisD">
                    <p class="card-text"><?= $castingActeurs['synopsisD'] ?></p>
                  </div>
                  <div id="lienFilm" class="row">
                    <?php
                    $LienActeur = str_replace("%" , '<a href="">', $castingActeurs['categorieD']  );
                    $LienActeurClose = str_replace("/", "<a/> <p> / </p> ",$LienActeur);
                    echo $LienActeurClose; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
