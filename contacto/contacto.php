<?php 
 $servername = "localhost";
 $username = "root";
 $dbname = "contactos";
 
 $conn = mysqli_connect($servername,$username,$dbname);
 
 //chequear la conexion
 function errorConexion($conn){
     if(!$conn){
         die("Connection failed: " . mysqli_connect_error());
     }    
 }
 function insertarDatos($conn,$email,$telefono,$comentario){
   $sql = "INSERT INTO contacto (email,telefono,comentarios)
   VALUES ('$email','$telefono','$comentario')";
   if(mysqli_query($conn,$sql)){
       echo "";
   }else{
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
 }
 
 errorConexion($conn);
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
}else{
    echo "Los campos estan vacios";
 }

 mysqli_close($conn); 
?>
