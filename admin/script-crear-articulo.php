<?php
include '../Articulos.php';
$articulo=new Articulos();
//img
if(isset($_GET['img']))
{
    $img=$_GET['img'];
}
else{
    $img = "";
}

//titulo
if(isset($_GET['titulo']))
{
    $titulo=$_GET['titulo'];
}
else{
    $titulo = "";
}

//descripcion
if(isset($_GET['descripcion']))
{
    $descripcion=$_GET['descripcion'];
}
else{
    $descripcion = "";
}

$articulo->setArticulo($img, $titulo, $descripcion);
?>