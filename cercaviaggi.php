<?php
session_start();
require "util.php";
if (!isset($_SESSION["username"])) { header("location:login.php"); };
$conn = connetti();
?>
 
<?php if (isset($_POST["btn_dettagli"])) {$fase = 3;}
elseif (isset($_POST["btn_cerca"])) {$fase = 2;}
else {$fase = 1;};
?>
 
<!DOCTYPE html>
<html lang="IT">
<head>
    <meta charset="UTF-8">
    <title>Cerca Viaggi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
 <?php navigazione(); ?>
 
<section>
    <h2>Ricerca Viaggi</h2>
 
    <?php if ($fase == 1) { 
 $sql = "SELECT DISTINCT tipo FROM viaggi ORDER BY tipo";
$ris = mysqli_query($conn, $sql);

echo "<form method='POST' action='cercaviaggi.php'>";
echo "<p>Scegli il tipo di viaggio:</p>";
foreach ($ris as $row)
   { $t = $row["tipo"];
     echo "<input type='radio' name='tipo_scelto' value='$t' required> $t <br>"; }
echo "<input type='submit' name='btn_cerca' value='Cerca'>";
echo "</form>";
    }

    elseif ($fase == 2) {
        $tipo = $_POST["tipo_scelto"];
        $sql = "SELECT id, titolo FROM viaggi WHERE tipo='$tipo'";
        $ris = mysqli_query($conn, $sql);

        $n = mysqli_num_rows($ris);
        if ($n == 0) {echo "<p>Nessun viaggio di questo tipo</p>";}
        else {echo "<form method='POST' action='cercaviaggi.php'>";
        echo "<p> Ecco i $n viaggi di tipo: $tipo</p>";

        foreach ($ris as $row) {
            $id = $row["id"];
            $titolo = $row["titolo"];
            echo "<input type='radio' name='id_viaggio' value='$id' required> $titolo <br>";}
            echo "<input type='submit' name='btn_dettagli' value='Vedi dettagli'>";
            echo "</form>"; }
    }

        


else {
    $id = $_POST["id_viaggio"];
    $sql = "SELECT titolo, tipo, prezzo, descrizione FROM viaggi WHERE id=$id";
    $ris = mysqli_query($conn, $sql);
    $dettagli = mysqli_fetch_assoc($ris);

      echo " <h3>".$dettagli["titolo"]."</h3>"; 
      echo "<p>Tipo: ".$dettagli["tipo"]."</p>";
      echo "<p>Prezzo: ".$dettagli["prezzo"]." euro</p>";
      echo "<p>".$dettagli["descrizione"]."</p>";
   
    
echo "<form method='POST' action='prenota.php'>";
echo "<input type='hidden' name='id_viaggio' value='$id'>";
echo "<input type='submit' value='Prenota questo viaggio'>";
echo "</form>";

};
        
        


    
                
                
                
                
                
                
                
                
                
                ?>
           
 
<?php mysqli_close($conn); ?>
 
<?php pieDiPagina(); ?>
 </body>
</HTML>