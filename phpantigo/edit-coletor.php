<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM coletor WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $instituicao = $user_data['instituicao'];
                $area_especializacao = $user_data['area_especializacao'];
                $email = $user_data['email'];
            }
        }
        else
        {
            header('Location: coletor.php');
        }
    }
    else
    {
        header('Location: coletor.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="">
  <title>Edit | Coletor</title>
</head>

<body>
  <section>
    <div class="form-box">
      <div class="form-value">
        <form action="saveEdit-coletor.php" method="POST">
          <h2>Altere uma coleta</h2>
          <div class="inputbox">
            <input type="text" name="nome" value=<?php echo $nome;?> required>
            <label for="">Nome</label>
          </div>
          <div class="inputbox">
            <input type="text" name="instituicao" value=<?php echo $instituicao;?> required>
            <label for="">Institução</label>
          </div>
          <div class="inputbox">
            <input type="text" name="area_especializacao" value=<?php echo $area_especializacao;?> required>
            <label for="">Área de especializção</label>
          </div>
          <div class="inputbox">
            <input type="email" name="email" value=<?php echo $email;?> required>
            <label for="">Email</label>
          </div>
    
         <br>

         <input type="hidden" name="id" value=<?php echo $id;?>>
         <input type="submit" name="update" id="submit">
         
        </form>
      </div>
    </div>
  </section>
</body>

</html>