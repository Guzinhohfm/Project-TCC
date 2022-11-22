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
    print "<script>setTimeout(\"location.href='loginv2.php'\", 1000);</script>";
    exit();
   }

      
  } 

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formatacao.css">
    <title>Login || Be a dev</title>
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
    <div class="main-login">
        <div class="left-login">
            <h1>Torne-se um desenvolvedor Master !<br>desenvolva suas habilidades</h1>
            <img src="imgs/astronaut.png" class="left-login-image">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Entre ou Cadastre-se</h1>
                <img src="" alt="">
                <form id="form-log" method="POST"> 
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="email" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="password" placeholder="Senha">
                </div>
                <div class="textfield">
                    <label for="texto">Ainda não tem uma conta? <a href="cadastrov2.php">Cadastrar-se</a></label>
                </div>
                <input type="submit" value="Logar" id="btn1" name="submit" class='btn-login' />
            </div>
        </form>
        </div>
    </div>
</body>
</html>