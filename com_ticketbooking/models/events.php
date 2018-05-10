<?php

defined('_JEXEC') or die('Restricted access');

class TicketBookingModelEvents extends JModelList {

    public function getListQuery() {
        $query = parent::getListQuery();
        $query->select('*')
                ->from('#__rezerwacja_miejsc_wydarzenie')
                ->where('published = 1 and data_wydarzenia > CURRENT_DATE()')
                ->order('data_wydarzenia ASC');
        return $query;
    }

}
