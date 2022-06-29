-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 29 juin 2022 à 12:26
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eg_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `photo` varchar(200) NOT NULL,
  `admin` varchar(200) NOT NULL,
  `photoAd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `content`, `date`, `photo`, `admin`, `photoAd`) VALUES
(1, 'Coup de projecteur sur le parcours entrepreneuriat de la Formation Solaire à Energy Generation', 'Parce que le solaire représente une véritable opportunité de création d\'emplois pour les jeunes, tout en participant au développement socio-économique des zones rurales en Afrique, Energy Generation a créé un programme de 10 mois pour répondre aux besoins en formation dans le domaine : la “Formation installateurs et techniciens de maintenance de systèmes solaires photovoltaïques”.\r\n\r\n\r\nLe programme bénéficie d’un soutien technique et pédagogique de la Fondation Schneider Electric et d’un soutien financier de la part du leader mondial de l’énergie, Électricité de France (EDF) sous la forme de bourses accordées aux jeunes femmes. \r\n\r\n\r\nMesdames, n’hésitez donc pas à vous rapprocher de nous pour en savoir plus !\r\n\r\n\r\nLa formation est subdivisée en deux parties : le parcours technique qui a fait l’objet d’un précédent article et le parcours entrepreneuriat riche de plusieurs modules  enseignés par différents intervenant.e.s.\r\n\r\n\r\nRaymond Ramazani-Saleh, un de nos apprenants venu spécialement de la R.D. Congo pour suivre la formation et économiste de formation témoigne : \r\n\r\n« Après avoir acquis les bases techniques sur l\'installation et la maintenance de systèmes solaires photovoltaïques, nous avons poursuivi avec le parcours entrepreneuriat avec plusieurs modules comme la comptabilité, la gestion financière, le marketing et la communication, la gestion et le développement d\'entreprise, le business Model, l\'élaboration de plan d\'affaire, le leadership et développement personnel. Cette suite de formation était pleine de motivation, de surprise, inspirante et instructive. Nous sommes prêts  à mettre nos compétences tant techniques qu\' entrepreneuriales à profit sur le marché africain. Nous remercions EG pour la qualité d\'apprentissage et la sélection des formateurs venus de tous les coins du monde. Nous invitons tous les jeunes à venir profiter de cette expérience à Energy Generation.»\r\n\r\n\r\nVoici quelques exemples de modules dispensés :\r\n\r\n\r\nEssentiels pour partir sur de bonnes bases pour gérer une entreprise, les modules comptabilité et gestion financière ont  été dispensés par Olivier KODJO, consultant en marketing et entrepreneuriat à l’Observatoire Ouest Africain du Développement Durable.', '2022-06-27 11:01:30', 'image/post.png', 'Josias', 'image/jo.jpg'),
(2, 'Spotlight on the entrepreneurial journey from Solar Training to Energy Generation', 's solar represents a real opportunity to create jobs for young people while participating in the socio-economic development of African rural areas in particular, Energy Generation has created a 10-month program to meet training needs in the field: “Training installers and maintenance technicians of solar photovoltaic systems”. \r\n\r\n\r\nThe programme benefits from technical and educational support from the Schneider Electric Foundation and financial support from the global leader in energy- Electricité de France (EDF), in the form of grants for young women.\r\n\r\n\r\nLadies, don\'t hesitate to get in touch with us to find out more!\r\n\r\n\r\nThe training is subdivided into two parts: the technical course which was the subject of the previous article and the entrepreneurship course which is rich in several modules and  taught by different speakers.\r\n\r\n\r\nRaymond Ramazani-Saleh, one of our learners who came from the DR Congo to follow the training testifies:\r\n\r\n\r\n\"After having acquired the technical bases on the installation and the maintenance of photovoltaic solar systems, we continued with the entrepreneurship course with several modules like accounting, financial management,marketing and communication, management and development of a company, business model, business plan development, leadership and personal development. This training was instructive and full of motivation, surprises, inspiration. We are ready to put our technical and entrepreneurial skills to good use on the African market. We thank EG for the quality of learning and the selection of trainers from all over the world. We invite all young people to come and enjoy this experience at Energy Generation.” \r\n\r\n\r\nHere are some examples of modules taught:\r\n\r\n\r\nEssential to start on a good basis to manage a business, the accounting and financial management modules were provided by Olivier KODJO, marketing and entrepreneurship consultant at the West African Observatory for Sustainable Development.', '2022-06-27 15:05:56', 'image/api.png', 'Sylvio ', 'image/buy-1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `articleId`, `autor`, `comment`, `date`) VALUES
(1, 1, 'Hubert', 'je vous suis', '2022-06-27 15:44:30'),
(2, 1, 'Hubert', 'je vous suis', '2022-06-27 15:51:09'),
(3, 1, 'Hubert', 'je vous suis', '2022-06-27 15:51:56'),
(4, 1, 'Hubert', 'je vous suis', '2022-06-27 15:56:18'),
(5, 1, 'Hubert', 'je vous suis', '2022-06-27 15:57:32'),
(6, 1, 'victor ', 'je ne suis pas', '2022-06-27 17:56:44'),
(7, 1, 'patrice', 'hello', '2022-06-27 17:57:05'),
(8, 1, 'patrice', 'hello', '2022-06-27 18:06:49'),
(9, 1, 'patrice', 'hello', '2022-06-27 18:06:49'),
(10, 1, 'patrice', 'hello', '2022-06-27 18:06:50'),
(11, 1, 'patrice', 'hello', '2022-06-27 18:06:50'),
(12, 1, 'patrice', 'hello', '2022-06-27 18:06:50'),
(13, 2, 'Bernadette', 'salut tout le monde ', '2022-06-27 19:21:28'),
(14, 1, 'Jo', 'hello', '2022-06-27 21:56:52'),
(15, 1, 'Hubert', 'ecrit un autre', '2022-06-28 09:03:34'),
(16, 1, 'doro', 'salut', '2022-06-28 14:07:41'),
(17, 1, 'Fadil', 'je suis le virus', '2022-06-28 14:14:35'),
(18, 2, 'Tawfik', 'Hello', '2022-06-28 15:51:44'),
(19, 2, 'Tawfik', 'Hello', '2022-06-28 17:19:00'),
(20, 1, 'Jak', 'yes', '2022-06-28 21:10:08'),
(21, 1, 'Jak', 'yes', '2022-06-28 21:12:34');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `genre` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `pays` int(11) NOT NULL,
  `diplome` int(11) NOT NULL,
  `theme` int(11) NOT NULL,
  `campus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `prenom`, `email`, `genre`, `number`, `pays`, `diplome`, `theme`, `campus`) VALUES
(1, 'JAK', 'Josias', 'jos@gmail.com', 1, 2147483647, 2, 2, 2, 2),
(2, 'JAK', 'Josias', 'jos@gmail.com', 1, 2147483647, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `lang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `nom`, `email`, `lang`) VALUES
(1, 'Josias', 'josiasapelete@gmail.com', 1),
(2, 'Jak', 'josiasapelete@gmail.com', 1),
(3, 'Jak', 'josiasapelete@gmail.com', 1),
(4, 'Jak', 'josiasapelete@gmail.com', 1),
(5, 'Jak', 'apelete@gmail.com', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articleId` (`articleId`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`articleId`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
