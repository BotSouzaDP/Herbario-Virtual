<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <script src="menu.js"></script>
    <!--<a href="index.php">Voltar</a>-->
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="testLogin.php" method="POST" onsubmit="console.log('Formulário submetido');">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <input type="text" name="matricula" required>
                        <label for="">Matrícula</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="senha" required>
                        <label for="">Senha</label>
                    </div>
                    <div class="forget">
                        <label>
                            <p>Esqueceu a <a href="#">Senha?</a></p>
                        </label>
                    </div>
                    <button type="submit" name="submit" id="submit">Login</button>
                </form>
            </div>
        </div>
    </section>
    <script src="scriptbusca.js"></script>
</body>
</html>