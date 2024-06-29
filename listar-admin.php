<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTAR Amins</title>
</head>
<body>
    <h1>Listar Admins</h1>
   <?php 
       $sql = "SELECT * FROM administrador";
       $res = $conn->query($sql);
       $qtd = $res->num_rows;

       if($qtd > 0){
        echo "<div class='responsive table-responsive '>";
            echo "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
            echo "<table class='table table-bordered table-striped table-responsive table-hover'>";
            echo "<tr>";
            echo "<th>#</th>";
            echo "<th>Administradores</th>";
            echo "<th>Editar</th>";
            echo "<th>cancelar</th>";

            echo "</tr>";
            while($row = $res->fetch_object()){
                echo "<tr>";
                echo "<td>".$row->id."</td>";
                echo "<td>".$row->nome."</td>";
                echo "<td> 
                
                <form action= '?page=editar-administrador' method='post'>
                        <input type='hidden' name='id' value='".$row->id."'>
                        <button type='submit' class='btn btn-primary'>Editar</button> 
                    </form>
                        
            
                    </td>";

                    echo "<td> 
                    <form action= '?page=salvar-administrador' method='post'>
                        <input type='hidden' name='acao' value='excluir'>
                        <input type='hidden' name='id' value='".$row->id."'>
                        <button type='submit' class='btn btn-danger'>cancelar</button> 
                    </form>
                </td>";

                echo "</tr>";
            
         }
         echo "</table>";
         echo "</div>";
       }else{
          echo "Nao encontrou resultado(s)";
       }

   ?>
</body>
</html>