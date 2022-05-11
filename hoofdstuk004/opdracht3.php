<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $woord = "abc";
  $omdraaiWoord = "";

  woordOmdraai($woord, $omdraaiWoord);

  function woordOmdraai($woord, $omdraaiWoord){
    for($i = 1; $i <= strlen($woord);$i++){
      $temp = substr($woord, -$i, 1);
      $omdraaiWoord .= $temp;
    } 
    echo($omdraaiWoord);
  };
  ?>
</body>
</html>