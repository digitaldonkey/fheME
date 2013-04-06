<?php

/**
 *  This file is part of ubiquitous.

 *  ubiquitous is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.

 *  ubiquitous is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.

 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses></http:>.
 * 
 *  2007 - 2012, Rainer Furtmeier - Rainer@Furtmeier.de
 */

session_name("ExtConnpPJob");
require_once realpath(dirname(__FILE__) . "/../../system/connect.php");
$absolutePathToPhynx = realpath(dirname(__FILE__) . "/../../") . "/";

$E = new ExtConn($absolutePathToPhynx);

$E->addClassPath($absolutePathToPhynx . "/ubiquitous/xCal/");
$E->addClassPath($absolutePathToPhynx . "/ubiquitous/Sync/");

$E->useDefaultMySQLData();

$userToken = $_GET["auth_token"];
$cutoffDatePast = $_GET["cutoff_past"];
$cutoffDateFuture = $_GET["cutoff_future"];

if (!preg_match("/^[a-z0-9]+$/i", $userToken))
	die("incorrect login information");

if (!preg_match("/^[0-9]*$/", $cutoffDatePast))
	die("incorrect date format");

if (!preg_match("/^[0-9]*$/i", $cutoffDateFuture))
	die("incorrect date format");

if (empty($cutoffDatePast))
	$cutoffDatePast = time() - (14 * 24 * 3600);

if (empty($cutoffDateFuture))
	$cutoffDateFuture = time() + (84 * 24 * 3600);

if (file_exists($absolutePathToPhynx . "/ubiquitous/Sync/mSync.class.php"))
	require_once($absolutePathToPhynx . "/ubiquitous/Sync/mSync.class.php");

$user = mSync::getUserByToken($userToken);
$E->login($user->A("username"), $user->A("SHApassword"));

$calendar = mTodoGUI::getCalendarData($cutoffDatePast, $cutoffDateFuture);
$events = array();
foreach ($calendar->getEventsList() as $calendarEvent) {
	$events[] = $calendarEvent->toXCal();
}
echo xCalUtil::getXCal($events);
$E->cleanUp();