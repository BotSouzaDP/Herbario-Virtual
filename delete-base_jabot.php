<?php
session_start();
include_once('config.php'); // Inclui o arquivo de conexão

// Verifica se o usuário está logado (ajuste conforme sua lógica de autenticação)
if (!isset($_SESSION['matricula'])) {
    header('Location: login.php');
    exit();
}

// Verifica se o ID foi passado na URL
if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    // Prepara a query de seleção para verificar se o registro existe
    $sqlSelect = "SELECT * FROM base_jabot WHERE id = ?";
    $stmtSelect = $conexao->prepare($sqlSelect);
    $stmtSelect->bind_param("i", $id);
    $stmtSelect->execute();
    $result = $stmtSelect->get_result();

    if ($result->num_rows > 0) {
        // Prepara a query de exclusão
        $sqlDelete = "DELETE FROM base_jabot WHERE id = ?";
        $stmtDelete = $conexao->prepare($sqlDelete);
        $stmtDelete->bind_param("i", $id);

        // Executa a query de exclusão
        if ($stmtDelete->execute()) {
            // Mensagem de sucesso
            $_SESSION['mensagem'] = "Registro excluído com sucesso!";
        } else {
            // Mensagem de erro
            $_SESSION['mensagem'] = "Erro ao excluir o registro: " . $stmtDelete->error;
        }
    } else {
        // Mensagem de erro
        $_SESSION['mensagem'] = "Registro não encontrado.";
    }
} else {
    // Mensagem de erro
    $_SESSION['mensagem'] = "ID do registro não foi fornecido.";
}

// Redireciona para a página da tabela
header('Location: base_jabot.php');
exit();
?>