<?php
include '../Articulos.php';
$articulo = new Articulos();

if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
else{
    $id = "";
}

$articulo -> getArticuloInfo($id);
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
                    <div class="col-lg-2 col-2 pt-4 pt-lg-4 mt-5 offset-5 offset-lg-5">
                        
                        <h1 class="textoagradecimiento">ELIMINAR</h1>
                        

                    </div>
                
                </div>
                
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4 col-10 pt-4 pt-lg-4 mt-4 offset-1 offset-lg-4">
                <h2>Ten cuidado al Eliminar los articulos</h2>
                <h4>Ya que se elimna junto con su contenido</h4>

            </div>

        </div>

        <div id="lugares galeria" class="container" >

            <div class="row container col-lg-6 offset-lg-3 pt-5">
                
                <form action="script-eliminar-articulo.php" method="get">
                    <h1>SEGURO QUE DESEA ELIMINAR?<h1>

                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $articulo->get_id() ?>">
                   

                    <div class="row pt-2">
                        <div class="col-4 pt-3">
                            <a  class="btn btn-warning w-100 mt-3" href="index.php">Cancelar</a>
                        </div>

                        <div class="col-4 offet-1 pt-3">
                            <button type="submit" class="btn btn-danger w-100 mt-3">ELIMINAR</button>
                        </div>

                    </div>

                    
                </form>
            </div>
        

        </div>

    

    </div>

    <?php include 'copyr.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>