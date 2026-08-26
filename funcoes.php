<?php
function verifica($login, $senha){
        if ($senha === "1234" and $login ==="adm"){
        header("Location: painel.php");

    }else{
        header("Location: index.php?msg=Login ou senha inválidos");

    }
}