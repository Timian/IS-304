<?php get_header()?>
<?php get_sidebar()?>
<div id="content">
    <?php $langvar = $_GET["lang"]; 
                $the_query = setWP_Query('category_name='. $langvar);
 
// The Loop
if ( $the_query->have_posts() ) {
        echo '<ul>';
        while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<h3>' . get_the_title().'</h3>';
                echo '<li>' . intro_text(250) . '</li>';
        }
        echo '</ul>';
} else {
        // no posts found
}
?>

        <div id="languageselection">
            <a href='index.php/?lang=finsk'><img onclick="setWP_Query('category_name=finsk')" src="<?php bloginfo('template_directory');?>/img/finsmall.png"/> </a>
            <a href='index.php/?lang=norsk'><img onclick="setWP_Query('category_name=norsk')" src="<?php bloginfo('template_directory');?>/img/norsmall.png" />  </a>          
        </div>
</div>



<?php get_footer()?>
