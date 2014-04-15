<?php get_header()?>
<?php get_sidebar()?>

<div id="content">
    
    <?php while(have_posts()): the_post()?>
    <h3><?php the_title()?></h3> <br>
         <?php the_content();?>
    <?php endwhile;?><br><br>
    <?php comments_template('', true);?>
</div>


<?php get_footer()?>

