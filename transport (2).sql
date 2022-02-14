-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 08:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `fname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `nature of material` varchar(50) NOT NULL,
  `weight of material` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`fname`, `pass`, `email`, `mobile`, `nature of material`, `weight of material`) VALUES
('sasikala', 'Sasi1234', 'sasi24@gmail.com', 905901180, 'wood', 12),
('vyshnavi', 'Vyshu235', 'vyshy234@gmail.com', 905901180, 'coal', 10),
('Samhitha', 'Samhi281', 'samhitha23@gmail.com', 905901180, 'cotton', 9),
('RatnaSri', 'Ratna233', 'ratnasri12@gmail.com', 789376777, 'wool', 6),
('Anitha', 'Anni@123', 'anitha@gmail.com', 2147483647, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dealer_book`
--

CREATE TABLE `dealer_book` (
  `dealer_name` varchar(100) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `pickup_add` varchar(200) NOT NULL,
  `sel_route` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer_book`
--

INSERT INTO `dealer_book` (`dealer_name`, `driver_name`, `pickup_add`, `sel_route`, `date`, `time`) VALUES
('Samhitha', 'sasikala', 'tadikalapudi \r\nwest godavari\r\nbus stand road\r\ndno:1-125', 'r2', '2022-02-09', '21:17:35.000000'),
('Samhitha', 'sasikala', 'arthamuru\r\ntemple road\r\neast godavari', 'r1', '2022-02-21', '21:30:00.000000'),
('Samhitha', 'sasikala', 'arthamuru\r\ntemple road\r\neast godavari', 'r1', '2022-02-21', '21:30:00.000000'),
('', '', '', ' ', '0000-00-00', '00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `fname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `tnumber` varchar(50) NOT NULL,
  `tcapacity` int(50) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `experience` int(50) NOT NULL,
  `from1` varchar(50) NOT NULL,
  `to1` varchar(50) NOT NULL,
  `from2` varchar(50) NOT NULL,
  `to2` varchar(50) NOT NULL,
  `from3` varchar(50) NOT NULL,
  `to3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`fname`, `pass`, `email`, `age`, `phone`, `tnumber`, `tcapacity`, `tname`, `experience`, `from1`, `to1`, `from2`, `to2`, `from3`, `to3`) VALUES
('sasikala', 'Sasi1234', 'sasi24@gmail.com', 20, 896783455, 'AP4Q290', 1200, 'sasi', 5, 'rajahmundry', 'thadepalligudem', 'andhrapradesh ', 'telanagana', 'vizag', 'west godavari'),
('Samhitha', 'Samhi281', 'samhitha23@gmail.com', 20, 948462626, 'AP4H234', 900, 'samhitha', 3, 'hydeerabad', 'telangana', 'delhi', 'gujarat', 'vizag', 'west godavari'),
('Ratna Sri', 'ratna243', 'ratnasri12@gmail.com', 20, 763234679, 'Ap78R23', 600, 'Ratna', 4, 'orissa', 'west bengal', 'andhra pradesh', 'tamil nadu', 'bhimavaram', 'thadepalligudem'),
('Vyshnavi', 'Vyshu342', 'vyshnavi256@gmail.com', 20, 784753368, 'Ap56T34', 4500, 'Vyshnavi', 2, 'punjab', 'chattisgarh', 'kashmir', 'delhi', 'guntur', 'vizianagaram');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
