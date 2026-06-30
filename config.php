<?php

$dbHost = 'localhost';//10.44.4.21
$dbUsername = 'root';//herbario
$dbPassword = '';//ipe.angico.inga
$dbName = 'acervo_herbario';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);


// if($conexao->connect_errno)
// {
//    echo "Erro";
// }
// else{
//   echo "Conexão efetuada com sucesso";
//  }

$conexao->set_charset("utf8")

?>