<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php
 include_once("header.php");
 ?>

<div class = "container">
 <form class = "row g-3" method = "Post" action = "../controller/adicionarContato.php";>
  <div class = "col-md-8">
    <label for = "inputNome" class ="form-label">Nome</label>
    <input type = "text" class = "form-control" name = "nomeContato" id = "inputNome">
  </div>
  <div class = "col-md-4">
    <label for = "inputFone" class = "form-label">Fone</label>
    <input type = "text" class = "form-control" name = "foneContato" id = "inputFone">
  </div>
 
  <div class ="col-12">
    <button type = "submit" class = "btn btn-primary">Registrar</button>
  </div>
 </form>
</div>

<?php
include_once("footer.php");
?>
 
</body>
</html>