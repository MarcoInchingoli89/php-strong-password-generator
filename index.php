<?php

require __DIR__ . '/functions.php';

// Milestone 1
// Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
// Milestone 2
// Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <h1>Strong Password Generator</h1>
    <form action="index.php" method="get">
        <div>
            <label for="charactersNumber">Lunghezza caratteri password:</label>
            <input name="charactersNumber" id="charactersNumber" type="number" placeholder="Inserisci un numero">
        </div>
        <button type="submit">Genera password</button>
    </form>
</body>

</html>