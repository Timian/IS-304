<?php get_header()?>
<?php get_sidebar()?>

<div id="content">
    
    <?php while(have_posts()): the_post()?>
    <h3><?php the_title()?></h3> <br>
         <?php the_content();?>
    <?php endwhile;?><br><br>
<<<<<<< HEAD
        <?php comments_template('', true);?>
=======
    <?php comments_template('', true);?>
>>>>>>> a68d8dafdca8595bb28cb963c83ca68c95cbdf67
</div>


<?php get_footer()?>

