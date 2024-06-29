

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Especialidades</title>
</head>
<body>

<?php
       $sql = "SELECT * FROM administrador WHERE id=".$_REQUEST['id'];
       $res = $conn->query($sql);
       $row = $res->fetch_object();
?>
    
    
 <form action="?page=salvar-administrador" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">
        <div class="mb-3">
            
            <label for="nome">Nome administrador</label>
             <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
        </div>
        <div class="mb-3">
            
            <label for="nome">Usuario</label>
             <input type="text" name="usuario" value="<?php print $row->usuario; ?>" class="form-control">
        </div>
        <div class="mb-3">
            
            <label for="nome">E-mail</label>
             <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
        </div>
        <div class="mb-3">
            
            <label for="nome">Telefone</label>
             <input type="tel" name="telefone" value="<?php print $row->telefone; ?>" class="form-control">
        </div>
        <div class="mb-3">
            
            <label for="nome">Senha</label>
             <input type="password" name="senha" value="<?php print $row->senha; ?>" class="form-control">
        </div>
         <div class="mb-3">
              <button type="submit" class="btn btn-success btn_lang">Enviar</button>
         </div>
 </form>
</body>
</html>