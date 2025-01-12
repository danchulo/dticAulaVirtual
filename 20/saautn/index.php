<?php  
	// echo $_SERVER['HTTP_HOST'];
	// echo $_SERVER['REQUEST_URI'];
	

	//echo dirname('index.html');
	//echo file_get_contents('index.html');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>SAA-UTNLR</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<meta name = "format-detection" content = "telephone=no" />
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/sForm.js"></script>

<script src="js/wow/wow.js"></script>
<script src="js/wow/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
  <![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <link rel="stylesheet" href="css/ie.css">
  <![endif]-->
</head>
<body>
<!--header-->
<header class="clearfix"> 
    <div class="container">
        <div class="box clearfix"> 
            <h1 class="navbar-brand navbar-brand_"><a href="./"><img src="img/logoutn.png" alt="logo"></a></h1>
            <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
                <ul class="nav sf-menu clearfix">
                    <li class="active sub-menu"><a href="./">Inicio</a><span></span></li>
                    <li><a href="index-4.html">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<div class="bg_pic"> 
    <div class="container"> 
        <p class="title wow fadeInDown" data-wow-delay="0.2s">Sistema Academico Administrativo</p>
        <p class="description wow fadeInUp"><i></i>UTN - Facultad Regional La Rioja<em></em></p>
    </div>
</div>
<div class="global">
    <!--content-->  
<!--     <div class="container"> 
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="thumb-pad1 maxheight wow fadeIn">
                    <div class="badge"><img src="img/page1_icon1.png" alt=""></div>
                    <div class="thumbnail">
                        <div class="caption">
                            <p class="title">Progressive Programs</p>
                            <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque purus, sollic alitudin non ante ac, malesuada. condimentum libero. </p>
                            <a href="#" class="btn-default btn1">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="thumb-pad1 maxheight">
                    <div class="badge"><img src="img/page1_icon2.png" alt=""></div>
                    <div class="thumbnail">
                        <div class="caption">
                            <p class="title">online education</p>
                            <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque purus, sollic alitudin non ante ac, malesuada. condimentum libero. </p>
                            <a href="#" class="btn-default btn1">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                <div class="thumb-pad1 maxheight">
                    <div class="badge"><img src="img/page1_icon3.png" alt=""></div>
                    <div class="thumbnail">
                        <div class="caption">
                            <p class="title">International students</p>
                            <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque purus, sollic alitudin non ante ac, malesuada. condimentum libero. </p>
                            <a href="#" class="btn-default btn1">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb-box1">
        <div class="container"> 
            <h2 class="center">For students:</h2>
            <p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus. <br>Suspendisse sodales sed orci ac feugiat. </p>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="thumb-pad2 wow fadeInRight">
                        <figure><img src="img/page1_pic1.jpg" alt=""></figure>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>Attendance procedure</h3>
                                <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque purus, sollic alitudin non ante ac, malesuada. condimentum libero.</p>
                                <a href="#" class="btn-default btn1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="thumb-pad2 wow fadeInRight" data-wow-delay="0.2s">
                        <figure><img src="img/page1_pic2.jpg" alt=""></figure>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>Health & Help</h3>
                                <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque purus, sollic alitudin non ante ac, malesuada. condimentum libero.</p>
                                <a href="#" class="btn-default btn1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="thumb-pad2 wow fadeInRight" data-wow-delay="0.4s">
                        <figure><img src="img/page1_pic3.jpg" alt=""></figure>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>Course Selection</h3>
                                <p>Lorem ipsum dolor sit amet, consectscing elit. Maecenas moleset alldbus id ictum. Ut neque purus, sollic alitudin non ante ac, malesuada. condimentum libero.</p>
                                <a href="#" class="btn-default btn1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb-box2 center">
        <div class="container"> 
            <h2 class="center">Current news:</h2>
            <p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus. <br>Suspendisse sodales sed orci ac feugiat. </p>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 date-box wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <div class="badge">
                            22 <span>jun</span>
                            <strong>6 <img src="img/page1_icon4.png" alt=""></strong>
                        </div>
                        <div class="extra-wrap">
                            <p>Lorem ipsum dolor sit amedgit, consectetur adipscing elitsf tell. Mauris feugiat vari dghus elit, a commodo libero dicuij futumty pottor estibulum   egestas egestas erat et iaculis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInLeft">
                    <figure><img src="img/page1_pic4.jpg" alt=""></figure>
                </div>
            </div>
            <a href="#" class="btn-default btn1">view more news</a>
        </div>
    </div> -->
    <div class="thumb-box3">
        <div class="container"> 
            <h2 class="wow fadeInUp">Ingreso al Sistema</h2>
            <p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus. <br>Suspendisse sodales sed orci ac feugiat. </p>
            <div class="row">
                <div class="col-lg-12 wow fadeInUp">
                    <form id="newsletter" accept-charset="utf-8">
        				<div class="success">Your subscribe request has been sent!</div>
                        <label class="email">
                            <input type="email" value="Ingresa Tu E-mail:">
                            <span class="error">*This is not a valid email address.</span>
                        </label><br>
        			    <label class="password">
        			    	<input type="text" value="Contraseña:">
        			    	<span class="error">*This is not a valid email address.</span>
        			    </label><br>
                        <a href="#" data-type="submit">Ingresar</a>
        			</form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="container">
        <p>UTN La Rioja &copy; <em id="copyright-year"></em> <span>|</span> <a href="index-5.html">Privacy policy</a></p>
        <p class="foo_address">Av San Nicolás de Bari 1100<br>5300 La Rioja</p>
    </div>
  <!-- {%FOOTER_LINK} -->
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
  <!--  
  -->
</body>
</html>