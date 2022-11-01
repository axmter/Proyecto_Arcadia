-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2022 a las 03:52:25
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_arcadia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roms`
--

CREATE TABLE `roms` (
  `id` int(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `consola` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `archivo` varchar(200) NOT NULL,
  `img` varchar(100) CHARACTER SET utf8 NOT NULL,
  `descr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roms`
--

INSERT INTO `roms` (`id`, `nombre`, `consola`, `genero`, `archivo`, `img`, `descr`) VALUES
(30, 'The Legend of Zelda: Ocarina of Time', 'Nintendo 64', 'Acción y Aventura', 'Legend_of_Zelda_The_-_Ocarina_of_Time_(Europe).zip', 'imagenes/ZeldaOoT.jpg', 'La historia del juego se enfoca en el joven héroe Link, quien emprende una aventura en el reino de Hyrule para detener a Ganondorf, rey de la tribu Gerudo, antes de que encuentre la Trifuerza, una reliquia sagrada capaz de concederle cualquier deseo a su poseedor.'),
(32, 'Super Mario 64', 'Nintendo 64', 'Plataformas', 'Super_Mario_64.zip', 'imagenes/Mario64.webp', 'Super Mario 64 es un videojuego de plataformas 3D donde el jugador controla a Mario a través de varios niveles. Cada nivel es un mundo cerrado en el que el jugador es libre de explorar a su antojo sin limitaciones de tiempo.'),
(33, 'Pokémon rojo fuego', 'Game Boy Advance', ' JRPG, Videojuego de estrategia', 'Pokemon_-_Edicion_Rojo_Fuego.zip', 'imagenes/Rojofuego.webp', 'El objetivo principal del juego es convertirse en el campeón de Kanto al derrotar a los cuatro mejores entrenadores Pokémon de la región, la Élite Four/Alto Mando. Otro objetivo es completar la Pokédex, una enciclopedia que se encuentra dentro del juego, mediante la obtención de las 151 especies Pokémon disponibles.'),
(34, 'The Legend of Zelda: Minish Cap', 'Game Boy Advance', 'Acción y Aventura', 'Legend_of_Zelda_The_-_The_Minish_Cap.zip', 'imagenes/Minish.webp', 'Un gorro mágico que habla llamado Ezero puede encoger a Link hasta el tamaño de los minish, una raza diminuta que vive en Hyrule. El juego conserva algunos elementos comunes de anteriores ediciones de la saga, como el desarrollo de la historia en el reino de Hyrule o la aparición de varios miembros de la raza Goron. mientras que a su vez introduce nuevos elementos, como las misteriosas piedras de la suerte entre otros.'),
(35, 'The Legend of Zelda: Majoras Mask', 'Nintendo 64', 'Acción y Aventura', 'Legend_of_Zelda_-_Majoras_Mask.zip', 'imagenes/Majoras.jpeg', 'Majoras Mask es el segundo juego en la saga de Zelda que tiene lugar fuera de la tierra de Hyrule, El modo de juego de Majoras Mask es posiblemente más profundo que el de Ocarina of Time, que cuenta con bombas, flechas, y la música como herramientas para resolver muchos de sus puzles.'),
(36, 'Dragon Ball: Advanced Adventure', 'Game Boy Advance', 'Peleas, Beat em up, Acción y Aventura', 'Dragon_Ball_-_Advanced_Adventure.zip', 'imagenes/dbaa.jpg', 'La historia que abarca Dragon Ball Advance Adventure comprende desde los primeros viajes de Goku, Bulma y Oolong hasta la batalla contra el poderoso Rey Piccolo, siendo uno de los pocos juegos en cubrir todas las aventuras del pequeño saiyan cuando éste todavía tenía su cola de mono.'),
(37, 'Space Invaders', 'Atari 7800', 'Matamarcianos', 'Space_Invaders.zip', 'imagenes/spa.jpg', 'El jugador controla un cañón que puede moverse a la derecha o izquierda y un botón de disparo.? Su objetivo es destruir filas de extraterrestres invasores (de los cuales hay tres tipos: con forma de calamar, de cangrejo y de pulpo) que van acercándose a la tierra cada vez más rápidamente a medida que el jugador va destruyendo a los enemigos.'),
(38, 'Pac-Man Collection', 'Atari 7800', 'Laberinto', 'Pac-Man_Collection.zip', 'imagenes/pac.jpg', 'El juego consiste en conducir a Pac-Man, una bola amarilla que abre y cierra la boca, por un laberinto. Suma puntos cuando come aquello que encuentra a su paso, bolitas y diferentes frutas, pero debe esquivar a cuatro fantasmas.'),
(39, 'Donkey Kong', 'Atari 7800', 'Plataformas', 'Donkey_Kong.zip', 'imagenes/dk.jpg', 'Es un primitivo juego del género plataformas que se centra en controlar al personaje sobre una serie de plataformas mientras evita obstáculos.'),
(40, 'Frogger', 'Atari 2600', 'Acción', 'Frogger_(USA).zip', 'imagenes/fr.jpg', 'El juego Frogger fue lanzado en 1981 y consistía en el simple objetivo de hacer cruzar una rana por una serie de obstáculos hasta su hogar.'),
(41, 'Q*bert', 'Atari 5200', 'Rompecabezas y plataformas', 'Q-bert_(USA).zip', 'imagenes/q.jpg', ' El objetivo es cambiar el color de todos los cubos de una pirámide haciendo que el protagonista salte encima de cada cubo mientras evita obstáculos y enemigos.'),
(42, 'Rampage', 'Atari 7800', 'Plataformas, Pelea', 'Rampage_(USA).zip', 'imagenes/rmp.jpg', 'El jugador toma el control de monstruos gigantes tratando de sobrevivir contra los ataques de fuerzas militares. Cada ronda es completada cuando una ciudad en particular queda completamente reducida a escombros.'),
(43, 'Super Smash Bros', 'Nintendo 64', 'Peleas, Plataformas', 'Super_Smash_Bros_(USA).zip', 'imagenes/smb.webp', 'El juego pertenece al género de lucha, siendo también un crossover de diversos y variados personajes de diversas franquicias de Nintendo, siendo estas las series de Mario, Donkey Kong, The Legend of Zelda, Kirby, Yoshis Island, Star Fox, Pokémon, Metroid, F-Zero y EarthBound.'),
(45, 'Duke Nukem', 'Nintendo 64', 'Shooter', 'Duke_Nukem_64_(USA).zip', 'imagenes/dknkm.jpg', 'Duke Nukem 64 es un port del shooter en primera persona para Nintendo 64 de la versión de PC (MS-DOS) Duke Nukem 3D. Hay algunos cambios respecto a la versión de PC. Algunas armas usan dos tipos de munición. La escopeta puede disparar rondas explosivas con devastadores resultados en los enemigos de Duke.'),
(46, 'Sonic Advance 3', 'Game Boy Advance', 'Plataformas', 'Sonic_Advance_3(EUR).zip', 'imagenes/snc3.webp', 'Sonic Adventure 3 es un videojuego desarrollado por Sega en 2004 para Game Boy Advance de Nintendo. Es el quinto juego de Sonic que aparece en el Game Boy Advance y, además, permite al jugador, por primera vez, elegir un compañero para que lo ayude en su aventura.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `conf_password` varchar(50) NOT NULL,
  `tipo_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `correo`, `password`, `conf_password`, `tipo_user`) VALUES
