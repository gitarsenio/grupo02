<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'clinica');

$conn =  new MySQLi(HOST, USER, PASS, BASE);


// Função para gerar um código OTP de 4 dígitos






// definee('HOST', 'sql301.infinityfree.com'); // Hostname do MySQL
// define('USER', 'if0_36700603'); // Seu nome de usuário MySQL
// define('PASS', 'r35xr4MEB41u'); // Sua senha MySQL
// define('BASE', 'if0_36700603_XXX'); // Nome do banco de dados MySQL

// $conn = new MySQLi(HOST, USER, PASS, BASE, 3306); // Porta opcionalmente especificada

// if ($conn->connect_error) {
//     die("Falha na conexão: " . $conn->connect_error);
// }
// echo "Conexão bem-sucedida";

// // Função para gerar um código OTP de 4 dígitos
// function generateOTP($length = 6) {
//     $chars = '23456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz'; // Excluindo caracteres visualmente semelhantes
//     $password = '';
//     $charsLength = strlen($chars) - 1;

//     // Loop para gerar caracteres aleatórios até atingir o comprimento desejado
//     for ($i = 0; $i < $length; $i++) {
//         $index = random_int(0, $charsLength); // Usando random_int para melhor segurança
//         $password .= $chars[$index];
//     }

//     return $password;
// }

