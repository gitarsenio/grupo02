

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Exames</title>
</head>
<body>

<?php
       $sql = "SELECT * FROM exames WHERE id_exames=".$_REQUEST['id_exames'];
       $res = $conn->query($sql);
       $row = $res->fetch_object();
?>
    
    
<div class="container w-50">
<form action="?page=salvar_exames" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id_exames" value="<?php print $row->id_exames; ?>">
        <div class="mb-3">
            
            <label for="exames">Exames</label>
             <input type="text" name="exames" value="<?php print $row->exames; ?>" class="form-control">
        </div>
         <div class="mb-3">
              <button type="submit" style="margin-left: 20%;" class="btn btn-success w-50">Enviar</button>
         </div>
    </form>
</div>
</body>
</html>