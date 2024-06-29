<?php

function generateOTP($length = 6) {
    $chars = '1234567890'; // Excluindo caracteres visualmente semelhantes
    $password = '';
    $charsLength = strlen($chars) - 1;

    // Loop para gerar caracteres aleatórios até atingir o comprimento desejado
    for ($i = 0; $i < $length; $i++) {
        $index = random_int(0, $charsLength); // Usando random_int para melhor segurança
        $password .= $chars[$index];
    }

    return $password;
}