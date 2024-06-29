
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">

 <?php
   
   if(!isset($_SESSION)){
    session_start();
 }
 
      

 if(!isset($_SESSION['id_medico'])) {
    die("Você não pode acessar a esta página  porque não está logado. <p><a class='btn btn-success  ' href=\"restrito.php\">Entrar</a></p> ");
    // print "<script>location.href='admin.php';</script>";
 }
  
 
?>
