<?php 
$bdd = new PDO("mysql:host=localhost;dbname=chatbox;charset=utf8","root");
// query pour tout récupérer au lieu de prepare (prepare on pourrait rajouter WHERE etc)
$recupMessage = $bdd->query('SELECT * FROM messages');
while($message = $recupMessage->fetch()) {
    ?>
    <div class="message">
        <h3><?= $message['pseudo'];?></h3>
        <p><?= $message['message'];?></p>
    </div>
    <?php
} 

?>
