<!doctype html>
<?php 

$aluminioKgs=$_POST['Aluminio'];
$petKgs=$_POST['PET'];
$vidrioKgs=$_POST['Vidrio'];
$cartonKgs=$_POST['Carton'];
$fierroKgs=$_POST['Fierro'];
$papelKgs=intval($_POST['Papel']);

$kilosDeBasura = round($aluminioKgs + $petKgs + $vidrioKgs + $cartonKgs + $fierroKgs +$papelKgs);
$kilosDeCO2= round(($aluminioKgs*9) + ($petKgs*1.5)+ ($vidrioKgs*0.3)+ ($cartonKgs*0.9) + ($fierroKgs*1.77) + ($papelKgs*1.3));

$kilosPorAño=round($kilosDeCO2);
$kilosPorSemana=round($kilosDeCO2/4);
$dineroGenerado= round(($aluminioKgs*18) + ($petKgs*9.5)+ ($vidrioKgs*0.60)+ ($cartonKgs*3) + ($fierroKgs*2) + ($papelKgs*3));
$total=0;
//raul es una perra suciaaaaa

//Buenas
$añosParaAbsorber= round($kilosDeCO2/20);
$produccionKW = round($kilosDeCO2/2.6);
$respiracionPorDia = round($kilosDeCO2/1);
$casasUrbanasPorDia = round($kilosDeCO2/34);

//Malas
$kilometrosPorkg= round($kilosDeCO2/750);
$vacasPorDia= round($kilosDeCO2/5);
$animalesMuertosEnElMar = round($kilosDeCO2*35);
$litrosDeDiesel = round($kilosDeCO2/2.65);




?>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- Referencia -->
    <link href="style2.css" rel="stylesheet" type="text/css" />
<style type="text/css">
  .linkinicio:hover{
    background-color: green;
    color:gray;
  }
</style>
  </head>
  <body>
    <!-- JavaScript -->
    <script src="script.js"></script>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg mb-10 fixed-top" >
  <a class="navbar-brand" href="index.php" style="font-family: Quire Sans;
  color: white; font-weight: bold;">
  <img src="imagenes/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
  CALCULADORA AMBIENTAL
  </a>
  <button class="navbar-toggler btn btn-success"  type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="">
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

    <br>
    <div class="container mt-15" style="margin-top:10%;">
      <div class="row">
        <div class="col-sm cabezatusdatos "><h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
  <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
</svg>    TUS DATOS</h3></div>
      </div>
      <div class="row">
        <button onclick="imprimir()">Imprimir la página</button>
        <div class="col-sm tusdatos"><p><h4>ALUMINIO</h4></p><p><h5> <?php echo $aluminioKgs?> </h5></p></div>
        <div class="col-sm tusdatos"><p><h4>PAPEL</h4></p><p><h5> <?php echo $papelKgs?> </h5></p></div>
        <div class="col-sm tusdatos"><p><h4>CARTÓN</h4></p><p><h5> <?php echo $cartonKgs?> </h5></p></div>
        <div class="col-sm tusdatos"><p><h4>PET</h4><p></p><p><h5> <?php echo $petKgs?> </h5></p></div>
        <div class="col-sm tusdatos"><p><h4>FIERRO</h4></p><p><h5> <?php echo $fierroKgs?> </h5></p></div>
        <div class="col-sm tusdatos"><p><h4>VIDRIO</h4><p><h5> <?php echo $vidrioKgs?> </h5></p></p></div>
      </div>
    </div>
    <br><br>



<!-- ACCORDION -->
<div class="accordion ml-20 mr-20" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        RESULTADO EN MESES
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <div class="container">
      <div class="row">
        <div class="col-sm cabezatusdatos"><h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-checklist" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg>    RESULTADOS AL MES</h3></div>
      </div>
      <div class="row">
        <div class="col-sm resultadobueno"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
