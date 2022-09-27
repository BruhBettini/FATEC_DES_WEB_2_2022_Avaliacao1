<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$MUSICA = $_POST['musica'];
$ARTISTA = $_POST['artista'];
$ALBUM = $_POST['album'];

if(isset($MUSICA) && isset($ARTISTA) && isset($ALBUM)){
    if(!file_exists("musicas_cadastradas.txt")){
        $registro = fopen("musicas_cadastradas.txt", "w");
    } else {
        $registro = fopen("musicas_cadastradas.txt", "a");
    }


    fwrite($registro, $MUSICA."\n");
    fwrite($registro, $ARTISTA."\n");
    fwrite($registro, $ALBUM."\n");
    fflush($registro);
    fclose($registro);
}

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <title> Cadastro efetuado </title>
  <style type="text/css">
     body{ font: 14px sans-serif; text-align: center; }
  </style>
</head>
<body>
    <div class="page-header">
        <h1>Cadastro efetuado!</h1><b>
        <?php 
            echo "A música cadastrada é: ".$MUSICA."</br>"."do artista ".$ARTISTA."</br>"."pertecente ao álbum ".$ALBUM."</br"; 
        ?>
        <br>
    </div>
    <p>
        <a href="cadastro.php" class="btn btn-primary">Cadastrar novamente</a>
        <br><br>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>