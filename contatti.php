<?php
session_start();
require "util.php";
?>

<!DOCTYPE html>

<html lang="IT">

<head>
<meta charset="UTF-8" >
<title> Contatti </title>

    <meta name="keywords" content="Viaggi, content creator, esperienze, turismo" >
    <meta name="description" content="Human Safari" >
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
<h2> Social </h2>
 <ol>
  <li> Primo canale Youtube, <a href="https://www.youtube.com/@HumanSafari" target="_blank">Human Safari</a> </li> 
  <li> Secondo canale Youtube, <a href="https://www.youtube.com/@safariumano" target="_blank">Nicolò Balini</a> </li> 
  <li> <a href="https://twitter.com/HumanSafari" target="_blank">Twitter</a>  </li> 
  <li> <a href="facebook.com/HumanSafariAdventures" target="_blank">Facebook</a> </li> 
  <li> <a href="instagram.com/humansafari" target="_blank">Instagram</a> </li> 
  </ol>
  
 </section>
 
 <article>
 <h2> Se volete viaggiare con Human Safari </h2>
  <p>Visitate la pagina <a href="https://www.sivola.it/viaggi?gad_source=1&gclid=CjwKCAiA1-6sBhAoEiwArqlGPjDoyhfsp2X_FOBUH7ED6u81LjIKY2FfwS6o2tQewQY_H0ppkkmnVhoCYYUQAvD_BwE" target="_blank">SiVola</a>. <br> <br>
 Se avete bisogno di contattarlo via email, scrivete a n.balini@humansafari.it.</p>
 </article>
 
 <aside>
 <p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="CSS Valido!" />
    </a>
</p>
 </aside>
 
 <?php pieDiPagina(); ?>
 </body>
</HTML>