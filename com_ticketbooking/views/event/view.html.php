<?php

defined('_JEXEC') or die('Restricted access');

class TicketBookingViewEvent extends JViewLegacy {

    protected $event;
    protected $params;

    public function display($tpl = null) {

        $this->event = $this->get('Item');
        $this->params = JFactory::getApplication()->getParams();
        parent::display($tpl);
    }

}

?>