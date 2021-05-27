<?php
if(!function_exists('them_theme_setup')):
    function them_theme_setup(){
        register_nav_menus([
            'podstawowy' => 'Menu pdstawowe',
            'buttonNav' => 'buttonNav'
        ]);
        
    }
endif;
add_action('after_setup_theme', 'them_theme_setup');

?>