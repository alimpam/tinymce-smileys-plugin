<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Editors_Buttons.JDragDrop
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Smileys Editors_Buttons Plugin
 *
 * @since  1.0
 */
class PlgEditors_ButtonsSmileys extends JPlugin
{
/**
 * Plugin that extends TinyMCE-Editor with JDragDrop
 *
 * @return string
 *
 * @since version
 */
	public function onLoadTinymcePlugin()
	{

		return 'smileys';
	}
}
