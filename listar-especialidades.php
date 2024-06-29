<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Especialidades</title>
</head>
<body>
<h1>Listar Especialidades</h1>
   <?php 
       $sql = "SELECT * FROM especialidades";
       $res = $conn->query($sql);
       $qtd = $res->num_rows;

       if($qtd > 0){
         print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
         print "<table class='table table-bordered table-responsive table-striped table-hover'>";
          print "<tr>";
           print "<th>#</th>";
           print "<th>Especialidade</th>";
           print "<th>Editar</th>";
           print "<th>cancelar</th>";
           
          print "</tr>";
         while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome_esp."</td>";
           

            print "<td> 
              
               <form action= '?page=editar-especialidades' method='post'>
                        <input type='hidden' name='id' value='".$row->id."'>
                        <button type='submit' class='btn btn-primary'>Editar</button> 
                      </form>
                          
              
                   </td>";
   
                   echo "<td> 
                   <form action= '?page=salvar-especialidades' method='post'>
                       <input type='hidden' name='acao' value='excluir'>
                       <input type='hidden' name='id' value='".$row->id."'>
                       <button type='submit' class='btn btn-danger'>cancelar</button> 
                   </form>
                </td>";

            print "</tr>";
         }
         print "</table>";
       }else{
          print "Nao encontrou resultado(s)";
       }

   ?>
</body>
</html>