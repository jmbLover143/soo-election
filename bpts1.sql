-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 10:45 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpts1`
--

-- --------------------------------------------------------

--
-- Table structure for table `auditor`
--

CREATE TABLE `auditor` (
  `id` int(11) NOT NULL,
  `vote` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cba`
--

CREATE TABLE `cba` (
  `id` int(11) NOT NULL,
  `vote` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ccs`
--

CREATE TABLE `ccs` (
  `id` int(11) NOT NULL,
  `ccs` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contestants`
--

CREATE TABLE `contestants` (
  `contestant_id` int(11) NOT NULL,
  `contestant_name` varchar(50) DEFAULT NULL,
  `contestant_location` varchar(50) DEFAULT NULL,
  `contestant_details` varchar(50) DEFAULT NULL,
  `contestant_picture` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestants`
--

INSERT INTO `contestants` (`contestant_id`, `contestant_name`, `contestant_location`, `contestant_details`, `contestant_picture`) VALUES
(1, 'LOIS ANNE BADANDO', 'Location 1', 'Example example example contestant details', '1. Lois Anne Badando.jpg'),
(2, 'ERICHA ORTIZ REGALADO\r\n', 'Location 2', 'Example example example contestant details', '2. Ericha Regalado.png'),
(3, 'AUBREY ANGELIC NEIS\r\n', 'Location 3', 'Example example example contestant details', '3. Aubrey Angelic Neis.png'),
(4, 'MA. ANGELICA REYES\r\n', 'Location 4', 'Example example example contestant details', '4. Ma. Angelica Reyes.png'),
(5, 'NORI ANN QUESADA\r\n', 'Location 5', 'Example example example contestant details', '5. Nori Ann Quesada.png'),
(6, 'ALITA ANLEI TUPAZ\r\n', 'Location 6', 'Example example example contestant details', '6. Alita Anlei Topaz.png'),
(7, 'BETHIA FRANCESCA AROLLADO\r\n', 'Location 7', 'Example example example contestant details', '7. Bethia Franchesca Arollado.png'),
(8, 'ANGEL NICOLE DE CASTRO\r\n', 'Location 8', 'Example example example contestant details', '8. Angel Nicole De Castro.png'),
(9, 'KEITH LOVEWIN CRUZ\r\n', 'Location 9', 'Example example example contestant details', '9. Keith Lovewin Cruz.png'),
(10, 'MARIAH ARISA CERNECHEZ\r\n', 'Location 10', 'Example example example contestant details', '10. Mariah Arisa Cernechez.png'),
(11, 'ANGEL NICOLE FRANCISCO\r\n', 'Location 10', 'Example example example contestant details', '11. Angel Nicole Francisco.png'),
(12, 'ALMAS CHOUDHRY\r\n', 'Location 10', 'Example example example contestant details', '12. Almas Choudry.png'),
(13, 'SHAYNE ALEXANDRA BADUA\r\n', 'Location 10', 'Example example example contestant details', '13. Shayne Alexandra Badua.png'),
(14, 'GABRIELLE FRANCISCO\r\n', 'Location 10', 'Example example example contestant details', '14. Gabrielle Francisco.png'),
(15, 'DONABEL SOLANO\r\n', 'Location 10', 'Example example example contestant details', '15. Donabel Solano.png'),
(16, 'REINA MARIE CARREON\r\n', 'Location 10', 'Example example example contestant details', '16. Reina Carreon.png'),
(17, 'KRIZIA LUALHATI\r\n', 'Location 10', 'Example example example contestant details', '17. Krizia Lualhati.png'),
(18, 'ALIYAH FAITH TIANGCO\r\n', 'Location 10', 'Example example example contestant details', '18. Aliyah Cernechez.png'),
(19, 'GEMAICA COSTAN\r\n', 'Location 10', 'Example example example contestant details', '19. Gemaica Costan.png'),
(20, 'RASHA MAE PEREZ\r\n', 'Location 10', 'Example example example contestant details', '20. Rasha Perez.png'),
(21, 'JERRALYN QUIAMBAO\r\n', 'Location 10', 'Example example example contestant details', '21. Jerralyn Quiambao.jpg'),
(22, 'JOAN ANONUEVO\r\n', 'Location 10', 'Example example example contestant details', '22. Joan Anonuevo.png'),
(23, 'CHLOE GREGORIO\r\n', 'Location 10', 'Example example example contestant details', '23. Chloe Gregorio.png'),
(24, 'LENIE LAGAHAN\r\n', 'Location 10', 'Example example example contestant details', '24. Lenie Lagahan.png'),
(25, 'CHELCY ANGELI DELA PAZ\r\n', 'Location 10', 'Example example example contestant details', '25. Chelcy Dela Paz.png'),
(26, 'ABIGAIL ANNE MENDOZA\r\n', 'Location 10', 'Example example example contestant details', '26. Abigail Mendoza.png'),
(27, 'MARY ANNE STA. MARIA\r\n', 'Location 10', 'Example example example contestant details', '27. Mary Anne Sta. Maria.png'),
(28, 'JASMINE MANGAHAS\r\n', 'Location 10', 'Example example example contestant details', '28. Jasmine Mangahas.png'),
(29, 'MARY ANN DEL PRADO\r\n', 'Location 10', 'Example example example contestant details', '29. Mary Ann Del Prado.png'),
(30, 'SHARIELLE YANSON\r\n', 'Location 10', 'Example example example contestant details', '30. Sharielle Yanson.png'),
(31, 'CAMILLA KIM RAMOS\r\n', 'Location 10', 'Example example example contestant details', '31. Camilla Ramos.png'),
(32, 'ANDREA FAITH QUIZON\r\n', 'Location 10', 'Example example example contestant details', '32. Andrea Quizon.png'),
(34, 'MAULIE JULIENNE RARIZA\r\n', 'Location 10', 'Example example example contestant details', '33. Julienne Rariza.png'),
(35, 'LHIA MAY CARILLO\r\n', 'Location 10', 'Example example example contestant details', '34. Lhia Carillo.png'),
(36, 'MARIENELLA CABURIAN\r\n', 'Location 10', 'Example example example contestant details', '35. Marienella Caburian.png');

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `criteria_id` int(11) NOT NULL,
  `criteria_name` text,
  `criteria_percentage` double DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `visibility` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`criteria_id`, `criteria_name`, `criteria_percentage`, `level_id`, `visibility`, `active`) VALUES
(1, 'Pre Pageant', 0.5, 1, 0, 1),
(2, 'Production Number', 0.15, 1, 1, 1),
(3, 'Swimsuit', 0.1, 1, 1, 0),
(4, 'Long Gown', 0.35, 1, 1, 0),
(5, 'Question & Answer', 0.4, 1, 1, 0),
(6, 'Beauty 30%', 0.3, 2, 1, 0),
(7, 'Poise & Personality 25%', 0.25, 2, 1, 0),
(8, 'Intelligence 40%', 0.4, 2, 1, 0),
(9, 'Audience Impact 5%', 0.05, 2, 1, 0),
(10, 'Overall', 1, 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `level_id` int(11) NOT NULL,
  `level_name` varchar(50) DEFAULT NULL,
  `level_limit` int(11) DEFAULT NULL,
  `level_active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`level_id`, `level_name`, `level_limit`, `level_active`) VALUES
(1, 'Top 36', 15, 1),
(2, 'Top 15', 5, 0),
(3, 'Top 5', 5, 0),
(4, 'Winners', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE `president` (
  `id` int(11) NOT NULL,
  `president` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `score_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `criteria_id` int(11) DEFAULT NULL,
  `contestant_id` int(11) DEFAULT NULL,
  `score` float DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`score_id`, `user_id`, `criteria_id`, `contestant_id`, `score`, `datetime`) VALUES
(1, 2, 2, 1, 0, '2019-06-27 16:01:12'),
(2, 2, 2, 2, 0, '2019-06-27 16:01:32'),
(3, 2, 2, 3, 0, '2019-06-27 16:03:19'),
(4, 2, 2, 4, 0, '2019-06-27 16:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `secretary`
--

CREATE TABLE `secretary` (
  `id` int(11) NOT NULL,
  `secretary` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `swimsuit`
--

CREATE TABLE `swimsuit` (
  `contestant_id` int(11) NOT NULL,
  `swimsuit_grade` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swimsuit`
--

INSERT INTO `swimsuit` (`contestant_id`, `swimsuit_grade`) VALUES
(1, 89.2),
(2, 81.8),
(3, 79.6),
(4, 84.2),
(5, 76),
(6, 84.6),
(7, 83),
(8, 74.8),
(9, 75.4),
(10, 76),
(11, 84.4),
(12, 82.6),
(13, 82.8),
(14, 77.2),
(15, 79.6),
(16, 87.8),
(17, 73),
(18, 88.6),
(19, 77.6),
(20, 73.6),
(21, 85.6),
(22, 76.6),
(23, 79.4),
(24, 73.8),
(25, 91),
(26, 82.2),
(27, 79.6),
(28, 75.8),
(29, 82),
(30, 89.4),
(31, 74.8),
(32, 79.2),
(34, 83.8),
(35, 77.4),
(36, 73.8);

-- --------------------------------------------------------

--
-- Table structure for table `treasurer`
--

CREATE TABLE `treasurer` (
  `id` int(11) NOT NULL,
  `vote` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_type_id`) VALUES
(1, 'admin', 'admin', 1),
(2, 'judge1', '11111', 2),
(3, 'judge2', '22222', 2),
(4, 'judge3', '33333', 2),
(5, 'judge4', '44444', 2),
(6, 'judge5', '55555', 2),
(7, 'judge6', '66666', 2),
(8, 'judge7', '77777', 2),
(9, 'judge8', '88888', 2),
(10, 'judge9', '99999', 2),
(11, 'judge10', '10101', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(11) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type`) VALUES
(1, 'admin'),
(2, 'judge');

-- --------------------------------------------------------

--
-- Table structure for table `vice`
--

CREATE TABLE `vice` (
  `id` int(11) NOT NULL,
  `vice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE `winners` (
  `winner_id` int(11) NOT NULL,
  `level_id` int(11) DEFAULT NULL,
  `rank_no` int(11) DEFAULT NULL,
  `contestant_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auditor`
--
ALTER TABLE `auditor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cba`
--
ALTER TABLE `cba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccs`
--
ALTER TABLE `ccs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contestants`
--
ALTER TABLE `contestants`
  ADD PRIMARY KEY (`contestant_id`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`criteria_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `president`
--
ALTER TABLE `president`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`);

--
-- Indexes for table `secretary`
--
ALTER TABLE `secretary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swimsuit`
--
ALTER TABLE `swimsuit`
  ADD PRIMARY KEY (`contestant_id`);

--
-- Indexes for table `treasurer`
--
ALTER TABLE `treasurer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vice`
--
ALTER TABLE `vice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winners`
--
ALTER TABLE `winners`
  ADD PRIMARY KEY (`winner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auditor`
--
ALTER TABLE `auditor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cba`
--
ALTER TABLE `cba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `ccs`
--
ALTER TABLE `ccs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `contestants`
--
ALTER TABLE `contestants`
  MODIFY `contestant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `criteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `president`
--
ALTER TABLE `president`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `secretary`
--
ALTER TABLE `secretary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `swimsuit`
--
ALTER TABLE `swimsuit`
  MODIFY `contestant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `treasurer`
--
ALTER TABLE `treasurer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vice`
--
ALTER TABLE `vice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `winners`
--
ALTER TABLE `winners`
  MODIFY `winner_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
