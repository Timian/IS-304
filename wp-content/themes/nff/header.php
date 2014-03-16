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
        <h1><a href=""<?php home_url('/')?>"><?php bloginfo('name')?></a></h1>
    </header>
    
    <nav>
        <?php wp_nav_menu();?>
    </nav>
</html>

<div id="container"Z>