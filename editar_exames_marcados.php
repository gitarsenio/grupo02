<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Exames marcados</title>
</head>
<body>

        <?php
                $sql_1 = "SELECT *  FROM exames_marcados WHERE id_exames_marcados=".$_REQUEST['id_exames_marcados'];
                $res_1 = $conn->query($sql_1);
                $row_1 = $res_1->fetch_object();
        ?>
    <div class="container">
     <form action="?page=salvar_exames_marcados" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id_exames_marcados" value="<?php print $row_1->id_exames_marcados ; ?>">
        <h1>Editar os dados do paciente</h1>
        <div class="mb-3">
                <select name="exames_id_exames" class="form-control" required>
                    <option>- Exames -</option>
                    <?php 
                    
                    
                        $sql = "SELECT * FROM exames";
                        $res = $conn->query($sql);
                        if($res->num_rows > 0){
                            while($row = $res->fetch_object()){
                                print "<option value='".$row->id_exames."' selected>".$row->exames."</option>";
                            }
                        }else
                        { 
                            print "<option>NAO ha exames cadastradas</option>";
                        }
                    ?>   
                </select>
        </div> 
         
        <div class="mb-3">
            <label >Nome Paciente</label>
            <input type="text" name="nome_paciente" value="<?php print $row_1->nome_paciente ; ?>" class="form-control"  />
        </div>
        <div class="mb-3">
            <label >identidade </label>
            <input type="text" name="bilhete" value="<?php print $row_1->bilhete ; ?>" class="form-control"  />
        </div>
        <div class="mb-3">
            <label >telefone </label>
            <input type="tel" name="telefone" value="<?php print $row_1->telefone ; ?>" class="form-control"  />
        </div>
        <div class="mb-3">
            <label >Data de exame </label>
            <input type="datetime-local" name="data_exames" value="<?php print $row_1->data_exames ; ?>" class="form-control"  />
        </div>
        <div class="mb-3">
            <label >Data de nascimento </label>
            <input type="date" name="data_nasc" max="2024-06-30"  value="<?php print $row_1->data_nasc ; ?>" class="form-control"  />
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
        <button type="submit" name="submit" class="btn btn-success btn_lang">
                 Enviar
              </button>
        
     </form>
    </div>
</body>
</html>