<?php get_header()?>
<?php get_sidebar()?>
<div id="left">
    
    <?php while(have_posts()): the_post()?>
    <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
        <?php echo intro_text(250); ?> <br>
        
    <?php endwhile;?>
</div>



<?php get_footer()?>
