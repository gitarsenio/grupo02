<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Especialidades</title>
</head>
<body>
    <h1>Cadastrar Especialidades</h1>
    <form action="?page=salvar-especialidades" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            
            <label for="nome_esp">Especialidade</label>
             <input type="text" name="nome_esp" class="form-control" required />
        </div>
         <div class="mb-3">
              <button type="submit" name="submit" class=" w-100 btn btn-success">
                 Enviar
              </button>
         </div>
    </form>
</body>
</html>