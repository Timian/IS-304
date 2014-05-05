<!doctype html>
<?php include 'logintopbar.php'?>

<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php bloginfo('title')?></title>
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
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
    
    <header>
        <div id='zoom'>
              <a href="javascript:void(0);" onclick="resizeText(1)" id="plustext">ABC</a> | <a href="javascript:void(0);" onclick="resizeText(-1)" id="minustext">abc</a>
        </div>   
        <div id="languageselection">
            <a href='index.php/?lang=finsk'><img onclick="setWP_Query('category_name=finsk')" src="<?php bloginfo('template_directory');?>/img/finsmall.png"/> </a>
            <a href='index.php/?lang=norsk'><img onclick="setWP_Query('category_name=norsk')" src="<?php bloginfo('template_directory');?>/img/norsmall.png" />  </a>          
        </div>
        <br>
        <div id="logoplacement">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php bloginfo('template_directory');?>/img/logosmall.png"/></a>
        </div>

    </header>
    
    <nav>
        <?php $langvar = $_GET["lang"];?>
        <?php if ($langvar == NULL){wp_nav_menu(array('menu' => $_COOKIE['langcook'])); } else {wp_nav_menu(array('menu' => $langvar));}?>
        <?php if ($langvar == 'finsk') {setcookie("langcook" , $langvar , time()+3000 , '/'); } ?>
        <?php if ($langvar == 'norsk') {setcookie("langcook" , $langvar , time()+3000 , '/'); } ?>
    </nav>
</html>

<div id="container">