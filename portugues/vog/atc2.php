<DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="animais/urso.png"> 
        <link rel="stylesheet" href="../../styles/at1por.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <link href="https://fonts.cdnfonts.com/css/gulya" rel="stylesheet">
        <title>Atividade 2</title>
        <?php
        session_start();
        ?>
        </head>
        <body>
           
    <div vw class="enabled"> 
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>

      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
           if (!localStorage.getItem('score')) {
            localStorage.setItem('score', 0);
           }
         
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
           
                
<br><br><br>
                    <div id="cor">
                       <br>
               <H1 style="margin-left:18%; color: white;">QUAL É O DESENHO QUE COMEÇA COM A VOGAL V ?</H1>
                <div class="icon" id="audio-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" color="white" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16" style="margin-left: 13%; margin-top: -5%;">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
          </svg>
    </div>
    <!-- audios -->
    <audio id="click-sound" src="v.wav" preload="auto"></audio>
    <audio id="bee" src="../portugues/audio/abelha.wav" preload="auto"></audio>
    <audio id="bola" src="../portugues/audio/bola.wav" preload="auto"></audio>
    <audio id="casas" src="../portugues/audio/casa.wav" preload="auto"></audio>

    <!-- Inclua a biblioteca de ícones Font Awesome se necessário -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

 
                <br>
                        <img onclick="botao('ok')" src="../../imagens/vela.png" alt="Option 2" class="aranha" id="bola1">
                        <img onclick="botao('err')" src="../../animais/mac.png" alt="Option 3" class="aranha" id="casa1">
                        <img onclick="botao('err')" src="../../imagens/trem.png" alt="Option 1" class="aranha" id="bee2">
                    
            </div>
            
           
           
           <a href="atc3.php"><div id="imgdiv" style="margin-left:90%;"></div></a>
   
           <script>
     const imageUrl = '../e.png'; 
    // Criar um novo elemento de imagem
   
            function botao(x) {
                var y=x;
                var err = localStorage.getItem('err');
                var score = localStorage.getItem('score');
                var erros = localStorage.getItem('erros');
              
                    
               
 if (err<2) {
            if (y=="ok"){
                score++;
                un3=1;
                un2=2;
                localStorage.setItem('score', score);
            window.onload = swal("Parabéns!", "Você acertou!", "success");
            const img = document.createElement('img');  
            img.src = imageUrl;
            img.alt = 'Imagem Exemplo';
            img.style.height = '50px';
                document.getElementById('imgdiv').appendChild(img);
        } 
        if(y=="err"){  
            err ++;
            localStorage.setItem('err', err);
            window.onload = swal("Está errado!", "Tente novamente!", "error");
        }else if (y=="err"){
            err ++;
            localStorage.setItem('err', err);
        window.onload = swal("Está errado!", "Tente novamente!", "error");
        }
}else{
    window.onload = swal("já perdeu as chances!", "Tente na próxima atividade!", "error");
    const img = document.createElement('img');  
            img.src = imageUrl;
            img.alt = 'Imagem Exemplo';
            img.style.height = '50px';
                document.getElementById('imgdiv').appendChild(img);
                err =0;
                    localStorage.setItem('err', err);
}
if (err<5 && erros<1) {
    erros++ ;
    localStorage.setItem('erros', erros);
}
}
    // sons    
document.getElementById('audio-icon').addEventListener('click', function() {
            const sound = document.getElementById('click-sound');
            sound.currentTime = 0; // Reiniciar o som
            sound.play();
        });
    </script>
        </body>
    </html>
 