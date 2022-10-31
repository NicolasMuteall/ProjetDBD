-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 31 oct. 2022 à 07:43
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbd`
--
CREATE DATABASE IF NOT EXISTS `dbd` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `dbd`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT,
  `PSEUDO_ADMIN` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PWD_ADMIN` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_ADMIN`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `PSEUDO_ADMIN`, `PWD_ADMIN`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `ID_ARTICLE` int(11) NOT NULL AUTO_INCREMENT,
  `TITRE_ARTICLE` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DATE_ARTICLE` date NOT NULL,
  `CONTENU_ARTICLE` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `REF_IMAGE_ART` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_ARTICLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE IF NOT EXISTS `competences` (
  `ID_COMPETENCE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_COMPETENCE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PRESENTATION_COMPT` text COLLATE utf8_unicode_ci,
  `REF_IMAGE_COMPT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SURVIVANT_TUEUR` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_COMPETENCE`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`ID_COMPETENCE`, `NOM_COMPETENCE`, `PRESENTATION_COMPT`, `REF_IMAGE_COMPT`, `SURVIVANT_TUEUR`) VALUES
(1, 'DURE A CUIRE', 'Lorsque vous êtes blessé, utilisez une action pour gagner une brève accélération qui esquive activement une frappe du tueur. Provoque l\'effet de statut Épuisement et ne peut pas être utilisé en état d\'Épuisement.', 'dureacuire.png', 0),
(2, 'PARENTE', 'Débloque une capacité de Repérage d\'Auras.\r\nQuand vous êtes suspendu à un Crochet, l\'Aura de tous les Survivants est révélée à tous les autres Survivants.\r\nSi le Tueur se trouve dans un rayon de 8/12/16 mètres, son Aura est également révélée à tous les autres Survivants.\r\nQuand un autre Survivant est suspendu à un Crochet, l\'Aura de tous les Survivants vous est révélée.\r\nSi le Tueur se trouve dans un rayon de 8/12/16 mètres, son Aura vous est également révélée.', 'parente.png', 0),
(3, 'SUR LA RESERVE', 'Après avoir sauvé un survivant du crochet, ce survivant gagne le statut d\'effet Endurance — la capacité à encaisser un coup sans risque pendant une courte durée. Plutôt que d\'être abattu, ce survivant devra à la place prendre le temps de suturer une blessure profonde.', 'surlareserve.png', 0),
(4, 'PARFAITE OCCASION', 'Présentation Parfait occasion', NULL, 0),
(5, 'A LA REVOYURE', 'Pendant que vous récupérez de l\'état critique, la moitié de votre progression de récupération est immédiatement convertie en progression de gigotage lorsque le tueur vous ramasse.', 'revoyure.png', 0),
(6, 'ACCROCHEZ-VOUS', 'L\'aura des coéquipiers en état critique est révélée, et leur progression de récupération est indiquée par l\'intensité de l\'aura. Pendant que vous soignez un survivant en état critique, l\'aura du tueur vous est révélée, à vous et à ce survivant.', 'accrochez_vous.png', 0),
(7, 'FORCE DE CARACTERE', 'Après avoir encaissé un troisième coup de protection, gagnez l\'effet de statut Endurance, qui vous empêchera de tomber en état critique. Dès que vous serez complètement soigné, le tueur verra votre aura lorsque vous serez à une certaine distance. Force de caractère se désactive la prochaine fois que vous vous retrouvez en état critique.', 'forcecaractere.png', 0),
(8, 'JE VOUS ECOUTE', 'Après le bond d\'obstacle d\'un survivant par-dessus une fenêtre ou une palette, voyez brièvement leur aura et interceptez-les en conséquence.', 'jevousecoute.png', 1),
(9, 'FRISSONS PALPITANTS', 'Après que vous ayez choisi un survivant, l\'Entité bloque chaque générateur qui n\'est pas en cours de réparation et les met en évidence par une aura blanche.', 'frissonspalpitants.png', 1),
(10, 'POSITION FURTIVE', 'Vous devenez obsédé par un survivant. Gagnez un jeton lorsque vous suspendez votre obsession à un crochet, chaque jeton supplémentaire réduisant votre rayon de terreur dans une poursuite. Chaque fois qu\'un survivant sauve l\'obsession d\'un crochet, il devient l\'obsession.', 'positionfurtive.png', 1),
(13, 'AUCUNE COMPETENCE', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `ID_JOUEUR` int(11) NOT NULL AUTO_INCREMENT,
  `PSEUDO_JOUEUR` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PWD_JOUEUR` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `MAIL_JOUEUR` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NOMBRES_HEURES` int(4) DEFAULT NULL,
  `PSEUDO_PLATEFORME` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `REF_IMAGE_JOUEUR` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_COMPETENCE1` int(11) NOT NULL DEFAULT '13',
  `ID_COMPETENCE2` int(11) NOT NULL DEFAULT '13',
  `ID_COMPETENCE3` int(11) NOT NULL DEFAULT '13',
  `ID_COMPETENCE4` int(11) NOT NULL DEFAULT '13',
  `RANK_JOUEUR` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NON CLASSE',
  `RANK_MINIMUM_RECHERCHE` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NON CLASSE',
  `NOM_PLATEFORME` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'AUCUNE PLATEFORME',
  `NOM_ROLE` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'AUCUN ROLE',
  `ID_TUEUR` int(11) NOT NULL DEFAULT '6',
  PRIMARY KEY (`ID_JOUEUR`),
  KEY `FK_JOUEUR_UTILISE_COMPETENCE1` (`ID_COMPETENCE1`),
  KEY `FK_JOUEUR_UTILISE_COMPETENCE2` (`ID_COMPETENCE2`),
  KEY `FK_JOUEUR_UTILISE_COMPETENCE3` (`ID_COMPETENCE3`),
  KEY `FK_JOUEUR_UTILISE_COMPETENCE4` (`ID_COMPETENCE4`),
  KEY `FK_JOUEUR_CLASSE_RANK` (`RANK_JOUEUR`),
  KEY `FK_JOUEUR_RECHERCHE_RANK` (`RANK_MINIMUM_RECHERCHE`),
  KEY `FK_JOUEUR_JOUE_PLATEFORME` (`NOM_PLATEFORME`),
  KEY `FK_JOUEUR_JOUE_ROLE` (`NOM_ROLE`),
  KEY `FK_JOUEUR_JOUE_PERSONNAGE` (`ID_TUEUR`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`ID_JOUEUR`, `PSEUDO_JOUEUR`, `PWD_JOUEUR`, `MAIL_JOUEUR`, `NOMBRES_HEURES`, `PSEUDO_PLATEFORME`, `REF_IMAGE_JOUEUR`, `ID_COMPETENCE1`, `ID_COMPETENCE2`, `ID_COMPETENCE3`, `ID_COMPETENCE4`, `RANK_JOUEUR`, `RANK_MINIMUM_RECHERCHE`, `NOM_PLATEFORME`, `NOM_ROLE`, `ID_TUEUR`) VALUES
(1, 'nico59', '$2y$10$l2S/vvCmnfPEfUdG.4pgz.WZ5Ozb9VVhMBzgmbZzlxquc5oy5or0q', 'nicolas.dupontnew@gmail.com', 998, '', 'mastermind.png', 3, 2, 5, 4, 'ARGENT', 'NON CLASSE', 'PS4', 'AUCUN ROLE', 3),
(3, 'DrakarttzZ', '$2y$10$lpW8.Cb1UMdtix9TjkFifeVPLSOX7b0bsOZ4nFZFZVvtCYsk.LKqK', 'nicolas.dupont59176@gmail.com', 100, 'DrakarttzZ', 'the-mandalorian.jpg', 2, 6, 4, 7, 'NON CLASSE', 'NON CLASSE', 'AUCUNE PLATEFORME', 'Survivant', 6);

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

DROP TABLE IF EXISTS `personnage`;
CREATE TABLE IF NOT EXISTS `personnage` (
  `ID_PERSONNAGE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_PERSO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PRESENTATION_PERSO` text COLLATE utf8_unicode_ci,
  `RESUME_PERSO` text COLLATE utf8_unicode_ci,
  `DATE_SORTIE_PERSO` date DEFAULT NULL,
  `REF_IMAGE_PERSO` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_COMPETENCE1` int(11) NOT NULL,
  `ID_COMPETENCE2` int(11) NOT NULL,
  `ID_COMPETENCE3` int(11) NOT NULL,
  `NOM_COMPT_SPE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `COMPT_SPE` text COLLATE utf8_unicode_ci NOT NULL,
  `REF_IMAGE_SPE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NOM_ROLE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_PERSONNAGE`),
  KEY `FK_PERSONNAGE_UTILISE_COMPETENCE1` (`ID_COMPETENCE1`),
  KEY `FK_PERSONNAGE_UTILISE_COMPETENCE2` (`ID_COMPETENCE2`),
  KEY `FK_PERSONNAGE_UTILISE_COMPETENCE3` (`ID_COMPETENCE3`),
  KEY `FK_PERSONNAGE_JOUE_ROLE` (`NOM_ROLE`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `personnage`
--

INSERT INTO `personnage` (`ID_PERSONNAGE`, `NOM_PERSO`, `PRESENTATION_PERSO`, `RESUME_PERSO`, `DATE_SORTIE_PERSO`, `REF_IMAGE_PERSO`, `ID_COMPETENCE1`, `ID_COMPETENCE2`, `ID_COMPETENCE3`, `NOM_COMPT_SPE`, `COMPT_SPE`, `REF_IMAGE_SPE`, `NOM_ROLE`) VALUES
(1, 'Master mind', 'Visionnaire aussi brillant qu’impitoyable, Albert Wesker est doté d’un esprit stratégique inégalé. Alors que certains plans nécessitent l’intellect, d’autres font appel à la force brute. Foncez tout droit pour saisir les survivants dans votre poigne et leur faire don d’Uroboros – une étape nécessaire sur le chemin de l’évolution.', 'Résumé master mind', NULL, 'mastermind.png', 9, 8, 10, 'COMPETENCE SPECIALE', 'Présentation compétence spéciale.', 'ghostface.png', 'Tueur'),
(2, 'Ghost Face', 'Tueur orienté sur la furtivité et capable de s\'approcher sans être vu, Ghost Face fait preuve d\'une grande habileté pour traquer sa proie. Gardez l\'oeil sur chaque survivant et marquez-les patiemment pour le trépas — sous réserve que vous puissiez rester dissimulé. Restez tapi en attendant le moment idéal pour frapper, et abattez les survivants avant qu\'ils réalisent ce qui les frappe.', 'Résumé de Ghost Face ..', NULL, 'ghostface.png', 8, 9, 10, 'LINCEUL NOCTURNE', 'Devenez indétectable, en perdant à la fois le rayon de terreur et la tache rouge. Dans cet état, traquez les survivants pour les marquer, les laissant à découvert et susceptibles d\'être abattus d\'un seul coup. Planifiez votre processus de traque stratégiquement pour attaquer les survivants à des moments opportuns. Petit avertissement, les survivants peuvent briser le Linceul nocturne s\'ils aperçoivent Ghost Face de manière prolongée.', 'ghostface.png', 'Tueur'),
(3, 'INFIRMIERE', 'À l\'aide de sa capacité de téléportation, l\'Infirmière peut se téléporter sur de grandes distances en quelques instants, anticipant et barrant la route des survivants. Procédé puissant qu\'il vaut mieux perfectionner par l\'expérience, car des téléportations négligentes sont punies par une vague de fatigue. Quintessence du risque maximal pour un gain maximal, l\'Infirmière peut mettre fin aux poursuites avec une précision chirurgicale.', NULL, NULL, 'infirmiere.png', 8, 9, 10, 'COMPETENCE SPACIALE', 'Présentation compétence spéciale', 'ghostface.png', 'Tueur'),
(4, 'Dwight', 'Improbable meneur forcé de se montrer à la hauteur, Dwight Fairfield inspire de sa réticente bravoure ceux qui l\'entourent. Conscient de la valeur du travail d\'équipe, Dwight a l\'art de localiser ses coéquipiers et de galvaniser leur efficacité.', 'Résumé de Dwight', NULL, 'dwight.png', 1, 2, 3, '', '', '', 'Survivant'),
(5, 'ASHLEY J. WILLIAMS', 'Bien qu\'il se considère lui-même avec fierté comme un « loup solitaire », Ash fait preuve d\'une tolérance à la douleur effroyablement élevée et d\'un humour incendiaire qui se sont révélés inestimables face à des dangers surnaturels. Ses méninges cogitent toujours, même quand la situation a l\'air désespérée. Ne sous-estimez jamais sa trempe.', NULL, NULL, 'ashley.png', 5, 6, 7, '', '', '', 'Survivant'),
(6, 'AUCUN PERSONNAGE', NULL, NULL, NULL, NULL, 13, 13, 13, '', '', '', 'AUCUN ROLE');

-- --------------------------------------------------------

--
-- Structure de la table `plateforme`
--

DROP TABLE IF EXISTS `plateforme`;
CREATE TABLE IF NOT EXISTS `plateforme` (
  `NOM_PLATEFORME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`NOM_PLATEFORME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `plateforme`
--

INSERT INTO `plateforme` (`NOM_PLATEFORME`) VALUES
('AUCUNE PLATEFORME'),
('PC'),
('PS4'),
('XBOX');

-- --------------------------------------------------------

--
-- Structure de la table `rank_ge`
--

DROP TABLE IF EXISTS `rank_ge`;
CREATE TABLE IF NOT EXISTS `rank_ge` (
  `NOM_RANK` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `REF_IMAGE_RANK` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`NOM_RANK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `rank_ge`
--

INSERT INTO `rank_ge` (`NOM_RANK`, `REF_IMAGE_RANK`) VALUES
('ARGENT', NULL),
('BRONZE', ''),
('CENDRES', ''),
('Irisé', NULL),
('NON CLASSE', NULL),
('OR', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `NOM_ROLE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `REF_IMAGE_ROLE` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`NOM_ROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`NOM_ROLE`, `REF_IMAGE_ROLE`) VALUES
('AUCUN ROLE', NULL),
('Survivant', 'logosurvivant.png'),
('Tueur', 'logotueur.png');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `FK_JOUEUR_CLASSE_RANK` FOREIGN KEY (`RANK_JOUEUR`) REFERENCES `rank_ge` (`NOM_RANK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JOUEUR_JOUE_PERSONNAGE` FOREIGN KEY (`ID_TUEUR`) REFERENCES `personnage` (`ID_PERSONNAGE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JOUEUR_JOUE_PLATEFORME` FOREIGN KEY (`NOM_PLATEFORME`) REFERENCES `plateforme` (`NOM_PLATEFORME`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JOUEUR_JOUE_ROLE` FOREIGN KEY (`NOM_ROLE`) REFERENCES `role` (`NOM_ROLE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JOUEUR_RECHERCHE_RANK` FOREIGN KEY (`RANK_MINIMUM_RECHERCHE`) REFERENCES `rank_ge` (`NOM_RANK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JOUEUR_UTILISE_COMPETENCE1` FOREIGN KEY (`ID_COMPETENCE1`) REFERENCES `competences` (`ID_COMPETENCE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JOUEUR_UTILISE_COMPETENCE2` FOREIGN KEY (`ID_COMPETENCE2`) REFERENCES `competences` (`ID_COMPETENCE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JOUEUR_UTILISE_COMPETENCE3` FOREIGN KEY (`ID_COMPETENCE3`) REFERENCES `competences` (`ID_COMPETENCE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JOUEUR_UTILISE_COMPETENCE4` FOREIGN KEY (`ID_COMPETENCE4`) REFERENCES `competences` (`ID_COMPETENCE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD CONSTRAINT `FK_PERSONNAGE_JOUE_ROLE` FOREIGN KEY (`NOM_ROLE`) REFERENCES `role` (`NOM_ROLE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PERSONNAGE_UTILISE_COMPETENCE1` FOREIGN KEY (`ID_COMPETENCE1`) REFERENCES `competences` (`ID_COMPETENCE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PERSONNAGE_UTILISE_COMPETENCE2` FOREIGN KEY (`ID_COMPETENCE2`) REFERENCES `competences` (`ID_COMPETENCE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PERSONNAGE_UTILISE_COMPETENCE3` FOREIGN KEY (`ID_COMPETENCE3`) REFERENCES `competences` (`ID_COMPETENCE`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
