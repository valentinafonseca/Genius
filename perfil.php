<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="genius.png"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
    <link rel="stylesheet" href="styles/perfil.css">
    <title>Document</title>
    <link href="https://fonts.cdnfonts.com/css/gulya" rel="stylesheet">
</head>

<body>
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,800' rel='stylesheet' type='text/css'>
    <nav class="menu">
  <ul>
    <li><a href="../index.html">Início</a></li>
    <li><a href="../perfil.html">Perfil</a></li>
    <li><a href="../login.html">Login</a></li>
    <li><a href="../cadastro.html">Cadastro</a></li>
    <li><a href="../index.html">Sair</a></li>
  </ul>
</nav>
<?php
session_start(); 

    $nm =  $_SESSION['nome'] ;
echo 
   "<div class='foto'>
    <img src='animais/elefantinho.png' style='width: 80%; height: 60%; margin-left: 10%; margin-top: -3%;' alt=''>
   </div>";

   echo $nm
?>
   <div class="texto">
    <p style="text-align: center;">Texto sobre evolução</p>
   </div>

   <div style="margin-top: -15%;">
   <div class="fml">
    <img src="animais/ursinho.png" style="width: 100%; height: 100%;position: relative; top: 10%;right:0%;"  alt="">
   </div>
   <h1 style="margin-left: 78%; margin-top: -9%;">Seu vínculo</h1>
   <p style="margin-left: 80.7%; margin-top: 7.5%;">Responsável</p>

   <div style="background-color: #fff; border-radius: 100%; height: 70px; width: 70px;display: grid;margin-left: 77% ;">
    <img src="animais/pig.png" style="width: 70%; height: 70%;position: relative; top: 15%;left: 10%;"  alt="">
   </div>

       <p style="margin-left: 77.8%; margin-top: 0.5%;">Amigo</p>

    <div style="background-color: #fff; border-radius: 100%; height: 70px; width: 70px;display: grid;margin-left: 85%;margin-top: -6.65%;">
      <img src="animais/pig.png" style="width: 70%; height: 70%;position: relative; top: 15%;left: 10%;"  alt="">
    </div>
    <p style="margin-left: 85.8%; margin-top: 0.5%;">Amigo</p>

    <div style="background-color: #fff; border-radius: 100%; height: 70px; width: 70px;display: grid;margin-left: 81%;margin-top: 0.65%;">
      <img src="animais/pig.png" style="width: 70%; height: 70%;position: relative; top: 15%;left: 10%;"  alt="">
    </div>
    <p style="margin-left: 82.3%; margin-top: 0.5%;">Você</p>
</div>

<form action="perfil1.php" method="POST" enctype="multipart/form-data">
  <label for="file">Escolha um arquivo:</label>
  <input type="file" name="file" id="file" required>
  <button type="submit">Enviar</button>
</form>


</body>
</html>