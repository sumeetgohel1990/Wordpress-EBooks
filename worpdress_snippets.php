<?php
 
/******* create menu *********/
 
                        $defaults = array(
                            'theme_location' => 'primary_menu',
                            'menu' => 'Top Menu',
                            'container' => 'ul',
                            'container_class' => '',
                            'container_id' => '',
                            'menu_class' => 'nav-list',
                            'menu_id' => '',
                            'echo' => true,
                            'fallback_cb' => 'wp_page_menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 0,
                            'walker' => ''
                        );
                        wp_nav_menu($defaults);
                         
/** Menu class **/
	function my_special_nav_class( $classes, $item ) {
  
        $classes[] = 'nav-item';
    return $classes;

}
add_filter( 'nav_menu_css_class', 'my_special_nav_class', 10, 2 );

/********* active menu class  *****/
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
/********* create template *******/
/*
Template Name: My Custom Page
*/


/****** contact form 7 add class to form ***/

add_filter( 'wpcf7_form_class_attr', 'your_custom_form_class_attr' );

function your_custom_form_class_attr( $class ) {
	$class .= ' form contact-form';
	return $class;
}






?>


