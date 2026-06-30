<?php
  session_start();
  if ((!isset($_SESSION['matricula']) == true)  and (!isset($_SESSION['senha']) == true))
  {
      unset($_SESSION['matricula']);
      unset($_SESSION['senha']);
      header('Location: login.php');
  }
  $logado = $_SESSION['matricula'];


  if(isset($_POST['submit'])) 
  {
    include_once('config.php'); 

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $matricula = $_POST['matricula'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $situacao = $_POST['situacao'];

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $conexao->prepare("INSERT INTO usuarios(nome, email, matricula, telefone, senha, situacao) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nome, $email, $matricula, $telefone, $senha_hash, $situacao);

    if($stmt->execute()) {
      header('location:login.php');;
    }

    $stmt->close();
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="css/cadastro.css">
  <title>Login Web</title>
</head>

<body>
<script src="menu.js"></script>
<br>
<!--<a class="voltar" href="index.php">Voltar</a>-->
  <section>
    <div class="form-box">
      <div class="form-value">
        <form action="cadastro.php" method="POST">
          <h2>Cadastre um Membro</h2>
          <div class="inputbox">
            <input type="name" name="nome" required>
            <label for="">Nome Completo</label>
          </div>
          <div class="inputbox">
            <input type="email" name="email" required>
            <label for="">E-mail Institucional</label>
          </div>
          <div class="inputbox">
            <input type="tel" name="matricula" required>
            <label for="">Matrícula</label>
          </div>
          <div class="inputbox">
            <input type="tel" name="telefone" required>
            <label for="">Telefone</label>
          </div>
          <div class="inputbox">
            <input type="password" name="senha" required>
            <label for="">Senha</label>
          </div>
          <div class="opcao" id="opcao">
            <p>Situação:</p>
            <input type="radio" id="aluno" name="situacao" value="aluno" required>
            <label for="aluno">Aluno</label> 
            <input type="radio" id="servidor" name="situacao" value="servidor" required>
            <label for="servidor">Servidor</label>
         </div>
    
         <br>

         <a href='login.html'><button type="submit" name="submit" id="submit">Registrar</button>
         
        </form>
      </div>
    </div>
  </section>
</body>

</html>