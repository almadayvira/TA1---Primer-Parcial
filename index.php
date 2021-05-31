<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form id="datos" action="./formulario.php" method="post">
    Nombre <input  name="nombre" id="nombre">
    <br>
    Apellido <input  name="apellido" id="apellido">     
    <br>
    Telefono <input name="telefono" id="telefono"> 
    <br>    
    Edad <input name="edad" id="edad"> 
    <br>    
    Fecha de nacimiento <input  name="edad" id="fecha_nac"> 
    <br>    
    Email <input name="email" id="email"> 
    <br>
    <br>
    <button type="submit" onclick="enviar()">Visualizar</button>
    </form>


    <script>
        function enviar(){
            var nombre = document.getElementById("nombre").value;
            var apellido = document.getElementById("apellido").value;
            var telefono = document.getElementById("telefono").value;
            var edad = document.getElementById("edad").value;
            var fecha_nac = document.getElementById("fecha_nac").value;
            var email = document.getElementById("email").value;
            document.getElementById("datos").submit();
            }
    </script>
</html>