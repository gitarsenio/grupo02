<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Contatos</title>
</head>
<body>
   <h1>Contatos</h1>
   <?php 
       $sql = "SELECT * FROM contatos";
       $res = $conn->query($sql);
       $qtd = $res->num_rows;

       if($qtd > 0){
         print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
         print "<table class='table table-responsive table-bordered table-striped table-hover'>";
          print "<tr>";
           print "<th>#</th>";
           print "<th>Nome</th>";
           print "<th>E-mail</th>";
           print "<th>Telefone</th>";
           print "<th>Mensagem</th>";
           
          print "</tr>";
         while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_contato."</td>";
            print "<td>".$row->nome_contato."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->telefone."</td>";
            print "<td>".$row->mensagem."</td>";
            
            print "</tr>";
         }
         print "</table>";
       }else{
          print "Nao encontrou resultado(s)";
       }

   ?>
</body>
</html>