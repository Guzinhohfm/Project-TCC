<?php

if(isset($_POST['btn-login'])){
    echo "Logado com Sucesso!!!";
} elseif(isset($_POST['btn-cadastro'])){
    header('location: cadastro.html');
}




?>