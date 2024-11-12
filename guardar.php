<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido personalizado</title>
</head>

<style>
    
    body {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url(Background.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed; 
        font-weight: lighter;
    }

    .php {
        width: 440px;
        margin: 0 auto;
        margin-top: 50px;
        padding: 35px;
        background-color: rgba(255, 255, 255, 0.295);
        backdrop-filter: blur(14px);
        border: 0px solid #000000;
        box-shadow: 0 0 20px rgba(20, 20, 20, 0.363);
        border-radius: 17px;
        font-size: 17px;
        text-align: center;
    }

    .goback {
        width: 340px;
        margin: 0 auto;
        margin-top: 50px;
        padding: 35px;
        background-color: rgba(255, 255, 255, 0.295);
        backdrop-filter: blur(14px);
        border: 0px solid #000000;
        box-shadow: 0 0 20px rgba(20, 20, 20, 0.363);
        border-radius: 17px;
        font-size: 17px;
        text-align: center;
    }
        
    button {
        background-color: rgba(78, 34, 21, 0.774);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: .5s ease;
    }


    button:hover {
        background-color: rgba(71, 31, 18, 0.493);
    }

    
</style>

<body>

    <div class="php">
        <?php
        // Configuración de la conexión a la base de datos
        $servername = "bqlhak8mcqgqahqkabgh-mysql.services.clever-cloud.com";
        $username = "uuyefzreobfuk5nj";
        $password = "xHWIV3hZklNeBkToDC0M";
        $dbname = "bqlhak8mcqgqahqkabgh";

        // Crear la conexión 
        $coon = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión 
        if ($coon->connect_error) {
            die("Error de conexión: " . $coon -conect_error);
        }

        // Obtener los datos del formulario 
        $Nombre = $_POST['nombres'];
        $Número  = $_POST['numero'];
        $Producto  = $_POST['producto'];
        $TipoM  = $_POST['tipo-madera'];
        $Descripción = $_POST['descripción'];


        $sql = "INSERT INTO datos(`nombres`, `numero`, `producto`, `tipo-madera`, `descripción`) 
        VALUES('$Nombre', '$Número', '$Producto', '$TipoM', '$Descripción')";

        if ($coon->query($sql) === TRUE) {
            echo "Pronto le enviaremos el precio estimado";
        } else {
            echo "Código de error: " . $coon->error;
        }

        $coon->close();
        ?>
    </div>

    <div class="goback">
        <a href="index.html">
            <button>
                Volver al inicio
            </button>
        </a>
    </div>
</body>
</html>
