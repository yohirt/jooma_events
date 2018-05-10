<?php

defined('_JEXEC') or die('Restricted access');

class TicketBookingViewEvent extends JViewLegacy {
    //protected $event;
    protected $form = null;

    public function display($tpl = null) {
        echo "view.html events<br>";        
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');

        
        
        $this->addToolbar();
        parent::display($tpl);
    }

    public function addToolbar() {
//        if ($this->event->wydarzenieID) {
//            JToolbarHelper::title(JText::_("COM_TICKETBOOKING_EDIT_EVENTS"));
//        } else {
//            JToolbarHelper::title(JText::_("COM_TICKETBOOKING_ADD_EVENTS"));
//        }
        $input = JFactory::getApplication()->input;
        $input->set('hidemainmenu', true);
        JToolbarHelper::addNew('event.add');
//        JToolbarHelper::apply('event.apply');
        JToolBarHelper::save('event.save');//, 'JTOOLBAR_APPLY');
//        JToolbarHelper::save('event.save');//, 'JTOOLBAR_SAVE');
        //JToolbarHelper::apply('newsfeed.apply');
	//JToolbarHelper::save('newsfeed.save');
//        JToolbarHelper::save2new('event.save2new', 'JTOOLBAR_SAVE_AND_NEW');
//        JToolbarHelper::cancel('event.cancel');
    }
}
?>