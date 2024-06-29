<h1>Exames marcados</h1>
<?php
  
      //   $sql = "SELECT * FROM pacientes AS pac  
      //   INNER JOIN  especialidades AS  esp ON pac.especialidades_id = esp.id";
      $sql = "SELECT * FROM exames_marcados AS mac
              INNER JOIN exames AS ex ON mac.exames_id_exames = ex.id_exames";
              
        $res = $conn->query($sql);
        $qtd = $res->num_rows;

        if($qtd > 0){
         echo "<div class=' table-responsive'";
            print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
            print "<table class='table table-bordered table-responsive table-striped table-hover'>";
             print "<tr>";
             print "<th>#</th>";
               print "<th>Exames</th>";
               print "<th>Paciente</th>";
               print "<th>Identidade</th>";
               print "<th>Data Exames </th>";
               print "<th>Telefone</th>";
               print "<th>Data Nascim</th>";
               print "<th>Sexo</th>";
               print "<th>Editar</th>";
               print "<th>cancelar</th>";
               
             
             print "</tr>";
         while($row = $res->fetch_object()){
            print "<tr>";
               print "<td>".$row->id_exames_marcados."</td>";
               print "<td>".$row->exames."</td>";
               print "<td>".$row->nome_paciente."</td>";
               print "<td>".$row->bilhete."</td>";
               print "<td>".$row->data_exames."</td>";
               print "<td>".$row->telefone."</td>";
               print "<td>".$row->data_nasc."</td>";
               print "<td>".$row->sexo."</td>";
             
               print "<td> 
              
            <form action= '?page=editar_exames_marcados' method='post'>
                     <input type='hidden' name='id_exames_marcados' value='".$row->id_exames_marcados."'>
                     <button type='submit' class='btn btn-primary'>Editar</button> 
                   </form>
                       
           
                </td>";

                echo "<td> 
                <form action= '?page=salvar_exames_marcados' method='post'>
                    <input type='hidden' name='acao' value='excluir'>
                    <input type='hidden' name='id_exames_marcados' value='".$row->id_exames_marcados."'>
                    <button type='submit' class='btn btn-danger'>cancelar</button> 
                </form>
             </td>";
            print "</tr>";
           print "</div>"; 
            
         }
            print "</table>";
          }else{
             print "Nao encontrou resultado(s)";
          }
    
      