



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
            <li><a class="dropdown-item" href="cult.php" style="color: white;">Cultura</a></li>
            <li><a class="dropdown-item" href="orgsocial.php" style="color: white;">Organizacion Social</a></li>
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





<html lang="en" >
<head>
  <meta charset="UTF-8">
 
  <script src="https://use.fontawesome.com/ff256a4a0c.js"></script><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- index.html -->
<div class="plans-wrapper">
<h3 class="plans">Artículos :</h3>
<section class="prices">
	<div class="cards">
		<div class="title-wrapper basic">	
			<i class="fa fa-apple" aria-hidden="true"></i>
			<h3 class="title">Mayas</h3>
		</br>	
		</div>	
		<ul class="features">
		
			<p></p>
			<a class="pro-btn" href="alimaya.php">Ver</a>
	</div>
	<div class="cards profesional-card">
		<div class="title-wrapper">
			
			<i class="fa fa-cutlery" aria-hidden="true"></i>
			<h3 class="title">Olmecas</h3>
		</br>
		</div>
		<ul class="features">
		
		<p></p>
			<a class="pro-btn" href="aliolmeca.php">Ver</a>
	</div>
	<div class="cards">
		<div class="title-wrapper empresarial">
			<i class="fa fa-lemon-o" aria-hidden="true"></i>
			<h3 class="title">Totonacas</h3>
		</br>
		</div>
		<ul class="features">
			
		<p></p>
			<a class="pro-btn" href="alitoto.php">Ver</a>	
	</div>
</section>

<style>


.promotion-banner {
  height: 120px;
  background: #3e3e3e;
  font-family: "Asap", sans-serif;
  display: flex;
  justify-content: center;
}
@media screen and (max-width: 880px) {
  .promotion-banner {
    flex-direction: column;
    justify-content: center;
    height: auto;
    padding: 5px 0 20px 0;
  }
}
@media screen and (max-width: 480px) {
  .promotion-banner {
    padding: 5px 16px 20px 16px;
  }
}
.promotion-banner .pro-btn {
  margin-top: 0px;
  margin-bottom: 0;
  background: #558B2F;
  color: #fff;
  padding: 8px 15px;
  font-weight: 600;
  letter-spacing: 1px;
  text-decoration: none;
  transition: all 0.3s;
  box-shadow: 0 10px 6px -6px rgba(35, 35, 35, 0.44);
  align-self: center;
}
@media screen and (max-width: 880px) {
  .promotion-banner .pro-btn {
    margin-top: 25px;
  }
}
@media screen and (max-width: 420px) {
  .promotion-banner .pro-btn {
    margin-top: 12px;
    font-size: 12px;
    padding: 10px 15px;
  }
}
.promotion-banner .pro-btn:hover {
  text-decoration: none;
  background: #8BC34A;
  color: #fff;
  transition: all 0.3s;
}
.promotion-banner .text {
  text-align: center;
}
.promotion-banner .text .description {
  margin: 0;
  color: #e2e2e2;
  font-size: 22px;
  margin-right: 120px;
  padding-top: 28px;
}
@media screen and (max-width: 880px) {
  .promotion-banner .text .description {
    margin-right: 0;
  }
}
@media screen and (max-width: 480px) {
  .promotion-banner .text .description {
    font-size: 14px;
  }
}
.promotion-banner .text .description.sub-description {
  color: #abafb3;
  font-size: 16px;
  line-height: 0px;
  padding-top: 17px;
}
@media screen and (max-width: 480px) {
  .promotion-banner .text .description.sub-description {
    font-size: 12px;
    line-height: 21px;
  }
}

.plans-wrapper {
  width: 80%;
  margin: 0 auto;
  font-family: "Asap", sans-serif;
}

