<?php
    session_start();
    include_once('config.php');

    $sql = "SELECT * FROM coletor ORDER BY id DESC";
    $result = $conexao->query($sql);
    // print_r($result);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>BD | Coletor</title>
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
                    <th scope="col">Nome</th>
                    <th scope="col">Instituição</th>
                    <th scope="col">Área de especialização</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";                
                        echo "<td>".$user_data['nome']."</td>";                
                        echo "<td>".$user_data['instituicao']."</td>";                
                        echo "<td>".$user_data['area_especializacao']."</td>";                
                        echo "<td>".$user_data['email']."</td>";  
                        echo "<td>
                        <a class='edit' href='edit-coletor.php?id=$user_data[id]'><i class='fa-regular fa-pen-to-square' style='color: blue;'></i></a>
                        <a class='edit' href='delete-coletor.php?id=$user_data[id]'><i class='fa-regular fa-trash-can' style='color: red;'></i></a>
                        </td>";      
                        echo "</tr>";                      
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    <a href="add-coletor.php">Adicionar +</a>
</body>
</html>