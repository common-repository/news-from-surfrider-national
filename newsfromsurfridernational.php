<?php
/**
 * Plugin Name: News From Surfrider National
 * Description: Provides a Widget to display news from the Surfrider Foundation National Office (http://www.surfrider.org/)
 * Version: 1.0
 * Author: Christopher Wilson (cwilson@surfrider.org)
 * License: GPL2
 */

class HQNewsWidget extends WP_Widget {

	function HQNewsWidget() {
		// Instantiate the parent object
		parent::__construct( false, 'News From Surfrider National' );
	}

	function widget( $args, $instance ) {
		// Widget output
		echo '<div class="widget"><h3>News From Surfrider HQ</h3>
		<SCRIPT LANGUAGE= "JavaScript">
		function httpGet(theUrl)
    		{
    			var xmlHttp = null;
    			xmlHttp = new XMLHttpRequest();
    			xmlHttp.open( "GET", theUrl, false );
    			xmlHttp.send( null );
    			return xmlHttp.responseText;
    		}
		theText = httpGet("' . plugins_url( 'hqnews.php' , __FILE__ ) . '");
		document.write(theText);
		</SCRIPT>
		</div>';

	}
}

function newsfromsurfridernational_register_widgets() {
	register_widget( 'HQNewsWidget' );
}

add_action( 'widgets_init', 'newsfromsurfridernational_register_widgets' );
