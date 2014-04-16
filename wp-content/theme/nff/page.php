<?php get_header()?>
<?php get_sidebar()?>

<div id="content">
    
    <?php while(have_posts()): the_post()?>
    
    <h2><?php the_title()?></h2><br>
        <?php the_content();?>
        
    <?php endwhile;?>
</div>


<?php get_footer()?>
