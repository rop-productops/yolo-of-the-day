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
  `Subhead` varchar(100) NOT NULL,
  `Company_Pic_Url` varchar(200) NOT NULL,
  `Company_Banner_Url` varchar(200) NOT NULL,
  `Quote1` varchar(300) NOT NULL,
  `Quote2` varchar(300) NOT NULL,
  `Large_Text` varchar(1200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Members` (`ID`, `LinkedinID`, `CrunchbaseID`,	`Latitude`,	`Longitude`,	`Full_Name`,			`Subhead`,			`Company_Pic_Url`,	`Company_Banner_Url`,			`Quote1`,																																`Quote2`,	`Large_Text`) VALUES
('nextspace',		'1160913',	'nextspace',		'36.975236',	'-122.026062',	'Nextspace',			'',				'',			'',					'\"Your Best Work Happens Here.\"',																													'',	''),
('arqetype',		'3544387',	'arqetype-inc',		'36.976922',	'-122.029225',	'Arqetype inc',			'',				'',			'',					'\"There is more going on than meets the eye.\"',																											'',	''),
('bloofusion',		'3530187',	'bloofusion',		'36.975266',	'-122.026157',	'Bloofusion',			'',				'',			'',					'\"CHANGE AGENTS FOR ONLINE SUCCESS\"',																													'',	''),
('five3 genomics',	'2000067',	'five3-genomics',	'36.975266',	'-122.026157',	'Five3 Genomics',		'Get Answers Fast.',		'',			'',					'',																																	'',	''),
('looker',		'2663015',	'looker',		'36.973983',	'-122.027814',	'Looker',			'Looker finds',			'/images/looker/logo.png','/images/looker/banner.png',		'"Looker enables the unlocking of massive sets of data and delivers powerful value to today''s businesses. The result is a new kind of business, one that shares and collaborates around data, driving curiosity and intelligence throughout the organization."',	'"Looker gives us one place to go for everything, which is really empowering. It''s a definitive, shareable record, where everyone can agree on these business abstractions across departments and business uses, and reuse them for their own needs." - Geoff Guerdat',	'Looker helps businesses create a discovery-driven culture that empowers data analysts, data scientists, and business users to make faster, better decisions in real-time. Looker has reinvented business intelligence with a modern web-based platform, which enables business users to explore high-resolution data and gain actionable insights.'),
('productops',		'1502592',	'productops-inc',	'36.974126',	'-122.026306',	'productOps',			'Much more than just great code','/images/productops/logo.jpg','images/productops/Banner.jpg',	'\"We are not a body shop. We exist to build mutually profitable relationships. We get to know our clients and their businesses really well before we strike a line of code. It is what makes us different.\"',								'"I wouldn''t use anyone else. Every time I''ve needed something done in a pinch and I need the best people on it, I just go to productOps." - Laura Merling',	 'Bob Cagle and Dean Pfutzenreuter founded productOps, their fourth Santa Cruz start-up, in July 2008 as a full service product development firm specializing in infrastructural server-based applications built on APIs to serve users through web and mobile interfaces.<br>Today productOps has a portfolio of clients that includes international, national and local organizations like AT&T, Alcatel-Lucent, PricewaterhouseCoopers, SWIFT, Conde Nast, Garratt-Callahan, Hilltromper and Narrative Technologies. We are always looking to extend our current 25-person team with fresh talent to support our four practices of strategy, design, development and operations so that we can continue to deliver exceptional software born out of strong business savvy.<br>We are a diverse shop with a wide spectrum of talent, from recent UCSC graduates to greybeards with a lifetime of experience at the Apples, Googles and Ebays of the world. All are rockstars, all learn from each other, all check their ego at ibute generously to the success of the team, the project and the client. Our culture of openness, clarity of communication, 110% delivery, and focus on valuable relationships is what sets us apart, and is as important to our clients as our software deliverable.');
('plantronics',		'6033',		'plantronics',		'36.986593',	'-122.036397',	'Plantronics',			'',				'',			'',					'\"WORK. LIVE. PLAY. TOGETHER.\"',																													'',	''),
('lightspeed',		'1557218',	'lightspeed-retail',	'45.532554',	'-73.616993',	'Lightspeed  Montreal Canada',	'',				'',			'',					'\"Point of sale that''s as unique as your store.\"',																											'',	''),
('monarch media',	'2230747',	'',			'36.976130',	'-122.033076',	'Monarch Media',		'',				'',			'',					'\"Engage. Educate. Empower. Outstanding eLearning.\"',																											'',	''),
('imprivata',		'18976',	'imprivata',		'36.974823',	'-122.025963',	'Imprivata',			'',				'',			'',					'\"We improve provider productivity for better focus on patient care.\"',																								'',	''),
('fullpower',		'63227',	'',			'36.973413',	'-122.025842',	'Fullpower Technologies',	'',				'',			'',					'\"Invention in Motion\"',																														'',	''),
('slingshot',		'',		'',			'37.321661',	'-121.978334',	'Slingshot',			'',				'',			'',					'',																																	'',	''),
('zero motorcycles',	'400078',	'zero-motorcycles',	'37.049411',	'-122.012411',	'Zero Motorcycles',		'',				'',			'',					'\"It''s just better\"',																														'',	''),
('south swell ventures','',		'',			'',		'',		'South Swell Ventures',		'',				'',			'',					'',																																	'',	''),
('narrative technologies','',		'',			'36.975236',	'-122.026062',	'Narrative Technologies',	'Driving the future of story',	'/images/narrative/logo.png','/images/narrative/banner.png',	'\"Narrative Technologies creates new ways to create and experience the oldest of human needs: storytelling\"',																				'\"Lithomobilus plans to change the way we interact with literature in a digital medium\" - Book Business Magazine',	'Narrative Technologies produces Lithomobilus, an innovative e-reader platform based on EPUB-3 that allows for multi-threaded, user-driven stories, for annotation, commentary and notes, and serves it all up in a style that breaks from the traditional dependence on the paper book format and takes advantage of the affordances of mobile platforms. Lithomobilus is flexible enough to handle traditional books, multi-threaded annotated works, and everything in between. Lithomobilus is the future of e-books.'),
('city of santa cruz',	'163230',	'',			'36.973968',	'-122.030223',	'CIty of Santa Cruz',		'',				'',			'',					'',																																	'',	'');

DROP TABLE IF EXISTS `Significant_Employees`;
CREATE TABLE `Significant_Employees` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Full_Name` varchar(30) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Company_ID` varchar(30) NOT NULL,
  `About` varchar(200) NOT NULL,
  `Image_url` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Significant_Employees` (`ID`, `Full_Name`, `Position`, `Company_ID`, `Image_url`, `About`) VALUES
(1,	'Lloyd Tabb',		'Founder',		'looker',		'/images/looker/ltabb.png',	'Lloyd Tabb has been a technology revolutionary for 25 years, driving important trends in how the world uses the Internet.'),
(2,	'Scott Hoover',		'Data scientist',	'looker',		'/images/looker/scott.png',	'twitter: GentleHoovs'),
(3,	'Bob Cagle',		'CEO',			'productops',		'/images/productops/bob.jpg',	'Bob''s 22 years of experience in the trenches have not blunted his natural exuberance and optimism. Bob thinks better near a whiteboard, is a wizard with Excel, and believes there is an entrepreneur in everyone.'),
(4,	'Dean Pfutzenreuter',	'CTO',			'productops',		'/images/productops/dean.jpg',	'For over two decades, Dean has delivered software products large and small for desktop computers, Internet infrastructure, mobile devices, and the Web. He is known for his unflappability, iron determination to ship the product, and his easygoing nature.'),
(5,	'Lise Quintana',	'CEO',			'narrative technologies','/images/narrative/lise.jpg',	'Lise is using the experiences gained from her own writing to create new ways for writers to deliver narrative experiences to readers, and ways of keeping readers engaged in an increasingly attention-deficit-driven world.'),
(6,	'Erik Schmidt',		'COO',			'narrative technologies','/images/narrative/erik.jpg',	'Erik is a veteran product developer and product manager with broad technology business expertise. At Narrative Technologies, Erik manages the development of the Lithomobilus ebook platform, advises on strategy, and engages in business development.');

-- 2014-06-02 18:24:50


