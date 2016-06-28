-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2016 at 12:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arrtchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nickname`, `username`, `password`, `email`, `gambar`) VALUES
(1, 'Taufik Nanang Sanjaya', 'tanasan', 'c20ad4d76fe97759aa27a0c99bff6710', 'ent2019ai@yahoo.com', 'default_male.png'),
(2, 'Aswin Setyo Abrianto', 'swayzexyz', 'ce9b1275760bb87f0cc24d1bf408b62d', 'swayzexyz@ymail.com', 'default_male.png'),
(3, 'Rizki Akbar Filayati', 'ancovi', '82d91990006bd4d0903516c549a4d573', 'the_ankh@yahoo.com', 'default_male.png'),
(4, 'Reksa Rangga Wardhana', 'sa', 'c12e01f2a13ff5587e1e9e4aedb8242d', 'reksarw@gmail.com', 'default_male.png');

-- --------------------------------------------------------

--
-- Table structure for table `chatroom`
--

CREATE TABLE `chatroom` (
  `room_id` int(9) NOT NULL,
  `user_create` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_type` enum('Private','Public') NOT NULL,
  `room_password` varchar(50) NOT NULL,
  `room_image` varchar(100) NOT NULL,
  `room_date` datetime NOT NULL,
  `room_active` enum('Y','N') NOT NULL,
  `room_popular` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatroom`
--

INSERT INTO `chatroom` (`room_id`, `user_create`, `room_name`, `room_type`, `room_password`, `room_image`, `room_date`, `room_active`, `room_popular`) VALUES
(1, 'admin', 'RPL B', 'Public', '-', 'favicon.png', '2016-01-26 18:14:08', 'Y', 'Y'),
(2, 'reksarw', '18 Plus Plus', 'Public', '-', 'joki.jpg', '2016-03-31 05:22:11', 'Y', 'Y'),
(3, 'aswingamers', 'Aswin Fans Club', 'Public', '-', 'swayze.jpg', '2016-03-02 10:07:24', 'Y', 'Y'),
(4, 'Tana-San', 'Nanang Lovers', 'Public', '-', 'nangs.png', '2016-03-02 10:07:24', 'Y', 'Y'),
(5, 'reksarw', 'Sa Party', 'Public', '-', 'sa.png', '2016-03-02 11:09:13', 'Y', 'Y'),
(6, 'ancovi', 'YatiChat', 'Public', '-', 'yati.png', '2016-03-02 11:09:13', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `user_id` int(9) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `session_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(9) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `terdaftar` datetime NOT NULL,
  `online` enum('Y','N') NOT NULL,
  `terakhir_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chatroom`
--
ALTER TABLE `chatroom`
  MODIFY `room_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
