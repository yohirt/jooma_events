<?php
defined('_JEXEC') or die;
/**
 * @package     Joomla.Administrator
 * @subpackage  com_ticketbooking
 */
JHtml::_('formbehavior.chosen', 'select'); //$listOrder=$ this->escape($this->state->get('list.ordering')); //$listDirn = $this->escape($this->state->get('list.direction'));  
?>

<form action="index.php?option=com_ticketbooking&view=events" method="post" id="adminForm" name="adminForm">
    <?php
    ?>

    <div class="filter-search btn-group pull-left">
        <label for="filter_search" class="element-invisible">
            <?php echo JText::_('JSEARCH_FILTER'); ?>
        </label>
        <input type="text" name="filter_search" id="filter_search"
               placeholder="<?php echo JText::_('JSEARCH_FILTER'); ?>"
               value="<?php echo $this->escape($this->state->get('filter.search')); ?>"
               title="<?php echo JText::_('JSEARCH_FILTER'); ?>"/>
    </div>
    <div class="btn-group pull-left">
        <button class="btn hasTooltip" type="submit"
                title="<?php echo JText::_('JSEARCH_FILTER_SUBMIT'); ?>">
            <i class="icon-search"></i></button>
        <button class="btn hasTooltip" id="clear-searchsearch-button" type="button" 
                onclick="document.getElementById('filter_search').value = '';this.form.submit();"
                title="<?php echo JText::_('JSEARCH_FILTER_CLEAR'); ?>">
            <i class="icon-remove"></i></button>
    </div>
    <div class="filter-select fltrt">
        <select name="filter_published" class="inutbox" onchange="this.form.submit()">
            <option value="">
                <?php echo JText::_('JOPTION_SELECT_PUBLISHED'); ?>
            </option>
            <?php echo JHtml::_('select.options', JHtml::_('jgrid.publishedOptions'), 'value', 'text', $this->state->get('filter.published'), true); ?>
        </select>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th width="">
                    <?php echo JText::_('COM_HELLOWORLD_NUM'); ?>
                </th>
                <th width="">
                    <?php echo JHtml::_('grid.checkall'); ?>
                </th>

                <!-- Nazwa wydarzenia -->
                <th width="">
                    <?php echo JText::_('COM_TICKETBOOKING_NAME_EVENTS'); ?>
                    <?php //echo JHtml::_( 'grid.sort', 'COM_HELLOWORLD_HELLOWORLDS_NAME', 'nazwa', $listDirn, $listOrder);   ?>
                </th>
                <!--Miejsce wydarzenia-->
                <th width="">
                    <?php echo JText::_('COM_TICKETBOOKING_SPACE_EVENTS'); ?>
                    <?php //echo JHtml::_( 'grid.sort', 'COM_HELLOWORLD_HELLOWORLDS_NAME', 'nazwa', $listDirn, $listOrder);   ?>
                </th>
                <!-- Obrazek -->
                <th width="">
                    <?php echo JText::_('COM_TICKETBOOKING_IMAGE_EVENTS'); ?>
                    <?php //echo JHtml::_( 'grid.sort', 'COM_HELLOWORLD_HELLOWORLDS_NAME', 'nazwa', $listDirn, $listOrder);   ?>
                </th>

                <!-- Czas wydarzenia-->
                <th width="">
                    <?php echo JText::_('COM_TICKETBOOKING_TIME_EVENTS'); ?>
                    <?php //echo JHtml::_( 'grid.sort', 'COM_HELLOWORLD_PUBLISHED', 'published', $listDirn, $listOrder);    ?>
                </th>

                <!-- Data wydarzenia -->
                <th width="">
                    <?php echo JText::_('COM_TICKETBOOKING_DATE_EVENTS'); ?>
                    <?php //echo JHtml::_( 'grid.sort', 'COM_HELLOWORLD_PUBLISHED', 'published', $listDirn, $listOrder);    ?>
                </th>
                <!-- Status -->
                <th width="">
                    <?php echo JText::_('JSTAUS'); ?>
                    <?php //echo JHtml::_( 'grid.sort', 'COM_HELLOWORLD_ID', 'id', $listDirn, $listOrder);    ?>
                </th>
            </tr>
        </thead>

        <tbody>
            <?php if (empty($this->items)) : ?>
                <?php foreach ($this->events as $i => $row) : $link = JRoute::_('index.php?option=com_ticketbooking&task=event.edit&wydarzenieID=' . $row->wydarzenieID); // $link = JRoute::_('index.php?option=com_helloworld&task=helloworld.edit&id=' . $row->id);    ?>
                    <tr>
                        <td align="center">
                            <?php echo $this->pagination->getRowOffset($i); ?></td>
                        <!-- grid.id -->
                        <td>
                            <?php echo JHtml::_('grid.id', $i, $row->wydarzenieID); ?>
                        </td>

                        <!-- Nazwa wydarzenia -->
                        <td align="center">
                            <a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_TICKETBOOKING_EDIT_NAME_EVENTS'); ?>">
                                <?php echo $row->nazwa_wydarzenia; ?>
                            </a>
                        </td>
                        <!-- Miejsce wydarzenia -->
                        <td align="center">
                            <a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_TICKETBOOKING_EDIT_NAME_EVENTS'); ?>">
                                <?php echo $row->miejsce_wydarzenia; ?>
                            </a>
                        </td>
                        <!-- obrazek -->
                        <td align="center">
                            <a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_TICKETBOOKING_EDIT_NAME_EVENTS'); ?>">
                                <?php $sciezka = "\components\com_ticketbooking\images\\"; ?>
                                <img src="<?php //echo(JURI:root(true). $sciezka.$row->image_event);     ?>">
                                <?php echo $row->image_event; ?>
                            </a>
                        </td>
                        <!--Czas wydarzenia-->
                        <td align="center">
                            <a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_TICKETBOOKING_EDIT_DATE_EVENTS'); ?>">
                                <?php echo $row->czas_wydarzenia; ?>
                            </a>
                        </td>
                        <!-- Data wydarzenia -->
                        <td align="center">
                            <a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_TICKETBOOKING_EDIT_DATE_EVENTS'); ?>">
                                <?php echo $row->data_wydarzenia; ?>
                            </a>
                        </td>
                        <!-- Status -->
                        <td align="center">
                            <?php echo JHtml::_('jgrid.published', $row->published, $i, 'events.', true); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="9"><?php echo $this->pagination->getListFooter(); ?></td>
            </tr>
        </tfoot>
    </table>
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="filter_order" value="<?php //echo $listOrder;          ?>" />
    <input type="hidden" name="filter_order_Dir" value="<?php //echo $listDirn;       ?>" />

    <input type="hidden" name="filter_order" value="<?php echo $this->sortColumn; ?>" />
    <input type="hidden" name="filter_order_Dir" value="<?php echo $this->sortDirection; ?>"
    <?php echo JHtml::_('form.token'); ?>
</form>