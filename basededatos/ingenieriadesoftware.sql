-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 10-05-2017 a las 15:40:16
-- Versión del servidor: 5.6.28
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `ingenieriadesoftware`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoja1`
--

CREATE TABLE `hoja1` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(19) DEFAULT NULL,
  `Apellido1` varchar(16) DEFAULT NULL,
  `Apellido2` varchar(12) DEFAULT NULL,
  `Dni` varchar(9) DEFAULT NULL,
  `Fecha_alta` varchar(9) DEFAULT NULL,
  `Categoria` varchar(16) DEFAULT NULL,
  `Nombre_empresa` varchar(17) DEFAULT NULL,
  `Cif_empresa` varchar(9) DEFAULT NULL,
  `Cod_cuenta` varchar(22) DEFAULT NULL,
  `IBAN` varchar(24) DEFAULT NULL,
  `Prorrata_extra` varchar(2) DEFAULT NULL,
  `Fecha_baja_laboral` varchar(9) DEFAULT 'null',
  `Fecha_alta_laboral` varchar(9) DEFAULT NULL,
  `Horas_extra_forzadas` int(1) DEFAULT NULL,
  `Horas_extra_voluntarias` int(1) DEFAULT NULL,
  `email` varchar(26) DEFAULT NULL,
  `Password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hoja1`
--

INSERT INTO `hoja1` (`id`, `Nombre`, `Apellido1`, `Apellido2`, `Dni`, `Fecha_alta`, `Categoria`, `Nombre_empresa`, `Cif_empresa`, `Cod_cuenta`, `IBAN`, `Prorrata_extra`, `Fecha_baja_laboral`, `Fecha_alta_laboral`, `Horas_extra_forzadas`, `Horas_extra_voluntarias`, `email`, `Password`) VALUES
(1, 'Juan', 'Martinez', 'Fernandez', '01234567L', '3/1/2010', 'Operador', 'HP INC', 'B28260933', '20960583831234500000', 'ES3220960583831234500000', 'NO', 'null', 'null', 0, 5, 'Jumafe00@hpinc.es', 'GsSqM82t'),
(2, 'Ana Isabel', 'Fernández', 'Alaiz', '09548295Y', '7/1/2008', 'Administrativo', 'HP INC', 'B28260933', '20960043043075700000', 'ES2120960043043075700000', 'NO', 'null', 'null', NULL, NULL, 'Anfeal00@hpinc.es', 'G39VQer2'),
(3, 'Maria', 'González', 'Arias', '09548827D', '2/1/2006', 'Limpiador', 'HP INC', 'B28260933', '20960031442124800000', 'ES7920960031442124800000', 'NO', 'null', 'null', NULL, NULL, 'Magoar00@hpinc.es', 'S6y6T57f'),
(4, 'Miguel', 'De la puente', 'Alonso', '09784112G', '1/1/2000', 'Cocinero', 'HP INC', 'B28260933', '20960043042158800000', 'ES8220960043042158800000', 'SI', 'null', 'null', NULL, NULL, 'Mideal00@hpinc.es', '9HBCZmGp'),
(5, 'Laura', 'García', 'Prieto', '09611087P', '5/1/2012', 'Ordenanza', 'HP INC', 'B28260933', '1826530120201560000', 'ES9001826530120201560000', 'NO', 'null', 'null', NULL, NULL, 'Lagapr00@hpinc.es', 'S3YQqTNJ'),
(6, 'Fernando', 'Llamazares', 'Ramos', '24304263W', '12/1/2005', 'Jefe de sección', 'HP INC', 'B28260933', '20960043072158300000', 'ES8020960043033000100000', 'NO', 'null', 'null', NULL, NULL, 'Mocelo00@hpinc.es', '7y5BncpJ'),
(7, 'Natividad', 'Valverde', 'García', '09611076C', '3/1/2009', 'Programador', 'HP INC', 'B28260933', '20960043023096200000', 'ES9020960043023096200000', 'SI', 'null', 'null', NULL, NULL, 'Navaga00@hpinc.es', '87H4u6tk'),
(8, 'Pilar', 'Molina', 'Vara', '09645569J', '10/1/2012', 'Analista', 'HP INC', 'B28260933', '20960056133231500000', 'ES2220960056133231500000', 'NO', '3/31/2016', '4/12/2016', NULL, NULL, 'Pimova00@hpinc.es', 'Sr29C7fF'),
(9, 'Marta', 'Coello ', 'Castro', '24571671N', '9/1/2006', 'Coordinador', 'HP INC', 'B28260933', '20960043073071400000', 'ES5020960043073071400000', 'SI', 'null', 'null', NULL, NULL, 'Macoca00@hpinc.es', 'v6X77wZN'),
(10, 'Francisco', 'Robles', 'Alonso', '09743327K', '7/1/2000', 'Operador', 'HP INC', 'B28260933', '20960043013468900000', 'ES4420960043013468900000', 'NO', 'null', 'null', NULL, NULL, 'Frroal00@hpinc.es', 'N8Sm4swd'),
(11, 'Antonio', 'Bueno', 'Fernández', '09741995T', '3/1/2009', 'Operador', 'HP INC', 'B28260933', '20960043032159000000', 'ES3720960043032159000000', 'SI', 'null', 'null', NULL, NULL, 'Anbufe00@hpinc.es', 'tm4UrcR2'),
(12, 'Jesús', 'Bayón', 'Casado', '24304263W', '8/1/2012', 'Operador', 'HP INC', 'B28260933', '20960043072158300000', 'ES8020960043033000100000', 'NO', 'null', 'null', NULL, NULL, 'Mocelo00@hpinc.es', '7y5BncpJ'),
(13, 'David', 'Jimeno', 'Martínez', '09548122V', '2/1/2000', 'Limpiador', 'HP INC', 'B28260933', '20960043033000100000', 'ES8020960043033000100000', 'NO', 'null', 'null', NULL, NULL, 'Dajima00@hpinc.es', '2CpJb8W3'),
(14, 'José Ignacio', 'Mendoza', 'Iglesias', '71393402E', '4/1/2008', 'Jefe de sección', 'HP INC', 'B28260933', '20960055703969300000', 'ES3920960055703969300000', 'NO', 'null', 'null', NULL, NULL, 'Jomeig00@hpinc.es', '3FPS5uw4'),
(15, 'Marcos', 'Vega', 'Torre', '09569134F', '6/1/2007', 'Jefe división', 'HP INC', 'B28260933', '20960043072158300000', 'ES1820960043072158300000', 'NO', 'null', 'null', NULL, NULL, 'Maveto00@hpinc.es', '6wr8PKgF'),
(16, 'Margarita', 'Pique', 'Diaz', '09706118A', '10/1/2010', 'Ordenanza', 'HP INC', 'B28260933', '20960043013631200000', 'ES8920960043013923900000', 'SI', 'null', 'null', NULL, NULL, 'Mabeap00@hpinc.es', 'AC3p6guc'),
(17, 'Aitor', 'Lopez', 'Maestro', '09548213Q', '12/1/2011', 'Cuidador', 'HP INC', 'B28260933', '20960031432125000000', 'ES3420960031432125000000', 'SI', 'null', 'null', NULL, NULL, 'Ailoma00@hpinc.es', 'Uj9fVfeC'),
(18, 'Alberto', 'Lorenzana', 'Llamas', '09601646C', '5/1/2012', 'Programador', 'HP INC', 'B28260933', '20960043002158000000', 'ES7920960043002158000000', 'SI', 'null', 'null', NULL, NULL, 'Alloll00@hpinc.es', '9Ynq7D4c'),
(19, 'Alejandro', 'Fernández', 'Domínguez', '09611086F', '5/1/2003', 'Limpiador', 'HP INC', 'B28260933', '20480119450300000000', 'ES4120480119450300000000', 'NO', 'null', 'null', NULL, NULL, 'Alfedo00@hpinc.es', 'a9eMH39G'),
(20, 'Sara', 'Sánchez', 'Asensio', '09548206D', '2/1/2002', 'Jefe de sección', 'HP INC', 'B28260933', '20960043072158300000', 'ES1820960043072158300000', 'NO', 'null', 'null', NULL, NULL, 'Sasaas00@hpinc.es', 'e9YZDcx8'),
(21, 'Ana Belén', 'Prieto', 'Marín', '09671968P', '7/1/2001', 'Operador', 'HP INC', 'B28260933', '20381864103001000000', 'ES0220381864103001000000', 'NO', 'null', 'null', 2, 2, 'Anprma00@hpinc.es', 'sJQDP4Ru'),
(22, 'Andrés', 'Getino', 'Serrano', '09724050H', '9/1/2007', 'Ordenanza', 'HP INC', 'B28260933', '20960043062158100000', 'ES9020960043062158100000', 'NO', '9/1/2015', '4/7/2016', NULL, NULL, 'Angese00@hpinc.es', '5t7mXkTr'),
(23, 'Bernardo', 'Chamorro', 'Castellanos', '09634700T', '8/1/2001', 'Auxiliar', 'HP INC', 'B28260933', '20960370123730700000', 'ES4320960370123730700000', 'SI', 'null', 'null', NULL, NULL, 'Bechca00@hpinc.es', 'gCT3endL'),
(24, 'Blas', 'Nuñez', 'Blanco', '02031127C', '2/1/2000', 'Jefe división', 'HP INC', 'B28260933', '20960031442124800000', 'ES7920960031442124800000', 'NO', 'null', 'null', NULL, NULL, 'Blnubl00@hpinc.es', '5zGTTXDa'),
(25, 'Bonifacio', 'Alcoba', 'Alonso', '09548247G', '12/1/2007', 'Ordenanza', 'HP INC', 'B28260933', '20960000823305602000', 'ES5920960000823305602000', 'SI', '4/5/2016', 'null', NULL, NULL, 'Boalal00@hpinc.es', 'ahnB3jr3'),
(26, 'Braulio', 'Feliz', 'Pisabarro', '09685088H', '10/1/2014', 'Limpiador', 'HP INC', 'B28260933', '20960082553703400000', 'ES2720960082553703400000', 'SI', 'null', 'null', NULL, NULL, 'Brfepi00@hpinc.es', 'sKVCM38x'),
(27, 'Carmen', 'Diez', 'López', '71404623L', '4/1/2006', 'Programador', 'HP INC', 'B28260933', '20960688463981200000', 'ES7920960688463981200000', 'SI', 'null', 'null', NULL, NULL, 'Cadilo00@hpinc.es', 'qtMhG8HX'),
(28, 'Carlos', 'Pardo', 'De la fuente', '71393419Q', '5/1/2001', 'Auxiliar', 'HP INC', 'B28260933', '21040279959128000000', 'ES6921040279959128000000', 'SI', 'null', 'null', NULL, NULL, 'Capade00@hpinc.es', 'j4p4XycN'),
(29, 'Cecilia', 'Perez', 'García', '09771193B', '11/1/2013', 'Operador', 'HP INC', 'B28260933', '20960043012158900000', 'ES6920960043012158900000', 'SI', 'null', 'null', NULL, NULL, 'Cepega00@hpinc.es', 'eUgPDu55'),
(30, 'Carolina', 'Mielgo', 'Gutierrez', '09741138V', '3/1/2014', 'Analista', 'HP INC', 'B28260933', '20960031433526402000', 'ES2720960031433526402000', 'NO', 'null', 'null', NULL, NULL, 'Camigu00@hpinc.es', 'wkMrt9TX'),
(31, 'Casimiro', 'González', 'Alonso', '09570285P', '2/1/2015', 'Cocinero', 'HP INC', 'B28260933', '20960043093396600000', 'ES5920960043093396600000', 'NO', 'null', 'null', NULL, NULL, 'Cagoal00@hpinc.es', 'VaByQ7hZ'),
(32, 'Clara', 'Presa', 'Álvarez', '71425232C', '9/1/2008', 'Ordenanza', 'HP INC', 'B28260933', '1826530100201540000', 'ES2101826530100201540000', 'NO', 'null', 'null', NULL, NULL, 'Clpral00@hpinc.es', 'qCf9yNNU'),
(33, 'Cristina', 'Salas', 'Benavides', '09719898Y', '6/1/2002', 'Programador', 'HP INC', 'B28260933', '20960043013356200000', 'ES5320960043013356200000', 'NO', 'null', 'null', NULL, NULL, 'Crsabe00@hpinc.es', '4UcvYE8S'),
(34, 'Daniel', 'Herreras', 'Domingo', '71406027C', '4/1/2007', 'Auxiliar', 'HP INC', 'B28260933', '20660045340900000000', 'ES4220660045340900000000', 'NO', 'null', 'null', NULL, NULL, 'Dahedo00@hpinc.es', 'nV76gJyQ'),
(35, 'Gabriel', 'Alvarez', 'Moral', '09611099C', '4/1/2010', 'Limpiador', 'HP INC', 'B28260933', '20960043082158500000', 'ES4320960043082158500000', 'SI', 'null', 'null', NULL, NULL, 'Gaalmo00@hpinc.es', 'N9hVY7v7'),
(36, 'Consuelo', 'Francisco', 'López', '09632873J', '4/1/2009', 'Coordinador', 'HP INC', 'B28260933', '491613522190086000', 'ES9700491613522190086000', 'SI', 'null', 'null', NULL, NULL, 'Cofrlo00@hpinc.es', '6zqfFXf6'),
(37, 'Clementina', 'Montiel', 'Martínes', '09714235R', '4/1/2011', 'Jefe de sección', 'HP INC', 'B28260933', '20800936933040000000', 'ES4920800936933040000000', 'SI', 'null', 'null', NULL, NULL, 'Clmoma00@hpinc.es', 'vsT3RW7f'),
(38, 'Clotilde', 'Rodríguez', 'Labarga', '09785530L', '3/1/2005', 'Analista', 'HP INC', 'B28260933', '20960624253675000000', 'ES7720960624253675000000', 'NO', 'null', 'null', NULL, NULL, 'Clrola00@hpinc.es', 'F5ctJNn3'),
(39, 'Cruz', 'Del amo', 'Flórez', '09548495E', '9/1/2014', 'Auxiliar', 'HP INC', 'B28260933', '20960043063427800000', 'ES4320960043063427800000', 'SI', 'null', 'null', NULL, NULL, 'Crdefl00@hpinc.es', '2TtG2vxz'),
(40, 'Concepción', 'Cabeza', 'Quintanilla', '09611100K', '9/1/2009', 'Operador', 'HP INC', 'B28260933', '20960043083597600000', 'ES6220960043083597600000', 'NO', 'null', 'null', NULL, NULL, 'Cocaqu00@hpinc.es', 'r5MbjPdw'),
(41, 'Demetrio', 'Aller', 'Castrillo', '09611071S', '10/1/2010', 'Jefe división', 'HP INC', 'B28260933', '21040279999107900000', 'ES5021040279999107900000', 'SI', 'null', 'null', NULL, NULL, 'Dealca00@hpinc.es', '3cUu69P5'),
(42, 'Diana', 'Fidalgo', 'Fernández', '71393411P', '7/1/2007', 'Programador', 'HP INC', 'B28260933', '1826530120201560000', 'ES9001826530120201560000', 'NO', '1/3/2016', 'null', NULL, NULL, 'Difife00@hpinc.es', 'dbsnM3SN'),
(43, 'Elena', 'García', 'García', '71404625K', '6/1/2006', 'Cocinero', 'HP INC', 'B28260933', '20970308630104800000', 'ES4820970308630104800000', 'SI', 'null', 'null', NULL, NULL, 'Elgaga00@hpinc.es', 'XEE5UmXT'),
(44, 'Elaio', 'Cabero', 'Guerra', '09779552K', '11/1/2001', 'Cuidador', 'HP INC', 'B28260933', '20960043083680000000', 'ES1620960043083680000000', 'NO', 'null', 'null', NULL, NULL, 'Elcagu00@hpinc.es', 'ChyP2BDk'),
(45, 'Dorina', 'Bueno', 'González', '71609083D', '6/1/2009', 'Ordenanza', 'HP INC', 'B28260933', '20910935083000000000', 'ES5220910935083000000000', 'SI', 'null', 'null', NULL, NULL, 'Dobugo00@hpinc.es', 'Th6TQGgw'),
(46, 'Dolores', 'Santiago', 'López', '09548416N', '6/1/2008', 'Limpiador', 'HP INC', 'B28260933', '20910936583000000000', 'ES6420910936583000000000', 'NO', 'null', 'null', NULL, NULL, 'Dosalo00@hpinc.es', 'teeJ4vJ3'),
(47, 'Diego', 'García', 'Fresco', '09548245W', '3/1/2002', 'Operador', 'HP INC', 'B28260933', '20960043033010900000', 'ES2520960043033010900000', 'SI', 'null', 'null', NULL, NULL, 'Digafr00@hpinc.es', '7NbJmKuT'),
(48, 'Elisa', 'Fidalgo', 'Martínez', '71393352H', '12/1/2014', 'Coordinador', 'HP INC', 'B28260933', '20858274210330100000', 'ES2820858274210330100000', 'NO', 'null', 'null', NULL, NULL, 'Elfima00@hpinc.es', 'm8UhC2jf'),
(49, 'Emiliano', 'Castro', 'Puente', '09738010V', '11/1/2001', 'Analista', 'HP INC', 'B28260933', '1823330760200520000', 'ES6201823330760200520000', 'SI', 'null', 'null', NULL, NULL, 'Emcapu00@hpinc.es', 'tgkUH4Ex'),
(50, 'Encarnación', 'Sánchez', 'Herrero', '09570211A', '1/1/2016', 'Administrativo', 'HP INC', 'B28260933', '20960001273303300000', 'ES7120960001273303300000', 'NO', 'null', 'null', 3, 3, 'Ensahe00@hpinc.es', '6rUk7wn5'),
(51, 'Eugenio', 'Gallego', 'Álvarez', '09640671Z', '1/1/2005', 'Programador', 'HP INC', 'B28260933', '1280021040104580000', 'ES1201280021040104580000', 'SI', 'null', 'null', NULL, NULL, 'Eugaal00@hpinc.es', 'D2pFmse6'),
(52, 'Eulalia', 'Cascallana', 'Jaular', '02614035Q', '2/1/2008', 'Jefe división', 'HP INC', 'B28260933', '30585410502810000000', 'ES4630585410502810000000', 'SI', 'null', 'null', NULL, NULL, 'Eucaja00@hpinc.es', 'vHVXV97d'),
(53, 'Felix', 'Gomara', 'Iban', '09689676Y', '3/1/2010', 'Programador', 'HP INC', 'B28260933', '21001599290100000000', 'ES3921001599290100000000', 'SI', 'null', 'null', NULL, NULL, 'Fegoib00@hpinc.es', 'u6nsqALf'),
(54, 'Francisco', 'Robles', 'Dominguez', '09548443Q', '7/1/2012', 'Auxiliar', 'HP INC', 'B28260933', '1826530120201560000', 'ES9001826530120201560000', 'NO', 'null', 'null', NULL, NULL, 'Frrodo00@hpinc.es', 'xP2DgYMU'),
(55, 'Generoso', 'Soto', 'Sánchez', '71393354C', '8/1/2014', 'Jefe de sección', 'HP INC', 'B28260933', '20389305784500000000', 'ES5520389305784500000000', 'NO', 'null', 'null', NULL, NULL, 'Gesosa00@hpinc.es', 'W2aJfc7L'),
(56, 'Herminia', 'Santín', 'Fernández', '10405904Z', '2/1/2016', 'Ordenanza', 'HP INC', 'B28260933', '20960043013106900000', 'ES0520960043013106900000', 'NO', 'null', 'null', NULL, NULL, 'Hesafe00@hpinc.es', 'EfQqv8Ef'),
(57, 'Héctor', 'Melcón', 'Otero', '09548392B', '4/1/2007', 'Limpiador', 'HP INC', 'B28260933', '20960031463348300000', 'ES8420960031463348300000', 'SI', 'null', 'null', NULL, NULL, 'Hemeot00@hpinc.es', 'rT2JXbMq'),
(58, 'Gonzalo', 'Castañeda', 'García', '09570242B', '7/1/2009', 'Operador', 'HP INC', 'B28260933', '20960043003445200000', 'ES3020960043003445200000', 'SI', 'null', 'null', NULL, NULL, 'Gocaga00@hpinc.es', 'muB7LQCn'),
(59, 'Germán', 'Aller', 'Bariales', '09314602Q', '3/1/2011', 'Programador', 'HP INC', 'B28260933', '20960043092158700000', 'ES6820960043092158700000', 'SI', 'null', 'null', NULL, NULL, 'Gealba00@hpinc.es', 'gG3Q2bjQ'),
(60, 'Inés', 'Riverto', 'Fuertes', '09548150E', '8/1/2000', 'Jefe de servicio', 'HP INC', 'B28260933', '30850094102375900000', 'ES4030850094102375900000', 'SI', 'null', 'null', NULL, NULL, 'Inrifu00@hpinc.es', 'ECszKn8K'),
(61, 'Hugo', 'Echevarria', 'Almanzar', '09810142K', '11/1/2009', 'Coordinador', 'HP INC', 'B28260933', '20960043013407000000', 'ES3520960043013407000000', 'NO', 'null', 'null', NULL, NULL, 'Huecal00@hpinc.es', 'Y6dnj2K8'),
(62, 'Ismael', 'Fernández', 'Fresco', '09545570H', '10/1/2006', 'Administrativo', 'HP INC', 'B28260933', '815670770006150000', 'ES6900815670770006150000', 'NO', 'null', 'null', NULL, NULL, 'Isfefr00@hpinc.es', 'EmCt9M8X'),
(63, 'Israel', 'Alonso', 'Rodríguez', '10940987W', '4/1/2004', 'Analista', 'HP INC', 'B28260933', '20960043073548200000', 'ES7220960043073548200000', 'NO', 'null', 'null', NULL, NULL, 'Isalro00@hpinc.es', '8fsE9pCd'),
(64, 'Julio Ernesto', 'Gutierrez', 'López', '71393396Q', '10/1/2009', 'Ordenanza', 'HP INC', 'B28260933', '30590007721543700000', 'ES2730590007721543700000', 'NO', 'null', 'null', NULL, NULL, 'Jugulo00@hpinc.es', 'SwAppC46'),
(65, 'Justina', 'Martínez', 'García', '10575307E', '5/1/2006', 'Auxiliar', 'HP INC', 'B28260933', '20960043042158800000', 'ES8220960043042158800000', 'NO', 'null', 'null', NULL, NULL, 'Jumaga00@hpinc.es', 'F7ypeu8x'),
(66, 'Julio Pedro', 'Otero', 'Fernández', '09632539R', '7/1/2011', 'Operador', 'HP INC', 'B28260933', '20960043013652100000', 'ES0220960043013652100000', 'NO', 'null', 'null', NULL, NULL, 'Juotfe00@hpinc.es', 'ZVTXh2zT'),
(67, 'Víctor', 'Pérez', 'Pérez', '09548283V', '4/1/2002', 'Administrativo', 'HP INC', 'B28260933', '20960509763011900000', 'ES5020960509763011900000', 'NO', 'null', 'null', 7, 1, 'Vipepe00@hpinc.es', 'uG3UkcYs'),
(68, 'Tomás', 'Rodríguez', 'García', '09749147E', '7/1/2009', 'Programador', 'HP INC', 'B28260933', '20960043053029000000', 'ES6320960043053029000000', 'NO', 'null', 'null', NULL, NULL, 'Toroga00@hpinc.es', '8mtYVqs6'),
(69, 'Sonia', 'Sevillano', 'Gomez', '02518676S', '3/1/2014', 'Jefe división', 'HP INC', 'B28260933', '20910936583000000000', 'ES6420910936583000000000', 'NO', 'null', 'null', NULL, NULL, 'Sosego00@hpinc.es', 'V4k2uAPN'),
(70, 'Soledad', 'Arias', 'Diez', '09786363R', '2/1/2009', 'Administrativo', 'HP INC', 'B28260933', '20960043082158500000', 'ES4320960043082158500000', 'SI', 'null', 'null', NULL, NULL, 'Soardi00@hpinc.es', 'CZ8drbLy'),
(71, 'Serafín', 'Carro', 'Fuertes', '09758365V', '11/1/2002', 'Ordenanza', 'HP INC', 'B28260933', '20910936583000000000', 'ES6420910936583000000000', 'NO', 'null', 'null', NULL, NULL, 'Secafu00@hpinc.es', 'tw9pcXRH'),
(72, 'Sergio', 'Sutil', 'Sánchez', '09611066X', '9/1/2008', 'Limpiador', 'HP INC', 'B28260933', '495626302395009000', 'ES3400495626302395009000', 'NO', 'null', 'null', NULL, NULL, 'Sesusa00@hpinc.es', 'a3Dh7HGn'),
(73, 'Rosa', 'Galán', 'Amo', '71878948S', '6/1/2003', 'Coordinador', 'HP INC', 'B28260933', '20960043083522200000', 'ES4920960043083522200000', 'NO', 'null', 'null', NULL, NULL, 'Rogaam00@hpinc.es', 'SphqxD2v'),
(74, 'Rubén Darío', 'Álvarez', 'Fuertes', '09548287K', '7/1/2001', 'Analista', 'HP INC', 'B28260933', '20960043012158900000', 'ES6920960043012158900000', 'SI', '12/1/2015', 'null', NULL, NULL, 'Rualfu00@hpinc.es', '3h5kFXWS'),
(75, 'Rosario', 'Laiz', 'Domínguez', '09548451R', '12/1/2005', 'Administrativo', 'HP INC', 'B28260933', '20960031423352600000', 'ES2020960031423352600000', 'NO', 'null', 'null', NULL, NULL, 'Rolado00@hpinc.es', 'JajP862L'),
(76, 'Rocío', 'Andrés', 'Gil', '09481741Z', '11/1/2003', 'Calefactor', 'HP INC', 'B28260933', '20480160150300000000', 'ES9520480160150300000000', 'NO', 'null', 'null', NULL, NULL, 'Roangi00@hpinc.es', 'yG4x6mgm'),
(77, 'Ramón ', 'Prieto', 'García', '00538394X', '5/1/1996', 'Operador', 'HP INC', 'B28260933', '20960043032159000000', 'ES3720960043032159000000', 'NO', 'null', 'null', NULL, NULL, 'Raprga00@hpinc.es', 'eWVsV5db'),
(78, 'Paulina', 'Orejas', 'Díez', '09797384M', '3/1/1998', 'Auxiliar', 'HP INC', 'B28260933', '306033390387230000', 'ES6300306033390387230000', 'NO', 'null', 'null', NULL, NULL, 'Paordi00@hpinc.es', 'U4aS7AbJ'),
(79, 'Pedro', 'Olle', 'Sutil', '09548215H', '5/1/1997', 'Ordenanza', 'HP INC', 'B28260933', '30850072852203400000', 'ES5630850072852203400000', 'SI', 'null', 'null', NULL, NULL, 'Peolsu00@hpinc.es', 'Vcr7PF8d'),
(80, 'Oscar', 'Márquez', 'Blanco', '09779285F', '10/1/1996', 'Programador', 'HP INC', 'B28260933', '1822806990209990000', 'ES3301822806990209990000', 'SI', 'null', 'null', NULL, NULL, 'Osmabl00@hpinc.es', '3uT72rTH'),
(81, 'Mario', 'Cabero', 'Iglesias', '71597570L', '6/1/1996', 'Auxiliar', 'HP INC', 'B28260933', '20960043002158000000', 'ES7920960043002158000000', 'SI', 'null', 'null', 6, 9, 'Macaig00@hpinc.es', 'sQsa8mcf'),
(82, 'Nicolás', 'Manzanares', 'Cadenas', '09570258G', '1/1/1999', 'Administrativo', 'HP INC', 'B28260933', '20910936583000000000', 'ES6420910936583000000000', 'SI', 'null', 'null', NULL, NULL, 'Nimaca00@hpinc.es', 'F7gGRKqd'),
(83, 'Nieves', 'Guerra', 'Morán', '09548486J', '8/1/2013', 'Operador', 'HP INC', 'B28260933', '21006395670200000000', 'ES1121006395670200000000', 'SI', 'null', 'null', NULL, NULL, 'Nigumo00@hpinc.es', 'T8GzKV6q'),
(84, 'Miguel Ángel', 'Morala', 'Bernal', '09806572Q', '3/1/2015', 'Cocinero', 'HP INC', 'B28260933', '20960030123197000000', 'ES4920960030123197000000', 'SI', 'null', 'null', NULL, NULL, 'Mimobe00@hpinc.es', 'UuFv5w7j'),
(85, 'Luis', 'Benito', 'Benito', '09548505D', '10/1/2012', 'Administrativo', 'HP INC', 'B28260933', '20960043013923900000', 'ES8920960043013923900000', 'SI', 'null', 'null', NULL, NULL, 'Lubebe00@hpinc.es', 'Hqncqj9t'),
(86, 'Mauro', 'Belerda', 'Aparicio', '09706118A', '1/1/2009', 'Cuidador', 'HP INC', 'B28260933', '20960043013631200000', 'ES7720960043013631200000', 'SI', 'null', 'null', NULL, NULL, 'Mabeap00@hpinc.es', 'AC3p6guc'),
(87, 'María', 'Calleja', 'Vega', '09769669M', '5/1/1998', 'Programador', 'HP INC', 'B28260933', '20960043072158300000', 'ES1820960043072158300000', 'SI', 'null', 'null', NULL, NULL, 'Macave00@hpinc.es', 'CEgq9Urw'),
(88, 'Federico', 'Candanedo', 'Portugues', '09548317M', '2/1/1997', 'Auxiliar', 'HP INC', 'B28260933', '20910063083000000000', 'ES6020910063083000000000', 'NO', 'null', 'null', NULL, NULL, 'Fecapo00@hpinc.es', 'Wb2BBmXY'),
(89, 'Agustín', 'Benavides', 'Castro', '09458455G', '12/1/1999', 'Ordenanza', 'HP INC', 'B28260933', '495453422095011000', 'ES3400495453422095011000', 'NO', 'null', 'null', NULL, NULL, 'Agbeca00@hpinc.es', '7acZdvV2'),
(90, 'Adolfo', 'Bayon', 'Blanco', '12160221Y', '1/1/2006', 'Operador', 'HP INC', 'B28260933', '21001591670200000000', 'ES8821001591670200000000', 'NO', 'null', 'null', NULL, NULL, 'Adbabl00@hpinc.es', 'vr4UESPs'),
(91, 'Iván', 'Carpintero', 'Cepin', '12649208J', '7/1/2004', 'Auxiliar', 'HP INC', 'B28260933', '20960043034077600000', 'ES4020960043034077600000', 'NO', 'null', 'null', NULL, NULL, 'Ivcace00@hpinc.es', 'tt2rzGtp'),
(92, 'Jesús Manuel', 'Centeno', 'Castro', 'X3607387K', '9/1/2015', 'Jefe de servicio', 'HP INC', 'B28260933', '20960031453862700000', 'ES3420960031453862700000', 'SI', 'null', 'null', NULL, NULL, 'Jececa00@hpinc.es', '8zEykfPH'),
(93, 'José Antonio', 'Cerro', 'Ponga', '12684218V', '8/1/2007', 'Programador', 'HP INC', 'B28260933', '1826530120201560000', 'ES9001826530120201560000', 'SI', 'null', 'null', NULL, NULL, 'Jocepo00@hpinc.es', '2xXbYhVD'),
(94, 'Nelida', 'Charro', 'Alonso', '09548290R', '4/1/2006', 'Administrativo', 'HP INC', 'B28260933', '20960001202016900000', 'ES2920960001202016900000', 'SI', 'null', 'null', 4, 8, 'Nechal00@hpinc.es', 't7Pqh2JY'),
(95, 'Marisa', 'Chen', 'Cedron', '09626048L', '10/1/2013', 'Ordenanza', 'HP INC', 'B28260933', '306033320387251000', 'ES7400306033320387251000', 'SI', 'null', 'null', NULL, NULL, 'Machce00@hpinc.es', 'WTdzx6nf'),
(96, 'Melisa', 'Castro', 'Sánchez', '09548501M', '3/1/1997', 'Calefactor', 'HP INC', 'B28260933', '20960043033000100000', 'ES8020960043033000100000', 'SI', 'null', 'null', NULL, NULL, 'Mecasa00@hpinc.es', 'mj5tEgv7'),
(97, 'Montserrat', 'Cembranos', 'Lombás', '24304263W', '10/1/2009', 'Limpiador', 'HP INC', 'B28260933', '20960043072158300000', 'ES1820960043072158300000', 'NO', 'null', 'null', NULL, NULL, 'Mocelo00@hpinc.es', '7y5BncpJ'),
(98, 'Marta', 'Almarza', 'García', '71404629W', '2/1/2003', 'Coordinador', 'HP INC', 'B28260933', '20960003103574300000', 'ES0720960003103574300000', 'NO', 'null', 'null', NULL, NULL, 'Maalga00@hpinc.es', 'K8wPkRxz'),
(99, 'Abel', 'González', 'Río', '09570262P', '5/1/1996', 'Programador', 'HP INC', 'B28260933', '20960043062158100000', 'ES9020960043062158100000', 'NO', '5/1/1999', '9/1/1999', 2, 2, 'Abgori00@hpinc.es', 'Q5mhGpvY'),
(100, 'Mohamed', 'Ahmed', 'Ahmed', 'X9924125Q', '8/1/2006', 'Analista', 'HP INC', 'B28260933', '20960043043554600000', 'ES3520960043043554600000', 'SI', 'null', 'null', NULL, NULL, 'Moahah00@hpinc.es', 'G55ysRfn'),
(101, 'Alencar', 'Alves', 'Lidiane', 'Y1337652D', '12/1/2012', 'Programador', 'HP INC', 'B28260933', '20960043043554600000', 'ES3520960043043554600000', 'SI', 'null', 'null', NULL, NULL, 'Alalli00@hpinc.es', '6yXFgTgN'),
(102, 'Vittorio', 'Baglione', 'Baglione', 'X1673150S', '2/1/2007', 'Cuidador', 'HP INC', 'B28260933', '750184370702509000', 'ES7500750184370702509000', 'NO', '4/15/2016', 'null', NULL, NULL, 'Vibaba00@hpinc.es', '28SnwaU9'),
(103, 'Latifa', 'Epfouad Erre', 'Boughaza', 'Y0806930N', '9/1/2013', 'Auxiliar', 'HP INC', 'B28260933', '750184370702509000', 'ES7500750184370702509000', 'NO', 'null', 'null', NULL, NULL, 'Labobo00@hpinc.es', 'XT9uGZTU'),
(104, 'Saaida', 'Bouzidi', 'Bpizodo', 'X5106131Q', '4/1/2011', 'Operador', 'HP INC', 'B28260933', '20910936583000000000', 'ES6420910936583000000000', 'NO', 'null', 'null', NULL, NULL, 'Sabobp00@hpinc.es', 'dEXpL4h9'),
(105, 'Khadouj', 'Elammary', 'Elammary', 'Y1280838M', '3/1/2011', 'Administrativo', 'HP INC', 'B28260933', '20910936583000000000', 'ES6420910936583000000000', 'NO', 'null', 'null', NULL, NULL, 'Khelel00@hpinc.es', 'x58Dsj85'),
(106, 'Souad', 'Elbada', 'Elbada', 'X8996448K', '9/1/2012', 'Cocinero', 'HP INC', 'B28260933', '1821135910205540000', 'ES4201821135910205540000', 'nO', 'null', 'null', NULL, NULL, 'Soelel00@hpinc.es', 'HzGj6m9t'),
(107, 'Yvan', 'Engles', 'Engles', 'X0626574P', '5/1/2013', 'Cocinero', 'HP INC', 'B28260933', '20480049200300100000', 'ES5620480049200300100000', 'NO', 'null', 'null', NULL, NULL, 'Yvenen00@hpinc.es', '33Pww2u5'),
(108, 'Fouad', 'Errechydy', 'Errechudy', 'Y5650351R', '11/1/2009', 'Auxiliar', 'HP INC', 'B28260933', '1826530110201530000', 'ES0801826530110201530000', 'SI', 'null', 'null', NULL, NULL, 'Foerer00@hpinc.es', 'u69WahxA'),
(109, 'Florea', 'Liliana Nicoleta', 'Florea', 'X4013091M', '3/1/2015', 'Analista', 'HP INC', 'B28260933', '20960509763011900000', 'ES5020960509763011900000', 'SI', 'null', 'null', NULL, NULL, 'Fllifl00@hpinc.es', 'gbCv2bSP'),
(110, 'Kamal', 'Hajaoui', 'Karnal', 'X7147368A', '6/1/2015', 'Limpiador', 'HP INC', 'B28260933', '490631962310032000', 'ES9300490631962310032000', 'SI', '2/29/2016', 'null', NULL, NULL, 'Kahaka00@hpinc.es', '2MN7bf35'),
(111, 'Trifon', 'Hristov', 'Trifonov', 'Z5390144F', '4/1/2015', 'Jefe de sección', 'HP INC', 'B28260933', '1825194510201490000', 'ES3401825194510201490000', 'NO', 'null', 'null', NULL, NULL, 'Trhrtr00@hpinc.es', '59q6Xjnd'),
(112, 'Francisco', 'Isaac', 'Peña', 'X6478508Y', '4/1/1999', 'Ordenanza', 'HP INC', 'B28260933', '20910936583000000000', 'ES6420910936583000000000', 'NO', 'null', 'null', NULL, NULL, 'Frispe00@hpinc.es', '9Fz5huzs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Hoja2`
--

