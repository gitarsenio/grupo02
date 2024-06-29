<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar pacientes</title>
</head>
<body>

<?php
         $sql_1 = "SELECT * FROM pacientes WHERE idpaciente=".$_REQUEST['idpaciente'];
         $res_1 = $conn->query($sql_1);
           $row_1 = $res_1->fetch_object();
      ?>
    <div class="mb-3 container">
      <form action="?page=salvar-pacientes" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="idpaciente" value="<?php print $row_1->idpaciente; ?>">
        <h1 style="text-align: center;">Editar os dados do Paciente</h1>
        <div class="mb-3">
        <select name="especialidades_id" class="form-control"  >    
              <?php     
                  $sql = "SELECT * FROM especialidades";
                  $res = $conn->query($sql);
                  if($res->num_rows > 0){
                       while($row = $res->fetch_object()){
                        if($row->especialidades_id == $row->id){
                            print "<option value='".$row->id."' selected>".$row->nome_esp."</option>";
                        }else{
                            print "<option value='".$row->id."'>".$row->nome_esp."</option>";
                        }
                       }
                  }else
                   { 
                    print "<option>NAO ha especialidades cadastradas</option>";
                  }
              ?>   
        </select>
         </div> 
          <div class="mb-3">
            <label >Nome paciente</label>
            <input type="text" name="nome" value="<?php print $row_1->nome ; ?>" class="form-control"  />
        </div>
        <div class="mb-3">
            <label >identidade </label>
            <input type="text" name="identidade" value="<?php print $row_1->identidade ; ?>" class="form-control"  />
        </div>
        <div class="mb-3">
            <label >E-mail</label>
            <input type="email" name="email" value="<?php print $row_1->email ; ?>" class="form-control"  />
        </div>
        <div class="mb-3">
            <label >telefone </label>
            <input type="tel" name="telefone" value="<?php print $row_1->telefone ; ?>" class="form-control"  />
        </div>
        <div class="mb-3">
            <label >Data de Nascimento </label>
            <input type="date" name="data_nasc" value="<?php print $row_1->data_nasc ; ?>" class="form-control"  />
        </div>
        <div class="mb-3">
            <label >Data da Consulta </label>
            <input type="datetime-local" name="data_consulta" value="<?php print $row_1->data_consulta ; ?>" class="form-control"  />
        </div>
        <div class="mb-3">
            
        <h6>Sexo</h6>
            
            <input type="radio" name="sexo" value="masculino"    />
            <label >Masculino</label>
           
            <input type="radio" name="sexo" value="femenino"  />
            <label >Femenino</label>
        </div>
        <div class="mb-3">
            <label >Senha </label>
            <input type="password" name="senha"  value="<?php print $row_1->senha ; ?>" class="form-control"  />
        </div>
        <button type="submit" name="submit" class="btn btn_lang btn-dark">
                 Enviar
              </button>
        
      </form>
    </div>
</body>
</html>