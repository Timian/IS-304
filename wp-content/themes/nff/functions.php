<?php

register_sidebar(array(
    'name' => __('1st riht sidebar'),
    'id' => 'first-right-sidebar',
    'description' => 'the second top bar',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
    ));

register_sidebar(array(
    'name' => __('2nd right sidebar'),
    'id' => 'second-right-sidebar',
    'description' => 'the second top bar',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
    ));

