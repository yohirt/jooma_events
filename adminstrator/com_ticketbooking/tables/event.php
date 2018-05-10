<?php

defined('_JEXEC') or die('Restricted access');

class TicketBookingTableEvent extends JTable {

    function __construct(&$db) {
        parent::__construct('#__rezerwacja_miejsc_wydarzenie', 'wydarzenieID', $db);
    }

}
