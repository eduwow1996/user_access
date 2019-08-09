-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 07:58 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_modules`
--

CREATE TABLE `tbl_modules` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_icon` varchar(100) NOT NULL,
  `module_url` varchar(100) NOT NULL,
  `parent_module` int(11) DEFAULT '0',
  `has_sub` int(11) NOT NULL,
  `line_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_modules`
--

INSERT INTO `tbl_modules` (`module_id`, `module_name`, `module_icon`, `module_url`, `parent_module`, `has_sub`, `line_id`, `status`) VALUES
(1, 'Users', 'fa fa-user', 'users', 0, 0, 4, 1),
(2, 'Group', 'fa fa-users', 'group', 0, 0, 3, 1),
(3, 'Dashboard', 'fa fa-dashboard', 'dashboard', 0, 0, 1, 1),
(4, 'Modules', 'fa fa-cubes', 'module', 0, 0, 2, 1),
(5, 'Clients', 'fa fa-user-circle', 'clients', 0, 0, 5, 1),
(6, 'Task', 'fa fa-tasks', 'task', 0, 0, 6, 0),
(9, 'Tracker', 'fa fa-calculator', 'tracker', 0, 0, 7, 0),
(10, 'Ticket', 'fa fa-ticket', 'ticket', 0, 0, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_modules`
--

CREATE TABLE `tbl_sub_modules` (
  `sub_module_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `action_view` int(11) DEFAULT '0',
  `action_add` int(11) DEFAULT '0',
  `action_edit` int(11) DEFAULT '0',
  `action_delete` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_modules`
--

INSERT INTO `tbl_sub_modules` (`sub_module_id`, `module_id`, `group_id`, `action_view`, `action_add`, `action_edit`, `action_delete`) VALUES
(1, 1, 1, 0, 1, 1, 1),
(2, 2, 1, 1, 1, 1, 1),
(3, 3, 1, 1, 1, 1, 1),
(4, 4, 1, 1, 1, 1, 1),
(5, 5, 1, 1, 1, 1, 1),
(15, 3, 15, 1, 0, 0, 0),
(16, 4, 15, 1, 1, 1, 1),
(17, 6, 1, 1, 1, 1, 1),
(18, 3, 4, 1, 1, 1, 1),
(19, 4, 4, 1, 1, 1, 1),
(20, 2, 4, 1, 1, 1, 1),
(21, 1, 4, 1, 1, 1, 1),
(22, 5, 4, 1, 1, 1, 1),
(23, 6, 4, 1, 1, 1, 1),
(24, 9, 4, 1, 1, 1, 0),
(25, 10, 4, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_group` int(11) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `name`, `username`, `password`, `user_group`, `user_status`) VALUES
(1, 'administrator', 'administrator', 'admin@123', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `group_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`group_id`, `group_name`, `group_status`) VALUES
(1, 'Administrator', 1),
(3, 'Test Group', 1),
(4, 'Super Admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_modules`
--
ALTER TABLE `tbl_modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `tbl_sub_modules`
--
ALTER TABLE `tbl_sub_modules`
  ADD PRIMARY KEY (`sub_module_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_modules`
--
ALTER TABLE `tbl_modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_sub_modules`
--
ALTER TABLE `tbl_sub_modules`
  MODIFY `sub_module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
