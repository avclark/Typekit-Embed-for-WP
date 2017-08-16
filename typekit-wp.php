<?php

/**
 * TypeKit Fonts
 */

function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/arf2unh.js');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );
function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
<?php }
}
add_action( 'wp_head', 'theme_typekit_inline' );