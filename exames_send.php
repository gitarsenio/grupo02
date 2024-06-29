<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/sweetalert2.min.css">
</head>
<body>
    <script src="./js/sweetalert2.min.js"></script>
    <!-- Seu formulário aqui -->
</body>
</html>
<?php
include('config.php');
session_start();

if (isset($_REQUEST['acao']) && $_REQUEST['acao'] === 'cadastrar') {
    // Validar e escapar os dados de entrada
    $exames_id_exames = mysqli_real_escape_string($conn, $_POST['exames_id_exames']);
    $nome_paciente = mysqli_real_escape_string($conn, $_POST['nome_paciente']);
    $bilhete = mysqli_real_escape_string($conn, $_POST['bilhete']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $data_exames = mysqli_real_escape_string($conn, $_POST['data_exames']);
    $data_nasc = mysqli_real_escape_string($conn, $_POST['data_nasc']);
    $sexo = mysqli_real_escape_string($conn, $_POST['sexo']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    // Validação de entrada
    if (empty($exames_id_exames) || empty($nome_paciente) || empty($bilhete) || empty($telefone) || empty($data_exames) || empty($data_nasc) || empty($sexo) || empty($senha)) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'Por favor, preencha todos os campos.'
            });
        </script>";
        exit;
    }

    // Inserir os dados no banco de dados usando declarações preparadas
    $sql = "INSERT INTO exames_marcados (exames_id_exames, nome_paciente, bilhete, telefone, data_exames, data_nasc, sexo, senha) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssssss", $exames_id_exames, $nome_paciente, $bilhete, $telefone, $data_exames, $data_nasc, $sexo, $senha);
    if ($stmt->execute()) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Sucesso',
                text: 'Exame marcado com sucesso!'
            }).then(function() {
                window.location.href = 'index.php';
            });
        </script>";
        exit;
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'Erro ao marcar exame. Por favor, tente novamente.'
            });
        </script>";
        exit;
    }
}
?>


