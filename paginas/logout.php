<?php

if(isset($_SESSION['usuario'])){
    unset($_SESSION['usuario']);
    echo "Usuário desconectado!";

    header("Location: index.php");
}
?>