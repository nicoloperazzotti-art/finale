<?php
session_start();
require "util.php";
if (!isset($_SESSION["username"])) { header("location:login.php"); };

$messaggio = "";
$errore = "";
$u = $_SESSION["username"];
$conn = connetti();

if (isset($_POST["btn_cambia_pwd"]))
   { $nuova = $_POST["nuova_pwd"];
     if (strlen($nuova) < 8)
        { $errore = "La password deve avere almeno 8 caratteri"; }
        else
        { $sql = "UPDATE utenti SET password='$nuova' WHERE username='$u'";
          $ok = mysqli_query($conn, $sql);
          if ($ok) { $messaggio = "Password cambiata con successo"; }
             else  { $errore = "Errore durante il cambio password"; };
        };
   };

$sql = "SELECT nome, cognome, email, username FROM utenti WHERE username='$u'";
$ris = mysqli_query($conn, $sql);
$dati = mysqli_fetch_assoc($ris);
?>
<!DOCTYPE html>
<html lang="IT">
<head>
    <meta charset="UTF-8">
    <title>Il mio Profilo – Human Safari</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php navigazione(); ?>

<section>

    <h2>Profilo di <?php echo $dati["username"]; ?></h2>

    <ul>
        <li><b>Nome:</b>     <?php echo $dati["nome"];     ?></li>
        <li><b>Cognome:</b>  <?php echo $dati["cognome"];  ?></li>
        <li><b>Email:</b>    <?php echo $dati["email"];    ?></li>
        <li><b>Username:</b> <?php echo $dati["username"]; ?></li>
    </ul>

    <hr>

    <h3>Cambia la tua Password</h3>

    <?php if ($messaggio != "") { echo "<p>".$messaggio."</p>"; }; ?>
    <?php if ($errore != "")    { echo "<p>".$errore."</p>";    }; ?>

    <form method="POST" action="profilo.php">
        <input type="password" name="nuova_pwd" placeholder="Nuova password (min. 8 caratteri)" required>
        <br><br>
        <input type="submit" name="btn_cambia_pwd" value="Aggiorna Password">
    </form>

</section>

<?php pieDiPagina(); ?>

</body>
</html>