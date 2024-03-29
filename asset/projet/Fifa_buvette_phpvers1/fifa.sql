-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 07 avr. 2022 à 15:55
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
-- Base de données : `fifa`
--

-- --------------------------------------------------------

--
-- Structure de la table `buvette`
--

CREATE TABLE `buvette` (
  `id_B` int(11) NOT NULL,
  `nomB` varchar(50) NOT NULL,
  `emplacementB` varchar(50) NOT NULL,
  `responsableB` varchar(50) NOT NULL,
  `id_V` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `buvetteouverte`
--

CREATE TABLE `buvetteouverte` (
  `id_bo` int(11) NOT NULL,
  `nomB` varchar(255) NOT NULL,
  `id_B` int(11) NOT NULL,
  `id_M` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `idE` int(11) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `drapeau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`idE`, `pays`, `drapeau`) VALUES
(1, 'France', '../img/fr.png'),
(2, 'Allemagne', '../img/al.png'),
(3, 'Angleterre', '../img/an.png'),
(4, 'Espagne', '../img/es.png'),
(5, 'Tunisie', '../img/tu.png'),
(6, 'Portugal', '../img/po.png');

-- --------------------------------------------------------

--
-- Structure de la table `equipea`
--

CREATE TABLE `equipea` (
  `id_Ea` int(11) NOT NULL,
  `paysE` varchar(2) NOT NULL,
  `drapeauE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `equipeb`
--

CREATE TABLE `equipeb` (
  `Id_eB` int(11) NOT NULL,
  `paysE` varchar(255) NOT NULL,
  `drapeauE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `matche`
--

CREATE TABLE `matche` (
  `id_M` int(11) NOT NULL,
  `dateM` date NOT NULL,
  `scoreA` int(11) NOT NULL,
  `scoreB` int(11) NOT NULL,
  `id_Ea` int(11) NOT NULL,
  `Id_eB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `presence`
--

CREATE TABLE `presence` (
  `id_P` int(11) NOT NULL,
  `heureDeb` int(11) NOT NULL,
  `heureFin` int(11) NOT NULL,
  `id_V` int(11) NOT NULL,
  `id_B` int(11) NOT NULL,
  `id_M` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `volontaire`
--

CREATE TABLE `volontaire` (
  `id_V` int(11) NOT NULL,
  `nomV` varchar(50) NOT NULL,
  `ageV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `buvette`
--
ALTER TABLE `buvette`
  ADD PRIMARY KEY (`id_B`),
  ADD KEY `Buvette_Volontaire_FK` (`id_V`);

--
-- Index pour la table `buvetteouverte`
--
ALTER TABLE `buvetteouverte`
  ADD PRIMARY KEY (`id_bo`),
  ADD KEY `BuvetteOuverte_Buvette_FK` (`id_B`),
  ADD KEY `BuvetteOuverte_Match0_FK` (`id_M`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`idE`);

--
-- Index pour la table `equipea`
--
ALTER TABLE `equipea`
  ADD PRIMARY KEY (`id_Ea`);

--
-- Index pour la table `equipeb`
--
ALTER TABLE `equipeb`
  ADD PRIMARY KEY (`Id_eB`);

--
-- Index pour la table `matche`
--
ALTER TABLE `matche`
  ADD PRIMARY KEY (`id_M`),
  ADD KEY `Match_EquipeA_FK` (`id_Ea`),
  ADD KEY `Match_EquipeB0_FK` (`Id_eB`);

--
-- Index pour la table `presence`
--
ALTER TABLE `presence`
  ADD PRIMARY KEY (`id_P`),
  ADD KEY `Presence_Volontaire_FK` (`id_V`),
  ADD KEY `Presence_Buvette0_FK` (`id_B`),
  ADD KEY `Presence_Matche1_FK` (`id_M`);

--
-- Index pour la table `volontaire`
--
ALTER TABLE `volontaire`
  ADD PRIMARY KEY (`id_V`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `buvette`
--
ALTER TABLE `buvette`
  MODIFY `id_B` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `buvetteouverte`
--
ALTER TABLE `buvetteouverte`
  MODIFY `id_bo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `idE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `equipea`
--
ALTER TABLE `equipea`
  MODIFY `id_Ea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `equipeb`
--
ALTER TABLE `equipeb`
  MODIFY `Id_eB` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `matche`
--
ALTER TABLE `matche`
  MODIFY `id_M` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `presence`
--
ALTER TABLE `presence`
  MODIFY `id_P` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `volontaire`
--
ALTER TABLE `volontaire`
  MODIFY `id_V` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `buvette`
--
ALTER TABLE `buvette`
  ADD CONSTRAINT `Buvette_Volontaire_FK` FOREIGN KEY (`id_V`) REFERENCES `volontaire` (`id_V`);

--
-- Contraintes pour la table `buvetteouverte`
--
ALTER TABLE `buvetteouverte`
  ADD CONSTRAINT `BuvetteOuverte_Buvette_FK` FOREIGN KEY (`id_B`) REFERENCES `buvette` (`id_B`),
  ADD CONSTRAINT `BuvetteOuverte_Match0_FK` FOREIGN KEY (`id_M`) REFERENCES `matche` (`id_M`);

--
-- Contraintes pour la table `matche`
--
ALTER TABLE `matche`
  ADD CONSTRAINT `Match_EquipeA_FK` FOREIGN KEY (`id_Ea`) REFERENCES `equipea` (`id_Ea`),
  ADD CONSTRAINT `Match_EquipeB0_FK` FOREIGN KEY (`Id_eB`) REFERENCES `equipeb` (`Id_eB`);

--
-- Contraintes pour la table `presence`
--
ALTER TABLE `presence`
  ADD CONSTRAINT `Presence_Buvette0_FK` FOREIGN KEY (`id_B`) REFERENCES `buvette` (`id_B`),
  ADD CONSTRAINT `Presence_Matche1_FK` FOREIGN KEY (`id_M`) REFERENCES `matche` (`id_M`),
  ADD CONSTRAINT `Presence_Volontaire_FK` FOREIGN KEY (`id_V`) REFERENCES `volontaire` (`id_V`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
