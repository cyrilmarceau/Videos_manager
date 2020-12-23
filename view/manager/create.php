<form action="index.php?controller=createDatas&task=getDatasFormCreate" class="w-25" method="POST">

  <div class="form-group">
    <label for="exampleFormControlInput1">Nom</label>
    <input type="text" class="form-control" name="manage_name" id="" placeholder="Nom de la série ou du film">
  </div>

  <div class="form-group">
    <label for="exempleFormControlInput2">URL</label>
    <input type="text" class="form-control" name="manage_url" placeholder="url">
  </div>

  <div class="form-group">
    <label for="exempleFormControlInput2">Type</label>
    <select class="form-control" name="manage_type">
        <option value="serie">Série</option>
        <option value="film">Film</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exempleFormControlInput2">Catégory</label>
    <select class="form-control" name="manage_category">
        <option value="action">Action</option>
        <option value="anime">Animé</option>
        <option value="comedie">Comédie</option>
        <option value="documentaire">Documentaire</option>
        <option value="policer">Policier</option>
        <option value="horreur">horreur</option>
    </select>
  </div>

  <div class="form-group">
    <input type="submit" class="form-control" value="Valider">
  </div>
</form>