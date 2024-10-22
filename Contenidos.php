<?php
class Contenidos{
    //atributos
    private $id;
    private $textocorto;
    private $textolargo;
    private $clases;
    private $source;
    private $tipo;
    private $id_articulo;
    

    // Metodos de encapsulamiento
    function set_error($errorP) {
        $this->error = $errorP;
    }
    function get_error() {
        return $this->error;
    }


    function set_id($idP) {
        $this->id = $idP;
    }
    function get_id() {
        return $this->id;
    }


    function set_textocorto($textocortoP) {
        $this->textocorto = $textocortoP;
    }
    function get_textocorto() {
        return $this->textocorto;
    }


    function set_textolargo($textolargoP) {
        $this->textolargo = $textolargoP;
    }
    function get_textolargo() {
        return $this->textolargo;
    }


    function set_clases($clasesP) {
        $this->clases = $clasesP;
    }
    function get_clases() {
        return $this->clases;
    }


    function set_source($sourceP) {
        $this->source = $sourceP;
    }
    function get_source() {
        return $this->source;
    }
    

    function set_tipo($tipoP) {
        $this->tipo = $tipoP;
    }
    function get_tipo() {
        return $this->tipo;
    }

    function set_id_articulo($id_articuloP) {
        $this->id_articulo = $id_articuloP;
    }
    function get_id_articulo() {
        return $this->id_articulo;
    }
    //metodo de constructor


    function __construct() {
        $this->id = "Defaull";
        $this->textocorto = "No se que tiene";
        $this->textolargo = "No se que tiene";
        $this->clases = "No se que tiene";
        $this->source = "No se que tiene";
        $this->tipo = "No se que tiene";
        $this->id_articulo = "No se que tiene";
    
    }

    //metodo de destruccion
    function __destruct(){

    }

    //metodos


    /*
    function convertirFecha($fechaP){
        setsocale(LC_ALL, 'Spanish_Mexico.UTF-8');
        $miFecha = strfotime($fechaP);
        $fecha0 = strfotime("%A"$fechaP);
        $fecha1 = strfotime(", %d de %B del %Y", $fechaP);
        $fecha = ucwords($fecha0).$feha1;
        return $fecha;
    }
    */

    
    function deleteArticulo($idArticuloP)
    {
        include 'conn.php';
        $stmt = $conn -> prepare("DELETE FROM articulo WHERE id_articulo = ?");
        $stmt -> bind_param("i", $idArticuloP);

        $stmt -> execute();
        var_dump($stmt);
        if($stmt->affected_rows>0)
        {
            $lastid=$stmt->insert_id;
            $stmt->close();
            $conn->close();
            header("Location: index.php?mensaje=Articulo con id: ".$idArticuloP." se elimino exitosamente");
            exit();
        }
        else
        {
            $stmt->close();
            $conn->close();
            header("Location: index.php?mensaje=Error");
            exit();
        }
        
    }

    function updateArticulo($idArticuloP, $imgP, $tituloP, $descripcionP)
    {
        include 'conn.php';
        $stmt = $conn -> prepare("UPDATE articulo SET img = ?, titulo = ?, descripcion = ? WHERE id_articulo = ?");
        $stmt -> bind_param("sssi", $imgP, $tituloP, $descripcionP, $idArticuloP);

        $stmt -> execute();
        var_dump($stmt);
        if($stmt->affected_rows>0)
        {
            $lastid=$stmt->insert_id;
            $stmt->close();
            $conn->close();
            header("Location: index.php?mensaje=Articulo con id: ".$idArticuloP." se modifico exitosamente");
            exit();
        }
        else
        {
            $stmt->close();
            $conn->close();
            header("Location: index.php?mensaje=Error");
            exit();
        }
        
    }

    function setArticulo($imgP, $tituloP, $descripcionP)
    {
        include 'conn.php';
        $stmt = $conn -> prepare("INSERT INTO articulo (id_articulo, img, titulo, descripcion) VALUES (NULL, ?, ?, ?)");
        $stmt -> bind_param("sss", $imgP, $tituloP, $descripcionP);

        $stmt -> execute();
        var_dump($stmt);
        if($stmt->affected_rows>0)
        {
            $lastid=$stmt->insert_id;
            $stmt->close();
            $conn->close();
            header("Location: index.php?mensaje=Articulo con id: ".$lastid." se creo exitosamente");
            exit();
        }
        else
        {
            $stmt->close();
            $conn->close();
            header("Location: index.php?mensaje=Error");
            exit();
        }
        
    }

