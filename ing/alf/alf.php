<DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="animais/urso.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <link href="https://fonts.cdnfonts.com/css/gulya" rel="stylesheet">
        <title>Atividade 1</title>
        <style>
            body{
                background-image:url(../fundo.jpeg);
                font-family: 'Gulya', sans-serif;  
            }
            #cor{
          background-color:rgba(10,63,54, 0.7);
          height: 500px;
          width: 50%;
          margin: auto;
          display: table;
          border-radius: 30px;
        }
        </style>
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
           
                
<br><br>
                    <div id="cor">
                    <p style="text-align:center; color:white;font-size:50px;">A B C</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uGA6r-lgZWU?si=-DHTEQ2I74By8Zyc" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encry
                    pted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-orig
                    in" allowfullscreen style="margin: auto; display: table;"></iframe>
            </div>
            
           
           
           <a href="at1.php"><img src="../l.png" style="width:50px;height:50px;position:relative; left:90%;top: px;"></a>
   
          
        </body>
    </html>
 