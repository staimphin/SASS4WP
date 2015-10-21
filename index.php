<?php 
 /*
Plugin Name:  SASS4WP
Plugin URI: 
Description:SASS COMPILER for Wordpress
Version: 1.0
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
$SASS_BASE="/var/www/_tools/sass/";
require $SASS_BASE."class/class_sass.php";
require $SASS_BASE."class/class_reordercss.php";

$projectName="toyokoro_aisei";// $SASS_BASE."project/
$CSSName="responsive";
$destination="toyokoro-aioi/aioi/wp-content/themes/aioi/css/";
$SASS= new sass($projectName,$CSSName,$destination);
$SASS->wp_sass();
