<?php
    $timing = '';
    $classRound = '';
?>


<div>
    <a class="btn btn-outline-primary m-4" href="index.php?controller=manager&task=renderAll">Manager mes informations</a>
    <a class="btn btn-outline-primary m-4" href="index.php?controller=manager&task=destroySession">Se déconnecter</a>
</div>


<table class="table table-striped">
    <thead>
        <tr>
        <th class="align-middle text-uppercase" scope="col">Filtres:</th>
            <!-- <th scope="col"> -->
                <!-- <a href="index.php?controller=home&task=renderBy&orderBy=asc"><i class="fas fa-arrow-up"></i></a>
                <a href="index.php?controller=home&task=renderBy&orderBy=desc"><i class="fas fa-arrow-down"></i></a> -->
            <!-- </th> -->
        <th class="align-middle" scope="col">
            <form class="my-0 d-flex" action="index.php?controller=home&task=renderBy" method="POST">
                <select class="form-control w-50 mx-4" name="filter_by_category">
                    <option value="action">Action</option>
                    <option value="anime">Animé</option>
                    <option value="comedie">Comédie</option>
                    <option value="documentaire">Documentaire</option>
                    <option value="policier">Policier</option>
                    <option value="horreur">horreur</option>
                </select>
                <!-- <input type="text" name="filter_by_name" id=""> -->
                
                <input type="submit" class="btn btn-primary" name="filter_submit" value="Rechercher">
            </form>
        </th>
        <th class="align-middle" scope="col">
            <a class="btn btn-outline-secondary" href="index.php?controller=home&task=renderAll">Afficher toutes les catégories</a>
        </th>
        </tr>
    </thead>
</table>
<div class="my-4" id="accordion">
    <?php foreach($datas as $data): ?>
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-outline-primary" data-toggle="collapse" data-target="#<?= 'id' . $data['id'] ?>" aria-expanded="true" aria-controls="<?= 'id' . $data['id'] ?>">
                    <?= $data['name'] ?>
                    </button>
                </h5>
            </div>

            <div id="<?= 'id' . $data['id'] ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">Genre: <?= $data['category'] ?></li>
                        <li class="list-group-item">Type: <?= $data['type'] ?></li>
                        
                        <li class="list-group-item"> URL:
                                <a href="<?= $data['url'] ?>">
                                    <?= $data['url'] ?>
                                </a>
                        </li>

                            <?php if($data['type'] == 'serie'): ?>
                                <li class="list-group-item">
                                    <span>Saison:</span>  <span class="font-weight-bold"> <?= $data['seasons']; ?> </span> <br>
                                    <span>Episode:</span> <span class="font-weight-bold"> <?= $data['episodes']; ?> </span>
                                </li>
                             <?php endif ?>


                        <li class="list-group-item d-flex align-items-center"> 
                            <?php if($data['timing'] == 'start'){
                                $timing = 'A commencer';
                                $classRound = 'bg-primary rounded-circle mr-3';
                            } else if($data['timing'] == 'in_progress'){
                                $timing = 'En cours';
                                $classRound = 'bg-secondary rounded-circle mr-3';
                            } else if($data['timing'] == 'on_break'){
                                $timing = 'En pause';
                                $classRound = 'bg-warning rounded-circle mr-3';
                            } else if($data['timing'] == 'finish'){
                                $timing = 'Terminé';
                                $classRound = 'bg-success rounded-circle mr-3';
                            } else if($data['timing'] == 'cancel'){
                                $timing = 'Annulé';
                                $classRound = 'bg-danger rounded-circle mr-3';
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