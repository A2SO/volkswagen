<?php 
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="asset/css/materialize.css">
  <link rel="stylesheet" type="text/css" href="asset/css/main.css">
  <link href="asset/animations/assets/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
  <script type="text/javascript" src=" asset/js/jquery-2.1.0.min.js"></script>
  <script type="text/javascript" src="asset/js/materialize.min.js"></script>  
  <script type="text/javascript" src=" asset/js/jquery-2.1.0.min.js"></script>
  <script type="text/javascript" src=" asset/animations/assets/js/animations.min.js"></script>
  <script type="text/javascript" src=" asset/animations/assets/js/appear.min.js"></script>
  <script type="text/javascript" src=" asset/animations/assets/js/backbone.js"></script>
  <script type="text/javascript" src=" asset/animations/assets/js/smoothscroll.min.js"></script>
</head>

<body>
       <div class="col s12 z-depth-4 card-panel  animate-in " data-anim-type="bounce-in-up" data-anim-delay="200">
      <form class="login-form" method='post' action='controlador/controlador-acceso.php' >
      <input type="hidden" name="ope" value="2" >
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Material Design Admin Template</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password">
            <label for="password" class="">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me">
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            
             <button type="submit" class="btn waves-effect waves-light col s12">Login</button>
          </div>
        </div>
    

      </form>
    </div>
</body>
    
    <footer>
    
    </footer>
     
</html>

