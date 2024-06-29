<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Clinica</title>
   
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta property="og:image" content="images/logo.jpg">
	
	<!-- imagem navegador -->
	<link rel="icon" type="image/png" href="images/pngwing.com.png" sizes="32x32">
     <!-- fim -->
	<!-- link awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="css/news.css"> -->
	<!-- link team -->
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
	<!-- fim link team -->

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/blog.css">
	<link rel="stylesheet" href="css/sevices.css">
	<!-- link parcerias -->
	<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
	<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
	
	<!-- fim  -->
	<!-- inicio efeio imagem fonte aos -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
       <!-- fim -->

</head>
 
<body>
	
	  <!-- header == cabecalho -->
		<?php include_once('./assets/header.php');?>
	  <!-- fim header -->
	
	   <!-- slide carrocel apos o meu principal -->
    <div class="slider "  style="img{
		transform: scale(1.5, 1.5);
		-webkit-animation-name: zoomin;
		  -webkit-animation-duration: 40s;
		  animation-name: zoomin;
		  animation-duration: 40s;}">
		<!-- fade css -->
		<div class="myslide fade">
			<div class="txt-s">
				<h1>Clínica de Viana</h1>
				<p><span class="sign"><a class="act" href="marcar.php">Marcar Consultas</a></span></p>
			</div>
			
			<img alt="img1" class="img-s " src="images/mateo-hernandez-reyes-YgY1ITp8PMM-unsplash.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt-s">
				<h1>Clínica de Viana</h1>
				<p><span class="sign"><a class="act" href="marcar.php">Marcar Consultas</a></span></p>
			</div>
			<img alt="img2" class="img-s" src="images/african-american-medic-pregnant-patient-meeting-appointment-during-coronavirus-pandemic-physician-talking-woman-with-pregnancy-belly-giving-medical-advice-checkup-visit (2).jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt-s">
				<h1>Clínica de Viana</h1>
				<p><span class="sign"><a class="act" href="marcar.php">Marcar Consultas</a></span></p>
			</div>
			<img alt="img3" class="img-s" src="images/annie-spratt-1YnBzhJISg4-unsplash.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt-s">
				<h1>Clínica de Viana</h1>
				<p><span class="sign"><a class="act" href="exames_form.php">Marcar Exames</a></span></p>
			</div>
			<img alt="img4" class="img-s" src="images/cdc-3c_yz2YIJbQ-unsplash.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt-s">
				<h1>Clínica de Viana</h1>
				<p><span class="sign"><a class="act" href="exames_form.php">Marcar Exames</a></span></p>
			</div>
			<img alt="img5" class="img-s" src="images/cdc-Nqak6ZKyOho-unsplash.jpg" style="width: 100%; height: 100%;">
		</div>
		<!-- /fade css -->
		
		<!-- onclick js -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
		<div class="dotsbox" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
			<span class="dot" onclick="currentSlide(5)"></span>
		</div>
		<!-- /onclick js -->
	</div>

	<!-- sobre -->
      
	<div class="wrapper1 sl-bt3"  style="width: 100%; 
	   min-height: 100vh;  ">
		<div class="title-a">
			<h1>Bem-vindo a  <m>Clínica de viana!</m></h1>
		</div>
		<div class="about" data-aos="fade-down"
		data-aos-easing="linear"
		data-aos-duration="1500">
			<div class="image-section esq">
				<img src="images/about2-removebg-preview.png" alt="sobre">
			</div>
			<article data-aos="fade-up"
			data-aos-duration="3000">
				<h3 >A Clínica de Viana, localizada em Viana, tem como principal área clínicas 
					médicas e medicina geral e familiar, bem como obstetrícia e ginecologia. 
					Opera no mercado Angolano há vários anos
					 e sempre pautou os seus serviços pela qualidade, profissionalismo e competência.
					</h3>
					<p >
						Contamos com uma equipa de profissionais qualificados e produtos de alta qualidade,
						 para que o resultado final seja um serviço de excelência a preços competitivos.
					</p>
					<button class="btn-sobre" id="btn-sobre">Saiba Mais</button>
			</article>
			
		</div>
   </div>
    
   
   
   <!--team servicos -->
   <section class="Services" data-aos="fade-down-left" >
	<div class="row-se">
	  <h2 class="section-heading-se ">Nossos Serviços</h2>
	</div>
	<div class="row-se">
	  <div class="column-se">
		<div class="card-se">
		  <div class="icon-wrapper-se">
			<i class="fa-solid fa-stethoscope"></i>
		  </div>
		  <h3 class="title_h3">Espeiclidades Médicas</h3>
		  <p class="title_p">
			Consulte as especialidades de que dispomos.
		  </p>
		   <button  id="btn_services" class="btn-services">Ler mais<i class="fa-solid fa-arrow-right"></i></button>
		</div>
	  </div>
	  <div class="column-se">
		<div class="card-se">
		  <div class="icon-wrapper-se">
			<i class="fa-solid fa-bed-pulse"></i>
		  </div>
		  <h3 class="title_h3">Unidade de internamento</h3>
		  <p class="title_p">
			O serviço de internamento, já disponível para os nossos clientes, conta com elevados níveis de segurança, conforto e privacidade.
		  </p>
		</div>
	  </div>
	  <div class="column-se">
		<div class="card-se">
		  <div class="icon-wrapper-se">
			<i class="fa-solid fa-heart-pulse"></i>
		  </div>
		  <h3 class="title_h3">Unidade Especializada de Cardiologia</h3>
		  <p class="title_p">
			O paciente encontra no Serviço de Cardiologia os mais modernos equipamentos para diagnóstico e tratamento de doenças cardiovasculares.
		  </p>
		</div>
	  </div>
	</div>
  </section>
  <br>
  <!-- fim sevicos -->
  <!-- noticias -->
	<section id="blog" class="wrapper2 ">
        <!--blog-heading--------------->
        <div class="blog-heading">
			<h3 class="blog-h3">Dicas de bem-estar</h3>
          <span class="span-blog">As melhores dicas de bem-estar</span>
        </div>
  
  
        <!--container---------------->
        <div class="blog-container">
  
          <!--box-1------------->
          <div class="blog-box">
  
            <!--img---->
            <div class="blog-img ">
              <img alt="blog" src="images/alimentacao.jpg">
            </div>
            <!--text--->
            <div class="blog-text">
              <span>20 de 05 2024 / Clínica de Viana</span>
              <a href="#" class="blog-title">Mantenha-se sempre saudavel</a>
              <p>Uma alimentação saudável é fundamental para manter um estilo de vida equilibrado e promover o bem-estar físico e mental.</p>
			  <a href="dicas.html#alimentacao">Saiba Mais</a>
            </div>
  
          </div>
  
  
  
  
          <!--box-2------------->
          <div class="blog-box">
  
            <!--img---->
            <div class="blog-img">
              <img alt="blog" src="images/vacina.jpg">
            </div>
            <!--text--->
            <div class="blog-text">
              <span>20 de 05 2024 / Clínica de Viana</span>
              <a href="#" class="blog-title">Mantenha as  vacinas em dia</a>
              <p>As vacinas protegem contra uma variedade de doenças infecciosas,
				 algumas das quais podem ser graves ou mesmo fatais. Isso inclui doenças como sarampo, 
				poliomielite, rubéola, coqueluche, hepatite, gripe e muitas outras.
				</p>
              <a href="dicas.html#vacinas">Saiba Mais</a>
            </div>
  
          </div>
  
  
  
  
          <!--box-3------------->
          <div class="blog-box">
  
            <!--img---->
            <div class="blog-img">
              <img alt="blog" src="images/hidratacao.jpg">
            </div>
            <!--text--->
            <div class="blog-text">
              <span>20 de 05 2024 / Clínica de Viana</span>
              <a href="#" class="blog-title">Porque devemos nos hidratar ?</a>
              <p>O corpo humano é composto principalmente de água e precisa de uma quantidade adequada 
				de líquidos para funcionar corretamente. A hidratação adequada ajuda a manter o equilíbrio hídrico do corpo,
				 garantindo que as funções fisiológicas essenciais ocorram de maneira eficiente.
				</p>
              <a href="dicas.html#hidratacao">Saiba Mais</a>
            </div>
  
          </div>
  
        </div>
  
      </section>
	  <!-- fim noticias -->
      
	
	  <!-- footer == rodape  arquivo localizado em: assets-footer.php -->
	  <?php include_once('./assets/footer.php'); ?>
    <!-- fim footer -->
   
   <a href="https://wa.link/amhr70" class="btn-whatsapp">
	<img src="images/whatssapp.svg" alt="botao whatsapp">
	<span class="tooltip-text">Marque Ja a Sua Consulta !</span>
  
    </a>
	<button onclick="topFunction()" id="scrollTopBtn" title="ir para cima"><img src="images/chevron-up-circle-solid-60.png" alt=""></button>


<!-- script scroll-up -->

  
  
<!-- fim -->

<!-- font awesome -->

<script src="js/jsfile.js"></script>
<script src="js/script.js"></script>
<script src="js/up.js"></script>
  <script>
	AOS.init();
  </script>

<script src="js/menu.js"></script>

<script>
	// redirecionando botao para a pagina
	document.getElementById("btn-sobre").onclick = function() {
	  
	  window.location.href = "sobre.html";
	};
	document.getElementById("btn_services").onclick = function() {
	  
	  window.location.href = "especialidade.html";
	};
	  </script>
</body>
</html>






