<?php get_header()?>
<?php get_sidebar()?>
<div id="left">
    
    <?php while(have_posts()): the_post()?>
    <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
        <?php echo intro_text(150); ?>
        
    <?php endwhile;?>
</div>



<?php get_footer()?>
