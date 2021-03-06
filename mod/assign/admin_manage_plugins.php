<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Allows the admin to manage assignment plugins
 *
 * @package    mod_assign
 * @copyright 2012 NetSpot {@link http://www.netspot.com.au}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/** Include config.php */
require_once(dirname(__FILE__) . '/../../config.php');
/** Include adminlib.php */
require_once('adminlib.php');

// create the class for this controller
$pluginmanager = new assignment_plugin_manager(required_param('subtype', PARAM_PLUGIN));

$PAGE->set_context(get_system_context());

// execute the controller 
$pluginmanager->execute(optional_param('action', null, PARAM_PLUGIN), optional_param('plugin', null, PARAM_PLUGIN));
