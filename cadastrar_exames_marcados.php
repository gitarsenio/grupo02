<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar exames</title>
</head>
<body>
 <div class="container">
      <h1>Cadastrar exames</h1>
     <form action="?page=salvar_exames_marcados" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <h1>Insira os dados do paciente</h1>
        <select name="exames_id_exames" class="form-control" required>
            <option>- Exames -</option>
              <?php 
             
              
                  $sql = "SELECT * FROM exames";
                  $res = $conn->query($sql);
                  if($res->num_rows > 0){
                       while($row = $res->fetch_object()){
                        print "<option value='".$row->id_exames."'>".$row->exames."</option>";
                       }
                  }else
                   { 
                    print "<option>NAO ha exames cadastradas</option>";
                  }
              ?>   
          </select>
        <div class="mb-3">
            <label >Nome completo</label>
            <input type="text" name="nome_paciente" placeholder="insira o nome completo " class="form-control" required />
        </div>
        <div class="mb-3">
            <label >identidade </label>
            <input type="text" name="bilhete" placeholder="Numero do BI" class="form-control" required />
        </div>
        <div class="mb-3">
            <label >telefone </label>
            <input type="tel" name="telefone" placeholder="insira o numero  do telefone " class="form-control" required />
        </div>
        <div class="mb-3">
            <label >Data de Exames </label>
            <input type="datetime-local" name="data_exames" min="12-01-1990" max="12-01-2004" class="form-control" required />
        </div>
        
        <div class="mb-3">
            
        <h6>Sexo</h6>
            <label >Masculino</label>
            <input type="radio" name="sexo" value="masculino"  required />
            <label >Femenino</label>
            <input type="radio" name="sexo" value="femenino" required />
        </div>
        <div class="mb-3">
            <label >Senha </label>
            <input type="password" name="senha"  placeholder="insira uma senha " class="form-control" required />
        </div>
        <button type="submit" name="submit" class="btn w-100  btn-success">
                 Enviar
              </button>
        
    </form>
 </div>
</body>
</html>