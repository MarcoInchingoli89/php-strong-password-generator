<?php

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
        //Inseriamo nel nostro array i caratteri in base ad un indice casuale da noi generato
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