<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['usuario']) || empty($_POST['email'])) {
        echo "Preencha o nome de usuário e o e-mail.";
    } else {
        // Filtrando e escapando dados de entrada
        $usuario = $conn->real_escape_string($_POST['usuario']);
        $email = $conn->real_escape_string($_POST['email']);

        // Preparar e executar a consulta SQL usando prepared statements
        $stmt = $conn->prepare("SELECT id_medico FROM medicos WHERE usuario = ? AND email = ?");
        $stmt->bind_param("ss", $usuario, $email);
        $stmt->execute();
        $stmt->store_result();

        // Verificar se a consulta retornou algum resultado
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($user_id);
            $stmt->fetch();

            // Gerar e armazenar o OTP no banco de dados
            $otp = generateOTP();
            $sql_update = "UPDATE medicos SET otp_code = ? WHERE id_medico = ?";
            $update_stmt = $conn->prepare($sql_update);
            $update_stmt->bind_param("si", $otp, $user_id);
            $update_stmt->execute();

            // Iniciar a sessão e redirecionar para a página OTP
            session_start();
            $_SESSION['user_id'] = $user_id;
            header("Location: otp_med.php");
            exit;
        } else {
            // Mensagem de erro genérica para evitar revelar informações
            echo "Usuário não encontrado. Verifique o nome de usuário e o e-mail inseridos.";
        }

        // Fechar a consulta preparada
        $stmt->close();
    }
}
?>
