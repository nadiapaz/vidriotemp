
 <?php 

function register_enqueue_style(){
$theme_data = wp_get_theme();

wp_register_style('mitema.css', 'https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700');

/*registando los estilos*/

wp_register_style('animate.css', get_theme_file_uri('/assets/vendor/css/animate.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('icomoon.css', get_theme_file_uri('/assets/vendor/css/icomoon.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('themify-icons.css', get_theme_file_uri('/assets/vendor/css/themify-icons.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap.css', get_theme_file_uri('/assets/vendor/css/bootstrap.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('carousel.min.css', get_theme_file_uri('/assets/vendor/css/owl.carousel.min.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('owl.theme.default.min.css', get_theme_file_uri('/assets/vendor/css/owl.theme.default.min.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('style.css', get_theme_file_uri('/assets/css/style.css'), null, $theme_data->get('Version'), 'screen');


wp_enqueue_style('mitema.css');
wp_enqueue_style('animate.css');
wp_enqueue_style('icomoon.css');
 wp_enqueue_style('themify-icons.css');
 wp_enqueue_style('bootstrap.css');
 wp_enqueue_style('carousel.min.css');
 wp_enqueue_style('owl.theme.default.min.css');
 wp_enqueue_style('style.css');

 
}
add_action('wp_enqueue_scripts', 'register_enqueue_style');



function register_enqueue_scripts(){
$theme_data = wp_get_theme();


wp_deregister_script('jquery');
wp_deregister_script('jquery_migrate');

/*registrando js*/
/* Registrando scripts */
 wp_register_script('modernizr', get_parent_theme_file_uri('/assets/vendor/js/modernizr-2.6.2.min.js'),
 '4.1.1',null, true);
 wp_register_script('jquery', get_parent_theme_file_uri('/assets/vendor/js/jquery.min.js'),
null, '3.2.1',true);
wp_register_script('jqueryeasing', get_parent_theme_file_uri('/assets/vendor/js/jquery.easing.1.3.js'),
'4.1.1',null, true);
wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'),
'4.1.1',null, true);
wp_register_script('waypoints', get_parent_theme_file_uri('/assets/vendor/js/jquery.waypoints.min.js'),
'4.1.1',null, true);
wp_register_script('carousel', get_parent_theme_file_uri('/assets/vendor/js/owl.carousel.min.js'),
'4.1.1',null, true);
wp_register_script('respond', get_parent_theme_file_uri('/assets/vendor/js/respond.min.js'),
'4.1.1',null, true);
wp_register_script('main', get_parent_theme_file_uri('/assets/js/main.js'),
'4.1.1',null, true);

 /* Estilos en cola */
 wp_enqueue_script('modernizr');
 wp_enqueue_script('jquery');
 wp_enqueue_script('jqueryeasing');
 wp_enqueue_script('bootstrap');
 wp_enqueue_script('waypoints');
 wp_enqueue_script('carousel');
 wp_enqueue_script('respond');
 wp_enqueue_script('main');

}
add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

/*registro de menú*/

function menus_setup() {
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu'),
      )
  );
}

add_action( 'after_setup_theme', 'menus_setup');

/*logo personalizable*/

function config_custom_logo() {
    add_theme_support( 'custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
    ));
  }
  add_action( 'after_setup_theme', 'config_custom_logo' );


?>