<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    // Verificar se o usuário está logado
    if (!isset($_SESSION['user_id'])) {
        header("Location:  restrito.php");
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $nova_senha = $conn->real_escape_string($_POST['nova_senha']);
    $confirmar_senha = $conn->real_escape_string($_POST['confirmar_senha']);

    // Verificar se as senhas coincidem
    if ($nova_senha !== $confirmar_senha) {
        echo "As senhas não coincidem. Por favor, tente novamente.";
        exit;
    }

    // Hash da nova senha
    $hashed_senha = password_hash($nova_senha, PASSWORD_DEFAULT);

    // Atualizar a senha do usuário no banco de dados
    $sql = "UPDATE administrador SET senha = '$hashed_senha' WHERE id = $user_id";
    if ($conn->query($sql) === TRUE) {
        // Senha atualizada com sucesso, redirecionar para página de login
        session_destroy();
        header("Location:  restrito.php");
        exit;
    } else {
        echo "Erro ao atualizar a senha: " . $conn->error;
    }
}
?>
