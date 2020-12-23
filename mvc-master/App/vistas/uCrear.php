<?php
declare(strict_types=1);
include_once "app/vistas/layout/header.php";

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="well well-sm">
                    <form method="post" action="index.php?guardar-usuario" class="form-horizontal">
                        <fieldset>
                            <div class='row'>
                                <div class='col'>
                                    <nav class='navbar navbar-sad'>
                                        <div class='container-fluid'>
                                            <h3 class='col-md-12 text-center'>Crear Usuarios</h3>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <style> 
                                .navbar-sad{ 
                                    font-family: cursive;
                                }
                            </style>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="nombres" placeholder="Ingrese nombres"><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="apellidos" placeholder="Ingrese apellidos"><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="codigo" placeholder="Ingrese Codigo/DNI"><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input class="form-control" type="password" name="password" placeholder="Ingrese Contraseña"><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                <select name="tipo" class="form-control">
                                    <option value="estudiante">Estudiante</option>
                                    <option value="profesor">Profesor</option>
                                    <option value="administrador">Administrador</option>
                                </select><br>
                                </div>
                            </div>  
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <input class="btn btn-danger btn-lg"  type="submit" name="submit" value="Guardar">
                                </div> 
                            </div>
                        </fieldset>
                    </form> 
                </div>
            </div>
        </div>
    </div>
<?php
if(isset($_POST["submit"])){
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $codigo = (int)$_POST["codigo"];
    $password = $_POST["password"];
    $tipo = $_POST["tipo"];

    $controladorUsuario = new ControladorUsuario();
    echo $controladorUsuario->crearUsuario($nombres, $apellidos, $codigo, $password, $tipo);
}

include_once "app/vistas/layout/footer.php";

