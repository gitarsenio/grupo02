         <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
         <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
         <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
         <h1>Consultas marcadas</h1>
         <?php



         //   $sql = "SELECT * FROM pacientes AS pac  
         //   INNER JOIN  especialidades AS  esp ON pac.especialidades_id = esp.id";
         $sql = "SELECT * FROM pacientes AS pac
              INNER JOIN especialidades AS esp ON pac.especialidades_id = esp.id";


         $res = $conn->query($sql);

         $qtd = $res->num_rows;

         if ($qtd > 0) {
            print "<p >Encontrou <b>$qtd</b> resultado(s).</p>";
            print "<div class='table-responsive responsive'>";
            print "<table class='table table-bordered table-responsive table-striped table-hover' width='100%'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>especialidade</th>";
            // print "<th>Medico</th>";
            print "<th>Paciente</th>";
            print "<th>Identidade</th>";
            print "<th>Telefone</th>";
            print "<th>Data de Consulta</th>";
            print "<th>sexo</th>";
            print "<th>Editar</th>";
            print "<th>cancelar</th>";


            print "</tr>";
            while ($row = $res->fetch_object()) {
               print "<tr>";
               print "<td>" . $row->idpaciente . "</td>";
               print "<td>" . $row->nome_esp . "</td>";
               // print "<td>".$row->nome_medico."</td>";
               print "<td>" . $row->nome . "</td>";
               print "<td>" . $row->identidade . "</td>";
               print "<td>" . $row->telefone . "</td>";
               print "<td>" . $row->data_consulta . "</td>";
               print "<td>" . $row->sexo . "</td>";

               print "<td> 
               
                  <form action= '?page=editar-pacientes' method='post'>
                           <input type='hidden' name='idpaciente' value='" . $row->idpaciente . "'>
                           <button type='submit' class='btn btn-primary'>Editar</button> 
                        </form>

                  
                           
               
                     </td>";

               echo "<td> 
                     <form action= '?page=salvar-pacientes' method='post'>
                        <input type='hidden' name='acao' value='excluir'>
                        <input type='hidden' name='idpaciente' value='" . $row->idpaciente . "'>
                        <button type='submit' class='btn btn-danger'>cancelar</button> 
                     </form>
                  </td>";
               print "</tr>";
            }
            print "</table>";
            print "</div>"; // Fechar o div table-responsive
         } else {
            print "Nao encontrou resultado(s)";
         }
