<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body class="d-flex flex-column min-vh-100">


    
    <header>
        <!-- <a class="btn btn-outline-primary m-4" href="index.php?controller=manager&task=renderAll">Manager mes informations</a>
        <a class="btn btn-outline-primary m-4" href="index.php?controller=manager&task=destroySession">Se déconnecter</a> -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?= !isset($_SESSION['pseudo']) ? 'Bienvenue' : $_SESSION['pseudo'] ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?controller=home&task=renderAll">Accueil</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=manager&task=renderAll">Manager mes informations</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=manager&task=destroySession">Se déconnecter</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="wrapper flex-grow-1">
