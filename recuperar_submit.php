<?php
include('config.php');
include('gerador_otp.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['usuario']) || empty($_POST['email'])) {
        echo "Preencha o nome de usuário e o e-mail.";
    } else {
        // Filtrando e escapando os dados de entrada
        $usuario = $conn->real_escape_string($_POST['usuario']);
        $email = $conn->real_escape_string($_POST['email']);

        // Consulta SQL usando prepared statements para evitar SQL injection
        $stmt = $conn->prepare("SELECT id FROM administrador WHERE usuario = ? AND email = ?");
        $stmt->bind_param("ss", $usuario, $email);
        $stmt->execute();
        $stmt->store_result();

        // Verificar se a consulta retornou um único resultado
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($user_id);
            $stmt->fetch();

            // Gerar e armazenar o OTP no banco de dados
            $otp = generateOTP();
            $stmt->close(); // Fechar a consulta preparada antes de executar outra

            $update_stmt = $conn->prepare("UPDATE administrador SET otp_code = ? WHERE id = ?");
            $update_stmt->bind_param("si", $otp, $user_id);
            $update_stmt->execute();

            // Iniciar a sessão e redirecionar para a página OTP
            session_start();
            $_SESSION['user_id'] = $user_id;
            header("Location: otp.php");
            exit;
        } else {
            // Mensagem de erro genérica para não revelar informações
            echo "Usuário não encontrado. Verifique o nome de usuário e o e-mail inseridos.";
        }
    }
}
?>
