<?php
    $nota1 = $_POST [("nota1")];
    $nota2 = $_POST [("nota2")];
    $nota3 = $_POST [("nota3")];
    echo "A média entre as notas $nota1, $nota2, $nota3 é igual a:". (($nota1 + $nota2 + $nota3) / 3);