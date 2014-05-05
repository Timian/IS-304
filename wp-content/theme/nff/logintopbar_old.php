<div id="loginbar">
 
        <div id="logincontent">
		
						<?php if (!is_user_logged_in()) {
  echo "<h4> Logg inn </h4>";
	echo "<br />";
	echo wp_register();
	echo "<br />";
	echo wp_login_form();
	echo "<br />";
	//echo "Facebook/Google:";
}
 else {
	 $url = wp_logout_url(get_permalink());
	 echo "<h3><a href='$url' title='Logout'>Logg ut<br />Kirjaudu ulos</a></h3>";
 } 
 ?>
		<?php dynamic_sidebar('first-top-sidebar');?>

        </div>
             
</div>