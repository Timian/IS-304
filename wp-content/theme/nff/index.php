<?php
	session_start();
	if (isset ($_GET['lang'])) {
		$lang=$_GET['lang'];
		$_SESSION['lang'] = $lang;
		setcookie('lang', $lang, time() + (3600 * 24 * 30));
	}
	else if(isSet($_SESSION['lang']))
	{
		$_SESSION['lang'] = $lang;
	}
	else if(isSet($_COOKIE['lang']))
	{
		$lang = $_COOKIE['lang'];
	}
	else {
		header('Location: ./lang.html');
	}

?>

<?php get_header()?>

<?php get_sidebar()?>



<div id="content">
<div id="textcontent">
    <?php $langvar = $_GET["lang"]; 

                $the_query = setWP_Query('category_name='. $langvar);

 

// The Loop denne henter frem poster som er lagt ut//

if ( $the_query->have_posts() ) {
        echo '<ul>';

        while ( $the_query->have_posts() ) {

                $the_query->the_post();

                echo "<h3> <a href='" . get_permalink() . "'>" . get_the_title(). "</a> </h3> <br />";

                echo '<li>' . intro_text(250) . '</li>';

                echo '<br>';

                echo the_author_posts_link();

                echo '<li>';

                echo 'Dato postet: ';                echo the_date();

                                echo '<hr><br>';

                

        }

        echo '</ul>';

} else {

        // no posts found

}

?>

</div>
</div>

<?php get_footer()?>