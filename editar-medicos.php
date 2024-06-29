<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar medicos</title>
</head>
<body>

<?php
         $sql_1 = "SELECT *  FROM medicos WHERE id_medico=".$_REQUEST['id_medico'];
         $res_1 = $conn->query($sql_1);
           $row_1 = $res_1->fetch_object();
      ?>
     <form action="?page=salvar-medicos" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id_medico" value="<?php print $row_1->id_medico ; ?>">
        <h1>Editar os dados do Medico</h1>
        <div class="mb-3">
        <select name="especialidades_id" class="form-control" required />
           
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
            <label >Nome completo</label>
            <input type="text" name="nome_medico" value="<?php print $row_1->nome_medico ; ?>" class="form-control"  />
        </div>
        <div class="mb-3">
            <label >identidade </label>
            <input type="text" name="identidade" value="<?php print $row_1->identidade ; ?>" class="form-control"  />
        </div>
        <div class="mb-3">
            <label >Nome de usuario</label>
            <input type="text" name="usuario" value="<?php print $row_1->usuario ; ?>" class="form-control" required />
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
        <button type="submit" name="submit" class="btn btn-success w-100">
                 Enviar
              </button>
        
     </form>
</body>
</html>