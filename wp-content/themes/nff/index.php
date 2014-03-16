<?php get_header()?>
<?php get_sidebar()?>
<div id="left">
    
    <?php while(have_posts()): the_post()?>
    <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
        <?php the_content(__('continue reading'));?>
        
    <?php endwhile;?>
</div>



<?php get_footer()?>
