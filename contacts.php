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
            <h1><a href="index.html"><img src="images/LogoOrig.png" alt=""></a></h1>
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
    	<div class="pad-1">
            <div class="page6-row1">
            	<div class="col-14">
                    <h2 class="h2">Contacto</h2>
					<dl>
                    	<dt class="clr-1"><strong >Buenos Aires, Argentina</strong><br>Mazzini 225, Chascomús</dt>
                        <dd><span>Movil:</span>+54-02241-15 569-698</dd>
                        <dd class="p3"><span>Email:</span><a href="#" class="link">elhosteldechascomus@gmail.com</a></dd>
                    </dl> 
                </div> 
                <div class="col-15">


                    <h2 class="h2 p2">Formulario Contacto</h2>
                    <form id="form" method="post" action="js/sendEmail.php">
                      <fieldset>
                        <label><input type="text" name="nombre" placeholder="Nombre" required ></label>
                        <label><input type="email" name="ejemplo@gmail.com" placeholder="Email" ></label>
                        <label><textarea name="mensaje" placeholder="Mensaje" required></textarea></label>
                        <div class="btns">
                          <a href="#" class="link-1">Borrar</a>
                          <a href="#" class="link-1" onClick="document.getElementById('form').submit()">Enviar</a>
                        </div>
                      </fieldset>  
                    </form> 

                    

                </div>
                <div class="col-16">
                   <h2 class="h2 p2">Localización</h2>
                    <div class="map img-border">
                      <!-- <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe> -->

                      <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Mazzini+225,+Chascom%C3%BAs,+Buenos+Aires,+Argentina&amp;aq=0&amp;oq=mazzini+225&amp;sll=37.0625,-95.677068&amp;sspn=38.554089,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Mazzini+225,+Chascom%C3%BAs,+Buenos+Aires,+Argentina&amp;ll=-35.571956,-58.014991&amp;spn=0.004843,0.010568&amp;t=m&amp;z=15&amp;output=embed"></iframe><br />
                      <br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Mazzini+225,+Chascom%C3%BAs,+Buenos+Aires,+Argentina&amp;aq=0&amp;oq=mazzini+225&amp;sll=37.0625,-95.677068&amp;sspn=38.554089,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Mazzini+225,+Chascom%C3%BAs,+Buenos+Aires,+Argentina&amp;ll=-35.571956,-58.014991&amp;spn=0.004843,0.010568&amp;t=m&amp;z=14" style="color:#f1814a;text-align:left">Ver mapa más grande</a></small>
                    </div> 
                </div>
            </div>
        </div>           
    </section> 
<!--==============================footer=================================-->
    <footer>

       <span><strong>© 2012 Paris Clarks</strong><br><span>Selection of free web templates <a href="http://www.websitetemplatesonline.com" target="_blank">at this site</a>.</span><br/>
        <a rel="nofollow" href="http://www.templatemonster.com/" target="_blank" class="link-2">Website Template</a> by TemplateMonster.com</span> -->
    </footer>	           
</body>
</html>