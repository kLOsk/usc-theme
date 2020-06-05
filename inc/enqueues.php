<?php
/*
 * Enqueues
 */

if ( ! function_exists('usct_enqueues') ) {
	function usct_enqueues() {

		// Styles

    /* optional add bootstrap */
		//wp_register_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', false, '4.4.1', null);
		//wp_enqueue_style('bootstrap4');

    /* optional add fontawesome */
		//wp_register_style('fontawesome5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css', false, '5.11.2', null);
		//wp_enqueue_style('fontawesome5');

		wp_register_style(CHILD_THEME_NAME, get_stylesheet_directory_uri() . '/assets/dist/css/style.css', false, CHILD_THEME_VERSION, 'all');
		wp_enqueue_style(CHILD_THEME_NAME);

    //wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

		// Scripts

		//wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		//wp_enqueue_script('modernizr');

		//wp_register_script('jquery-3.4.1', 'https://code.jquery.com/jquery-3.4.1.min.js', false, '3.4.1', true);
		//wp_enqueue_script('jquery-3.4.1');

		//wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', false, '1.16.0', true);
		//wp_enqueue_script('popper');

		//wp_register_script('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', false, '4.4.1', true);
		//wp_enqueue_script('bootstrap4');

		wp_register_script(CHILD_THEME_NAME, get_template_directory_uri() . '/assets/dist/js/scripts.js', false, null, true);
		wp_enqueue_script(CHILD_THEME_NAME);

	}
}
add_action('wp_enqueue_scripts', 'usct_enqueues', 100);
