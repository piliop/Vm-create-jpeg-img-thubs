<?php
defined('_JEXEC') or die;

/**
 * Example system plugin
 *
 * @since  1.0
 */
class plgSystemImg2thumb extends JPlugin {

	public function __construct(&$subject, $config) {
		parent::__construct($subject, $config);
  }
  
  public function onAfterRoute() {
    $app = JFactory::getApplication();
    $val=JRequest::getCMD('option');
    if('com_virtuemart' == JRequest::getCMD('option') && $app->isAdmin()) {
        require_once(dirname(__FILE__) . '/helper/helperImg2thumb.php');
    }
} 

}