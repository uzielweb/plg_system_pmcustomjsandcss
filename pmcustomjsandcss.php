<?php
/**
 * @copyright	Copyright (c) 2021 Ponto Mega. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * system - PM Custom JS and CSS Plugin
 *
 * @package		Joomla.Plugin
 * @subpakage	PontoMega.PMCustomJSandCSS
 */
class plgsystemPMCustomJSandCSS extends JPlugin {

	/**
	 * Constructor.
	 *
	 * @param 	$subject
	 * @param	array $config
	 */
	function __construct(&$subject, $config = array()) {
		// call parent constructor
		parent::__construct($subject, $config);
	}
	
}