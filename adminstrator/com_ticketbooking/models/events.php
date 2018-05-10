<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_ticketbooking
 */

defined('_JEXEC') or die('Restricted access');

class TicketBookingModelEvents extends JModelList {

    public function getItems() { //pobbieranie informacji z paska adresowego
        $events = parent::getItems();
        foreach ($events as &$event) {
            $event->url = "index.php?option=com_ticketbooking&task=events.edit&" . $event->wydarzenieID;
        }
        return $events;
    }

    public function getListQuery() {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $published = $this->getState('filter.published');
        $query->select('*')
                ->from($db->quoteName('#__rezerwacja_miejsc_wydarzenie'));
        $published = $this->getState('filter.published');
        if (is_numeric($published)) {
            $query->where('published = ' . (int) $published);
        } elseif ($published === '') {
            $query->where('(published IN (0, 1))');
        }

        $search = $this->getState('filter.search');
        if (!empty($search)) {
            $search = '%' . $db->escape($search, true) . '%';
            $col_search = "(nazwa_wydarzenia LIKE '{$search}')";
            $query->where($col_search);
        }

        // Add the list ordering clause.
        $orderCol = $this->state->get('list.ordering', 'czas_wydarzenia');
        $orderDirn = $this->state->get('list.direction', 'asc');
        $query->order($db->escape($orderCol) . ' ' . $db->escape($orderDirn));
        return $query;
    }

    protected function populateState($ordering = null, $direction = null) {
        $published = $this->getUserStateFromRequest($this->context . '.filter.published', 'filter_published');
        $this->setState('filter.published', $published);

        $search = $this->getUserStateFromRequest($this->context . '.filter.search', 'filter_search');
        $this->setState('filter.search', $search);
        parent::populateState($ordering, $direction);
    }

}
