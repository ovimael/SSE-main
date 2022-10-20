<?php

session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
            alert("debes iniciar session");
            window.location = "index.php";
        </script>
        
        ';

        session_destroy();
        die();
            
        
    }
    

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> IMM</title>
        <link rel="stylesheet" href="assets/css/principal.css">
        <script src="https://kit.fontawesome.com/ed54238029.js" crossorigin="anonymous"></script>
    </head>
    
    <body id="body">
        
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
            
        </div>
        
        <h2>INSTITUTO MUNICIPAL DE LA MUJER</h2>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
        
        <i class="fa-solid fa-person-dress"></i>
            
            <h4>BIENVENIDO</h4>
        </div>

        <div class="options__menu">	

            <a href="#" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i> 
                    <a href="principal.php"></a>
                    <h4>Inicio</h4>
                </div>
            </a>
<!--Formulario y registro de los datos del cliente-->
            <a href="#">
                <div class="option">
                
                    <i class="fa-solid fa-address-card" title="Registrar"></i>
                    
                    <a href="registrar.html">Registro</a>
                </div>
            </a>
            

            
            <a href="#" target="secc/servicios.php">
                <div class="option">
                <i class="fa-solid fa-address-book" title="Servicios"></i>
                    <a href="secc/servicios.php">Primer contacto</a>
                </div>
            </a>

            

            <a href="#">
                <div class="option">
                    <i class="far fa-id-badge" title="Contacto"></i>
                    <a href="secc/nosotros.php">Agresor</a>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-address-card" title="Nosotros"></i>
                    <a href="secc/nosotros.php">Reporte</a>
                

                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="fa-sharp fa-solid fa-rectangle-xmark" title="Cerrar sesion" ></i>
                    <a href="php/cerrar_sesion.php">Cerrar sesion</a>
                
                </div>
            </a>

        </div>

    </div>
   

    <main>
    <script src="https://kit.fontawesome.com/af8a124256.js" crossorigin="anonymous"></script>
        <h1><i class="fa-solid fa-house"></i>Aquí encontraras los 4 campos que conforma nuestra aplicación web como son Registrar, Servicios, Contacto y Nosotros </h1><br>
        
        <p><i class="fa-regular fa-address-card"></i>En este campo se iran registrando las personas que llegan a ser violentadas, les pedirán datos como nombre del municipio, cargo o nombre de la responsable de la atención. etc</p> <br>
        
        <p><i class="fa-regular fa-address-book"></i>En este campo nos mostrara los diferentes servicios que brinda el instituto municipal de la mujer como son: trabajó social, asesoría legal y atención psicologíca.</p> <br>
        
        <p><i class="fa-regular fa-id-badge"></i>Este campo solicitará datos del contacto como son: Entidad federativa, municipio de atención, responsable de la atención. entre otros datos</p> <br>
       
        <p><i class="fa-regular fa-circle-user"></i>En este campo solicitará los siguientes datos como son: Grado de estudios, Idioma, Grupo étnico, ocupacion, Parentesco con la persona que sufre violencia por qué la conoce y persona o ínstitucion que canaliza.etc</p> <br>       

        <p><i class="fa-regular fa-circle-xmark"></i>Una vez terminido el registro de la victimaria. esta ventana cierra sesión que dara por finalizado el registro
    </main>


        <h1></h1>
       

        <script src="assets/js/principal.js"></script>
    </body>
</html> 