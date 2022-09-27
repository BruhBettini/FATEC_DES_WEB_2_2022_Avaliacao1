<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}    

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <title> Cadastro de músicas </title>
</head>
<body>

<div class="container">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <form action="musicas.php" method="post">
          <fieldset>
            <legend> Cadastro de músicas</legend>

            <div class="form-group">
              <label class="form-label" for="musica"> Informe o nome da música: </label>
              <input class="form-control" type="text" name="musica" id="musica" placeholder="Digite uma música..." autofocus >
            </div>
            <br>

            <div class="form-group">
              <label for="artista"> Informe o artista </label>
              <input class="form-control" type="text" name="artista" id= "artista" placeholder="Informe o nome do artista..."> 
              <br>
            </div>

            <div class="form-group">
              <label for="album"> Informe o nome do álbum </label>
              <input class="form-control" type="text" name="album" id= "album" placeholder="Informe o nome do álbum..."> 
              <br>
            </div>


            <div class="form-group">
              <button type="submit"  class="btn btn-primary"> Cadastrar </button>
              </br></br>
              <a href="registro.php" class="btn btn-primary">Musicas cadastradas</a>
              <br><br>
              <a href="welcome.php" class="btn btn-primary"> Voltar </a>
              </br></br>
              <a href="logout.php" class="btn btn-danger"> Sair da conta </a>
            </div>

          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <div class="col-2"></div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>