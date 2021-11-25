<?php include '../include/header2.php'; ?>

<body style="background-color: rgb(108,70,117)" class="text-white">

	<br>
	<br>	
	<div id="formdiv">
		<div class="row d-flex justify-content-center border border-info formu" style="display:none">
			<form action="metodos.php" method="get" class="">

			  <label for="fname">ID</label><br>
			  <input type="text" id="idArticulo" name="idArticulo" value=""><br>

			  <label for="fname">Categoria</label><br>
			  <input type="text" id="categoria" name="categoria" value=""><br>

			  <input type="button" class="btn btn-info"  id="categoria" name="categoria" data-toggle="dropdown" value="Selecciona">
    			<span class="caret"></span></button>
    			<ul class="dropdown-menu">
      			<li><a href="#vestimenta">VESTIMENTA</a></li>
      			<li><a href="#economia">ECONOMÍA</a></li>
      			<li><a href="#alimentacion">ALIMENTACIÓN</a></li>
	  			<li><a href="#cultura">CULTURA</a></li>
	 			<li><a href="#organizacion">ORGANIZACIÓN SOCIAL</a></li>
    			</ul></br>

			  <label for="fname">Articulo</label><br>
			  <input type="text" id="nombreArticulo" name="nombreArticulo" value=""><br>


			  <button type="submit" class="btn btn-warning btn-outline-light "  ><a href="inserta2.php"> CREAR </a></button>
			</form> 
			<br>
		</div>
	</div>

	<div class="contenido">

			
	</div>
		


<?php include '../include/footer.php'; ?>