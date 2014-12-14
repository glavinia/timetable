-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2014 at 12:52 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`course_id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  `serie` varchar(50) NOT NULL,
  `grupa` varchar(50) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `year`, `serie`, `grupa`, `Department`, `subject`) VALUES
(51, 'an2', 'seria2', 'grupa1', 'economie si administrare a afacerilor', 'Structuri de date1'),
(57, 'an1', 'seria1', 'grupa1', 'Matematica-Informatica', 'Structuri de date1');

-- --------------------------------------------------------

--
-- Table structure for table `departmet`
--

CREATE TABLE IF NOT EXISTS `departmet` (
`department_id` int(11) NOT NULL,
  `person_incharge` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `departmet`
--

INSERT INTO `departmet` (`department_id`, `person_incharge`, `title`, `department`) VALUES
(13, 'Ovidiu Megan', 'Decan', 'economie si administrare a afacerilor'),
(12, 'Mircea Dragan', 'Decan', 'Matematica-Informatica');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
`history_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `user` varchar(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1643 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `date`, `data`, `action`, `user`) VALUES
(1642, '2013-11-04 23:30:37', ' ', 'Logout', ''),
(1641, '2013-11-04 23:16:49', ' ', 'Logout', ''),
(1640, '2013-11-04 23:16:19', '3:00 pm&nbsp;4:30 pm', 'Add Schedule', ''),
(1639, '2013-11-04 23:15:21', '12:00 pm&nbsp;1:30 pm', 'Add Schedule', ''),
(1638, '2013-11-04 23:14:35', '11:00 am&nbsp;12:30 pm', 'Add Schedule', ''),
(1403, '2013-10-31 14:13:58', 'Christine Redoblo', 'Login', 'Admin'),
(1404, '2013-10-31 14:17:27', '8:00 am&nbsp;9:30 am', 'Add Schedule', 'Admin'),
(1405, '2013-10-31 14:19:55', '2013-2014', 'Add Entry School Year', 'Admin'),
(1406, '2013-10-31 16:58:59', 'Christine Redoblo', 'Login', 'Admin'),
(1407, '2013-10-31 16:59:33', 'Acctg 2', 'Update Entry subject', 'Admin'),
(1408, '2013-10-31 16:59:46', 'BSED 1C', 'Update Entry Course', 'Admin'),
(1409, '2013-10-31 17:00:09', 'INFO', 'Add Entry Course', 'Admin'),
(1410, '2013-10-31 18:14:40', 'Christine&nbsp;Redoblo', 'Update User', 'Admin'),
(1411, '2013-10-31 20:22:45', 'sgr1', 'Add Entry Course', 'Admin'),
(1412, '2013-10-31 20:29:24', 'fsdfs', 'Add Entry Department', 'Admin'),
(1413, '2013-10-31 20:30:58', 'fsdsf', 'Add Entry Department', 'Admin'),
(1414, '2013-10-31 20:55:18', 'Matematica-Informatica', 'Add Entry Department', 'Admin'),
(1415, '2013-10-31 20:55:37', 'Aladin ', 'Delete Teacher', 'Admin'),
(1416, '2013-10-31 20:57:58', 'fsdfs', 'Update Entry Department', 'Admin'),
(1417, '2013-10-31 20:59:00', 'fsdfs', 'Update Entry Department', 'Admin'),
(1418, '2013-10-31 21:03:26', '', 'Delete Department', 'Admin'),
(1419, '2013-10-31 21:03:40', '', 'Delete Department', 'Admin'),
(1420, '2013-10-31 21:06:40', '', 'Delete Department', 'Admin'),
(1421, '2013-10-31 21:06:53', '', 'Delete Department', 'Admin'),
(1422, '2013-10-31 21:07:06', 'Gerry ', 'Delete Teacher', 'Admin'),
(1423, '2013-10-31 21:10:02', 'DR. ', 'Delete Teacher', 'Admin'),
(1424, '2013-10-31 21:10:31', '', 'Delete Department', 'Admin'),
(1425, '2013-10-31 21:11:39', 'fsdfs', 'Delete Department', 'Admin'),
(1426, '2013-10-31 21:11:46', 'fsdsf', 'Delete Department', 'Admin'),
(1427, '2013-10-31 21:12:51', 'Dana&nbsp;Petcu', 'Add Entry Teacher', 'Admin'),
(1428, '2013-10-31 21:13:42', 'Paraschiva&nbsp;Popovici', 'Add Entry Teacher', 'Admin'),
(1429, '2013-10-31 21:14:11', 'Cristine22&nbsp;', 'Update Entry Teacher', 'Admin'),
(1430, '2013-10-31 21:14:56', 'Grupa 1', 'Add Entry Course', 'Admin'),
(1431, '2013-10-31 21:15:17', 'Grupa2', 'Add Entry Course', 'Admin'),
(1432, '2013-10-31 21:15:28', 'AB 1Avbcvbcb', 'Update Entry Course', 'Admin'),
(1433, '2013-10-31 21:15:35', 'AB 1Avbcvbcb', 'Delete Course', 'Admin'),
(1434, '2013-10-31 21:15:47', '', 'Delete Subject', 'Admin'),
(1435, '2013-10-31 21:17:26', '123info22', 'Add Entry subject', 'Admin'),
(1436, '2013-10-31 21:17:52', '123info453', 'Add Entry subject', 'Admin'),
(1437, '2013-10-31 21:18:11', 'Acctg 2wqw', 'Update Entry subject', 'Admin'),
(1438, '2013-10-31 21:18:28', 'Acctg 2wqw', 'Update Entry subject', 'Admin'),
(1439, '2013-10-31 21:18:48', 'Acctg 2 (5:30 - 8:30)', 'Delete Subject', 'Admin'),
(1440, '2013-10-31 21:19:10', '032', 'Add Entry Room', 'Admin'),
(1441, '2013-10-31 21:19:21', 'dd', 'Update Entry Room', 'Admin'),
(1442, '2013-10-31 21:19:29', 'dd', 'Delete Room', 'Admin'),
(1443, '2013-10-31 21:19:42', '031', 'Add Entry Room', 'Admin'),
(1444, '2013-10-31 21:20:15', 'A02', 'Add Entry Room', 'Admin'),
(1445, '2013-10-31 21:20:30', 'A11', 'Add Entry Room', 'Admin'),
(1446, '2013-10-31 21:21:36', '3:30 pm&nbsp;4:30 pm', 'Update Schedule', 'Admin'),
(1447, '2013-10-31 21:21:51', '3:30 pm', 'Delete  Schedule', 'Admin'),
(1448, '2013-10-31 21:22:17', '3:30 pm&nbsp;4:30 pm', 'Update Schedule', 'Admin'),
(1449, '2013-10-31 21:26:08', '9:30 am&nbsp;11:30 am', 'Add Schedule', 'Admin'),
(1450, '2013-10-31 21:26:21', '3:30 pm&nbsp;4:30 pm', 'Update Schedule', 'Admin'),
(1451, '2013-10-31 21:27:32', '9:00 am&nbsp;12:00 pm', 'Add Exam Schedule', 'Admin'),
(1452, '2013-10-31 21:28:11', 'john kevin&nbsp;lorayna', 'Update User', 'Admin'),
(1453, '2013-10-31 21:28:24', 'john kevin&nbsp;lorayna', 'Update User', 'Admin'),
(1454, '2013-10-31 21:28:33', 'john kevin lorayna', 'Delete User', 'Admin'),
(1455, '2013-10-31 22:00:25', 'lala1&nbsp;lala2', 'Add User', 'Admin'),
(1456, '2013-11-01 13:32:34', '123info22', 'Update Entry subject', 'Admin'),
(1457, '2013-11-01 13:35:11', 'Matematica-Informatica', 'Update Entry Department', 'Admin'),
(1458, '2013-11-01 13:44:17', 'economie si administrare a afacerilor', 'Add Entry Department', 'Admin'),
(1459, '2013-11-01 13:45:05', 'Management', 'Add Entry Course', 'Admin'),
(1460, '2013-11-01 13:46:24', 'Popescu &nbsp;Maria', 'Add Entry Teacher', 'Admin'),
(1461, '2013-11-01 14:16:36', '123info22', 'Update Entry subject', 'Admin'),
(1462, '2013-11-01 14:18:43', '123info22', 'Update Entry subject', 'Admin'),
(1463, '2013-11-01 14:22:02', '123info22', 'Update Entry subject', 'Admin'),
(1464, '2013-11-01 14:23:19', 'erw', 'Add Entry subject', 'Admin'),
(1465, '2013-11-01 14:24:49', 'erw', 'Delete Subject', 'Admin'),
(1466, '2013-11-01 14:27:05', '123info453', 'Update Entry subject', 'Admin'),
(1467, '2013-11-01 14:35:51', 'Dana Petcu', 'Update Entry Teacher', 'Admin'),
(1468, '2013-11-01 14:36:29', 'Paraschiva Popovici', 'Update Entry Teacher', 'Admin'),
(1469, '2013-11-01 14:36:42', 'Popescu Ion', 'Update Entry Teacher', 'Admin'),
(1470, '2013-11-01 14:54:18', 'Grupa 1', 'Update Entry Course', 'Admin'),
(1471, '2013-11-01 14:57:30', 'Grupa2', 'Add Entry Course', 'Admin'),
(1472, '2013-11-01 14:57:43', 'Grupa2', 'Delete Course', 'Admin'),
(1473, '2013-11-01 14:58:26', 'dfd', 'Add Entry Course', 'Admin'),
(1474, '2013-11-01 15:00:14', 'dfd', 'Delete Course', 'Admin'),
(1475, '2013-11-01 15:00:33', 'adasd', 'Add Entry Course', 'Admin'),
(1476, '2013-11-01 15:03:19', 'erterte', 'Add Entry Course', 'Admin'),
(1477, '2013-11-01 15:06:18', 'dsds', 'Add Entry Course', 'Admin'),
(1478, '2013-11-01 15:06:35', 'adasd', 'Delete Course', 'Admin'),
(1479, '2013-11-01 15:06:41', 'dsds', 'Delete Course', 'Admin'),
(1480, '2013-11-01 15:06:48', 'erterte', 'Delete Course', 'Admin'),
(1481, '2013-11-01 15:33:41', 'ff', 'Update Entry Course', 'Admin'),
(1482, '2013-11-01 15:34:53', 'an2', 'Update Entry Course', 'Admin'),
(1483, '2013-11-01 15:35:02', 'ff', 'Delete Course', 'Admin'),
(1484, '2013-11-01 15:35:31', '', 'Add Entry Course', 'Admin'),
(1485, '2013-11-01 15:36:37', '', 'Add Entry Course', 'Admin'),
(1486, '2013-11-01 15:37:54', 'lll', 'Add Entry Course', 'Admin'),
(1487, '2013-11-01 15:38:39', 'an1', 'Update Entry Course', 'Admin'),
(1488, '2013-11-01 15:38:51', 'lll', 'Delete Course', 'Admin'),
(1489, '2013-11-01 15:38:58', '', 'Delete Course', 'Admin'),
(1490, '2013-11-01 15:39:06', '', 'Delete Course', 'Admin'),
(1491, '2013-11-01 21:40:08', '', 'Add Entry Student', 'Admin'),
(1492, '2013-11-01 21:41:25', '', 'Add Entry Student', 'Admin'),
(1493, '2013-11-01 21:44:52', '', 'Add Entry Student', 'Admin'),
(1494, '2013-11-01 21:46:30', '', 'Add Entry Student', 'Admin'),
(1495, '2013-11-01 21:52:23', 'Buciuman Ana-Maria ', 'Update Entry Student', 'Admin'),
(1496, '2013-11-01 21:52:33', ' ', 'Delete Student', 'Admin'),
(1497, '2013-11-01 21:52:41', ' ', 'Delete Student', 'Admin'),
(1498, '2013-11-01 21:52:46', ' ', 'Delete Student', 'Admin'),
(1499, '2013-11-02 15:34:55', 'Buciuman Ana-Maria ', 'Update Entry Student', 'Admin'),
(1500, '2013-11-02 16:05:15', 'Buciuman Ana-Maria ', 'Update Entry Student', 'Admin'),
(1501, '2013-11-02 16:11:42', 'sfdsfs', 'Add Entry Student', 'Admin'),
(1502, '2013-11-02 16:12:19', 'Slejuc Ana', 'Add Entry Student', 'Admin'),
(1503, '2013-11-02 16:12:30', 'sfdsfs', 'Update Entry Student', 'Admin'),
(1504, '2013-11-02 16:12:38', ' ', 'Delete Student', 'Admin'),
(1505, '2013-11-02 16:22:28', 'Structuri de date 2', 'Add Entry subject', 'Admin'),
(1506, '2013-11-02 16:24:18', 'Cloud computing', 'Add Entry subject', 'Admin'),
(1507, '2013-11-02 16:24:49', 'Structuri de date 2', 'Update Entry subject', 'Admin'),
(1508, '2013-11-02 16:25:02', 'Structuri de date1', 'Update Entry subject', 'Admin'),
(1509, '2013-11-02 16:25:23', 'Programare3d', 'Update Entry subject', 'Admin'),
(1510, '2013-11-02 16:27:29', 'Gaianu Mihai', 'Add Entry Teacher', 'Admin'),
(1511, '2013-11-02 16:28:44', 'Iordan Victoria', 'Add Entry Teacher', 'Admin'),
(1512, '2013-11-02 16:29:30', 'Negru Viorel', 'Add Entry Teacher', 'Admin'),
(1513, '2013-11-02 16:30:03', 'Mandruta Cristina', 'Add Entry Teacher', 'Admin'),
(1514, '2013-11-02 16:33:49', 'Micota Flavia', 'Add Entry Teacher', 'Admin'),
(1515, '2013-11-02 16:38:42', 'Miculescu A.', 'Add Entry Teacher', 'Admin'),
(1516, '2013-11-02 16:40:19', 'Dobre C.', 'Add Entry Teacher', 'Admin'),
(1517, '2013-11-02 16:40:41', 'Moraru M', 'Add Entry Teacher', 'Admin'),
(1518, '2013-11-02 16:41:06', 'Boldea M.', 'Add Entry Teacher', 'Admin'),
(1519, '2013-11-02 16:41:48', 'Cioraca O.', 'Add Entry Teacher', 'Admin'),
(1520, '2013-11-02 16:42:09', 'Rotaru M.', 'Add Entry Teacher', 'Admin'),
(1521, '2013-11-02 16:42:59', 'Microeconomie', 'Add Entry subject', 'Admin'),
(1522, '2013-11-02 16:43:36', 'Microeconomie', 'Add Entry subject', 'Admin'),
(1523, '2013-11-02 16:44:01', 'Macroeconomie', 'Add Entry subject', 'Admin'),
(1524, '2013-11-02 16:44:20', 'Macroeconomie', 'Add Entry subject', 'Admin'),
(1525, '2013-11-02 16:47:55', 'Cloud computing', 'Add Entry subject', 'Admin'),
(1526, '2013-11-02 16:48:17', 'Programare3d', 'Add Entry subject', 'Admin'),
(1527, '2013-11-02 16:48:39', 'Structuri de date 2', 'Add Entry subject', 'Admin'),
(1528, '2013-11-02 16:49:02', 'Structuri de date1', 'Add Entry subject', 'Admin'),
(1529, '2013-11-02 16:49:29', 'POO3', 'Add Entry subject', 'Admin'),
(1530, '2013-11-02 16:49:48', 'POO3', 'Add Entry subject', 'Admin'),
(1531, '2013-11-02 16:50:12', 'Etica', 'Add Entry subject', 'Admin'),
(1532, '2013-11-02 16:50:30', 'Etica', 'Add Entry subject', 'Admin'),
(1533, '2013-11-02 16:50:54', 'Inteligenta Artificiala', 'Add Entry subject', 'Admin'),
(1534, '2013-11-02 16:51:09', 'Inteligenta Artificiala', 'Add Entry subject', 'Admin'),
(1535, '2013-11-02 16:54:30', 'Dinu ionica', 'Add Entry Student', 'Admin'),
(1536, '2013-11-02 16:55:24', 'Anton Hans', 'Add Entry Student', 'Admin'),
(1537, '2013-11-02 16:56:07', 'Dan Mirela', 'Add Entry Student', 'Admin'),
(1538, '2013-11-02 21:35:18', '8:00 am&nbsp;9:30 am', 'Add Schedule', 'Admin'),
(1539, '2013-11-02 21:37:12', '8:00 am&nbsp;9:30 am', 'Update Schedule', 'Admin'),
(1540, '2013-11-02 21:39:30', '8:00 am&nbsp;9:30 am', 'Update Schedule', 'Admin'),
(1541, '2013-11-02 21:40:25', '9:00 am&nbsp;10:30 am', 'Add Schedule', 'Admin'),
(1542, '2013-11-02 21:41:24', '9:00 am&nbsp;10:30 am', 'Add Schedule', 'Admin'),
(1543, '2013-11-02 21:46:17', '1:00 pm&nbsp;2:30 pm', 'Add Schedule', 'Admin'),
(1544, '2013-11-02 21:47:51', '9:00 am&nbsp;10:30 am', 'Update Schedule', 'Admin'),
(1545, '2013-11-02 21:48:00', '9:00 am', 'Delete  Schedule', 'Admin'),
(1546, '2013-11-02 21:48:17', '8:00 am&nbsp;9:30 am', 'Update Schedule', 'Admin'),
(1547, '2013-11-02 21:50:23', '8:00 am&nbsp;9:30 am', 'Update Schedule', 'Admin'),
(1548, '2013-11-02 22:22:36', '8:00 am&nbsp;9:30 am', 'Update Schedule', 'Admin'),
(1549, '2013-11-02 22:22:51', '8:00 am&nbsp;9:30 am', 'Update Schedule', 'Admin'),
(1550, '2013-11-02 22:23:49', '8:00 am&nbsp;9:30 am', 'Update Schedule', 'Admin'),
(1551, '2013-11-02 22:26:23', '8:00 am&nbsp;9:30 am', 'Update Schedule', 'Admin'),
(1552, '2013-11-02 22:27:05', '8:00 am&nbsp;9:30 am', 'Update Schedule', 'Admin'),
(1578, '2013-11-04 19:57:40', 'gfg', 'Add Entry School Year', ''),
(1579, '2013-11-04 20:01:04', '', 'Delete Subject', ''),
(1580, '2013-11-04 20:02:47', 'dfsfsf', 'Add Entry subject', ''),
(1581, '2013-11-04 20:03:02', 'dfsfsf', 'Update Entry subject', ''),
(1582, '2013-11-04 20:03:12', '', 'Delete Subject', ''),
(1583, '2013-11-04 20:05:46', '', 'Add Entry Teacher', ''),
(1584, '2013-11-04 21:28:50', 'rtert', 'Update Entry Teacher', ''),
(1585, '2013-11-04 21:29:10', 'sdfsdf ', 'Delete Teacher', ''),
(1586, '2013-11-04 21:29:54', ' ', 'Delete Teacher', ''),
(1587, '2013-11-04 21:30:07', 'rtert ', 'Delete Teacher', ''),
(1588, '2013-11-04 21:30:18', 'sdfsdf ', 'Delete Teacher', ''),
(1589, '2013-11-04 21:30:30', 'sdfsdf ', 'Delete Teacher', ''),
(1590, '2013-11-04 21:31:05', 'Maria B.', 'Add Entry Teacher', ''),
(1591, '2013-11-04 21:32:45', 'zdfdsfsdf', 'Add Entry Student', ''),
(1592, '2013-11-04 21:32:58', 'zdfdsfsdf4353453', 'Update Entry Student', ''),
(1593, '2013-11-04 21:33:10', ' ', 'Delete Student', ''),
(1594, '2013-11-04 21:33:34', 'gdfdfg', 'Add Entry Course', ''),
(1595, '2013-11-04 21:33:47', 'gdfdfg88888', 'Update Entry Course', ''),
(1596, '2013-11-04 21:33:54', 'gdfdfg88888', 'Delete Course', ''),
(1597, '2013-11-04 21:34:17', 'fgdfd', 'Add Entry subject', ''),
(1598, '2013-11-04 21:34:33', 'fgdfd777', 'Update Entry subject', ''),
(1599, '2013-11-04 21:34:40', '', 'Delete Subject', ''),
(1600, '2013-11-04 21:34:56', 'dfsf', 'Add Entry Room', ''),
(1601, '2013-11-04 21:35:09', 'dfsf444', 'Update Entry Room', ''),
(1602, '2013-11-04 21:35:15', 'dfsf444', 'Delete Room', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
`room_id` int(11) NOT NULL,
  `room_name` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `description`) VALUES
