

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Especialidades</title>
</head>
<body>

<?php
       $sql = "SELECT * FROM especialidades WHERE id=".$_REQUEST['id'];
       $res = $conn->query($sql);
       $row = $res->fetch_object();
?>
    
    
<form action="?page=salvar-especialidades" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">
        <div class="mb-3">
            
            <label for="nome_esp">Especialidade</label>
             <input type="text" name="nome_esp" value="<?php print $row->nome_esp; ?>" class="form-control">
        </div>
         <div class="mb-3">
              <button type="submit" class="btn btn-success w-100">Enviar</button>
         </div>
    </form>
</body>
</html>