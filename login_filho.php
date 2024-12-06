<?php
 session_start();

include ('conexao.php');
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$ag = $conn->prepare("SELECT * FROM filho WHERE nome=:nome");
$ag->execute(array(
    ':nome' => $nome,
));


if ($ag->rowcount()==1) {
    foreach ($ag as $linha) {
        $nm = $linha["nome"];
        $senhacript=$linha["senha"];
        $id_user=$linha["id_filho"];
    }
    $_SESSION['nome'] = $nm;
    $_SESSION['id_filho'] = $id_user;
    $validar=password_verify($senha,$senhacript);

    
    if ($validar==TRUE) {
        $senha=$linha["senha"];
            header("Location:portugues/trilha_portugues.php");
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