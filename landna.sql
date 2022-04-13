-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 avr. 2022 à 00:51
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `landna`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `Id_achat` int(11) NOT NULL,
  `Id_produit` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `Id_user` int(11) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `date_N` date NOT NULL,
  `mail` varchar(50) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `ID_DEPART` int(11) NOT NULL,
  `NOM_DEPART` varchar(30) NOT NULL,
  `NB_PLACES` int(11) NOT NULL,
  `ID_SPEC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `Id_event` int(11) NOT NULL,
  `nom_event` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `categorie_E` varchar(30) NOT NULL,
  `ID_DEPART` int(11) NOT NULL,
  `Id_staff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `Id_produit` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `specialites`
--

CREATE TABLE `specialites` (
  `ID_SPEC` int(11) NOT NULL,
  `TYPE_SPEC` varchar(30) NOT NULL,
  `NOM_SPEC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `ID_Staff` int(11) NOT NULL,
  `nom_staff` varchar(30) NOT NULL,
  `salaire` int(11) NOT NULL,
  `categorie` varchar(30) NOT NULL,
  `horaire` int(11) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`Id_achat`),
  ADD KEY `FK_ID_PRODUIT` (`Id_produit`),
  ADD KEY `FK_ID_USER` (`Id_user`);

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`Id_user`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`ID_DEPART`),
  ADD KEY `FK_ID_SPEC` (`ID_SPEC`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`Id_event`),
  ADD KEY `FK_ID_DEPART` (`ID_DEPART`),
  ADD KEY `FK_ID_STAFF` (`Id_staff`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`Id_produit`);

--
-- Index pour la table `specialites`
--
ALTER TABLE `specialites`
  ADD PRIMARY KEY (`ID_SPEC`),
  ADD UNIQUE KEY `ID_SPEC` (`ID_SPEC`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID_Staff`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `ID_DEPART` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `Id_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `specialites`
--
ALTER TABLE `specialites`
  MODIFY `ID_SPEC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2223;

--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID_Staff` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `FK_ID_PRODUIT` FOREIGN KEY (`Id_produit`) REFERENCES `produits` (`Id_produit`),
  ADD CONSTRAINT `FK_ID_USER` FOREIGN KEY (`Id_user`) REFERENCES `comptes` (`Id_user`);

--
-- Contraintes pour la table `departements`
--
ALTER TABLE `departements`
  ADD CONSTRAINT `FK_ID_SPEC` FOREIGN KEY (`ID_SPEC`) REFERENCES `specialites` (`ID_SPEC`);

--
-- Contraintes pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD CONSTRAINT `FK_ID_DEPART` FOREIGN KEY (`ID_DEPART`) REFERENCES `departements` (`ID_DEPART`),
  ADD CONSTRAINT `FK_ID_STAFF` FOREIGN KEY (`Id_staff`) REFERENCES `staff` (`ID_Staff`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
