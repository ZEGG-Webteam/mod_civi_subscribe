<?php
/**
 * CiviCRM Newsletter Subscribe Module Entry Point
 *
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * mod_civi_subscription is free software. This version may have been modified 
 * pursuant to the GNU General Public License, and as distributed it includes 
 * or is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

/**
 * This retrieves the lang parameter we stored earlier. Note the second part
 * which states to use the default value of 1 if the parameter cannot be
 * retrieved for some reason
 **/

//$language = $params->get('lang', '1');
//$xyz      = modCiviSubscripeHelper::getXyz( $language );

require JModuleHelper::getLayoutPath('mod_civi_subscribe'); ?>
