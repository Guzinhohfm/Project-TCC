<?php

  if(isset($_POST["submit"]))
  {
  
    include_once("config.php");

    $email = $_POST["log"];
    $usuario = $_POST["user"];
    $senha = $_POST["password"];
    $confsenha = $_POST["confpassword"]; 

    $result = mysqli_query($mysqli, "INSERT INTO usuario(email,usuario,senha,confsenha) VALUES
      ('$email', '$usuario', '$senha', '$confsenha')");
      
  
    header("location: /site/loginv2.php");
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formatacao.css">
    <title>Cadastro || Be a dev</title>
   <!-- Jquery -->
   <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>

    <!-- Script validade jquery-->
    <script 
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
  <!--Meu script-->
  <script src="cadastro.js"></script>

</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Crie uma conta em nosso site, é muito simples...</h1>
            <img src="imgs/astronaut2.0.png" class="left-login-image">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Crie sua conta: </h1>
                <form id="form-cadastrar" method="POST"> 
                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="text" name="log" placeholder="Digite seu e-mail" id="log">
                </div>
                <div class="textfield">
                    <label for="nome">Nome</label>
                    <input type="text" name="user" placeholder="Digite seu nome" id="user">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="password" placeholder="Crie uma Senha" id="password">
                </div>
                <div class="textfield">
                    <label for="senha">Confirmar Senha</label>
                    <input type="password" name="confpassword" placeholder="Digite novamente a senha" id="confpassword">
                </div>

                <input type="submit" value="Cadastrar" id="btn1" name="submit" class='btn-login'></input>
                
                </form>
                  <a href="loginv2.php">Voltar</a>
            </div>

        </div>
    </div>
</body>
</html>