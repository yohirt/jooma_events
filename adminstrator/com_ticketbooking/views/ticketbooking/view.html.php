<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_ticketbooking
 */

defined('_JEXEC') or die('Restricted access');

class TicketBookingViewTicketBooking extends JViewLegacy {

    protected $event;
    protected $form;

    public function display($tpl = null) {
        $this->addToolbar();
        parent::display($tpl);
    }

    public function addToolbar() {
        JToolbarHelper::apply('event.apply', 'JTOOLBAR_APPLY');
        JToolbarHelper::save('event.save', 'JTOOLBAR_SAVE');
        JToolbarHelper::save2new('event.save2new', 'JTOOLBAR_SAVE_AND_NEW');
        JToolbarHelper::cancel('event.cancel');
    }

}

?>