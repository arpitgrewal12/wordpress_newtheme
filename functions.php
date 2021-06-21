<?php
	function load_css()
	{
		wp_enqueue_style('main_style', get_template_directory_uri().'/style.css',array(),false,'all');
		

	}

	add_action('wp_enqueue_scripts','load_css');
?>