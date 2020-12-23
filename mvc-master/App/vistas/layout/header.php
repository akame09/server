<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
</head>

<body>
    <div class="container" id="titu">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <h3 class="col-md-12 text-center">UNIVERSIDAD DE HUANUCO</h3>
                    </div>
                </nav>
            </div>
        </div>
    <style> 
        .navbar-light{
            background: red;
            color: white; 
            font-family: cursive;
        }
    </style>

<div class="row">
    <div class="col">
        <ul class="nav flex-column nav-tabs nav-pills">
                <?php 
                    echo "<br><br><li class='nav-item'>
                                <a class='nav-link' href='index.php?bienvenido'>Inicio</a>
                        </li><br>";
                    switch ($_SESSION["tipo"]) {
                        case "profesor":
                            echo "
                                <li class='nav-item'>
                                    <a class='nav-link' href='#'>Ver cursos a cargo</a>
                                </li><br>";
                            break;

                        case "estudiante":
                            echo "
                                <li class='nav-item'>
                                    <a class='nav-link' href='#'>Ver Notas</a>
                                </li><br>
                                <li class='nav-item'>
                                    <a class='nav-link ' href='#'>Ver Matricula</a>
                                </li><br>";
                            break;
                        
                        case "administrador":
                            echo "
                                <li class='nav-item'>
                                    <a class='nav-link' href='index.php?crear-usuario'>Crear Usuarios</a>
                                </li><br>
                                <li class='nav-item'>
                                    <a class='nav-link ' href='index.php?crear-plan'>Crear Plan de Estudios</a>
                                </li><br>
                                <li class='nav-item'>
                                    <a class='nav-link' href='index.php?asignar-curso'>Asignar Cursos</a>
                                </li><br>";
                            break;
                    }

                    echo "
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <li class='nav-item' >
                        <center>
                            <a class='nav-link active' href='logout.php'>Salir</a>
                        <center>
                    </li>";
                ?>
        </ul>
</div>
<div class="col-8">
