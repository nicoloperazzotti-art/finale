<?php
session_start();
require "util.php";
?>

<!DOCTYPE html>

<html lang="IT">

<head>
 <meta charset="UTF-8" >
  <title> SiVola </title>

    <meta name="keywords" content="Viaggi, content creator, esperienze, turismo, SiVola" >
    <meta name="description" content="SiVola" >
    <meta name="author" content="Nicolò Perazzotti" >
  <link rel="stylesheet" type="text/css" href="style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

 <header>
   <div> <img src="Immagini/SiVola.png" alt="logo" title="logo" id="logo" > </div>
	 
</header>

 <?php navigazione(); ?>
 
 <section>
  <h1>SiVola</h1>
   <a href="https://www.sivola.it/viaggi?gad_source=1&gclid=Cj0KCQiAkeSsBhDUARIsAK3tieduZroZzJ-ShtQzB8qlI_TL3Q8PCJ-DcGTlF4SjN3IBaJb52aFX5NAaArurEALw_wcB" target="_blank">SiVola</a> è il <strong>Tour Operator</strong> fondato da viaggiatori professionisti che ti porta in giro per il mondo
    tutto l'anno, tra <strong> viaggi avventura </strong> ed <strong>esperienze indimenticabili.</strong> E' stata fondata da Nicolò Balini, Carlo Laurora, Daniel Mazza, Stefano Cantarini e Claudio Pelizzeni. Nei viaggi oltre a loro ci saranno anche i nostri coordinatori, viaggiatori per passione e professione
 <br/> <br/> <br/> <br/>
 </section>
 
 <article>
 <h3>Su <a href="https://www.sivola.it/viaggi?gad_source=1&gclid=Cj0KCQiAkeSsBhDUARIsAK3tieduZroZzJ-ShtQzB8qlI_TL3Q8PCJ-DcGTlF4SjN3IBaJb52aFX5NAaArurEALw_wcB" target="_blank">SiVola</a> potrai: </h3>
  <table>
   <tr>
    <th> Destinazione </th>
	<th> Viaggia </th>
	<th> Conoscenze </th>
	<th> Preparati </th>
  </tr>
 <tr> <td> Scegli la destinazione filtrando tra paese, periodo, budget. </td> <td> Prenota il viaggio </td> <td> Preparati a fare nuove amicizie e a vivere nuove esperienze nei nostri viaggi di gruppo. </td>
  <td> Prepara la valigia, i documenti e goditi il viaggio. </td>
  </table> <br/> <br> <br>
  
<p>Per maggiori informazioni su quello che andrai a esplorare nei viaggi, per le attrazioni che andrai a fare consulta i nostri <a href="https://www.sivola.it/news/" target="_blank">Diari di viaggio</a>. Se hai dei dubbi contattaci su info@sivola.it. </p>
 <br> <br> <hr>
 
 <h3>Recensioni dei nostri viaggi:</h3> <br/>
 
 <div> <img src="Immagini/Rece1.png" alt="Recensione" title="Recensione" id="Recensione1" > </div>
 <div id="relative"> <img src="Immagini/Rece2.png" alt="Recensione" title="Recensione" id="Recensione2" > </div> 
 <div> <img src="Immagini/Rece3.png" alt="Recensione" title="Recensione" id="Recensione3" > </div> <hr>
 
 </article>
 
 <aside>
 
       <h2> Vuoi viaggiare con noi? Dicci qualcosa su di te!</h2>
  <form action="mailto:nicolo.perazzotti@edu.unito.it" method="post" enctype="text/plain"> 
   <fieldset>
	<label for="Nome">Nome: <br> <input type="text" name="nome" placeholder="Inserisci il tuo nome" size="45" maxlength="45" > </label> <br> <br> 
	  <label for="Cognome">Cognome: <br> <input type="text" name="Cognome" placeholder="Inserisci il tuo cognome" size="50" maxlength="50" > </label> <br> <br>
	    <label for="Genere">Genere: <input type="radio" name="genere"> </label> <label for="Femmina">Femmina  </label>
   <label for="Maschio"> Maschio<input type="radio" name="genere" /> </label> <br><br>
	     <label for="Telefono">Telefono: <input type="tel" name="telefono" id="telefono" placeholder="Inserisci il tuo numero di telefono"> </label> <br> <br>
	      <label for="email">Email: <input type="email" name="email" id="email" placeholder="Inserisci la tua email"> </label> <br> <br>
	       <label for="Età">Età: <select name="Età"> <option value="1">Tra 18 e 25</option>
	     <option value="2">Tra 26 e 40</option> 
		 <option value="3">Più di 40</option>  </label> 
     </fieldset> 
<br>	
  <label for="Inviare"> <!--Invia--> <input type="Submit" value="Invia" > </label>
   <label for="Cancellare"> <!--Cancella--> <input type="Reset" value="Cancella" > </label> 

 </form>
 
 
 </aside>
 
 <footer> © 2023 Nicolò Perazzotti
  </footer>
  
 <?php pieDiPagina(); ?>
 </body>
</HTML>