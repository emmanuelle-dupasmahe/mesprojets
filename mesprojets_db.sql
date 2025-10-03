-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 03, 2025 at 11:26 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mesprojets_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `projets`
--

CREATE TABLE `projets` (
  `id` int NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url_lien` varchar(255) NOT NULL,
  `url_image` varchar(255) DEFAULT NULL,
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projets`
--

INSERT INTO `projets` (`id`, `titre`, `description`, `url_lien`, `url_image`, `date_creation`) VALUES
(1, 'module-connexion', 'Un site pour les enfants', 'http://module-connexion.test/index.php', 'http://module-connexion.test/assets/images/module-connexion.png', '2025-10-02'),
(2, 'Mon fan site', 'Un site sur le groupe U2', 'http://127.0.0.1:5500/index.html', 'http://127.0.0.1:5500/asset/images/u2-groupe.jpg', '2025-09-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
