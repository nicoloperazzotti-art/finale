<?php

function connetti()
{$conn = mysqli_connect ("localhost", "root", "", "human_safari")
or die("Errore di connessione");

return $conn;}

function navigazione()
   { echo "<nav>";
     echo "<ul>";
     echo "<li><a href='home.php'> Home </a></li>";
     echo "<li><a href='viaggi.php'> Viaggi </a></li>";
     echo "<li><a href='SiVola.php'> SiVola </a></li>";
     echo "<li><a href='contatti.php'> Contatti </a></li>";
     if (isset($_SESSION["username"]))
        { echo "<li><a href='cercaviaggi.php'> Cerca viaggi </a></li>";
          echo "<li><a href='prenota.php'> Prenota </a></li>";
          echo "<li><a href='profilo.php'> Profilo </a></li>";
          echo "<li><a href='logout.php'> Logout </a></li>"; }
        else
        { echo "<li><a href='login.php'> Login </a></li>"; };
     echo "</ul>";
     echo "</nav>"; }


function pieDiPagina()
{echo "<footer>";
echo "<a href='admin.php'> Area amministratore </a>";
echo "</footer>";}

?>