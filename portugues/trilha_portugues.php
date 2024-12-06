<!DOCTYPE html>
<html>
<head>
  <?php
  session_start();
  ?>
  <title>Trilha Inicial</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="genius.png"> 
  <link rel="stylesheet" href="../styles/port.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  <link href="https://fonts.cdnfonts.com/css/gulya" rel="stylesheet">
                
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <style>

.materia {
    width: 50%;
    margin-left: 25%;
    border-radius: 40px;
    padding: 5px;
}

.menu-materia {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
}

.menu-materia li {
    margin: 0 15px;
}

.menu-materia a {
    text-decoration: none;
    color: white;
    padding: 15px 20px;
    transition: background-color 0.3s;
}

.menu-materia a:hover {
    background-color: #b779c1;
    border-radius: 5px;
}
  </style>
</head>
<body>
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"> 
  </script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- menu principal -->
  <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,800' rel='stylesheet' type='text/css'>
<nav class="menu">
  <ul>
    <li><a href="../index.html">Início</a></li>
    <li><a href="../perfil.php">Perfil</a></li>
    <li><a href="../login.html">Login</a></li>
    <li><a href="../cadastro.html">Cadastro</a></li>
    <li><a href="../index.html">Sair</a></li>
  </ul>
</nav>
<!-- unidade -->
<div id="uni">
<p>Português</p>
<br>
</div>



<br>
<!-- menu de materias -->
<nav class="materia">
        <ul class="menu-materia">
            <li><a href="../mat/trilha.php">Matematica</a></li>
            <li><a href="../arte/trilha_art.php">Artes</a></li>
            <li><a href="../ing/trilha_ing.php">Inglês</a></li>
            <li><a href="../portugues/trilha_portugues.php">Português</a></li>
        </ul>
    </nav>
    <?php
    $nm =  $_SESSION['nome'] ;

    echo "<p style='text-align: center; margin-top: 3%;'>Olá seja bem-vindo ".$nm." ! </p> <br>
<!-- corpo atividades -->";
?>

<div id="corpo">
  <table id="corpo_at">
    <tr>
      
        <td>
        <a href="alf/p_ialfa.php">
            <div class="at"><div id="imgdiv" ></div></div></td> 
            </a>
      </tr>

      <tr><td class="nome">ALFABETO</td></tr></a>
  <td>
  </td>     
<tr><td></td><td style="padding-left:50%;width: 50px;"></td>
          <td>
            <div class="at" onclick="ativ('2')"><div id="imgdiv2"></div></div></td>
      </tr>
  <tr>
    <td></td><TD></TD>
  <td class="nome">VOGAL A </td></a> 
  </tr>
  <tr>  


    <td>

    <div class="at" id="imgdiv3" onclick="ativ('3')"></div> 
      </td> 
  </tr>
<tr><td class="nome">VOGAL U</td></tr>
<tr>
  <td></td>

  <TD></TD><td>
  
    <div class="at" id="imgdiv4" onclick="ativ('4')"></div>
  </td>
</tr>
<tr><td></td><TD></TD><td class="nome">VOGAL I</td></tr>

<tr>
  <td>
    <div class="at" id="imgdiv5" onclick="ativ('5')"></div>
  </td>
</tr>
<tr><td class="nome">VOGAL O</td></tr>
<tr><td></td><TD></TD>
  <td>
  
    <div class="at" id="imgdiv6" onclick="ativ('6')"></div>
  </td>
</tr>
<tr><td></td><TD> </TD><td class="nome">VOGAL E</td></tr>
<td>
  <div class="at" id="imgdiv7" onclick="ativ('7')"></div>
</td>
</tr>
<tr>
<td class="nome">CONSOANTES</td></tr>
<tr><td></td><td></td>
  <td>
    <div class="at" id="imgdiv8" onclick="ativ('8')"></div>
  </td>
