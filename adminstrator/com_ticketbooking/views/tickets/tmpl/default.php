<?php
defined('_JEXEC') or die('Restricted access');

/**
 * @package     Joomla.Administrator
 * @subpackage  com_ticketbooking
 */
?>

<form action="index.php?option=com_ticketbooking&view=tickets" method="post" name="adminForm" id="adminForm">
    <table class="adminevents">
        <thead>
            <tr>
                <th><?php echo JText::_('#'); ?></th>
                <th>
                    <?php
                    echo JHtml::_('grid.checkall');
                    ?>
                </th>
                <th><?php echo JText::_('COM_TICKETBOOKING_EVENT_NAME'); ?></th>
                <th><?php echo JText::_('COM_TICKETBOOKING_EVENT_DESC'); ?></th>
                <th><?php echo JText::_('JSTAUS'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?PHP
            foreach ($this->tickets as $i => $ticket):
                $link = JRoute::_('index.php?option=com_helloworld&task=helloworld.edit&id=' . $ticket->ID_biletu);
                ?>
                <tr>
                    <td><?php echo $i//$this->pagination->getRowOffset($i);   ?></td>

                    <td>
    <?php echo JHtml::_('grid.id', $i, $ticket->bilet); ?>
                    </td>
                    <td>
    <?PHP echo $this->escape($ticket->bilet) ?>
                    </td>
                    <td>
    <?PHP echo $this->escape($ticket->bilet) ?>
                    </td>
                    <td>
    <?php echo JHtml::_('jgrid.published', $ticket->published, $i, 'tickets.', true); ?>
                    </td>
                </tr>
<?php endforeach; ?>
        </tbody>
    </table>


    <input type="hidden" name="task" value=""/>
    <input type="hidden" name="boxchecked" value="0"/>
<?php echo JHtml::_('form.token'); ?>



</form>