    function getContenido($idArticuloP){
        include 'conn.php';
        $sql="SELECT * FROM contenido WHERE id_articulo =".$idArticuloP;
        $result = $conn->query($sql);
        if($result->num_rows >0){
            while($row=$result->fetch_assoc())
            {
                switch($row['tipo'])
                {
                    case 1:
                        echo'
                        <div class="'.$row["clases"].'">
                            <img src="'.$row["source"].'">
        
                        </div>
                        ';
                    break;
                    default;

                    case 2:
                        echo'
                        <div id="titulo" class="'.$row["clases"].'">
                            <h1>'.$row["textocorto"].'</h1>

                        </div>
                        ';
                    break;

                    case 3:
                        echo'


                            <div class="'.$row["clases"].'">
                                <p class="">
                                    '.$row["textolargo"].'
                                </p>
                            </div>
                        

                        
                        
                        ';
                    break;

                    case 4:
                        echo'
                        <div class=" '.$row["clases"].'">
                            <iframe width="100%" height="315" src="'.$row["source"].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>
                        ';

                    break;
                    
                    case 5:
                        echo'
                        <div id="titulo" class="'.$row["clases"].'">
                            <h2>'.$row["textocorto"].'</h2>
    
                        </div>
                        ';
                    break;

                    

                    case 6:
                        echo'
                        <div class="'.$row["clases"].'">
                            '.$row["textolargo"].'
                        </div>
                        ';
                    break;


                }
            }
        }

        $conn->close();
    }

    function getContenidoInfo($idContenidoP){
        include 'conn.php';
        $sql="SELECT * FROM contenido WHERE id_contenido=". $idContenidoP;
        $result = $conn->query($sql);

        if($result-> num_rows > 0)
        {
            while($row = $result->fetch_assoc()){

                $this->id = $row['id_contenido'];
                $this->textocorto = $row['textocorto'];
                $this->textolargo = $row['textolargo'];
                $this->clases = $row['clases'];
                $this->source = $row['source'];
                $this->tipo = $row['tipo'];
                $this->id_articulo = $row['id_articulo'];
                $this->error=false;
            }

        }
        else
        {
            $this->id = 0;
            $this->textocorto = "";
            $this->textolargo = "";
            $this->clases = "";
            $this->source = "";
            $this->tipo = "";
            $this->id_articulo = 0;
            $this->error=true;
        }

        $conn->close();

    }



    //TABLA CONTENIDOS
    function tablaAdminContenidos($idArticulo){
        include 'conn.php';
        $sql="SELECT * FROM contenido WHERE id_articulo =" .$idArticulo;
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){


                
                
                echo'
                    <tr>
                        <td>'.$row["id_contenido"].'</td>
                        <td>'.$row["tipo"].'</td>
                        <td>'.$row["id_articulo"].'</td>
                        
                        <th><div><a href="modificar-contenido.php?id='.$row["id_contenido"].'" class="btn btn-warning">Modificar</a></div></th>
                        <th><div><a href="eliminar-contenido.php?id='.$row["id_contenido"].'" class="btn btn-danger">Eliminar</a></div></th>
                        
                    </tr>
            
                ';

            }
        }
        else{
            
        }
    
        $conn->close();
    }

    function mostrarArticulos(){
        include 'conn.php';
        $sql="SELECT * FROM articulo";

        
    
        $result = $conn->query($sql);
        
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){


                echo'
                <div class="col-lg-3 mb-3 mt-3">
                    <div class="card col-12 offset-0">
                        <img class="card-img-top pt-3 ps-3 pe-3" src="'.$row["img"].'" alt="Card image">
                        <div class=" row card-body">
                            <h4 class="card-title">'.$row["titulo"].'</h4>
                            <p class="card-text">'.$row["descripcion"].'</p>
                            <a href="articulo.php?id='.$row["id_articulo"].'" class="btn btn-primary">Visitar</a>
                        </div>

                    </div>

                </div>
                ';



                
            }
        }
        else{
            
        }
    
        $conn->close();
    }

}


?>