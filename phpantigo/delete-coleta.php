<?php

    if(!empty($_GET['id_coleta']))
    {
        include_once('config.php');

        $id_coleta = $_GET['id_coleta'];

        $sqlSelect = "SELECT * FROM coleta WHERE id_coleta=$id_coleta";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM coleta WHERE id_coleta=$id_coleta";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: coleta.php');
   
?>