<form method="post" action="<?=$_SERVER["PHP_SELF"]?>" class="form-horizontal">
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

<?php
if (!empty($_POST)) {
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $codigo = $_POST["codigo"];
    $password = $_POST["password"];
    $tipo = $_POST["tipo"];

    $ch = curl_init();
    $dataPost = array(
        "nombres"=>$nombres,
        "apellidos"=>$apellidos,
        "codigo"=>$codigo,
        "password"=>$password,
        "tipo"=>$tipo
    );

    curl_setopt($ch,CURLOPT_URL,"http:/localhost/mvc-master/index.php?api/estudiantes");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$dataPost);
    $response = curl_exec($ch);
    curl_close($ch);

    $respuesta = json_decode($response, true);
    if ($respuesta["codigo"]=="200"){
       echo "Guardado en servidor Vecino";
    }
}