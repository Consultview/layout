<?php
session_start();

// Encerre a sessão
session_unset();
session_destroy();

// Redirecione para a página de login ou qualquer outra página desejada após o logout
header("Location: ../login/telaLogin.php");
exit();
?>
