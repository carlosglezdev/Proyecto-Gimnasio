<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="views/assets/css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script> 

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/94f1650474.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">

        <div class="col-12 text-end name-section">
            Usuario: No conectado
            <i class="fa-solid fa-user"></i>
        </div>
            <!-- Inicio Navbar -->
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="inicio">
                            <img src="views/assets/img/logo.PNG" style="width: 15%;" alt="Imagen Logo">
                            DeporSur
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ms-auto">
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link active dropdown-toggle" href="clases" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Clases
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="entrenadores">Entrenadores</a></li>
                                    </ul>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="clases">Clases</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="entrenadores">Entrenadores</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="galeria">Galería</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="noticias">Noticias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sobre nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contacto">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn-login" href="#">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Fin Navbar -->

            <hr class="hr-nav">