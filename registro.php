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
  <title> Músicas cadastradas </title>
  <style type="text/css">
     body{ font: 14px sans-serif; text-align: center; }
  </style>
</head>
<body>
    <div class="page-header">
        <h1>Musicas cadastradas</h1>
        <br>
        <?php
        $musicas = file('musicas_cadastradas.txt');
        foreach($musicas as $music)
        {
            echo $music.'<br>';
        }
       ?>

    </div>
    <p>
        <a href="cadastro.php" class="btn btn-primary">Cadastro de músicas</a>
        <br><br>
        <a href="welcome.php" class="btn btn-primary"> Voltar </a>
        </br></br>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>