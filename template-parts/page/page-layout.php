<?php
/**
 * Template for Single post
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2017, Astra
 * @link        http://wpastra.com/
 * @since       Astra 1.0.0
 */

?>

<?php

add_action( 'astra_entry_content', 'astra_page_content', 10 );

add_action( 'astra_entry_page_header_content', 'astra_entry_page_header_the_image', 5 );
add_action( 'astra_entry_page_header_content', 'astra_entry_page_header_the_title', 10 );

add_action( 'astra_entry_page_content_link_pages', 'astra_entry_page_content_the_link_pages', 10 );
add_action( 'astra_entry_page_edit_post_link', 'astra_entry_page_the_edit_post_link', 10 );

?>

<header class="entry-header <?php astra_entry_header_class(); ?>">

	<?php astra_entry_page_header_content(); ?>
</header><!-- .entry-header -->

<div <?php astra_attr( 'entry-content', 'page' ); ?> class="entry-content clear" >

	<?php astra_entry_content_before(); ?>

	<?php astra_entry_content(); ?>

	<?php astra_entry_content_after(); ?>

	<?php astra_entry_page_content_link_pages(); ?>

</div><!-- .entry-content .clear -->

<?php astra_entry_page_edit_post_link(); ?>