<?php
$timing = '';
$classRound = '';
$selected = '';
?>

<div class="row d-flex align-items-center py-4">

    <form action="index.php?controller=home&task=renderBy" onsubmit="changeURL()" method="POST"
        class="col-12
        col-lg-8 flex-lg-row justify-content-lg-center
        d-flex align-items-center flex-column
        my-0
        filter-form">

        <select class="form-select filter-form__category-select" name="filter_by_category">
            <option value="choose" selected disabled>Choisissez une catégorie</option>
            <option value="action" <?= isset($_GET['categorie']) && $_GET['categorie'] === 'action' ? 'selected' : null ?>> Action </option>
            <option value="anime" <?= isset($_GET['categorie']) && $_GET['categorie'] === 'anime' ? 'selected' : null ?>> Animé</option>
            <option value="comedie" <?= isset($_GET['categorie']) && $_GET['categorie'] === 'comedie' ? 'selected' : null ?>> Comédie</option>
            <option value="documentaire" <?= isset($_GET['categorie']) && $_GET['categorie'] === 'documentaire' ? 'selected' : null ?>> Documentaire</option>
            <option value="policier" <?= isset($_GET['categorie']) && $_GET['categorie'] === 'policier' ? 'selected' : null ?>> Policier</option>
            <option value="horreur" <?= isset($_GET['categorie']) && $_GET['categorie'] === 'horreur' ? 'selected' : null ?>> Horreur</option>
        </select>

        <select class="form-select my-3 mx-lg-3 filter-form__timing-select" name="filter_by_timing">
            <option value="choose" selected disabled>Choisissez un timing</option>
            <option value="start" <?= isset($_GET['timing']) && $_GET['timing'] === 'start' ? 'selected' : null ?>>A commencer</option>
            <option value="in_progress" <?= isset($_GET['timing']) && $_GET['timing'] === 'in_progress' ? 'selected' : null ?>>En cours</option>
            <option value="on_break" <?= isset($_GET['timing']) && $_GET['timing'] === 'on_break' ? 'selected' : null ?>>En pause</option>
            <option value="finish" <?= isset($_GET['timing']) && $_GET['timing'] === 'finish' ? 'selected' : null ?>>Terminé</option>
            <option value="cancel" <?= isset($_GET['timing']) && $_GET['timing'] === 'cancel' ? 'selected' : null ?>>Annulé</option>
        </select>

        <input type="submit" class="btn btn-primary" name="filter_submit" value="Rechercher">

    </form>

    <div class="col-12 col-lg-4 mt-3 mt-lg-0 mx-auto display-videos">
        <a class="btn btn-outline-secondary w-100" href="index.php?controller=home&task=renderAll">Afficher toutes les catégories</a>
    </div>

</div>


<div>

    <?php foreach ($datas as $data) : ?>
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#<?= 'id' . $data['id'] ?>" aria-expanded="false" aria-controls="<?= 'id' . $data['id'] ?>">
                    <?= $data['name'] ?>
                </button>
                <h6 class="text-uppercase ms-3 mb-0"> <strong><?= $data['type'] ?></strong></h6>
            </div>


            <div class="collapse" id="<?= 'id' . $data['id'] ?>">
                <div class="card-body">
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">Genre: <?= $data['category'] ?></li>

                        <li class="list-group-item"> URL:
                            <a href="<?= $data['url'] ?>">
                                <?= $data['url'] ?>
                            </a>
                        </li>

                        <?php if ($data['type'] == 'serie') : ?>
                            <li class="list-group-item">
                                <span>Saison:</span> <span> <strong> <?= $data['seasons']; ?>  </strong> </span> <br>
                                <span>Episode:</span> <span> <strong> <?= $data['episodes']; ?> </strong> </span>
                            </li>
                        <?php endif ?>


                        <li class="list-group-item d-flex align-items-center">
                            <?php if ($data['timing'] == 'start') {
                                $timing = 'A commencer';
                                $classRound = 'bg-primary rounded-circle me-3';
                            } else if ($data['timing'] == 'in_progress') {
                                $timing = 'En cours';
                                $classRound = 'bg-secondary rounded-circle me-3';
                            } else if ($data['timing'] == 'on_break') {
                                $timing = 'En pause';
                                $classRound = 'bg-warning rounded-circle me-3';
                            } else if ($data['timing'] == 'finish') {
                                $timing = 'Terminé';
                                $classRound = 'bg-success rounded-circle me-3';
                            } else if ($data['timing'] == 'cancel') {
                                $timing = 'Annulé';
                                $classRound = 'bg-danger rounded-circle me-3';
                            } ?>

                            <div style="width: 15px; height: 15px;" class="<?= $classRound ?>"></div>
                            <?= $timing ?>

                        </li>
                    </ul>
                </div>
            </div>
        </div>


    <?php endforeach; ?>
</div>