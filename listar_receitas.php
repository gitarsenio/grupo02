        <h1>Listar Receitas</h1>
        <?php
        $sql = "SELECT * FROM receitas AS rec 
        INNER JOIN medicos AS med ON rec.medicos_id_medico = med.id_medico";

     
        $res = $conn->query($sql);
        $qtd = $res->num_rows;
        if($qtd > 0){
            print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
            print "<div class=' table-responsive'>";
            print "<table class='table table-bordered table-responsive table-striped table-hover'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Paciente</th>";
            print "<th>Medicamento </th>";
            print "<th>Dosagem </th>";
            print "<th>Medicamento </th>";
            print "<th>Dosagem </th>";
            print "<th>Médico</th>";
            print "<th>Imprimir</th>";
            print "<th>cancelar</th>";
            
            print "</tr>";
            while($row = $res->fetch_object()){
                print "<tr>";
                print "<td>".$row->id_receita."</td>";
                print "<td>".$row->paciente."</td>";
                print "<td>".$row->medicamento1."</td>";
                print "<td>".$row->dosagem1."</td>";
                print "<td>".$row->medicamento2."</td>";
                print "<td>".$row->dosagem2."</td>";
                print "<td>".$row->nome_medico."</td>";
                print "<td> 
                <button onclick=\"location.href='imprimir_receita.php?id_receita=".$row->id_receita."';\" 
        class='btn btn-success'>Imprimir</button>
               
            </td>";

                echo "<td> 
                <form action= '?page=salvar_receitas' method='post'>
                    <input type='hidden' name='acao' value='excluir'>
                    <input type='hidden' name='id_receita' value='".$row->id_receita."'>
                    <button type='submit' class='btn btn-danger'>cancelar</button> 
                </form>
             </td>";

                print "</tr>";
            }
            print "</table>";
            print "</div>";
        } else {
            print "Nenhum resultado encontrado.";
        }
        ?>
