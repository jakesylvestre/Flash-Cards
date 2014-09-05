<?
include_once('view.php');
include_once('data.php');

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <?
    View::renderHeadTag();
    ?>


    <body class="student-dashboard">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
        <div id="wrap">

        <?
            print View::renderHeader();
        ?>

          <div class="container">


            <h1>Student Dashboard</h1>
            <div class="row">
                <div class="span12">


                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#">2011/Grade 4</a></li>
                      <li class=""><a href="#">2011/Grade 3</a></li>
                      <li class=""><a href="#">2012/Grade 4</a></li>
                    </ul>

                </div>

            </div>
            <?
            $sid = $_REQUEST['student-id'];
            $currentStudent = Data::getStudent($sid);

            ?>

            <div class="row">
                <div class="span3">

                    <aside class="student-list">
                        <ul class="nav nav-list">
                        <?
                            foreach (Data::getStudents() as $student) {
                                $class = $student->name==$currentStudent->name ? 'active' : '';
                                print "<li class='$class'><a href='student-dashboard.php?student-id=".$student->id."'>".$student->name."</a></li>";
                            }
                        ?>
                        </ul>

                    </aside>
               </div>
                <div class="span1">
               </div>
                <div class="span8">
                    
                    <?
                        View::renderStudentInfo($currentStudent);
                    ?>

                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#">Notify Parents</a></li>
                      <li><a href="#">View Vocabulary Words</a></li>
                      <li><a href="#">Progress</a></li>
                    </ul>

                    <div class="comments-form">
                        <?
                            $action = "https://api.tropo.com/1.0/sessions?";
                        ?>
                        <form method="GET" action="<?=$action?>">
                            <input type="hidden" name="action" value="create">
                            <input type="hidden" name="token" value="1936c91d878c9f4bbf29048a25472ba711f7975137c701bf43d05b6ad7542c0cac94523f5392b0e875283208">
                            <h4>Comments</h4>
                            <label for="myNumbers">Phone #&nbsp; <input type="text" name="myNumbers" ></label>
                            <br>
                            <textarea name="myText" rows="6" style="width:60%;"></textarea>
                            <br>
                            <button type="submit" class="btn btn-primary " >Send</button>

                            <!-- <a class="btn btn-primary" href="http://api.tropo.com/1.0/sessions?action=create&token=1936c91d878c9f4bbf29048a25472ba711f7975137c701bf43d05b6ad7542c0cac94523f5392b0e875283208&myNumbers=6507415136&myText=Resume+of+Yael+Weinberg+from+EveryoneHacks+:)+Thanks!&myURL=www.linkedin.com/in/yaelwb/">Send</a>-->
                        </form>
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
