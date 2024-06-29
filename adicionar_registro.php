<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Registro Médico</title>
	<link rel="icon" type="image/png" href="images/hospital-4-128-removebg-preview.png" sizes="32x32">
     <!-- fim -->
     <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- fim -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/sidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body>
    <h2>Adicionar Registro Médico</h2>
    <form action="?page=send_registo" method="post">
    <input type="hidden" name="acao" value="cadastrar">
        <label for="pacientes_idpaciente">ID do Paciente:</label>
        <input type="text" name="pacientes_idpaciente" id="pacientes_idpaciente" class="form-control">
        
        <label for="medicos_id_medico">ID do Médico:</label>
        <input type="text" name="medicos_id_medico" id="medicos_id_medico" class="form-control">
        
        <label for="diagnostico">Diagnóstico:</label><br>
        <textarea name="diagnostico" id="diagnostico" rows="4" cols="50" class="form-control"></textarea>
        
        <label for="prescricao">Prescrição:</label><br>
        <textarea name="prescricao" id="prescricao" rows="4" cols="50" class="form-control"></textarea>
        
        <label for="notas">Notas:</label><br>
        <textarea name="notas" id="notas" rows="4" cols="50" class="form-control"></textarea>

        <label for="data_consulta">Data Consulta:</label><br>
        <input type="datetime-local" name="data_consulta" id="data_consulta" class="form-control">
        
        <button type="submit" class="btn btn-primary btn_lang ">Enviar</button>
    </form>
</body>
</html>
