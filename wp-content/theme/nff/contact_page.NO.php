<?php

/*

Template Name: Kontakt Oss (norsk)

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

        <br>

                     <form id="mailform" method="get" action='...\mailform.php' enctype="multipart/form-data">

  

  Navn: <input name="name" type="text" required aria-required="true" aria-describedby="name-format" required pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" title="Fornavn Etternavn"><br/>

  </br>

  

  Email: <input name="email" type="email" id="email" required aria-required="true" class="required email" title="Eksempel: Gunnar@hotmail.com"><br/>

  </br>

 

 Melding:<br />

  <textarea maxlength="1000" name="message" rows="15" cols="40" required aria-required="true" required pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" ></textarea>

  </br>

  </br>

  <input type="submit" value="Send!"/>

 </form>

 

 

</div>





<?php get_footer()?>