(50, '031', 'laborator'),
(49, '032', 'laborator'),
(51, 'A02', 'amfiteatru'),
(52, 'A11', 'amfiteatru');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
`schedule_id` int(11) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `serie` varchar(10) NOT NULL,
  `grupa` varchar(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `room` varchar(20) NOT NULL,
  `day` varchar(100) NOT NULL,
  `nr` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `time_end` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=454 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `semester`, `year`, `serie`, `grupa`, `department`, `subject`, `teacher`, `room`, `day`, `nr`, `time`, `time_end`, `type`) VALUES
(447, '1', '3', '1', '2', 'Matematica-Informatica', 'POO3', 'Mandruta Cristina', 'A02', '   Thursday   ', 120, '1:00 pm', '2:30 pm', ''),
(445, '1', '1', '2', '2', 'Matematica-Informatica', 'Structuri de date1', 'Paraschiva Popovici', 'A11', '  Wednesday    ', 120, '9:00 am', '10:30 am', ''),
(448, '1', '1', '1', '2', 'economie si administrare a afacerilor', 'Macroeconomie', 'Dobre C.', 'A11', 'Monday      ', 100, '8:00 am', '9:30 am', ''),
(449, '1', '2', '1', '1', 'Matematica-Informatica', 'Inteligenta Artificiala', 'Negru Viorel', 'A11', 'Monday      ', 120, '1:00 pm', '2:30 pm', ''),
(450, '1', '1', '3', '2', 'Matematica-Informatica', 'Cloud computing', 'Dana Petcu', '031', '  Wednesday    ', 20, '11:00 am', '12:30 pm', ''),
(451, '1', '2', '1', '2', 'economie si administrare a afacerilor', 'Etica', 'Rotaru M.', '032', '    Friday  ', 20, '11:00 am', '12:30 pm', ''),
(452, '1', '2', '2', '2', 'economie si administrare a afacerilor', 'Microeconomie', 'Cioraca O.', 'A02', '    Friday  ', 120, '12:00 pm', '1:30 pm', ''),
(453, '1', '1', '1', '2', 'Matematica-Informatica', 'Programare3d', 'Dana Petcu', 'A11', '  Wednesday    ', 120, '3:00 pm', '4:30 pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`id_stud` int(11) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `stud_an` varchar(50) NOT NULL,
  `stud_serie` varchar(10) NOT NULL,
  `stud_grup` varchar(10) NOT NULL,
  `stud_mail` varchar(50) NOT NULL,
  `stud_tel` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_stud`, `stud_name`, `stud_an`, `stud_serie`, `stud_grup`, `stud_mail`, `stud_tel`, `department`) VALUES
(1, 'Buciuman Ana-Maria ', 'an2', 'seria2', 'grupa1', 'lala@yahoo.com', '0756546464564', 'economie si administrare a afacerilor'),
(3, 'Slejuc Ana', 'An 1', 'Seria 1', 'Grupa 1', 'ana98@yahoo.com', '07098762332', 'Matematica-Informatica'),
(4, 'Dinu ionica', 'An 1', 'Seria 2', 'Grupa 2', 'ion@yahoo.com', '073242343444', 'Matematica-Informatica'),
(5, 'Anton Hans', 'An 2', 'Seria 1', 'Grupa 1', 'hans@yahoo.com', '0256897863', 'Matematica-Informatica'),
(6, 'Dan Mirela', 'An 1', 'Seria 2', 'Grupa 1', 'dan@yahoo.com', '07493423423', 'economie si administrare a afacerilor');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
`Subject_id` int(11) NOT NULL,
  `subject_title` varchar(100) NOT NULL,
  `subject_category` varchar(100) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Subject_id`, `subject_title`, `subject_category`, `semester`, `teacher`) VALUES
