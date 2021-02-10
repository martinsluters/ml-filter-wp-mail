<?php
/*
Plugin Name: Filter 'To' field of wp_mail function
Version: 0.1
*/

add_filter( 'wp_mail', 'ml_change_wp_mail_to_field', 99999, 1 );

function ml_change_wp_mail_to_field( $mail_args ) {
	$mail_args['to'] = '<EMAILPLACEHOLDER>';
	return $mail_args;
}
