<?php

defined('_JEXEC') or die('Restricted access');

class TicketBookingViewEvents extends JViewLegacy {

    protected $header;
    protected $events;
    protected $params;

    public function display($tpl = null) {
        $this->header = "Lista wydarzeń";
        $this->events = $this->get('Items');
        $this->params = JFactory::getApplication()->getParams();
        parent::display($tpl);
    }

}

?>