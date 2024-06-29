


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
                    title: 'Acesso inválido',
                    text: 'Somente usuários de tipo 1 podem fazer alterações'
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
                title: 'Acesso restrito',
                text: 'Somente administradores podem executar alterações'
            }).then(function() {
                window.location.href = 'dashboard.php';
            });
        </script>";
        exit;
    }

    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $hashedPassword = password_hash($_POST['senha'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO administrador
                    (nome, usuario, email, telefone, senha) 
                    VALUES 
                    ('".$_POST['nome']."',
                     '".$_POST['usuario']."',
                     '".$_POST['email']."',
                     '".$_POST['telefone']."',
                     '$hashedPassword')";

            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: 'Cadastro concluído com sucesso'
                    }).then(function() {
                        window.location.href = '?page=listar-administrador';
                    });
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Não foi possível cadastrar'
                    }).then(function() {
                        window.location.href = '?page=listar-administrador';
                    });
                </script>";
            }
            break;

        case 'editar':
            $sql = "UPDATE administrador SET 
                    nome='".$_POST['nome']."',
                    usuario='".$_POST['usuario']."',
                    email='".$_POST['email']."',
                    telefone='".$_POST['telefone']."'
                    WHERE id=".$_POST['id'];

            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: 'Editado com sucesso'
                    }).then(function() {
                        window.location.href = '?page=listar-administrador';
                    });
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Não foi possível editar'
                    }).then(function() {
                        window.location.href = '?page=listar-administrador';
                    });
                </script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM administrador WHERE id=".$_REQUEST['id'];

            $res = $conn->query($sql);
            if ($res == true) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: 'Excluído com sucesso'
                    }).then(function() {
                        window.location.href = '?page=listar-administrador';
                    });
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Não foi possível excluir'
                    }).then(function() {
                        window.location.href = '?page=listar-administrador';
                    });
                </script>";
            }
            break;
    }
    ?>
