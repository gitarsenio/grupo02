<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar exames</title>
</head>
<body>
   <div class="container">
   <div class=" mb-3">
   <h1>Cadastrar exames</h1>
   </div>
    <form action="?page=salvar_exames" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            
            <label for="exames">Exames</label>
             <input type="text" name="exames" class="form-control" required />
        </div>
         <div class="mb-3">
              <button type="submit" name="submit" class="btn btn_lang btn-success">
                 Enviar
              </button>
         </div>
    </form>
   </div>
</body>
</html>