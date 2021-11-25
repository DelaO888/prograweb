<?php include '../include/header2.php'; ?>

<style>
div.ex4 {
  height: 400px;
  width: 600px;
  overflow-y: scroll;
}
</style>

<body style="background-color: rgb(108,70,117)" class="text-white">

	<br>
	<br>	
	<div id="formdiv">
		<div class="row d-flex justify-content-center border border-info formu" style="display:none">
			<form action="metodos.php" method="get" class="">

            <label for="fname">Título:</label><br>


    
            <label for="fname">Escribe tu artículo:</label><br>
			  <input type="text" id="descripcion" name="descripcion" value="Escribe"><br>

              <textarea class="form-control" name="" id="" rows="20" cols="100"></textarea>
            

			<button type="submit" class="btn btn-warning btn-outline-light "  ><a href="index2.php"> PUBLICAR </a></button>

			</form> 
			<br>
		</div>
	</div>

	<div class="contenido">

			
	</div>
		


<?php include '../include/footer.php'; ?>