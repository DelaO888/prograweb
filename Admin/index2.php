<?php include '../include/header.php'; ?>

<?php

$servidor="localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="progweb";


$db=mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);


if(!$db){
	die("la conexion fallo: ". mysqli_connect_error());

}
else{
	mysqli_query($db, "SET NAMES 'UTF8'");

}

?>

<body style="background-color: rgb(99,11,87)" class="text-white">
	<br>

	<h1>ARTÍCULOS PUBLICADOS</h1>
	<br>
	<div class="container" id="tabla">
	<div class=" table-responsive-xl">
	<table  border="5px" class="classgeneral classid1 table-hover table-dark table-striped" >
		<tr>
            <td width="30%">ID  </td>
			<td width="30%">CATEGORÍA </td>
			<td width="50%">ARTÍCULO </td>
			
			<td widht="">OPCIÓN:</td>
				
		</tr>

		<?php 
		$sql="SELECT idArticulo,categoria,nombreArticulo from articulos";
		$result=mysqli_query($db,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['idArticulo'] ?></td>
			<td><?php echo $mostrar['categoria'] ?></td>
			<td><?php echo $mostrar['nombreArticulo'] ?></td>
			
			<td><a class="btn btn-secondary" href="eliminar.php/?id=<?=$mostrar['idArticulo']?>";>Eliminar </a>
				<a class="btn btn-secondary" href="editarform.php/?id=<?=$mostrar['idArticulo']?>";>Editar </a>
				<a class="btn btn-secondary" href="edita2.php/?id=<?=$mostrar['idArticulo']?>";>Ver </a>
               
			</td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>

	<button class="btn btn-warning btn-outline-light "  ><a href="inserta.php"> AGREGAR ARTICULO </a></button>
	</div>
	<br>

	
</div>


	


<?php include '../include/footer.php'; ?>