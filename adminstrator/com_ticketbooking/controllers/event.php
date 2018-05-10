<?php

defined('_JEXEC') or die('Restricted access');

/**
 * @package     Joomla.Administrator
 * @subpackage  com_ticketbooking
 */

class TicketBookingControllerEvent extends JControllerForm {

    protected $view_list = 'events';

    public function getModel($name = 'Event', $prefix = 'TicketBookingModel', $config = array('ignore_request' => true)) {
        $model = parent::getModel($name, $prefix, $config);
        return $model;
    }

}
