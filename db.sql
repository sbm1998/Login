SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Database: `vote`
--
-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `email` varchar(50) NOT NULL,
  `id` text NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `article` text NOT NULL,
  `title` varchar(500) NOT NULL,
  `star` tinyint(1) NOT NULL DEFAULT '0',
  `share` tinyint(1) NOT NULL DEFAULT '0',
  `nick` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

