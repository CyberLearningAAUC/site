<!DOCTYPE html>
<html>

    <head>
        
        <title>Pedido personalizado</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="el_css_azulkkk.css">
        
    </head>

    <script>
        function limitarLongitud(input) {
            if (input.value.length > 10) {
                input.value = input.value.slice(0, 10); 
            }
        }
        
    </script>

    <body>
        <form method="post" action="guardar.php">
            <p>

            <h2>Pedido personalizado</h2>

            </p>

            <p>

                <input type="text" id="name" name="nombres" placeholder="Nombre del usuario" required/>

            </p>
            <p>

                <input type="number" id="Número" name="numero" oninput="limitarLongitud(this)" placeholder="Número de contacto" required/>

            </p>


                <div class="subtitle">Producto</div>

                <div class="select-producto"> 

                    
                    <input type="radio" id="silla" name="producto"  value="silla" required>
                    <label for="silla">Silla</label>

                    
                    <input type="radio" id="repisa" name="producto"  value="repisa" required>
                    <label for="repisa">Repisa</label>

                    
                    <input type="radio" id="escritorio" name="producto"  value="escritorio" required>
                    <label for="escritorio">Escritorio</label>

                    
                    <input type="radio" id="cama" name="producto"  value="cama" required>
                    <label for="cama">Cama</label>

                </div>


            <p>

                <div class="subtitle">Tipo de madera</div>   

                <div class="select-tipo-madera"> 

                    
                    <input type="radio" id="roble" name="tipo-madera"  value="roble" required>
                    <label for="roble">Roble</label>

                    
                    <input type="radio" id="álamo" name="tipo-madera"  value="álamo" required>
                    <label for="álamo">Álamo</label>

                    
                    <input type="radio" id="ébano" name="tipo-madera"  value="ébano" required>
                    <label for="ébano">Ébano</label>

                    
                    <input type="radio" id="cerezo" name="tipo-madera"  value="cerezo" required>
                    <label for="cerezo">Cerezo</label>

                </div>
               
            </p>

            
            <p>

                
                <textarea maxlength="100" name="descripción" id="Descripción" placeholder="Describa detalladamente su pedido" required></textarea>
                

            </p>


            <input type="submit" value="Enviar" />

        </form>   
        
    </body>

</html>