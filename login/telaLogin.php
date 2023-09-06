<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                <div class="text-center">
                 <h3> <a href="#" target="_blank" class="text-decoration-none"><strong>Bem Vindo</strong></a></h3>
                </div>
                <br>
                    <div class="card-body">
                        <h5 class="card-title">Login</h5> <br>
                        <form method="post" action="../crud/login.php">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" required>
                                <label class="form-label" for="email">E-mail:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="senha" name="senha" required>
                                <label class="form-label" for="password">Senha:</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                            <br><br><br>


                            <div class="form-group text-center">
                            <a href="cadastro.php"  style="text-decoration: none;">Criar conta</a> <br><br>
                            <a href="#"  style="text-decoration: none;">Recuperar senha</a><br><br>
                            <a href=""  style="text-decoration: none;">Sobre</a><br><br>
                            
                            <br><br>
                            <div class="text-center">
                            <a href="#" class="text-decoration-none">&copy; 2023 Consultview.<br>Todos os direitos reservados.
</a>
                            </div>

                            </div>
                        </form>
                        <br>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
