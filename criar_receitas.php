<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Receita Médica</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Criar Receita Médica</h1>
        <form action="?page=salvar_receitas" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
            <div class="form-group">
                <label for="paciente">Paciente:</label>
                <input type="text" id="paciente" name="paciente" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="medicamento1">Medicamento 1:</label>
                <input type="text" id="medicamento1" name="medicamento1" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="dosagem1">Dosagem 1:</label>
                <input type="text" id="dosagem1" name="dosagem1" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="medicamento2">Medicamento 2:</label>
                <input type="text" id="medicamento2" name="medicamento2" class="form-control">
            </div>

            <div class="form-group">
                <label for="dosagem2">Dosagem 2:</label>
                <input type="text" id="dosagem2" name="dosagem2" class="form-control">
            </div>

            <div class="form-group">
                <label for="medico_id">ID do Médico:</label>
                <input type="text" id="medico_id" name="medicos_id_medico" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nome_medico">Nome do Médico:</label>
                <input type="text" id="nome_medico" name="nome_medico" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary btn_lang">Enviar</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
