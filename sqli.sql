
--
-- Base de données : `sqli`
--
-- --------------------------------------------------------
--
-- Structure de la table `secret`
--
CREATE DATABASE sqli;
USE sqli;
CREATE TABLE `secret` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `chiffrement` varchar(255) NOT NULL,
  `Bonus` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `secret`
--

INSERT INTO `secret` (`id`, `title`, `flag`, `chiffrement`, `Bonus`) VALUES
(15, 'first Line', 'aW5zZWN7Tm90X2FfZmxhZ19kdWRlX2VoZWhlaGVoZX0=', 'It', '64'),
(16, 'Second try', 'aW5zZWN7Tm90X2FfZmxhZ19kdWRlX2VoZWhlaGVoZX0', 'gonna', '@'),
(17, 'Third try', 'insec{a4f984da02eefd6f63eba67dd09d86ba}', 'be that easy .', '.......'),
(18, 'Fourth Try', 'aW5zZWN7ZGM2NDdlYjY1ZTY3MTFlMTU1Mzc1MjE4MjEyYjM5NjR9', '2', '..........');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(15, 'admin', 'admin@gmail.com', 'adminOp1234'),
(16, 'user1', 'user1@gmail.com', 'myPassword'),
(17, 'Secret', 'secret@gmail.com', 'This_is_secret');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `secret`
--
ALTER TABLE `secret`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `secret`
--
ALTER TABLE `secret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
