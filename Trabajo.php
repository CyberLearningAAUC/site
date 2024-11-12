<?php

$conex=mysqli_connect ('bqlhak8mcqgqahqkabgh-mysql.services.clever-cloud.com', 'uuyefzreobfuk5nj', 'xHWIV3hZklNeBkToDC0M', 'bqlhak8mcqgqahqkabgh'); 

?>

<!DOCTYPE html>

<html> 
    
    <head>

        <title>Datos de Pedidos</title>
        <meta charset="utf-8">
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

            #reta {
                border: none;
                background-color: rgba(255, 255, 255, 0.295);
                backdrop-filter: blur(14px);
                border-radius: 10px;
                max-width: 800px;
                margin: 0 auto;
                margin-top: 140px;
                padding: 7px;
                box-shadow: 0 0 20px rgba(17, 17, 17, 0.466);
                scale: 1.2;
            }

            .main td {
                border: 2px solid rgb(78, 34, 21);
                border-radius: 10px;
                padding: 15px;
                min-width: 100px;
                text-align: center;
                background-color: rgba(78, 34, 21, 0.404);
            }

            td {
                border: 2px solid rgb(78, 34, 21);
                border-radius: 10px;
                padding: 15px;
                min-width: 100px;
                text-align: center;
            }

            .descripción {
                max-width: 200px;
            }
        </style>

    </head> 

    <body>
        
                <table border="1" id="reta">

                    <tr class="main">

                        <td>Nombres</td>

                        <td>Número</td> 
                        
                        <td>Producto</td>

                        <td>Tipo de madera</td>

                        <td class="descripción">Descripción</td>

                    </tr>

                    <?php

                        $sql="SELECT * from datos";
                        $result=mysqli_query($conex, $sql);

                        while($mostrar=mysqli_fetch_array($result)){
                    

                    ?>

                    <tr>
                        
                        <td><?php echo $mostrar['nombres'] ?></td>
                        
                        <td><?php echo $mostrar['numero'] ?></td>

                        <td><?php echo $mostrar['producto'] ?></td>

                        <td><?php echo $mostrar['tipo-madera'] ?></td>
                        
                        <td><?php echo $mostrar['descripción'] ?></td>

                    </tr> 

                    <?php

                        }

                    ?>

                </table>

            


    </body> 

</html>