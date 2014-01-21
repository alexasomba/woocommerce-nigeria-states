<?php
/*
Plugin Name: WooCommerce Nigeria States
Plugin URI: http://plugins.alexasomba.com/donate/
Description: A short plugin that adds Nigeria postal counties to WooCommerce's list of states.
Version: 1.0.0
Author: Alexander Asomba
Author URI: http://alexasomba.com/
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
GitHub Plugin URI: https://github.com/alexasomba/woocommerce-nigeria-states
*/
/**
 * Copyright (c) 2014 Alexander Asomba. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */
function wc_ng_counties_add_counties ( $states ) {

	$states ['NG' ] = array (
		'AB' => 'Abia' ,
		'FC' => 'Abuja' ,
		'AD' => 'Adamawa' ,
		'AK' => 'Akwa Ibom' ,
		'AN' => 'Anambra' ,
		'BA' => 'Bauchi' ,
		'BY' => 'Bayelsa' ,
		'BE' => 'Benue' ,
		'BO' => 'Borno' ,
		'CR' => 'Cross River' ,
		'DE' => 'Delta' ,
		'EB' => 'Ebonyi' ,
		'ED' => 'Edo' ,
		'EK' => 'Ekiti' ,
		'EN' => 'Enugu' ,
		'GO' => 'Gombe' ,
		'IM' => 'Imo' ,
		'JI' => 'Jigawa' ,
		'KD' => 'Kaduna' ,
		'KN' => 'Kano' ,
		'KT' => 'Katsina' ,
		'KE' => 'Kebbi' ,
		'KO' => 'Kogi' ,
		'KW' => 'Kwara' ,
		'LA' => 'Lagos' ,
		'NA' => 'Nasarawa' ,
		'NI' => 'Niger' ,
		'OG' => 'Ogun' ,
		'ON' => 'Ondo' ,
		'OS' => 'Osun' ,
		'OY' => 'Oyo' ,
		'PL' => 'Plateau' ,
		'RI' => 'Rivers' ,
		'SO' => 'Sokoto' ,
		'TA' => 'Taraba' ,
		'YO' => 'Yobe' ,
		'ZA' => 'Zamfara' ,
		);
	return $states;
	
}

add_filter( 'woocommerce_states' , 'wc_ng_counties_add_counties'  );
