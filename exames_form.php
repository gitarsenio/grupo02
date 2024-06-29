    <!-- php -->
    <?php
        session_start();
    include('config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcar Exames</title>
  <link rel="stylesheet" href="css/exame.css">
</head>
<body>
    
    <div class="container">
        <div class="title">
            <p id="marcar_exames">Marcar Exames</p>
        </div>

        <form action="exames_send.php" method="post">
        <input type="hidden" name="acao" value="cadastrar">
            <div class="user_details">
            
            <div class="input_box">
                    <label for="exames">Exames</label>
                    <select name="exames_id_exames" required >
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
                                    print "<option>Nao ha exames cadastrados</option>";
                                }
                            ?>   
                    </select>
            </div>
                <div class="input_box">
                    <label for="name">Nome pacinete</label>
                    <input type="text" id="name" name="nome_paciente" placeholder="Insira o seu nome completo" required>
                </div>
                <div class="input_box">
                    <label for="username">Identidade</label>
                    <input type="text" id="username" name="bilhete" maxlength="14"  pattern="\d{9}LA\d{3}" placeholder="Insira o nmero do seu B.I" required>
                </div>
                <div class="input_box">
                    <label for="telfone">Telefone</label>
                    <input type="tel" name="telefone"  id="email" placeholder="Insira o seu numero de telefone"
                    pattern="\d{3}-\d{3}-\d{3}" 
                    maxlength="11" oninput="formatarTelefone(this)"  required>
                </div>
                <div class="input_box">
                    <label for="phone">Data de exame</label>
                    <input type="datetime-local" name="data_exames" min="2024-07-01T00:00" max="2024-08-25T23:00" id="phone"  required>
                </div>
               
                <div class="input_box">
                <label for="phone">Data de nascimento</label>
                <input type="date" name="data_nasc" max="2024-07-30"  id="phone"  required>
                </div>
                <div class="input_box">
                    <label for="pass">Senha</label>
                    <input type="password" id="password" name="senha" placeholder="Insira a sua senha" required>
                </div> 
                <div class="input_box">
                    <label for="confirmPass">Confirm senha</label>
                    <input type="password" id="confirm_password" placeholder="Confirma senha " required>
                </div> 
            </div>
            <div class="gender">
                    <span class="gender_title">Gênero</span>
                    <input type="radio" name="sexo" value="masculino" id="radio_1">
                    <input type="radio" name="sexo" value="femenino" id="radio_2">
                    
                    <div class="category">
                        <label for="radio_1">
                            <span class="dot one"></span>
                            <span>Masculino</span>
                        </label>
                        <label for="radio_2">
                            <span class="dot two"></span>
                            <span>Femenino</span>
                        </label>
                        
                    </div>
                </div>
            
            <div class="reg_btn">
                <input type="submit" value="Marcar Exames">
            </div>
        </form>
    </div>

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

        document.getElementById("marcar_exames").addEventListener("click", function() {
            window.location.href = 'index.php';
        });
    </script>
</body>
</html>