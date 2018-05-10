<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_ticketbooking
 */
// No direct access
defined('_JEXEC') or die;
?>
<form action="<?php echo JRoute::_('index.php?option=com_ticketbooking&layout=edit&wydarzenieID=' . (int) $this->item->wydarzenieID); ?>"
      method="post" name="adminForm" id="adminForm">
    <div class="form-horizontal">
        <fieldset class="adminform">
            <legend><?php echo JText::_('COM_TICKETBOOKING_EVENT_DETAILS'); ?></legend>
            <div class="row-fluid">
                <div class="span12">
                    <?php foreach ($this->form->getFieldset() as $field): ?>
                        <div class="control-group">
                            <div class="control-label"><?php echo $field->label; ?></div>
                            <div class="controls"><?php echo $field->input; ?></div>
                        </div>
                    <?php endforeach; ?>
                    <div>
                        <div>
                            </fieldset>
                            <div>
                                <input type="hidden" name="task" value="ticketbooking.edit" />
                                <?php echo JHtml::_('form.token'); ?>
                                </form>
