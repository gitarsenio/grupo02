<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Histórico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        background-color: #cccccc;
    }
    .container {
        margin-top: 10%;
    }
</style>
<body>




    <div class="container bg-grey">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Meu Histórico</h3>
                    </div>
                    <div class="card-body">
                        <form action="Historico.php" method="POST">
                            <div class="mb-3">
                                <label for="identidade" class="form-label">Número de identidade:</label>
                                <input type="text" class="form-control" id="identidade" name="identidade" required>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha:</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Consultar Histórico</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
