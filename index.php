<?php
  include("conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/CENT(2).png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Centro de Capacitacion en Electronica Nikola Tesla</title>
    
</head>
<body>
<!-- Boton whats -->
<link rel="stylesheet" href="whats.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

 <link rel="stylesheet" href="whats2.css">
<div class="nav-bottom">
           <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
            <div class="popup-whatsapp fadeIn">
                <div class="content-whatsapp -top"><button type="button" class="closePopup">
                      <i class="material-icons icon-font-color">close</i>
                    </button> 
                  
                   <p>  <img src="secretary.png" width="50">  Hola, ¿en que podemos ayudarle? </p>
                   
                </div>
                <div class="content-whatsapp -bottom">
                  <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />
                   
                   
                  
          
                    <button class="send-msPopup" id="send-btn" type="button">
                        <i class="material-icons icon-font-color--black">send</i>
                    </button>

                </div>
            </div>
            <button type="button" id="whats-openPopup" class="whatsapp-button">
                <div class="float" >
  <i class="fa fa-whatsapp my-float"></i></div>
            </button>
            <div class="circle-anime"></div>
        </div>

        
        <script  src="script2.js"></script>


        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<!-- ----------------------------------------------------- -->
    <header class="navegacion" id="navegacion">
        <a href="index.php""><img src="img/CENT(1).png" alt="" id="home"></a>
        <ul class="botones_nav">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#nosotros" id="boton_nosotros">Nosotros</a></li>
            <li><a href="#cursos">Cursos</a></li>
            <li><a href="#visitanos">Visítanos</a></li>
            <li><a href="materiales.php">Materiales</a></li>
            <li><a href="servicios.html">Servicios</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </header>
    

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        
      
        <!-- Wrapper for slides -->
        <div id="img" class="carousel-inner">
        <?php
          $query = "SELECT * FROM galeria WHERE id_imagen = 8;";
          $sel = mysqli_query($con,$query);
          while ($row = mysqli_fetch_assoc($sel)) {
            
          
        ?>

          <div class="item active">
            <a href="noticiasUS.php"><img  src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>" alt="Los Angeles"></a>
          </div>

        <?php
          }
        ?>

<?php
          $query = "SELECT * FROM galeria WHERE id_imagen = 9;";
          $sel = mysqli_query($con,$query);
          while ($row = mysqli_fetch_assoc($sel)) {
            
          
        ?>
      
          <div class="item">
            <a href="noticiasUS.php"><img  src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>" alt="Chicago">
          </a>
          </div>

          <?php
          }
        ?>

<?php
          $query = "SELECT * FROM galeria WHERE id_imagen = 10;";
          $sel = mysqli_query($con,$query);
          while ($row = mysqli_fetch_assoc($sel)) {
            
          
        ?>
      
          <div class="item active">
            <a href="noticiasUS.php"><img  src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>" alt="New York">
          </a>
          </div>
        </div>

        <?php
          }
        ?>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="collage">
      </div>
      <div class="nosotros" id="nosotros">
        <div class="nosotros_texto"  >
          <h2 >¿Quiénes somos?</h2>
          <p>El Centro de Capacitación en Electrónica Nikola Tesla (CCENT) surge en febrero de 2012, como un esfuerzo pionero para poner al alcance de todos los michoacanos la adquisición de capacidades técnicas en las diversas áreas de la electrónica.</p>
          
            <a class="nosotros_boton" href="nosotros.html">Leer Mas</a>
          
          
        </div>
        <img src="img/carrusel/Proyecto nuevo.webp" alt="" >
      </div>
      <div class="cursos" id="cursos">
        
          <h2 >Cursos</h2>
        <div class="cursos_curso">
          <div class="cursos_menu">
            <p href="" id="auto" onclick="cambiar(1)">Automotriz</p>
            <p href="" id="laptop" onclick="cambiar(2)">Laptop y Pc</>
            <p href="" id="analog" onclick="cambiar(3)">Analógica Digital</p>
            <p href="" id="audio" onclick="cambiar(4)">Audio y video</p>
            <p href="" id="robo" onclick="cambiar(5)">Robótica</p>
          </div>
          <div class="cursos_texto" id="text">
            <div class="imagen_curso">
              <img id="imagen" src="img/mecanica.webp" alt="">
            </div>
            <div class="cursos_info">
              <p id="curso_texto">En este curso de mecánica automotriz aprenderás a comprender la estructura de un automóvil, los diversos problemas que pueden surgir y cómo solucionarlos, analizando las diversas herramientas utilizadas. </p>
              
                <a id="leermas" class="cursos_boton" href="cursos.html" >Leer Mas</a>
              
            </div>
          </div>
        </div>
      </div>
      
      <h2 id="visitanos">Visítanos</h2>
      
      <div class="visitanos">
        
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5013.73831609046!2d-101.22837632730501!3d19.71007692151299!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3c670c2f72547514!2sEscuela%20De%20Electr%C3%B3nica%20CCENT!5e0!3m2!1ses!2smx!4v1667410200260!5m2!1ses!2smx" width="1300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      
      <div class="v">
      <iframe width="853" height="480" src="https://www.youtube.com/embed/s2zGcL04RTE?autoplay=1&loop=1" title="SOMOS CCENT | Conoce nuestros planteles" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <ul class="galeria">
        <?php 
          $query = "SELECT * FROM galeria_inicio WHERE id_foto = 1;";
          $sel = mysqli_query($con, $query);
          while($row = mysqli_fetch_assoc($sel)){

             

        ?>
        <li><a href="" onclick="img(); return false;"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>"></a></li>
        <?php
          } ;
        ?>

        <?php 
          $query = "SELECT * FROM galeria_inicio WHERE id_foto = 2;";
          $sel = mysqli_query($con, $query);
          while($row = mysqli_fetch_assoc($sel)){

             

        ?>
        <li><a href="" onclick="img2(); return false;"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>"></a></li>
        <?php
          } ;
        ?>

        <?php 
          $query = "SELECT * FROM galeria_inicio WHERE id_foto = 3;";
          $sel = mysqli_query($con, $query);
          while($row = mysqli_fetch_assoc($sel)){

             

        ?>
        <li><a href="" onclick="img3(); return false;"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>"></a></li>
        <?php
          } ;
        ?>

        <?php 
          $query = "SELECT * FROM galeria_inicio WHERE id_foto = 4;";
          $sel = mysqli_query($con, $query);
          while($row = mysqli_fetch_assoc($sel)){

             

        ?>
        <li><a href="" onclick="img4(); return false;"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>"></a></li>
        <?php
          } ;
        ?>
      </ul>

      <?php 
          $query = "SELECT * FROM galeria_inicio WHERE id_foto = 1;";
          $sel = mysqli_query($con, $query);
          while($row = mysqli_fetch_assoc($sel)){

             

        ?>

      <div style="position: absolute; top: -100%;" id="img1">
        <h3 class="texto_galeria"><?php echo $row['nombre'] ?></h3>
        <div class="imagen">
          <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>" alt="">
        </div>
        <a class="cerrar" onclick="cerrar(); return false;" href="">X</a>
      </div>
      <?php
          } ;
        ?>

<?php 
          $query = "SELECT * FROM galeria_inicio WHERE id_foto = 2;";
          $sel = mysqli_query($con, $query);
          while($row = mysqli_fetch_assoc($sel)){

             

        ?>
      <div style="position: absolute; top: -100%;" id="img2">
        <h3 class="texto_galeria"><?php echo $row['nombre'] ?></h3>
        <div class="imagen">
          <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>" alt="">
        </div>
        <a class="cerrar" onclick="cerrar2(); return false;" href="">X</a>
      </div>

      <?php
          } ;
        ?>

<?php 
          $query = "SELECT * FROM galeria_inicio WHERE id_foto = 3;";
          $sel = mysqli_query($con, $query);
          while($row = mysqli_fetch_assoc($sel)){

             

        ?>
      <div style="position: absolute; top: -100%;" id="img3">
        <h3 class="texto_galeria"><?php echo $row['nombre'] ?></h3>
        <div class="imagen">
          <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>" alt="">
        </div>
        <a class="cerrar" onclick="cerrar3(); return false;" href="">X</a>
      </div>

      <?php
          } ;
        ?>


      <?php 
          $query = "SELECT * FROM galeria_inicio WHERE id_foto = 4;";
          $sel = mysqli_query($con, $query);
          while($row = mysqli_fetch_assoc($sel)){

             

        ?>

      <div style="position: absolute; top: -100%;" id="img4">
        <h3 class="texto_galeria"><?php echo $row['nombre'] ?></h3>
        <div class="imagen">
          <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>" alt="">
        
        </div>
        <a class="cerrar" onclick="cerrar4(); return false;"  href="">X</a>
      </div>

      <?php
          } ;
        ?>

      

      <!-- <div class="redes">
        <h2>Visita nuestra pagina de Facebook</h2>
        <iframe id="frame" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fccent.escuelaelectronica&tabs=timeline&width=500&height=100&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=839479099739050" width="500" height="100" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      </div> -->
      
      <div class="contactanos">
        <h2 class="cn" id="contacto">Contacto</h2>
        <form action="" class="formulario">
          <input type="text" class="form" name="" id="Nombre" placeholder="Nombre">
          <input type="text" class="form" name="" id="Telefono" placeholder="Telefono">
          <input type="text" class="form" name="" id="Correo" placeholder="Correo Electrónico">
          <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
          <button class="btnenviar">Enviar</button>
        </form>
        </div>
        

        <!-- footer-->
        <div class="cinto">
        </div>
        <div class="fotter">
          <div class="fotter-inter">
            <div style="padding-right: 30px; border-right: 2px white solid;" class="fotter-contend" >
              <h3>Dirección</h3>
              <p>C. Juan Guillermo Villasana 131, Jardines de Guadalupe, 58140 Morelia, Mich</p>
            </div>
              <!--  -->
            <div class="fotter-contend" style="border-right: 2px white solid;">
              <h3>Telefonos</h3>
                <p>4431722172</p>
              <h3>Correo</h3>
              <p>ccent_2012@hotmail.com</p>
            </div>
              <!--  -->
            <div class="fotter-contend">
              <div class="fotter-redes">
                <a href="https://www.facebook.com/ccent.escuelaelectronica">
                  <img src="img/facebook.png" alt="Facebook" id="facebook">
                </a>
                <a href="https://wa.me/5214431722172">
                  <img src="img/Redes/WhatsApp.png" alt="WhatsApp">
                </a>
                <a href="#">
                  <img src="img/Redes/Instagram.png" alt="Instagram">
                </a>
              </div>
            </div>
          </div>
          <p style="padding-bottom: 10px;">@ Todos los derechos reservados 2022</p>
        </div>
        <button class="btn-scrolltop" id="btn_scrolltop">
          <i class="fas fa-chevron-up"></i>
        </button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {
    
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();
    
          // Store hash
          var hash = this.hash;
    
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
    
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });     
  </script>  

<script>
    const btn_scrolltop = document.getElementById("btn_scrolltop")
      btn_scrolltop.addEventListener('click', () => {
        window.scrollTo(0, 0)
      })

    window.onscroll = () => {
      add_btn_scrolltop()
    }

    const add_btn_scrolltop = () => {
      if (window.scrollY < 300) {
        btn_scrolltop.classList.remove("btn-scrolltop-on")
      } else {
        btn_scrolltop.classList.add("btn-scrolltop-on")
      }
    }

  </script>
</body>
<script src="js/script.js"></script>

</html>