<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * @package     Joomla.Administrator
 * @subpackage  com_ticketbooking
 */

class TicketBookingControllerEvents extends JControllerAdmin {

    public function getModel($name = 'Event', $prefix = 'TicketBookingModel', $config = array('ignore_request' => true)) {
        $model = parent::getModel($name, $prefix, $config);
        return $model;
    }

}
