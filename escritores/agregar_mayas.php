<?php
 $conexion = mysqli_connect('localhost', 'root','', 'progweb');

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="estilos_aside.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

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
        body{
            background-color:antiquewhite;
        }
        .formulario{
            margin-left: 500px;
            background-color:antiquewhite;
        }
        h3{
            color: white;
            background-color: green;
            width: 350px;
        }
    </style>

<script type="text/javascript">
    document.getElementById('h3').innerHTML='Status:';

function presionar() {
  document.getElementById('h3').innerHTML='Status: publicado';
}
</script>


</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Alimentación</h2>
        <ul>
            <li><a href="agregar_mayas.php"><i class="fas fa-address-card"></i>Mayas</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Olmecas</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Totonacas</a></li>
        </ul>    
    </div>


    <div class="main_content">
        <div class="header">Mayas</div>
        <div class="info">
        <form class="formulario" method=post action="agregar_articuloBD.php">

<div class="contenedor">
    <h3 id="h3">Status: </h3>

<div class="input-contenedor">
<input type="number" name="idAutor" id="idAutor" value="1" readonly style="height: 50px; width:350px">     
   </div> 
 
   <div class="input-contenedor">
     <input type="text" placeholder="Nombre del Artículo" name="nombreArticulo" id="nombreArticulo" style="height: 50px; width:350px">     
   </div> 
   
   <div class="input-contenedor">
      <textarea name="descripcion" id="descripcion" placeholder="Descripción" cols="35" rows="10"></textarea>     
   </div>
 
   <div class="input-contenedor">
     <input type="text" placeholder="Categoría" name="categoria" id="categoria" style="height: 50px; width:350px">     
   </div> 
   
   <div class="input-contenedor">
     <input type="text" placeholder="Subcategoria" name="subcategoria" id="subcategoria" style="height: 50px; width:350px">     
   </div> 
  
   <div class="input-contenedor">
     <input type="text" placeholder="Imagen" name="imagen" id="imagen" style="height: 50px; width:350px">     
   </div> 
   
 <button type="submit" class="button btn-primary" name="agregar" id="agregar" onclick="presionar()" style="height: 50px; width:100px">Agregar</button>
</div>
</form>
         
      </div>
    </div>
</div>

</body>

</html>

<script type="text/javascript">
function presionar() {
  document.getElementById('h3').innerHTML='Status: publicado';
}
</script>






