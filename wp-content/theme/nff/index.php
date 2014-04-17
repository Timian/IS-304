<?php get_header()?>
<?php get_sidebar()?>

<div id="content">
    <?php $langvar = $_GET["lang"]; 
                $the_query = setWP_Query('category_name='. $langvar);
 
// The Loop denne henter frem poster som er lagt ut//
if ( $the_query->have_posts() ) {
        echo '<ul>';
        while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<h3>' . get_the_title().'</h3>';
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



<?php get_footer()?>
