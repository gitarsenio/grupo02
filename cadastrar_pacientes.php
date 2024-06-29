<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar pacientes</title>
</head>
<body>

<?php
         $sql_1 = "SELECT * FROM pacientes";
         $res_1 = $conn->query($sql_1);
           $row_1 = $res_1->fetch_object();
      ?>
 <div class="container w-70">
    <form action="?page=salvar-pacientes" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
         <div class="mb-3" style="text-align: center;">
            <h1>Cadastrar  Pacientes</h1>
         </div>
        <div class="mb-3">
        <select name="especialidades_id" style="text-align: center;" class="form-control"  >   
            
                <option  selected>--Selecione a especialidade pretendida--</option> 
                <?php     
                    $sql = "SELECT * FROM especialidades";
                    $res = $conn->query($sql);
                    if($res->num_rows > 0){
                        while($row = $res->fetch_object()){
                            if($row->especialidades_id == $row->id){
                                print "<option value='".$row->id."' >".$row->nome_esp."</option>";
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
            <input type="text" name="nome"  class="form-control"  />
        </div>
        <div class="mb-3">
            <label >identidade </label>
            <input type="text" name="identidade"  class="form-control"  />
        </div>
        <div class="mb-3">
            <label >E-mail</label>
            <input type="email" name="email"  class="form-control"  />
        </div>
        <div class="mb-3">
            <label >telefone </label>
            <input type="tel" name="telefone" class="form-control"  />
        </div>
        <div class="mb-3">
            <label >Data de Nascimento </label>
            <input type="date" name="data_nasc"  class="form-control"  />
        </div>
        <div class="mb-3">
            <label >Data da Consulta </label>
            <input type="datetime-local" name="data_consulta"  class="form-control"  />
        </div>
        <div class="mb-3">
            
           <h6>Sexo</h6>
        </div>    
            <div class="mb-3"><input type="radio" name="sexo" value="masculino"    />
            <label >Masculino</label></div>
           
           
        <div class="mb-3">
        <input type="radio" name="sexo" value="femenino"  />
        <label >Femenino</label>
        </div>
        <div class="mb-3">
            <label >Senha </label>
            <input type="password" name="senha"   class="form-control"  />
        </div>
       <div class="mb-3">
        <button type="submit" name="submit"  class=" w-100  btn btn-success">
                    Enviar
                </button>
       </div>
        
    </form>
 </div>
</body>
</html>