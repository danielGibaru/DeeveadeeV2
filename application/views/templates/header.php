<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Deeveadee</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/master.css">
    <link href="/assets/fonts/Comfortaa-Regular.ttf" rel="stylesheet">
  </head>
  <body>
    <div id="fond" class="col-12">
      <div class="row">

        <img id="logo" src="/assets/img/logo.png" alt="">
        <!-- <p id="text">Le cinéma? mais, chez vous !</p> -->
      </div>
    <nav>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="http://deeveadeev2.my">Accueille</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#nosDvd">Nos DvD</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="http://deeveadeev2.my/index.php/loginOrCreate/a">Connecte-toi</a>
        </li>
      </ul>
    </nav>
  </div>
  <br>

    <div class="row">

      <div id="menu" class="col-2">
        <div >
        <div id="accordion" role="tablist">
          <div id="card" class="card">
            <div id= "cardHeader" class="card-header" role="tab" id="headingOne">
              <h5 class="mb-0">
                <a id= "cardButton" data-toggle="collapse" class="collapsed btn btn-light" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Genre
                </a>
              </h5>
            </div>
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
              </div>
            </div>
          </div>
          <div id="card" class="card">
            <div id= "cardHeader" class="card-header" role="tab" id="headingTwo">
              <h5 class="mb-0">
                <a id= "cardButton" class="collapsed btn btn-light" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Acteur
                </a>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">

                  <?php foreach ($acteurByOrder as $acteurS): ?>
                    <a href="<?= site_url('viewByActeur/'.$acteurS['id']); ?>"  class="btn btn-light"><?= $acteurS['prenomA'].$acteurS['nomA']; ?></a><br>
                  <?php endforeach; ?>

              </div>
            </div>
          </div>
          <div id="card" class="card">
            <div id= "cardHeader" class="card-header" role="tab" id="headingThree">
              <h5 class="mb-0">
                <a id= "cardButton" class="collapsed btn btn-light" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Realisateur
                </a>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                <?php foreach ($realisateurByOrder as $realisateurs): ?>
                  <a href="<?= site_url('viewByRealisateur/'.$realisateurs['id']); ?>"  class="btn btn-light"><?= $realisateurs['prenomR'].$realisateurs['nomR']; ?></a><br>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <form id='formStyle'>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="votre pseudo">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Connecte toi!</button>
      </form>
    </div>
    <div class="col-1">
    </div>
