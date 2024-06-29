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
        $sql = "INSERT INTO medicos
                (especialidades_id, nome_medico, identidade, email, telefone, data_nasc, sexo, usuario, senha) 
                VALUES 
                ('".$_POST["especialidades_id"]."',
                '".$_POST["nome_medico"]."',
                '".$_POST["identidade"]."',
                '".$_POST["email"]."',
                '".$_POST["telefone"]."',
                '".$_POST["data_nasc"]."',
                '".$_POST["sexo"]."',
                '".$_POST["usuario"]."',
                '".$_POST["senha"]."')";
        
        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Cadastro concluído com sucesso'
                }).then(function() {
                    window.location.href = '?page=listar-medicos';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Não foi possível cadastrar'
                }).then(function() {
                    window.location.href = '?page=listar-medicos';
                });
            </script>";
        }
        break;

    case 'editar':
        $sql = "UPDATE medicos SET 
                especialidades_id=".$_POST['especialidades_id'].",
                nome_medico='".$_POST['nome_medico']."',
                identidade='".$_POST['identidade']."',
                email='".$_POST['email']."',
                telefone='".$_POST['telefone']."',
                data_nasc='".$_POST['data_nasc']."',
                sexo='".$_POST['sexo']."',
                usuario='".$_POST["usuario"]."',
                senha='".$_POST['senha']."'
                WHERE 
                id_medico=".$_POST["id_medico"];

        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Edição realizada com sucesso'
                }).then(function() {
                    window.location.href = '?page=listar-medicos';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Não foi possível editar'
                }).then(function() {
                    window.location.href = '?page=listar-medicos';
                });
            </script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM medicos WHERE id_medico=".$_REQUEST['id_medico'];

        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Exclusão realizada com sucesso'
                }).then(function() {
                    window.location.href = '?page=listar-medicos';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Não foi possível excluir'
                }).then(function() {
                    window.location.href = '?page=listar-medicos';
                });
            </script>";
        }
        break;
}
?>
