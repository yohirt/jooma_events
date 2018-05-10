<?php
defined('_JEXEC') or die('Restricted access');
/**
 * @package     Joomla.Administrator
 * @subpackage  com_ticketbooking
 */
 

echo "model event admin<br>";
class TicketBookingModelEvent extends JModelAdmin {
    public function getTable($type = 'Event', $prefix ='TicketBookingTable', $config = array()) {
        return JTable::getInstance($type, $prefix, $config);
    }
    
    protected function loadFormData() {
        $data = JFactory::getApplication()->getUserState('com_ticketbooking.edit.event.data',array());
        if(empty($data)){
            $data = $this->getItem();
            return $data;
        }
    }
            
    public function getForm($data = array(), $loadData = true) //funkcja konieczna
    {
        $form = $this->loadForm('com_ticketbooking.event', 'event', array('control'=>'jform', 'load_data'=>$loadData));
        return $form;
    }
}
