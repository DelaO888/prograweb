<?php 
 $conexion = mysqli_connect('localhost', 'root','', 'progweb');

	$idAutor=$_POST['idAutor'];
    $nombreArticulo=$_POST['nombreArticulo'];
    $descripcion=$_POST['descripcion'];
    $categoria=$_POST['categoria'];
    $subcategoria=$_POST['subcategoria'];
    $imagen=$_POST['imagen'];
    $status=$_POST['status'];

	$sql="INSERT INTO articulos(idAutor, nombreArticulo, descripcion, categoria, subcategoria, imagen, status) VALUES ('$idAutor','$nombreArticulo','$descripcion', '$categoria', '$subcategoria', '$imagen', 'publicado')";
    $result=mysqli_query($conexion,$sql);

    if ($result) {
        echo "nuevo registro creado exitosamente";
    }else {
        echo "error: ".$sql.":".mysqli_error($conexion);
    }

 ?>