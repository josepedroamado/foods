-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2018 at 03:18 PM
-- Server version: 5.5.60
-- PHP Version: 5.4.4-14+deb7u5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web`
--
CREATE DATABASE `web` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `web`;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCat` varchar(255) NOT NULL,
  `eliminado` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `nombreCat`, `eliminado`) VALUES
(1, 'General', b'0'),
(2, 'Postres', b'0'),
(3, 'Parrilla', b'0'),
(4, 'Asiática', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `comentario_id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `detalle` longtext NOT NULL,
  `respuesta` longtext NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `publicacion_id` int(11) NOT NULL,
  PRIMARY KEY (`comentario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`comentario_id`, `fecha`, `detalle`, `respuesta`, `usuario_id`, `publicacion_id`) VALUES
(1, '2018-07-23 00:47:29', 'Es realmente la receta de tu abuela?', 'Sí así es :)', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `favoritos`
--

CREATE TABLE IF NOT EXISTS `favoritos` (
  `favorito_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `publicacion_id` int(11) NOT NULL,
  PRIMARY KEY (`favorito_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `favoritos`
--

INSERT INTO `favoritos` (`favorito_id`, `usuario_id`, `publicacion_id`) VALUES
(1, 2, 1),
(6, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `publicacion_id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `texto` longtext NOT NULL,
  `fecha` datetime NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `eliminado` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`publicacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `publicaciones`
--

INSERT INTO `publicaciones` (`publicacion_id`, `titulo`, `texto`, `fecha`, `imagen`, `categoria_id`, `tipo_id`, `usuario_id`, `eliminado`) VALUES
(1, 'GALLETITAS CON HARINA DE ALMENDRAS Y COCO SIN AZÚCAR NI TACC', 'Desde que me diagnosticaron diabetes los hidratos de carbono dentro mi alimentación se resignificaron. Si bien puedo comerlos, no tengo la misma libertad que antes para comer la cantidad que yo quiera, cuando quiera. A poco de cumplirse un año de mi DBT tipo 1, sigo investigando cuáles son las mejores opciones para no comer tantos hidratos, y por ende, para no usar tanta insulina. Pero no quiero aburrir, más allá de mi condición hoy les quiero proponer una receta que surge de esta pequeña investigación que estoy haciendo, el reemplazo de las harinas más tradicionales, por otras más saludables. Lamentablemente muchas veces lo saludable va de la mano de lo caro, y en Argentina no hay tantas opciones accesibles para quienes tenemos diabetes, así que por el momento hay que rebuscárselas. Les cuento que estas galletitas también las pueden comer los celíacos, ya que no tiene TACC. Además son ideales para que les preparen a los más peques (y con su ayuda), ya que son una alternativa rica y casera, que siempre es una mejor opción. A Ela le encantaron, y además de comerlas me ayudó a sacar las fotos!\nLes comparto la receta, me encantaría que me cuenten qué les parecieron!\n\n\n\n\n\n\n\n\n\nSobre la harina de almendras: \nHay muchas dietéticas y negocios que venden harina de almendras, que suele ser bastante cara. Les recomiendo que busquen precios. También pueden hacerla en casa. Yo en mi experimentación quise probar las dos alernativas, compré un paquete de 1/2 kilo a $210 en el mayorista El Portugués (recomiendo fuerte), pero también compré almendras para hacer la harina desde cero. Las puse en agua hirviendo para aflojar la cáscara, las tosté un poco en el horno para que se sequen bien, y una vez frías las pasé por un picador de alimentos. Si bien la textura no quedó tan fina como quería, me sirvió para hacer estas galles. Pero para hacer los budines que tengo pensado voy a usar la comprada, que es bastante más finita. \n\nSobre la harina de coco: \nOtra alternativa interesante a las harinas tradicionales es la harina de coco, que hice desde coco rallado, lo tosté en el horno a fuego suave, y lo pasé por el picador de alimentos. Quedó muy rica, y le dio un buen sabor a las galletitas, aunque no es para usar siempre ya que el coco suele invadir bastante. \n\nEstas galletitas son bien básicas, pero me pareció que por ser la primera vez que las hacía, no hacía falta incorporarle demasiados ingredientes extra. Ustedes si quieren le pueden agregar alguna ralladura, chips de chocolate, cacao, canela, etc. \n\nAhora si, la receta!\n\nIngredientes: \n\n		Harina de almendras: 150g\n		Harina de coco: 100g (opcional, si quieren pueden hacer todo con harina de almendras, o agregarle un poco de harina integral, si pueden comerla)\n		Manteca a temperatura ambiente: 50g (pueden reemplazarla por ghee)\n		Edulcorante tipo sucralosa o stevia: 4 sobres (0,8g cada sobre)\n		Esencia de vainilla: 1 cucharadita\n		Huevos: 1\n\n\nPaso 1: \nEn un bowl colocar las harinas y agregar la manteca o ghee a temperatura ambiente cortada en cubos, aplastar con un tenedor. \n\n\nPaso 2: Agregar el huevo, el endulzante y la esencia de vainilla. Integrar todo hasta formar una masa. \n\nPaso 3: Envolver la masa en film, dándole una forma alargada para poder cortar después las galletitas. Llevar a la heladera por 1 hora. \n\nPaso 4: Cortar las galletitas y colocar sobre una placa con un poco de manteca y almidón de maíz o harina (si la toleran). Llevar a horno precalentado a temperatura suave y cocinar por, aproximadamente, 12/14 minutos. Dejar enfriar sobre una rejilla. \n', '2018-07-23 00:00:00', 'IMG_1.JPG', 2, 1, 1, b'0'),
(2, 'TIMBAL DE ARROZ O EL "ARROZ BELGA" DE MI ABUELA MAMAMA', 'Hola! Hoy es el último día del año, y para despedirlo quiero recordar a mi abuela Mamama, tan central en este blog, que cumplía años cada 31 de diciembre. \nEn época de fiestas, mi abuela se pasaba todo el día en la cocina, y a pesar de ser su cumpleaños no dejaba de agasajarnos ni un poco. Entre sus tradiciones para estas fechas, no faltaba el timbal de arroz, al que ella llamaba "arroz belga", nunca sabré por qué, ya que por lo que estuve investigando el arroz belga es bastante distinto al que ella preparaba. \nLa cuestión es que el arroz no podía faltar en año nuevo porque significa "abundancia" para el año que comienza, y en mi familia la abundancia era muy preciada ya que, si bien nunca nos faltó nada, tampoco "nadábamos en la abudancia", como solía decir la otra Martita de la familia, mi mamá (Mamama también se llamaba Marta). Así que acá aprovecho para homenajear a estas dos Martas que tanto extraño, y que en estas fechas me tocan la fibra de la sensibilidad. \nDeseo un año de felicidad, de proyectos cumplidos, de nuevos sueños, y también de la mencionada "abundancia", en estos días de tanta carencia. Abundancia de amor, abundancia de solidaridad, abundancia de abrazos, abundancia de acuerdos, abundancia de consensos, abundancia de trabajo, abundancia de salud y abundancia de proyectos realizados. Feliz año!!', '2018-07-12 00:00:00', 'IMG_2.JPG', 1, 2, 1, b'1'),
(3, 'Test', 'Test de cuerpo', '2018-08-10 00:00:00', 'IMG_2.JPG', 1, 1, 3, b'1'),
(4, 'Receta del viejo', 'El postre del gran anciano', '2018-08-11 00:00:00', '20180811214547_ADRIAN SASSON.jpg', 2, 1, 3, b'1'),
(5, 'Receta del Flan', 'Flan de Huevo:\r\n\r\nIngredientes:\r\n1\r\n2\r\n3\r\n\r\nPasos:\r\n1\r\n2\r\n3', '2018-08-11 18:55:00', '20180811215337_flan-de-huevo-2a-650x366.jpg', 2, 1, 3, b'0'),
(6, 'Receta del Alpino', 'Como hacer un alpino de carrera:\r\n\r\n', '2018-08-11 18:57:00', '20180811215509_91-fotoProducto-277834608.jpg', 2, 1, 3, b'0'),
(7, 'torta romana', 'Es una torta con mousse de chocolate o dulce de leche, acompañada con helado, por debajo masa de tarta dulce de consistencia de ojaldre. Puede contener maní, avellanas, nueces o almendras partidas. Muy conocidas en recetas durante los años 20´s. Su espectacular savor y frescura la ha mantenido hasta la actualidad como uno de los principales platos demandados por los turistas en ese país.', '2018-08-12 01:40:17', '20180812014017_tortaRumana.jpg', 1, 1, 1, b'0'),
(8, 'tortas dell estilo de rumania', 'Estas tortas son exquisitas la hacía mi abuela, mi madre la hace hoy día y jamás pierde su fama dentro de la familia-', '2018-08-12 01:48:09', '20180812014809_tortaRumana.jpg', 2, 2, 4, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `tipo_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreTipo` varchar(255) NOT NULL,
  PRIMARY KEY (`tipo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tipos`
--

INSERT INTO `tipos` (`tipo_id`, `nombreTipo`) VALUES
(1, 'Receta'),
(2, 'Nota');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreUsr` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `administrador` tinyint(1) NOT NULL DEFAULT '0',
  `eliminado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nombreUsr`, `apellido`, `email`, `password`, `administrador`, `eliminado`) VALUES
(1, 'Admin', 'Prueba', 'admin@prueba.com', '823da4223e46ec671a10ea13d7823534', 1, 0),
(2, 'Usuario', 'Prueba', 'usuario@prueba.com', '823da4223e46ec671a10ea13d7823534', 0, 0),
(3, 'José Pedro', 'Amado', 'jose.pedro.amado@gmail.com', 'bc5f8fa4ccaeba6736bddec1261562b8', 1, 0),
(4, 'steffano', 'britos', 'steffanoelhaz@gmail.com', 'b4af804009cb036a4ccdc33431ef9ac9', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
