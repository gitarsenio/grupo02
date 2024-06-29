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

switch (@$_REQUEST['acao']) {
    case 'cadastrar':
        $sql = "INSERT INTO especialidades (nome_esp) 
                VALUES ('".$_POST["nome_esp"]."')";
        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Cadastro concluído com sucesso'
                }).then(function() {
                    window.location.href = '?page=listar-especialidades';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Não foi possível cadastrar'
                }).then(function() {
                    window.location.href = '?page=listar-especialidades';
                });
            </script>";
        }
        break;

    case 'editar':
        $sql = "UPDATE especialidades SET 
                nome_esp='".$_POST['nome_esp']."'
                WHERE id=".$_POST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Edição realizada com sucesso'
                }).then(function() {
                    window.location.href = '?page=listar-especialidades';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Não foi possível editar'
                }).then(function() {
                    window.location.href = '?page=listar-especialidades';
                });
            </script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM especialidades WHERE id=".$_REQUEST['id'];

        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Exclusão realizada com sucesso'
                }).then(function() {
                    window.location.href = '?page=listar-especialidades';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Não foi possível excluir'
                }).then(function() {
                    window.location.href = '?page=listar-especialidades';
                });
            </script>";
        }
        break;
}
?>
