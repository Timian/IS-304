<?php get_header()?>
<?php get_sidebar()?>

<div id="content">
<div id ="textcontent">
    <?php while(have_posts()): the_post()?>
<?php global $more;	$more = 0;?>
    <h2><?php the_title()?></h2><br>
        <?php the_content();?>
        
    <?php endwhile;?>
</div>
</div>

<?php get_footer()?>
