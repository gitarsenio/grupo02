<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location:  restrito.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar OTP</title>
    <!-- Adicione o link para o Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">Insira o Código OTP</div>
                    <div class="card-body">
                        <form action="otp_verify.php" method="POST">
                            <div class="form-group">
                                <label for="otp">Código OTP:</label>
                                <input type="text" class="form-control" id="otp" name="otp" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="verificar_otp">Verificar OTP</button>
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
