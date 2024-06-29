<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar medicos</title>
</head>
<body>
   <h1>Cadastrar medicos</h1>
   <form action="?page=salvar-medicos" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <h1>Insira os dados do Medico</h1>
        <select name="especialidades_id" class="form-control" required>
            <option>- Escolha uma especialidade -</option>
            <?php 
                $sql = "SELECT * FROM especialidades";
                $res = $conn->query($sql);
                if($res->num_rows > 0){
                    while($row = $res->fetch_object()){
                        print "<option value='".$row->id."'>".$row->nome_esp."</option>";
                    }
                } else { 
                    print "<option>NAO ha especialidades cadastradas</option>";
                }
            ?>   
        </select>
        <div class="mb-3">
            <label>Nome completo</label>
            <input type="text" name="nome_medico" placeholder="insira o nome " class="form-control" required />
        </div>
        <div class="mb-3">
            <label>identidade </label>
            <input type="text" name="identidade" placeholder="Numero do BI" class="form-control" required />
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" placeholder="E-mail" class="form-control" required />
        </div>
        <div class="mb-3">
            <label>Nome de usuario</label>
            <input type="text" name="usuario" placeholder="usuario" class="form-control" required />
        </div>
        <div class="mb-3">
            <label>telefone </label>
            <input type="tel" name="telefone" placeholder="insira o numero  do telefone " class="form-control" required />
        </div>
        <div class="mb-3">
            <label>Data de Nascimento </label>
            <input type="date" name="data_nasc" min="12-01-1990" max="12-01-2004" class="form-control" required />
        </div>
        <div class="mb-3">
            <h6>Sexo</h6>
            <label>Masculino</label>
            <input type="radio" name="sexo" value="masculino"  required />
            <label>Femenino</label>
            <input type="radio" name="sexo" value="femenino" required />
        </div>
        <div class="mb-3">
            <label>Senha </label>
            <input type="password" id="password" name="senha"  placeholder="insira uma senha " class="form-control" required />
        </div>
        <div class="mb-3">
            <label>Confirmar Senha</label>
            <input type="password" id="confirm_password" name="confirmar_senha" placeholder="Confirme sua senha" class="form-control" required />
        </div>
        <button type="submit" name="submit" class="btn w-100 btn-success">
            Enviar
        </button>
    </form>

    <script>
        var password = document.getElementById("password");
        var confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("As senhas não coincidem");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>
</html>
