<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_ticketbooking
 */
defined('_JEXEC') or die('Restricted access');

class TicketBookingViewTickets extends JViewLegacy {

    protected $tickets;

    public function display($tpl = null) {
        $this->tickets = $this->get('Items');
        parent::display($tpl);
    }

}
