<?php
include('config.php');

// require 'C:\wamp64\www\Clinica\password_compat-master\lib\password.php'; // Caminho correto para o arquivo password.php

if(isset($_POST['usuario'], $_POST['senha'])) {
	
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
	
	if(empty($usuario)) {
		echo "Preencha o seu nome de usuário";
	} elseif(empty($senha)) {
        echo "Preencha a sua senha";
	} else {
		
		// Usando instrução preparada
		$stmt = $conn->prepare("SELECT * FROM administrador WHERE usuario = ?");
		$stmt->bind_param("s", $usuario);
		$stmt->execute();
		$result = $stmt->get_result();
		
		if($result->num_rows == 1) {
			$usuario = $result->fetch_assoc();

			// Verifica a senha usando password_verify se a senha estiver criptografada com bcrypt
			if(password_verify($senha, $usuario['senha'])) {
				// Senha correta, inicia a sessão
				if(!isset($_SESSION)) {
					session_start();
				}

				$_SESSION['id'] = $usuario['id'];
				$_SESSION['nome'] = $usuario['nome'];

				header("Location: dashboard.php");
				exit();
			} elseif ($senha === $usuario['senha']) {
				// Senha não criptografada, mas corresponde à senha armazenada
				if(!isset($_SESSION)) {
					session_start();
				}

				$_SESSION['id'] = $usuario['id'];
				$_SESSION['nome'] = $usuario['nome'];

				header("Location: dashboard.php");
				exit();
			} else {
				echo "Falha ao logar! Nome de usuário ou senha incorretos <p><a href=\"restrito.php\">Entrar</a></p>";
			}
		} else {
			echo "Falha ao logar! Nome de usuário ou senha incorretos <p><a href=\"restrito.php\">Entrar</a></p>";
		}
	}
}
?>
