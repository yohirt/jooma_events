<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_ticketbooking
 */
defined('_JEXEC') or die;
$controller = JControllerLegacy::getInstance('TicketBooking');

$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

$controller->redirect();
