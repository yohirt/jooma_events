<?php

defined('_JEXEC') or die('Restricted access');

class TicketBookingModelTickets extends JModelList {

    public function getItems() { //pobbieranie informacji z paska adresowego
        $tickets = parent::getItems();
        foreach ($tickets as $ticket) {
            $ticket->url = "index.php?option=com_ticketbooking&task=ticket.edit&ID_biletu=" . $ticket->ID_biletu;
        }
        return $tickets;
    }

    public function getListQuery() {
        $query = parent::getListQuery();
        $query->select('*')
                ->from('#__rezerwacja_miejsc_bilety');
        echo 'Model Events getListQuery';
        return $query;
    }

}
