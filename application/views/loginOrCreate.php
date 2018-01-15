<div class="row">
  <div class="col-1"></div>

  <div class="col-4">
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
  <div class="col-1"></div>
  <div id='' class="col-4">

    <?= validation_errors(); ?>
    <?=form_open('UserController/addUser'); ?>
    <form id='formStyle'>
      <div id="formCreate">
        <div class="row">
          <div class="col">
            <input  name="nomCL" type="text" class="form-control" placeholder="Nom"><br>
          </div>
          <div class="col">
            <input name="prenomCL" type="text" class="form-control" placeholder="Prenom" >
          </div>
        </div>
        <input name="mailCL" type="email" class="form-control" placeholder="Email"><br>
        <input name="pseudoCL" type="text" class="form-control" placeholder="Pseudo"><br>
        <input name="passwordCL" type="password" class="form-control" id="inputPassword2" placeholder="Mot de passe"><br>
        <!-- <div class="row">
          <div class="col-4">
            <input name="" type="number" class="form-control" placeholder="Numero"><br>
          </div>
          <div class="col-8">
            <input name="" type="text" class="form-control" placeholder="Rue"><br>
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            <input name="" type="number" class="form-control" placeholder="Departement">
          </div>
          <div class="col-7">
            <input name="" type="text" class="form-control" placeholder="Ville"><br>
          </div>
        </div> -->
      <button name="button" type="submit" class="btn btn-primary btn-block">Connecte toi!</button>
    </div>
    </form>
  </div>
  <div class="col-1"></div>
</div>
