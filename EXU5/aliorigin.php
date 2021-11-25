<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'progweb');
$query = mysqli_query($db, "SELECT * FROM articulos WHERE categoria = 'alimentacion'");    

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/0291918543.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet"> 
    <title>Inicio</title>
</head>
<body>
    <div class="jumbotron-fluid">
        <h1 style="color: white; font-size: 50px; text-align: center; padding-bottom: 20px;">Artículos Prehispánicos</h1>
    </div>
    <div class="barra" style="position: relative; ">
        <ul>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
          <i class="fa fa-list"></i> Categorías
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <ul class="sub-menu" id="sub-menu" style="display: flex; flex-direction: column;
    list-style-type: none;">
           <li><a class="dropdown-item" href="ali.php" style="color: white;">Alimentación</a></li>
           <li><a class="dropdown-item" href="eco.php" style="color: white;">Economía</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item" href="vesti.php" style="color: white;">Vestimenta</a></li>
          </ul>
        </div>
      </li>
            <div class="search-bar">
            <input type="search" placeholder="Buscar Artículo" class="barra-buscar">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
            <?php  if (isset($_SESSION['username'])) : ?>
            <li><i class="fa fa-user" style="margin-right: 5px;" id="iniciar"></i><a href="login.php" style="color: white;">
            
    <p>
                Bienvenido
                <strong>
                    <?php echo $_SESSION['username']; ?>
                </strong>
            </p>
            </li>
            <li><i class="fa fa-user" style="margin-right: 5px;" id="cerrar"></i><a href="cerrar.php" style="color: white;">
              Cerrar Sesión
          </li>
            <?php else: ?>
              <li><i class="fa fa-user" style="margin-right: 5px;" id="iniciar"></i><a href="login.php" style="color: white;">
            Iniciar Sesión
            </li>
    <?php endif ?> 
          </a>
        </ul>
    </div>

    <div class="container text-center" style="margin-top: 250px;">
  <h2 style="margin-bottom: 50px;">Alimentación</h2>  

</div>

<div class="container-fluid text-center">

<?php
            $i = 0;
            while ($row = mysqli_fetch_array($query)) {
                ?>            
                
            <div id="cont" class="contenedor-flex text-center" style="width: 50%; margin: 0 auto;">
                <div class="imagen">
                  <img src=<?php echo $row['imagen']?> alt="alimento" style="width: 300px; height: 300px;">
                </div>
                <div class="cuerpo">
                    <h5 class="nombre"><?php echo 'Nombre: ' . $row['nombreArticulo']; ?></h5>
                    <p class="desc"><?php echo $row['descripcion']; ?></p>
                    <p class="cate"><?php echo $row['categoria']; ?></p>
                    <a href=<?php echo $row['nombreArticulo'] . '.php';?> class="btn btn-primary">Ir a página de artículo</a>
                </div>
            </div>

            <?php
            echo "<br>";
            }
            ?>

</div>
<!-- partial:index.partial.html -->
<article>
  <hr class="toprule">
  <h1>Etapa Lítica</h1>
  <p>
    <span class="drop">L</span>a historia de México empieza con la llegada de los primeros seres humanos al territorio que actualmente corresponde a ese estado nacional. El momento en que esto ocurrió y los procesos históricos que le sucedieron es objeto de debate. En comparación con otras épocas de la historia prehispánica del país, las fases que antecedieron a las sociedades sedentarias de Mesoamérica han sido poco exploradas, lo que algunos autores atribuyen a que la arqueología mexicana —desarrollada en el marco de una relación muy cercana al Estado posrevolucionario—1​ se concentró desde sus inicios a la exploración de zonas de monumentos arquitectónicos. Por esta razón, son pocos los datos y la evidencia arqueológica correspondiente a esos años, y todos son motivo de controversia.
	</p>
	
	<div align="center"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Journal.pone.0001596.g004.png/800px-Journal.pone.0001596.g004.png" width="90%" style="max-width:306px; "></div>
</article>
<style>
@import url(https://fonts.googleapis.com/css?family=Fjalla+One|Noticia+Text);

* {
	margin: 0;
	padding: 0;
}

body {
	font-size: 16px;
}

.toprule {
  background-color: #bb3900;
  border: none;
  height: 2px;
  width: 100%;
}

article {
	margin: 0 auto;
	max-width: 31rem;
	min-width: 15rem;
	width: 75%;
  top: 1.375rem; /*1.5rem - 2px horizontal rule*/
  position: relative;
}

h1 {
  color: #222;
	font-family: 'Fjalla One', 'Helvetica', sans-serif;
	font-size: 2.618rem;
	font-weight: 400;
	line-height: 0.573rem; /* 1.5rem/2.618rem */
	margin-bottom: 1.5rem;  
	margin-top: 3rem;
}

p {
	color: #444;
	font-family: 'Noticia Text', 'Georgia', serif;
	font-size: 1rem; 
	line-height: 1.5rem;
	text-indent: 2.5rem;
}

article p:first-of-type {
	margin-top: 3rem;
	text-indent: 0;
}

.drop {
  background-color: #f1f1ec;
	color: #bb3900;
	float: left;
	font-size: 2.618rem;
	margin-right: 5px;
	margin-top: .25rem;
	padding: .4rem .5rem .7rem .5rem;
}
</style>


<footer style="width: 100%; color: white; background-color: black; padding: 10px; margin-top: 50px;">
  <h3 style="text-align: center;">Todos los derechos reservados</h3>
</footer>

</body>
</html>