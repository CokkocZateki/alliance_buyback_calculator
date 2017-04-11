-- phpMyAdmin SQL Dump
-- version 4.7.0-beta1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2017 at 12:26 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alliance_buyback_calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `value`) VALUES
('buyBackRate', '0.71'),
('allianceName', 'Random Alliance'),
('version', '0.1.4'),
('baseUrl', NULL),
('clientId', NULL),
('secretKey', NULL),
('redirectURI', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `typeID` int(11) NOT NULL,
  `typeName` varchar(56) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`typeID`, `typeName`) VALUES
(28367, 'Compressed Arkonor'),
(28385, 'Compressed Crimson Arkonor'),
(28387, 'Compressed Prime Arkonor'),
(28388, 'Compressed Bistot'),
(28389, 'Compressed Monoclinic Bistot'),
(28390, 'Compressed Triclinic Bistot'),
(28391, 'Compressed Crokite'),
(28392, 'Compressed Crystalline Crokite'),
(28393, 'Compressed Sharp Crokite'),
(28394, 'Compressed Dark Ochre'),
(28395, 'Compressed Obsidian Ochre'),
(28396, 'Compressed Onyx Ochre'),
(28397, 'Compressed Gneiss'),
(28398, 'Compressed Iridescent Gneiss'),
(28399, 'Compressed Prismatic Gneiss'),
(28400, 'Compressed Glazed Hedbergite'),
(28401, 'Compressed Hedbergite'),
(28402, 'Compressed Vitric Hedbergite'),
(28403, 'Compressed Hemorphite'),
(28404, 'Compressed Radiant Hemorphite'),
(28405, 'Compressed Vivid Hemorphite'),
(28406, 'Compressed Jaspet'),
(28407, 'Compressed Pristine Jaspet'),
(28408, 'Compressed Pure Jaspet'),
(28409, 'Compressed Fiery Kernite'),
(28410, 'Compressed Kernite'),
(28411, 'Compressed Luminous Kernite'),
(28412, 'Compressed Magma Mercoxit'),
(28413, 'Compressed Mercoxit'),
(28414, 'Compressed Vitreous Mercoxit'),
(28415, 'Compressed Golden Omber'),
(28416, 'Compressed Omber'),
(28417, 'Compressed Silvery Omber'),
(28418, 'Compressed Bright Spodumain'),
(28419, 'Compressed Gleaming Spodumain'),
(28420, 'Compressed Spodumain'),
(28421, 'Compressed Azure Plagioclase'),
(28422, 'Compressed Plagioclase'),
(28423, 'Compressed Rich Plagioclase'),
(28424, 'Compressed Pyroxeres'),
(28425, 'Compressed Solid Pyroxeres'),
(28426, 'Compressed Viscous Pyroxeres'),
(28427, 'Compressed Condensed Scordite'),
(28428, 'Compressed Massive Scordite'),
(28429, 'Compressed Scordite'),
(28430, 'Compressed Concentrated Veldspar'),
(28431, 'Compressed Dense Veldspar'),
(28432, 'Compressed Veldspar'),
(28433, 'Compressed Blue Ice'),
(28434, 'Compressed Clear Icicle'),
(28435, 'Compressed Dark Glitter'),
(28436, 'Compressed Enriched Clear Icicle'),
(28437, 'Compressed Gelidus'),
(28438, 'Compressed Glacial Mass'),
(28439, 'Compressed Glare Crust'),
(28440, 'Compressed Krystallos'),
(28441, 'Compressed Pristine White Glaze'),
(28442, 'Compressed Smooth Glacial Mass'),
(28443, 'Compressed Thick Blue Ice'),
(28444, 'Compressed White Glaze'),
(28494, 'Compressed Blue Ice Blueprint'),
(28495, 'Compressed Clear Icicle Blueprint'),
(28496, 'Compressed Dark Glitter Blueprint'),
(28497, 'Compressed Enriched Clear Icicle Blueprint'),
(28498, 'Compressed Gelidus Blueprint'),
(28499, 'Compressed Glacial Mass Blueprint'),
(28500, 'Compressed Glare Crust Blueprint'),
(28501, 'Compressed Krystallos Blueprint'),
(28502, 'Compressed Pristine White Glaze Blueprint'),
(28503, 'Compressed Smooth Glacial Mass Blueprint'),
(28504, 'Compressed Thick Blue Ice Blueprint'),
(28505, 'Compressed White Glaze Blueprint'),
(41139, 'Compressed Enduring Dual 1000mm Railgun'),
(41144, 'Compressed Enduring Dual 1000mm Railgun Blueprint'),
(34, 'Tritanium'),
(35, 'Pyerite'),
(36, 'Mexallon'),
(37, 'Isogen'),
(38, 'Nocxium'),
(39, 'Zydrine'),
(40, 'Megacyte'),
(11399, 'Morphite'),
(27029, 'Chalcopyrite'),
(22, 'Arkonor'),
(17425, 'Crimson Arkonor'),
(17426, 'Prime Arkonor'),
(26852, 'Flawed Arkonor'),
(28367, 'Compressed Arkonor'),
(28385, 'Compressed Crimson Arkonor'),
(28387, 'Compressed Prime Arkonor'),
(28625, 'Polygypsum'),
(1223, 'Bistot'),
(17428, 'Triclinic Bistot'),
(17429, 'Monoclinic Bistot'),
(28388, 'Compressed Bistot'),
(28389, 'Compressed Monoclinic Bistot'),
(28390, 'Compressed Triclinic Bistot'),
(1225, 'Crokite'),
(17432, 'Sharp Crokite'),
(17433, 'Crystalline Crokite'),
(26851, 'Fools Crokite'),
(28391, 'Compressed Crokite'),
(28392, 'Compressed Crystalline Crokite'),
(28393, 'Compressed Sharp Crokite'),
(28624, 'Geodite'),
(1232, 'Dark Ochre'),
(17436, 'Onyx Ochre'),
(17437, 'Obsidian Ochre'),
(28394, 'Compressed Dark Ochre'),
(28395, 'Compressed Obsidian Ochre'),
(28396, 'Compressed Onyx Ochre'),
(28623, 'Oeryl'),
(1229, 'Gneiss'),
(17865, 'Iridescent Gneiss'),
(17866, 'Prismatic Gneiss'),
(26713, 'Flawed Gneiss'),
(28397, 'Compressed Gneiss'),
(28398, 'Compressed Iridescent Gneiss'),
(28399, 'Compressed Prismatic Gneiss'),
(28622, 'Green Arisite'),
(21, 'Hedbergite'),
(17440, 'Vitric Hedbergite'),
(17441, 'Glazed Hedbergite'),
(28400, 'Compressed Glazed Hedbergite'),
(28401, 'Compressed Hedbergite'),
(28402, 'Compressed Vitric Hedbergite'),
(1231, 'Hemorphite'),
(17444, 'Vivid Hemorphite'),
(17445, 'Radiant Hemorphite'),
(28403, 'Compressed Hemorphite'),
(28404, 'Compressed Radiant Hemorphite'),
(28405, 'Compressed Vivid Hemorphite'),
(1226, 'Jaspet'),
(17448, 'Pure Jaspet'),
(17449, 'Pristine Jaspet'),
(26868, 'Flawed Jaspet'),
(28406, 'Compressed Jaspet'),
(28407, 'Compressed Pristine Jaspet'),
(28408, 'Compressed Pure Jaspet'),
(28621, 'Pithix'),
(20, 'Kernite'),
(17452, 'Luminous Kernite'),
(17453, 'Fiery Kernite'),
(28409, 'Compressed Fiery Kernite'),
(28410, 'Compressed Kernite'),
(28411, 'Compressed Luminous Kernite'),
(28620, 'Lyavite'),
(11396, 'Mercoxit'),
(17869, 'Magma Mercoxit'),
(17870, 'Vitreous Mercoxit'),
(28412, 'Compressed Magma Mercoxit'),
(28413, 'Compressed Mercoxit'),
(28414, 'Compressed Vitreous Mercoxit'),
(28626, 'Zuthrine'),
(1227, 'Omber'),
(17867, 'Silvery Omber'),
(17868, 'Golden Omber'),
(28415, 'Compressed Golden Omber'),
(28416, 'Compressed Omber'),
(28417, 'Compressed Silvery Omber'),
(28619, 'Mercium'),
(18, 'Plagioclase'),
(17455, 'Azure Plagioclase'),
(17456, 'Rich Plagioclase'),
(28421, 'Compressed Azure Plagioclase'),
(28422, 'Compressed Plagioclase'),
(28423, 'Compressed Rich Plagioclase'),
(1224, 'Pyroxeres'),
(17459, 'Solid Pyroxeres'),
(17460, 'Viscous Pyroxeres'),
(28424, 'Compressed Pyroxeres'),
(28425, 'Compressed Solid Pyroxeres'),
(28426, 'Compressed Viscous Pyroxeres'),
(28618, 'Augumene'),
(1228, 'Scordite'),
(17463, 'Condensed Scordite'),
(17464, 'Massive Scordite'),
(28427, 'Compressed Condensed Scordite'),
(28428, 'Compressed Massive Scordite'),
(28429, 'Compressed Scordite'),
(19, 'Spodumain'),
(17466, 'Bright Spodumain'),
(17467, 'Gleaming Spodumain'),
(28418, 'Compressed Bright Spodumain'),
(28419, 'Compressed Gleaming Spodumain'),
(28420, 'Compressed Spodumain'),
(1230, 'Veldspar'),
(17470, 'Concentrated Veldspar'),
(17471, 'Dense Veldspar'),
(27028, 'Chondrite'),
(28430, 'Compressed Concentrated Veldspar'),
(28431, 'Compressed Dense Veldspar'),
(28432, 'Compressed Veldspar'),
(28617, 'Banidine');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `characterId` int(11) DEFAULT NULL,
  `characterName` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`characterId`, `characterName`) VALUES
(2112376868, 'Zydrine Veldspar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
