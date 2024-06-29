
<?php

include('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
  $nome = $_POST["nome"];
  $senha = $_POST["senha"];
  }
  
  $sql = "SELECT * FROM pacientes AS pac
          INNER JOIN especialidades AS esp ON pac.especialidades_id = esp.id
          WHERE pac.nome = '$nome' AND pac.senha = '$senha'";

  
    $res = $conn->query($sql) ;

    if ($res->num_rows > 0) {
       $html = "<table border='1'>";
       $html .= "<tr>";
       $html .= "<th>id</th>";
       $html .= "<th>Paciente</th>";
       $html .= "<th>Especialidade</th>";
       $html .= "<th>Identidade</th>";
       $html .= "<th>Telefone</th>";
       $html .= "<th>Data Consulta</th>";
       $html .= "<th>Genero</th>";
       $html .= "</tr>";
       while ($row = $res->fetch_object()) {
        $html .= "<tr>";
         $html .= "<td>".$row->idpaciente."</td>";
         $html .= "<td>".$row->nome."</td>";
         $html .= "<td>".$row->nome_esp."</td>";
         $html .= "<td>".$row->identidade."</td>";
         $html .= "<td>".$row->telefone."</td>";
         $html .= "<td>".$row->data_consulta."</td>";
         $html .= "<td>".$row->sexo."</td>";  
         $html .= "</tr>";
         
       }
       $html .= "</table>";
    }else {
        $html .= 'nenhum registo ';
    }
      // gerar o pdf

      // print $html;

  use Dompdf\Dompdf;

  require_once 'dompdf/autoload.inc.php';


  $dompdf = new Dompdf();

  $dompdf->loadHtml($html);

  $dompdf->set_option('defaultFont', 'sans');

  $dompdf->setPaper('A4', 'portrait');// portrait or landscape

  $dompdf->render();

  $dompdf->stream();

  
