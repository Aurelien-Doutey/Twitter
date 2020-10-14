-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 14 oct. 2020 à 16:08
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `twitter`
--

-- --------------------------------------------------------

--
-- Structure de la table `tweet`
--

DROP TABLE IF EXISTS `tweet`;
CREATE TABLE IF NOT EXISTS `tweet` (
  `ID` varchar(14) NOT NULL,
  `user` varchar(14) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `htags` varchar(300) DEFAULT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tweet`
--

INSERT INTO `tweet` (`ID`, `user`, `msg`, `htags`, `date`) VALUES
('5f80826fa08a1', 'me', '#ht Salut #test', '#ht #test', '09-10-2020'),
('5f8076fed4c3d', 'user', 'hello #f  #de #de #de#e #re', '#f #de #de #de#e #re', '09-10-2020'),
('5f80728559443', 'user', 'hello #f  #de #de #de#e', '#f #de #de #de#e', '09-10-2020'),
('5f7f261a1c2a8', 'tesst', '#de # #lo Salut', '#de #lo', '08-10-2020'),
('5f7f22ddbd747', 'me', 'hello #f  #de #de #de#e', '#f #de #de #de#e', '08-10-2020'),
('5f845a4b55cf9', 'user', 'hello #1', '#1', '12-10-2020'),
('5f845a69a4b6f', 'user', 'hello #12', '#12', '12-10-2020'),
('5f85a860b47be', 'user', '47', '', '13-10-2020'),
('5f85ab2934f69', 'me', '#gr', '#gr', '13-10-2020'),
('5f85ce7ec435e', 'user', 'je suis #test', '#test', '13-10-2020'),
('5f85cfdd9a015', 'user', '#ref', '#ref', '13-10-2020'),
('5f8712debc92c', 'user', '#tweet test', '#tweet', '14-10-2020'),
('5f8715e5cc6b8', 'user2', 'bonjour #test', '#test', '14-10-2020'),
('5f87160559396', 'user2', 'bonjour #test2', '#test2', '14-10-2020'),
('5f871614d2737', 'user2', 'bonjour #test3', '#test3', '14-10-2020'),
('5f87175a8fe49', 'user2', 'bonjour #test4', '#test4', '14-10-2020'),
('5f871792732b9', 'user2', 'bonjour #test47', '#test47', '14-10-2020'),
('5f8717bb3a6b0', 'user2', 'test', '', '14-10-2020'),
('5f871ebdf25b9', 'user2', '#test Suspendisse non sem id metus vestibulum tempor. Maecenas scelerisque pretium neque, non congue magna. Etiam tempor aliquet ligula, a bibendum orci accumsan in. Nunc lobortis a odio sit amet egestas. Quisque eget erat nibh. Ut sed velit fermentum, maximus lectus in, ultrices erat. In pretium vestibulum neque in gravida. Nam tempus rhoncus consequat. Fusce et laoreet odio. Curabitur finibus ante non risus fermentum eleifend. Mauris luctus dignissim turpis, vel mattis dolor imperdiet in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus luctus sodales tellus a ornare. Curabitur sagittis tortor id mollis maximus. Proin id consequat quam, a vestibulum leo. Nullam vulputate porttitor ligula, tincidunt feugiat augue varius rutrum.', '#test', '14-10-2020'),
('5f871f811c8a1', 'user2', 'test41', '', '14-10-2020');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
