<?php

register_sidebar(array(
    'name' => __('1st riht sidebar'),
    'id' => 'first-right-sidebar',
    'description' => 'the second top bar',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
    ));


register_sidebar(array(
    'name' => __('1top sidebar'),
    'id' => 'first-top-sidebar',
    'description' => 'the first top bar',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
    ));

//gjør slik at kun deler av en lang tekst blir visst. den gir mulighet for lesmer//
function intro_text($length) {
global $post;
$text = get_the_excerpt($post->ID);
if (strlen($text) > $length) {
$text = substr($text,0,strpos($text,' ',$length)) . ' ... <a href="' . get_permalink() . '">[ Les mer ]</a>'; } ;
return apply_filters('the_excerpt',$text);
};

add_theme_support( 'menus' );

function setWP_Query($args){
return new WP_Query($args);
}
