<?php
    session_start();
    include_once('config.php');

    $sql = "SELECT * FROM coleta ORDER BY id_coleta DESC";
    $result = $conexao->query($sql);
    // print_r($result);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>BD | Coleta</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/webp" href="imagens/folha.webp">
    <link rel='stylesheet' type='text/css' media='screen' href='css/tabela.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src='main.js'></script>
    <style>
        .edit:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
    
    <!-- Menu -->

    <script src="menu.js"></script>
    <script src="funcao-menu.js"></script>

    <div class="tabela">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Especie ID</th>
                    <th scope="col">Coletor ID</th>
                    <th scope="col">ID image</th>
                    <th scope="col">Accession</th>
                    <th scope="col">Collector</th>
                    <th scope="col">Addcoll</th>
                    <th scope="col">Prefix</th>
                    <th scope="col">Number</th>
                    <th scope="col">Suffix</th>
                    <th scope="col">Colldd</th>
                    <th scope="col">Collmm</th>
                    <th scope="col">Collyy</th>
                    <th scope="col">Dateres</th>
                    <th scope="col">Detby</th>
                    <th scope="col">Detdd</th>
                    <th scope="col">Detmm</th>
                    <th scope="col">Detyy</th>
                    <th scope="col">Country</th>
                    <th scope="col">Majorarea</th>
                    <th scope="col">Minorarea</th>
                    <th scope="col">Gazetteer</th>
                    <th scope="col">Locality Notes</th>
                    <th scope="col">Origindb</th>
                    <th scope="col">Observações Gerais</th>
                    <th scope="col">Lat</th>
                    <th scope="col">Ns</th>
                    <th scope="col">Longitude</th>
                    <th scope="col">Ew</th>
                    <th scope="col">Alt</th>
                    <th scope="col">Altmax</th>
                    <th scope="col">Altres</th>
                    <th class="scope">Acões</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id_coleta']."</td>";                
                        echo "<td>".$user_data['especie_id']."</td>";                
                        echo "<td>".$user_data['coletor_id']."</td>";                
                        echo "<td>".$user_data['id_image']."</td>";                
                        echo "<td>".$user_data['accession']."</td>";                
                        echo "<td>".$user_data['collector']."</td>";                
                        echo "<td>".$user_data['addcoll']."</td>";                
                        echo "<td>".$user_data['prefix']."</td>";                
                        echo "<td>".$user_data['number']."</td>";                
                        echo "<td>".$user_data['suffix']."</td>";                
                        echo "<td>".$user_data['colldd']."</td>";                
                        echo "<td>".$user_data['collmm']."</td>";                
                        echo "<td>".$user_data['collyy']."</td>";                
                        echo "<td>".$user_data['dateres']."</td>";                
                        echo "<td>".$user_data['detby']."</td>";                
                        echo "<td>".$user_data['detdd']."</td>";                
                        echo "<td>".$user_data['detmm']."</td>";                
                        echo "<td>".$user_data['detyy']."</td>";                
                        echo "<td>".$user_data['country']."</td>";
                        echo "<td>".$user_data['majorarea']."</td>";
                        echo "<td>".$user_data['minorarea']."</td>";
                        echo "<td>".$user_data['gazetteer']."</td>";
                        echo "<td>".$user_data['locality_notes']."</td>";
                        echo "<td>".$user_data['origindb']."</td>";
                        echo "<td>".$user_data['observacoes_gerais']."</td>";
                        echo "<td>".$user_data['lat']."</td>";
                        echo "<td>".$user_data['ns']."</td>";
                        echo "<td>".$user_data['longitude']."</td>";
                        echo "<td>".$user_data['ew']."</td>";
                        echo "<td>".$user_data['alt']."</td>";
                        echo "<td>".$user_data['altmax']."</td>";
                        echo "<td>".$user_data['altres']."</td>";
                        echo "<td>
                        <a class='edit' href='edit-coleta.php?id_coleta=$user_data[id_coleta]'><i class='fa-regular fa-pen-to-square' style='color: blue;'></i></a>
                        <a class='edit' href='delete-coleta.php?id_coleta=$user_data[id_coleta]'><i class='fa-regular fa-trash-can' style='color: red;'></i></a>
                        </td>";      
                        echo "</tr>";       
                    }
                ?>
            </tbody>
        </table>
    </div>
    <a href="add-coleta.php">Adicionar +</a>
</body>
</html>