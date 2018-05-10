<?php

defined('_JEXEC') or die('Restricted access');

class TicketBookingViewTicketBooking extends JViewLegacy {

    public $wydarzenia;

    function display($tpl = null) {
//             echo "wiev ticketbooking"  ;
        $this->wydarzenia = $this->get('Items');
        echo(var_dump($this->wydarzenia));
        if (count($errors = $this->get('Errors'))) {
            JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');

            return false;
        }

        // Display the view
        parent::display($tpl);
    }

}
