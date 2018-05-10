<?php
defined('_JEXEC') or die;
?>
<form action="index.php?option=com_ticketbooking&id=<?php echo $this->event->wydarzenieID ?>" method="post" class="form-validate" name="adminForm">
    
    
    
    <div class="width-100 fltlft">
        <fieldset class="adminform">
            <h1>Admin form tmpl/edit.php</h1>
            <legend><?php echo JText::_('COM_TICKETBOOKING_NAME_EVENTS'); ?></legend>
            <div class="row-fluid">
                <div class="span6">
                    <?php foreach ($this->form->getFieldset('basic') as $field): ?>
                        <div class="control-group">
                            <div class="control-label"><?php echo $field->label; ?></div>
                            <div class="controls"><?php echo $field->input; ?></div>
                        </div>
                    <?php endforeach; ?>
                <div>
                
                <div class="clr"></div>
                <?php echo $this->form->getLabel('opis_wydarzenia'); ?>
                <div class="clr"></div>
                <?php echo $this->form->getInput('opis_wydarzenia'); ?>
            <div>
        </fieldset>
    <div>
    
    
    
    <input type="hidden" name="task" value="event.edit"/>
    <?php echo JHtml::_('form.token'); ?>
</form>

