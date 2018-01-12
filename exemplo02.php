<?php
//Session

require_once("config.php"); 

session_unset($_SESSION['nome']); //Também pode ser usado somente o unset(), o nome da variável($_SESSION['nome']) pode ser colocado no unset para terminar somente um parâmetro

echo $_SESSION['nome']; //No exemplo01 a variável $_SESSION é criada e no exemplo02 é mostrada

session_destroy(); //Outra forma de terminar a sessão

?>