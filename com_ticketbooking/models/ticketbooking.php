<?php

defined('_JEXEC') or die('Restricted access');

class TicketBookingModelTicketBooking extends JModelItem {

    /**
     * @var string message
     */
    protected $message;

    /**
     * Get the message
     *
     * @return  string  The message to be displayed to the user
     */
    public function getListEvents() {
        $query = parent::getListEvents();
        $query->select('nazwa_wydarzenia, miejsce_wydarzenia, opis_wydarzenia, data_wydarzenia')
                ->from('#__rezerwacja_miejsc_wydarzenie');
        return $query;
    }

}
