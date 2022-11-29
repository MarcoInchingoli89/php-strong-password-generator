<?php
// Milestone 1
// Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
// Milestone 2
// Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

//Lunghezza caratteri password
$passwordLenght = $_GET['charactersNumber'];
/* echo $passwordLenght; */

//Funzione per generare la password
function generatePassword($numb)
{
    //Elenco caratteri
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890?!$£%&*#@';
    //Dichiariamo la password in uscita come un array
    $password = array();
    //Definiamo la lunghezza dei caratteri disponibili
    $charactersLenght = strlen($characters);
    /* var_dump($charactersLenght); */
    //Cicliamo tot di volte in base al numero dato dall'utente
    for ($i = 0; $i < $numb; $i++) {
        //Generiamo un numero casuale che andrà da 0 al numero massimo di caratteri
        $n = rand(0, $charactersLenght);
        /* var_dump($n); */
        //Inseriamo nel nostro array i caratteri in base ad un indice casuale
        $password[] = $characters[$n];
        /* var_dump($password); */
    }
    //Trasformiamo la password generata in una stringa
    return implode($password);
}

//Password generata
$passwordGenerated = generatePassword($passwordLenght);
/* var_dump($passwordGenerated); */
echo 'Ecco la tua password: ' . $passwordGenerated;


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
    <h1>Password Generator</h1>
    <form action="index.php" method="get">
        <div>
            <label for="charactersNumber">Lunghezza caratteri password:</label>
            <input name="charactersNumber" id="charactersNumber" type="number" placeholder="Inserisci un numero">
        </div>
        <button type="submit">Genera password</button>
    </form>
</body>

</html>