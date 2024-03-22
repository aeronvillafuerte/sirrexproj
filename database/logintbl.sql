-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 01:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noteapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintbl`
--

CREATE TABLE `logintbl` (
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `l_email` varchar(50) NOT NULL,
  `pass_word` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logintbl`
--

INSERT INTO `logintbl` (`f_name`, `l_name`, `user_name`, `l_email`, `pass_word`) VALUES
('aeron', 'villafueret', '0', '0', '0'),
('aeron', 'villafueret', '0', '0', '0'),
('Aeron', 'Villafuerte', '0', '0', '0'),
('Darla Kayla', 'Ipon', 'kayla', 'aeronvillafuerte20@gmail.com', 'kay'),
('Darla Kayla', 'Ipon', 'kayla', 'aeronvillafuerte20@gmail.com', 'kay'),
('Aicee', 'Villafuerte', 'pleng', 'aicee@gmail.com', 'indang'),
('Tyron', 'Villafuerte', 'tyron', 'tyron@gmail.com', '$2y$10$jrmfQ.9yog5YPEVW4yjzsuAfowBZDKAEYX62VI5YzC9'),
('Tyron', 'Villafuerte', 'tyron', 'tyron@gmail.com', '$2y$10$jj/0k6rJc1YuTwZ/xvOeFu4Vg8lGSsnOF/EB6D0iFfi'),
('Quin Hailey', 'Villafuerte', 'bandat', 'quin@gmail.com', '$2y$10$9QhIRz4O6GZAP0i8ijHWzuzynqwNw2UVXpeB48sWs7r'),
('Quin Hailey', 'Villafuerte', 'bandat', 'quin@gmail.com', '$2y$10$JPGgbXV8KsOtmJR3BM6vbedHM9UtoppmjWJRD.ko4KL'),
('Kryztel', 'Camello', 'Etil', 'etil@gmail.com', '$2y$10$yF4vsS1A9UJtTiE7cFMXceFza.wQz8dsb9cC3X4CRPq'),
('DARLA', 'MAYUNO', 'darla', 'darla@gmail.com', '$2y$10$PsdwBK30FPAw2kE1DTqNue4HJNZTzZ0Jh95MQ.cg.5z'),
('Jungkook', 'Jeon', 'jk', 'aeronvillafuerte20@gmail.com', '$2y$10$faHwMFlhBf8vLPuJNFzr9uz9JMDp8uP5Tn0Kk6rP3PH'),
('Kryztel', 'Camello', 'etil', 'etil@gmail.com', '$2y$10$iB3KtdDtNR4ehL9ZyrcnXu4i7bmPkWwRMRHd7XozetL'),
('Prima', 'Villafuerte', 'jing', 'jing@gmail.com', '$2y$10$E.Xb28wGPIXQSYEGYWKQEOnZfxA1.sl9M8XWXGhsjxS'),
('Caryll Jean', 'Deiparine', 'caryll', 'erickson@gmail.com', '$2y$10$fED03zSW9.bl2PquwB4VJOOJU15iKe5fVCXjMo.Rnu8'),
('Ariel', 'Abellana', 'ariel', 'aeronvillafuerte20@gmail.com', 'aaa'),
('sss', 'sss', 'sss', 'aeronvillafuerte@gmail.com', '$2y$10$hwqZTZP/yPvYOyv/7THvf.gOaVqTEZSVR94dpxI8U7b'),
('bbb', 'bbb', 'bbb', 'erickson@gmail.com', 'bbb'),
('vvv', 'vvv', 'vvv', 'aeronvillafuerte@gmail.com', '$2y$10$2gcK0v7Xetpf2oNcTyVH/.Akut3eEvuQQ2ydeX0FmDZ'),
('Sweet Venice', 'Casia', 'sweet', 'aeronvillafuertegmail.com', 'xxx');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
