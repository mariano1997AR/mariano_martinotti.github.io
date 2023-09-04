<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactos";

$conn = mysqli_connect($servername,$username,$password,$dbname);

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




//echo "Connected successfully";


?>