<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $matricula = $user_data['matricula'];
                $telefone = $user_data['telefone'];
                $situacao = $user_data['situacao'];
            }
        }
        else
        {
            header('Location: usuarios.php');
        }
    }
    else
    {
        header('Location: usuarios.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="css/tabela.css">
  <title>Edit | Usuarios</title>
</head>

<body>
  <section>
    <div class="form-box">
      <div class="form-value">
        <form action="saveEdit-usuarios.php" method="POST">
          <h2>Altere uma coleta</h2>
          <div class="inputbox">
            <input type="text" name="nome" value=<?php echo $nome;?> required>
            <label for="">Nome</label>
          </div>
          <div class="inputbox">
            <input type="email" name="email" value=<?php echo $email;?> required>
            <label for="">Email</label>
          </div>
          <div class="inputbox">
            <input type="tel" name="matricula" value=<?php echo $matricula;?> required>
            <label for="">Matricula</label>
          </div>
          <div class="inputbox">
            <input type="tel" name="telefone" value=<?php echo $telefone;?> required>
            <label for="">Telefone</label>
          </div>
          <div class="inputbox">
            <input type="text" name="situacao" value=<?php echo $situacao;?> required>
            <label for="">Situacao</label>
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