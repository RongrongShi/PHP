<?php

validataData (index: 'naam');
validataData (index: 'email');
validataData (index: 'password');

if(!isset($naam) || !isset($email) || !isset($password)){
    exit("Het script is voortijdig gestopt.");
}


/*$naam = $_POST['naam'];
$email = $_POST['email'];
$password = $_POST['password'];*/

echo "Je hebt de volgende gegevens ingevuld:<br>\n";
echo "Naam:{$naam}<br>\n";
echo "E-mail: {$email}<br>\n";
echo "Wachtwoord: {$password}<br>\n";

function validataData($index){
    if(isset($_POST[$index]) && !empty($_POST[$index])){
        $$index = $_POST[$index];
    }else{
        echo "Let op: je hebt geen {$index} ingevuld!";
    }
}