</tr>
<tr><td></td><td></td><td class="nome">FORMAÇÃO DE PALAVRAS</td></tr>
</table>
<img src="../animais/iconlogo.png" id="porco">
<img src="../animais/iconlogo.png" id="coala">
</div>
<script>
      var un1=localStorage.getItem('btn1');
      var un2=localStorage.getItem('uni2');
      var un3=localStorage.getItem('uni3');
      var un4=localStorage.getItem('uni4');
      var un5=localStorage.getItem('uni5');
      var un6=localStorage.getItem('uni6');
      var un7=localStorage.getItem('uni7');
      var un8=localStorage.getItem('uni8');
    const imageUrl1 = '../imagens/ok.png'; 
    const ok1 = '../imagens/ok.png'; 
    const imageUrl2 = '../imagens/cad.png'; 
  
            const img2 = document.createElement('img');  
            img2.src = imageUrl2;
            img2.style.height = '50px';
            img2.style.position = 'absolute'; // Define a posição como absoluta
            img2.style.top = '14.5%';
            img2.style.left ='22.5%';
            img2.style.width = '85px';
            const img3 = document.createElement('img');  
            img3.src = imageUrl2;
            img3.style.height = '50px';
            img3.style.position = 'absolute'; // Define a posição como absoluta
            img3.style.top = '26.5%';
            img3.style.left ='1%';
            img3.style.width = '85px';
            const img4 = document.createElement('img');  
            img4.src = imageUrl2;
            img4.style.height = '50px';
            img4.style.width = '85px';
            img4.style.position = 'absolute'; // Define a posição como absoluta
            img4.style.top = '38.5%';
            img4.style.left ='22.5%';
            const img5 = document.createElement('img');  
            img5.src = imageUrl2;
            img5.style.height = '50px';
            img5.style.width= '85px';
            img5.style.position = 'absolute'; // Define a posição como absoluta
            img5.style.top = '50.5%';
            img5.style.left ='1%';
            const img6 = document.createElement('img');  
            img6.src = imageUrl2;
            img6.style.height = '50px';
            img6.style.width= '85px';
            img6.style.position = 'absolute'; // Define a posição como absoluta
            img6.style.top = '62.5%';
            img6.style.left ='22.5%';
            const img7 = document.createElement('img');  
            img7.src = imageUrl2;
            img7.style.height = '50px';
            img7.style.width= '85px';
            img7.style.position = 'absolute'; // Define a posição como absoluta
            img7.style.top = '75.5%';
            img7.style.left ='0%';
            const img8 = document.createElement('img');  
            img8.src = imageUrl2;
            img8.style.height = '50px';
            img8.style.width= '85px';
            img8.style.position = 'absolute'; // Define a posição como absoluta
            img8.style.top = '88.5%';
            img8.style.left ='22.5%';
            const img = document.createElement('img');  
            img.src = ok1;
            img.style.height = '50px';
            img.style.position = 'absolute'; // Define a posição como absoluta
            img.style.top ='2%';
            img.style.left ='1%';
            img.style.width = '85px';

            document.getElementById('imgdiv').appendChild(img);
            document.getElementById('imgdiv2').appendChild(img2);
            document.getElementById('imgdiv3').appendChild(img3);
            document.getElementById('imgdiv4').appendChild(img4);
            document.getElementById('imgdiv5').appendChild(img5);
            document.getElementById('imgdiv6').appendChild(img6);
            document.getElementById('imgdiv7').appendChild(img7);
            document.getElementById('imgdiv8').appendChild(img8);          
 if (un1<=1) {
  img.src = imageUrl2; // Define a fonte da imagem
          img.style.visibility = 'hidden';
 }
            if(un2==1 ){
              img.src = ok1;
              img2.src= imageUrl2;
              // Define a fonte da imagem
            img2.style.visibility = 'hidden';
       
        } if(un3==1 && un2==2) {
          img.src= imageUrl1;
          img2.src = ok1;
          img3.src = imageUrl2; // Define a fonte da imagem
          img3.style.visibility = 'hidden';
        }    
        if (un4==1 && un3==2) {
            img.src= imageUrl1;
            img2.src = imageUrl1;
            img3.src = imageUrl1; // Define a fonte da imagem
            img4.src = imageUrl2; // Define a fonte d
            img4.style.visibility = 'hidden';
        } if (un5==1 && un4==2) {
            img.src= imageUrl1;
            img4.src = imageUrl1; // Define a fonte da imagem
            img2.src = imageUrl1;
            img3.src = imageUrl1; // Define a fonte da imagem
            img5.src = imageUrl2; // Define a fonte d
            img5.style.visibility = 'hidden';
        }if (un6==1 && un5==2) {
            img.src= ok1;
            img5.src = imageUrl1; // Define a fonte da imagem
            img4.src = imageUrl1; // Define a fonte da imagem
            img2.src = imageUrl1;
            img3.src = imageUrl1; // Define a fonte da imagem
            img6.src = imageUrl2; // Define a fonte d
            img6.style.visibility = 'hidden';
        }if (un7==1 && un6==2) {
            img.src= imageUrl1;
            img6.src = imageUrl1; // Define a fonte da imagem
            img2.src = imageUrl1;
            img5.src = imageUrl1; // Define a fonte da imagem
            img4.src = imageUrl1; // Define a fonte da imagem
            img3.src = imageUrl1; // Define a fonte da imagem
            img7.src = imageUrl2; // Define a fonte d
            img7.style.visibility = 'hidden';
        }
        if (un7==2 && un8==1) {
            img.src= imageUrl1;
            img7.src = imageUrl1;
            img6.src = imageUrl1; // Define a fonte da imagem
            img2.src = imageUrl1;
            img5.src = imageUrl1; // Define a fonte da imagem
            img4.src = imageUrl1; // Define a fonte da imagem
            img3.src = imageUrl1; // Define a fonte da imagem
            img8.src = imageUrl2; // Define a fonte d
            img8.style.visibility = 'hidden';
        } if ( un8==2) {
            img.src= imageUrl1;
            img7.src = imageUrl1;
            img8.src = imageUrl1;
            img6.src = imageUrl1; // Define a fonte da imagem
            img2.src = imageUrl1;
            img5.src = imageUrl1; // Define a fonte da imagem
            img4.src = imageUrl1; // Define a fonte da imagem
            img3.src = imageUrl1; // Define a fonte da imagem
        }        
    function ativ(at) {
      var x = at;

      if  (x==2 && un1==2) {
        window.location.replace('../portugues/vog/vog.php');
      }
      else if(x==3 && un2==2) {
        window.location.replace('../portugues/vog/at2.php');
       }
       else if(x==4 && un3==2){
        window.location.replace('../portugues/vog/at3.php');
      }
      else if(x==5 && un4==2){
        window.location.replace('../portugues/vog/at4.php');
      }
      else if(x==6 && un5==2){
        window.location.replace('../portugues/vog/at5.php');
      }
      else if(x==7 && un6==2){
        window.location.replace('../portugues/vog/conso.php');
      }
      else if(x==8 && un7==2){
        window.location.replace('../portugues/vog/form.php');
      }else{
        window.onload = swal("Bloqueada!", "Faça a atividade, da unidade anterior!", "error");
      }
    }
</script>
</body>
</html>
