<?php 
// se connecter : nouvelle variable bdd
$bdd = new PDO("mysql:host=localhost;dbname=chatbox;charset=utf8","root");
// mysql - host = localhost ou adresse ip si différente ; dbname = nom de ma database, charset puis user+mdp ("root","root" ou rien)
if(isset($_POST['valider'])){
  if(!empty($_POST['pseudo']) AND (!empty($_POST['message']))){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    // nl2br permet saut de lignes BR
    $message = nl2br(htmlspecialchars($_POST["message"]));

    $insererMessage = $bdd->prepare("INSERT INTO messages(pseudo, message) VALUES(?,?)");
    $insererMessage->execute(array($pseudo,$message));
  } else {
    echo "Veuillez compléter tous les champs svp";
  }
  // empêcher que ça renvoie le formulaire au refresh :
  header('Location:index.php');exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Messagerie PHP/MySQL</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form method="POST" action="" align="center">
      <label for="pseudo">Pseudo</label> <br>
      <input type="text" name="pseudo" />
      <br />
      <label for="message">Votre message :</label> <br>
      <textarea name="message" cols="30" rows="10"></textarea>

      <br />
      <input type="submit" name="valider" value="Valider" id="submitMe" />
    </form>
    <section id="messages"></section>

    <script src="script.js"></script>
  </body>
</html>
