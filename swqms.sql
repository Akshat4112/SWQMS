-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 11:24 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swqms`
--

-- --------------------------------------------------------

--
-- Table structure for table `charts`
--

CREATE TABLE `charts` (
  `chart_id` int(11) NOT NULL,
  `chart_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charts`
--

INSERT INTO `charts` (`chart_id`, `chart_name`) VALUES
(1, 'pie'),
(2, 'table'),
(3, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `final_param`
--

CREATE TABLE `final_param` (
  `color` varchar(20) NOT NULL,
  `odour` varchar(20) NOT NULL,
  `temp` int(10) NOT NULL,
  `ph` int(10) NOT NULL,
  `elec_cond` int(10) NOT NULL,
  `diss_oxy` int(10) NOT NULL,
  `amm_nitr` int(10) NOT NULL,
  `nitrite_nitrate` int(10) NOT NULL,
  `total_coliform` int(10) NOT NULL,
  `fecal_coliform` int(10) NOT NULL,
  `userid` int(11) NOT NULL,
  `entry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_param`
--

INSERT INTO `final_param` (`color`, `odour`, `temp`, `ph`, `elec_cond`, `diss_oxy`, `amm_nitr`, `nitrite_nitrate`, `total_coliform`, `fecal_coliform`, `userid`, `entry_date`) VALUES
('Green', 'odourless', 30, 5, 4, 8, 2, 7, 5, 1, 5, '0000-00-00'),
('white', 'pungent', 98, 6, 2, 0, 9, 8, 7, 6, 9, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` text NOT NULL,
  `pincode` int(10) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`address`, `city`, `state`, `pincode`, `userid`) VALUES
('balaji Puram', 'agra', 'up', 9823, 5),
('vikas puri', 'mathura', 'UttarPradesh', 282007, 5),
('balaji Puram', 'agra', 'up', 9823, 5),
('balaji Puram', 'agra', 'up', 9823, 5),
('balaji Puram', 'agra', 'up', 9823, 5),
('balaji Puram', 'agra', 'up', 9823, 5),
('asldja', 'ljasjdsa', 'ljasldjk', 2093, 5),
('', '', '', 0, 5),
('', '', '', 0, 5),
('', '', '', 0, 5),
('', '', '', 0, 5),
('', '', 'karnataka', 0, 5),
('kaskad', 'karnatake', 'karnatak', 298329, 5),
('kjaksjad', 'abcd', 'up', 298298, 7),
('akjsd', 'chennai', 'kasjdk', 989, 9);

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE `parameters` (
  `colour` varchar(50) NOT NULL,
  `odour` text NOT NULL,
  `temprature` int(100) NOT NULL,
  `ph` int(100) NOT NULL,
  `electrical_conductivity` int(100) NOT NULL,
  `dissolved_oxygen` int(100) NOT NULL,
  `ammonical_nitrogen` int(100) NOT NULL,
  `nitrite_nitrate` int(100) NOT NULL,
  `total_phospate` int(100) NOT NULL,
  `orthophospate` int(100) NOT NULL,
  `bod` int(100) NOT NULL,
  `cod` int(100) NOT NULL,
  `sodium` int(100) NOT NULL,
  `potassium` int(100) NOT NULL,
  `calcium` int(100) NOT NULL,
  `magnesium` int(100) NOT NULL,
  `carbonate` int(100) NOT NULL,
  `bicarbonate` int(100) NOT NULL,
  `chloride` int(100) NOT NULL,
  `sulphate` int(100) NOT NULL,
  `flouride` int(100) NOT NULL,
  `boron` int(100) NOT NULL,
  `total_coliform` int(100) NOT NULL,
  `fecal_coliform` int(100) NOT NULL,
  `per_sodium` int(100) NOT NULL,
  `sar` int(100) NOT NULL,
  `arsenic` int(100) NOT NULL,
  `mercury` int(100) NOT NULL,
  `heavy_metals` int(100) NOT NULL,
  `pesticides_organics` int(100) NOT NULL,
  `turbidity` int(10) NOT NULL,
  `tds` int(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parameters`
--

INSERT INTO `parameters` (`colour`, `odour`, `temprature`, `ph`, `electrical_conductivity`, `dissolved_oxygen`, `ammonical_nitrogen`, `nitrite_nitrate`, `total_phospate`, `orthophospate`, `bod`, `cod`, `sodium`, `potassium`, `calcium`, `magnesium`, `carbonate`, `bicarbonate`, `chloride`, `sulphate`, `flouride`, `boron`, `total_coliform`, `fecal_coliform`, `per_sodium`, `sar`, `arsenic`, `mercury`, `heavy_metals`, `pesticides_organics`, `turbidity`, `tds`, `id`) VALUES
('red', 'sweet', 40, 6, 7, 7, 9, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 8, 7, 7, 7, 8, 8, 8, 8, 9, 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `permanent_param`
--

CREATE TABLE `permanent_param` (
  `ph` int(30) NOT NULL,
  `temp` int(30) NOT NULL,
  `diss_oxy` int(30) NOT NULL,
  `conductivity` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permanent_param`
--

INSERT INTO `permanent_param` (`ph`, `temp`, `diss_oxy`, `conductivity`) VALUES
(8, 26, 5, 1120),
(8, 28, 7, 440);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fullname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `cpassword` text NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `email`, `password`, `cpassword`, `userid`) VALUES
('Akshat', 'akshat41121995@gmail.com', 'nicolatesla', 'nicolatesla', 16),
('Akshat Gupta', 'aks@aks.com', 'nicolatesla', 'nicolatesla', 17),
('Ridhima Garg', 'garg.ridhima72@gmail.com', 'nicolatesla', 'nicolatesla', 18),
('Himadri', 'himadri@gmail.com', 'himadriihimadri', 'himadrihimadri', 19),
('askdas', 'aksjdjkasd', 'akshatakshat', 'akshatasdasd', 20),
('', '', '', '', 21),
('Ankit Kumar', 'ankit@gmail.com', 'ankitankit', 'ankitankit', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
