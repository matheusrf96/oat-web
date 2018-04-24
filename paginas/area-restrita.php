<?php

if(!isset($_SESSION['usuario'])){
    header("Location: ?pg=formulario");
}

?>

<h2>Área Restrita</h2>
<p>Bem-vinda(o) <?php echo $_SESSION['usuario']['nome']; ?>!!!</p>  