<?php
include "conexao.php"; // Conexão com o banco de dados
session_start(); // Inicia a sessão

// Captura o nome do usuário da sessão
$nm = $_SESSION['nome']; 

// Verifica se foi enviado um arquivo
if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
    // Diretório para onde a imagem será salva
    $diretorio = 'uploads/';
    
    // Informações sobre o arquivo enviado
    $imagem_nome = $_FILES['imagem']['name']; // Nome do arquivo
    $imagem_tmp = $_FILES['imagem']['tmp_name']; // Arquivo temporário
    $imagem_ext = pathinfo($imagem_nome, PATHINFO_EXTENSION); // Extensão da imagem

    // Geração de um novo nome para evitar conflitos de nome
    $novo_nome_imagem = uniqid('img_') . '.' . $imagem_ext;

    // Caminho final onde a imagem será armazenada
    $caminho_imagem = $diretorio . $novo_nome_imagem;

    // Verifica se a extensão do arquivo é permitida (opcional)
    $extensoes_permitidas = ['jpg', 'jpeg', 'png'];
    if (!in_array(strtolower($imagem_ext), $extensoes_permitidas)) {
        die("Apenas imagens JPEG e PNG são permitidas.");
    }

    // Move o arquivo para o diretório de destino
    if (move_uploaded_file($imagem_tmp, $caminho_imagem)) {
        // Atualiza o banco de dados com o novo caminho da imagem
        $sql = "UPDATE filho SET imagem = :imagem WHERE nome = :nome";
        $stmt = $conn->prepare($sql);

        // Vincula os parâmetros
        $stmt->bindParam(':imagem', $caminho_imagem);
        $stmt->bindParam(':nome', $nm);

        // Executa a query
        if ($stmt->execute()) {
            echo "Imagem atualizada com sucesso!";
        } else {
            echo "Erro ao atualizar a imagem no banco de dados.";
        }
    } else {
        echo "Erro ao mover o arquivo para o diretório.";
    }
} else {
    echo "Nenhuma imagem foi enviada ou houve um erro no upload.";
}
?>
