<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST["nom"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if ($nom && $email && $message) {
        $ligne = "$nom | $email | $message\n";
        file_put_contents("messages.txt", $ligne, FILE_APPEND);
        $_SESSION['message_envoye'] = true;
    }

    header("Location: traitement.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
</head>
<body>
<h2>Formulaire de Contact</h2>

<?php if (isset($_SESSION['message_envoye'])): ?>
    <p style="color: green;">Message envoyé avec succès !</p>
    <?php unset($_SESSION['message_envoye']); ?>
<?php endif; ?>

<form action="../Brief_contact/traitement.php" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="message">Message :</label><br>
    <textarea id="message" name="message" rows="5" required></textarea><br><br>

    <button type="submit">Envoyer</button>
</form>

<br>
<a href="../Brief_contact/messages.php">Voir tous les messages</a>
</body>
</html>