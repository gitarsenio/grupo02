<?php
include('config.php');

if(isset($_POST['usuario'], $_POST['senha'])) {
	
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
	
	if(empty($usuario)) {
		echo "Preencha o seu nome de usuário";
	} elseif(empty($senha)) {
        echo "Preencha a sua senha";
	} else {
		
		$sql_code = "SELECT * FROM medicos 
		WHERE usuario = '$usuario' 
		AND senha = '$senha' ";

		$sql_query = $conn->query($sql_code)
		 or die("Falha na execução do codigo SQL: " . $conn->error);
        
		 $quantidade = $sql_query->num_rows;


		 if($quantidade == 1){

              $usuario = $sql_query->fetch_assoc();

			  if(!isset($_SESSION)){
				 session_start();
			  }

			  $_SESSION['id_medico'] = $usuario['id_medico'] ;
			  $_SESSION['nome_medico'] = $usuario['nome_medico'] ;

			  header("Location: dashboard_med.php");

		 } else {
			echo "Falha ao logar! Nome de usuário ou senha incorretos <a href='restrito.php'>Entrar</a>";
		 }
	}
}
?>
