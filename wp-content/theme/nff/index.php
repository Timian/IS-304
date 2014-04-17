<?php get_header()?>
<?php get_sidebar()?>

<div id="content">
    <?php $langvar = $_GET["lang"]; 
                $the_query = setWP_Query('category_name='. $langvar);
 
<<<<<<< HEAD
// The Loop denne henter frem poster som er lagt ut//
=======
<<<<<<< HEAD
// The Loop denne henter frem poster som er lagt ut//
=======
// The Loop
>>>>>>> a68d8dafdca8595bb28cb963c83ca68c95cbdf67
>>>>>>> a53c8d49f2420a80b9a606578ba442162b11b24c
if ( $the_query->have_posts() ) {
        echo '<ul>';
        while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<h3>' . get_the_title().'</h3>';
                echo '<li>' . intro_text(250) . '</li>';
                echo '<br>';
                echo the_author_posts_link();
<<<<<<< HEAD
                echo '<li>';
                echo 'Dato postet: ';                echo the_date();
=======
<<<<<<< HEAD
                echo '<li>';
=======
>>>>>>> a68d8dafdca8595bb28cb963c83ca68c95cbdf67
                echo 'date posted: ';                echo the_date();
>>>>>>> a53c8d49f2420a80b9a606578ba442162b11b24c
                                echo '<hr><br>';
                
        }
        echo '</ul>';
} else {
        // no posts found
}
?>


</div>



<?php get_footer()?>
