<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if(is_front_page() || is_home()){ echo get_bloginfo('name'); } else{ echo wp_title(''); }?></title>
<link rel='stylesheet' href='<?php bloginfo('stylesheet_url'); ?>' type='text/css' media='all' />
<?php wp_head(); ?>

</head>
<body>

<header>
    <?php wp_nav_menu(); ?>
</header>

<content>
<?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
?>
        <a href="<?php the_permalink(); ?>" ?>
            <h1><?php the_title(); ?></h1>
        </a>
        
        <?php the_content(); ?>
<?php      
    } 
} 
?>
</content>

<?php wp_footer(); ?>
</body>
</html>