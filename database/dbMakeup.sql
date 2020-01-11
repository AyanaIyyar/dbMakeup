-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2019 at 09:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbMakeup`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `idPass_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `tel_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `nok` varchar(255) NOT NULL,
  `nok_tel` varchar(255) NOT NULL,
  `nok_relationship` varchar(255) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`idPass_number`, `first_name`, `middle_name`, `last_name`, `gender`, `marital_status`, `tel_number`, `email`, `dob`, `nok`, `nok_tel`, `nok_relationship`, `join_date`) VALUES
('1234567', 'Dorine', 'A', 'Okumu', 'Female', 'Married', '0234522311', 'dorinemwangi@gmail.com', '1987-01-12', 'Jack', '2134352342', 'Other', '2019-10-07 09:43:10'),
('22632144', 'Jack', 'M', 'Mwangi', 'Male', 'Married', '0706814228', 'mwangize2018@gmail.com', '1981-11-05', 'Dorine Okumu', '0720405361', 'Other', '2019-10-03 09:30:52'),
('234131232432', 'Michael', 'Njenga', 'M', 'Male', 'Single', '254325413', 'mikenjenga@gmail.com', '2016-11-14', 'Jack', '3215231`3', 'Father', '2019-10-07 09:47:45'),
('234567', 'Steve', 'N', 'Mwangi', 'Male', 'Divorced', '0720665959', 'steveminds@gmail.com', '1984-11-14', 'Lilian M', '76754345', 'Mother', '2019-10-07 09:44:58'),
('4576546', 'Walter', 'Anyika', 'Indeche', 'Male', 'Married', '23533e12', 'walter@emobilis.org', '1975-07-01', 'Wanyama', '3453421`3', 'Brother', '2019-10-07 09:46:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`idPass_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
