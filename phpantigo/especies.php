<?php
    session_start();
    include_once('config.php');

    $sql = "SELECT * FROM especies ORDER BY id DESC";
    $result = $conexao->query($sql);
    // print_r($result);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>BD | Especies</title>
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
    <script src="menu-bd.js"></script>

    <script src="menu.js"></script>
    <script src="funcao-menu.js"></script>


    <div class="tabela">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Labsigla</th>
                    <th scope="col">Family</th>
                    <th scope="col">Genus</th>
                    <th scope="col">Sp1</th>
                    <th scope="col">Author1</th>
                    <th scope="col">Rank1</th>
                    <th scope="col">Sp2</th>
                    <th scope="col">Suthor2</th>
                    <th scope="col">Rank2</th>
                    <th scope="col">Sp3</th>
                    <th scope="col">Author3</th>
                    <th scope="col">Description</th>
                    <th scope="col">Unico</th>
                    <th scope="col">Phenology</th>
                    <th scope="col">Vernacular</th>
                    <th class="scope">Acões</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";                
                        echo "<td>".$user_data['labsigla']."</td>";                
                        echo "<td>".$user_data['family']."</td>";                
                        echo "<td>".$user_data['genus']."</td>";                
                        echo "<td>".$user_data['sp1']."</td>";                
                        echo "<td>".$user_data['author1']."</td>";                
                        echo "<td>".$user_data['rank1']."</td>";                
                        echo "<td>".$user_data['sp2']."</td>";                
                        echo "<td>".$user_data['author2']."</td>";                
                        echo "<td>".$user_data['rank2']."</td>";                
                        echo "<td>".$user_data['sp3']."</td>";                
                        echo "<td>".$user_data['author3']."</td>";                
                        echo "<td>".$user_data['description']."</td>";                
                        echo "<td>".$user_data['unico']."</td>";                
                        echo "<td>".$user_data['phenology']."</td>";                
                        echo "<td>".$user_data['vernacular']."</td>";     
                        echo "<td>
                        <a class='edit' href='edit-especies.php?id=$user_data[id]'><i class='fa-regular fa-pen-to-square' style='color: blue;'></i></a>
                        <a class='edit' href='delete-especies.php?id=$user_data[id]'><i class='fa-regular fa-trash-can' style='color: red;'></i></a>
                        </td>";       
                        echo "</tr>";                  
                    }
                ?>
            </tbody>
        </table>
    </div>
    <a href="add-especies.php">Adicionar +</a>
</body>
</html>