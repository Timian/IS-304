<?php get_header()?>
<?php get_sidebar()?>

<div id="content">
<div id="textcontent">
 <?php while(have_posts()): the_post()?><?php ?>
    <h3><a href="<?php get_permalink() ?>"><?php the_title()?></a></h3> <br>
         <?php the_content();?>
         <br />
         <br />
         <h4>
         Skrevet av 
         <?php the_author_posts_link(); ?>
         den
         <?php the_date();?>
         </h4>
    <?php endwhile;?><br><br>
        <?php comments_template('', true);?>
</div>
</div>

<?php get_footer()?>