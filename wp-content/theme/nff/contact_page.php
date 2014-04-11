<?php
/*
Template Name: contact
*/
?>

<?php get_header()?>
<?php get_sidebar()?>
<div id="picturecon"></div>
<div id="Contactus">
    
    <?php while(have_posts()): the_post()?>
    
        <h2><?php the_title()?></h2>
        <?php the_content();?>
        
    <?php endwhile;?>
                            <form>
                                Fornavn: <input type="text" name="firstname"><br>
                                Etternavn: <input type="text" name="lastname"><br>
                                E-post: <input type="email" name="email"><br>
                                <textarea name="messages">Skriv inn det du ønsker</textarea><br>
                                <input type="submit" value="Send">
                                <input type="reset" value="Slett innhold">

                            </form>
</div>


<?php get_footer()?>
