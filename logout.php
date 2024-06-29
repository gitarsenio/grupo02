<?php
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["nome"]);
unset($_SESSION["tipo"]);

session_destroy();

// Inclua o link para SweetAlert2 e jQuery se necessário
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>';

echo "<script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'success',
                title: 'Sessão Encerrada',
                text: 'Você foi desconectado com sucesso!',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location.href = 'restrito.php';
            });
        });
      </script>";
?>
