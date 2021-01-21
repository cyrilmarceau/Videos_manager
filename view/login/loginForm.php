<section class="row m-0 h-100">

  <div class="col p-0 text-center d-flex justify-content-center align-items-center display-none">
    <img src="http://localhost/Videos_manager/images/login.svg" class="w-100">
  </div>

  <div class="col
    p-0
    d-flex justify-content-center align-items-center flex-column
    w-100
    form-box">

    <form class="w-75" action="index.php?controller=login&task=connection" method="POST">

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
        <input type="text" class="form-control" name="email_login" placeholder="John.doe@doe.fr" required>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Mot de passe</label>
        <input type="text" class="form-control" name="pass_login" placeholder="**********" required>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault"> Me garder connecté </label>
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-lg btn-block mt-3 me-3 form-box__btn-custom" name="submit">Se connecter</button>
      
      <a class="btn btn-lg btn-block mt-3" href="index.php?controller=signup&task=showForm">S'inscrire</a>

    </form>

  </div>
  
</section>