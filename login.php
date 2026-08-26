<?php
    $senha = $_POST[('senha')];
    $login = $_POST[('login')];
    require "funcoes.php";
    verifica($login, $senha);
  
