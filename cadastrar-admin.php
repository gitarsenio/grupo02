<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Administrador</title>
    
</head>
<body>
    <h1>Cadastrar Administrador</h1>
    <form action="?page=salvar-administrador" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" class="form-control" required />
        </div>
        <div class="mb-3">
            <label for="nome">Usuario</label>
            <input type="text" name="usuario" class="form-control" required />
        </div>
        <div class="mb-3">
            <label for="nome">E-mail</label>
            <input type="email" name="email" class="form-control" required />
        </div>
        <div class="mb-3">
            <label for="nome">Telefone</label>
            <input type="tel" name="telefone" class="form-control" required />
        </div>
        <div class="mb-3">
            <label for="nome">Senha</label>
            <input type="password" id="password" name="senha" class="form-control" required />
        </div>
        <div class="mb-3">
            <label for="nome">Confirmar Senha</label>
            <input type="password" id="confirm_password" class="form-control" required />
        </div>
        
        <div class="mb-3">
            <button type="submit" name="submit" class="btn w-100 btn-success">
                Enviar
            </button>
        </div>
    </form>

    <script>
        var password = document.getElementById("password");
        var confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("As senhas não coincidem");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>
</html>
