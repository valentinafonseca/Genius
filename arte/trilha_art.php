<!DOCTYPE html>
<html>
<head>
  <title>Matemática</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="genius.png"> 
  <link rel="stylesheet" href="../styles/art.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
  <style>

.materia {
    width: 50%;
    margin-left: 25%;
    border-radius: 40px;
    padding:5px;
    background-color:rgba(47, 51, 0, 0.7);
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
    transition:  0.3s;
}

.menu-materia a:hover {
    background-color: #2f3300;
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
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  <!-- menu principal -->
  <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,800' rel='stylesheet' type='text/css'>
<nav class="menu">
  <ul>
    <li><a href="../index.html">Início</a></li>
    <li><a href="perfil.html">Perfil</a></li>
    <li><a href="login.html">Login</a></li>
    <li><a href="cadastro.html">Cadastro</a></li>
    <li><a href="index.html">Sair</a></li>
  </ul>
</nav>
<!-- unidade -->
<div id="uni">
<p>Artes</p>
<br>
</div>

<br>
<!-- menu de materias -->
<nav class="materia">
        <ul class="menu-materia">
            <li><a href="../mat/trilha.php">Matematica</a></li>
            <li><a href="../arte/trilha_art.php">Artes</a></li>
            <li><a href="../ing/trilha.php">Inglês</a></li>
            <li><a href="../portugues/trilha_portugues.php">Portugues</a></li>
        </ul>
    </nav>
    <br><br>
<!-- corpo atividades -->
<div id="corpo">
  <table id="corpo_at">
    <tr>
        <td>
          <a href="a_at1.php">
            <div class="at"></div></td></a>
      </tr>

      <tr><a href="a_at1.php"><td class="nome">Números</td></a></tr></a>
  <td>
  </td>
</a>    
<tr><td></td><td style="padding-left:50%;width: 50px;"></td>
          <td>
          <a href="atividades/p_at1vogais.php">
            <div class="at"></div></td>
      </tr>
  <tr>
    <td></td><TD></TD><td class="nome">VOGAL A </td>
  </tr>
  <tr>  
  </a>

    <td>
    <a href="p_at1vogais.php">
    <div class="at"></div> 
      </td> 
  </tr>
<tr><td class="nome">VOGAL E</td></tr>
<tr>
  <td></td>
</a>

  <TD></TD><td>
    <a href="atividade.html">
    <div class="at"></div>
  </td>
</tr>
<tr><td></td><TD></TD><td class="nome">VOGAL I</td></tr>
</a>

<tr>
  <td>
    <a href="atividade.html">
    <div class="at"></div>
  </td>
</tr>
<tr><td class="nome">VOGAL O</td></tr>
</a>

<tr><td></td><TD></TD>
  <td>
    <a href="atividade.html">
    <div class="at"></div>
  </td>
</tr>
<tr><td></td><TD> </TD><td class="nome">VOGAL U</td></tr>
</a>

</table>
<img src="../animais/leao.png" id="porco">
<img src="../animais/leao.png" id="coala">
</div>
</body>
</html>

