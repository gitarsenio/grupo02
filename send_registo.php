<?php
switch (@$_REQUEST['acao']) {
    case 'cadastrar':
      
        $sql = "INSERT INTO registos_medicos (pacientes_idpaciente, medicos_id_medico, diagnostico, prescricao, data_consulta, notas)
              VALUES 
              ('".$_POST["pacientes_idpaciente"]."',
              '".$_POST["medicos_id_medico"]."',
              '".$_POST["diagnostico"]."',
              '".$_POST["prescricao"]."',
              '".$_POST["data_consulta"]."',
              '".$_POST["notas"]."'
              )";

        $res = $conn->query($sql);

        if($res==true)
        {
            print "<script>alert('registo enviado  com sucesso');</script>";
            print "<script>location.href='dashboard.php';</script>"; 
        }else {
            print "<script>alert('Nao foi possivel enviar registo');</script>";
            print "<script>location.href='dashboard.php';</script>"; 
        }




    break;
}
?>