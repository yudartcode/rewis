<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/e0f2ec9798.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/rewis/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <title>Rekomendasi Tempat Wisata</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top mav">
        <div class="container">
            <a class="navbar-brand" href="/rewis"><i class="fas fa-location-arrow"></i>  Rewis</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/rewis">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rewis/view/rekomendasi">Rekomendasi</a>
                    </li>
                    <?php
                    if (isset($_SESSION['login'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/rewis/view/admin/">Admin</a>
                        </li>
                    <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/rewis/view/about">About</a>
                    </li>
                </ul>
                <?php
                if (!isset($_SESSION['login'])) {
                ?>
                    <a class="nav-link" href="/rewis/view/login/">Login</a>
                <?php
                } else {
                ?>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                            <i class="fas fa-user-circle fa-2x"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/rewis/controller/login/LogoutController.php">Logout</a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>