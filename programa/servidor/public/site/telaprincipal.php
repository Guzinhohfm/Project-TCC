<?php 

session_start();
include('verificalogin.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="
    width=device-width,initial-scale=1.0">
    <title>Página Principal</title>
    <style></style>
    <link href="principal.css" rel="stylesheet">
    
</head>
<body>
<p><?php echo $_SESSION['email']; ?></p>
    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>

    <a href="logout.php">Sair</a>
    
    <nav class="menu">
        <ul>
            <li><a href="telaprincipal.php"><img src="imgs/home.png" style="height:25px; width:25px;"> Início</a></li>
              <li><a href="telajogos.html"><img src="imgs/jogos.png" style="height:25px; width:25px;"> Jogos</a>
                <ul>
                    <li><a href="basicophp.html"><img src="imgs/php.png" style="height:25px; width:25px;"> PHP Básico</a>
                    <li><a href="basicojava.html"><img src="imgs/java.png" style="height:25px; width:25px;"> JAVA Básico</a>
                    <li><a href="basicophyton.html"><img src="imgs/phyton.png" style="height:25px; width:25px;">Phyton Básico</a>
                </ul>
            </li>
            <li><a href="telapontos.html"><img src="imgs/pontuação.png" style="height:25px; width:25px;"> Pontos</a>
                <ul class="submenu">
                    <li><a href="pontuacao.html">Sua Pontuação</a>
                    <li><a href="adquirir.html">Como Adquirir </a>
                    <li><a href="reinvidicar.html">Reinvidicações</a>
                </ul>
            </li>

            <li><a href="recompensas.html"><img src="imgs/recompensa.png" style="height:25px; width:25px;"> Recompensas</a></li>
            
    </nav>

<input type="checkbox" id="check">
<label id="icone" for="check"><img src="imgs/menu.png" style="height:35px; width:35px;" id="icon-barra"></label>

<div class="barra">

<nav>
    <a href="atividades.html"><div class="link">Atividades</div></a>
    <a href="perfil.html"><div class="link">Perfil</div></a>
    <a href="configurações.html"><div class="link">Configurações</div></a>
    <a href="contato.html"><div class="link">Contato</div></a>
</nav>
</div>
    <br>

    <h1>Seja Bem Vindo (a) ao "Be a Dev"!</h1>
    <h2>Primeiramente Gostariamos de Te Apresentar sobre algumas Linguagens de programação</h2><br>
    
    
  
    <h2><details>
        <sumary>Linguagens Disponíveis: </sumary>
        <section class="ml-4">
            <div><img src="imgs/php.png" style="height:20px; width:20px;"> PHP</div>
            <div><img src="imgs/java.png" style="height:20px; width:20px;"> JAVA  <small></small></div>
            <div><img src="imgs/phyton.png" style="height:20px; width:20px;"> Phyton <small></small></div>
        </section>
    </details>
    </h2>

<nav class="nav_tabs">
        <ul>
            <li>
                <input type="radio" id="Linguagem PHP" class="rd_tab" name="tabs" checked>
                <label for="Linguagem PHP" class="tab_label">Linguagem PHP</label>
                <div class="tab-content">
                    <h2>Aprendendo PHP <img src="imgs/php.png" style="height:40px; width:40px;"></h2>
                    <article>
                        O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor ) é uma linguagem de script open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.
                    </article>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tab" id="Linguagem JAVA">
                <label for="Linguagem JAVA" class="tab_label">Linguagem JAVA</label>
                <div class="tab-content">
                    <h2>Aprendendo Java <img src="imgs/java.png" style="height:40px; width:40px;"></h2>
                    <article>
                        Java é uma linguagem de programação e plataforma computacional lançada pela primeira vez pela Sun Microsystems em 1995. Existem muitas aplicações e sites que não funcionarão, a menos que você tenha o Java instalado, e mais desses são criados todos os dias. O Java é rápido, seguro e confiável.
                    </article>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tab" id="Linguagem Phyton">
                <label for="Linguagem Phyton" class="tab_label">Linguagem Phyton</label>
                <div class="tab-content">
                    <h2>Aprendendo Phyton <img src="imgs/phyton.png" style="height:40px; width:40px;"></h2>
                    <article>
                        Python é uma linguagem Open-Source de propósito geral usado bastante em data science, machine learning, desenvolvimento de web, desenvolvimento de aplicativos, automação de scripts, fintechs e mais.
                    </article>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tab" id="Mais Linguagens...">
                <label for="Mais Linguagens..." class="tab_label">Mais Linguagens...</label>
                <div class="tab-content">
                    <h2>EM BREVE !</h2>
                    <article>
                        Em Desenvolvimento <br>
                    <img src="imgs/carregamento.png" style="height:250px; width:250px;">
                    </article>
                </div>
            </li>
        </ul>
    </nav><br><br>

</body>
</html> 