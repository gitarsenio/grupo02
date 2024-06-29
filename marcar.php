<?php
session_start();
include('config.php');
// phpinfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/marcar.css">
  
    <title>Marcar consulta</title>
</head>
<body>
    <section class="container">
        <header><h1 id="marcar_consulta" class="header">Marcar consulta</h1></header>
        <form action="send.php" class="form" method="POST">
            <div class="input-box address">
                <label>Especialidades</label>
                <div class="column">
                    <div class="select-box">
                        <select name="especialidades_id" required>
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
                    </div>
                </div>
            </div>
            <div class="input-box">
                <label>Nome completo</label>
                <input type="text" name="nome" placeholder="insira o seu nome completo" required />
            </div>
            <div class="input-box">
                <label>Documento de identificação</label>
                <input type="text" maxlength="14"  pattern="\d{9}LA\d{3}" name="identidade"  placeholder="insira o numero do seu bilhete de identidade Formato: 123456789LA123" required />
                <!-- <small></small> -->
            </div>
            <div class="input-box">
                <label>Endereço de Email</label>
                <input type="email" name="email" placeholder="Insira o seu email" required />
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Telefone</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="Seu número de telefone" pattern="\d{3}-\d{3}-\d{3}" 
                    maxlength="11" oninput="formatarTelefone(this)" required>
                </div>
                <div class="input-box">
                    <label>Data de nascimento</label>
                    <input type="date" name="data_nasc" max="2024-06-30" required />
                </div>
                <div class="input-box">
                    <label>Selecione o horário</label>
                    <input type="datetime-local" name="data_consulta" min="2024-07-01T00:00" max="2024-08-25T23:00" required />
                </div>
            </div>
            <div class="gender-box">
                <h3>Gênero</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="sexo" value="masculino" required/>
                        <label for="check-male">Masculino</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" name="sexo" value="femenino" required/>
                        <label for="check-female">Feminino</label>
                    </div>
                </div>
            </div>
            <div class="input-box">
                <label>Insira senha</label>
                <input type="password" id="password" name="senha" placeholder="Evite senhas do tipo 123456" required />
            </div>
            <div class="input-box">
                <label>Confirme senha</label>
                <input type="password" id="confirm_password" name="confirmar_senha" placeholder="Confirme sua senha" required />
            </div>
            <button type="submit" name="submit" id="submit">ENVIAR</button>
        </form>
    </section>
    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("As senhas não coincidem");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        function formatarTelefone(input) {
            let valor = input.value.replace(/\D/g, ''); // Remove tudo o que não é dígito
            if (valor.length > 9) {
                valor = valor.slice(0, 9); // Limita a 9 dígitos
            }
            let parte1 = valor.slice(0, 3);
            let parte2 = valor.slice(3, 6);
            let parte3 = valor.slice(6, 9);

            if (valor.length > 6) {
                input.value = `${parte1}-${parte2}-${parte3}`;
            } else if (valor.length > 3) {
                input.value = `${parte1}-${parte2}`;
            } else {
                input.value = parte1;
            }
            
        }

        

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;

        document.getElementById("marcar_consulta").addEventListener("click", function() {
            window.location.href = 'index.php';
        });
    </script>
</body>
</html>
