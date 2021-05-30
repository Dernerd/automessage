<?php
/*
Plugin Name: Automessage
Plugin URI: http://n3rds.work
Description: Mit diesem Plugin können E-Mails geplant und an neue Benutzer gesendet werden.
Author: WMS N@W
Version: 2.4.5
Author URI: https://n3rds.work
Requires at least: 4.9
Textdomain: automessage
Domain Path: /languages
*/

/*
Copyright WMS N@W (https://n3rds.work)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License (Version 2 - GPLv2) as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
require 'external/psource-plugin-update/plugin-update-checker.php';
$MyUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://n3rds.work//wp-update-server/?action=get_metadata&slug=automessage', 
	__FILE__,
	'automessage' 
);

global $automessage_basename;
$automessage_basename = plugin_basename(__FILE__);

// Load the libraries
require_once('includes/config.php');
require_once('includes/functions.php');
require_once('classes/class.automessage.php');
require_once('classes/class.user.php');
// Set up our location
set_automessage_url(__FILE__);
set_automessage_dir(__FILE__);


// Instantiate the class
$automsg = new automessage();

?>
