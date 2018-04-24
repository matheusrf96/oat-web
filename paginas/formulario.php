<?php

if(isset($_SESSION['usuario'])){
  header('Location: ?pg=area-restrita');
}

?>

<h2>Login</h2>
<form action="?pg=login" method="POST">
  <label for="usuario">Usuário: </label>
  <input type="text" id="usuario" name="usuario" placeholder="exemplo@exemplo.com" />

  <br />

  <label for="senha">Senha: </label>
  <input type="password" id="senha" name="senha" placeholder="Digite sua senha" />

  <br />

  <input class="btn btn-primary" type="submit" value="Logar" />
</form>          
