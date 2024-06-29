
<?php

include('config.php');

     $sql = "SELECT * FROM contatos";
   
    $res = $conn->query($sql) ;

    if ($res->num_rows > 0) {
       $html = "<table border='1'>";
       $html .= "<tr>";
       $html .= "<th>id</th>";
       $html .= "<th>Nome</th>";
       $html .= "<th>E-mail</th>";
       $html .= "<th>Telefone</th>";
       $html .= "<th>Mensagem</th>";
       $html .= "</tr>";
       while ($row = $res->fetch_object()) {
        $html .= "<tr>";
         $html .= "<td>".$row->id_contato."</td>";
         $html .= "<td>".$row->nome_contato."</td>";
         $html .= "<td>".$row->email."</td>";
         $html .= "<td>".$row->telefone."</td>";
         $html .= "<td>".$row->mensagem."</td>";
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

  
