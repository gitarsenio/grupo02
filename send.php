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

if (isset($_POST['submit'])) {
    // Validar e escapar os dados de entrada
    $especialidades_id = mysqli_real_escape_string($conn, $_POST['especialidades_id']);
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $identidade = mysqli_real_escape_string($conn, $_POST['identidade']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $data_nasc = mysqli_real_escape_string($conn, $_POST['data_nasc']);
    $data_consulta = mysqli_real_escape_string($conn, $_POST['data_consulta']);
    $sexo = mysqli_real_escape_string($conn, $_POST['sexo']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha

    // Validação de entrada
    if (empty($especialidades_id) || empty($nome) || empty($identidade) || empty($email) || empty($telefone) || empty($data_nasc) || empty($data_consulta) || empty($sexo) || empty($senha)) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'Por favor, preencha todos os campos.'
            });
        </script>";
        exit;
    }

    // Verificar se o email já está cadastrado
    $query = "SELECT * FROM pacientes WHERE email = '$email'";
    $result = $conn->query($query);
    // if ($result->num_rows > 0) {
    //     echo "<script>
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Erro',
    //             text: 'Este email já está cadastrado.'
    //         });
    //     </script>";
    //     exit;
    // }

    // Inserir os dados no banco de dados usando declarações preparadas
    $sql = "INSERT INTO pacientes(especialidades_id, nome, identidade, email, telefone, data_nasc, data_consulta, sexo, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssssss", $especialidades_id, $nome, $identidade, $email, $telefone, $data_nasc, $data_consulta, $sexo, $senha);
    if ($stmt->execute()) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Sucesso',
                text: 'Consulta marcada com sucesso!'
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
                text: 'Erro ao marcar consulta. Por favor, tente novamente.'
            });
        </script>";
        exit;
    }
}
?>

