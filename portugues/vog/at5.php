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
        <title>Atividade 5</title>
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
           localStorage.setItem('err', 0);
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
                
<br><br><br>
                    <div id="cor">
                       <br>
                <H1 style="margin-left:18%;color: white;">QUAL É O DESENHO QUE COMEÇA COM A VOGAL E ?</H1> 
                <div class="icon" id="audio-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" color="white" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16" style="margin-left: 13%; margin-top: -5%;">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
          </svg>
    </div>
    <!-- audios -->
    <audio id="click-sound" src="at5.wav" preload="auto"></audio>
    <audio id="bee" src="../portugues/audio/abelha.wav" preload="auto"></audio>
    <audio id="bola" src="../portugues/audio/bola.wav" preload="auto"></audio>
    <audio id="casas" src="../portugues/audio/casa.wav" preload="auto"></audio>

    <!-- Inclua a biblioteca de ícones Font Awesome se necessário -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

 
                <br>
                <img onclick="botao('err')" src="../../animais/ove.png" alt="Option 2" class="aranha" id="uva">
                        <img onclick="botao('ok')" src="../../animais/ele.png" alt="Option 3" class="aranha" id="ja">
                        <img onclick="botao('err')" src="../../animais/beer.png" alt="Option 1" class="aranha" id="lua">
                    
            </div>
           <a href="../../portugues/trilha_portugues.php"><div id="imgdiv" style="margin-left:90%;"></div></a>
           <script>
     const imageUrl = '../e.png'; 
    // Criar um novo elemento de imagem
   
            function botao(x) {
                var u4= localStorage.getItem('uni6');
                var un5 = localStorage.setItem('uni7',0);
                var y=x;
                var err = localStorage.getItem('err');
                var score = localStorage.getItem('score');
                var erros = localStorage.getItem('erros');
   if (err<2) {
            if (y=="ok"){
                score ++;
                un4=2;
                un5=1;
                localStorage.setItem('uni6', un4);
                localStorage.setItem('uni7', un5);
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
}
if (err>1 || err<=3) {
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
 