</svg>   BUENAS
        <?php
        if($kilosDeCO2!=0){
            echo "<p>Se generaron ".($kilosDeCO2) ." kilos de CO2 en un mes </p>";
          }
          if($añosParaAbsorber!=0){
            echo "<p>
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-tree-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0z'/>
  <path d='M7 13.5h2V16H7v-2.5z'/>
</svg>
             A un arbol le tomaría  " .($añosParaAbsorber/12). " meses absorber esta cantidad de CO2, qué bueno que quieras reciclarlo!</p>";
          }
          if($produccionKW!=0){
            echo "<p> 
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-lightning-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z'/>
</svg>
            Reciclando este material, ahorrarías la producción de " .round($produccionKW). " KW/H, impresionante, ¿no?</p>";
          }
          if($respiracionPorDia!=0){
            echo "<p> 
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-person-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/>
</svg>
            Si reciclaras este material, evitarias emitir el mismo CO2 que " .round($respiracionPorDia*31). " personas en un mes sólo de respiración. WOW!</p>";
          }
          if($casasUrbanasPorDia!=0){
            echo "<p> 
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-house-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z'/>
  <path fill-rule='evenodd' d='M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z'/>
</svg>
            Al llevar a un centro de reciclaje de tus " .($kilosDeBasura). " kilos de basura, ahorrarias el mismo CO2 que una casa urbana hace en ".($casasUrbanasPorDia)." meses. :O </p>";
          }
        ?>
        
        
        </div>
        <div class="col-sm resultadomalo"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>     MALAS
        <?php
          if($kilometrosPorkg!=0){
            echo "<p>Si no reciclas este material, harías el mismo daño que un vehiculo recorriendo " .$kilometrosPorkg. " kms</p>";
          }
          if($vacasPorDia!=0){
            echo "<p> 
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-bell-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path d='M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z'/>
</svg>
           Se generó la misma cantidad de CO2 que " .($vacasPorDia*31). " vacas producen 1 mes. Muuuuu-cha contaminacion...¿no? je...</p>";
          }
          if($animalesMuertosEnElMar!=0){
            echo "<p> 
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-droplet-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6zM6.646 4.646c-.376.377-1.272 1.489-2.093 3.13l.894.448c.78-1.559 1.616-2.58 1.907-2.87l-.708-.708z'/>
</svg>
            Los ".$kilosDeCO2. " kilos de CO2 generados pueden causar problemas a " .$animalesMuertosEnElMar. " animales acuáticos de todo tipo. Pobres delfines:(</p>";
          }
          if($litrosDeDiesel!=0){
            echo "<p> 
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-life-preserver' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenod' d='M14.43 10.772l-2.788-1.115a4.015 4.015 0 0 1-1.985 1.985l1.115 2.788a7.025 7.025 0 0 0 3.658-3.658zM5.228 14.43l1.115-2.788a4.015 4.015 0 0 1-1.985-1.985L1.57 10.772a7.025 7.025 0 0 0 3.658 3.658zm9.202-9.202a7.025 7.025 0 0 0-3.658-3.658L9.657 4.358a4.015 4.015 0 0 1 1.985 1.985l2.788-1.115zm-8.087-.87L5.228 1.57A7.025 7.025 0 0 0 1.57 5.228l2.788 1.115a4.015 4.015 0 0 1 1.985-1.985zM8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm0-5a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/>
</svg>
            Generaste la misma cantidad de carbono que " .$litrosDeDiesel. " litros de diesel quemado. Pero animo! Tu puedes hacer la diferencia!</p>";
          }
          
        ?>


        
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        RESULTADO AL AÑO
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <div class="container">
      <div class="row">
        <div class="col-sm cabezatusdatos"><h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-checklist" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg>    RESULTADOS AL AÑO</h3></div>
      </div>
      <div class="row">
        <div class="col-sm resultadobueno"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
</svg>   BUENAS
        <?php
        if($kilosDeCO2!=0){
            echo "<p>Se generarían ".round($kilosDeCO2*12) ." kilos de CO2 en un año </p>";
        }
          if($añosParaAbsorber!=0){
            echo "<p>
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-tree-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0z'/>
  <path d='M7 13.5h2V16H7v-2.5z'/>
</svg>
             A un arbol le tomaría  " .($añosParaAbsorber). " años absorber esta cantidad de CO2, qué bueno que quieras reciclarlo!</p>";
          }
          if($produccionKW!=0){
            echo "<p> 
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-lightning-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z'/>
</svg>
            Reciclando este material, ahorrarías la producción de " .($produccionKW). " KW/H, impresionante, ¿no?</p>";
          }
          if($respiracionPorDia!=0){
            echo "<p> 
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-person-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/>
</svg>
            Si reciclaras este material, evitarias emitir el mismo CO2 que " .round($respiracionPorDia*365). " personas en un año solo de respiración. WOW!</p>";
          }
          if($casasUrbanasPorDia!=0){
            echo "<p> 
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-house-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z'/>
  <path fill-rule='evenodd' d='M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z'/>
</svg>
            Al llevar a un centro de reciclaje de los " .($kilosDeBasura*12). " kilos de basura que generarías, ahorrarias el mismo CO2 que una casa urbana hace en ".($casasUrbanasPorDia)." año. :O </p>";
          }
        ?>
        
        
        </div>
        <div class="col-sm resultadomalo"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>     MALAS
        <?php
          if($kilometrosPorkg!=0){
            echo "<p>Si no reciclas este material, harías el mismo daño que un vehiculo recorriendo " .$kilometrosPorkg. " kms</p>";
          }
          if($vacasPorDia!=0){
            echo "<p> 
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-bell-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path d='M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z'/>
</svg>
           Se generó la misma cantidad de CO2 que " .round($vacasPorDia*365). " vacas producen 1 año. Muuuuu-cha contaminacion...¿no? je...</p>";
          }
          if($animalesMuertosEnElMar!=0){
            echo "<p> 
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-droplet-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6zM6.646 4.646c-.376.377-1.272 1.489-2.093 3.13l.894.448c.78-1.559 1.616-2.58 1.907-2.87l-.708-.708z'/>
</svg>
            Los ".($kilosDeCO2*12). " kilos de CO2 que se generarían pueden causar problemas a " .($animalesMuertosEnElMar*12). " animales acuáticos de todo tipo. Pobres delfines:(</p>";
          }
          if($litrosDeDiesel!=0){
            echo "<p> 
                <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-life-preserver' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenod' d='M14.43 10.772l-2.788-1.115a4.015 4.015 0 0 1-1.985 1.985l1.115 2.788a7.025 7.025 0 0 0 3.658-3.658zM5.228 14.43l1.115-2.788a4.015 4.015 0 0 1-1.985-1.985L1.57 10.772a7.025 7.025 0 0 0 3.658 3.658zm9.202-9.202a7.025 7.025 0 0 0-3.658-3.658L9.657 4.358a4.015 4.015 0 0 1 1.985 1.985l2.788-1.115zm-8.087-.87L5.228 1.57A7.025 7.025 0 0 0 1.57 5.228l2.788 1.115a4.015 4.015 0 0 1 1.985-1.985zM8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm0-5a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/>
</svg>
            Generarías la misma cantidad de carbono que " .($litrosDeDiesel*12). " litros de diesel quemado. Pero animo! Tu puedes hacer la diferencia!</p>";
          }

          


        ?>

  
        
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
  
  </div>
</div>
<!-- TERMINA ACORDEON -->


    <br><br>



    <div class="container">
      <div class="row">
        <div class="col cabezamonetizacion"><h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cash-stack" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
  <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
  <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
</svg>      MONETIZACION</h3></div>
      </div>
      <div class="row">
        <div class="col-4 imagensita"><img style="width: 100%; height: auto;" src="imagenes/money.jpg" class=" w-100"></div>
        <div class="col-8 tumonetizacion" style="background-color: #369f2d;"><br><br>
        <h2>Obtendrías 
              <?php  
              echo  $dineroGenerado;
              ?> pesos mexicanos (MXN) si donases tu material
        </h2>
        <p style='color:white; text-shadow:none;'>Desgloce:</p>
          <?php 
          ($aluminioKgs*9) + ($petKgs*1.5)+ ($vidrioKgs*0.3)+ ($cartonKgs*0.9) + ($fierroKgs*1.77) + ($papelKgs*1.3);
            if(($aluminioKgs*9)!=0){
              echo "<p style='color:white; text-shadow:none;'>Si vendes ".$aluminioKgs. " kilos de aluminio, obtendrías ".($aluminioKgs*9)." pesos (MXN)</p>";
              $total+=($aluminioKgs*9);
            }
            if(($petKgs*1.5)!=0){
              echo "<p style=' color:white; text-shadow:none;'>Si vendes ".$petKgs. " kilos de PET, obtendrías ".($petKgs*1.5)." pesos (MXN)</p>";
              $total+=($petKgs*9);
            }
            if(($vidrioKgs*0.3)!=0){
              echo "<p style=' color:white; text-shadow:none;'>Si vendes ".$vidrioKgs. " kilos de Vidrio, obtendrías ".($vidrioKgs*0.3)." pesos (MXN)</p>";
              
            }
            if(($cartonKgs*0.9)!=0){
              echo "<p style='color:white; text-shadow:none;'>Si vendes ".$cartonKgs." kilos de carton, obtendrías ".($cartonKgs*0.9)." pesos (MXN)</p>";
              $total+=($cartonKgs*9);
            }
            if(($fierroKgs*1.77)!=0){
              echo "<p style=' color:white; text-shadow:none;'>Si vendes ".$fierroKgs. " kilos de fierro, obtendrías ".($fierroKgs*1.77)." pesos (MXN)</p>";
              $total+=($fierroKgs*9);
            }
            if(($papelKgs*1.3)!=0){
              echo "<p style=' color:white; text-shadow:none;'>Si vendes ".$papelKgs. " kilos de papel, obtendrías ".($papelKgs*1.3)." pesos (MXN)</p>";
              $total+=($papelKgs*9);
            }
            //echo "<h2>En total obtendrías ".$total." pesos si vendes todo esto! </h2>";
          ?>
        </div>
      </div>
    </div>
    
    <br><br>
    
    <!-- RESULTADOS -->
  
    <main class="container">
      <div class="abcd">
       <div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="modal fade" id="modalComo">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
             <h1>¿Como Reducir?</h1>
           </div>
            <div class="modal-body">
              Usar bolsas de tela en lugar de bolsas de plástico comprar productos con menos empaque evitar la compra de bebidas embotelladas innecesariamente reducir el uso de papel donar cosas a organizaciones benéficas tirar la basura y los desechos peligrosos correctamente crear un lugar para una composta.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">CERRAR</button>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="modal fade" id="modalLugar">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
             <h1>Lugares Compra Venta</h1>
           </div>
            <div class="modal-body">
              ¿Te interesa reciclar? Qué bien! Si vives en Monterrey o área metropolitana, te recomendamos estos lugares:
              <p></p>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>Servicios Ambientales internacionales: Carr. Huinalá - Mezquital 120 Col. Apodaca Centro, Apodaca, N.L. 
              <p></p>
             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>Reciclables panteras: 5 DE FEBRERO, 510, INDEPENDENCIA, MONTERREY, NL, C.P. 64720, México 
              <p></p>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>Renso: Oficina: Av. Pedro Ramírez Vázquez #200-11, Col. Valle Oriente, Piso 1, San Pedro Garza García, NL. CP 66269 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">CERRAR</button>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<!-- INICIO DE MODAL -->
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="modal fade" id="modalNoReci">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
             <h1>¿Que hacer con lo no reciclable?</h1>
           </div>
            <div class="modal-body">
              Hay diferentes centros para basura que no puede reciclarse, de los existentes tenemos:
              <p></p>
              1.Centros de recolección de basura electrónica como tabletas, computadoras viejas, refrigeradores, televisores, etc
              <p></p>
              2.Centro de recolección de baterías
              <p></p>
              3. Reuso de útiles escolares

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">CERRAR</button>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- TERMINA -->
        <!-- BOTONES -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalComo"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
</svg>     ¿Como reducir?</button>
        <button type="button" class="btn btn-success"data-toggle="modal" data-target="#modalLugar"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
</svg>    Lugares compra y venta</button>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalNoReci"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
  <path d="M7 13.5h2V16H7v-2.5z"/>
</svg>    ¿Qué hacer con lo no reciclable?</button>

 <button type="button" class="btn btn-success"  onclick="window.location.href='index.php'">
 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calculator-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"/>
</svg>   Quiero calcular de nuevo!</button>
      </div>
    </main>
    <br><br>

  </body>
<script> 

  const imprimir = () => {
    if (window.print) { 
      window.print(); 
    } 
  }
</script>
</html>