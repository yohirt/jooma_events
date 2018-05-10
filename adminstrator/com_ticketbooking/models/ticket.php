<?php
defined('_JEXEC') or die('Restricted access');
echo "model tickets<br>";
class TicketBookingModelTicket  extends JModelAdmin {
    public function getTable($type = 'Ticket', $prefix = 'TicketBookingTable', $config = array()) {
        return JTable::getInstance($type, $prefix, $config);        
    }
    
    public function getForm($data = array(), $loadData = TRUE) {
        $form = $this->loadForm();
        return $form;
        
    }
}
