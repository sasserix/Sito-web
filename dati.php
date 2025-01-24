<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $cognome = htmlspecialchars($_POST['cognome']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $messaggio = htmlspecialchars($_POST['messaggio']);

    // Invia una mail
    $to = "tuoemail@example.com";
    $subject = "Nuovo messaggio da $nome $cognome";
    $message = "Email: $email\nTelefono: $telefono\nMessaggio:\n$messaggio";
    $headers = "From: noreply@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Messaggio inviato con successo!";
    } else {
        echo "Errore nell'invio del messaggio.";
    }
} else {
    echo "Accesso non autorizzato.";
}
?>
