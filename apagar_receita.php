<?php



  switch ($_REQUEST['acao']) {
    
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


