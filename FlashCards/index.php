<?
include_once('view.php');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <?
    View::renderHeadTag();
    ?>


    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
        <div id="wrap">

        <?
            print View::renderHeader();
        ?>

        <div class="container">

           
            <div class="hero-unit">
                <div style="float:right;">
                    <img src="img/flash-moustache-face.png">
                </div>
                <h1>Welcome!</h1>
                <p>Flash Moustache is a fun, interactive, and easy way to remember words.</p>
                <p><a class="btn btn-primary btn-large" href="about.php">Learn more &raquo;</a></p>
            </div>

            <div class="row">
                <div class="span4">
                    <h2>Monitor</h2>
                    <p>Monitor your students' progress. </p>
                    <p><a class="btn" href="#">Register &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Identify</h2>
                    <p>Identify excellent students. </p>
                    <p><a class="btn" href="#">Register &raquo;</a></p>
               </div>
                <div class="span4">
                    <h2>Notify</h2>
                    <p>Tell their parents how great they're doing.</p>
                    <p><a class="btn" href="#">Register &raquo;</a></p>
                </div>
            </div>
        </div>
        </div>
        <div class="container-fluid">
            <div class="push"></div>
            <hr>
            <div id="footer">
            <footer>
                <p>&copy; Flash Moustache 2013</p>
            </footer>
            </div>

        </div> <!-- /container -->
    

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
