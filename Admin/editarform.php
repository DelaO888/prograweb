<?php include '../include/header.php'; ?>

<body style="background-color: rgb(87,95,102)" class="text-white">
	<?php
	

		$idArticulo=$_GET["idArticulo"];


		$servidor="localhost";
		$usuarioBD="root";
		$pwdBD="";
		$nomBD="progweb";
		$db=mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);

		$sql="select idArticulo,descripcion from articulos where  idArticulos=".$idArticulo."";
		$result=mysqli_query($db,$sql);
		$mostrar=mysqli_fetch_array($result);
		$idArticulo= $mostrar['idArticulo'] ;
		$descripcion= $mostrar['descripcion'];
	?>


	<br>
	<br>	
	<div id="formdiv">
		<div class="row d-flex justify-content-center border border-info formu" style="display:none">
			<form action="../editarmetodos2.php" method="get" class="">
				<label for="idArticulo">ID</label><br>	
				<input type="text" id="idArticulo" name="idArticulo" value="<?=$idArticulo?>"; readonly><br>	
					
			  	<label for="descripcion">Descripcion</label><br>
			  	<input type="text" id="descripcion" name="descripcion" value="<?=$descripcion?>";><br>
	
			 	 <input type="submit" value="Confirmar" class="nav-link btn btn-outline-light " ><br>
			  	<a href="../index2.php" class=" btn btn-outline-light ">Cancelar</a>
			</form> 

			<br>
		</div>
	</div>

	<div class="contenido">

			
	</div>
		


<?php include '../include/footer.php'; ?>