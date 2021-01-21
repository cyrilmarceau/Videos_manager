<div class="row m-0 h-100">

  <div class="col p-0 text-center d-flex justify-content-center align-items-center display-none">
    <img src="http://localhost/Videos_manager/images/login.svg" class="w-100">
  </div>

  <div class="col
    d-flex justify-content-center align-items-center flex-column
    p-0
    w-100
    form-box">

    <form class="w-75" action="index.php?controller=signup&task=insert" method="POST">

    <div class="row">
      <div class="mb-3 col-6">
          <label for="exampleFormControlInput1" class="form-label">Prénom</label>
          <input type="text" class="form-control" name="first_name" placeholder="John" required>
        </div>

        <div class="mb-3 col-6">
          <label for="exampleFormControlInput2" class="form-label">Nom</label>
          <input type="text" class="form-control" name="last_name" placeholder="Doe" required>
        </div>
    </div>

    <div class="row">
      <div class="mb-3 col-6">
          <label for="exampleFormControlInput3" class="form-label">E-mail</label>
          <input type="text" class="form-control" name="email" placeholder="john@doe.fr" required>
        </div>

        <div class="mb-3 col-6">
          <label for="exampleFormControlInput4" class="form-label">Pseudo</label>
          <input type="text" class="form-control" name="pseudo" placeholder="John.doe" required>
        </div>
    </div>

    <div class="row">
      <div class="mb-3 col-6">
          <label for="exampleFormControlInput5" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" name="pass" placeholder="********" required>
        </div>
    </div>

      <button type="submit" class="btn btn-lg btn-block mt-3 me-3 form-box__btn-custom" name="submit">S'inscrire</button>
      <a class="btn btn-lg btn-block mt-3" href="index.php?controller=login&task=showForm">Se connecter</a>

    </form>

  </div>
  
</div>