<?php
include('config.php');
require_once('TCPDF-main/tcpdf.php');

// Verificar se o ID da receita foi enviado
if(isset($_GET['id_receita'])) {
    // Receber o ID da receita
    $id_receita = $_GET['id_receita'];

    // Consultar o banco de dados para obter os detalhes da receita
    $sql = "SELECT * FROM receitas WHERE id_receita = $id_receita";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Se a receita for encontrada, criar um novo documento PDF
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Configurar informações do documento
        $pdf->SetCreator('Darkcode');
        $pdf->SetAuthor('Elidio Arsenioi');
        $pdf->SetTitle('Receita Médica');
        $pdf->SetSubject('Receita Médica');
        $pdf->SetKeywords('Receita, Médica, PDF');

        // Adicionar uma nova página
        $pdf->AddPage();
        // Adicionar a logo da clínica
        $image_file = './images/images__1_-removebg-preview.png'; // Caminho para a imagem da logo
        $pdf->Image($image_file, 15, 15, 50, '', 'png', '', 'T', false, 300, '', false, false, 0, false, false, false);

        // Adicionar o cabeçalho com o nome da clínica
        $pdf->SetFont('helvetica', 'B', 18);
        $pdf->Cell(0, 15, 'Clínica de Viana', 0, 1, 'C');
        $pdf->Ln(10); // Espaçamento entre o cabeçalho e o conteúdo

        // Título da Receita
        $pdf->SetFont('helvetica', 'B', 16);
        $pdf->Cell(0, 15, 'Receita Médica', 0, 1, 'C');
        $pdf->Ln(10); // Espaçamento entre o título e o conteúdo

        // Consultar os detalhes da receita
        $row = $result->fetch_assoc();

        // Nome do paciente
        $pdf->SetFont('helvetica', '', 12);
        $pdf->Cell(0, 10, 'Nome paciente: ' . $row['paciente'], 0, 1, 'L');
        $pdf->Ln(5); // Espaçamento entre o nome do paciente e os medicamentos

        // Medicamentos e suas dosagens
        $pdf->Cell(0, 10, 'Uso oral', 0, 1, 'L');
        $pdf->Cell(0, 10, 'Nome do medicamento: ' . $row['medicamento1'], 0, 1, 'L');
        $pdf->Cell(0, 10, 'Dosagem: ' . $row['dosagem1'], 0, 1, 'L');
        $pdf->Cell(0, 10, 'Nome do medicamento: ' . $row['medicamento2'], 0, 1, 'L');
        $pdf->Cell(0, 10, 'Dosagem: ' . $row['dosagem2'], 0, 1, 'L');
        $pdf->Ln(40); // Espaçamento entre os medicamentos e a data

        // Adicionar uma linha pontilhada para o nome do médico
        $pdf->Cell(0, 5, '', 'T', 1, 'C');
        $pdf->Cell(0, 10, 'Assinatura do Médico', 0, 1, 'C');
        $pdf->Ln(50); // Espaçamento entre a linha pontilhada e a data

        // Data e Local
        $pdf->Cell(0, 10, 'Luanda, ' . date('d.m.Y'), 0, 1, 'R');
        $pdf->Ln(10); // Espaçamento entre a data e o nome do médico

        // Saída do PDF para o navegador
        $pdf->Output('receita_medica.pdf', 'I');
    } else {
        echo "Receita não encontrada.";
    }
} else {
    echo "ID da receita não fornecido.";
}

// Fechar conexão com o banco de dados
$conn->close();
?>
