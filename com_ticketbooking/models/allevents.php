<?php

defined('_JEXEC') or die('Restricted access');

class TicketBookingModelAllevents extends JModelList {

    public function getListQuery() {
        $query = parent::getListQuery();
        $query->select('*')
                ->from('#__rezerwacja_miejsc_wydarzenie')
                ->where('published = 1')
                ->order('data_wydarzenia ASC');
        return $query;
    }

}
