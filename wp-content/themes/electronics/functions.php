<?php 
    function custom_menu(){
        register_nav_menu('main_menu','Main Menu');
    }
    add_action('init','custom_menu');
?>