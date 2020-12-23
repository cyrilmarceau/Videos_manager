<h1>Gestionnaire de séries / films</h1>

<a href="index.php?controller=manager&task=renderAll">Manager mes informations</a>


<div id="accordion">
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
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>