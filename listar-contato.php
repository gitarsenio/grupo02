<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Contactos</title>
</head>
<body>
   <h1>Listar Contactos</h1>
   <?php 
       $sql = "SELECT * FROM contatos";
       $res = $conn->query($sql);
       $qtd = $res->num_rows;

       if($qtd > 0){
         print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
        print "<div class='responsive table-responsive'>";
        print "<table class='table table-bordered table-responsive table-striped table-hover'>";
        print "<tr>";
         print "<th>#</th>";
         print "<th>Nome</th>";
         print "<th>E-mail</th>";
         print "<th>Telefone</th>";
         print "<th>Mensagem</th>";
         print "<th>Excluir</th>";
         
        print "</tr>";
       while($row = $res->fetch_object()){
          print "<tr>";
          print "<td>".$row->id_contato."</td>";
          print "<td>".$row->nome_contato."</td>";
          print "<td>".$row->email."</td>";
          print "<td>".$row->telefone."</td>";
          print "<td>".$row->mensagem."</td>";
          print "<td> 
              <form action= '?page=salvar-contato' method='post'>
                     <input type='hidden' name='acao' value='excluir'>
                     <input type='hidden' name='id_contato' value='".$row->id_contato."'>
                     <button type='submit' class='btn btn-danger'>cancelar</button> 
                 </form>
          </td>";
         

          print "</tr>";
       }
       print "</table>";
        print "</div>";
       }else{
          print "Nao encontrou resultado(s)";
       }

   ?>
</body>
</html>