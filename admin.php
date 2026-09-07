<?php
session_start();
require "util.php";
$conn = connetti();

$messaggio = "";
$errore = "";

if (isset($_POST["btn_login_admin"]))
    {$u = $_POST["user_admin"];
$p = $_POST["pwd_admin"];

if ($u == 'admin' && $p == "admin123")
    {$_SESSION["admin"] = TRUE;}
else {$errore = "Credenziali amministratore errate";};
};

if (isset($_POST["btn_aggiungi"]))
    {$titolo = $_POST["titolo"];
   $tipo = $_POST["tipo"];
   $prezzo = $_POST["prezzo"];
   $descrizione = $_POST["descrizione"];
   
   if ($titolo == "" || $tipo == "" || $prezzo == "" || $descrizione == "") {$errore = "C'è un campo vuoto";}
   elseif (!is_numeric($prezzo)) {$errore = "Il prezzo dev'essere un numero";}
   
   else {$sql = "INSERT INTO viaggi (titolo, tipo, prezzo, descrizione) VALUES ('$titolo', '$tipo', '$prezzo', '$descrizione')";
   $ok = mysqli_query($conn, $sql);
   if ($ok) {$messaggio = "Viaggio aggiunto con successo"; }
   else {$errore ="Impossibile aggiungere il viaggio";};};
   
   };


   if (isset($_POST["btn_elimina"]))
    {$id = $_POST["id_elimina"];
   $sql = "DELETE FROM viaggi WHERE id = $id";
   $ok = mysqli_query($conn, $sql);
   
   if ($ok) {$messaggio = "Viaggio eliminato";}
   else {$errore = "Impossibile eliminare il viaggio";};
   };

if (isset($_POST["btn_elimina_utente"]))
    {$u = $_POST["username_elimina"];
$sql = "DELETE FROM utenti WHERE username='$u'";
$ok = mysqli_query($conn, $sql);
   
   if ($ok) {$messaggio = "Utente eliminato";}
   else {$errore = "Impossibile eliminare l'utente";};
   };

if (isset($_POST["btn_aggiorna"]))
    {$id = $_POST["id_mod"];
$titolo = $_POST["titolo_mod"];
$tipo = $_POST["tipo"];
$prezzo = $_POST["prezzo_mod"];
$descrizione = $_POST["descrizione_mod"];
   if ($titolo == "" || $tipo == "" || $prezzo == "" || $descrizione == "") {$errore = "C'è un campo vuoto";}
   elseif (!is_numeric($prezzo)) {$errore = "Il prezzo dev'essere un numero";}
else {$sql = "UPDATE viaggi SET titolo='$titolo', tipo='$tipo', prezzo ='$prezzo', descrizione = '$descrizione' WHERE id=$id";

$ok = mysqli_query($conn, $sql);

if ($ok) {$messaggio = "Viaggio modificato";}
else {$errore = "Impossibile modificare il viaggio";};};

};


   ?>

<!DOCTYPE html>
<html lang="IT">
<head>
 <meta charset="UTF-8" >
  <title> SiVola </title>

    <meta name="keywords" content="Viaggi, content creator, esperienze, turismo, SiVola" >
    <meta name="description" content="SiVola" >
    <meta name="author" content="Nicolò Perazzotti" >
  <link rel="stylesheet" type="text/css" href="style.css" >
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php navigazione(); ?>

<?php if ($messaggio != "") { echo "<p>".$messaggio."</p>"; }; ?>
<?php if ($errore != "")    { echo "<p>".$errore."</p>";    }; ?>

<?php
if (!isset($_SESSION["admin"]))
   { echo "<form method='POST' action='admin.php'>";
echo "Username: <input type='text' name='user_admin'> <br>";
echo "Password: <input type='password' name='pwd_admin'> <br>";
echo "<input type='submit' name='btn_login_admin' value='Accedi'>";
echo "</form>";
   }

   else 
    {echo "<h2> Pannello amministratore</h2>";

   
   

   echo "<h3> Aggiungi un viaggio </h3>";
   echo "<form method='POST' action='admin.php'>";
   echo "Titolo: <input type='text' name='titolo'> <br>";
   echo "Tipo: <input type='text' name='tipo'> <br>";
   echo "Prezzo: <input type='text' name='prezzo'> <br>";
   echo "Descrizione: <textarea name='descrizione'> </textarea> <br>";
   echo "<input type='submit' name='btn_aggiungi' value='Aggiungi'>";
   echo "</form>";

   
   };

   echo "<h4> Rimuovi un viaggio </h4>";

   $sql = "SELECT id, titolo FROM viaggi ORDER BY titolo";
   $ris = mysqli_query($conn, $sql);

   echo "<form method='POST' action='admin.php'>";
   foreach ($ris as $row) {
    $id = $row["id"];
    $titolo = $row["titolo"];

    echo "<input type='radio' name='id_elimina' value='$id' required> $titolo <br>";}
    echo "<input type='submit' name='btn_elimina' value='Rimuovi'>";
   echo "</form>";

   
   echo "<h4> Rimuovi utente </h4>";
   $sql = "SELECT username FROM utenti ORDER BY username";
   $ris = mysqli_query($conn, $sql);

   echo "<form method='POST' action='admin.php'>";
   foreach ($ris as $row) {
    $u = $row["username"];

    echo "<input type='radio' name='username_elimina' value='$u' required> $u <br>"; }
echo "<input type='submit' name='btn_elimina_utente' value='Rimuovi'>";
   echo "</form>";
   

   echo "<h4> Modifica un viaggio </h4>";

$sql = "SELECT id, titolo FROM viaggi ORDER BY titolo";
$ris = mysqli_query($conn, $sql);
echo "<form method='POST' action='admin.php'>";
foreach ($ris as $row)
    {$idv = $row["id"];
$tit = $row["titolo"];
echo "<input type='radio' name='id_scelto' value='$idv' required> $tit <br>";}
echo "<input type='submit' name='btn_scegli' value='Modifica'>";
echo "</form>";



if (isset($_POST["btn_scegli"]))
    { $id = $_POST["id_scelto"];
$sql = "SELECT titolo, tipo, prezzo, descrizione FROM viaggi WHERE id=$id";
$ris = mysqli_query($conn, $sql);
$v = mysqli_fetch_assoc($ris);

echo "<form method='POST' action='admin.php'>";
echo "<input type='hidden' name='id_mod' value='$id'>";
echo "Titolo: <input type='text' name='titolo_mod' value='".$v["titolo"]."'><br>";
echo "Tipo: <input type='text' name='tipo_mod' value='".$v["tipo"]."'><br>";
echo "Prezzo: <input type='text' name='prezzo_mod' value='".$v["prezzo"]."'><br>";
echo "Descrizione: <textarea name='descrizione_mod'>".$v["descrizione"]."</textarea><br>";

echo "<input type='submit' name='btn_aggiorna' value='Salva'>";
echo "</form>";
};

?>



</body>
</html>

