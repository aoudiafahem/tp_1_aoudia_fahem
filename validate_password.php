<!DOCTYPE html>
<html>
<head>
    <title>Page de traitement du mot de passe</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    if (strlen($password) < 6 || strlen($password) > 10) {
        die("Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.");
    } else {
       
        $salt = "ABC1234@";

        $saltedPassword = $password . $salt;
        $hashedPassword = sha1($saltedPassword);

        echo "<h1>Page de traitement du mot de passe</h1>";
        echo "Salt : $salt<br>";
        echo "Mot de passe chiffré : $hashedPassword";
    }
}
?>
</body>
</html>
 