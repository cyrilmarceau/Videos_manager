<a class="btn btn-outline-primary m-4" href="index.php?controller=createDatas&task=renderForm">Crée une vidéo</a>
<a class="btn btn-outline-primary m-4" href="index.php?controller=home&task=renderAll">Voir toute mes vidéos</a>

<table class="table table-striped my-4">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">URL</th>
      <th scope="col">Type</th>
      <th scope="col">Editer</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($videos as $video): ?>
      <tr>
        <th scope="row"><?= $video['id'] ?></th>
        <td>
          <?= $video['name'] ?>
        </td>
        <td>
          <?= $video['url'] ?>
        </td>
        <td>
          <?= $video['type'] ?>
        </td>
        <td>
          <a href="index.php?controller=editDatas&task=showFormEdit&id=<?= $video['id'] ?>">Editer</a>
        </td>
        <td>
        <a href="index.php?controller=manager&task=delete&id=<?= $video['id']?>">Supprimer</a>
        </td>
      </tr>
      
    <?php endforeach; ?>

  </tbody>
</table>