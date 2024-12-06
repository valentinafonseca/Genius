<?php
 session_start();
include ('conexao.php');
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$ag = $conn->prepare("SELECT * FROM pai WHERE nome=:nome");
$ag->execute(array(
    ':nome' => $nome
));


if ($ag->rowcount()==1) {
    foreach ($ag as $linha) {
        $senhacript=$linha["senha"];
    }
 
    $validar=password_verify($senha,$senhacript);

    
    if ($validar==TRUE) {
        $senha=$linha["senha"];
            header("Location:trilha_inicial.php");
    }else {
        echo "<script>
        window.alert('Usuário ou senha incorretos')
        window.location.href='login.html';</script>";    
    }
}else{
    echo "<script>
    window.alert('Usuário não existente')
    window.location.href='login.html';</script>"; 
}



?>