<h1>Listar Medicos</h1>
<?php
  
      //   $sql = "SELECT * FROM pacientes AS pac  
      //   INNER JOIN  especialidades AS  esp ON pac.especialidades_id = esp.id";
      $sql = "SELECT * FROM medicos AS med
              INNER JOIN especialidades AS esp ON med.especialidades_id = esp.id";
        $res = $conn->query($sql);
        $qtd = $res->num_rows;

        if($qtd > 0){
            print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
           print "<div class='responsive table-responsive'>";
           print "<table class='table table-bordered table-responsive table-striped table-hover'>";
           print "<tr>";
           print "<th>#</th>";
             print "<th>especialidade</th>";
             print "<th>medico</th>";
             print "<th>Identidade</th>";
             print "<th>E-mail</th>";
             print "<th>Telefone</th>";
             print "<th>sexo</th>";
             print "<th>Editar</th>";
             print "<th>cancelar</th>";
             
           
           print "</tr>";
       while($row = $res->fetch_object()){
          print "<tr>";
             print "<td>".$row->id_medico."</td>";
             print "<td>".$row->nome_esp."</td>";
             print "<td>".$row->nome_medico."</td>";
             print "<td>".$row->identidade."</td>";
             print "<td>".$row->email."</td>";
             print "<td>".$row->telefone."</td>";
             print "<td>".$row->sexo."</td>";
           
             

             print "<td> 
            
             <form action= '?page=editar-medicos' method='post'>
                      <input type='hidden' name='id_medico' value='".$row->id_medico."'>
                      <button type='submit' class='btn btn-primary'>Editar</button> 
                    </form>
                        
            
                 </td>";
 
                 echo "<td> 
                 <form action= '?page=salvar-medicos' method='post'>
                     <input type='hidden' name='acao' value='excluir'>
                     <input type='hidden' name='id_medico' value='".$row->id_medico."'>
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
    
      