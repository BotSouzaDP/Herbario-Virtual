<?php
    session_start();
    include_once('config.php');

   //  if ((!isset($_SESSION['matricula']) == true)  and (!isset($_SESSION['senha']) == true))
   //  {
    //     unset($_SESSION['matricula']);
  //       unset($_SESSION['senha']);
    //     header('Location: login.php');
    // }
    // $logado = $_SESSION['matricula']

    $sql = "SELECT * FROM base_jabot";
    $result = $conexao->query($sql);
    // print_r($result);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>BD</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/webp" href="imagens/folha.webp">
    <link rel='stylesheet' type='text/css' media='screen' href='css/tabela.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                <th scope="col">Numtombo</th>
                <th scope="col">Sufixo</th>
                <th scope="col">Family</th>
                <th scope="col">Genus</th>
                <th scope="col">Cf</th>
                <th scope="col">Sp1</th>
                <th scope="col">Author1</th>
                <th scope="col">Rank1</th>
                <th scope="col">Sp2</th>
                <th scope="col">Author2</th>
                <th scope="col">Rank2</th>
                <th scope="col">Sp3</th>
                <th scope="col">Author3</th>
                <th scope="col">Vernacular</th>
                <th scope="col">Typestat</th>
                <th scope="col">Country</th>
                <th scope="col">Majorarea</th>
                <th scope="col">Minorarea</th>
                <th scope="col">Gazetteer</th>
                <th scope="col">Uc</th>
                <th scope="col">Latitude</th>
                <th scope="col">Longitude</th>
                <th scope="col">Lat Grau</th>
                <th scope="col">Lat Min</th>
                <th scope="col">Lat Seg</th>
                <th scope="col">Ns</th>
                <th scope="col">Long Grau</th>
                <th scope="col">Long Min</th>
                <th scope="col">Long Seg</th>
                <th scope="col">Ew</th>
                <th scope="col">Altprof</th>
                <th scope="col">Altprofmax</th>
                <th scope="col">Unidmedaltprof</th>
                <th scope="col">Locnotes</th>
                <th scope="col">Flor</th>
                <th scope="col">Fruto</th>
                <th scope="col">Fuste</th>
                <th scope="col">Altura</th>
                <th scope="col">Unidmedaltura</th>
                <th scope="col">Collector</th>
                <th scope="col">numero</th>
                <th scope="col">Addcoll</th>
                <th scope="col">Colldd</th>
                <th scope="col">Collmm</th>
                <th scope="col">Collyy</th>
                <th scope="col">Detby</th>
                <th scope="col">Detdd</th>
                <th scope="col">Detmm</th>
                <th scope="col">Detyy</th>
                <th scope="col">Sigla Colbot Origem</th>
                <th scope="col">Dups</th>
                <th scope="col">Nrdups</th>
                <th scope="col">Notes</th>
                <th scope="col">Usos</th>
                <th scope="col">Uso Especifico</th>
                <th scope="col">Projeto</th>
                <th scope="col">Habitat</th>
                <th scope="col">Habito</th>
                <th class="scope">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['numtombo']."</td>";                
                        echo "<td>".$user_data['sufixo']."</td>";                
                        echo "<td>".$user_data['family']."</td>";                
                        echo "<td>".$user_data['genus']."</td>";                
                        echo "<td>".$user_data['cf']."</td>";                
                        echo "<td>".$user_data['sp1']."</td>";                
                        echo "<td>".$user_data['author1']."</td>";                
                        echo "<td>".$user_data['rank1']."</td>";                
                        echo "<td>".$user_data['sp2']."</td>";                
                        echo "<td>".$user_data['author2']."</td>";                
                        echo "<td>".$user_data['rank2']."</td>";                
                        echo "<td>".$user_data['sp3']."</td>";                
                        echo "<td>".$user_data['author3']."</td>";                
                        echo "<td>".$user_data['vernacular']."</td>";                
                        echo "<td>".$user_data['typestat']."</td>";                
                        echo "<td>".$user_data['country']."</td>";
                        echo "<td>".$user_data['majorarea']."</td>";
                        echo "<td>".$user_data['minorarea']."</td>";
                        echo "<td>".$user_data['gazetteer']."</td>";
                        echo "<td>".$user_data['uc']."</td>";
                        echo "<td>".$user_data['latitude']."</td>";
                        echo "<td>".$user_data['longitude']."</td>";
                        echo "<td>".$user_data['latgrau']."</td>";
                        echo "<td>".$user_data['lat_min']."</td>";
                        echo "<td>".$user_data['lat_seg']."</td>";
                        echo "<td>".$user_data['ns']."</td>";
                        echo "<td>".$user_data['long_grau']."</td>";
                        echo "<td>".$user_data['long_min']."</td>";
                        echo "<td>".$user_data['long_seg']."</td>";
                        echo "<td>".$user_data['ew']."</td>";
                        echo "<td>".$user_data['altprof']."</td>";
                        echo "<td>".$user_data['altprofmax']."</td>";
                        echo "<td>".$user_data['unidmedaltprof']."</td>";
                        echo "<td>".$user_data['locnotes']."</td>";
                        echo "<td>".$user_data['flor']."</td>";
                        echo "<td>".$user_data['fruto']."</td>";
                        echo "<td>".$user_data['fuste']."</td>";
                        echo "<td>".$user_data['altura']."</td>";
                        echo "<td>".$user_data['unidmedaltura']."</td>";
                        echo "<td>".$user_data['collector']."</td>";
                        echo "<td>".$user_data['numero']."</td>";
                        echo "<td>".$user_data['addcoll']."</td>";
                        echo "<td>".$user_data['colldd']."</td>";
                        echo "<td>".$user_data['collmm']."</td>";
                        echo "<td>".$user_data['collyy']."</td>";
                        echo "<td>".$user_data['detby']."</td>";
                        echo "<td>".$user_data['detdd']."</td>";
                        echo "<td>".$user_data['detmm']."</td>";
                        echo "<td>".$user_data['detyy']."</td>";
                        echo "<td>".$user_data['sigla_colbot_origem']."</td>";
                        echo "<td>".$user_data['dups']."</td>";
                        echo "<td>".$user_data['nrdups']."</td>";
                        echo "<td>".$user_data['notes']."</td>";
                        echo "<td>".$user_data['usos']."</td>";
                        echo "<td>".$user_data['uso_especifico']."</td>";
                        echo "<td>".$user_data['projeto']."</td>";
                        echo "<td>".$user_data['habitat']."</td>";
                        echo "<td>".$user_data['habito']."</td>";                        
                        echo "<td>
                        <a class='edit' href='edit-base_jabot.php?id=$user_data[id]'><i class='fa-regular fa-pen-to-square' style='color: blue;'></i></a>
                        <a class='edit' href='delete-base_jabot.php?id=$user_data[id]'><i class='fa-regular fa-trash-can' style='color: red;'></i></a>
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