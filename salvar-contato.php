<?php
$id = $_SESSION['id']; 
$sql = "SELECT tipo FROM administrador WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $user_type = $row['tipo'];

    if ($user_type == 2) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Erro de Acesso',
                text: 'Nível de acesso inválido. Somente usuários do tipo 1 podem fazer alterações.'
            }).then(function() {
                window.location.href = 'dashboard.php';
            });
        </script>";
        exit;
    }
} else {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Erro de Acesso',
            text: 'Apenas administradores podem executar alterações.'
        }).then(function() {
            window.location.href = 'dashboard.php';
        });
    </script>";
    exit;
}

switch ($_REQUEST['acao']) {
    case 'excluir':
        $sql = "DELETE FROM contatos WHERE id_contato=".$_REQUEST['id_contato'];

        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Contato excluído com sucesso'
                }).then(function() {
                    window.location.href = '?page=listar-contato';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Não foi possível excluir o contato'
                }).then(function() {
                    window.location.href = '?page=listar-contatos';
                });
            </script>";
        }
        break;
}
?>
