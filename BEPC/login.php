<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/stylesLogin.css">
    <title>Document</title>
</head>
<body>
<img class="logo_image" src="images/logo.png" alt="logo company">
<?php 
if(!empty($_POST['nickname']) && !empty($_POST['password'])){
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    if($nickname == "jesus@bepcadmin.com" && $password == "12345" ){
        header("location: home.php");
    }if($nickname == "jesus@bepc.com" && $password == "54321"){
        header("location: home2.php");
    }else{
        echo "<h3>Usuario o Contraseña Incorrectos</h3>";
    }
}else {
    echo "<h3>Falta informacion, intente de nuevo!</h3>";
}


?>

<form action="index.php" method="POST">
    <input class="goBack" type="submit" value="Volver">
</form>
</body>
</html>

