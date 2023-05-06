<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/stylesHome.css">
    <title>Document</title>
</head>
<body>
    
<div >
    <div class="header">
        <img class="logo_image" src="images/logo.png" alt="logo company">
    <h1>Bienvenido de vuelta</h1>
    </div>

    <div class="container">
        <img src="images\backgroundHome.jpg" alt="">

        <div class="file_selector">
    
</div>

<div class="files">
<h3>Lista de archivos almacenados</h3>
    <div class="inner_files">
<?php
    $files=scandir("uploads");
    for($i=2;$i<count($files);$i++)
    {
        ?>
        <div class="doc_names"> 
            <h4>Nombre del archivo:</h4>
            <h5>
           <?php echo $files[$i];?></div>
            <div>
            <a href="uploads/<?php echo $files[$i];?>" download="<?php echo $files[$i]?>">
            Descargar
        </a>
        </div>
        <div class="delete">
        <a>
    </a>
    </div>
    </h4>
        <?php
    }
    ?>
    </div>
</div>
<div class="goBack">
<form action="index.php" method="POST">
    <input class="go_back_submit" type="submit" value="Volver">
</form>
</div>
</div>

</body>
</html>
