<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<meta http-equiv="X-UA-Compatible" content="IE=Edge" ><title>Sistema Estudiantil</title><link href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:extralight,light,regular,bold" media="screen" rel="stylesheet" type="text/css" >
<link href="http://fonts.googleapis.com/css?family=PT+Serif+Caption" media="screen" rel="stylesheet" type="text/css" >
<link href="css/reset.css" media="screen" rel="stylesheet" type="text/css" >
<link href="css/grid.css" media="screen" rel="stylesheet" type="text/css" >
<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" >
<link href="css/ui/default-ui/ui.css" media="screen" rel="stylesheet" type="text/css" >
<link href="css/ui/default-ui/portlet.css" media="screen" rel="stylesheet" type="text/css" >
<link href="css/ui/default-ui/jquery.ui.uniform.css" media="screen" rel="stylesheet" type="text/css" >
<link href="css/ui/default-ui/colors/jquery.ui.colors.default.css" media="screen" rel="stylesheet" type="text/css" class="uicolor" >
<link rel="icon" href="images/navicons/112.png">
<link href="css/forms.css" media="screen" rel="stylesheet" type="text/css" >
<!--[if lt IE 8]> <link href="/vpanel/css/ie.css" media="screen" rel="stylesheet" type="text/css" ><![endif]--><!--[if lt IE 9]> <script type="text/javascript" src="/vpanel/js/html5.js"></script><![endif]-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<!--[if lt IE 9]> <script type="text/javascript" src="/vpanel/js/selectivizr.js"></script><![endif]-->
<!--[if lt IE 9]> <script type="text/javascript" src="/vpanel/js/ie.js"></script><![endif]-->
<script> 
$(document).ready(function(){
    $.tools.validator.fn("#username", function(input, value) {
        return value!='Username' ? true : {     
            en: "Please complete this mandatory field"
        };
    });
    
    $.tools.validator.fn("#password", function(input, value) {
        return value!='Password' ? true : {     
            en: "Please complete this mandatory field"
        };
    });

    var form = $("#form").validator({ 
    	position: 'bottom left', 
    	offset: [5, 0],
    	messageClass:'form-error',
    	message: '<div><em/></div>' // em element is the arrow
    }).attr('novalidate', 'novalidate');
});
</script> 

<!-- LOADING SCRIPT -->
<script>
$(window).load(function(){
    $("#loading").fadeOut(function(){
        $(this).remove();
        $('body').css('overflow', 'auto');
    });
});
</script>

<style type = "text/css">
    body{overflow: hidden;}
    #container {position: absolute; top:50%; left:50%;}
    #content {width:800px; text-align:center; margin-left: -400px; height:50px; margin-top:-25px; line-height: 50px;}
    #content {font-family: "Helvetica", "Arial", sans-serif; font-size: 18px; color: black; text-shadow: 0px 1px 0px white; }
    #loadinggraphic {margin-right: 0.2em; margin-bottom:-2px;}
    #loading {background-color: #eeeeee; overflow:hidden; width:100%; height:100%; position: absolute; top: 0; left: 0; z-index: 9999;}
</style> 
<!-- LOADING SCRIPT END -->

</head>
<body class="login">

    <div id="loading"> 
        <script type = "text/javascript"> 
            document.write("<div id='container'><p id='content'>" +
                           "<img id='loadinggraphic' width='16' height='16' src='images/navicons/11.png' /> " +
                           "Loading...</p></div>");
        </script> 
    </div> 

    <div class="login-box main-content">
      <header>
          <!--<ul class="action-buttons clearfix">
              <li><a href="#" class="button">Register</a></li>
              <li><a href="#" class="button" data-icon-primary="ui-icon-help">Forgot Password</a></li>
          </ul>-->
          <center><div class="inicio"><img src="images/index.png"></div></center>
         
      </header>
    	<section>
    		<div class="ui-widget message notice">
               <!-- <div class="ui-state-highlight ui-corner-all">
                    <p>
                    <span class="ui-icon ui-icon-info"></span>
                        Enter any letter and press Login
                    </p>
                </div>-->
            </div>
    		<form id="form" action="validar.php" method="post" class="clearfix">
                <p>
                    <input type="text" id="username"  class="large" value="" name="usuario" required="required" placeholder="Usuario" />
                    <input type="password" id="password" class="large" value="" name="password" required="required" placeholder="Contraseña" />
                    <button class="large button-gray ui-corner-all fr" type="submit">Entrar</button>
                </p>
                <!--<p class="clearfix">
                    <span class="fl">
                        <input type="checkbox" id="remember" class="" value="1" name="remember"/>
                        <label class="choice" for="remember">Recordar contraseña</label>
                    </span>
                </p>-->
            </form>
    	</section>
    </div>
</body>

<!-- Mirrored from themes.vivantdesigns.com/vpanel/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2017 22:43:29 GMT -->
</html>