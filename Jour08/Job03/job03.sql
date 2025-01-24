-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2025 at 12:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jour08`
--

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `naissance` date NOT NULL,
  `sexe` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`id`, `prenom`, `nom`, `naissance`, `sexe`, `email`) VALUES
(8, 'Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
(9, 'Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
(10, 'Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
(11, 'Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
(12, 'Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
(13, 'Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
(14, 'Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
