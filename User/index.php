<?php include '../include/header.php'; ?>


<?php

$servidor="localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="";


$db=mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);


if(!$db){
	die("la conexion fallo: ". mysqli_connect_error());

}
else{
	mysqli_query($db, "SET NAMES 'UTF8'");

}

?>

<body style="background-color: rgb(87,95,102)" class="text-white">
	<br>

	<h1>TABLA ART</h1>
	<br>
	<div class="container" id="tabla">
	<div class=" table-responsive-xl">
	<table  border="5px" class="classgeneral classid1 table-hover table-dark table-striped" >
		<tr>
			<td width="30%">ID </td>
			<td width="30%">CATEGORÍA  </td>
			<td width="50%">ARTÍCULO  </td>
			
			<td widht="">LEER:</td>
				
		</tr>

		<?php 
		$sql="SELECT idArticulo,categoria,nombreArticulo from articulos";
		$result=mysqli_query($db,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['idArticulos'] ?></td>
			<td><?php echo $mostrar['categoria'] ?></td>
			<td><?php echo $mostrar['nombreArticulo'] ?></td>
			
			
			</td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>

	
	</div>
	<br>

	
</div>

	


<?php include '../include/footer.php'; ?>