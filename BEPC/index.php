<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Login</title>
   
</head>
<body>
    
    
    <div class="form_container">
    <img class="logo_image" src="images/logo.png" alt="logo company">
    <h2>Login:</h2>
    <form class="login_container" action="login.php" method="POST">
        <div class="login">
        <div><label for="nickname">Usuario</label>
        <input class="input" type="text" name="nickname">
        </div>
        <div>
        <label for="password">Contraseña</label>
        <input class="input" type="text" name="password">
        </div>
       
       <div>
       <input class="button" type="submit" value="Ingresar">
       </div>

       </div>

       
    </form>
    </div>
    
    <div class="header">
   
    </div>
   
    
</body>
</html>