<?php

if($_SESSION["estado"]!="ok"){
    header("location: index.php");
}
include_once "app/vistas/layout/header.php";
echo "<br><h1 class='col-md-12 text-center dark'>Hola ".$_SESSION["nombres"]."</h1>";
echo "<p class='col-md-12 text-center dark'>Usted es un ".$_SESSION["tipo"]."</p>
    
    <style>
    .dark{
        font-family: cursive;
    }
    </style>";
include_once "app/vistas/layout/footer.php";

                        