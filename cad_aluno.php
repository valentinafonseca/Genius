<?php
include "conexao.php";
session_start();   

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha1 = $_POST["senha1"];
$senhaa1 = $_POST["senhaa1"];
$pai = $_POST["pai"];
$checkbox= $_POST['materia'];


$defaultImage = 'uploads/coalinha.png'; // Caminho da imagem já existente

 // verificando se o e-mail do pai existe

 $ag1 = $conn->prepare("SELECT * FROM pai WHERE nome=:filho");
    $ag1->execute(array(
        ':filho' => $nome
    ));
if($ag1 -> rowcount()>=1){
    echo "<script>
    window.alert('As nome do pai não está correto')
    window.location.href='cadastro.html';</script>"; 
}
// // verificando a sennha do banco
if($senha1 == $senhaa1) { 
    $senhacript = password_hash($senha1, PASSWORD_DEFAULT);

    $ag2 = $conn->prepare("SELECT * FROM pai WHERE nome=:pai");
    $ag2->execute(array(
        ':pai' => $pai
    ));
 

    if($ag2 -> rowcount()>=1) {
            foreach ($ag2 as $linha) {
                $idpai=$linha["id_pai"];
            }
    //inserindo o filho 
            if($idpai == $linha["id_pai"]){
            $ag3 = $conn->prepare('INSERT INTO filho (nome,email,senha,idpai, imagem) VALUES 
            (:nome, :email, :senha1, :idpai, :imagem)');
            
            $ag3->execute(array(
                ':nome' => $nome,
                ':email' => $email,
                ':senha1'  => $senhacript,
                ':idpai'=> $idpai, 
                ':imagem'=> $defaultImage
            ));
            $last_id = $conn->lastInsertId();
        }
         else {
            echo"erro na linha 27";
        }
// cadastrar a checkbox
        foreach ($checkbox as $key) {

            $ag4 = $conn->prepare('INSERT INTO  materia_difi1 (idmdifi,idf) VALUES 
                    (:idmdifi, :idf)');
                    
                    $ag4->execute(array(
                        ':idmdifi' => $key,
                        ':idf'=> $last_id
                    ));
        }
        
 
}
 else {
    echo "<script>
    window.alert('As nome do pai não está correto')
    window.location.href='cadastro.html';</script>"; 
}
}
else{
    echo "<script>
    window.alert('As senhas não estão iguais')
    window.location.href='cadastro.html';</script>"; 
}

// Caminho da imagem existente
$defaultImage = 'uploads/coalinha.png'; // Caminho da imagem já existente
$nm = $_SESSION['nome']; // Nome do usuário logado

// Verificar se a coluna 'imagem' está vazia ou se já tem uma imagem
$sql = "SELECT imagem FROM filho WHERE nome = :nome";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':nome', $nm);
$stmt->execute();

// Verifica se existe algum resultado
if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Se a coluna 'imagem' estiver vazia ou se você deseja atualizar a imagem
    $updateSql = "UPDATE filho SET imagem = :imagem WHERE nome = :nome";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bindParam(':imagem', $defaultImage);
    $updateStmt->bindParam(':nome', $nm);
}

header('Location:portugues/trilha_portugues.php');
?>