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

            <div class="row">

                <div class="span3"></div>
                <div class="span6">

                    <h1>Sign In</h1>
                    <form action="student-dashboard.php">
                        <label for="login">
                            Username
                            <input type="text" name="login">
                        </label>
                        <label for="password">
                            Password
                            <input type="password" name="password">
                        </label>
                        <button class="btn btn-primary">Sign In</button>

                    </form>
                </div>
                <div class="span3"></div>


            </div>






             <div id="push"></div>
            

            
        
        </div> <!-- /container -->
        </div>
        </div>
        <div class="container-fluid">
        <div class="push"></div>
        <hr />
        <div id="footer">
        <footer>
                <p>&copy; Flash Moustache 2013</p>
        </footer>
        </div>
    </div>
    

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
