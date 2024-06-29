<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Exames</title>
</head>
<body>
<h1>Listar Exames</h1>
   <?php 
       $sql = "SELECT * FROM exames";
       $res = $conn->query($sql);
       $qtd = $res->num_rows;

       if($qtd > 0){
         print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
         print "<table class='table table-bordered table-responsive table-striped table-hover'>";
          print "<tr>";
           print "<th>#</th>";
           print "<th>Exames</th>";
           print "<th>Editar</th>";
           print "<th>cancelar</th>";
          print "</tr>";
         while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_exames."</td>";
            print "<td>".$row->exames."</td>";
            


            print "<td> 
              
            <form action= '?page=editar_exames' method='post'>
                     <input type='hidden' name='id_exames' value='".$row->id_exames."'>
                     <button type='submit' class='btn btn-primary'>Editar</button> 
                   </form>
                       
           
                </td>";

                echo "<td> 
                <form action= '?page=salvar_exames' method='post'>
                    <input type='hidden' name='acao' value='excluir'>
                    <input type='hidden' name='id_exames' value='".$row->id_exames."'>
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