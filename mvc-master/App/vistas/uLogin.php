<?php
    use App\Controladores\ControladorUsuario;
    include_once "includes/autoload.php";
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">      
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background-color:white">
            <nav class="d">
            <br><br><br>
            </nav>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" style="background-color:white">
            <nav class="d">
                
            </nav>
        </div>
        <div class="col-md-6">
            <h1 class="text-center">Login</h1><br><br>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="sad">
                        <h3>Codigo</h3>
                        <input class="form-control" type="text" name="codigo" placeholder="Ingrese su codigo"><br>
                    </div>
                </div>  
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="sad">
                        <h3>Password</h3>
                        <input class="form-control" type="password" name="pass" placeholder="Ingrese su contraseña"><br><br>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 text-center">
                    <input class="btn btn-danger btn-lg"  type="submit" name="submit" value="Iniciar Sesion">
                </div>
            </div> 
            <style>
                .text-center{
                    font-family: cursive;
                }
                .sad{
                    font-family: cursive;
                }
            </style>              
        </div>
        <div class="col-md-3" style="background-color:white">
            <nav class="d">
                
            </nav>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background-color:white    ">
            <nav class="d">
            <br><br><br>
            </nav>
        </div>
    </div>
</div>
</form>
<?php
    if(isset($_POST["submit"])){
        $codigo = (int) $_POST["codigo"];
        $password = $_POST["pass"];
        $controladorUsuario = new ControladorUsuario();
        $controladorUsuario->login($codigo, $password);
    }