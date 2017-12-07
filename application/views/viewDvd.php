
  <div id="oneFilm" class="col-8">
    <div class="row">
      <div class="col-4">
        <img src="/assets/img/<?= $Dvd['imgD']?>">
      </div>
      <div class="col-8">
        <h1><?= $Dvd['titreD']; ?></h1>
        <h3>synopsis :</h3><br>
        <p><?= $Dvd['synopsisD']; ?></p>
        <h3>Genre :</h3>
        <div class="row">
          <?php
          $LienActeur = str_replace("%" , '<a href="">', $Dvd['categorieD']  );
          $LienActeurClose = str_replace("/", "<a/> <p> / </p> ",$LienActeur);
          echo $LienActeurClose; ?>
        </div>
        <h3>Acteur :</h3>
          <?php foreach ($castingActeurbyDvd as $casting): ?>
              <div class="row">
              <?= '<p> Dans le role: '.$casting['roleC'].'</p><a href="'.site_url('viewByActeur/'.$casting['IDA']).'"><p>-></p>'.$casting['prenomA'].' '.$casting['nomA'].' '.'</a>';?><br>
            </div>
          <?php endforeach; ?>
          <h3>Realisateur :</h3>
          <a href="#"><?= $Dvd['prenomR'], $Dvd['nomR']; ?></a>
      </div>
    </div>
  </div>
  <div class="col-1"></div>

</div>
