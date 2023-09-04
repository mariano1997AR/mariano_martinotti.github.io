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
    header("Location: http://localhost/cv_page/contacto/contacto.html");
    mysqli_close($conn); 
}else{
    echo "Los campos estan vacios";
 }


?>
