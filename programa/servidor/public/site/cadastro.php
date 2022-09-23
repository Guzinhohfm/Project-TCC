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
      
  
    header("location: /site/login.php");
  }


?>



<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cadastro || Be a dev</title>
    <link rel="stylesheet" href="cadastro.css" />
<!-- Script das imgs -->
    <script
    src="https://kit.fontawesome.com/2b3778da1c.js"
    crossorigin="anonymous"
  ></script>

  <!--Script jquery-->
  <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"
  ></script>

  <!--Meu script-->
  <script src="cadastro.js"></script>

  <!-- Script validade jquery-->
  <script 
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </head>
  <body>
    <header></header>
    <section>
      <div id="container">
        <h1>Crie sua conta:</h1>

        <form id="form-cadastro" action="cadastro.php" method="POST">
          <div >
            <em
              class="fa-solid fa-envelope"
              aria-hidden="true"
              style="color: #3782e4"
            ></em>
            <input type="email" id="log" placeholder="Seu e-mail" name="log"/>
        
            <br />
          </div>
          <br />

          <div >
            <em class="fa-solid fa-user" style="color: #3782e4"></em>
            <input type="text" id="user" placeholder="Seu nome" name="user"/>
            

            <br />
          </div>
          <br />

          <div >
            <em class="fa-solid fa-key" style="color: #3782e4"></em>
            <input type="password" id="password" placeholder="Senha" name="password" />
           

            <br />
          </div>
          <br />

          <div >
            <em class="fa-solid fa-key" style="color: #3782e4"></em>
            <input
              type="password"
              id="confpassword"
              placeholder="Confirme sua senha"
              name="confpassword"
            />
           

            <br />
          </div>
          <br />

          <br /><input type="submit" value="Cadastrar" id="bt1" name="submit">
            
        </input>
        </form>

       <br> <input type="submit" onclick="retornar()" value="Voltar" id="bt2" ></input>
      </div>
    </section>
  </body>
  
</html>
