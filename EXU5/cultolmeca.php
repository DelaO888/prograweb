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
            <li><a class="dropdown-item" href="vesti.php" style="color: white;">Cultura</a></li>
            <li><a class="dropdown-item" href="vesti.php" style="color: white;">Organizacion Social</a></li>
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
 

</div>

<div class="container-fluid text-center">

<!-- partial:index.partial.html -->
<article>

	<div align="center"><img src="cultu/Cult-Olmeca.jpg" style="height: 100%;width: 100%;"></div>

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
	max-width: 105rem
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
  font-size: 13px;
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




<iframe src="chat/index.html" width="100%" height="880" seamless="seamless" frameborder="0" allowfullscreen=""></iframe>














</div>



<footer style="width: 100%; color: white; background-color: black; padding: 10px; margin-top: 50px;">
  <h3 style="text-align: center;">Todos los derechos reservados</h3>
</footer>

</body>
</html>