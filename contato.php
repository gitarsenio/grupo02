<?php

if (isset($_POST['submit'])) {
    include('config.php');

    $nome_contato =   $_POST['nome_contato'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];


    $result =  mysqli_query($conn, "INSERT INTO contatos(nome_contato,email,telefone,mensagem)
                    VALUES('$nome_contato','$email','$telefone','$mensagem')");


    print "<script>alert('Mensagem enviada com sucesso');</script>";
    print "<script>location.href='index.php';</script>";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<link rel="icon" type="image/png" href="images/pngwing.com.png" sizes="32x32">

<link rel="stylesheet" href="css/contact.css">
<script src="https://kit.fontawesome.com/aa7454d09f.js" crossorigin="anonymous"></script>

<body>

    <!-- header == cabecalho -->
    <?php include_once('./assets/header.php'); ?>
    <!-- fim header -->

    <section class="contact-form">
        <h4 class="sectionHeader">Contacte-nos</h4>
        <h1 class="heading">Mande Mensagem!</h1>
        <p class="para">"Preocupado com sua saúde ou precisando de assistência médica? Nossa equipe está aqui para ajudar! Se você tiver alguma dúvida, consulta ou precisar de orientação, não hesite em entrar em contato conosco. Estamos prontos para cuidar de você e ajudá-lo a alcançar o bem-estar que você merece. Aguardamos ansiosamente sua mensagem!"</p>

        <div class="contactForm">
            <form action="contato.php" method="post">
                <h1 class="sub-heading">Precisas de Suporte!</h1>
                <p class="para para2">Em que podemos ajudar?</p>
                <input type="text" name="nome_contato" class="input" placeholder="nome">
                <input type="text" name="email" class="input" placeholder="E-mail">
                <input type="tel" name="telefone" class="input" placeholder=" Numero de telefone">
                <textarea class="input" name="mensagem" cols="30" rows="5" placeholder="Sua mensagem..."></textarea>
                <input type="submit" name="submit" class="input submit" value="Enviar Mensagem">
            </form>

            <div class="map-container">
                <div class="mapBg"></div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.7211978472565!2d13.369819574069481!3d-8.905490991389946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f9de9f5ae4f3%3A0x3136ed437cd01242!2sCl%C3%ADnica%20de%20Viana!5e0!3m2!1spt-PT!2sao!4v1708034498035!5m2!1spt-PT!2sao" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>

        <div class="contactMethod">
            <div class="method">
                <i class="fa-solid fa-location-dot contactIcon"></i>
                <article class="text">
                    <h1 class="sub-heading">Localizacao</h1>
                    <p class="para">Vila de Viana, Rª Cmdt. Valódia nº 20, Luanda</p>
                </article>
            </div>

            <div class="method">
                <i class="fa-solid fa-envelope contactIcon"></i>
                <article class="text">
                    <h1 class="sub-heading">Email</h1>
                    <p class="para">Email: clinicadeviana@gmail.com</p>
                </article>
            </div>

            <div class="method">
                <i class="fa-solid fa-phone contactIcon"></i>
                <article class="text">
                    <h1 class="sub-heading">Telefone</h1>
                    <p class="para">927916611</p>
                </article>
            </div>
        </div>
    </section>

    <!-- footer == rodape -->
    <?php include_once('./assets/footer.php'); ?>
    <!-- fim footer -->
</body>

</html>