<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ester Aguilar">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="#">

    <title>Home</title>
    <?php wp_head(); ?>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-to bg-dark">
        <a class="navbar-brand" href="./home_Bst.html">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./pricing.html"> Tarifas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./album_Bst.html">Album</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./blog_Bst.html">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Enlaces de interés
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./pricing.html">Tarifas</a>
                        <a class="dropdown-item" href="./blog_Bst.html">Blog</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="./album_Bst.html">Album</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                <a class="enlace" href="./index.html" style="text-decoration: none;">Sign in</a>
                <a class="enlace" href="./index.html" style="text-decoration: none;">Log in</a>
            </form>
        </div>
    </nav>