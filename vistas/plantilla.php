<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebbApp -4B</title>
    <!-- Plugins CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Plugins JS -->
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/5d66f872f2.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Logotipo -->
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>
    <!-- BArra de menu -->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <?php if (isset($_GET["pagina"])): ?>
                    <?php if ($_GET["pagina"] == "registro"): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=registro">REGISTRO</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=registro">REGISTRO</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "ingreso"): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=ingreso">INGRESO</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=ingreso">INGRESO</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "inicio"): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=inicio">INICIO</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=inicio">INICIO</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["pagina"] == "salir"): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=salir">SALIR</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">SALIR</a>
                        </li>
                    <?php endif ?>
                <?php else: ?>
                        <!-- GET: $_GET["variable"] variables que se pasan como parametros via URL
                        Tanbien conocido como cadena de consulta a traves de la URL.
                        Cuando es la primera variable se separa con 7 
                        las que le sigen continuan con &
                    -->
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=registro">REGISTRO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?pagina=ingreso">INGRESO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?pagina=inicio">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?pagina=salir">SALIR</a>
                    </li>
                <?php endif ?>                    
            </ul>
        </div>
    </div>
    <!-- CONTENIDO -->
    <div>
        <div class="container-fluid">
            <div class="container py-5">
                <?php 
                    #ISSET: isset() determina si una variable esta definida y no es NULL
                    if (isset($_GET["pagina"])){
                        #Lista de paginas blancas o paginas permitidas a nuestro sitio web
                        if ($_GET["pagina"] == "registro" ||
                            $_GET["pagina"] == "ingreso" ||
                            $_GET["pagina"] == "inicio" ||
                            $_GET["pagina"] == "editar" ||
                            $_GET["pagina"] == "salir"){
                                include "paginas/". $_GET["pagina"] .".php";
                       } else {
                            include "paginas/error404.php";
                       }
                    }else {
                        include "paginas/registro.php";
                    }   
                ?>
            </div>
        </div>
    </div>
</body>
</html>