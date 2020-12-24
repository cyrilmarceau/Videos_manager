<h1>Gestionnaire de vidéo</h1>

<a href="index.php?controller=manager&task=renderAll">Manager mes informations</a>

<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Filtres:</th>
            <th scope="col">
                <a href="index.php?controller=home&task=renderBy&orderBy=asc"><i class="fas fa-arrow-up"></i></a>
                <a href="index.php?controller=home&task=renderBy&orderBy=desc"><i class="fas fa-arrow-down"></i></a>
            </th>
        <th scope="col">
            <form action="index.php?controller=home&task=renderBy&orderBy=asc" method="POST">
                <select name="filter_by_category">
                    <option value="action">Action</option>
                    <option value="anime">Animé</option>
                    <option value="comedie">Comédie</option>
                    <option value="documentaire">Documentaire</option>
                    <option value="policier">Policier</option>
                    <option value="horreur">horreur</option>
                </select>
                <!-- <input type="text" name="filter_by_name" id=""> -->
                
                <input type="submit" name="filter_submit" value="Rechercher">
            </form>
            <a href="index.php?controller=home&task=renderAll">Afficher toute les vidéos</a>
        </th>
        <th scope="col"></th>
        </tr>
    </thead>
</table>
<div class="my-4" id="accordion">
    <?php foreach($datas as $data): ?>
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#<?= 'id' . $data['id'] ?>" aria-expanded="true" aria-controls="<?= 'id' . $data['id'] ?>">
                    <?= $data['name'] ?>
                    </button>
                </h5>
            </div>

            <div id="<?= 'id' . $data['id'] ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> URL:
                                <a href="<?= $data['url'] ?>">
                                    <?= $data['url'] ?>
                                </a>
                        </li>
                        <li class="list-group-item">Catégorie: <?= $data['category'] ?></li>
                        <li class="list-group-item">Timing: <?= $data['timing'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>