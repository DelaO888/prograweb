<?php
 $conexion = mysqli_connect('localhost', 'root','', 'progweb');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion de datos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
crossorigin="anonymous"></script>


<style>
    .contenedor{
    width: 30%;
    padding: 15px;
    border: 1px solid #aaa;
}
    .formulario{
    background: #fff;
    margin-top: 200px;
    margin-left: 600px;
    padding: 3px;
}
#registrar{
    margin-left: 30%;
}

input{
    height: 40px;
}
</style>

</head>
<body>

<form class="formulario" method=post action="registroBD.php">

        <h1 id="">Registro Lector (comentario)</h1>
        <div class="contenedor">

        <div class="input-contenedor">
             <input type="text" placeholder="Nombre" name="nombre">     
           </div> 
           <br>
           <div class="input-contenedor">
             <input type="text" placeholder="Apellidos" name="apellidos">     
           </div> 
           <br>
           <div class="input-contenedor">
             <input type="text" placeholder="correo" name="correo">     
           </div>
           <br>
           <div class="input-contenedor">
             <input type="number" placeholder="Edad" name="edad">     
           </div> 
           <br>
            <div class="input-contenedor">
             <input type="text" placeholder="Tema de interes" name="tema_interes">
            </div>
            <br>
         <input type="submit" value="Registrarse" class="button btn-primary" name="registrar" id="registrar">
         <br>
         <label><input type="checkbox" id="cbox1" value="first_checkbox"> Acepto terminos y condiciones</label><br>
         <a id="btn-abrir-popup" class="search">Leer términos y condiciones </a>



       















     </div>
    </form>
    
</body>
</html>