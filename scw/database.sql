-- Adminer 4.0.2 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-07:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Members`;
CREATE TABLE `Members` (
  `ID` varchar(30) NOT NULL,
  `LinkedinID` varchar(10) NOT NULL,
  `CrunchbaseID` varchar(30) NOT NULL,
  `Latitude` varchar(16) NOT NULL,
  `Longitude` varchar(16) NOT NULL,
  `Full name` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Members` (`ID`, `LinkedinID`, `CrunchbaseID`, `Latitude`, `Longitude`, `Full name`) VALUES
('nextspace',	'1160913',	'nextspace',	'36.975236',	'-122.026062',	'Nextspace'),
(' arqetype',	'3544387',	'arqetype-inc',	'36.976922',	'-122.029225',	'Arqetype inc'),
('bloofusion',	'3530187',	'bloofusion',	'36.975266',	'-122.026157',	'Bloofusion'),
('five3 genomics',	'2000067',	'five3-genomics',	'36.975266',	'-122.026157',	'Five3 Genomics'),
('looker',	'2663015',	'looker',	'36.973983',	'-122.027814',	'Looker'),
('productops',	'1502592',	'productops-inc',	'36.974126',	'-122.026306',	'productOps'),
('plantronics',	'6033',	'plantronics',	'36.986593',	'-122.036397',	'Plantronics'),
('lightspeed',	'1557218',	'lightspeed-retail',	'45.532554',	'-73.616993',	'Lightspeed  Montreal Canada'),
('monarch media',	'2230747',	'NA',	'36.976130',	'-122.033076',	'Monarch Media'),
('imprivata',	'18976',	'imprivata',	'36.974823',	'-122.025963',	'Imprivata'),
('fullpower',	'63227',	'NA',	'',	'',	'Fullpower Technologies'),
('slingshot',	'NA',	'NA',	'',	'',	'Slingshot'),
('zero motorcycles',	'400078',	'zero-motorcycles',	'',	'',	'Zero Motorcycles'),
('south swell ventures',	'NA',	'NA',	'',	'',	'South Swell Ventures'),
('city of santa cruz',	'163230',	'NA',	'',	'',	'CIty of Santa Cruz');

-- 2014-05-19 17:22:40