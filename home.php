<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>SALVACIÓN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
    if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { 
    ?>
        <img src="https://i.pinimg.com/736x/9e/90/13/9e90133ce312ed7d960ca1c14a07f6a1.jpg" alt="Descripción de la imagen">
        <a href="logout.php" style="color: white;">Lamento decirte que para los parciales de Adrian no existen chivos, mejor vuelve el proximo cuatrimestre</a>
    <?php 
    } else { 
        header("Location: index.php");
        exit();
    } 
    ?>
</body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>