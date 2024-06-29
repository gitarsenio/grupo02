<h1>Remarcar Consulta</h1>
<?php
switch ($_REQUEST["acao"]) {
    case 'editar':
        $sql = "UPDATE pacientes SET 
        especialidades_id=".$_POST['especialidades_id'].",
        data_consulta='".$_POST['data_consulta']."'
     WHERE 
        idpaciente=".$_POST["idpaciente"];

        $res = $conn->query($sql);
        if($res==true){
         print "<script>alert(' Remarcada  com sucesso com sucesso');</script>";
         print "<script>location.href='index.php';</script>"; 
        }else {
         print "<script>alert('Nao foi possivel remarcar');</script>";
         print "<script>location.href='index.php';</script>"; 
        }
     break;
     

    case 'excluir':
        $sql = "DELETE FROM pacientes WHERE idpaciente=".$_REQUEST['idpaciente'];

         $res = $conn->query($sql);
        if($res==true){
         print "<script>alert('consulta cancelada  com sucesso');</script>";
         print "<script>location.href='index.php';</script>"; 
        }else {
         print "<script>alert('Nao foi possivel cancelar a consulta');</script>";
         print "<script>location.href='index.php';</script>"; 
        }
        break;
        
    
   
 }
?>