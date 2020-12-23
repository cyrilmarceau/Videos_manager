<form action="index.php?controller=signup&task=insert" method="POST" class="w-25">

  <div class="form-group">
    <label for="exampleFormControlInput1">Prénom</label>
    <input type="text" class="form-control" name="first_name" id="exampleFormControlInput1" placeholder="John">
  </div>

  <div class="form-group">
    <label for="exempleFormControlInput2">Nom</label>
    <input type="text" class="form-control" name="last_name" id="exempleFormControlInput2" placeholder="Doe">
  </div>

  <div class="form-group">
    <label for="exempleFormControlInput3">E-mail</label>
    <input type="email" class="form-control" name="email" id="exempleFormControlInput3" placeholder="john@gmail.com">
  </div>

  <div class="form-group">
    <label for="exempleFormControlInput4">Pseudo</label>
    <input type="text" class="form-control" name="pseudo" id="exempleFormControlInput4" placeholder="John.d">
  </div>

  <div class="form-group">
    <label for="exempleFormControlInput5">Mot de passe</label>
    <input type="password" class="form-control" name="pass" id="exempleFormControlInput5" placeholder="Votre mot de passe">
  </div>

  <div class="form-group">
    <input type="submit" name="submit" class="form-control" value="S'inscrire">
    <a href="index.php?controller=login&task=showForm">Se connecter</a>
  </div>
</form>