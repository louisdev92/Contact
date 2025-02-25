<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages reçus</title>
</head>
<body>
<h2>Messages reçus</h2>
<a href="../Brief_contact/contact.php">Retour au formulaire</a>
<br><br>

<?php
if (file_exists("messages.txt")) {
    $messages = file("messages.txt", FILE_IGNORE_NEW_LINES);
    foreach ($messages as $msg) {
        list($nom, $email, $message) = explode(" | ", $msg);
        echo "<p><strong>$nom</strong> ($email) : $message</p><hr>";
    }
} else {
    echo "<p>Aucun message enregistré.</p>";
}
?>
</body>
</html>
