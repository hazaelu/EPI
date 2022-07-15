 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="../vista/pantallas/revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="../vista/pantallas/revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="../vista/pantallas/revolution/css/navigation.css" />
<!-- js section -->
    
            <script src="../vista/pantallas/js/jquery.min.js"></script>
            <script src="../vista/pantallas/js/bootstrap.min.js"></script>
            <!-- menu js -->
            <script src="../vista/pantallas/js/menumaker.js"></script>
            <!-- wow animation -->
            <script src="../vista/pantallas/js/wow.js"></script>
            <!-- custom js -->
            <script src="../vista/pantallas/js/custom.js"></script>
            <!-- revolution js files -->
            <script src="../vista/pantallas/revolution/js/jquery.themepunch.tools.min.js"></script>
            <script src="../vista/pantallas/revolution/js/jquery.themepunch.revolution.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.actions.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.migration.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
            <script src="../vista/pantallas/revolution/js/extensions/revolution.extension.video.min.js"></script>
            
<?php session_start();
    
    $conn=mysqli_connect('localhost', 'root', '*123*456*', 'ensayo');
    #$conn=mysqli_connect('database-1.cutvdxplo4yk.us-west-2.rds.amazonaws.com:3306', 'epi', '123456789', 'EPI');
    /* comprobar la conexión */
    if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
    }
    $usuario = strtolower(htmlentities($_POST["correo"], ENT_QUOTES));  
    #echo $usuario; 

    $password = $_POST["pass"];
     #echo $password;

    $query=" SELECT contrasenia, correo FROM usuarios". " WHERE correo ='$usuario'";
   if($result = mysqli_query($conn, $query)){
        if($row = mysqli_fetch_array($result)){
         # var_dump($row);
            if($row["contrasenia"] == $password){
          
            $_SESSION["k_username"] = $row['correo'];
           # header("Location: ../vista/pantallas/index.php");
            header("Location:http://localhost/EPI/vista/pantallas/index.php");
            echo "usuario existe";
            }else{
            //echo 'Contraseña Incorrecta';
            //echo '<a href="../vista/login/singup-login.html"> Verificar Contraseña</a>'; ?>
            
            <!--<div class="alert alert-warning alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong> La contraseña ingresada no es valida para este usuario.
            </div>-->
            <script type="text/javascript"> alert("Revisa la contraseña, Es Incorrecta"); history.back();</script>
             
                          
            
           <?php }
        }else{
        //echo 'Usuario no existente en la base de datos';
        //echo '<a href="../vista/login/singup-login.html"> Registrate</a>'; ?>
<body id="default_theme" class="it_service">
    <div class="alert alert-danger">
        <strong>Usuario no Existe!</strong> Primero debe <a href="../vista/login/singup-login.html" class="alert-link">Registrarse aquí</a>
        </div>
        <div id="slider" class="section main_slider">
          <div class="container-fuild">
            <div class="row">
              <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                  <ul>
                    <li data-index="rs-1812" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="../vista/pantallas/images/it_service/slide1.png"  data-rotate="0"  data-saveperformance="off"  data-title="Componentes físicos" data-description="">
                      <!-- MAIN IMAGE -->
                      <img src="../vista/pantallas/images/it_service/slide1.png"  alt="#"  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                      <!-- LAYERS -->
                      <!-- LAYER NR. BG -->
                      <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                                      id="slide-270-layer-1012" 
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                      data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                      data-width="full"
                                      data-height="full"
                                      data-whitespace="nowrap"
                                      data-transform_idle="o:1;"
                                      data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                                      data-transform_out="s:300;s:300;" 
                                      data-start="750" 
                                      data-basealign="slide" 
                                      data-responsive_offset="on" 
                                      data-responsive="off"
                                      style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                      <!-- LAYER NR. 1 -->
                      <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                                      id="slide-18-layer-912" 
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                      data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                                      data-width="500"
                                      data-height="140"
                                      data-whitespace="nowrap"
                                      data-transform_idle="o:1;"
                                      data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                      data-mask_in="x:0px;y:0px;" 
                                      data-mask_out="x:inherit;y:inherit;" 
                                      data-start="2000" 
                                      data-responsive_offset="on" 
                                      style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                      <!-- LAYER NR. 2 -->
                      <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                                      id="slide-18-layer-112" 
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                      data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                      data-fontsize="['70','70','70','35']"
                                      data-lineheight="['70','70','70','50']"
                                      data-width="none"
                                      data-height="none"
                                      data-whitespace="nowrap"
                                      data-transform_idle="o:1;"
                                      data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                      data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                      data-start="1000" 
                                      data-splitin="chars" 
                                      data-splitout="none" 
                                      data-responsive_offset="on" 
                                      data-elementdelay="0.05" 
                                      style="z-index: 6; white-space: nowrap;">Componentes físicos </div>
                      <!-- LAYER NR. 3 -->
                      <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                                      id="slide-18-layer-412" 
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                      data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                                      data-width="none"
                                      data-height="none"
                                      data-whitespace="nowrap"
                                      data-transform_idle="o:1;"
                                      data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                      data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                      data-start="1500" 
                                      data-splitin="none" 
                                      data-splitout="none" 
                                      data-responsive_offset="on" 
                                      style="z-index: 7; white-space: nowrap;">Hardware del sistema </div>
                    </li>
                    <li data-index="rs-181" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="../vista/pantallas/images/it_service/slide2.png"  data-rotate="0"  data-saveperformance="off"  data-title="Diferentes rutinas de ejercicio" data-description="">
                      <!-- MAIN IMAGE -->
                      <img src="../vista/pantallas/images/it_service/slide2.png"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                      <!-- LAYERS -->
                      <!-- LAYER NR. BG -->
                      <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                                      id="slide-270-layer-101" 
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                      data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                      data-width="full"
                                      data-height="full"
                                      data-whitespace="nowrap"
                                      data-transform_idle="o:1;"
                                      data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                                      data-transform_out="s:300;s:300;" 
                                      data-start="750" 
                                      data-basealign="slide" 
                                      data-responsive_offset="on" 
                                      data-responsive="off"
                                      style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                      <!-- LAYER NR. 1 -->
                      <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                                      id="slide-18-layer-91" 
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                      data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                                      data-width="500"
                                      data-height="140"
                                      data-whitespace="nowrap"
                                      data-transform_idle="o:1;"
                                      data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                      data-mask_in="x:0px;y:0px;" 
                                      data-mask_out="x:inherit;y:inherit;" 
                                      data-start="2000" 
                                      data-responsive_offset="on" 
                                      style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                      <!-- LAYER NR. 2 -->
                      <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                                      id="slide-18-layer-11" 
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                      data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                      data-fontsize="['70','70','70','35']"
                                      data-lineheight="['70','70','70','50']"
                                      data-width="none"
                                      data-height="none"
                                      data-whitespace="nowrap"
                                      data-transform_idle="o:1;"
                                      data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                      data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                      data-start="1000" 
                                      data-splitin="chars" 
                                      data-splitout="none" 
                                      data-responsive_offset="on" 
                                      data-elementdelay="0.05" 
                                      style="z-index: 6; white-space: nowrap;">Diferentes rutinas </div>
                      <!-- LAYER NR. 3 -->
                      <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                                      id="slide-18-layer-41" 
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                      data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                                      data-width="none"
                                      data-height="none"
                                      data-whitespace="nowrap"
                                      data-transform_idle="o:1;"
                                      data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                      data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                      data-start="1500" 
                                      data-splitin="none" 
                                      data-splitout="none" 
                                      data-responsive_offset="on" 
                                      style="z-index: 7; white-space: nowrap;">Análisis computarizado de imágenes </div>
                    </li>
                    <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="../vista/pantallas/images/it_service/slide3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Tecnología Raspberry Pi" data-description="">
                      <!-- MAIN IMAGE -->
                      <img src="../vista/pantallas/images/it_service/slide3.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                      <!-- LAYERS -->
                      <!-- LAYER NR. BG -->
                      <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                                      id="slide-270-layer-10" 
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                      data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                      data-width="full"
                                      data-height="full"
                                      data-whitespace="nowrap"
                                      data-transform_idle="o:1;"
                                      data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                                      data-transform_out="s:300;s:300;" 
                                      data-start="750" 
                                      data-basealign="slide" 
                                      data-responsive_offset="on" 
                                      data-responsive="off"
                                      style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                      <!-- LAYER NR. 1 -->
                      <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                                      id="slide-18-layer-9" 
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                      data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                                      data-width="500"
                                      data-height="140"
                                      data-whitespace="nowrap"
                                      data-transform_idle="o:1;"
                                      data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                      data-mask_in="x:0px;y:0px;" 
                                      data-mask_out="x:inherit;y:inherit;" 
                                      data-start="2000" 
                                      data-responsive_offset="on" 
                                      style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                      <!-- LAYER NR. 2 -->
                      <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                                      id="slide-18-layer-1" 
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                      data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                      data-fontsize="['70','70','70','35']"
                                      data-lineheight="['70','70','70','50']"
                                      data-width="none"
                                      data-height="none"
                                      data-whitespace="nowrap"
                                      data-transform_idle="o:1;"
                                      data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                      data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                      data-start="1000" 
                                      data-splitin="chars" 
                                      data-splitout="none" 
                                      data-responsive_offset="on" 
                                      data-elementdelay="0.05" 
                                      style="z-index: 6; white-space: nowrap;">Tecnología Raspberry Pi</div>
                      <!-- LAYER NR. 3 -->
                      <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                                      id="slide-18-layer-4" 
                                      data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                      data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                                      data-width="none"
                                      data-height="none"
                                      data-whitespace="nowrap"
                                      data-transform_idle="o:1;"
                                      data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                      data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                      data-start="1500" 
                                      data-splitin="none" 
                                      data-splitout="none" 
                                      data-responsive_offset="on" 
                                      style="z-index: 7; white-space: nowrap;">Tecnología Innovadora y de bajo costo</div>
                    </li>
                  </ul>
                  <div class="tp-static-layers"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        </body>

        

    <?php          }
        mysqli_free_result($result);
    }   
    
    
    mysqli_close($conn);
 ?>