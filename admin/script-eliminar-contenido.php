<?php
include '../Articulos.php';
$contenido=new Articulos();


//id
if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
else{
    $id = "";
}


if(isset($_GET['id_cont']))
{
    $idcontenido=$_GET['id_cont'];
}
else{
    $idcontenido = "";
}

$contenido->deleteContenido($id, $idcontenido);
?>