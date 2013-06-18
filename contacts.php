<?php 
  if (isset($_POST["form_enviado"])) { // if page is not submitted to itself echo the form
     if ( $_POST["nombre"] != "" & $_POST["email"] != "" & $_POST["mensaje"] != "") {


          $nombre = $_POST['nombre'];
          $email = $_POST['email'];
          $mensaje = $_POST['mensaje'];


          $para = 'elhosteldechascomus@gmail.com';
          $titulo = 'Consulta HostelChascomus: $nombre';
          $header = 'From: ' . $email;
          $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

          //Preparamos el mensaje de contacto
          $cabeceras = "From: $email\n" //La persona que envia el correo
           . "Reply-To: $email\n";
          $asunto = "Mensaje desde la pagina Web Hostel Chascomús"; //asunto aparecera en la bandeja del servidor de correo
          $email_to = "<elhosteldechascomus@gmail.com>"; //cambiar por tu email
          $contenido = "$nombre ha enviado un mensaje desde la web www.elhosteldechascomus.com.ar\n"
          . "\n"
          . "Nombre: $nombre\n"
          . "Email: $email\n"
          . "Mensaje: $mensaje\n"
          . "\n";
         
          //Enviamos el mensaje y comprobamos el resultado
          if (mail($email_to, $asunto ,$contenido ,$cabeceras )) {
            //Si el mensaje se envía muestra una confirmación
            $enviado = true;
            $mensaje = "Gracias, su mensaje se envio correctamente."; 
           
          }else{ 
            $errorenvio = true;
            $mensaje ="Error: Su información no pudo ser enviada, intente más tarde";
          }

       } else {
          $errorcampos = true;
          $mensaje ="Error: Debe completar todos los campos";
      }     
} else {
    $mensaje ="";
    $enviado = false;
    $errorenvio = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacto</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/googlemap.js"></script> 
    <script src="js/jquery.easing.1.3.js"></script>
  <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5.js"></script>
      <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
  <![endif]-->
</head>
<body>
  <!--==============================header=================================-->
  <div class="header">
    <div>

         <div id="index">
        <!--     <h1><a href="index.html"><img src="images/LogoOrig.png" alt=""></a></h1> -->
        </div>

        <div class="subpages-nav">
            <nav> 

                <ul class="menu">

                    <li class="li-left"><a href="index.html">Inicio</a></li>
                    <li><a href="about.html">Quienes somos?</a></li>
                    <li><a href="portfolio.html">Galeria</a></li>
                    <li><a href="services.html">Servicios</a></li>
                    <li><a href="habitaciones.html">Habitaciones</a></li>
                    <li class="current"><a href="contacts.php">Contacto</a></li>

                </ul>
            </nav>
        </div>
    </div>
  </div>   
<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <?php if ($enviado) { ?>
                      <div class="sendok">
                        <p style="color:white"><?php echo $mensaje; ?></p>
                      </div>
    <? } elseif ($errorenvio || $errorcampos) { ?>
                      <div class="senderror">
                        <p><?php echo $mensaje; ?></p>
                      </div>
    <? } ?>
      <div class="pad-1">
            <div class="page6-row1">
                
                <div class="col-4">
                    <h2 class="h2 p2">Formulario Contacto</h2>
                    <form id="form" method="post" action="contacts.php">
                      <fieldset>
                        <label><input type="text" name="nombre" placeholder="Nombre" required></label>
                        <label><input type="email" name="email" placeholder="Email" required></label>
                        <label><textarea name="mensaje" placeholder="Mensaje" required></textarea></label>
                        <input type="hidden" id="form_enviado" name="form_enviado" value="">
                        <div class="btns">
                          <a href="#" class="link-1">Borrar</a>
                          <a href="#" class="link-1" onClick="document.getElementById('form').submit();document.getElementById('form_enviado').value ='true' ">Enviar</a>
                        </div>
                      </fieldset>  
                    </form> 
                    <dl>
                     <div class="soc-icons">
                        <!-- <a href="#"><img src="images/icon-1.png" alt=""></a>
                        <a href="#"><img src="images/icon-2.png" alt=""></a>
                        <a href="#"><img src="images/icon-3.png" alt=""></a> -->

                        <!-- Follow Facebook -->

              <!--           <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                        <div class="fb-follow" data-href="https://www.facebook.com/Hostel-Chascomus" data-show-faces="true" data-font="arial" data-width="450"></div> -->
                   

                                <!-- Follow Facebook  -->

                                <!-- Like Facebook 
                                 <div id="fb-root"></div>
                                 <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
                                    fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>

                                    <div class="fb-like-box" data-href="https://www.facebook.com/HostelChascomus" data-width="292" data-show-faces="true" data-stream="false" data-show-border="true" data-header="true"></div>
                                 Like Facebook -->
                   </div> 
                  </dl>
               
                </div>
                <div class="col-5">
                  <h2 class="h2">Contacto</h2>
                    <dl>
                      <dt class="clr-1"><strong >Buenos Aires, Argentina</strong><br>Mazzini 225, Chascomús</dt>
                        <dd><span>Movil:</span>+54-02241-15 569-698</dd>
                        <dd class="p3"><span>Email:</span><a href="#" class="link">elhosteldechascomus@gmail.com</a></dd>
                    </dl>
                   <h2 class="h2 p2">Localización</h2>
                      <div class="map img-border">
                    
                        <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Mazzini+225,+Chascom%C3%BAs,+Buenos+Aires,+Argentina&amp;aq=0&amp;oq=mazzini+225&amp;sll=37.0625,-95.677068&amp;sspn=38.554089,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Mazzini+225,+Chascom%C3%BAs,+Buenos+Aires,+Argentina&amp;ll=-35.571956,-58.014991&amp;spn=0.004843,0.010568&amp;t=m&amp;z=15&amp;output=embed"></iframe><br />
                        <br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Mazzini+225,+Chascom%C3%BAs,+Buenos+Aires,+Argentina&amp;aq=0&amp;oq=mazzini+225&amp;sll=37.0625,-95.677068&amp;sspn=38.554089,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Mazzini+225,+Chascom%C3%BAs,+Buenos+Aires,+Argentina&amp;ll=-35.571956,-58.014991&amp;spn=0.004843,0.010568&amp;t=m&amp;z=14" style="color:#f1814a;text-align:left">Ver mapa más grande</a></small>
                        
                      </div> 
                </div>
            </div>
        </div>           
    </section> 
<!--==============================footer=================================-->
    <footer>      
            <p><strong>© 2013 DeC@r - Web Site Design</strong> </p>
            <p><strong> contacto@decar.com.ar</strong></p> 
    </footer>             
</body>
</html>

