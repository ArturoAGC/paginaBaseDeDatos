<?php
    include 'Articulos.php';
    $articulo = new Articulos();
    if(isset($_GET['id']))
    {
        $idArticuloP=$_GET['id'];
    }
    else{
        $idArticuloP = 0;
    }
    $articulo->getArticuloInfo($idArticuloP);

?>
<!DOCTYPE html>
<html lang="es-MX">
  <head>
      
    <?php include 'encabezado.php'; ?>
      
  </head>

<body class="general" id="Somos">
  <div>
    

    <?php include 'navbar.php'; ?>


    <div class="row  ">

      <h1 class="col-lg-2 col-2 offset-5 offset-lg-5 mt-2">
        <?php
            
          echo $articulo ->get_titulo();
            
            
        ?>
      </h1>

      <?php
        $articulo->getContenido($idArticuloP);
      ?>
    </div>
        

  </div>

  <?php include 'copyr.php'; ?>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>