-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2017 at 08:38 AM
-- Server version: 5.6.35-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epec`
--

-- --------------------------------------------------------

--
-- Table structure for table `reclamos`
--

CREATE TABLE IF NOT EXISTS `reclamos` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` int(100) NOT NULL,
  `reclamo` varchar(10000) NOT NULL,
  `aprobado` varchar(20) NOT NULL,
  UNIQUE KEY `index` (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reclamos`
--

INSERT INTO `reclamos` (`index`, `nombre`, `email`, `telefono`, `reclamo`, `aprobado`) VALUES
(1, 'naza cb', 'nonocastrobay@hotmail.com', 21447, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus justo sed nisl faucibus commodo. Praesent sodales consequat mollis. Ut nec nibh urna. Nulla sit amet tempus lacus. Nullam iaculis tellus nec iaculis tempus. Nullam sit amet est ipsum. Nulla cursus euismod magna, eu vulputate mi convallis dictum. Vestibulum accumsan nibh vitae tincidunt gravida. Donec neque odio, rhoncus in bibendum vitae, sagittis ut ante. Cras iaculis placerat lacus eu faucibus. Ut non venenatis nisi. Sed mauris nisi, sagittis in ultrices in, dictum ac velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 'no'),
(2, 'naza cbszbzbdzd', 'nonocastrobay@hotmail.com', 2147483647, 'ACSsVsVv', 'no'),
(3, 'Fabri', 'fabi@email.com', 23754875, 'si', 'no'),
(4, 'Nazareno', 'nazacastrobay97@gmail.com', 351240304, 'Mimensaje es anda a hacrt re coger por un orangutan PHP!!!!', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
