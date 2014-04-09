<?php
/*
Template Name: aboutus
*/
?>

<?php get_header()?>
<?php get_sidebar()?>
<div id="pictureau"></div>
<div id="left">
    
    <?php while(have_posts()): the_post()?>
    
        <h2><?php the_title()?></h2>
        <?php the_content();?>
        
    <?php endwhile;?>
</div>


<?php get_footer()?>
