
<?php

  switch (@$_REQUEST['acao']) {
    case 'cadastrar':
      
            $sql = "INSERT INTO receitas
            (medicos_id_medico,paciente,medicamento1,dosagem1,medicamento2,dosagem2) 
            VALUES 
            ('".$_POST["medicos_id_medico"]."',
            '".$_POST["paciente"]."',
            '".$_POST["medicamento1"]."',
            '".$_POST["dosagem1"]."',
            '".$_POST["medicamento2"]."',
            '".$_POST["dosagem2"]."'
            )";
            
            $res = $conn->query($sql);

            if($res==true)
            {
                print "<script>alert('cadastro concluido com sucesso');</script>";
                print "<script>location.href='?page=listar_receitas';</script>"; 
            }else {
                print "<script>alert('Nao foi possivel cadastrar');</script>";
                print "<script>location.href='?page=listar_receitas';</script>"; 
            }

    break;

        case 'excluir':

            $sql = "DELETE FROM receitas WHERE id_receita=".$_REQUEST['id_receita'];

          $res = $conn->query($sql);
          if($res==true){
           print "<script>alert('excluido  com sucesso');</script>";
           print "<script>location.href='?page=listar_receitas';</script>"; 
          }else {
           print "<script>alert('Nao foi possivel excluir');</script>";
           print "<script>location.href='?page=listar_receitas';</script>"; 
          }
        break;
  }


?>