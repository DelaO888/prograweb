<?php include '../include/header.php'; ?>
<body style="background-color: rgb(108,70,117)" class="text-white">
<?php
		$idArticulo=$_GET["idArticulo"];
		$categoria=$_GET["categoria"];
		$nombreArticulo=$_GET["nombreArticulo"];


		function insert($idArticulo,$categoria,$nombreArticulo){ 

			$servidor="localhost";
			$usuarioBD="root";
			$pwdBD="";
			$nomBD="progweb";
			$db=mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);

			$sql="INSERT INTO articulos (IdArticulo,Categoria,NombreArticulo) VALUES('$idArticulo','$categoria','$nombreArticulo')";
			if(mysqli_query($db,$sql)){
				
				header("Location: index.php");
				die();

			}else{
				echo "Error" .$sql. ":".mysqli_error($db);
				echo "No se ha podido ingresar";

			}

				

        }

        insert($idArticulo,$categoria,$nombreArticulo);



	?>

	<?php include '../include/footer.php'; ?>