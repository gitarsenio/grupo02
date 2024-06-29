<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Especialidades</title>
</head>
<body>
   <h1>Especialidades</h1>
   <?php 
       $sql = "SELECT * FROM especialidades";
       $res = $conn->query($sql);
       $qtd = $res->num_rows;

       if($qtd > 0){
         print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
         print "<table class='table table-bordered table-striped table-hover'>";
          print "<tr>";
           print "<th>#</th>";
           print "<th>Especialidade</th>";
           
          print "</tr>";
         while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome_esp."</td>";
            

            print "</tr>";
         }
         print "</table>";
       }else{
          print "Nao encontrou resultado(s)";
       }

   ?>
</body>
</html>