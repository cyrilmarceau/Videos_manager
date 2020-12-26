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
    <select class="form-control manage_type" name="manage_type">
        <option value="serie">Série</option>
        <option value="film">Film</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exempleFormControlInput2">Catégorie</label>
    <select class="form-control" name="manage_category">
        <option value="action">Action</option>
        <option value="anime">Animé</option>
        <option value="comedie">Comédie</option>
        <option value="documentaire">Documentaire</option>
        <option value="policier">Policier</option>
        <option value="horreur">horreur</option>
    </select>
  </div>

  <div class="form-group d-flex flex-column">
    <div class="group d-flex align-items-center">
        <label class="my-0 mr-2 w-25" for="start">A commencer</label>
        <input type="radio" checked value="start" id="start" name="manage_timing">
    </div>


    <div class="group d-flex align-items-center">
        <label class="my-0 mr-2 w-25" for="in_progress">En cours</label>
        <input type="radio" value="in_progress" id="in_progress" name="manage_timing">
    </div>

    <div class="group d-flex align-items-center">
        <label class="my-0 mr-2 w-25" for="on_break">En Pause</label>
        <input type="radio" value="on_break" id="on_break" name="manage_timing">
    </div>

    <div class="group d-flex align-items-center">
        <label class="my-0 mr-2 w-25" for="finish">Terminé</label>
        <input type="radio" value="finish" id="finish" name="manage_timing">
    </div>

    <div class="group d-flex align-items-center">
        <label class="my-0 mr-2 w-25" for="cancel">Annulé</label>
        <input type="radio" value="cancel" id="cancel" name="manage_timing">
    </div>
  </div>

  <div class="form-group data_serie">
    <label for="seasons">Saison</label>
    <select class="form-control" id="seasons" name="manage_seasons">
      <?php for($i = 1; $i < 11; $i++): ?>
        <option value="<?= $i ?>">Saison <?= $i ?></option>
      <?php endfor; ?>
    </select>
  </div>

  <div class="form-group data_serie">
    <label for="episodes">Episode</label>
    <select class="form-control" id="episodes" name="manage_episodes">
      <?php for($i = 1; $i < 51; $i++): ?>
        <option value="<?= $i ?>">Episode <?= $i ?></option>
      <?php endfor; ?>
    </select>
  </div>

  <div class="form-group">
    <input type="submit" class="form-control" name="submit" value="Valider">
  </div>
</form>

<script>
  document.querySelector('.manage_type').addEventListener('change', (e) => {
    
      document.querySelectorAll('.data_serie').forEach(element => {
        if(e.target.value === 'film'){
          element.classList.add('d-none');
        } else {
          element.classList.remove('d-none');
        }
      });
    
  })
</script>