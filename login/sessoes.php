<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION["idUsuario"])) {
    // O usuário não está logado, redirecione para a página de login
    header("Location: ../login/telaLogin.php");
    exit(); // Certifique-se de que o código pare aqui e não continue a ser executado
}

// Verifique o tempo da sessão
if (isset($_SESSION["ultimo_acesso"]) && (time() - $_SESSION["ultimo_acesso"] > 700)) {
    // Se o último acesso foi há mais de 30 minutos (1800 segundos), encerre a sessão
    session_unset();
    session_destroy();
    header("Location: ../login/telaLogin.php");
    exit();
}

// Atualize o timestamp da última atividade na sessão
$_SESSION["ultimo_acesso"] = time();
?>
