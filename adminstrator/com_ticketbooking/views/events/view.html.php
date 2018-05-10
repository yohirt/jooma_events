<?php

defined('_JEXEC') or die('Restricted access');

class TicketBookingViewEvents extends JViewLegacy {

    protected $events;
    protected $params;
    protected $pagination;
    protected $state;

    public function display($tpl = null) {
        $this->events = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->state = $this->get('state');

        $this->filterForm = $this->get('FilterForm');
        $this->activeFilters = $this->get('ActiveFilters');
        $this->addToolbar();
        parent::display($tpl);
    }

    public function addToolbar() {
        JToolbarHelper::title(JText::_("COM_TICKETBOOKING_TITLE_EVENTS"));
        JToolbarHelper::addNew('event.add');
        JToolBarHelper::editList('event.edit');
        JToolBarHelper::publishList('events.publish');
        JToolBarHelper::unpublishList('events.unpublish');
        JToolBarHelper::archiveList('events.archive');
        JToolBarHelper::trash('events.trash');
        JToolBarHelper::deleteList('', 'events.delete'); // Will call the task/function "remove" in your controller
        JToolBarHelper::preferences('com_ticketbooking');
    }

}

?>