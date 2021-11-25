<?php include '../include/header.php'; ?>

<body style="background-color: rgb(108,70,117)" class="text-white">
	<?php
	

		$id=$_GET["idArticulo"];


		$servidor="localhost";
		$usuarioBD="root";
		$pwdBD="";
		$nomBD="progweb";
		$db=mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);

		$sql="descripcion from articulos where  idArticulo=".$id."";
		$result=mysqli_query($db,$sql);
		$mostrar=mysqli_fetch_array($result);

		$idArticulo= $mostrar['idArticulo'];
		$descripcion=$mostrar['descripcion'];
		
		
	?>
    

	<br>
	<br>	
	<div id="formdiv">
		<div class="row d-flex justify-content-center border border-info formu" style="display:none">
			<form action="../editarmetodos2.php" method="get" class="">
					
            <div class="form-group" >
              <label for="lname"></label>
              <textarea class="form-control" name="descripcion" id="descripcion" rows="10" cols="10"></textarea>
            </div>

            <table  border="5px" class="classgeneral classid1 table-hover table-dark table-striped" >
		<tr>
   
            <td width="20%">ID</td>
			<td width="100%">DESCRIPCION </td>
				
		</tr>

		<?php 
		$sql="SELECT idArticulo,descripcion from articulos";
		$result=mysqli_query($db,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

        <tr>
			
			<td><?php echo $mostrar['idArticulo'] ?></td>
			<td><?php echo $mostrar['descripcion'] ?></td>

		</tr>

	<?php 
	}
	 ?>
	</table>

			  	<a href="../index2.php" class= "btn btn-info" >LISTO</a>
			</form> 

			<br>
		</div>
	</div>

	<div class="contenido">

			
	</div>
		


<?php include '../include/footer.php'; ?>