
<?php
get_header();
if(is_front_page()){?>
    <main>
        <h1>CAMDRONE</h1>
        <h2>E-learning</h2>
        <?php wp_nav_menu(['theme_location' => 'buttonNav', 'fallback_cb' => false]); ?>
    </main>
    <?php
}
else{
    the_content();
}
?>
   <?php 
    
    
    get_footer();
   ?>
   
