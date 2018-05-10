<?php
defined('_JEXEC') or die('Restricted access');
$dokument = JFactory::getDocument();
$dokument->addStyleSheet(JURI::base() . 'media/com_ticketbooking/css/style.css');
$dokument->addStyleSheet("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");

?>
<div class="">
    <div class="row-fluid header_event">
        <h1><?php echo $this->escape($this->event->nazwa_wydarzenia) ?></h1>
    </div>
    <div class="row-fluid dane_event">
        <div class="col-md-4"><?php echo $this->escape($this->event->data_wydarzenia) ?></div>
        <div class="col-md-4"><?php echo $this->escape($this->event->miejsce_wydarzenia) ?></div>
        <div class="col-md-4">godz: <?php echo $this->escape($this->event->czas_wydarzenia) ?></div>
    </div>
    <div class="row-fluid">
        <div class="col-md-12 desc_event"><?php echo ($this->event->opis_wydarzenia) ?></div>
    </div>
</div>