<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Referencia -->
    <link href="style.css" rel="stylesheet" type="text/css" />

    <title>Calculadora Ambiental</title>
  </head>
  <body>
    <!-- JavaScript -->
    <script src="script.js"></script>
<style type="text/css">
  .linkinicio:hover{
    background-color: green;
    color:gray;
  }
  .aluminio .p{
    font-size: 150%;
  }
</style>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top" id="navbarPrincipal" >
  <a class="navbar-brand" href="index.php" style="font-family: Quire Sans;
  color: white; font-weight: bold;">
  <img src="imagenes/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
  CALCULADORA AMBIENTAL
  </a>
  <button class="navbar-toggler btn btn-success" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <!--<span class="navbar-toggler-icon"></span>-->
      <svg width="1em" style="color: white;"height="1em" viewBox="0 0 16 16" class="bi bi-three-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
</svg>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link linkinicio" href="index.php" style="font-family: AgencyFB; color: white;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
</svg>  INICIO <span class="sr-only"></span></a>
      </li>

 

    </ul>
  </div>
</nav>

  <!-- CARRUCEL -->
<div id="carouselExampleCaptions" class="carousel slide mt-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner " >
    <div class="carousel-item active">
      <img src="imagenes/co2.png" class="d-block w-100" alt="Co2">
      <div class="carousel-caption  d-md-block">
        <h5>Huella de Carbono</h5>
        <p style="font-size: 120%;">Conjunto de emisiones de gases de efecto invernadero producidas sirve como una útil herramienta de gestión para conocer las conductas o acciones que están contribuyendo a aumentar nuestras emisiones.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/grupo2.png" class="d-block w-100" alt="Quienes somos">
      <div class="carousel-caption d-md-block">
        <h5>Quienes somos</h5>
        <p style="font-size: 120%;">Somos un grupo de estudiantes preocupado por el cambio ambiental. Como resultado, hemos creado ésta herramienta para poder aportar algo hacia los problemas actuales.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/AMBIENTE.png" class="d-block w-100" alt="Medio Ambiente">
      <div class="carousel-caption d-md-block">
        <h5>Medio Ambiente</h5>
        <p style="font-size: 120%;">Es el espacio en el que se desarrolla la vida de los seres vivos y que permite la interacción de los mismos.Planta un árbol y estarás sembrando conciencia.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



  <main class="container ">
  <div class="oscar">
    <h3 style="color:white;">INSTRUCCIONES</h3>
    <p style="font-size: 150%; color:white; text-shadow:none;">Coloca un aproximado de kilogramos que utilizas de cada uno de los materiales al mes.</p>
    <p style="font-size: 150%; color:white; text-shadow:none;">Recuerda que los datos tienen que ser numéricos enteros</p> 
    
    <p style="font-size: 150%; color:white; text-shadow:none;">Al finalizar, da click al botón de “calcular”</p>
      
  </div>
    <div class="mija-cajita">
      <h3 style="color: white;">CALCULADORA</h3> 
        <div class="contenedor">

<!-- INICIO DEL FORM -->
<form action="pruebas.php" method="POST" onsubmit="return validar(this)">       
  <div class="Aluminio">
      <p>Aluminio: <input type="number" name="Aluminio" id="inputDisabledEx" class="quantity" min="0" name="quantity" value="0">
      <label for="inputDisabledEx"> kg.</label></p>
  </div>
        
  <div class="PET" ><p>PET: <input type="number" name="PET" id="inputDisabledEx" class="quantity" min="0" name="quantity" value="0">
    <label for="inputDisabledEx"></label> kg.</p></div>

  <div class="Vidrio"><p>Vidrio: <input type="number" name="Vidrio" id="inputDisabledEx" class="quantity" min="0" name="quantity" value="0">
    <label for="inputDisabledEx"> kg.</label></p></div>

  <div class="Carton"><p>Cartón: <input type="number" name="Carton" id="inputDisabledEx" class="quantity" min="0" name="quantity" value="0">
    <label for="inputDisabledEx"> kg.</label></p>
  </div>

  <div class="Fierro"><p>Fierro: <input type="number" name="Fierro" id="inputDisabledEx" class="quantity" min="0" name="quantity" value="0">
    <label for="inputDisabledEx"> kg.</label></p>
  </div>

  <div class="Papel">
    <p>Papel <input type="number" name="Papel" id="inputDisabledEx" class="quantity" min="0" name="quantity" value="0">
    <label for="inputDisabledEx"></label> kg.</p>
  </div>

  <br> <br>

  <button type="submit" class="btn btn-primary btn-lg">Calcular</button>
</form>
<!-- CIERRE DEL FORM -->
</div>
    </div>
 <br><br>
  </main>


  </body>
  <script> 
    const validar = (f) => {
      
      if(f.elements[0].value==""){
         f.elements[0].value=0;
      }
      if(f.elements[1].value==""){
        f.elements[1].value=0;
      }
      if(f.elements[2].value==""){
        f.elements[2].value=0;
      }
      if(f.elements[3].value==""){
        f.elements[3].value=0;
      }
      if(f.elements[4].value==""){
        f.elements[4].value=0;
      }
      if(f.elements[5].value==""){
        f.elements[5].value=0;
      }
      this.submit;
    }

  </script>
</html>