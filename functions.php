<?php 
	if ( function_exists('register_sidebar') )
		register_sidebar(array('name'=>'MiddleSidebar',
		'before_widget' => '<li class="widget">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h3>',
		));

?>