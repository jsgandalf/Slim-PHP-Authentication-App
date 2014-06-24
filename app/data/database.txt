CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

INSERT INTO `articles` (`id`, `title`, `url`, `date`) VALUES 
(1, 'Search and integrate Google+ activity streams with PHP applications', 
'http://www.ibm.com/developerworks/xml/library/x-googleplusphp/index.html', '2012-07-10');

INSERT INTO `articles` (`id`, `title`, `url`, `date`) VALUES 
(2, 'Getting Started with Zend Server CE', 
'http://devzone.zend.com/1389/getting-started-with-zend-server-ce/', '2009-03-02');