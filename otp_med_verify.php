<?php
 include('config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['verificar_otp'])) {
    if (!isset($_SESSION['user_id'])) {
        header("Location: restrito.php");
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $otp_inserido = $_POST['otp'];

    // Verificar se o OTP inserido está correto
    $sql_code = "SELECT otp_code FROM medicos WHERE id_medico = $user_id";
    $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
    $usuario_data = $sql_query->fetch_assoc();
    $otp_armazenado = $usuario_data['otp_code'];

    if ($otp_inserido === $otp_armazenado) {
        header("Location: redefinir_med_senha.php");
        exit;
    } else {
        echo "Código OTP incorreto. Tente novamente.";
    }
}
?>
