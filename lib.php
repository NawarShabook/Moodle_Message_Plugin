

<?php
//<!--this file Represent hooks-->
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
 * Plugin version and other meta-data are defined here.
 * @package     local_greetings
 * @copyright   2022 Nawar Shabook <nawarshabook@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

//in outputrenderers file get_plugins_with_function('before_footer', 'lib.php') exec this functions before footer
function local_message_before_footer(){
    //echo("hello nsh");

    //I have 3 notification type (success, warning, error)

    \core\notification::add('test message', \core\output\notification::NOTIFY_SUCCESS);
}