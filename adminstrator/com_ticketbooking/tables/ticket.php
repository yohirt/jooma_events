<?php

defined('_JEXEC') or die('Restricted access');

class TicketBookingTableTicket extends JTable {

    public function __construct(&$db) {
        parent::__construct('#__rezerwacja_miejsc_bilety', 'ID_biletu', $db);
        echo 'TicketBookingTableticket _constuct<br>';
    }

}
