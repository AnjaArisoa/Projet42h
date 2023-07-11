-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2023 at 03:11 PM
-- Server version: 5.6.11-log
-- PHP Version: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projet42h`
--
CREATE DATABASE IF NOT EXISTS `projet42h` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projet42h`;

-- --------------------------------------------------------

--
-- Table structure for table `composant`
--

CREATE TABLE IF NOT EXISTS `composant` (
  `idComposant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `description` text,
  `idUnite` int(11) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`idComposant`),
  KEY `idUnite` (`idUnite`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `composant`
--

INSERT INTO `composant` (`idComposant`, `nom`, `description`, `idUnite`, `image`) VALUES
(1, 'Salade indienne', 'Composé de poivron vert, jaunes, et rouges 30%, eau, poulet rôti 11%(poulet origine: Madagascar), eau, fécule de manioc, sel, carottes 11%, riz 10%, farine de blé, vinaigre d''alcool, huile de colza, coriandre, curry 0.2%(curcuma, coriandre, piment, poivre, fenouil, fenugrec, cumin)', 1, 'mbola tsisy'),
(2, 'Lasagnes Bolognaises', 'Eau, pulpe de tomate 13% (tomates, jus de tomates), viande bovine hachée précuite 12% (Origine France; équivalent viande crue 17%), pâte lasagne 9% (semoule de blé dur, eau, œufs), oignons, concentré de tomates, carottes 5%, lentilles corail précuites, amidon, crème, sel, basilic, arôme naturel de boeuf, arôme naturel d''ail, arôme naturel (contient lait), origan.', 1, 'mbola tsisy'),
(3, 'Couscous royal', 'Semoule de blé dur réhydraté 30% (semoule de blé dur, eau, huile de colza, sel), viande de poulet cru 23% (origine France), eau, merguez 5% (viande de bœuf 4,4% (origine France), gras de bœuf, (origine France), épices et plantes aromatiques, sel, sirop de glucose, dextrose, arômes naturels), poivrons rouges et verts 5%, carottes 3%, tomates concassées 3% (tomates, jus de tomate), concentré de tomates 3%, courgettes 2%, oignons 2%, pois chiches 2%, navets 2%, huile de colza, sel, ail, amidon de pomme de terre, sucre, fécule de manioc, mélange d''épices ras el hanout, fibre de psyllium, poivre blanc, épices, poudre de tomates, arômes naturels, sel.', 1, 'mbola tsisy\r\n'),
(4, 'Muesli aux fruits jaunes', 'Céréales 74% (flocons d''avoine complet (gluten), flocons de blé complet 6,9% (gluten), farine de blé 5,2% (gluten), céréales extrudées (semoule de riz, farine de blé 2% (gluten), sucre, farine de malt de blé 0,09% (gluten), sel, sucre caramélisé en poudre) pétales de maïs (maïs, sucre, extrait de malt d''orge (gluten), sel, émulsifiant : mono- et diglycérides d''acides gras), sucre, huile de tournesol (huile de tournesol, antioxydant : extrait riche en tocophérols), fruits secs (6%) (raisins, huile de tournesol), noix de coco en lamelles, bananes sucrées arômatisées (bananes, huile de coco, sucre, arôme)), noix de coco en poudre, sel, caramel (sucre, eau), arôme naturel.', 1, 'mbola tsisy'),
(5, 'Tajine de légumes aux céréales', 'Eau, semoule complète de blé dur préparée 17% (eau, semoule complète de blé dur, huile de colza, sel), carottes, pois chiches réhydratés 9,5%, haricots verts 9%, petits pois 4,8%, lentilles noires beluga réhydratées, sarrasin réhydraté, concentré de tomates 1,9%, huile d''olive vierge extra, raisins secs (contient huile de colza et/ou huile de coton), protéines de soja texturées, sel, épices, amidon, arômes naturels (contient lait), gingembre.', 1, 'mbola tsisy'),
(6, 'Pompe', 'Se mettre en position de pompe et pousser continuellement. A faire le matin après le réveil et suivre d''un repas bien équilibrer', 5, 'mbola tsisy'),
(7, 'Jogging', 'Trotiner lentement sur un itinéraire bien fixé. Faire attention à ne pas courrir trop vite car cela entraine l''épuisement rapidement', 3, 'mbola tsisy');

-- --------------------------------------------------------

--
-- Table structure for table `detail_regime`
--

CREATE TABLE IF NOT EXISTS `detail_regime` (
  `idRegime` int(11) NOT NULL,
  `idComposant` int(11) NOT NULL,
  `quantite` decimal(8,2) DEFAULT NULL,
  KEY `regime_detail_fk` (`idRegime`),
  KEY `composant_regime_fk` (`idComposant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_regime`
--

INSERT INTO `detail_regime` (`idRegime`, `idComposant`, `quantite`) VALUES
(1, 2, '200.00'),
(1, 4, '50.00'),
(1, 7, '15.00');

-- --------------------------------------------------------

--
-- Table structure for table `detail_user`
--

CREATE TABLE IF NOT EXISTS `detail_user` (
  `idUser` int(11) NOT NULL,
  `sexe` tinyint(2) NOT NULL,
  `taille` int(11) NOT NULL,
  `poids` decimal(5,2) NOT NULL,
  KEY `detail_user_idfk` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `regime`
--

CREATE TABLE IF NOT EXISTS `regime` (
  `idRegime` int(11) NOT NULL AUTO_INCREMENT,
  `coefficient` float NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idRegime`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `regime`
--

INSERT INTO `regime` (`idRegime`, `coefficient`, `prix`) VALUES
(1, 0.5, '4950.00'),
(2, -0.5, '5950.00');

-- --------------------------------------------------------

--
-- Table structure for table `unite`
--

CREATE TABLE IF NOT EXISTS `unite` (
  `idUnite` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idUnite`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `unite`
--

INSERT INTO `unite` (`idUnite`, `value`) VALUES
(1, 'gramme'),
(2, 'kilogramme'),
(3, 'minute'),
(4, 'heure'),
(5, 'set');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isAdmin` tinyint(4) NOT NULL DEFAULT '0',
  `isGold` tinyint(2) NOT NULL DEFAULT '0',
  `img` varchar(150) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nom`, `email`, `password`, `isAdmin`, `img`) VALUES
(1, 'Tony Fitahiana', 'fitahianatony77@gmail.com', '12345', 1, 'mbola tsisy');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `composant`
--
ALTER TABLE `composant`
  ADD CONSTRAINT `idUnite` FOREIGN KEY (`idUnite`) REFERENCES `unite` (`idUnite`);

--
-- Constraints for table `detail_regime`
--
ALTER TABLE `detail_regime`
  ADD CONSTRAINT `composant_regime_fk` FOREIGN KEY (`idComposant`) REFERENCES `composant` (`idComposant`),
  ADD CONSTRAINT `regime_detail_fk` FOREIGN KEY (`idRegime`) REFERENCES `regime` (`idRegime`);

--
-- Constraints for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD CONSTRAINT `detail_user_idfk` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE IF NOT EXISTS `plat` (
  `idPlat` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `apropos` varchar(50) NOT NULL,
  `aproposbe` varchar(100) NOT NULL,
  `img` varchar(150) NOT NULL,
  PRIMARY KEY (`idPlat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

insert into plat values(null,'Compote Pomme','Purée de pomme 95,74%, sucre, antioxydant : acide ascorbique.','Energie (kJ) 	288 	288
Energie (kcal) 	68 	68
Matières grasses (g) 	0.6 	0.6
Dont acides gras saturés (g) 	0.2 	0.2
Glucides (g) 	15 	15
Dont sucres (g) 	14 	14
Fibres (g) 	1.4 	1.4
Protéines (g) 	0.5 	0.5
Sel (g) 	0.01 	0.01','compotepomme.jpg');
insert into plat values(null,'Entremets vanille ','Sucre, amidon de maïs, fibre de chicorée, gélifiant : pectine, arômes naturels de vanille, sel, extrait de carotte.','Energie (kJ) 	1540 	523
Energie (kcal) 	368 	124
Matières grasses (g) 	0.4 	0.2
Dont acides gras saturés (g) 	0.1 	0.1
Glucides (g) 	86.9 	24.9
Dont sucres (g) 	55.6 	18.3
Fibres (g) 	6.3 	1.3
Protéines (g) 	0.3 	4.8
Sel (g) 	0.6 	0.3','vanille.jpg');
insert into plat values(null,'Petits pains aux céréales BIO ',"Farine de blé*, eau, graines* 10%, (tournesol*, lin brun*), levain* (farine de blé*, eau), son de blé*, sel marin non traité, levure*, farine de blé d'épeautre malté torréfié 100% des ingrédients d'origine agricole sont issus de l'Agriculture Biologique Contient: Gluten. Traces possibles : soja, œufs, fruits à coque, dérivés du lait, graines de sésame.",'Energie (kJ) 	1351 	513
Energie (kcal) 	321 	122
Matières grasses (g) 	8.4 	3.2
Dont acides gras saturés (g) 	1 	0.4
Glucides (g) 	49 	18.6
Dont sucres (g) 	1.3 	0.5
Fibres (g) 	4.6 	1.7
Protéines (g) 	10 	3.8
Sel (g) 	1.1 	0.4','pain.jpg');
insert into plat values(null,'
Purée de pomme de terre et ciboulette','Flocons de pomme de terre, poudre de lait écrémé, fécule de manioc, sel arômes naturels, épices et plantes aromatiques dont ciboulette (0,3%).
Contient: Lait. Peut contenir des traces de blé','Energie (kJ) 	1445 	722.5
Energie (kcal) 	346 	173
Matières grasses (g) 	0.5 	0.2
Dont acides gras saturés (g) 	0.4 	0.2
Glucides (g) 	71.5 	35.7
Dont sucres (g) 	8.9 	4.4
Fibres (g) 	6.5 	3.3
Protéines (g) 	11.8 	5.9
Sel (g) 	2.3 	1.1','puree.jpg');
insert into plat values(null,'Fraise','100% naturel','100% naturel','fraise.jpg');
insert into plat values(null,'Miel','100% naturel','100% naturel','miel.jpg');
insert into plat values(null,'Ananas','Bon pour la perte de poids','100% naturel','ananas.jpg');

CREATE TABLE IF NOT EXISTS `achat` (
  `idUser` int(11) DEFAULT NULL,
  `idRegime` int(11) DEFAULT NULL,
  `prix` decimal(10,0) DEFAULT NULL,
  `dateAchat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `achat`
  ADD CONSTRAINT `user_achat_fk` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `regime_achat_fk` FOREIGN KEY (`idRegime`) REFERENCES `regime` (`idRegime`);

