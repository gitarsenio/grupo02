<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
<h1>Listar</h1>
<?php
  include('config.php');
     // Obtém os dados do formulário:)
    

   // Obtém os dados do formulário:)
   
   // Consulta SQL para verificar se o usuário existe e obter suas informações, incluindo a especialidade :)
   $nome = @$_POST['nome'];
   $senha = @$_POST['senha'];

   //Consulta SQL para verificar se o usuário existe e obter suas informações, incluindo a especialidade :)
     $sql = "SELECT * FROM pacientes AS pac
                 INNER JOIN especialidades AS esp ON pac.especialidades_id = esp.id
                 WHERE pac.nome = '$nome' AND pac.senha = '$senha'";

             
       $result = $conn->query($sql);
       $qtd = $result->num_rows;
     


       if($qtd > 0){
         print "<br>";
         print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
         print "<table class='table table-responsive table-bordered table-striped table-hover'>";
         print "<tr>";
         print "<th>#</th>";
           print "<th>especialidade</th>";
           print "<th>Data de Consulta</th>";
           print "<th>Editar</th>";
           
         
         print "</tr>";
       while($row = $result->fetch_object()){
         print "<tr>";
           print "<td>".$row->idpaciente."</td>";
           print "<td>".$row->nome_esp."</td>";
           print "<td>".$row->data_consulta."</td>";
         
               print "<td> 
              
               <form action= '?page=editar_remarcar' method='post'>
                        <input type='hidden' name='idpaciente' value='".$row->idpaciente."'>
                        <button type='submit' class='btn btn-primary'>Editar</button> 
                      </form>
                          
              
                   </td>";
   
                   echo "<td> 
                   <form action= '?page=remarcar_consulta' method='post'>
                       <input type='hidden' name='acao' value='excluir'>
                       <input type='hidden' name='idpaciente' value='".$row->idpaciente."'>
                       <button type='submit' class='btn btn-danger'>cancelar</button> 
                   </form>
                </td>";
         print "</tr>";
       }
         print "</table>";
       }
