<?php
    switch (@$_REQUEST['acao']) {
        case 'cadastrar':
            $sql = "INSERT INTO exames (exames) VALUES ('".$_POST["exames"]."')";
            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: 'Cadastro concluído com sucesso'
                    }).then(function() {
                        window.location.href = '?page=listar_exames';
                    });
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Não foi possível cadastrar'
                    }).then(function() {
                        window.location.href = '?page=listar_exames';
                    });
                </script>";
            }
            break;

        case 'editar':
            $sql = "UPDATE exames SET 
                    exames='".$_POST['exames']."'
                    WHERE id_exames=".$_POST["id_exames"];
            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: 'Editado com sucesso'
                    }).then(function() {
                        window.location.href = '?page=listar_exames';
                    });
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Não foi possível editar'
                    }).then(function() {
                        window.location.href = '?page=listar_exames';
                    });
                </script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM exames WHERE id_exames=".$_REQUEST['id_exames'];
            $res = $conn->query($sql);

            if ($res == true) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: 'Excluído com sucesso'
                    }).then(function() {
                        window.location.href = '?page=listar_exames';
                    });
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Não foi possível excluir'
                    }).then(function() {
                        window.location.href = '?page=listar_exames';
                    });
                </script>";
            }
            break;
    }
    ?>