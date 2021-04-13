-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2021 a las 23:36:01
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravelswitch`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portada` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estatus` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `contenido`, `portada`, `estatus`, `created_at`, `updated_at`) VALUES
(1, 'Las hijas de las famosas exreinas y modelos colombianas', 'Hacia los años noventa, mujeres como Paula Andrea Betancourt y Paola Turbay eran tendencia en Colombia y el mundo gracias a su belleza y su carisma.', '3.png', '1', '2021-04-28 14:33:37', '2021-04-14 02:35:16'),
(2, 'Laura Tobón dejó boquiabiertos a sus seguidores con atrevida foto en Instagram', 'Una bata negra es lo único que cubre el cuerpo de la también modelo. “Tu cuerpo es tu santuario, ámalo y protégelo como un tesoro. No dejes que nada ni nadie lo irrespete”, escribió Tobón junto a la foto.', '1.jpg', '1', '2021-04-21 14:33:37', '2021-04-14 02:35:14'),
(3, 'Mara Cifuentes responde;', 'Mara Cifuentes responde a Danna Sultana tras críticas en su contra\r\nLa modelo se pronunció frente a las polémicas declaraciones que en días pasados hizo Sultana sobre su papel en la comunidad de las mujeres transgénero.', '4.jpg', '0', '2021-04-21 14:33:37', '2021-04-14 02:35:15'),
(4, 'Andrea Serna a quien la tildó de anoréxica en redes sociales..', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quod, exercitationem corrupti eaque impedit pariatur eligendi nulla enim! Voluptate quas minima enim voluptates distinctio facere in? Rerum optio dicta quibusdam.', '5.jpg', '1', '2021-04-21 14:33:37', '2021-04-14 02:32:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
