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
  if($_POST["dier"] == "dier1"){
    echo '<img src="../dierImg/dier1.jfif">';
  }else if($_POST["dier"] == "dier2"){
    echo '<img src="../dierImg/dier2.jfif">';
  }else if($_POST["dier"] == "dier3"){
    echo '<img src="../dierImg/dier3.jfif">';
  }else if($_POST["dier"] == "dier4"){
    echo '<img src="../dierImg/dier4.jfif">';
  }
  ?>
</body>
</html>