<?php
session_start();

include('config.php');

// Verificar se o usuário está logado e se o OTP foi verificado
// if (!isset($_SESSION['user_id']) || !isset($_SESSION['otp_verified']) || $_SESSION['otp_verified'] !== true) {
//     header("Location: restrito.php");
//     exit;
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['nova_senha']) || !isset($_POST['confirmar_senha'])) {
        echo "Por favor, preencha todos os campos.";
    } else {
        $user_id = $_SESSION['user_id'];
        $nova_senha = $conn->real_escape_string($_POST['nova_senha']);
        $confirmar_senha = $conn->real_escape_string($_POST['confirmar_senha']);

        // Verificar se as senhas coincidem
        if ($nova_senha !== $confirmar_senha) {
            echo "As senhas não coincidem. Por favor, tente novamente.";
            exit;
        }

        // Hash da nova senha
        // $hashed_senha = password_hash($nova_senha, PASSWORD_DEFAULT);

        // Atualizar a senha do usuário no banco de dados
        $sql = "UPDATE administrador SET senha = '$nova_senha' WHERE id = $user_id";
        if ($conn->query($sql) === TRUE) {
            // Senha atualizada com sucesso, redirecionar para página de login
            session_destroy();
            header("Location: restrito.php");
            exit;
        } else {
            echo "Erro ao atualizar a senha: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
    <!-- Adicione o link para o Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">Redefinir Senha</div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group">
                                <label for="nova_senha">Nova Senha:</label>
                                <input type="password" class="form-control" id="nova_senha" name="nova_senha" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmar_senha">Confirmar Senha:</label>
                                <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Redefinir Senha</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Adicione os scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
