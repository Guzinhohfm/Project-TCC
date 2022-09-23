<?php

if(isset($_POST["submit"]))
  {
  
  session_start();

  include_once("config.php");
    
   $usuario = mysqli_real_escape_string($mysqli, $_POST['email']);
   $senha = mysqli_real_escape_string($mysqli, $_POST['password']);

   $query = "SELECT email, senha FROM usuario WHERE email = '{$usuario}' AND senha = '{$senha}'";

   $result = mysqli_query($mysqli, $query);

   $row = mysqli_num_rows($result);

   if($row > 0){
    $_SESSION['email'] = $usuario;
    header("location: telaprincipal.php");
    exit();
   } else{
    print "Usuário não cadastrado!!";
    print "<script>setTimeout(\"location.href='login.php'\", 1000);</script>";
    exit();
   }

      
  } 


      
  


?>


<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login || Be a dev</title>
    <link rel="stylesheet" href="login.css" />

    <!-- Script dos Icons -->
    <script
      src="https://kit.fontawesome.com/2b3778da1c.js"
      crossorigin="anonymous"
    ></script>


    <!-- Jquery -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>

    <!--Meu Script-->
    <script src="login.js"></script>

    <!-- Script validade jquery-->
    <script 
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  </head>
  <body>
    <header>
      <h1>Bem vindo ao site "Be a dev"</h1>
    </header>

    <section>
      <form id="form-log" method="POST">
      <div id="log">
    


        <i
          class="fa-solid fa-envelope"
          aria-hidden="true"
          style="color: #3782e4"
        ></i>

        <input type="email" placeholder="E-mail" id="user" name="email"/><br />
        <br />
        <i
          class="fa-solid fa-key"
          aria-hidden="true"
          style="color: #3782e4"
        ></i>

        <span></span>

        <input
          type="password"
          name="password"
          placeholder="Senha"
          id="password"
        /><br />


        

        <br /><input type="submit" value="Logar" id="btn1" name="submit"/><br />


      </form>

        <br /><a>Não possui uma conta? <br />Cadastre-se aqui:</a>

      </div><br>


      <br><input type="submit" onclick="cadastrar()" value="Cadastrar-se" id="btn2" />



    </section>
    
    <section id="right-side">
      <p id="sub">
        Be a Dev
      </p>
      
          <div class="image-1">
            <img src="imgs/phplogo.jpg" alt="phplogo" class="phplogo">
            <div class="img_text">
              Php é uma 
              linguagem de script open source de uso geral, 
              muito utilizada, e especialmente adequada para o 
              desenvolvimento web e que pode ser embutida dentro do HTML.</div>
          </div>
          <br>

      </div>
          <div class="image-2">
            <img src="imgs/javascriptlogo.png" alt="jslogo" class="jslogo">
              <div class="img_text">
                JavaScript é uma 
                linguagem de programação de alto nível criada, 
                a princípio, para ser executada em navegadores e 
                manipular comportamentos de páginas web.
              </div>
          </div>
          <br>

          <div class="image-3">
            <img src="imgs/pylogo.png" alt="pylogo" class="pylogo">
              <div class="img_text">
                Python é uma linguagem de programação de alto nível, com sintaxe mais simplificada e próxima da linguagem humana, 
                utilizada em aplicações desktop, web, servidores e ciência de dados.
              </div>
          </div>

       
   
    </section>
  </body>
</html>
