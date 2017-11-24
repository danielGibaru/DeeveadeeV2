<div class="row">

  <div class="col-2"></div>
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
          <?php foreach ($casting as $castingA): ?>
            <?php if ($Dvd['id'] == $castingA['IDD']): ?>
              <div class="row">
              <?= '<a href="#">'.$acteur[$castingA['IDA']-1]['prenomA'].$acteur[$castingA['IDA']-1]['nomA'].' </a><p> Dans le role :'.$castingA['roleC'].'</p>';?><br>
            </div>
            <?php endif; ?>
          <?php endforeach; ?>
          <h3>Realisateur :</h3>
          <a href="#"><?= $Dvd['realisateurD']; ?></a>
      </div>
    </div>
  </div>s
  <div class="col-2"></div>
</div>
