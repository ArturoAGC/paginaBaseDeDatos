<?php
include '../Articulos.php';
$articulo = new Articulos();
if(isset($_GET['mensaje']))
{
    $mensaje=$_GET['mensaje'];
}
else{
    $mensaje = "";
}
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
                    <div class="col-lg-4 col-2 pt-2 pt-lg-4 mt-5 offset-5 offset-lg-5 ">
                        
                        <h1 class="textoagradecimiento">Tabla Articulos</h1>
                        

                    </div>
                
                </div>
                
            </div>
            

        </div>


        <div id="lugares galeria" class="container-fluid">

            <div class="row container-fluid">
                <h2 class="mt-3"><?php echo $mensaje;?></h2>
                <table class="table table-dark table-striped mt-5">
                    <thead>
                    <tr>
                        <th>id_articulo</th>
                        <th>img</th>
                        <th>titulo</th>
                        <th>Descrpcion</th>
                        <th></th>
                        <th> </th>
                        <th> </th>
                        <th> </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $articulo->tablaAdminArticulos();
                        ?>
                        
                    </tbody>
                </table>
                <a href="crear-articulo.php" class="btn btn-info">Crear nuevo articulo</a>

            </div>
        

        </div>

    

    
        
   
    
    
    </div>

    <?php include 'copyr.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>