.plans-wrapper .plans {
  font-family: "Asap", sans-serif;
  margin: 0;

  color: #9a9a9a;
  font-size: 40px;
  margin: 0 auto;
  width: 318px;
}
@media screen and (max-width: 420px) {
  .plans-wrapper .plans {
    font-size: 32px;
    width: 256px;
  }
}
.plans-wrapper section.prices {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  width: 100%;
  font-family: "Asap", sans-serif;
  font-size: 14px;
}
@media screen and (max-width: 880px) {
  .plans-wrapper section.prices {
    flex-direction: column;
    align-items: center;
  }
}
.plans-wrapper section.prices .cards {
  height: 232px;
  width: 25%;

  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  margin-bottom: 25px;
  border-bottom: 2px solid #ffd500;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
@media screen and (max-width: 880px) {
  .plans-wrapper section.prices .cards {
    width: 70%;
  }
}
@media screen and (max-width: 500px) {
  .plans-wrapper section.prices .cards {
    width: 85%;
  }
}
.plans-wrapper section.prices .cards.profesional-card {
  margin-left: 35px;
  margin-right: 35px;
}
.plans-wrapper section.prices .cards .title-wrapper {
  width: 100%;
  border-bottom: 2px solid #FFC107;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  background: #558b2f;
  position: relative;
}
.plans-wrapper section.prices .cards .title-wrapper .icon {
  font-size: 64px;
  color: #fbfbfb;
  margin-top: 24px;
  margin-bottom: 16px;
}
.plans-wrapper section.prices .cards .title-wrapper .sale-box {
  position: absolute;
  top: 0;
  overflow: hidden;
  height: 124px;
  width: 143px;
  text-align: center;
  z-index: 0;
  right: 0;
  border-top-right-radius: 8px;
  -o-border-top-right-radius: 8px;
  -moz-border-top-right-radius: 8px;
  -webkit-border-top-right-radius: 8px;
}
.plans-wrapper section.prices .cards .title-wrapper .sale-box .on_sale {
  font-size: 14px;
  color: #444;
  background: #ffd400;
  text-transform: uppercase;
  padding: 64px 35px 11px 40px;
  width: 281px;
  text-align: center;
  display: block;
  position: absolute;
  left: -47px;
  top: -41px;
  -moz-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-transform: rotate(-44deg);
  -ms-transform: rotate(-44deg);
  transform: rotate(40deg);
  box-shadow: 3px -4px 13px 3px rgba(0, 0, 0, 0.75);
}
.plans-wrapper section.prices .cards .title-wrapper .title {
  margin-bottom: 0;
  margin-top: 0;
  font-size: 25px;
  font-weight: 100;
  color: white;
}

.plans-wrapper section.prices .cards .basic {
  background: #8c8c8c;
}
.plans-wrapper section.prices .cards .empresarial {
  background: #005496;
}
.plans-wrapper section.prices .cards .features {
  list-style: none;
  padding: 0;
  width: 100%;
  margin: 0;
}
.plans-wrapper section.prices .cards .features li {
  line-height: 44px;
  font-weight: 600;
  color: #43A047;
}
.plans-wrapper section.prices .cards .features .basic-check {
  height: 170px;
}
.plans-wrapper section.prices .cards .features .advanced-check {
  height: 250px;
}
.plans-wrapper section.prices .cards .features .grey {
  background-color: #f3f3f3;
}
.plans-wrapper section.prices .cards .features .tap {
  height: 48px;
}
.plans-wrapper section.prices .cards .features.advanced-list {
  border-top: 2px solid white;
}
.plans-wrapper section.prices .cards .features .normas-tools {
  list-style: none;
  padding: 0;
  font-size: 13px;
  padding-bottom: 5px;
}
.plans-wrapper section.prices .cards .features .normas-tools li {
  line-height: 22px;
  font-size: 12px;
  color: #8c8c8c;
  border-bottom: 1px solid #f1f1f1;
}
.plans-wrapper section.prices .cards .features .normas-tools li:last-child {
  border-bottom: none;
}
.plans-wrapper section.prices .cards .features .articulos-tools li {
  border-bottom: 1px solid #dcdcdc;
}
.plans-wrapper section.prices .cards .features .articulos-tools li:last-child {
  border-bottom: none;
}
.plans-wrapper section.prices .cards .features .icon {
  color: #f27876;
}
.plans-wrapper section.prices .cards .checked {
  background-image: url("https://daks2k3a4ib2z.cloudfront.net/55de95401f19df505cc6c89d/562132baf554c39f7d195108_check-mark.svg");
  background-position: 50% 50%;
  background-repeat: no-repeat;
}
.plans-wrapper section.prices .cards .null {
  background-image: url("https://daks2k3a4ib2z.cloudfront.net/55de95401f19df505cc6c89d/56204acc6ff16b855d74bd8e_dash%402x.png");
  background-position: 50% 50%;
  background-size: 18px;
  background-repeat: no-repeat;
  background-attachment: scroll;
}
.plans-wrapper section.prices .cards .cost {
  font-size: 18px;
  color: #558b2f;
  font-weight: 600;
  margin-bottom: 9px;
}
.plans-wrapper section.prices .cards .cost.gratis-cost {
  margin-top: 34px;
  color: grey;
}
.plans-wrapper section.prices .cards .cost.empresarial-cost {
  color: #3779ac;
}

.plans-wrapper section.prices .cards .pro-btn {
  margin-top: 0px;
  margin-bottom: 25px;
  background: #558B2F;
  color: #fff;
  padding: 8px 15px;
  font-weight: 600;
  letter-spacing: 1px;
  text-decoration: none;
  transition: all 0.3s;
  box-shadow: 0 10px 6px -6px rgba(35, 35, 35, 0.44);
}
.plans-wrapper section.prices .cards .pro-btn.empresarial-btn {
  background: #005496;
  transition: all 0.3s;
}
.plans-wrapper section.prices .cards .pro-btn.empresarial-btn:hover {
  background: #0868b3;
  transition: all 0.3s;
}
.plans-wrapper section.prices .cards .pro-btn:hover {
  text-decoration: none;
  background: #8BC34A;
  color: #fff;
  transition: all 0.3s;
}
  </style>
</div> 
</body>
</html>
























</div>



<footer style="width: 100%; color: white; background-color: black; padding: 10px; margin-top: 50px;">
  <h3 style="text-align: center;">Todos los derechos reservados</h3>
</footer>

</body>
</html>