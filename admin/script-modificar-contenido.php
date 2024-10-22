<?php
include '../Articulos.php';
$contenido=new Articulos();

//textocorto
if(isset($_GET["textocorto"]))
{
    $textocorto=$_GET["textocorto"];
}
else{
    $textocorto = "";
}

//textolargo
if(isset($_GET["textolargo"]))
{
    $textolargo=$_GET["textolargo"];
}
else{
    $textolargo = "";
}

//clases
if(isset($_GET["clases"]))
{
    $clases=$_GET["clases"];
}
else{
    $clases = "";
}

//source
if(isset($_GET["source"]))
{
    $source=$_GET["source"];
}
else{
    $source = "";
}

//tipo
if(isset($_GET["tipo"]))
{
    $tipo=$_GET["tipo"];
}
else{
    $tipo = "";
}

//orden
if(isset($_GET["orden"]))
{
    $orden=$_GET["orden"];
}
else{
    $orden = "";
}

//id contenido
if(isset($_GET["id_cont"]))
{
    $idcontenido=$_GET["id_cont"];
}
else{
    $idcontenido = "";
}

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
}
else{
    $id = "";
}

$contenido->updateContenido($textocorto, $textolargo, $clases, $source, $tipo, $orden, $id, $idcontenido);
?>