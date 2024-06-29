
    // Quando o usuário rolar para baixo 20px do topo do documento, mostrar o botão
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollTopBtn").style.display = "block";
      } else {
        document.getElementById("scrollTopBtn").style.display = "none";
      }
    }
    
    // Quando o usuário clicar no botão, rolar para o topo do documento
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }