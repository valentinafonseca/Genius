<?php
 session_start();
include "conexao.php";
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senhaa = $_POST["senhaa"];

if($senha == $senhaa) {
   $ag1 = $conn->prepare("SELECT * FROM pai WHERE nome=:nome");
$ag1->execute(array(
    ':nome' => $nome
));
 if($ag1 -> rowcount()>=1) {
  echo "<script>
  window.alert('Nome já existente')
  window.location.href='cadastro.html';</script>"; 
 }else{
   $senhacript = password_hash($senha, PASSWORD_DEFAULT);

   $ag = $conn->prepare('INSERT INTO pai (nome,email,senha) VALUES 
   (:nome, :email, :senha)');
   
    $ag->execute(array(
       ':nome' => $nome,
       ':email' => $email,
       ':senha'  => $senhacript,
    ));
    $_SESSION["idpaifk"]=$idfkpai;	
    $_SESSION["senha"]=$senhacript;
    header('Location:trilha_inicial.php');
}
} 
else{
        echo "<script>
        window.alert('As senhas não estão iguais')
        window.location.href='cadastro.html';</script>";               
}
?>