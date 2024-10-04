<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Identifique-se</title>
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 50%; max-width: 600px;">
            <h1 class="text-center mb-4">1. Identifique-se</h1>
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="cpf" class="form-label">CPF *</label>
                        <input type="text" class="form-control is-invalid" id="cpf" placeholder="Digite seu CPF">
                        <div class="invalid-feedback">
                            CPF é obrigatório!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail preferido *</label>
                        <input type="email" class="form-control is-invalid" id="email" placeholder="Digite seu e-mail">
                        <div class="invalid-feedback">
                            E-mail preferido é obrigatório!
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha *</label>
                    <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
                    <div class="form-text">A senha deve ter de 6 a 12 caracteres com letras e números.</div>
                </div>
                <button type="submit" class="btn btn-secondary w-100" disabled>Identifique-se</button>
            </form>
            <div class="d-flex justify-content-between mt-3">
                <a href="#">Não tem senha? <strong>Clique aqui</strong> e cadastre uma!</a>
                <a href="#">Clique aqui se esqueceu sua senha</a>
            </div>
        </div>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
