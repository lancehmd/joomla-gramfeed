<?php
/**
 * @package		gramFeed Module
 * @author		Lance Hammond
 *
 * @copyright	Copyright (C) 2014 Lance Hammond. All Rights Reserved
 * @license		http://www.gnu.org/licenses/gpl-3.0.html
**/

//no direct access
defined( '_JEXEC' ) or die( 'Restricted Area' );

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_gramfeed', $params->get('layout', 'default'));
