<?php
include '../Articulos.php';
$contenido = new Articulos();

if(isset($_GET['id_cont']))
{
    $idcontenido=$_GET['id_cont'];
}
else{
    $idcontenido = "";
}

if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
else{
    $id = "";
}
$contenido -> getContenidoInfo($idcontenido);
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

        <div class="row col-lg-4 col-10 pt-4 pt-lg-5 mt-4 offset-1 offset-lg-4">
            <div class="">
                <h2>Ten cuidado al Eliminar los contenido</h2>
                

            </div>

        </div>

        <div id="lugares galeria" class="container">

            <div class="row container col-lg-8 offset-lg-2 pt-5">
                
                <form action="script-eliminar-contenido.php" method="get">
                    <h1 class="offset-lg-1 ">SEGURO QUE DESEA ELIMINAR?<h1>

                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $contenido->get_id() ?>">
                    <input type="hidden" class="form-control" id="id_cont" name="id_cont" value="<?php echo $contenido->get_idcontenido() ?>">
                   

                    <div class="row mt-4">
                        <div class="col-4 mt-3 pt-1">
                            <a  class="btn btn-warning w-100 mt-3 offset-lg-4" href="contenido.php">Cancelar</a>
                        </div>

                        <div class="col-4 offet-2 mt-3 pt-1">
                            <button type="submit" class="btn btn-danger w-100 mt-3 offset-lg-4">ELIMINAR CONTENIDO</button>
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