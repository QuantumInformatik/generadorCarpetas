
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../resources/css/bootstrap.min.css?v=<?php echo(rand()); ?>">
</head>
<body>

<div class="container">
  <h2>Generar Carpetas AL</h2>
  <span id="resultado">
    
  </span>
  <form name="generarCarpetas" method="post">
    <div class="form-group">
      <label for="carpetaDestino">Nombre de la carpeta destino: </label>
      <input type="text" class="form-control" id="carpetaDestino" placeholder="Ingrese carpeta de destino" name="carpetaDestino">
    </div>
    <div class="form-group">
      <label for="cambiosGit">Cambios Git:</label>
      <textarea class="form-control" id="cambiosGit" name="cambiosGit" rows="20" cols="50">
      </textarea>
    </div>
    <input type="hidden" name="caso" value="generarCarpetas">
    <button name="generar" type="submit" class="btn btn-default">Generar</button>
  </form>
</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../resources/js/bootstrap.min.js?v=<?php echo(rand()); ?>"></script>
<script type="text/javascript" src="../resources/js/generadorCarpetas.js?v=<?php echo(rand()); ?>"></script>
<script type="text/javascript">
  
$(document).ready(function(){
  generadorCarpetas.initGeneradorCarpetas();

});

</script>

</html>