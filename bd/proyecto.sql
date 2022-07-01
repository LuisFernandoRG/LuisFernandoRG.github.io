-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2022 a las 20:44:34
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `clave` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidop` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `tp` varchar(50) DEFAULT NULL,
  `edad` tinyint(11) NOT NULL,
  `altura` tinyint(11) NOT NULL,
  `complexion` text NOT NULL,
  `rf` text NOT NULL,
  `cp` varchar(50) NOT NULL,
  `vu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`clave`, `nombre`, `apellidop`, `sexo`, `tp`, `edad`, `altura`, `complexion`, `rf`, `cp`, `vu`) VALUES
('df', 'ry', 'yeryr', 'Masculino', 'yyde', 0, 0, '', '', '', ''),
('df', 'ry', 'yeryr', 'Masculino', 'yyde', 0, 0, '', '', '', ''),
('df', 'ry', 'yeryr', 'Masculino', 'yyde', 0, 0, '', '', '', ''),
('df', 'ry', 'yeryr', 'Masculino', 'yyde', 0, 0, '', '', '', ''),
('df', 'ry', 'yeryr', 'Masculino', 'yyde', 0, 0, '', '', '', ''),
('1', 'Rogelio', 'Castillo', 'Femenino', 'yyde', 0, 0, '', '', '', ''),
('GHUGU', 'Jaime ', 'Leon Hernandez', 'Masculino', 'Clara', 0, 0, '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
