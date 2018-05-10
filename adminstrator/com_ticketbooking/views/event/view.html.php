<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_ticketbooking
 */
defined('_JEXEC') or die;

class TicketBookingViewEvent extends JViewLegacy {

    protected $form = null;

    public function display($tpl = null) {
        // Get the Data
        $form = $this->get('Form');
        $item = $this->get('Item');

        // Check for errors.
        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode('<br />', $errors));

            return false;
        }

        // Assign the Data
        $this->form = $form;
        $this->item = $item;

        // Set the toolbar
        $this->addToolBar();

        // Display the template
        parent::display($tpl);
    }

    protected function addToolBar() {
        $input = JFactory::getApplication()->input;

        // Hide Joomla Administrator Main menu
        $input->set('hidemainmenu', true);

        $isNew = ($this->item->wydarzenieID == 0);

        if ($isNew) {
            $title = JText::_('COM_HELLOWORLD_MANAGER_HELLOWORLD_NEW');
        } else {
            $title = JText::_('COM_HELLOWORLD_MANAGER_HELLOWORLD_EDIT');
        }

        JToolBarHelper::title($title, 'helloworld');
        JToolBarHelper::save('event.save');
        JToolBarHelper::cancel(
                'event.cancel', $isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE'
        );
    }

}
