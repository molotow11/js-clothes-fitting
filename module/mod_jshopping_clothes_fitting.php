<?php 

/*------------------------------------------------------------------------
# mod_jshopping_clothes_fitting - Extended Filter for Joomshopping
# ------------------------------------------------------------------------
# author    Andrey Miasoedov
# copyright Copyright (C) 2012 Joomcar.net. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://joomcar.net
# Technical Support: http://joomcar.net
-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// Define the DS constant under Joomla! 3.0
if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

require_once (dirname(__FILE__).DS.'helper.php');
$helper = new modJShopExtendedFilterHelper;
require_once(JPATH_ROOT."/components/com_jshopping/lib/factory.php");

JSFactory::loadLanguageFile();

// Main params
$moduleclass_sfx = $params->get('moduleclass_sfx', '');
$getTemplate = $params->get('getTemplate', 'Default');

require (JModuleHelper::getLayoutPath('mod_jshopping_clothes_fitting', $getTemplate.DS.'template'));


?>