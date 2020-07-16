-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 06:04 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livraria`
--

-- --------------------------------------------------------

--
-- Table structure for table `livros`
--

CREATE TABLE `livros` (
  `nome` varchar(255) NOT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `livros`
--

INSERT INTO `livros` (`nome`, `autor`, `quantidade`, `preco`, `data`) VALUES
('A descoberta das bruxas ', ' Márcia Frazão', 300, '29,90', '2001-05-18'),
('Coraline', ' Neil Gaiman', 110, '27,90', '2006-05-18'),
('Harry Potter e a Câmara Secreta ', 'J.K. Rowling', 205, '28,68', '1999-08-12'),
('Harry Potter e a Criança Amaldiçoada', 'J.K. Rowling', 250, '28,68', '1953-06-18'),
('Harry Potter e a Ordem da Fênix', 'J.K. Rowling', 350, '29,90', '2000-07-12'),
('Harry Potter e a Pedra Filosofal ', 'J.K. Rowling', 359, '28,68', '2000-07-15'),
('Harry Potter e as Reliquias Da Morte', 'J.K. Rowling', 400, '36,64', '2003-05-18'),
('Harry Potter e o Cálice de Fogo', 'J.K. Rowling', 590, '29,90', '2000-07-12'),
('O Senhor dos Anéis: A Sociedade do Anel', 'J.R.R. Tolkien', 301, '29,90', '1995-08-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`nome`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
