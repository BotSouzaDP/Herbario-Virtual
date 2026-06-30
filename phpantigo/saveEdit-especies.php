<?php
// isset -> serve para saber se uma variável está definida
include_once('config.php');
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $labsigla = $_POST['labsigla'];
    $family = $_POST['family'];
    $genus = $_POST['genus'];
    $sp1 = $_POST['sp1'];
    $author1 = $_POST['author1'];
    $rank1 = $_POST['rank1'];
    $sp2 = $_POST['sp2'];
    $author2 = $_POST['author2'];
    $rank2 = $_POST['rank2'];
    $sp3 = $_POST['sp3'];
    $author3 = $_POST['author3'];
    $description = $_POST['description'];
    $unico = $_POST['unico'];
    $phenology = $_POST['phenology'];
    $vernacular = $_POST['vernacular'];

    $sqlInsert = "UPDATE especies 
        SET labsigla='$labsigla',family='$family',genus='$genus',sp1='$sp1',author1='$author1',rank1='$rank1',sp2='$sp2',author2='$author2',rank2='$rank2',sp3='$sp3',author3='$author3',description='$description',unico='$unico',phenology='$phenology',vernacular='$vernacular'
        WHERE id=$id";
    $result = $conexao->query($sqlInsert);
    print_r($result);
}
header('Location: especies.php');
