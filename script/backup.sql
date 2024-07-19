-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2024 a las 04:10:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tu_cita`
--

--
-- Volcado de datos para la tabla `tipo_servicio`
--

INSERT INTO `tipo_servicio` (`id`, `nombre`, `descripcion`, `url_imagen`) VALUES
(1, 'Spa', 'Un spa es un establecimiento que ofrece una variedad de tratamientos y servicios de salud, belleza y relajación, generalmente basados en el uso del agua. Los servicios de un spa pueden incluir masajes, tratamientos faciales, envolturas corporales, hidrote', 'img/app/spa1.jpg'),
(2, 'Salon de belleza', 'Un salón de belleza es un lugar donde se ofrecen diversos servicios cosméticos y de cuidado personal. Estos servicios pueden incluir cortes de cabello, peinados, coloración, manicuras, pedicuras, tratamientos faciales, depilación, maquillaje y otros trata', 'img/app/sdb1.jpg'),
(3, 'Barberia', 'Una barbería es un establecimiento que se especializa en el corte de cabello y el afeitado para hombres. Además de cortes de cabello, los barberos suelen ofrecer servicios de afeitado tradicional con navaja, arreglos de barba y bigote, y tratamientos de c', 'img/app/bb1.jpg');

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Cliente', 'Es el cliente del aplicativo'),
(2, 'Proveedor', 'Es el proveedor del aplicativo'),
(3, 'Invitado', 'Es el invitado del aplicativo');

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `telefono`, `url_imagen`, `contraseña`, `id_tipo_usuario`) VALUES
(1, 'juan', 'rios', 'juan-rios@gmail.com', '3112223344', 'img/user/1720491675.jpg', '12345', 1),
(2, 'pedro', 'ortiz', 'pedro-ortiz@gmail.com', '3223334455', 'img/user/1720491737.webp', '12345', 1),
(3, 'jose', 'roa', 'jose-roa@gmail.com', '33334445566', 'img/user/1720496244.png', '12345', 2),
(4, 'marco', 'lopez', 'marco-lopez@gmail.com', '3445556677', 'img/user/1720496317.jpg', '12345', 2);

--
-- Volcado de datos para la tabla `negocio`
--

INSERT INTO `negocio` (`id`, `nombre`, `direccion`, `telefono`, `url_imagen`, `id_usuario`) VALUES
(1, 'style', 'cl 1 # 1 - 1', '1223344556', 'img/business/1720496738.jpg', 3),
(2, 'NiceLook', 'cl 2 # 2 - 2', '2334455667', 'img/business/1720496795.jpg', 3),
(3, 'TopLight', 'cl 3 # 3 - 3', '3445566778', 'img/business/1720496944.jpg', 4),
(4, 'youStyle', 'cl 4 # 4 - 4', '4556677889', 'img/business/1720496999.jpg', 4);

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `nombre`, `descripcion`, `valor`, `duracion`,`servicios_simultaneos`,`hora_entrada`,`hora_salida`, `url_imagen`, `id_negocio`, `id_tipo_servicio`) VALUES
(1, 'spa day', 'descripcion', 150000, 4,2,'07:00:00','15:00:00', 'img/service/1721180263.png', 1, 1),
(2, 'spa full', 'descripcion', 150000, 4,3,'07:00:00','15:00:00', 'img/service/1721180306.jpg', 2, 1),
(3, 'corte hombre', 'descripcion', 20000, 1,4,'07:00:00','15:00:00', 'img/service/1721180362.webp', 1, 2),
(4, 'corte mujer', 'descripcion', 25000, 2,2,'07:00:00','15:00:00', 'img/service/1721180413.jpg', 2, 2),
(5, 'afeitado', 'descripcion', 12000, 1,3,'07:00:00','15:00:00', 'img/service/1721180459.jpg', 1, 3),
(6, 'barva full', 'descripcion', 12000, 2,4,'07:00:00','15:00:00', 'img/service/1721180497.jpg', 2, 3),
(7, 'spa top', 'descripcion', 120000, 4,2,'07:00:00','15:00:00', 'img/service/1721181048.jpg', 3, 1),
(8, 'spa style', 'descripcion', 150000, 4,3,'07:00:00','15:00:00', 'img/service/1721181152.webp', 4, 1),
(9, 'tintura', 'descripcion', 25000, 2,4,'07:00:00','15:00:00', 'img/service/1721181251.jpg', 3, 2),
(10, 'cepillado', 'descripcion', 12000, 1,2,'07:00:00','15:00:00', 'img/service/1721181286.jpg', 4, 2),
(11, 'combo', 'descripcion', 24000, 2,3,'07:00:00','15:00:00', 'img/service/1721181329.webp', 3, 3),
(12, 'full', 'descripcion', 30000, 2,4,'07:00:00','15:00:00', 'img/service/1721181358.jpg', 4, 3);


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
