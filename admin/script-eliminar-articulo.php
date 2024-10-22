<?php
include '../Articulos.php';
$articulo=new Articulos();


//id
if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
else{
    $id = "";
}

$articulo->deleteArticulo($id);
?>