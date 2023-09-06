<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                <div class="text-center">
                 <h3> <a href="#" target="_blank" class="text-decoration-none"><strong>Criar Usuário</strong></a></h3>
                </div>
                <br>
                    <div class="card-body">
                    <form method="post" action="../crud/cadUser.php">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nome" name="nome" required>
                                <label class="form-label" for="nome_completo">Nome completo:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" required>
                                <label class="form-label" for="email">E-mail:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="dataNasc" name="dataNasc" required>
                                <label class="form-label" for="data_nascimento">Data de nascimento:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="senha" name="senha" required>
                                <label class="form-label" for="senha">Senha:</label>
                            </div>
                            <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" required>
                            <label class="form-label" for="confirmar_senha">Repita a senha:</label>
                            </div>                           
                            <button type="button" class="btn btn-secondary" onclick="history.back()">Voltar</button>
                            <button type="submit" class="btn btn-primary btn-block">Criar conta</button>

                        </form>
                        <br>

                        <div class="text-center">
                            <a href="../login/telaLogin.php" style="text-decoration: none;">Já possui uma conta? Faça login</a>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>


</body>
</html>
