<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php


// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    // Consulta SQL para verificar se o nome de usuário e senha do médico correspondem
    $sql = "SELECT * FROM medicos WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Nome de usuário e senha do médico correspondem, exibir registros médicos
        $row = $result->fetch_assoc();
        $id_medico = $row['id_medico'];
        
        
        // Consulta SQL para recuperar registros médicos associados ao médico
        $sql_registros = "SELECT reg.*, pac.nome AS nome_paciente, pac.telefone, pac.data_nasc, med.nome_medico
                          FROM registos_medicos AS reg
                          INNER JOIN pacientes AS pac ON reg.pacientes_idpaciente = pac.idpaciente
                          INNER JOIN medicos AS med ON reg.medicos_id_medico = med.id_medico
                          WHERE med.id_medico = '$id_medico'";
        
        $result_registros = $conn->query($sql_registros);
        $qtd = $result_registros->num_rows;
        
        if ($result_registros->num_rows > 0) {
            // Exibir os dados de cada registro médico
            echo "<div class='container table-responsive'";
                    echo "<h1 style='text-align: center;' >Registos Médicos DR(a):". $row["nome_medico"]. "</h1>";
                    echo "<p style='text-align: center;' >Encontrou <b>$qtd</b> resultado(s).</p>";
                    echo "<table class='table table-bordered table-striped table-hover'>";
                    echo "<tr>";
                    echo "<th>Id registo</th>";
                    echo "<th>Paciente</th>";
                    echo "<th>Medico</th>";
                    echo "<th>Data consulta</th>";
                    echo "<th>Diagnóstico</th>";
                    echo "<th>Prescrição</th>";
                    echo "<th>Notas</th>";
                    echo "</tr>";
                    while($row = $result_registros->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>". $row["id_registo"]."</td>";
                        echo "<td>". $row["nome_paciente"]."</td>";
                        echo "<td>". $row["nome_medico"]."</td>";
                        echo "<td>". $row["data_consulta"]."</td>";
                        echo "<td>". $row["diagnostico"]."</td>";
                        echo "<td>". $row["prescricao"]."</td>";
                        echo "<td>". $row["notas"]."</td>";
                    echo "</tr>";
                echo "</div>";    
            }
           
        } else {
            echo "Nenhum registro médico encontrado para o médico: ". $row["nome_medico"]. ".";
        }
    } else {
        echo "Nome de usuário ou senha do médico incorretos<a href='?page=login'>Entrar</a>.";
    }

   
} 


$conn->close();
?>
