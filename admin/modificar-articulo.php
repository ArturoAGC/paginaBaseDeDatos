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
                    <div class="col-lg-2 col-2 pt-4 pt-lg-4 mt-4 offset-5 offset-lg-5">
                        
                        <h1 class="textoagradecimiento">Modi. Articulo</h1>
                        <a href="index.php" class="btn btn-warning offset-4 offset-lg-4">Cancelar</a>

                    </div>
                
                </div>
                
            </div>

        </div>

        <div class="row">
            <div class="col-lg-7 col-10 pt-4 pt-lg-4 mt-4 offset-1 offset-lg-3">
                <h2>¿Como se modifica un articulo?</h2>
                <h4>-Llena todos los datos que se te piden, de lo contrario no podras modificar el articulo</h4>
                <h4>-Las imagenes se deben de escribir de una manera en especifico</h4>
                <h4>Ejemplo: imagenBacalar.jpg</h4>

            </div>


            <div class="col-lg-6 col-10 pt-4 pt-lg-4 mt-4 offset-1 offset-lg-3">

                <img class="pt-4 pt-lg-4 mt-4" src="img/Bacalarejemplo.png">

            </div>

            

        </div>

        <div id="lugares galeria" class="container">

            <div class="row container col-md-8 offset-md-2 pt-4 pt-lg-4 mt-4">
                
                <form action="script-modificar-articulo.php" method="get">

                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $articulo->get_id() ?>">
                    <div class="mb-3 mt-3">
                        
                        <input type="text" class="form-control" id="img" placeholder="img Principal" name="img" value="<?php echo $articulo->get_img() ?>"required>
                    </div>

                    <div class="mb-3">
                        
                        <input type="text" class="form-control" id="titulo" placeholder="Poner titulo" name="titulo" value="<?php echo $articulo->get_titulo() ?>"required>
                    </div>

                    <div class="mb-3">
                        <label for="comment">Descripcion:</label>
                        <input type="text" class="form-control" id="descripcion" placeholder="Poner descripcion" name="descripcion" value="<?php echo $articulo->get_descripcion() ?>"required>
                    </div>

                    

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        

        </div>

    

    </div>

    <?php include 'copyr.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>