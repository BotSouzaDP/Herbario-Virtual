<?php

  if(isset($_POST['submit'])) 

  {
    // print_r($_POST['nome']);
    // print_r('<br>');
    // print_r($_POST['instituicao']);
    // print_r('<br>');
    // print_r($_POST['area_especializacao']);
    // print_r('<br>');
    // print_r($_POST['email']);
 
    include_once('config.php');

    $nome = $_POST['nome'];
    $instituicao = $_POST['instituicao'];
    $area_especializacao = $_POST['area_especializacao'];
    $email = $_POST['email'];

    $result = mysqli_query($conexao, "INSERT INTO coletor(nome,instituicao,area_especializacao,email) VALUES ('$nome','$instituicao','$area_especializacao','$email')");
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="">
  <title>Add | Coletor</title>
</head>

<body>
  <section>
    <div class="form-box">
      <div class="form-value">
        <form action="add-coletor.php" method="POST">
          <h2>Adicione uma coleta</h2>
          <div class="inputbox">
            <input type="text" name="nome" required>
            <label for="">Nome</label>
          </div>
          <div class="inputbox">
            <input type="text" name="instituicao" required>
            <label for="">Institução</label>
          </div>
          <div class="inputbox">
            <input type="text" name="area_especializacao" required>
            <label for="">Área de especializção</label>
          </div>
          <div class="inputbox">
            <input type="email" name="email" required>
            <label for="">Email</label>
          </div>
    
         <br>

         <button type="submit" name="submit" id="submit">Adicionar</button>
         <a href='coletor.php'>Voltar</a>
        </form>
      </div>
    </div>
  </section>
</body>

</html>