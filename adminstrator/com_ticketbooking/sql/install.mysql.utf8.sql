
CREATE TABLE IF NOT EXISTS `#__rezerwacja_miejsc_wydarzenie` (
  `wydarzenieID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sala_id` int(10) UNSIGNED NOT NULL,
  `data_wydarzenia` date NOT NULL,
  `czas_wydarzenia` time NOT NULL,
  `miejsce_wydarzenia` varchar(100) NOT NULL,
  `nazwa_wydarzenia` varchar(250) NOT NULL,
  `image_event` varchar(255) NOT NULL,
  `opis_wydarzenia` mediumtext NOT NULL,
  `opublikowano_wydarzenie` tinyint(1) NOT NULL,
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY (`wydarzenieID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

