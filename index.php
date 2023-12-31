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
 if (isset($_POST['email']) && isset($_POST['telefono']) && isset($_POST['comentarios'])) {
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentarios'];
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
    <!-- METADATOS -->
    <meta name="description" content="Es un portfolio de trabajo, un curriculum vitae, es mi curriculum vitae personal">
    <meta name="keywords" content="cv vitae,mariano andres martinotti,portfolio, argentina, analista programador, curriculum vitae">
    <meta name="author" content="Mariano Andres Martinotti">
    <title>Mariano Andres Martinotti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="././css/main.css">
    <link rel="shortcut icon" href="./img/logo_martinotti.png" type="image/x-icon">
    <link rel="stylesheet" href="././css/form.css">
    <link rel="stylesheet" href="././css/footer.css">
</head>
<body>

    <!-- 
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./img/cv_mariano_martinotti.jpg" alt="foto_cv" style="width:50px;height:60px;" class="rounded-pill">
            </a>
        </div>
    </nav>
    -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="./img/cv_mariano_martinotti.jpg" alt=""
                    style="width: 50px; height:50px; border-radius:50px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#datospersonales"> Datos Personales </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#formacionacademica"> Formacion academica </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#habilidadestecnicas"> Habilidades Tecnicas </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experiencialaboral"> Experiencia Laboral </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto"> Contacto </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <article>
            <!-- Contactos personales-->
            <section>
                <div class="linea"></div>
                <h2 class="centrar cambiar_tamanio" id="datospersonales">Datos Personales</h2>
                <div class="linea"></div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Fecha de Nacimiento:</b> 30 de marzo de 1997</li>
                    <li class="list-group-item"><b>Domicilio:</b> Republica de cuba 484, Quilmes, Buenos Aires,
                        Argentina</li>
                    <li class="list-group-item"><b>Dni:</b> 40290507</li>
                    <li class="list-group-item"><b>Cuil:</b> 20-40290507-8</li>
                </ul>
            </section>
            <!-- Formacion academica -->
            <section>
                <div class="linea"></div>
                <h2 class="centrar cambiar_tamanio" id="formacionacademica">Formacion Academica</h2>
                <div class="linea"></div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>2012-2015</b> | Bachiller en economia y administracion. Escuela de
                        educacion secundaria N°5 "Gral. MARTIN RICO". Rio Salado N°5150, Ezpeleta, Quilmes, Buenos
                        Aires, Argentina-</li>
                    <li class="list-group-item"><b>2023-Actualidad</b> | Licenciado en comercio Internacional.
                        Universidad Nacional de Quilmes, Bernal, Buenos Aires, Argentina</li>
                    <li class="list-group-item"><b>2023-Actualidad</b> | Tecnico Universitario en Programacion.
                        Universidad Nacional de Quilmes, Bernal, Buenos Aires, Argentina</li>
                </ul>
            </section>
            <!-- Habilidades Duras -->
            <section>
                <div class="linea"></div>
                <h2 class="centrar cambiar_tamanio" id="habilidadestecnicas">Habilidades Tecnicas</h2>
                <div class="linea"></div>
                <table class="table table-hover centrar">
                    <thead>
                        <tr>
                            <th>Lenguajes de programacion</th>
                            <th>Nivel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Python</td>
                            <td>Intermedio</td>

                        </tr>
                        <tr>
                            <td>Css</td>
                            <td>Avanzado</td>

                        </tr>
                        <tr>
                            <td>Excel</td>
                            <td>Avanzado</td>
                        </tr>
                        <tr>
                            <td>JavaScript</td>
                            <td>Intermedio</td>
                        </tr>
                        <tr>
                            <td>Git & Github</td>
                            <td>Intermedio</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <!-- Experiencia laboral -->
            <section>
                <div class="linea"></div>
                <h2 class="centrar cambiar_tamanio" id="experiencialaboral">Experiencia Laboral</h2>
                <div class="linea"></div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>2015-2020:</b> Ayudante de albañil, pintor</li>
                    <li class="list-group-item"><b>2020-2021:</b> Empleado de supermercado | Area: Repositor</li>
                    <li class="list-group-item"><b>2021-2022:</b> Vendedor independiente online, articulos de telefonia,
                        electronica</li>
                    <li class="list-group-item"><b>2022-2023:</b> Administrativo de obra | Descripcion:</b> Realiza
                        informes de gastos y egresos
                        de las obras, el control de personal, realizaba consulta a los datos disponibles y
                        realizaba informes de materiales disponibles de obra, para la toma de decisiones.</li>
                </ul>

            </section>
            <!-- Contacto  -->
            <section>
                <div class="contenedor">
                    <div class="linea"></div>
                    <h2 class="centrar cambiar-tamanio" id="contacto">Contacto</h2>
                    <div class="linea"></div>
                    <form action="/index.php" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                                required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="text">Telefono:</label>
                            <input type="text" class="form-control" id="telefono" placeholder="Enter your phone"
                                name="telefono" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="comment">Comentarios:</label>
                            <textarea class="form-control" rows="5" id="comentarios" name="comentarios" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-outline-dark btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
            </section>
        </article>
    </main>
    <footer>
        <div class="linea"></div>
        <h2 class="centrar cambiar_tamanio">Redes Sociales</h2>
        <div class="linea"></div>
        <div id="accordion">
            <div class="card">
                <div class="card-header">
                    <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                        <img src="./img/logo_git.png" alt="red social git">
                    </a>
                </div>
                <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                    <div class="card-body">
                        <a class="ancla_redes" href="https://github.com/mariano1997AR" target="_blank">IR A GITHUB</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                        <img src="./img/logo_linkdln.png" alt="red social linkedln">
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <a class="ancla_redes" href="https://www.linkedin.com/in/mariano-martinotti-53962b156/"
                            target="_blank">IR A LINKEDLN</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                        <img src="./img/logo_gmail.png" alt="red social gmail">
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <p class="centrar"><b>GMAIL:</b> mariano.andres1024@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- 
        <div class="fondo espacios">
            <p class="centrar cambiar_tamanio blanco">Copyright 2023 - Todos los derechos reservados</p>
        </div>-->
        <div class="fondo-footer">
                <div class="transbox">
                     <p class="centrar">Copyright 2023</p>
                </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
