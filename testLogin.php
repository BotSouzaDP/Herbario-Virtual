<?php
// Inicia a sessão
session_start();

// Verifica se o formulário foi enviado e se os campos estão preenchidos
if (isset($_POST['submit']) && !empty($_POST['matricula']) && !empty($_POST['senha'])) {
    include_once('config.php'); // Inclui a conexão com o banco de dados

    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];

    // Consulta no banco de dados
    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE matricula = ?");
    $stmt->bind_param("s", $matricula);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se o usuário existe
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc(); // Pega os dados do usuário

        // **Salva os dados na sessão**
        $_SESSION['matricula'] = $user['matricula'];
        $_SESSION['senha'] = $user['senha']; // Se estiver armazenada criptografada, compare antes

        // Redireciona para sistema.php
        header('Location: sistema.php');
        exit();
    } else {
        // Usuário não encontrado
        header('Location: login.php');
        exit();
    }
} else {
    // Campos não preenchidos
    header('Location: login.php');
    exit();
}

?>