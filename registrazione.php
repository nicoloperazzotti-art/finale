<?php
session_start();
require "util.php";
$conn = connetti();

$messaggio = "";
$errore = "";

if (isset($_POST["invia"]))
   { $nome     = $_POST["nome"];
     $cognome  = $_POST["cognome"];
     $username = $_POST["username"];
     $email    = $_POST["email"];
     $password = $_POST["password"];

     // controllo se lo username e' gia' usato
     $sql = "SELECT username FROM utenti WHERE username='$username'";
     $ris = mysqli_query($conn, $sql);
     $occupato = mysqli_num_rows($ris);

     if ($nome == "" || $cognome == "" || $username == "" || $email == "" || $password == "")
        { $errore = "Compila tutti i campi"; }
     elseif (strlen($password) < 8)
        { $errore = "La password deve avere almeno 8 caratteri"; }
     elseif ($occupato > 0)
        { $errore = "L'username e' gia' preso"; }
     else
        { $sql = "INSERT INTO utenti (username, password, email, nome, cognome)
                  VALUES ('$username', '$password', '$email', '$nome', '$cognome')";
          $a = mysqli_query($conn, $sql);
          if ($a) { $messaggio = "Registrazione effettuata con successo"; }
             else { $errore = "Impossibile effettuare la registrazione"; };
        };
   };
?>
<!DOCTYPE html>
<html lang="IT">
<head>
  <meta charset="UTF-8">
  <title> Registrazione - Human Safari </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php navigazione(); ?>

<section>

  <h2> Registrati </h2>

  <?php if ($messaggio != "") { echo "<p>".$messaggio."</p>"; }; ?>
  <?php if ($errore != "")    { echo "<p>".$errore."</p>";    }; ?>

  <form method="POST" action="registrazione.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="cognome">Cognome:</label>
    <input type="text" id="cognome" name="cognome" required>

    <button type="submit" name="invia"> Invia </button>
  </form>

  <?php echo "Se sei gia' registrato, <a href='login.php'>vai al login</a>"; ?>

</section>

<?php pieDiPagina(); ?>

</body>
</html>