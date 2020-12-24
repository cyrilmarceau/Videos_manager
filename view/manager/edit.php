<?php foreach($datas as $data): ?>
    <form action="index.php?controller=editDatas&task=getDatasFormEdit&id=<?= $data['id'] ?>" class="w-25" method="POST">


            <div class="form-group">
            <label for="exampleFormControlInput1">Nom de la série</label>
            <input type="text" class="form-control" name="edit_name" value="<?= $data['name'] ?>" placeholder="Nom de la série">
        </div>

        <div class="form-group">
            <label for="exempleFormControlInput2">URL</label>
            <input type="text" class="form-control" name="edit_url" value="<?= $data['url'] ?>" placeholder="url">
        </div>

        <div class="form-group">
            <label for="exempleFormControlInput2">Type</label>
            <select class="form-control" name="edit_type">
                <option <?= $data['type'] === 'serie' ? 'selected' : null ?> value="serie">Serie</option>
                <option <?= $data['type'] === 'film' ? 'selected' : null ?> value="film">Film</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exempleFormControlInput2">Catégorie</label>
            <select class="form-control" name="edit_category">
                <option <?= $data['category'] === 'action' ? 'selected' : null ?> value="action">Action</option>
                <option <?= $data['category'] === 'anime' ? 'selected' : null ?> value="anime">Animé</option>
                <option <?= $data['category'] === 'comedie' ? 'selected' : null ?> value="comedie">Comédie</option>
                <option <?= $data['category'] === 'documentaire' ? 'selected' : null ?> value="documentaire">Documentaire</option>
                <option <?= $data['category'] === 'policer' ? 'selected' : null ?> value="policer">Policier</option>
                <option <?= $data['category'] === 'horreur' ? 'selected' : null ?> value="horreur">horreur</option>
            </select>
        </div>

        <div class="form-group d-flex flex-column">

            <div class="group d-flex align-items-center">
                <label class="my-0 mr-2 w-25" for="start">A commencer</label>
                <input type="radio" value="start" <?= $data['timing'] === 'start' ? 'checked' : null ?> id="start" name="edit_timing">
            </div>
            

            <div class="group d-flex align-items-center">
                <label class="my-0 mr-2 w-25" for="in_progress">En cours</label>
                <input type="radio" value="in_progress" <?= $data['timing'] === 'in_progress' ? 'checked' : null ?> id="in_progress" name="edit_timing">
            </div>

            <div class="group d-flex align-items-center">
                <label class="my-0 mr-2 w-25" for="on_break">En Pause</label>
                <input type="radio" value="on_break" <?= $data['timing'] === 'on_break' ? 'checked' : null ?> id="on_break" name="edit_timing">
            </div>

            <div class="group d-flex align-items-center">
                <label class="my-0 mr-2 w-25" for="finish">Terminé</label>
                <input type="radio" value="finish" <?= $data['timing'] === 'finish' ? 'checked' : null ?> id="finish" name="edit_timing">
            </div>

            <div class="group d-flex align-items-center">
                <label class="my-0 mr-2 w-25" for="cancel">Annulé</label>
                <input type="radio" value="cancel" <?= $data['timing'] === 'cancel' ? 'checked' : null ?> id="cancel" name="edit_timing">
            </div>

        </div>

        <div class="form-group">
            <label for="seasons">Saison</label>
            <select class="form-control" id="seasons" name="edit_season">
            <?php for($i = 1; $i < 11; $i++): ?>
                <option <?= $data['seasons'] == $i ? 'selected' : null ?> value="<?= $i ?>"> Saison <?= $i ?> </option>
            <?php endfor; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="episodes">Episode</label>
            <select class="form-control" id="episodes" name="edit_episode">
            <?php for($i = 1; $i < 51; $i++): ?>
                <option <?= $data['episodes'] == $i ? 'selected' : null ?> value="<?= $i ?>"> Episodes <?= $i ?> </option>
            <?php endfor; ?>
            </select>
        </div>

        <div class="form-group">
            <input type="submit" class="form-control" name="submit" value="Editer">
        </div>
    </form>
<?php endforeach; ?>