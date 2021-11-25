<?php include '../include/header.php'; ?>
<body style="background-color: rgb(108,70,117)" class="text-white">
	<?php
	

		$id=$_GET["id"];

		

		function eliminar($id){ 

			$servidor="localhost";
			$usuarioBD="root";
			$pwdBD="";
			$nomBD="progweb";
			$db=mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);

			$sql="delete from articulos where  idArticulo=".$id."";
			mysqli_query($db,$sql);
			header("Location: ../index2.php");
			die();

			

        }

        eliminar($id);



	?>

	

	<?php include '../include/footer.php'; ?>