CREATE TABLE `Hoja2` (
  `id` int(10) UNSIGNED NOT NULL,
  `Categoria` varchar(16) DEFAULT NULL,
  `Salario_base` int(6) DEFAULT NULL,
  `Complementos` int(5) DEFAULT NULL,
  `Codigo_cotizacion` int(2) DEFAULT NULL,
  `E` varchar(10) DEFAULT NULL,
  `Bruto_anual` int(5) DEFAULT NULL,
  `Retencion` float DEFAULT NULL,
  `H` varchar(10) DEFAULT NULL,
  `Cuotas` varchar(32) DEFAULT NULL,
  `Valor_cuotas` float DEFAULT NULL,
  `K` varchar(10) DEFAULT NULL,
  `Antiguedad` int(2) DEFAULT NULL,
  `Trienio` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Hoja2`
--

INSERT INTO `Hoja2` (`id`, `Categoria`, `Salario_base`, `Complementos`, `Codigo_cotizacion`, `E`, `Bruto_anual`, `Retencion`, `H`, `Cuotas`, `Valor_cuotas`, `K`, `Antiguedad`, `Trienio`) VALUES
(1, 'Operador', 13000, 1800, 6, NULL, 12000, 0, NULL, 'Cuota obrera general trabajador', 4.7, NULL, 1, 15),
(2, 'Auxiliar', 14000, 1600, 7, NULL, 13000, 3.3, NULL, 'Cuota desempleo trabajador', 1.6, NULL, 2, 25),
(3, 'Administrativo', 12500, 1700, 8, NULL, 14000, 6.12, NULL, 'Cuota formación trabajador', 0.1, NULL, 3, 45),
(4, 'Jefe de sección', 18000, 3000, 10, NULL, 15000, 8.31, NULL, 'Contingencias comunes empresario', 23.6, NULL, 4, 60),
(5, 'Jefe división', 25000, 5000, 10, NULL, 16000, 9.39, NULL, 'Fogasa empresario', 0.2, NULL, 5, 70),
(6, 'Programador', 17000, 2500, 8, NULL, 17000, 10.18, NULL, 'Desempleo empresario', 6.7, NULL, 6, 83),
(7, 'Analista', 20000, 3500, 9, NULL, 18000, 10.88, NULL, 'Formacion empresario', 0.6, NULL, 7, 90),
(8, 'Jefe de servicio', 30000, 10000, 11, NULL, 19000, 11.51, NULL, 'Accidentes trabajo empresario', 1, NULL, 8, 100),
(9, 'Limpiador', 12000, 1000, 4, NULL, 20000, 12.08, NULL, '', NULL, NULL, 9, 112),
(10, 'Cocinero', 13800, 1200, 5, NULL, 21000, 12.6, NULL, '', NULL, NULL, 10, 125),
(11, 'Cuidador', 20000, 1400, 6, NULL, 22000, 13.06, NULL, NULL, NULL, NULL, 11, 140),
(12, 'Ordenanza', 16000, 1100, 4, NULL, 23000, 13.49, NULL, NULL, NULL, NULL, 12, 160),
(13, 'Calefactor', 10500, 1000, 3, NULL, 24000, 14.05, NULL, NULL, NULL, NULL, 13, 170),
(14, 'Coordinador', 30000, 5000, 11, NULL, 25000, 14.63, NULL, NULL, NULL, NULL, 14, 182),
(15, '', NULL, NULL, NULL, NULL, 26000, 15.17, NULL, NULL, NULL, NULL, 15, 190),
(16, NULL, NULL, NULL, NULL, NULL, 27000, 15.66, NULL, NULL, NULL, NULL, 16, 202),
(17, NULL, NULL, NULL, NULL, NULL, 28000, 16.12, NULL, NULL, NULL, NULL, 17, 215),
(18, NULL, NULL, NULL, NULL, NULL, 29000, 16.55, NULL, NULL, NULL, NULL, 18, 230),
(19, NULL, NULL, NULL, NULL, NULL, 30000, 16.96, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, 31000, 17.38, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, 32000, 17.68, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, 33000, 18.01, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, 34000, 18.32, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, 35000, 18.63, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, 36000, 18.94, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, 37000, 19.25, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, 38000, 19.56, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, 39000, 19.87, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, 40000, 20.18, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, 41000, 20.49, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL, NULL, 42000, 20.8, NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL, NULL, 43000, 21.11, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, NULL, NULL, 44000, 21.42, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL, NULL, 45000, 21.72, NULL, NULL, NULL, NULL, NULL, NULL),
(35, NULL, NULL, NULL, NULL, NULL, 46000, 22.02, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, NULL, NULL, NULL, NULL, 47000, 22.32, NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, NULL, NULL, NULL, NULL, 48000, 22.62, NULL, NULL, NULL, NULL, NULL, NULL),
(38, NULL, NULL, NULL, NULL, NULL, 49000, 22.92, NULL, NULL, NULL, NULL, NULL, NULL),
(39, NULL, NULL, NULL, NULL, NULL, 50000, 23.22, NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, NULL, NULL, NULL, NULL, 51000, 23.52, NULL, NULL, NULL, NULL, NULL, NULL),
(41, NULL, NULL, NULL, NULL, NULL, 52000, 23.82, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL, NULL, 53000, 24.12, NULL, NULL, NULL, NULL, NULL, NULL),
(43, NULL, NULL, NULL, NULL, NULL, 54000, 24.42, NULL, NULL, NULL, NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL, NULL, 55000, 24.72, NULL, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL, 56000, 25.02, NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL, NULL, 57000, 25.32, NULL, NULL, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL, NULL, 58000, 25.62, NULL, NULL, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL, NULL, 59000, 25.92, NULL, NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL, NULL, 60000, 26.22, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hoja1`
--
ALTER TABLE `hoja1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Hoja2`
--
ALTER TABLE `Hoja2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hoja1`
--
ALTER TABLE `hoja1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT de la tabla `Hoja2`
--
ALTER TABLE `Hoja2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;