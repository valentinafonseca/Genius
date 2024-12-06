<DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="animais/urso.png"> 
        <link rel="stylesheet" href="../styles/at1art.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.22.2/sweetalert2.min.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.22.2/sweetalert2.min.js"></script>
        <title>Atividade</title>
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
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
           
                
        <form  method="post">
                    <div id="cor">
                       <br>
                <H1 style="text-align: center;color: white;">QUAL É O DESENHO QUE COMEÇA COM A LETRA B</H1>
                <div class="icon" id="audio-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" color="white" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16" style="margin-left: 13%; margin-top: -5%;">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
          </svg>
    </div>
    <!-- audios -->
    <audio id="click-sound" src="../portugues/audio/l_b.wav" preload="auto"></audio>
    <audio id="bee" src="../portugues/audio/abelha.wav" preload="auto"></audio>
    <audio id="bola" src="../portugues/audio/bola.wav" preload="auto"></audio>
    <audio id="casa" src="../portugues/audio/casa.wav" preload="auto"></audio>

    <!-- Inclua a biblioteca de ícones Font Awesome se necessário -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

 
                <br>
                    <table>
                <tr>
                    <td class="at" >
                 
                    <label>
                    <input type="radio" id="bor" name="myRadio" value="bola">
                        <img src="../animais/bola.png" alt="Option 2" class="aranha" id="bola1">
                        </label>
                    </td>
                    </td><td></td>
                    <td class="at" >
                    <label>
                    <input type="radio" id="cav" name="myRadio" value="casa">
                        <img src="../animais/casa.png" alt="Option 3" class="aranha" id="casa1">
                        </label>
                    </td><td></td>
                    <td class="at" >
                    <label>
                    <input type="radio"  name="myRadio" value="bee">
                        <img src="../animais/bee.png" alt="Option 1" class="aranha" id="bee2">
                        </label>
                    </td>
            </tr>
            </table>
            </div>
            
            <input type="image" src="certo.png" alt="Submit Button" style="width: 5%; height:10%; background: transparent;margin-left: -43%;margin-top: -5%; border:"id="setad"/>
        </form>
        
           
           <a href="P_IALFA.php"><img src="d.png" alt="Direita" id="certo"></a>
    <!-- sons -->
           <script>
        document.getElementById('audio-icon').addEventListener('click', function() {
            const sound = document.getElementById('click-sound');
            sound.currentTime = 0; // Reiniciar o som
            sound.play();
        });
        
        document.getElementById('bee2').addEventListener('click', function() {
            const sound = document.getElementById('bee');
            sound.currentTime = 0; // Reiniciar o som
            sound.play();
        });
        document.getElementById('bola1').addEventListener('click', function() {
            const sound = document.getElementById('bola');
            sound.currentTime = 0; // Reiniciar o som
            sound.play();
        });
        document.getElementById('casa1').addEventListener('click', function() {
            const sound = document.getElementById('casa');
            sound.currentTime = 0; // Reiniciar o som
            sound.play();
        });
    </script>
        </body>
    </html>
    <?php
 if (isset($_POST['myRadio'])) {
    $selectedOption = $_POST['myRadio'];

    if ($selectedOption=="bola") {
        $js='<script> window.onload = function() {
    swal("Parabéns!", "Você acertou!", "success");
    };
    </script>';

        $certo=+1;
        echo $js.   "<a href='at2.php'><image src='e.png' style='width:50px;height:50px;position:relative; left:90%;top: 0px;'></a>";
    }else{
        $erro='<script> window.onload = function() {
            swal("Está errado!", "Tente novamente!", "error");
            };
            </script>';
        echo$erro;
        $errado=+1;
    }
  }
?>