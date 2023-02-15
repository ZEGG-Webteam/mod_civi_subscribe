<?php
/**
 * Helper class for CiviCRM Newsletter Subscribe module
 *
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE
 * mod_civi_subscribe is free software. This version may have been modified 
 * pursuant to the GNU General Public License, and as distributed it includes 
 * or is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModCiviSubscribeHelper
{
  /**
   * Add or update Contact in CiviCRM, matching by email, adding to given groups
   * 
   * @param string $email
   * @param string $name
   * @param integer|string|array $groups
   * 
   * @return boolean $success
   */
  public static function addSubscriber($params, $email, $name="", $groups="") {
    $api_url = $params->get('api_url');
    $api_key = $params->get('api_key');
    
//    echo('function addSubscriber(' . $email . '): api call: ' . $api_url . ' => create Contact <br>');
    
    return true;
  }
  
  /**
   * 
   * @param type $itemId
   */
  public static function redirect($itemId) {
    if ($itemId) {
//      die('redirect to: ' . JRoute::_("index.php?Itemid=" . $itemId));
    } else {
//      die('no redirection');
    }

  }
}
