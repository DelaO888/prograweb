<?php include '../include/header.php'; ?>
<body style="background-color: rgb(108,70,117)" class="text-white">
	<?php
	

		$id=$_GET["id"];

		$id_articulo=$_GET["idArticulo"];
		$categoria=$_GET["categoria"];
		$nombreArticulo=$_GET["nombreArticulo"];
		echo $idArticulo;
		echo $categoria;
		echo $nombreArticulo;

		function editar($idArticulo,$categoria,$nombreArticulo){ 

			$servidor="localhost";
			$usuarioBD="root";
			$pwdBD="";
			$nomBD="progweb";
			$db=mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);

			$sql="update ganancias SET categoria='$idArticulo', mes='$categoria', ganancia='$nombreArticulo' where id_articulo='$id'";
			
			if(mysqli_query($db,$sql)){
				header("Location: index.php");
				die();

			}else{
				echo 'Error';
			}
        }

        editar($idArticulo,$categoria,$nombreArticulo);

	?>

	<?php include '../include/footer.php'; ?>