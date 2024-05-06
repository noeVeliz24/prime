<html>
<head>
  
  
    <title>Formulario de registros</title>
     <link rel="stylesheet" type="text/css" href="formulario.css"/>
     <script type="text/javascript" src="jquery.js"></script>
     
</head>
<body>
<ul class="navbar">
        <li><a href="index3.html">inicio</a></li>
        <li><a href="index.html">Resumenes</a></li>
        <li><a href="index2.html">biografia</a></li>
       
        <li><a href="tienda.html">tienda</a></li>
        <li><a href="fromulario.php">formulario</a></li>
    </ul>
<body>
    <h1>TIENDA DE LIBROS</h1>
    <h2>OBTENGA UN LIBRO GRATIS</h2>
        <form action="
        
        <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email= $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $preferencia = $_POST['preferencia'];
   
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "libros";
    // Validación del correo electrónico con expresión regular
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/@.*[a-zA-Z]/', $email)) {
        echo "Correo electrónico no válido.";
        $conn->close();
        exit;
    }
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    echo '<link rel="stylesheet" type="text/css" href="inicio.css">';
 
 
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }



    $sql = "INSERT INTO datos (nombre, apellidos, correo, comentario, telefono,tipo,preferencias) VALUES ('$nombre', '$apellidos','$email', '$contraseña', '$telefono', '$sexo','$preferencia')";


     if ($conn->query($sql) === TRUE) {
        echo "Se ha registrado exitosamente";
    } else {
        echo "Error al registrar: " . $conn->error;
    }

    $conn->close();
    echo '<br><a href="index4.php"><button>Volver al Formulario</button></a>';
}
?>

        
        " method="post" onsubmit="return Validar();">
            <label>Nombre:</label><br>
            <input type="text" name="nombre" id="nombre" value="" onblur="Validar();"><br>
            <label>Apellidos:</label><br>
            <input type="text" name="apellidos" id="apellidos" value="" onblur="Validar();"><br>
            <label>correo:</label><br>
            <input type="text" name="email" id="email" value="" onblur="Validar();"><br>
            <label>Comentario:</label><br>
            <input type="text" name="contraseña" id="contraseña" value="" onblur="Validar();"><br>
            <label>Telefono:</label><br>
            <input type="text" name="telefono" id="telefono" value="" onblur="Validar();"><br>
            



            <h4>tipo</h4>
            <h5><input type="radio" name="sexo" value="novela" /> novela</h5>
            <h5><input type="radio" name="sexo" value="cuentos" /> libro</h5>

            <div class="seccion">
            <h4>Preferencias:</h4> 
            <p><input type="radio" name="preferencia" value="clasicos"/>clasico</p>
            <p><input type="radio" name="preferencia" value="nuevos"/>nuevos</p>
            <p><input type="radio" name="preferencia" value="emprendimiento"/>empredimiento</p>
            <p><input type="radio" name="preferencia" value="novelas"/>novelas</p>

           
                
                <label for="lang">GRACIAS</label>
                
                
                <div id="alert" class="alert"></div>
                <div id="alertRevisiones" class="alert"></div>

                <input type="submit" value="Enviar">
            </form>

               
                </script>
            
        </div> 
        </div>
    
</body>
    </body>
</html>