(58, 'Structuri de date1', 'Curs', '1st', 'Paraschiva Popovici'),
(59, 'Programare3d', 'Curs', '1st', 'Dana Petcu'),
(61, 'Structuri de date 2', 'Curs', '2nd', 'Paraschiva Popovici'),
(62, 'Cloud computing', 'Curs', '1st', 'Dana Petcu'),
(63, 'Microeconomie', 'Curs', '1st', 'Miculescu A.'),
(64, 'Microeconomie', 'Seminar', '1st', 'Cioraca O.'),
(65, 'Macroeconomie', 'Curs', '1st', 'Dobre C.'),
(66, 'Macroeconomie', 'Seminar', '1st', 'Cioraca O.'),
(67, 'Cloud computing', 'Laborator', '1st', 'Dana Petcu'),
(68, 'Programare3d', 'Laborator', '1st', 'Dana Petcu'),
(69, 'Structuri de date 2', 'Laborator', '1st', 'Paraschiva Popovici'),
(70, 'Structuri de date1', 'Laborator', '1st', 'Paraschiva Popovici'),
(71, 'POO3', 'Curs', '1st', 'Iordan Victoria'),
(72, 'POO3', 'Laborator', '1st', 'Micota Flavia'),
(73, 'Etica', 'Curs', '1st', 'Moraru M'),
(74, 'Etica', 'Seminar', '1st', 'Rotaru M.'),
(75, 'Inteligenta Artificiala', 'Curs', '1st', 'Negru Viorel'),
(76, 'Inteligenta Artificiala', 'Laborator', '1st', 'Negru Viorel');

