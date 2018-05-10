<?php
defined('_JEXEC') or die('Restricted access');
$dokument = JFactory::getDocument();
$dokument->addStyleSheet("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css");
$dokument->addStyleSheet("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
$dokument->addStyleSheet(JURI::base() . 'media/com_ticketbooking/css/style.css');
?>

<!-- <div class="container"> -->
<div class="erte_events">
    <div class="row" >
        <div class="col-md-12" ><h1><?php echo $this->header ?></h1></div>
    </div>

    <?php if ($this->params->get('list_style') == 'list'): ?>
        <?php
        foreach ($this->events as $event): $id = $event->wydarzenieID;
            $exist_image = $this->escape($event->image_event);
            ?>
            <div class="row">
                <div class="col-md-4 event_img">
                    <?php
                    if (($this->escape($event->image_event) == "-1" )or ( $this->escape($event->image_event) == "" )) {
                        ?>
                        <img src="components/com_ticketbooking/images/defaulttb.jpg">

                        <?php
                    } else {
                        ?>           
                                                <!--<img src="components/com_ticketbooking/images/...<?php // echo $this->escape($event->image_event);   ?>">-->
                        <img src="<?php echo $this->escape($event->image_event); ?>">
                    <?php } ?>
                </div>
                <div class="col-md-8 event_info">
                    <h3>
                        <a href="index.php?option=com_ticketbooking&view=event&id=<?php echo $id; ?>">
                            <?php echo $this->escape($event->nazwa_wydarzenia) ?>
                        </a>
                    </h3> 
                    <ul>
                        <li>
                            <a href="index.php?option=com_ticketbooking&view=event&id=<?php echo $id; ?>">
                                <?php echo $this->escape($event->miejsce_wydarzenia) ?>
                            </a>
                        </li> 
                        <li>
                            <a href="index.php?option=com_ticketbooking&view=event&id=<?php echo $id; ?>">
                                <?php echo $this->escape($event->czas_wydarzenia) ?>
                            </a>
                        </li> 
                        <li>
                            <a href="index.php?option=com_ticketbooking&view=event&id=<?php echo $id; ?>">
                                <?php echo $this->escape($event->data_wydarzenia) ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        <?php endforeach ?>
    <?php else: ?>
    <?php endif ?>
</div>
