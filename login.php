 <?php
session_start();
require "util.php";


if (isset($_POST["username"]))
   { $user = $_POST["username"];
     $pass = $_POST["password"];

     $conn = connetti();
     $sql = "SELECT password, nome FROM utenti WHERE username='$user'";
     $ris = mysqli_query($conn, $sql);

     if (mysqli_num_rows($ris) == 0)
        { $errore = "Utente non registrato"; }
        else
        { $row = mysqli_fetch_assoc($ris);
          if ($row["password"] == $pass)
             { $_SESSION["username"] = $user;
               header("location:home.php"); }
             else
             { $errore = "Password errata"; };
        };
     mysqli_close($conn);
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

<?php if (isset($errore)) { echo "<p>".$errore."</p>"; }; ?>

<form method="POST" action="login.php">
  Username: <input type="text" name="username"> <br>
  Password: <input type="password" name="password"> <br>
  <input type="submit" value="ACCEDI">
</form>

<?php echo "Non hai un account? <a href='registrazione.php'>Registrati</a>"; ?>

<?php pieDiPagina(); ?>
</body>
</html>