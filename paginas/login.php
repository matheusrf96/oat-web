<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == 'teste' && $senha == '123'){
    echo "<b style='color: green;'>Usuário autenticado =D</b><br />";
    $_SESSION['usuario']['id'] = 1;
    $_SESSION['usuario']['nome'] = 'Teste';
    
    #header("Location: index.php");
}else{
    echo "Erro na autenticação :(";
}

?>