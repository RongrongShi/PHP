<?php

session_start();
$users = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
]

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <style>
        div.error{
            color:red;
        }
    </style>
</head>
<body>


<?php if (!isset($_POST['knop'])) { ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=”post”>
    Naam: <input type ="text" name="mailadres" placeholder = "mailadres"><br>
    Wachtwoord: <input type = "password" name= "wachtwoord" placeholder = "wachtwoord">
<input type="submit" name="knop" value="VERSTUUR">

</form>
<?php

if(isset($_SESSION['error']) AND !empty($_SESSION['error'])){
    echo '<div class = "error">' . $_SESSION['error'] . "</div>";
    $_SESSION['error'] = null;
}

?>


<?php
}else{
    if (!isset($_POST['mailadres']) OR empty($_POST['mailadres'])){
        $_SESSION['error'] = "Je bent vergetne je mailadres in te vullen.";
        header("LOCATION". $_SERVER['PHP_SELF']);
    }
    if(!isset($_POST['wachtwoord']) OR empty($_POST['wachtwoord'])){
        $_SESSION['error'] = "Je bent vergetne je wachtwoord in te vullen.";
        header("LOCATION:" . $_SERVER['PHP_SELF']);
    }
    $mailadres = $_POST['mailadres'];
    $wachtwoord = $_POST['wachtwoord'];

    foreach ($users as $key => $value){
        if ($key == $mailadres AND $value == $wachtwoord){
            exit("Welkom!");
        }
    }exit("Sry, geen toegaan.");
}
?>
</body>


<html>