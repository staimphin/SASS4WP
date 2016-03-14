<?php 
 /*
Plugin Name:  SASS4WP
Plugin URI: 
Description:SASS COMPILER for Wordpress
Version: 1.1
Author: Gregory Staimphin
Author email: gregory.staimphin@free.fr
Author URI: 
License: GPLv2
*/
/*  Copyright 2015  STAIMPHIN GREGORY  (email : g_staimphin@sogo-printing.com)
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
/*
Version history
 v 1.0: initial release
 V1.1: Automatically guess wordpress configurations options:
 	- Is not theme specific anymore: , and allows to work on  
*/
/*===settings ==*/
//Path to  SASS class and SCSS 
$SASS_BASE=$_SERVER['DOCUMENT_ROOT']."/sass/";
//Allows to work on a specific theme instead of the current one.
$specific='';
//automatically guess the theme in use
$projectName=($specific=='')?strtolower(get_current_theme() ) : $specific;
//css file name without extension
$CSSName="responsive";
//Retrieve current path
$base= dirname($_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF']);
//destination path for the generated CSS 
$destination=str_replace('/var/www/','', $base)."/wp-content/themes/$projectName/css/";
	
//Check if the SCSS folder exists 
if(file_exists($SASS_BASE.'project/'.$projectName)){
	require $SASS_BASE."class/class_sass.php";
	require $SASS_BASE."class/class_reordercss.php";

	$SASS= new sass($projectName,$CSSName,$destination);
	
	$SASS->wp_sass();
	
}
