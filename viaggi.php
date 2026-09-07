<?php
session_start();
require "util.php";
?>

<!DOCTYPE html>

<html lang="IT">

<head>
<meta charset="UTF-8" >
<title> Viaggi </title>

    <meta name="keywords" content="Viaggi, content creator, esperienze, turismo" >
    <meta name="description" content="Viaggi human safari" >
    <meta name="author" content="Nicolò Perazzotti" >
  <link rel="stylesheet" type="text/css" href="style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <header>
      <div> <img src="Immagini/Balini.jpg" alt="logo" title="logo" id="logo" > </div>
   </header>


 <?php navigazione(); ?>
 
 <section>
<h1>Viaggio in Antartide:</h1> 
<p id="Antartide"> <iframe width="560" height="315" src="https://www.youtube.com/embed/z9dgSbO9gaU?si=57bs0DFTzt3N7PG7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </p> <br><br>   
   
<h4>Viaggio in Uzbekistan:</h4> 
<p id="Uzbekistan"> <iframe width="560" height="315" src="https://www.youtube.com/embed/8AYZE_sYVCs?si=iZHD7e-l9gMy5xOr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </p> <br><br><br> 

<h4>Viaggio in Cina:</h4> 
<p id="Cina"> <iframe width="560" height="315" src="https://www.youtube.com/embed/ZbM7EkrI-yM?si=wYXw9bRs9F7VO9rL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </p> <br><br><br> 
   
 </section>
 
 <article>
 <h4>Viaggi con gli iscritti in Kenya:</h4> 
<p id="Kenya"> <iframe width="560" height="315" src="https://www.youtube.com/embed/w-U2pZFR-HE?si=_OXr-_qeya84kyqD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </p> <br> <br> <br>
 
 <h4>Viaggio con gli iscritti in Egitto:</h4> 
<p id="Egitto"> <iframe width="560" height="315" src="https://www.youtube.com/embed/xwywxPLThmQ?si=PAN7yrFkbmnis9b9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </p> <br> <br>
 
 </article>
 
 <aside>
<p>Se volete guardare altri video visitate i suoi canali Youtube nella pagina <a href="#Link">Contatti</a> 
 </aside>
 
<?php pieDiPagina(); ?>
 </body>
</HTML>