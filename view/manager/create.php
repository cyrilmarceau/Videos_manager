<div class="row my-4 h-100">

  <div class="col-md-6 p-0 text-center d-flex justify-content-center align-items-center background-form">
    <img src="http://localhost/Videos_manager/images/add_file.svg" class="w-75">
  </div>

  <div class="col-12 col-md-6 p-0 form-box d-flex justify-content-center align-items-center flex-column">

    <form class="w-75" action="index.php?controller=createDatas&task=getDatasFormCreate" method="POST">

    <div class="row flex-column flex-md-row">
      <div class="mb-3 col-12 col-lg-6">
          <label for="exampleFormControlInput1" class="form-label">Nom</label>
          <input type="text" class="form-control" name="manage_name" placeholder="Lupin" required>
        </div>

        <div class="mb-3 col-12 col-lg-6">
          <label for="exampleFormControlInput2" class="form-label">URL</label>
          <input type="text" class="form-control" name="manage_url" placeholder="Doe" required>
        </div>
    </div>

    <div class="row flex-column flex-md-row">
      <div class="mb-3 col-12 col-lg-6">
          <label for="exampleFormControlInput1" class="form-label">Type</label>
          <select class="form-select form-box__select-manage_type" name="manage_type">
              <option value="serie">Série</option>
              <option value="film">Film</option>
          </select>
        </div>

        <div class="mb-3 col-12 col-lg-6">
          <label for="exampleFormControlInput2" class="form-label">Catégorie</label>
          <select class="form-select" name="manage_category">
            <option value="action">Action</option>
            <option value="anime">Animé</option>
            <option value="comedie">Comédie</option>
            <option value="documentaire">Documentaire</option>
            <option value="policier">Policier</option>
            <option value="horreur">horreur</option>
        </select>
        </div>
    </div>

    <div class="row">
    <label for="exampleFormControlInput1" class="form-label">Timer</label>
      <div class="mb-3 col-6">
        <div class="form-control custom-box-control">
            <label for="exampleFormControlInput1" class="form-box__form-label">A commencer</label>
            <input type="radio" checked value="start" id="start" name="manage_timing">
        </div>

        <div class="form-control custom-box-control">
          <label for="exampleFormControlInput1" class="form-box__form-label">En cours</label>
          <input type="radio" value="in_progress" id="in_progress" name="manage_timing">
        </div>

        <div class="form-control custom-box-control">
          <label for="exampleFormControlInput1" class="form-box__form-label">En pause</label>
          <input type="radio" value="on_break" id="on_break" name="manage_timing">
        </div>
      </div>

      <div class="mb-3 col-6">
        <div class="form-control custom-box-control">
              <label for="exampleFormControlInput1" class="form-box__form-label">Terminé</label>
              <input type="radio" value="finish" id="finish" name="manage_timing">
          </div>

          <div class="form-control custom-box-control">
            <label for="exampleFormControlInput1" class="form-box__form-label">Annulé</label>
            <input type="radio" value="cancel" id="cancel" name="manage_timing">
          </div>
      </div>
    </div>

    <div class="row flex-column flex-md-row form-box__select-manage-videos">
        <div class="mb-3 col-12 col-lg-6">
          <label for="exampleFormControlInput1" class="form-box__form-label">Saisons</label>
          <select class="form-select" id="seasons" name="manage_seasons">
            <?php for($i = 1; $i < 11; $i++): ?>
              <option value="<?= $i ?>">Saison <?= $i ?></option>
            <?php endfor; ?>
          </select>
        </div>

        <div class="mb-3 col-12 col-lg-6 form-box__select-manage-videos">
          <label for="exampleFormControlInput1" class="form-box__form-label">Episodes</label>
          <select class="form-select" id="episodes" name="manage_episodes">
            <?php for($i = 1; $i < 51; $i++): ?>
              <option value="<?= $i ?>">Episode <?= $i ?></option>
            <?php endfor; ?>
          </select>
        </div>

    </div>

      <button type="submit" class="btn form-box__btn-custom btn-lg btn-block mt-3 me-3" name="submit">Valider</button>
      <a class="btn btn-lg btn-block mt-3" href="index.php?controller=manager&task=renderAll">Retour</a>

    </form>

  </div>
  
</div>