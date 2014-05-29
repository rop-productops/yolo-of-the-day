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
  `Full_Name` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Members` (`ID`, `LinkedinID`, `CrunchbaseID`, `Latitude`, `Longitude`, `Full_Name`) VALUES
('nextspace',	'1160913',	'nextspace',	'36.975236',	'-122.026062',	'Nextspace'),
('arqetype',	'3544387',	'arqetype-inc',	'36.976922',	'-122.029225',	'Arqetype inc'),
('bloofusion',	'3530187',	'bloofusion',	'36.975266',	'-122.026157',	'Bloofusion'),
('five3 genomics',	'2000067',	'five3-genomics',	'36.975266',	'-122.026157',	'Five3 Genomics'),
('looker',	'2663015',	'looker',	'36.973983',	'-122.027814',	'Looker'),
('productops',	'1502592',	'productops-inc',	'36.974126',	'-122.026306',	'productOps'),
('plantronics',	'6033',	'plantronics',	'36.986593',	'-122.036397',	'Plantronics'),
('lightspeed',	'1557218',	'lightspeed-retail',	'45.532554',	'-73.616993',	'Lightspeed  Montreal Canada'),
('monarch media',	'2230747',	'',	'36.976130',	'-122.033076',	'Monarch Media'),
('imprivata',	'18976',	'imprivata',	'36.974823',	'-122.025963',	'Imprivata'),
('fullpower',	'63227',	'',	'36.973413',	'122.025842',	'Fullpower Technologies'),
('slingshot',	'',	'',	'37.321661',	'-121.978334',	'Slingshot'),
('zero motorcycles',	'400078',	'zero-motorcycles',	'37.049411',	'-122.012411',	'Zero Motorcycles'),
('south swell ventures',	'',	'',	'',	'',	'South Swell Ventures'),
('city of santa cruz',	'163230',	'',	'36.973968',	'-122.030223',	'CIty of Santa Cruz');

DROP TABLE IF EXISTS `Significant_Employees`;
CREATE TABLE `Significant_Employees` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Full_Name` varchar(30) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Company_ID` varchar(30) NOT NULL,
  `About` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Significant_Employees` (`ID`, `Full_Name`, `Position`, `Company_ID`, `About`) VALUES
(1,	'Scott Hoover',	'Data scientist',	'looker',	'twitter: GentleHoovs'),
(2,	'Mike Xu',	'Dirty Looker',	'looker',	'Easily bored.'),
(3,	'Bob Cagle',	'CEO',	'productops',	'contact at bob(-at)productops.com');

-- 2014-05-29 16:25:32