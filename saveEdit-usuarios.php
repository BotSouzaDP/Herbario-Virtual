<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $matricula = $_POST['matricula'];
        $telefone = $_POST['telefone'];
        $situacao = $_POST['situacao'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',email='$email',matricula='$matricula',telefone='$telefone',situacao='$situacao'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: usuarios.php');

?>