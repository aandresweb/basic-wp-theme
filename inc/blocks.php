<?php

add_action("acf/init", "dn_init_block_types");
function dn_init_block_types() {
	if( function_exists("acf_register_block_type") ) {

		acf_register_block_type([
			"name" => "slider",
			"title" => "Slider",
			"description" => "Slider",
			"render_template" => "template-parts/blocks/slider.php",
			"category" => "formatting",
			"icon" => "admin-comments",
		]);


		acf_register_block_type([
			"name" => "home-intro",
			"title" => "Home Intro",
			"description" => "Display introduction in home page",
			"render_template" => "template-parts/blocks/home-intro.php",
			"category" => "formatting",
			"icon" => "admin-comments",
		]);


		acf_register_block_type([
			"name" => "portfolio",
			"title" => "Portfolio",
			"description" => "Display all portfolio projects",
			"render_template" => "template-parts/blocks/portfolio.php",
			"category" => "formatting",
			"icon" => "admin-comments",
		]);


		acf_register_block_type([
			"name" => "banner-pattern",
			"title" => "Banner Pattern",
			"description" => "A banner with a pattern",
			"render_template" => "template-parts/blocks/banner-pattern.php",
			"category" => "formatting",
			"icon" => "admin-comments",
		]);

		acf_register_block_type([
			"name" => "header-text",
			"title" => "Header Text",
			"description" => "A block of text to header page",
			"render_template" => "template-parts/blocks/header-text.php",
			"category" => "formatting",
			"icon" => "admin-comments",
		]);


		acf_register_block_type([
			"name" => "image-text-section",
			"title" => "Image Text Section",
			"description" => "An image in a side and text",
			"render_template" => "template-parts/blocks/image-text-section.php",
			"category" => "formatting",
			"icon" => "admin-comments",
		]);


		acf_register_block_type([
			"name" => "team",
			"title" => "Team",
			"description" => "A section to show team members",
			"render_template" => "template-parts/blocks/team.php",
			"category" => "formatting",
			"icon" => "admin-comments",
		]);


		acf_register_block_type([
			"name" => "partners",
			"title" => "Partners",
			"description" => "A slider to show partners",
			"render_template" => "template-parts/blocks/partners.php",
			"category" => "formatting",
			"icon" => "admin-comments",
		]);


		acf_register_block_type([
			"name" => "services",
			"title" => "Services",
			"description" => "A section to show services",
			"render_template" => "template-parts/blocks/services.php",
			"category" => "formatting",
			"icon" => "admin-comments",
		]);


		acf_register_block_type([
			"name" => "header-title-text",
			"title" => "Header Title Text",
			"description" => "A section to show a title with text",
			"render_template" => "template-parts/blocks/header-title-text.php",
			"category" => "formatting",
			"icon" => "admin-comments",
		]);

		acf_register_block_type([
			"name" => "contact",
			"title" => "Contact",
			"description" => "A section to show a contact form",
			"render_template" => "template-parts/blocks/contact.php",
			"category" => "formatting",
			"icon" => "admin-comments",
		]);


	}
}