-- --------------------------------------------------------

--
-- Table structure for table `sy`
--

CREATE TABLE IF NOT EXISTS `sy` (
`sy_id` int(11) NOT NULL,
  `sy` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sy`
--

INSERT INTO `sy` (`sy_id`, `sy`) VALUES
(3, '2012-2013'),
(5, '2013-2014');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
`teacher_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Academic_Rank` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `Name`, `Academic_Rank`, `Department`) VALUES
(67, 'Paraschiva Popovici', 'Dr. Prof', 'Matematica-Informatica'),
(66, 'Dana Petcu', 'Dr. Prof', 'Matematica-Informatica'),
(68, 'Popescu Ion', 'Dr. Prof', 'economie si administrare a afacerilor'),
(69, 'Gaianu Mihai', 'asist. dr', 'Matematica-Informatica'),
(70, 'Iordan Victoria', 'conf. dr', 'Matematica-Informatica'),
(71, 'Negru Viorel', 'prof. dr.', 'Matematica-Informatica'),
(72, 'Mandruta Cristina', 'conf. dr', 'Matematica-Informatica'),
(73, 'Micota Flavia', 'lect. dr.', 'Matematica-Informatica'),
(74, 'Miculescu A.', 'prof. dr.', 'economie si administrare a afacerilor'),
(75, 'Dobre C.', 'prof. dr.', 'economie si administrare a afacerilor'),
(76, 'Moraru M', 'prof. dr.', 'economie si administrare a afacerilor'),
(77, 'Boldea M.', 'lect. dr.', 'economie si administrare a afacerilor'),
(78, 'Cioraca O.', 'lect. dr.', 'economie si administrare a afacerilor'),
(79, 'Rotaru M.', 'prof. dr.', 'economie si administrare a afacerilor'),
(80, 'Alina S.', 'prof. dr.', 'economie si administrare a afacerilor'),
(85, 'Maria B.', 'lect. dr.', 'Matematica-Informatica');

-- --------------------------------------------------------

--
-- Table structure for table `time_end`
--

CREATE TABLE IF NOT EXISTS `time_end` (
`time_end_id` int(11) NOT NULL,
  `time_end` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `time_end`
--

INSERT INTO `time_end` (`time_end_id`, `time_end`) VALUES
(1, '8:00 am'),
(2, '8:30 am'),
(3, '9:00 am'),
(4, '9:30 am'),
(5, '10:00 am'),
(6, '10:30 am'),
(7, '11:30 am'),
(8, '12:00 pm'),
(9, '12:30 pm'),
(10, '1:00 pm'),
(11, '1:30 pm'),
(12, '2:00 pm'),
(13, '2:30 pm'),
(14, '3:00 pm'),
(36, '8:30 pm'),
(35, '8:00 pm'),
(34, '7:30 pm'),
(33, '7:00 pm'),
(32, '6:30 pm'),
(31, '6:00 pm'),
(30, '5:30 pm'),
(29, '5:00 pm'),
(28, '4:30 pm'),
(27, '4:00 pm'),
(26, '3:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `time_start`
--

CREATE TABLE IF NOT EXISTS `time_start` (
`time_id` int(11) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `time_start`
--

INSERT INTO `time_start` (`time_id`, `time`) VALUES
(1, '7:30 am'),
(2, '8:00 am'),
(3, '8:30 am'),
(4, '9:00 am'),
(5, '9:30 am'),
(6, '10:00 am'),
(7, '10:30 am'),
(8, '11:00 am'),
(9, '11:30 am'),
(10, '12:00 pm'),
(11, '12:30 pm'),
(12, '1:00 pm'),
(13, '1:30 pm'),
(14, '2:00 pm'),
(15, '2:30 pm'),
(16, '3:00 pm'),
(17, '3:30 pm'),
(18, '4:00 pm'),
(19, '4:30 pm'),
(20, '5:00 pm'),
(21, '5:30 pm'),
(22, '6:00 pm'),
(23, '6:30 pm'),
(24, '7:00 pm'),
(25, '7:30 pm'),
(26, '8:00 pm'),
(27, '8:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`User_id` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `User_Type` varchar(20) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `UserName`, `Password`, `User_Type`, `FirstName`, `LastName`) VALUES
(12, 'kj', 'kj', 'User', 'Lavy', 'g'),
(13, 'admin', 'admin', 'Admin', 'Lavinia', 'Gruia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `departmet`
--
ALTER TABLE `departmet`
 ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
 ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
 ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`id_stud`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`Subject_id`);

--
-- Indexes for table `sy`
--
ALTER TABLE `sy`
 ADD PRIMARY KEY (`sy_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `time_end`
--
ALTER TABLE `time_end`
 ADD PRIMARY KEY (`time_end_id`);

--
-- Indexes for table `time_start`
--
ALTER TABLE `time_start`
 ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `departmet`
--
ALTER TABLE `departmet`
MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1643;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=454;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `id_stud` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
MODIFY `Subject_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `sy`
--
ALTER TABLE `sy`
MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `time_end`
--
ALTER TABLE `time_end`
MODIFY `time_end_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `time_start`
--
ALTER TABLE `time_start`
MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
