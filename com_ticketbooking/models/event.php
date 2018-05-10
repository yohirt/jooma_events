<?php

defined('_JEXEC') or die('Restricted access');

class TicketBookingModelEvent extends JModelLegacy {

    //    getItem pobira dane z paska adresowego
    public function getItem() {
        $id_sali = JRequest::getInt('id');

        $row = JTable::getInstance('event', 'TicketBookingTable');
        $row->load($id_sali);
        return $row;
    }

}
