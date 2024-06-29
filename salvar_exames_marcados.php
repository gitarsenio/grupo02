
    <?php
    switch (@$_REQUEST['acao']) {
        case 'cadastrar':
            $sql = "INSERT INTO exames_marcados
                    (exames_id_exames, nome_paciente, bilhete, telefone, data_exames, data_nasc, sexo, senha) 
                    VALUES 
                    ('" . $_POST["exames_id_exames"] . "',
                    '" . $_POST["nome_paciente"] . "',
                    '" . $_POST["bilhete"] . "',
                    '" . $_POST["telefone"] . "',
                    '" . $_POST["data_exames"] . "',
                    '" . $_POST["data_nasc"] . "',
                    '" . $_POST["sexo"] . "',
                    '" . $_POST["senha"] . "'
                    )";

            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: 'Cadastro concluído com sucesso.'
                    }).then(function() {
                        window.location.href = '?page=listar_exames_marcados';
                    });
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Não foi possível cadastrar.'
                    }).then(function() {
                        window.location.href = '?page=listar_exames_marcados';
                    });
                </script>";
            }
            break;

        case 'editar':
            $sql = "UPDATE exames_marcados SET 
                    exames_id_exames=" . $_POST['exames_id_exames'] . ",
                    nome_paciente='" . $_POST['nome_paciente'] . "',
                    bilhete='" . $_POST['bilhete'] . "',
                    telefone='" . $_POST['telefone'] . "',
                    data_exames='" . $_POST['data_exames'] . "',
                    data_nasc='" . $_POST['data_nasc'] . "',
                    sexo='" . $_POST['sexo'] . "',
                    senha='" . $_POST['senha'] . "'
                    WHERE 
                    id_exames_marcados=" . $_POST["id_exames_marcados"];

            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: 'Editado com sucesso.'
                    }).then(function() {
                        window.location.href = '?page=listar_exames_marcados';
                    });
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Não foi possível editar.'
                    }).then(function() {
                        window.location.href = '?page=listar_exames_marcados';
                    });
                </script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM exames_marcados WHERE id_exames_marcados=" . $_REQUEST['id_exames_marcados'];

            $res = $conn->query($sql);
            if ($res == true) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: 'Excluído com sucesso.'
                    }).then(function() {
                        window.location.href = '?page=listar_exames_marcados';
                    });
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Não foi possível excluir.'
                    }).then(function() {
                        window.location.href = '?page=listar_exames_marcados';
                    });
                </script>";
            }
            break;
    }
    ?>

