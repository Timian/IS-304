<?php get_header()?>
<?php get_sidebar()?>
<div id="content">
    
    <?php while(have_posts()): the_post()?>
         <h2><?php the_title()?></h2>
         <?php the_content();?>
    <?php endwhile;?><br><br>
    <?php comments_template('', true);?>
</div>


<?php get_footer()?>

