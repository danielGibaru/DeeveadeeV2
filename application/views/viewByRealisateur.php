
    <div class="col-8">
      <div class="card-group">
        <h1 class="text-center" style="font-family : Comfortaa"><?= $Dvd[0]['prenomR']." ".$Dvd[0]['nomR']?> a réalisé:</h1>
          <div class="row">
            <?php foreach ($Dvd as $Dvds): ?>
              <div id="DvD" class="card col-4">
                <h4 class="card-title"><?= $Dvds['titreD'] ?></h4>
                <a href="<?= site_url('viewDvdBy/'.$Dvds['id']); ?>" class="thumbnail">
                  <img id="imgDvd" class="card-img-top"  src="/assets/img/<?= $Dvds['imgD']?>" alt="Card image cap">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Synopsis :</h5>
                  <div id="filmSynopsisD">
                    <p class="card-text"><?= $Dvds['synopsisD'] ?></p>
                  </div>
                  <div id="lienFilm" class="row">
                    <?php
                    $LienActeur = str_replace("%" , '<a href="">', $Dvds['categorieD']  );
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
