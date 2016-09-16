<?php

function head() {
    echo'<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>InfoWare</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
    </head>
    <body>
        <div class="site-main" id="sTop">
            <div class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/fevedoingarcia" class="fa fa-facebook" id="socialNet"></a></li>
                                <li><a href="https://twitter.com/fvgarcia_" class="fa fa-twitter" id="socialNet"></a></li>
                                <li><a href="https://github.com/fernandovgarcia" class="fa fa-github-alt" id="socialNet"></a></li>
                                <li><a href="https://www.linkedin.com/in/fernando-v-a0478b129?trk=nav_responsive_tab_profile" class="fa fa-linkedin" id="socialNet"></a></li>
                            </ul>
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->';
}

function menu() {
    echo '<div class="main-header">
        <div class="container">
            <div id="menu-wrapper">
                <div class="row">
                    <div class="logo-wrapper col-md-2 col-sm-2">
                        <h1>
                            <a href="#">InfoWare</a>
                        </h1>
                    </div> <!-- /.logo-wrapper -->
                    <div class="col-md-10 col-sm-10 main-menu text-right">
                        <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                        <ul class="menu-first">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#services">Serviços</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#our-team">Time</a></li>
                            <li><a href="#contact">Contato</a></li>                                 
                        </ul>                                    
                    </div> <!-- /.main-menu -->
                </div> <!-- /.row -->
            </div> <!-- /#menu-wrapper -->                        
        </div> <!-- /.container -->
    </div> <!-- /.main-header -->';
}

function script() {
    echo '<script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>';
}
function foot(){
    echo '<div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 text-left">
                    <span>Copyright &copy; 2015 InfoWare</span>
                </div> <!-- /.text-center -->
                <div class="col-md-4 hidden-xs text-right">
                    <a href="#top" id="go-top"><span class="fa fa-arrow-up"> Voltar ao topo</span></a>
                </div> <!-- /.text-center -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#footer -->' .
    script()
    . '</body>
</html>';
}