
    <div class="col-8">
      <div id="lastFilm" class="">
        <div id="lastFilmD"class="card mb-3">
          <h1>Il vient de sortir</h1><br>
          <a href="<?= site_url('viewDvdBy/'.$Dvd[0]['id']); ?>">
            <img class="card-img-top" src="assets/img/<?= $Dvd[0]['backgroudD'] ?>" alt="Card image cap">
          </a>
          <div class="card-body">
            <h4 class="card-title"><?= $Dvd[0]['titreD'] ?></h4>
            <p class="card-text"><?= $Dvd[0]['synopsisD'] ?></p>
          </div>
        </div>
      </div>
      <br>

      <div class=""></div>

      <div id="film" class="">
        <h1 id="nosDvd" >Nos DVD </h1>
        <div class="card-group">
          <?php foreach ($Dvd as $DvdI): ?>
            <div id="DvD" class="card col-4">
              <h4 class="card-title"><?= $DvdI['titreD'] ?></h4>
              <a href="<?= site_url('viewDvdBy/'.$DvdI['id']); ?>" class="thumbnail">
                <img id="imgDvd" class="card-img-top"  src="assets/img/<?= $DvdI['imgD']?>" alt="Card image cap">
              </a>
              <div class="card-body">
                <h5 class="card-title">Synopsis :</h5>
                <div id="filmSynopsisD">
                  <p class="card-text"><?= $DvdI['synopsisD'] ?></p>
                </div>
                <div id="lienFilm" class="row">
                  <?php
                  $LienActeur = str_replace("%" , '<a href="">', $DvdI['categorieD']  );
                  $LienActeurClose = str_replace("/", "<a/> <p> / </p> ",$LienActeur);
                  echo $LienActeurClose; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="col-1"></div>

  </div>
