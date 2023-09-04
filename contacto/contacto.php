<?php 
 include_once("bd.php");
 $email = $_POST['email'];
 $telefono = $_POST['telefono'];
 $comentario = $_POST['comentarios'];
 if (isset($email) && isset($telefono) && isset($comentario)) {
    /*
    echo $email . "<br>";
    echo $telefono . "<br>";
    echo $comentario . "<br>";
    */
    insertarDatos($conn,$email,$telefono,$comentario);
    mysqli_close($conn); 
}else{
    echo "Los campos estan vacios";
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>