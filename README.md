# Blank Starter WordPress Theme


**Extremely** light and blank WordPress Theme

- index.php
- functions.php
- style.css

If you dont know how is this theme possible you need to learn [WordPress Template Hierarchy](https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png)


Features
- Menu
- Posts

😊



> There is lots of optimization and cleaning on functions.php :)
> 
> I always remove emojis and hide version. 
> 
> Hiding WordPress version is small but effective for security.

```
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action ('wp_head', 'rsd_link');
remove_action ('wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'wp_generator');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
```
