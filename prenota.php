<?php
session_start();
require "util.php";
if (!isset($_SESSION["username"])) { header("location:login.php"); };
$conn = connetti();
?>


<?php 

$messaggio = "";
$errore = "";
$username = $_SESSION["username"];


if (isset($_POST["id_viaggio"])) { $selezionato = $_POST["id_viaggio"]; }
   else { $selezionato = 0; };


if (isset($_POST["invia"]))
   { $id = $_POST["id_viaggio"];
     $data = $_POST["data"];
     $persone = $_POST["persone"];

     if ($data == "" || !is_numeric($persone))
        { $errore = "Compila correttamente tutti i campi"; }
        elseif ($data <date("Y-m-d"))
            {$errore = "Non puoi prenotare una data passata";}

       else { $sql = "INSERT INTO prenotazioni (username, id_viaggio, data, persone)
                  VALUES ('$username', '$id', '$data', '$persone')";
          $ok = mysqli_query($conn, $sql);
          if ($ok) { $messaggio = "Prenotazione effettuata con successo"; }
             else  { $errore = "Impossibile effettuare la prenotazione"; };
        };
   };


$sql = "SELECT id_viaggio, data, persone FROM prenotazioni WHERE username='$username'";
$ris = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="IT">
<head>
    <meta charset="UTF-8">
    <title>Prenota</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php navigazione(); ?>

<?php if ($messaggio != "") { echo "<p>".$messaggio."</p>"; }; ?>
<?php if ($errore != "")    { echo "<p>".$errore."</p>";    }; ?>


<h2> Prenota il tuo viaggio </h2>
<form method="POST" action="prenota.php">
<?php
$sql = "SELECT id, titolo FROM viaggi ORDER BY titolo";
$r = mysqli_query($conn, $sql);

echo "<select name='id_viaggio'>";
foreach ($r as $row)
   { $id = $row["id"];
     $titolo = $row["titolo"];
     if ($id == $selezionato) { $sel = "selected"; } else { $sel = ""; };
     echo "<option value='$id' $sel> $titolo </option>"; }
echo "</select>";
?>

<input type="date" name="data" required>
<input type="number" name="persone" min="1" required>
<input type="submit" name="invia" value="Prenota">
</form>

<?php 
if (mysqli_num_rows($ris) == 0) {echo "<p>Non hai ancora prenotazioni</p>";}
else {
    echo "<table>";
    echo "<tr><td>Data</td><td>Persone</td><td>ID viaggio</td></tr>";
    foreach ($ris as $row) {
        $data = $row["data"];
        $persone = $row["persone"];
        $id = $row["id_viaggio"];

    echo "<tr><td>$data</td><td>$persone</td><td>$id</td></tr>"; }
    echo "</table>"; };

?>



<?php pieDiPagina(); ?>
 </body>
</HTML>
