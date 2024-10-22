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


$articulo->updateArticulo($id, $img, $titulo, $descripcion);
?>