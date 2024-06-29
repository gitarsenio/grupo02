
<?php
// include('config.php');

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
                title: 'Acesso Negado',
                text: 'Nível de acesso inválido, somente usuários de tipo 1 podem fazer alterações.'
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
            title: 'Acesso Negado',
            text: 'Somente administradores podem executar alterações.'
        }).then(function() {
            window.location.href = 'dashboard.php';
        });
    </script>";
    exit;
}

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $sql = "INSERT INTO pacientes (especialidades_id, nome, identidade, email, telefone, data_nasc, data_consulta, sexo, senha) 
                VALUES ('" . $_POST["especialidades_id"] . "', '" . $_POST["nome"] . "', '" . $_POST["identidade"] . "', '" . $_POST["email"] . "', 
                        '" . $_POST["telefone"] . "', '" . $_POST["data_nasc"] . "', '" . $_POST["data_consulta"] . "', '" . $_POST["sexo"] . "', 
                        '" . $_POST["senha"] . "')";

        $res = $conn->query($sql);
        if ($res == true) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Cadastrado com sucesso.'
                }).then(function() {
                    window.location.href = '?page=listar-pacientes';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Não foi possível cadastrar.'
                }).then(function() {
                    window.location.href = '?page=listar-pacientes';
                });
            </script>";
        }
        break;

    case 'editar':
        $sql = "UPDATE pacientes SET 
                    especialidades_id=" . $_POST['especialidades_id'] . ", 
                    nome='" . $_POST['nome'] . "', 
                    identidade='" . $_POST['identidade'] . "', 
                    email='" . $_POST['email'] . "', 
                    telefone='" . $_POST['telefone'] . "', 
                    data_nasc='" . $_POST['data_nasc'] . "', 
                    data_consulta='" . $_POST['data_consulta'] . "', 
                    sexo='" . $_POST['sexo'] . "', 
                    senha='" . $_POST['senha'] . "' 
                WHERE idpaciente=" . $_POST["idpaciente"];

        $res = $conn->query($sql);
        if ($res == true) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Editado com sucesso.'
                }).then(function() {
                    window.location.href = '?page=listar-pacientes';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Não foi possível editar.'
                }).then(function() {
                    window.location.href = '?page=listar-pacientes';
                });
            </script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM pacientes WHERE idpaciente=" . $_REQUEST['idpaciente'];

        $res = $conn->query($sql);
        if ($res == true) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Excluído com sucesso.'
                }).then(function() {
                    window.location.href = '?page=listar-pacientes';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Não foi possível excluir.'
                }).then(function() {
                    window.location.href = '?page=listar-pacientes';
                });
            </script>";
        }
        break;
}
?>
