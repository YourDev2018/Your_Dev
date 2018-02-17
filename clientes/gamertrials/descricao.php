<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Início</title>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </head>
<style type="text/css">

  .body
  {
    font-family: 'Raleway';
  }
  /* Mobile */
  @media (max-width: 769px)
  {
    .titulo-jogo
    {
      margin-top: 15px;
      margin-bottom: 15px;
      font-size: 50px;
    }
    .desktop
    {
      display: none;
    }
    .mobile
    {
      display: block;
    }
    .botao-iniciar
    {
      font-size: 50px;
    }
    .botao-iniciar-div
    {
      margin-bottom: 50px;
    }
  }
  @media (min-width: 770px)
  {
    .titulo-jogo
    {
      margin-top: 15px;
      margin-bottom: 15px;
      font-size: 60px;
    }
    .botao-iniciar
    {
    }
    .botao-iniciar:hover
    {
    }
    .desktop
    {
      display: block;
    }
    .mobile
    {
      display: none;
    }
    .botao-iniciar
    {
      font-size: 60px;
    }
    .botao-iniciar-div
    {
      margin-bottom: 100px;
    }
  }

  .logo-inicio
  {
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: 20px;
    margin-right: 20px;
  }
  .imagem-jogo
  {
    width: 100vw;
    height: auto;
    margin-top: 23px;
    margin-bottom: 23px;
  }
  .botao-iniciar
  {
    background-color: #feba51;
    color: #192442;
    padding-left: 50px;
    padding-right: 50px;
    text-decoration: none;
  }
  .botao-iniciar:hover
  {
    background-color: #27919b;
    color: #192442;
    text-decoration: none;
  }

</style>
<body class="img-responsive img-center" style="background: url('img/fundo.png'); background-repeat: repeat; background-size: cover; background-position : center;">

  <div>

    <!-- Logo -->
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="text-center logo-inicio">
          <img src="img/gt-logo.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

    <!-- Imagem jogo -->
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-6 text-center desktop" style="background-color: #FEBA51;">
          <img src="img/jogo-fundo-teste.jpg" class="img-fluid imagem-jogo">
        </div>
        <div class="text-center mobile" style="background-color: #FEBA51;">
          <img src="img/jogo-fundo-teste.jpg" class="img-fluid imagem-jogo">
        </div>
      </div>
    </div>

    <!-- Descrição -->
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 text-center titulo-jogo">
          <a style="color: #FEBA51; font-weight: 600;">HOLODRIVE</a>
        </div>
        <div class="col-6 descricao-jogo desktop">
          <a style="text-align: justify; text-justify: inter-character; color: white;font-weight: 400;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque urna finibus cursus bibendum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam interdum rhoncus blandit. Curabitur feugiat, ligula id porta pulvinar, dolor quam elementum diam, in mollis leo tortor et ipsum. In nec eros quis neque lacinia tincidunt. Duis id feugiat elit, eu venenatis nisl. Morbi eu lacinia lacus.</a>
          <br><br><br>
        </div>
        <div class="col-10 descricao-jogo mobile">
          <a style="text-align: justify; text-justify: inter-character; color: white;font-weight: 400;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque urna finibus cursus bibendum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam interdum rhoncus blandit. Curabitur feugiat, ligula id porta pulvinar, dolor quam elementum diam, in mollis leo tortor et ipsum. In nec eros quis neque lacinia tincidunt. Duis id feugiat elit, eu venenatis nisl. Morbi eu lacinia lacus.</a>
          <br><br><br>
        </div>
        <div class="col-10 text-center botao-iniciar-div">
          <a class="botao-iniciar" style="font-weight: 600" href="">Iniciar</a>
        </div>

      </div>
    </div>

  </div>

</body>
