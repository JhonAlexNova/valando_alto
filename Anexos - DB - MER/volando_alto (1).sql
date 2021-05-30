-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2021 a las 20:19:25
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `volando_alto`
--
CREATE DATABASE IF NOT EXISTS `volando_alto` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `volando_alto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avion`
--

CREATE TABLE `avion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tipo_avion` bigint(20) UNSIGNED NOT NULL,
  `identificacion_avion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_pasajeros` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `avion`
--

INSERT INTO `avion` (`id`, `id_tipo_avion`, `identificacion_avion`, `numero_pasajeros`, `created_at`, `updated_at`) VALUES
(1, 1, '000323', '6', '2021-05-30 00:31:43', '2021-05-30 00:31:43'),
(2, 1, '000324', '6', '2021-05-30 00:31:43', '2021-05-30 00:31:43'),
(3, 1, '000325', '6', '2021-05-30 00:31:43', '2021-05-30 00:31:43'),
(4, 1, '000326', '6', '2021-05-30 00:31:43', '2021-05-30 00:31:43'),
(5, 1, '000327', '6', '2021-05-30 00:31:43', '2021-05-30 00:31:43'),
(6, 1, '000328', '6', '2021-05-30 00:31:43', '2021-05-30 00:31:43'),
(7, 1, '000329', '6', '2021-05-30 00:31:43', '2021-05-30 00:31:43'),
(8, 1, '000330', '6', '2021-05-30 00:31:43', '2021-05-30 00:31:43'),
(9, 1, '000331', '6', '2021-05-30 00:31:43', '2021-05-30 00:31:43'),
(10, 1, '000332', '6', '2021-05-30 00:31:43', '2021-05-30 00:31:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Bogota', '2021-05-30 00:03:44', '2021-05-30 00:03:44'),
(2, 'Villavicencio', '2021-05-30 00:03:44', '2021-05-30 00:03:44'),
(3, 'Medellin', '2021-05-30 00:03:44', '2021-05-30 00:03:44'),
(4, 'Cali', '2021-05-30 00:03:44', '2021-05-30 00:03:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2021_05_29_131439_create_rols_table', 1),
(3, '2021_05_29_132739_create_tipo__usuarios_table', 1),
(4, '2021_05_29_135417_create_tipo__avions_table', 1),
(5, '2021_05_29_135534_create_avions_table', 1),
(6, '2021_05_29_140234_create_lugares_table', 1),
(7, '2021_05_29_140917_create_vuelos_table', 1),
(8, '2021_05_29_141730_create_reservacions_table', 1),
(9, '2021_05_29_194344_add_attr_avion', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_vuelo` bigint(20) UNSIGNED NOT NULL,
  `id_cliente` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservacion`
--

INSERT INTO `reservacion` (`id`, `id_vuelo`, `id_cliente`, `created_at`, `updated_at`) VALUES
(1, 2, 6, '2021-05-30 04:11:59', '2021-05-30 04:11:59'),
(2, 2, 7, '2021-05-30 04:34:07', '2021-05-30 04:34:07'),
(3, 2, 8, '2021-05-30 04:34:32', '2021-05-30 04:34:32'),
(4, 2, 9, '2021-05-30 22:55:25', '2021-05-30 22:55:25'),
(5, 2, 10, '2021-05-30 22:55:52', '2021-05-30 22:55:52'),
(6, 2, 11, '2021-05-30 22:56:23', '2021-05-30 22:56:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'piloto', '2021-05-29 21:54:20', '2021-05-29 21:54:20'),
(2, 'copiloto', '2021-05-29 21:54:20', '2021-05-29 21:54:20'),
(3, 'cliente', '2021-05-29 21:54:20', '2021-05-29 21:54:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_avion`
--

CREATE TABLE `tipo_avion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_avion`
--

INSERT INTO `tipo_avion` (`id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'Avion - Pequeño', '2021-05-30 00:23:34', '2021-05-30 00:23:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `id_rol` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `id_usuario`, `id_rol`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-05-29 21:54:24', '2021-05-29 21:54:24'),
(2, 2, 2, '2021-05-29 21:55:00', '2021-05-29 21:55:00'),
(3, 3, 1, '2021-05-29 22:21:34', '2021-05-29 22:21:34'),
(4, 4, 3, '2021-05-30 02:09:20', '2021-05-30 02:09:20'),
(5, 6, 3, '2021-05-30 04:11:59', '2021-05-30 04:11:59'),
(6, 7, 3, '2021-05-30 04:34:07', '2021-05-30 04:34:07'),
(7, 8, 3, '2021-05-30 04:34:32', '2021-05-30 04:34:32'),
(8, 9, 3, '2021-05-30 22:55:25', '2021-05-30 22:55:25'),
(9, 10, 3, '2021-05-30 22:55:52', '2021-05-30 22:55:52'),
(10, 11, 3, '2021-05-30 22:56:23', '2021-05-30 22:56:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cedula` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `cedula`, `nombre`, `apellido`, `correo`, `telefono`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Juan', NULL, NULL, NULL, NULL, '2021-05-29 21:54:24', '2021-05-29 21:54:24'),
(2, NULL, 'Felipe', NULL, NULL, NULL, NULL, '2021-05-29 21:55:00', '2021-05-29 21:55:00'),
(3, NULL, 'P - Duvan', NULL, NULL, NULL, NULL, '2021-05-29 22:21:34', '2021-05-29 22:21:34'),
(4, '100270394', 'jhony', 'nov', 'jhonnova19@gmail.com', '3138582316', NULL, '2021-05-30 02:09:20', '2021-05-30 02:09:20'),
(6, '1002709348', 'jhony', 'nova', 'jhonnova19@gmail.com', '3138582316', NULL, '2021-05-30 04:11:59', '2021-05-30 04:11:59'),
(7, '243', 'jhony', 'nov', 'jhonnova19@gmail.com', '3138582316', NULL, '2021-05-30 04:34:06', '2021-05-30 04:34:06'),
(8, '243', 'jhony', 'nov', 'jhonnova19@gmail.com', '3138582316', NULL, '2021-05-30 04:34:32', '2021-05-30 04:34:32'),
(9, '3423', 'Cristian', 'Mota', 'Cris.mota@gmail.com', '313302284', NULL, '2021-05-30 22:55:25', '2021-05-30 22:55:25'),
(10, '32432', 'Mariela', 'Martinez', 'marimartinez@gmail.com', '3228965258', NULL, '2021-05-30 22:55:52', '2021-05-30 22:55:52'),
(11, '2432', 'Natalia', 'Fonseca', 'nta@gmail.com', '34543', NULL, '2021-05-30 22:56:23', '2021-05-30 22:56:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelo`
--

CREATE TABLE `vuelo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_avion` bigint(20) UNSIGNED NOT NULL,
  `id_piloto` bigint(20) UNSIGNED NOT NULL,
  `id_copiloto` bigint(20) UNSIGNED NOT NULL,
  `id_origen` bigint(20) UNSIGNED NOT NULL,
  `id_destino` bigint(20) UNSIGNED NOT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vuelo`
--

INSERT INTO `vuelo` (`id`, `id_avion`, `id_piloto`, `id_copiloto`, `id_origen`, `id_destino`, `precio`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 2, 1, 2, '210000', '2021-05-30 00:50:05', '2021-05-30 00:50:05'),
(3, 2, 3, 2, 1, 3, '304000', '2021-05-30 22:50:09', '2021-05-30 22:50:09'),
(4, 4, 3, 2, 1, 4, '280000', '2021-05-30 22:51:25', '2021-05-30 22:51:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avion`
--
ALTER TABLE `avion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avion_id_tipo_avion_foreign` (`id_tipo_avion`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservacion_id_vuelo_foreign` (`id_vuelo`),
  ADD KEY `reservacion_id_cliente_foreign` (`id_cliente`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_avion`
--
ALTER TABLE `tipo_avion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_usuario_id_usuario_foreign` (`id_usuario`),
  ADD KEY `tipo_usuario_id_rol_foreign` (`id_rol`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vuelo_id_piloto_foreign` (`id_piloto`),
  ADD KEY `vuelo_id_copiloto_foreign` (`id_copiloto`),
  ADD KEY `vuelo_id_origen_foreign` (`id_origen`),
  ADD KEY `vuelo_id_destino_foreign` (`id_destino`),
  ADD KEY `vuelo_id_avion_foreign` (`id_avion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avion`
--
ALTER TABLE `avion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_avion`
--
ALTER TABLE `tipo_avion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `avion`
--
ALTER TABLE `avion`
  ADD CONSTRAINT `avion_id_tipo_avion_foreign` FOREIGN KEY (`id_tipo_avion`) REFERENCES `tipo_avion` (`id`);

--
-- Filtros para la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD CONSTRAINT `reservacion_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservacion_id_vuelo_foreign` FOREIGN KEY (`id_vuelo`) REFERENCES `vuelo` (`id`);

--
-- Filtros para la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD CONSTRAINT `tipo_usuario_id_rol_foreign` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`),
  ADD CONSTRAINT `tipo_usuario_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD CONSTRAINT `vuelo_id_avion_foreign` FOREIGN KEY (`id_avion`) REFERENCES `avion` (`id`),
  ADD CONSTRAINT `vuelo_id_copiloto_foreign` FOREIGN KEY (`id_copiloto`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `vuelo_id_destino_foreign` FOREIGN KEY (`id_destino`) REFERENCES `lugar` (`id`),
  ADD CONSTRAINT `vuelo_id_origen_foreign` FOREIGN KEY (`id_origen`) REFERENCES `lugar` (`id`),
  ADD CONSTRAINT `vuelo_id_piloto_foreign` FOREIGN KEY (`id_piloto`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
