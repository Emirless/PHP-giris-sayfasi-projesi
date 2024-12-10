<?php 
include("connect.php");

if(isset($_POST["girisyap"]))
{

    $name = $_POST["usrname"];
    $psword = $_POST["psword"];

    $add = "INSERT INTO users (username, password) VALUES ('$name', '$psword')";

    $addword = mysqli_query($connect, $add);

    mysqli_close($connect);
    
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

<form action="login.php" method="POST" style="max-width:500px;margin:auto">
  <h2>Giriş Sayfası</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Kullanıcı adınızı giriniz" name="usrname">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="parolanızı giriniz" name="psword">
  </div>

  <button type="submit" name="girisyap" class="btn">Giriş Yap</button>
</form>

</body>
</html>