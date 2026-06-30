<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $instituicao = $_POST['instituicao'];
        $area_especializacao = $_POST['area_especializacao'];
        $email = $_POST['email'];
        
        $sqlInsert = "UPDATE coletor 
        SET nome='$nome',instituicao='$instituicao',area_especializacao='$area_especializacao',email='$email'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: coletor.php');

?>