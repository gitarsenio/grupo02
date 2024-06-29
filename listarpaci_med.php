<h1>Listar pacientes</h1>
<?php

   
  
      //   $sql = "SELECT * FROM pacientes AS pac  
      //   INNER JOIN  especialidades AS  esp ON pac.especialidades_id = esp.id";
      $sql = "SELECT * FROM pacientes AS pac
              INNER JOIN especialidades AS esp ON pac.especialidades_id = esp.id";

           
        $res = $conn->query($sql);
   
        $qtd = $res->num_rows;
   
        if($qtd > 0){
            print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
            print "<table class='table table-responsive table-bordered table-striped table-hover'>";
             print "<tr>";
             print "<th>#</th>";
               print "<th>especialidade</th>";
               // print "<th>Medico</th>";
               print "<th>Paciente</th>";
               print "<th>Identidade</th>";
               print "<th>Telefone</th>";
               print "<th>Data de Consulta</th>";
               print "<th>sexo</th>";
              
               
             
             print "</tr>";
         while($row = $res->fetch_object()){
            print "<tr>";
               print "<td>".$row->idpaciente."</td>";
               print "<td>".$row->nome_esp."</td>";
               // print "<td>".$row->nome_medico."</td>";
               print "<td>".$row->nome."</td>";
               print "<td>".$row->identidade."</td>";
               print "<td>".$row->telefone."</td>";
               print "<td>".$row->data_consulta."</td>";
               print "<td>".$row->sexo."</td>";
            print "</tr>";
         }
            print "</table>";
          }else{
             print "Nao encontrou resultado(s)";
          }
    
      