(0, 'Angel', 'La suya', 'ssifhasifas', 'fsisjfaofj@gmail.com', 'asdasdsfas', 'fasfsafsf', 'user'),
(4, 'Alejo', 'Barrera', 'AB', 'davo@gmail.com', '0320', '0320', 'Admin'),
(12, 'Sam', 'Som', 'aware', 'awar@gmail.com', 'awar', '', 'Admin'),
(18, 'aaaaa', 'asdfawefadfsa', 'alejo34', 'a@gmail.com', '1234', '', 'user'),
(19, 'adfsadawefawe4', 'juju', 'jajajaja', 'o@gmail.com', '', '', 'user'),
(21, 'Angel', 'Alastre', 'Axelavir', 'wo@gmail.com', '0320', '', 'Admin'),
(22, '', '', '', '', '', '', ''),
(23, 'Simon', 'Grisales', 'Simonsito', 'simon@gmail.com', '8080', '', 'user'),
(24, 'angelito', 'aaa', 'axmtercito', 'arroba@gmail.com', '0320', '', 'user'),
(25, 'manuela', 'rodriguez', 'manuduque', 'www@gmail.com', 'cristian', '', 'user'),
(26, 'Anliss', 'Alastre', 'Rush801', 'anliss.alastre@gmail.com', 'a21186539', '', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `roms`
--
ALTER TABLE `roms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `roms`
--
ALTER TABLE `roms`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
