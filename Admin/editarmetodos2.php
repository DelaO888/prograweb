<?php include '../include/header.php'; ?>
<body style="background-color: rgb(108,70,117)" class="text-white">
	<?php
	

		$id=$_GET["id"];

		$descripcion=$_GET["descripcion"];

		echo $descripcion;
	
		function editar($descripcion){ 

			$servidor="localhost";
			$usuarioBD="root";
			$pwdBD="";
			$nomBD="progweb";
			$db=mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);

			$sql="update articulos SET descripcion='$descripcion' where idArticulo='$id'";
			
			if(mysqli_query($db,$sql)){
				header("Location: index.php");
				die();

			}else{
				echo 'Error';
			}
        }

        editar($descripcion);
	?>

	<?php include '../include/footer.php'; ?>