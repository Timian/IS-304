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
<<<<<<< HEAD
        <?php comments_template('', true);?>
=======
    <?php comments_template('', true);?>
>>>>>>> a68d8dafdca8595bb28cb963c83ca68c95cbdf67
>>>>>>> a53c8d49f2420a80b9a606578ba442162b11b24c
</div>


<?php get_footer()?>

