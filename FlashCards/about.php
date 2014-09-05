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

           <div class="row about-text">
                <div class="span12">

                <h1>Plans for the Future</h1>
                <p>These are the features we would like to add in the future: </p>

                <div>
                    <h3>Flash cards with "levels" of achievement. This is the "space" level.</h3>
                    <div>
                        <img src="img/future-quiz.png ">
                    </div>
                    <h3>Hint overlay when student needs a hint, usage varies with learning style and age group.</h3>
                    <div>
                        <img src="img/future-quiz-hints.png ">
                    </div>

                    <h3>Sticker Book reward system.</h3>
                    <div>
                        <img src="img/future-sticker-book.png">
                    </div>
                    <h3>Word buckets with swipe-through words.</h3>
                    <div>
                        <img src="img/future-word-bucket.png">
                    </div>

                </div>
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
