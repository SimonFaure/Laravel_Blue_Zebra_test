-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Sam 30 Avril 2016 à 09:45
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_28_130525_create_posts_table', 2),
('2016_04_29_072624_create_links_table', 3),
('2016_04_29_083022_create_people_tabel', 4),
('2016_04_29_083022_create_people_table', 5),
('2016_04_29_093703_peoples', 6),
('2016_04_29_101957_peoples', 7),
('2016_04_29_102022_peoples', 8);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `peoples`
--

CREATE TABLE `peoples` (
  `id` int(10) unsigned NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `peoples`
--

INSERT INTO `peoples` (`id`, `firstName`, `lastName`, `email`, `birthday`, `created_at`, `updated_at`) VALUES
(2, 'Pamela', 'Herman', 'hCassin@Hoeger.biz', '2015-05-14', NULL, NULL),
(5, 'Katelin', 'Streich', 'Kamille58@gmail.com', '2015-11-27', NULL, NULL),
(7, 'Reyna', 'Ritchie', 'Kali.Reichel@Smitham.info', '1972-02-19', NULL, NULL),
(8, 'Pietro', 'Kulas', 'Geo.Conn@Ward.com', '1991-01-07', NULL, NULL),
(11, 'Leora', 'Cassin', 'Darryl.Tromp@hotmail.com', '2015-11-02', NULL, NULL),
(12, 'Rosemarie', 'Stark', 'tGorczany@yahoo.com', '1976-05-22', NULL, NULL),
(13, 'Darius', 'Langworth', 'Armstrong.Sean@hotmail.com', '1988-06-09', NULL, NULL),
(14, 'Wilber', 'Torphy', 'Powlowski.Gabrielle@hotmail.com', '1995-03-11', NULL, NULL),
(15, 'Ocie', 'Littel', 'Bins.Crystal@yahoo.com', '2003-05-25', NULL, NULL),
(16, 'Pearl', 'Carroll', 'pRempel@hotmail.com', '1985-07-20', NULL, NULL),
(17, 'Margarette', 'Will', 'eMcLaughlin@gmail.com', '2001-07-03', NULL, NULL),
(18, 'Kellen', 'Greenfelder', 'Skiles.Monty@McDermott.com', '1978-07-12', NULL, NULL),
(20, 'Chaim', 'Lubowits', 'Darius.Lueilwitz@Green.com', '1974-01-03', NULL, '2016-04-29 12:58:33'),
(21, 'Esta', 'Wiegand', 'uDouglas@yahoo.com', '1980-01-25', NULL, NULL),
(22, 'Marcelino', 'Kunze', 'sMuller@gmail.com', '1993-11-28', NULL, NULL),
(23, 'Lee', 'Senger', 'Darien.Pagac@yahoo.com', '1972-04-23', NULL, NULL),
(27, 'Kayley', 'Daugherty', 'Gail51@yahoo.com', '1985-06-20', NULL, NULL),
(28, 'Madge', 'Schaefer', 'Golda21@yahoo.com', '2009-07-27', NULL, NULL),
(29, 'Mohammed', 'Reichert', 'Sonia.Yundt@yahoo.com', '2014-04-15', NULL, NULL),
(31, 'Ryan', 'Larkin', 'vKautzer@Roob.com', '2011-04-27', NULL, NULL),
(32, 'Marlee', 'Ritchie', 'fLeannon@gmail.com', '2011-05-14', NULL, NULL),
(34, 'John', 'Doe', 'john@gmail.com', '2016-04-10', '2016-04-29 08:28:46', '2016-04-29 08:28:46'),
(35, 'Matha', 'Stewart', 'martha@gmail.com', '2016-04-09', '2016-04-29 08:32:55', '2016-04-29 08:32:55'),
(37, 'Martha', 'Stewart', 'martha@gmail.fr', '2016-04-06', '2016-04-29 08:36:54', '2016-04-29 08:36:54'),
(40, 'James', 'Dean', 'dean@gmail.com', '2016-04-22', '2016-04-29 08:45:05', '2016-04-29 08:45:05'),
(41, 'Simon', 'Faure', 'faure@gmail.com', '0000-00-00', '2016-04-29 08:47:09', '2016-04-29 08:47:09'),
(44, 'Bob', 'L''éponge', 'bobleponge@gmail.com', '2016-04-02', '2016-04-29 08:57:47', '2016-04-29 08:57:47'),
(45, 'Aaron', 'Basiluskera', 'aaron@gmail.com', '2016-04-15', '2016-04-29 10:07:53', '2016-04-30 05:26:30'),
(47, 'Simon', 'Faure', 'faure.smh@gmail.com', '2016-04-02', '2016-04-29 12:33:43', '2016-04-29 12:33:43'),
(48, 'Anna', 'Karenine', 'anna@gmail.com', '2016-04-09', '2016-04-29 12:34:02', '2016-04-29 12:34:02'),
(49, 'Simon', 'Faure', 'faure.sh@gmail.com', '2016-04-07', '2016-04-29 12:46:40', '2016-04-29 12:46:40'),
(50, 'Léon', 'Tolstoï', 'leon@gmail.com', '2016-04-22', '2016-04-29 12:56:33', '2016-04-29 12:56:33'),
(52, 'Alexander', 'Poutchkin', 'pout@gmail.com', '2012-12-02', '2016-04-30 04:35:25', '2016-04-30 05:31:26'),
(55, 'Matt', 'Broad', 'broad@gmail.com', '2012-12-02', '2016-04-30 05:27:17', '2016-04-30 05:27:17');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `peoples`
--
ALTER TABLE `peoples`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `peoples_email_unique` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `peoples`
--
ALTER TABLE `peoples`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;