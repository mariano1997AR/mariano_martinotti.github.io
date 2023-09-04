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
    insertarDatos($conn,$email,$telefono,$comentario);
}else{
    echo "Los campos estan vacios";
 }

 mysqli_close($conn); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Mariano andres Martinotti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/logo_martinotti.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/contacto.css">
</head>
<body>
    <div class="container mt-3">
        <div class="mt-5 p-5 bg-dark text-white rounded"> 
            <h2>Vamos a direccionar la pagina...</h2>
            <p>Recibi su mensaje a la brevedad le estare respondiendo....</p>
        </div>
      </div>

    <!-- BOOSTRAPS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- REDIRECCIONAMOS -->
    <script src="../js/redireccionar.js"></script>
</body>
</html>
