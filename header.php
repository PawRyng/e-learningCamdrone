<!DOCTYPE html>
<html style = "margin:0!important" lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url')?>/dist/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css">
    <?php if(is_front_page()){
        
        echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/fixMain.css">';
    }
    else{
        echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/dist/style2.css">';
    }
    ?>
    <title><?php echo bloginfo('name') ?></title>    
    <?php wp_head()?>
</head>
<body>
    <!-- <?php?> --> 
 <button class="burger">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>
<!-- <img src="<?php echo get_bloginfo('template_url')?>/logo.png" alt="logo"> -->
<?php wp_nav_menu(['theme_location' => 'podstawowy', 'fallback_cb' => false]);
if(!is_front_page()){
    echo "<div class = 'fixmen'></div>";
}


?> 
          
        
