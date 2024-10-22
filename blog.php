<?php
include 'Articulos.php';
$articulo = new Articulos();
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
            <div class="row col-lg-10 col-10 pt-4 pt-lg-4 mt-0 offset-1 offset-lg-1 justify-content-center">
                <h2 class="textoagradecimiento">Gracias por tomar en cuenta nuestra pagina</h2>
                <h4 class="textoagradecimiento">Sabemos lo dificil que es escoger lugar a donde viajar, pero nosotros te hacemos el trabajo mas sencillo</h4>

            </div>
            
        </div>

    </div>

    <div id="lugares galeria" class="container-fluid">

        <div class="row">
            <?php
                $articulo->mostrarArticulos();
            ?>
            

        </div>
       

    </div>

   

  
    <?php include 'copyr.php'; 
    
    
    ?>
   
    
    
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>