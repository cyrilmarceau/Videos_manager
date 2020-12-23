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
                <option value="serie">Serie</option>
                <option value="film">Film</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exempleFormControlInput2">Catégorie</label>
            <select class="form-control" name="edit_category">
                <option value="action">Action</option>
                <option value="anime">Animé</option>
                <option value="comedie">Comédie</option>
                <option value="documentaire">Documentaire</option>
                <option value="policer">Policier</option>
                <option value="horreur">horreur</option>
            </select>
        </div>

        <div class="form-group">
            <input type="submit" class="form-control" value="Editer">
        </div>
    </form>
<?php endforeach; ?>