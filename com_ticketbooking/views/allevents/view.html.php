<?php

defined('_JEXEC') or die('Restricted access');

class TicketBookingViewAllevents extends JViewLegacy {

    protected $header;
    protected $events;
    protected $params;

    public function display($tpl = null) {
        $this->header = "Lista wszystkich wydarzeń";
        $this->events = $this->get('Items');
        $this->params = JFactory::getApplication()->getParams();
        parent::display($tpl);
    }

}

?>