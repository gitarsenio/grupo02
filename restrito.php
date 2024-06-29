<?php
   include('config.php');
   session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel  Admin| Acesso Restrito</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/restrito.css">

	<link rel="icon" type="image/png" href="images/admin.png" sizes="32x32">
</head>
<body>
	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/bg.svg">
		</div>
		<div class="login-content">
			<form action="admin.php" method="post">
				<img src="images/avatar.svg">
				<h2 class="title">Bem-Vindo</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nome de usuário</h5>
           		   		<input type="text"  name="usuario" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input type="password" name="senha" class="input">
            	   </div>
            	</div>
            	<a href="recuperar_senha.php">Esqueceste a sua senha?</a>
            	<button type="submit" class="btn">Entrar</button>
            </form>
        </div>
    </div>
   <script>
            const inputs = document.querySelectorAll(".input");


        function addcl(){
            let parent = this.parentNode.parentNode;
            parent.classList.add("focus");
        }

        function remcl(){
            let parent = this.parentNode.parentNode;
            if(this.value == ""){
                parent.classList.remove("focus");
            }
        }


        inputs.forEach(input => {
            input.addEventListener("focus", addcl);
            input.addEventListener("blur", remcl);
        });

   </script>
</body>
</html>
