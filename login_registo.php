<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registos Medicos</title>
</head>

<body>
    <div class="container center">
        <div class="mb-3" style="text-align: center;">
            <h1>Insira as suas credenciais</h1>
        </div>
        <form action="?page=registos_medicos" class="container" method="POST">
            <div class="mb-3">

                <label for="nome">Usuário:</label>
                <input type="text" name="usuario" class="form-control" required />
            </div>

            <div class="mb-3">

                <label for="nome">Senha:</label>
                <input type="password" name="senha" class="form-control" required />
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn w-100 btn-primary">
                    Enviar
                </button>
            </div>
        </form>
    </div>
</body>

</html>