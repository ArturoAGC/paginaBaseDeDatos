<?php
include '../Articulos.php';
$contenido = new Articulos();

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
}
else{
    $id = "";
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
                    <div class="col-lg-3 col-8 pt-4 pt-lg-4 mt-5 offset-2 offset-lg-5">
                        
                        <h1 class="textoagradecimiento">Crear Contenido</h1>
                        
                        

                    </div>
                
                </div>
                
            </div>

        </div>

        <div class="mt-3 row container  col-10 offset-1 col-lg-7 offset-lg-3">
            <div class="">
                <h2 class=" col-md-8 offset-md-2">¿Como se puede crear un contenido?</h2>
                <p class=" col-md-8 offset-md-2">Da click en el boton si deseas instrucciones.</p>
                <button type="button" class="btn btn-primary mt-lg-1 mt-1 col-md-2 offset-md-2" data-bs-toggle="collapse" data-bs-target="#demo">Instrucciones</button>
                <div id="demo" class="collapse">
                    <p class="mt-4">Primero que nada, elige un "Tipo" de aqui parte todo lo demas.</p>

                    <h3>¿Que se llena en cada tipo?</h3>
                    <p>
                        -Tipo 1: Imagenes -> Solo llenar la seccion "Poner Video/Imagenes" y la seccion "Poner Clases" <br>
                        -Tipo 2: Titulo -> Solo llenar la seccion "Poner Titulo/Subtitulo" y la seccion "Poner clases"<br>
                        -Tipo 3: Texto -> Solo llenar la seccion "Poner Parrafo" y la seccion de "Poner clases"<br>
                        -Tipo 4: Video -> Solo llenar la seccion "Poner Video/Imagen" y la seccion "Poner clases"<br>
                        -Tipo 5: Subtitulo -> Solo llenar la seccion "Poner Titulo/Subtitulo" y la seccion "Poner clases"<br>
                        -Tipo 6: Html -> Solo llenar la seccion "Poner Parrafo" y la seccion "Poner clases" <br>
                        (Llenar las secciones obligatoriamente en cada tipo como se te indica)<br>

                    </p>

                    <h3>¿Como son los formatos?</h3>
                    <p>
                        -Tipo: Digitos (numeros)<br>
                        -Titulo/Subtitulo: characteres<br>
                        -Parrafo: characteres<br>
                        -Video/Imagenes: characteres<br>
                        -Clases: characteres y Digitos<br>
                        -Orden: Digitos<br>

                    </p>

                    <h3>¿Como se usa y cuales son las reglas?</h3>
                    <p>
                        -Seccion Tipo: Este te dice que tipo de contenido vas a insertar y tambien la secciones que necesitas llenar <br>
                        -Seccion Titulo/Subtitulo: Se usa para escribir titulos o subtitulos como su nombre lo indica<br>
                        -Seccion Parrafo: Se usa para escribir un texto mas largo o para usar simplemente HTML<br>
                        -Seccion Clases: Esta se usa para escribir las clases depediendo de tu gusto y de lo que necesitas, un ejemplo este formulario tiene la clase(col-md-6 offset-md-3 col-lg-4 offset-lg-4)<br>
                        -Seccion Video/Imagen: Esta se usa para poner el url del video o el directorio de la imagen deseada <br>
                        -Seccion Orden: Se usa para colocar la informacion en el orden que deseeas <br>
                        (Si necesitas ejemplos se encuentran a un lado del formulario)
                        

                    </p>


                </div>

                <button type="button" class="btn btn-primary mt-lg-1 mt-1 col-md-2 offset-md-0" data-bs-toggle="collapse" data-bs-target="#demo2">Ejemplos de tipos</button>
                <div id="demo2" class="collapse">
                    

                    <h3 class="mt-5">Ejemplo de tipos</h3>
                    

                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/Tipo1Pueblos-magicos-Bacalar.jpg">
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/tipo2titulo.png">
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/Tipo3parrafo.png">
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/Tipo3parrafo.png">
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/Tipo4video.png">
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/Tipo5subtitulo.png">
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/Tipo6html.png">


                </div>

                <button type="button" class="btn btn-primary mt-lg-1 mt-1 col-md-2 offset-md-0" data-bs-toggle="collapse" data-bs-target="#demo3">Ejemplos para llenar</button>
                <div id="demo3" class="collapse">
                    

                    <h3 class="mt-5">Ejemplo de como llenar</h3>
                    
                    <h4 class="mt-5">Ejemplo como llenar tipo</h4>
                    <img class="pt-4 pt-lg-4 mt-4 col-0 offset-0 col-lg-6 offset-lg-3" src="img/seleccionarTipo.png">

                    <h4 class="mt-4">Ejemplo como llenar Titulo/Subtitulo</h4>
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/titulo-subtitulo.png">
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/titulo-subtitulollenado.png">

                    <h4 class="mt-4">Ejemplo como llenar Parrafo</h4>
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/ponerparrafo.png">
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/parrafollenado.png">

                    <h4 class="mt-4">Ejemplo como llenar HTML</h4>
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/ponerparrafo.png">
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/htmlllenado.png">

                    <h4 class="mt-4">Ejemplo como llenar Clases</h4>
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/clases.png">
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/clasesllenado.png">

                    <h4 class="mt-4">Ejemplo como llenar Video/Imagen</h4>
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/video-imagenxd.png">
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/videollenado.png">
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/imagenllenado.png">

                    <h4 class="mt-4">Ejemplo como llenar Orden</h4>
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/orden.png">
                    <img class="pt-4 pt-lg-4 mt-4 col-12 offset-0 col-lg-6 offset-lg-3" src="img/ordenllenado.png">


                </div>
            </div>
            
        </div>

        

        <div id="lugares galeria" class="container mt-5">
            

            <div class="row container col-md-8 offset-md-2">

                <h3>Crea tu contenido</h3>
                
                <form action="script-crear-contenido.php" method="get">
                <input type="hidden" class="form-control " id="id" name="id" value="<?php echo $id; ?>">

                    <div class="mb-3 mt-3">
                        
                        
                       
                        <select type="text" class="form-select" id="tipo" placeholder="Poner tipo" name="tipo" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                    </div>

                    <div class="mb-3 mt-3">
                        
                        <input type="text" class="form-control" id="textocorto" placeholder="Poner Titutulo/Subtitulo" name="textocorto" >
                    </div>

                    <div class="mb-3">
                        
                        <label for="comment">Poner Parrafo:</label>
                        <textarea class="form-control" rows="5" id="textolargo" name="textolargo" ></textarea>
                    </div>

                    <div class="mb-3">
                        
                        <input type="text" class="form-control" id="clases" placeholder="Poner clases" name="clases" >
                    </div>

                    <div class="mb-3">
                        
                        <input type="text" class="form-control" id="source" placeholder="Poner Video/Imagen" name="source" >
                    </div>

                    

                    <div class="mb-3">
                        
                        <input type="text" class="form-control" id="orden" placeholder="Poner orden" name="orden"  pattern ="[0-9]+">
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