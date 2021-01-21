<?php foreach ($datas as $data) : ?>
    <div class="row my-4 h-100">

        <div class="col-md-6 p-0 text-center d-flex justify-content-center align-items-center background-form">
            <img src="http://localhost/Videos_manager/images/text_field.svg" class="w-75">
        </div>

        <div class="col-12
        col-md-6
        p-0
        d-flex justify-content-center align-items-center flex-column
        form-box">

            <form class="w-75" action="index.php?controller=editDatas&task=getDatasFormEdit&id=<?= $data['id'] ?>" method="POST">

                <div class="row flex-column flex-md-row">
                    <div class="mb-3 col-12 col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="edit_name"  value="<?= $data['name'] ?>" placeholder="Lupin" required>
                    </div>

                    <div class="mb-3 col-12 col-lg-6">
                        <label for="exampleFormControlInput2" class="form-label">URL</label>
                        <input type="text" class="form-control" name="edit_url" value="<?= $data['url'] ?>" placeholder="Doe" required>
                    </div>
                </div>

                <div class="row flex-column flex-md-row">
                    <div class="mb-3 col-12 col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label">Type</label>
                        <select class="form-select form-box__select-edit-type" name="edit_type">
                            <option <?= $data['type'] === 'serie' ? 'selected' : null ?> value="serie">Serie</option>
                            <option <?= $data['type'] === 'film' ? 'selected' : null ?> value="film">Film</option>
                        </select>
                    </div>

                    <div class="mb-3 col-12 col-lg-6">
                        <label for="exampleFormControlInput2" class="form-label">Catégorie</label>
                        <select class="form-select" name="edit_category">
                            <option <?= $data['category'] === 'action' ? 'selected' : null ?> value="action">Action</option>
                            <option <?= $data['category'] === 'anime' ? 'selected' : null ?> value="anime">Animé</option>
                            <option <?= $data['category'] === 'comedie' ? 'selected' : null ?> value="comedie">Comédie</option>
                            <option <?= $data['category'] === 'documentaire' ? 'selected' : null ?> value="documentaire">Documentaire</option>
                            <option <?= $data['category'] === 'policier' ? 'selected' : null ?> value="policier">Policier</option>
                            <option <?= $data['category'] === 'horreur' ? 'selected' : null ?> value="horreur">horreur</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <label for="exampleFormControlInput1" class="form-label">Timer</label>
                    <div class="mb-3 col-6">
                        <div class="form-control custom-box-control">
                            <label for="exampleFormControlInput1" class="form-box__form-label">A commencer</label>
                            <input type="radio" value="start" <?= $data['timing'] === 'start' ? 'checked' : null ?> id="start" name="edit_timing">
                        </div>

                        <div class="form-control custom-box-control">
                            <label for="exampleFormControlInput1" class="form-box__form-label">En cours</label>
                            <input type="radio" value="in_progress" <?= $data['timing'] === 'in_progress' ? 'checked' : null ?> id="in_progress" name="edit_timing">
                        </div>

                        <div class="form-control custom-box-control">
                            <label for="exampleFormControlInput1" class="form-box__form-label">En pause</label>
                            <input type="radio" value="on_break" <?= $data['timing'] === 'on_break' ? 'checked' : null ?> id="on_break" name="edit_timing">
                        </div>
                    </div>

                    <div class="mb-3 col-6">
                        <div class="form-control custom-box-control">
                            <label for="exampleFormControlInput1" class="form-box__form-label">Terminé</label>
                            <input type="radio" value="finish" <?= $data['timing'] === 'finish' ? 'checked' : null ?> id="finish" name="edit_timing">
                        </div>

                        <div class="form-control custom-box-control">
                            <label for="exampleFormControlInput1" class="form-box__form-label">Annulé</label>
                            <input type="radio" value="cancel" <?= $data['timing'] === 'cancel' ? 'checked' : null ?> id="cancel" name="edit_timing">
                        </div>
                    </div>
                </div>

                <div class="row flex-column flex-md-row form-box__select-edit-videos">
                    <div class="mb-3 col-12 col-lg-6">
                        <label for="exampleFormControlInput1" class="form-label">Saisons</label>
                        <select class="form-select" id="seasons" name="edit_season">
                            <?php for ($i = 1; $i < 11; $i++) : ?>
                                 <option <?= $data['seasons'] == $i ? 'selected' : null ?> value="<?= $i ?>"> Saison <?= $i ?> </option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <div class="mb-3 col-12 col-lg-6 form-box__select-edit-videos">
                        <label for="exampleFormControlInput1" class="form-label">Episodes</label>
                        <select class="form-select" id="episodes" name="edit_episode">
                            <?php for ($i = 1; $i < 51; $i++) : ?>
                                <option <?= $data['episodes'] == $i ? 'selected' : null ?> value="<?= $i ?>"> Episodes <?= $i ?> </option>
                            <?php endfor; ?>
                        </select>
                    </div>

                </div>

                <button type="submit" class="btn form-box__btn-custom btn-lg btn-block mt-3 me-3" name="submit">Valider</button>
                <a class="btn btn-lg btn-block mt-3" href="index.php?controller=manager&task=renderAll">Retour</a>

            </form>

        </div>

    </div>
<?php endforeach; ?>