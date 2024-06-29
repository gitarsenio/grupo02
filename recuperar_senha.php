<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueceu a sua  senha ?</title>
    <link rel="stylesheet" href="css/otplogin.css">
</head>
<body>
<div class="wrapper">
         <div class="title">
            Redefinir 
         </div>
         <form action="recuperar_submit.php" method="POST">
            <div class="field">
               <input type="text" name="usuario" required>
               <label>Insira o seu nome de Usuario</label>
            </div>
            <div class="field">
               <input type="email" name="email" required>
               <label>Insira o seu E-mail</label>
            </div>
            
            <div class="field">
               <input type="submit" value="Redefinir">
            </div>
            
         </form>
      </div>
</body>
</html>