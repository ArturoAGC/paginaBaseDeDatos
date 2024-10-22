<?php
include '../Articulos.php';
$contenido = new Articulos();
if(isset($_GET['mensaje']))
{
    $mensaje=$_GET['mensaje'];
}
else{
    $mensaje = "";
}

if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
else{
    $id = 0;
}

if(isset($_GET['id_cont']))
{
    $idconteniedo=$_GET['id_cont'];
}
else{
    $idcontenido = 0;
}

$contenido->getArticuloInfo($id);
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>

    <?php include 'encabezado.php'; ?>
    
</head>

<body class="general" id="Somos">
    <div>

        <?php include 'navbar.php'; ?>
        

        <div id="palabras de los creadores">
            <div class="container-fluid contenedoragradecimiento align-items-cente">
                <div class="row">
                    <div class="col-lg-4 col-4 pt-4 pt-lg-4 mt-4 offset-4 offset-lg-4 ">
                        
                        <h1 class="textoagradecimiento">Tabla Contenido del articulo <?php echo $contenido->get_id();?></h1>
                        <a href="index.php" class="btn btn-warning offset-4 offset-lg-4">Regresar</a>

                    </div>
                
                </div>
                
            </div>
            

        </div>



        <div id="lugares galeria" class="container-fluid">

            <div class="row container-fluid ">
                <h2 class="mt-3"><?php echo $mensaje;?></h2>

                <table class="table table-dark table-striped mt-5 col-4 col-lg-5">
                    <thead>
                    <tr>
                        <th>id_contenido</th>
                        <th>textocorto</th>
                        <th>textolargo</th>
                        <th>clases</th>
                        <th>source</th>
                        <th>tipo</th>
                        <th>orden</th>
                        <th>id_artirculo</th>
                        <th></th>
                        <th></th>
                        
                    </tr>
                    </thead>
                    <tbody>

                        
                        <?php
                            $contenido->tablaAdminContenidos($id);
                            
                        ?>

                    </tbody>
                </table>
                <a href="crear-contenido.php?id=<?php echo $id;?>" class="btn btn-info">Crear nuevo contenido</a>

            </div>
        

        </div>

    

    
        
   
    
    
    </div>

    <?php include 'copyr.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>