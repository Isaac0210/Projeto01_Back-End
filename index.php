<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto1</title>
</head>
<body>
    <?php
    echo $_GET[('msg')] ?? "";
    ?>
    <form action="login.php" method="post">
    <h1>Área de login</h1>
    Login <br>
    <input type="text" name = "login"> <br> <br>
    Senha <br>
    <input type="password" name = "senha"> <br> <br>
    <button>Entrar</button>
    </form>
</body>
</html>