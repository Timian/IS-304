<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php bloginfo('title')?></title>
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>
        <?php wp_head()?>
    </head>
    <header>
        <h1><a href=""<?php home_url('/')?>><?php bloginfo('name')?></a></h1>
        <!-- denne må kobles opp mot server/database som er aktuell-->
        <div id='login' class="login"> Logg inn<br>
                <form>
                    Brukernavn: <input type="text" name="Brukernavn"><br> 
                    Passord: <input type="text" name="passord">
                    <input type="submit" name="LOGG INN">
                </form>
    </header>
    
    <nav>
        <?php wp_nav_menu();?>
    </nav>
</html>

<div id="container"Z>