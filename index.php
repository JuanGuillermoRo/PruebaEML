<?php

//conectarse con MySQL

$conn = mysqli_connect('localhost', 'root','','formularioeml');

if($conn->connect_error) die("sin conexion");
else {
    print("conexion extablecida");
}// en esta lineas de código verifico que siempre haya valores por eso las el uso del metodo strlen
if (isset($_POST['registro'])) {
    if(strlen($_POST['Nombre']) >= 1 && strlen($_POST['Correo']) >= 1 && strlen($_POST['Telefono'])>= 1 && strlen($_POST['Mensaje']) >=1 ) {
        $Nombre = trim($_POST['Nombre']);
        $Correo = trim($_POST['Correo']);
        $Telefono = trim($_POST['Telefono']);
        $Mensaje = trim($_POST['Mensaje']);
        //variables igualadas para traer las sentencias SQL
        $consulta = "INSERT INTO `forms`(`Nombre`, `Correo`, `Telefono`, `Mensaje`) VALUES ('$Nombre','$Correo','$Telefono','$Mensaje')";//sentencias SQL
        $resultado = mysqli_query($conn,$consulta);

        if($resultado){
            ?>
            <h3>SOLICITUD ENVIADA</h3>
            <?php
        }else{
            ?>
            <h3>UPS DEBES COMPLETAR LOS CAMPOS</h3>
            <?php
        }
   }

}
    

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">

<!--Enlace bootstrap-->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
<!--Hoja de estilos propia-->

<link rel="stylesheet" href="estilos/estilos.css">

<!--Animación con JS-->

<script type="text/javascript" src=""></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>

<body>
  <!--Menu-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="">
            <img src="img/github.png" alt="" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy"> 
                    LOGO
        </a>
        <!--menu para dispositivos moviles-->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#MenuMovil"></button>
        <!--menu para pantallas grandes-->
        <div class="collapse navbar-collapse" id="MenuMovil">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Inicial</a>
                </li>
                <li class="nav-item">
                    <a href="informacion.html" class="nav-link">Información</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contactanos</a>
                </li>
            </ul>
        </div>
    </nav>
            
    <!--Inicial con Carrusel-->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Interiores1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Diseño de Interiores</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et suscipit accusantium iure eum ut voluptas? Assumenda ullam facilis earum aspernatur dignissimos, nihil doloremque molestias eaque saepe maiores numquam omnis ratione.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/Interiores2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Diseño de Interiores</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/Interiores3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Diseño de interiores</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <hr>
    <div id="formulario">
      <style type="text/css">
      form{
        text-align: center;
        margin: auto;
        margin-top: 15px;
        font-family: Arial, Helvetica, sans-serif;
      }
      #titulo{
        padding: 15px;
      }
      .float{
        position:fixed;
	  width:60px;
	  height:60px;
	  bottom:40px;
	  right:40px;
	  background-color:#25d366;
	  color:#FFF;
	  border-radius:50px;
	      text-align:center;
      font-size:30px;
	  box-shadow: 2px 2px 3px #999;
    z-index:100;
}

      .my-float{
	    margin-top:16px;
      }
      

      </style>
    <form action="" method="POST">
    
      <h1 id="titulo">SOLICITA MAS INFORMACIÓN</h1>
      <div class="form-group">
      <label for="ExampleInputName">Nombre y Apellidos</label>
      <input type="text" name="Nombre" placeholder="Nombre y Apellido">
      <small class="form-text text-muted">Esta información no va ser compartida por nadie más</small>
      </div>
      <div class="form-group">
      <label for="ExampleInputEmail">Correo Electrónico</label>
      <input type="email" name="Correo" placeholder="Correo Electrónico">
      <small class="form-text text-muted">Envia un correo electrónico al cual podamos contactarte</small>
      </div>
      <div class="form-group">
      <label for="ExampleInputTelefono">Número Telefonico</label>
      <input type="number" name="Telefono" placeholder="Teléfono de contacto">
      <small class="form-text text-muted">Compartenos un número para llamarte lo mas pronto posible</small>
      </div>
      <div class="form-group">
      <label for="ExampleInputMensaje">Envianos tu Mensaje</label>
      <input type="text" name="Mensaje" placeholder="Ingrese su mensaje aquí">
      <small class="form-text text-muted"></small>
      <input type="submit" name="registro">
    </form>
    </div>

</body>

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

  
  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Miras más información</h5>
    </li>
    <li class="list-inline-item">
      <a href="#!" class="btn btn-danger btn-rounded">Solictar</a>
    </li>
  </ul>
  

  <hr>

  <!-- Social icons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> Juan Guillermo Romero Libreros</a>
  </div>
  <!-- Copyright -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=573016608346&text=Hola,%20Este%20es%20un%20mensaje%20para%20contactarme%20en%20whatsApp" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>



</footer>
<!--Footer-->