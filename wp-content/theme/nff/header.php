
<!doctype html>


<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php bloginfo('title')?></title>
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>
       <?php add_action( 'wp_enqueue_script', 'load_jquery' );
function load_jquery() {
    wp_enqueue_script( 'jquery' );
}?>
        <script type="text/javascript">function resizeText(multiplier) {
  if (document.body.style.fontSize === "") {
    document.body.style.fontSize = "1.0em";
  }
  document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";
}</script>
       <?php wp_head()?>
    </head>  
    <div id="all">
    <header> <!-- Edit the text size on the webpage-->
		<div id="logincontent">
			<?php 
			$logginnvar=$_GET["lang"];
			if (!is_user_logged_in()) {
				if (!empty($logginnvar)) {
					if ($logginnvar=="norsk") {
						echo "<h3>Logg inn</h3>";
					}
					else {
						echo "<h3>Käyttäjätunnus</h3>";
					}
				}	
				else {
					if ($_COOKIE["lang"] == "norsk") {
						echo "<h3>Logg inn</h3>";
					}
					else {
						echo "<h3>Käyttäjätunnus</h3>";
					}
				}
			}
			?>
			<?php dynamic_sidebar('first-top-sidebar');?>
		</div>
        <div id='zoom'>
              <a href="javascript:void(0);" onClick="resizeText(1)" id="plustext">ABC</a> | <a href="javascript:void(0);" onClick="resizeText(-1)" id="minustext">abc</a>
        </div> 
				<!-- Show the language selection with flags, those flags are linked up to the language they supports-->
        <div id="languageselection">
            <a href='/bachelor/index.php?lang=finsk'><img onClick="setWP_Query('category_name=finsk')" src="<?php bloginfo('template_directory');?>/img/finsmall.png"/> </a>
            <a href='/bachelor/index.php?lang=norsk'><img onClick="setWP_Query('category_name=norsk')" src="<?php bloginfo('template_directory');?>/img/norsmall.png" />  </a>          
        </div>
        <br>
				<!--der logoen er, logoen er linket opp mot forsiden-->
        <div id="logoplacement">
            <a href="/bachelor/?lang=<?php 	if (!empty($logginnvar)) {
																	if ($logginnvar=="norsk") {
																		echo "norsk";
																	}
																	else {
																		echo "finsk";
																	}
																}	
																else {
																	if ($_COOKIE["lang"] == "norsk") {
																		echo "norsk";
																	}
																	else {
																		echo "finsk";
																	}
																} ?>"> <img src="<?php bloginfo('template_directory');?>/img/logosmall.png"/></a>
        </div>

    </header>
    
    <nav>
        <?php $langvar = $_GET["lang"];?>
        <?php if ($langvar === NULL){wp_nav_menu(array('menu' => $_COOKIE['lang']));} else {wp_nav_menu(array('menu' => $langvar));}?>
        <?php if ($langvar == 'finsk') {setcookie("langcook" , $langvar , time()+3000 , '/');} ?>
        <?php if ($langvar == 'norsk') {setcookie("langcook" , $langvar , time()+3000 , '/');} ?>
    </nav>

<div id="container">