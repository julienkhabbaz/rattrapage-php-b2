-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 02 juil. 2020 à 16:56
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_produits`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_date` date NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `email`, `subject`, `message`, `contact_date`, `created`) VALUES
(3, 'TestContact', 'Suebject', 'Message', '2020-07-02', '2020-07-02');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20200701183520', '2020-07-01 20:35:53', 309),
('DoctrineMigrations\\Version20200701213045', '2020-07-01 23:31:03', 89),
('DoctrineMigrations\\Version20200701213345', '2020-07-01 23:33:53', 643);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` tinyint(1) NOT NULL,
  `created` date NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `name`, `description`, `promo`, `created`, `picture`, `updated_at`, `prix`) VALUES
(103, 'vel soluta exercitationem', 'Deleniti qui enim omnis ipsum eum sed. Necessitatibus ipsa voluptatibus quo atque quasi. Dolor quisquam laudantium enim enim qui sunt.', 0, '2020-07-02', 'https://images.unsplash.com/photo-1575808142341-e39853744dbd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=542&q=80', NULL, 169.29),
(104, 'est labore voluptatibus', 'Inventore atque quibusdam omnis et voluptatem. Harum officia omnis ut aliquam esse. Velit voluptatem repudiandae laboriosam est officia ab ipsa ratione.', 1, '2020-07-02', 'https://images.unsplash.com/photo-1484980859177-5ac1249fda6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=542&q=80', NULL, 119.49),
(105, 'qui excepturi rerum', 'Molestiae rem non et voluptas. Ducimus odio iste est sapiente perferendis inventore. Molestiae sint dolor esse.', 1, '2020-07-02', 'https://images.unsplash.com/photo-1559916712-ae4427996e1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80', NULL, 89.29),
(106, 'repellat et et', 'Illo consequatur deleniti exercitationem aut rem eos tempora. Doloremque et est porro accusamus modi. Eum enim molestias et ut laborum eos.', 1, '2020-07-02', 'https://images.unsplash.com/photo-1542274957-16888590a231?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80', NULL, 59.49),
(107, 'neque praesentium cum', 'Quidem corporis qui qui consequatur neque dolores voluptatem. Aut provident laborum enim illum et nihil. Voluptatum modi ullam esse incidunt autem perferendis asperiores.', 1, '2020-07-02', 'https://images.unsplash.com/photo-1542282753894-ecd583312137?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80', NULL, 29.29),
(108, 'in omnis assumenda', 'Aut ipsum quo nobis explicabo. Incidunt rerum officiis veniam distinctio ea. Impedit iure voluptas similique dolor.', 0, '2020-07-02', 'https://images.unsplash.com/photo-1558894240-02639ceea49f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80', NULL, 129.99),
(109, 'commodi dignissimos officia', 'Ut et reprehenderit et eos commodi asperiores molestiae. Dolorem a perspiciatis est qui magnam et adipisci. Sint velit eum molestiae dolor atque nisi reprehenderit aut.', 1, '2020-07-02', 'https://images.unsplash.com/photo-1593435221158-f3c553ce3247?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80', NULL, 129.99),
(110, 'cupiditate sit nisi', 'Qui ratione quia rerum quasi. Fuga eum illum expedita rerum in maxime. Rem totam cum maiores incidunt qui.', 0, '2020-07-02', 'https://images.unsplash.com/photo-1578412555487-e8344b57be43?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80', NULL, 219.99),
(111, 'sunt qui similique', 'Magni quia dicta dolorum ex. Dolores nesciunt qui impedit pariatur enim. Alias est consectetur voluptas.', 1, '2020-07-02', 'https://images.unsplash.com/photo-1562166437-24ebf08f28be?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80', NULL, 369.29),
(112, 'reprehenderit debitis voluptate', 'Incidunt nisi in sed sed vel et. Dolore molestias animi enim laborum nihil. Odio nisi quia nesciunt alias.', 1, '2020-07-02', 'https://images.unsplash.com/photo-1562166453-964fd947f2a4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80', NULL, 49.49),
(113, 'repudiandae tempora laudantium', 'Numquam sit accusantium odit laborum. Et doloremque aliquid nemo consequatur. Numquam molestiae temporibus dignissimos corporis.', 1, '2020-07-02', 'https://images.unsplash.com/photo-1527336938975-6c776d906fd3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80', NULL, 119.99),
(114, 'minima qui quis', 'Assumenda et veritatis impedit debitis. Doloremque magni unde aliquam ut voluptatum beatae. Accusantium facilis corporis quis sed.', 0, '2020-07-02', 'https://images.unsplash.com/photo-1552010099-5dc86fcfaa38?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=80', NULL, 29.49),
(115, 'voluptatem vero incidunt', 'Harum dicta architecto officia nemo. Ut eos expedita eos voluptatem iure dolorum veniam at. Dicta sit doloremque dolor eligendi quaerat delectus.', 0, '2020-07-02', NULL, NULL, 259.29),
(116, 'saepe maxime iure', 'Esse reprehenderit corporis veniam sequi consequatur laborum sit. Repellendus quia ut rerum omnis. Impedit autem perferendis est magnam.', 0, '2020-07-02', NULL, NULL, 29.99),
(117, 'animi occaecati ipsam', 'Debitis placeat nostrum mollitia quis ut. Quo molestiae voluptatem quos aut autem eum ipsum. Fugiat tenetur provident quisquam aut adipisci laborum ut.', 0, '2020-07-02', NULL, NULL, 49.29),
(118, 'nobis consequatur laboriosam', 'Et nobis iure quam earum velit voluptates amet. Ea tenetur tempora asperiores id voluptas. Aliquid officiis consequatur rerum occaecati aut.', 0, '2020-07-02', NULL, NULL, 399.99),
(119, 'eos culpa id', 'Ullam atque corrupti earum neque. Laborum vero dolor mollitia distinctio placeat eveniet. Ipsam maiores est quidem est hic.', 0, '2020-07-02', NULL, NULL, 159.49),
(120, 'velit in ut', 'Maxime aliquam suscipit quam et. Eum et magni quod tempore aut maxime repellendus. Iste aliquam ad et aperiam asperiores quia similique.', 0, '2020-07-02', NULL, NULL, 89.99),
(121, 'eaque exercitationem molestiae', 'Ad reprehenderit repellat magnam consectetur aut. Ipsa rerum optio delectus ducimus. Ipsam voluptatem voluptatem ullam.', 0, '2020-07-02', NULL, NULL, 199.29),
(122, 'et mollitia unde', 'Quae dolorum in ratione et. Qui ipsum voluptatum odio perspiciatis et. Dolore sapiente aperiam praesentium sed sunt.', 0, '2020-07-02', NULL, NULL, 59.99),
(123, 'impedit ullam dolorem', 'Vel commodi et soluta animi deleniti vel. Autem quam quia accusantium tempora voluptas vel. Deleniti recusandae quia aut voluptatem quibusdam molestiae ullam.', 0, '2020-07-02', NULL, NULL, 269.99),
(124, 'ut omnis earum', 'Enim molestias dicta repudiandae earum molestiae. Ut deserunt sequi accusantium occaecati tenetur. Quo aut ullam fugiat velit adipisci.', 0, '2020-07-02', NULL, NULL, 9.99),
(125, 'esse sint esse', 'Vel a repellendus molestiae et quo. Repellendus veniam hic nostrum id. Quo commodi eos tempora adipisci sed maxime modi.', 0, '2020-07-02', NULL, NULL, 139.49),
(126, 'alias numquam aspernatur', 'Eveniet neque rerum et nisi inventore. Et voluptatem saepe placeat rerum impedit. Modi quos voluptatem voluptatem et exercitationem.', 0, '2020-07-02', NULL, NULL, 379.49),
(127, 'voluptas soluta consequuntur', 'Harum architecto tenetur et. Et omnis sint velit. In excepturi repudiandae impedit voluptatem dignissimos corrupti et.', 0, '2020-07-02', NULL, NULL, 389.49),
(128, 'voluptatem rerum perspiciatis', 'Saepe et dolorum sed sed repellendus enim tempora. Sequi ipsa est ipsam officiis rerum. Officia ipsum debitis dolor sunt placeat dolores.', 0, '2020-07-02', NULL, NULL, 219.99),
(129, 'provident est necessitatibus', 'Est cupiditate nisi dolores omnis molestiae quod. Temporibus id quia architecto amet dolore molestiae. Ut omnis nostrum atque ducimus commodi voluptatem ea nesciunt.', 0, '2020-07-02', NULL, NULL, 99.49),
(130, 'sapiente temporibus in', 'Rerum expedita tempore rerum incidunt deserunt dolores illo. Totam consequatur in sint a et quo aut. Quod sequi maiores ullam aut.', 1, '2020-07-02', NULL, NULL, 159.29),
(131, 'et suscipit harum', 'Delectus animi enim illum placeat eligendi ullam saepe voluptatibus. Non veniam quod animi eligendi. Sint blanditiis error maiores vitae et.', 0, '2020-07-02', NULL, NULL, 109.99),
(132, 'et nemo totam', 'Itaque atque consequuntur saepe ab perspiciatis illo. Dolor sint autem dicta est sed fugit. Quia vel nostrum voluptas fugit nam ea in.', 0, '2020-07-02', NULL, NULL, 19.29),
(133, 'dolorem assumenda ipsum', 'Cumque aut voluptatum quo ducimus enim corporis natus. Vel quibusdam et quia temporibus illum dolorem suscipit. Et eos commodi optio amet nam.', 1, '2020-07-02', NULL, NULL, 69.99),
(134, 'enim odio vero', 'Est est aut maxime ut nobis enim. Magni quia vitae aut ut tempore natus. Consequatur repellendus ut est nihil sequi odio distinctio.', 1, '2020-07-02', NULL, NULL, 9.49),
(135, 'saepe velit aliquam', 'At expedita quaerat minima quas distinctio. Est quisquam inventore fugiat non ducimus sunt soluta. Consectetur et alias totam beatae ad est totam laborum.', 0, '2020-07-02', NULL, NULL, 149.29),
(136, 'nihil vel hic', 'Aut dolorum odio deleniti voluptatum. Consequatur ex quis dolorem voluptatibus tempore aut aut. Autem eum hic pariatur.', 1, '2020-07-02', NULL, NULL, 359.99),
(137, 'rerum molestias dolores', 'Est aut aspernatur earum magnam quae quas. Sed tenetur beatae tempora. Ut dolor perferendis maiores optio illum harum voluptas assumenda.', 0, '2020-07-02', NULL, NULL, 259.29),
(138, 'sit dignissimos et', 'Aut eos fugit consequatur ratione possimus ut error. Aspernatur quos hic repellendus laborum sunt facere suscipit. Non nostrum magni et aliquid aut.', 0, '2020-07-02', NULL, NULL, 329.99),
(139, 'perferendis aut saepe', 'Error et nobis nam earum saepe delectus voluptatibus. Recusandae quas facere quos sunt eos odio vel. Sunt ut at voluptatem quis.', 0, '2020-07-02', NULL, NULL, -0.71),
(140, 'voluptas perspiciatis officia', 'Et quae neque aut error molestias et. Illum laudantium laudantium quasi quam velit vitae. Adipisci veniam rerum distinctio labore.', 1, '2020-07-02', NULL, NULL, 369.49),
(141, 'ipsam laboriosam qui', 'Voluptate rerum voluptates quisquam sint. Quia dolore et nihil dolore magni et voluptate nihil. Dolores facilis rerum est consequatur consectetur delectus.', 0, '2020-07-02', NULL, NULL, 29.99),
(142, 'id nesciunt fuga', 'Architecto ea deserunt dolor laboriosam eligendi modi. Ea dolor qui earum odio delectus voluptas aut. Ex voluptatem qui harum dignissimos beatae adipisci mollitia sed.', 0, '2020-07-02', NULL, NULL, 379.29),
(143, 'quo accusamus qui', 'Expedita ad quae omnis voluptate. In odio similique corrupti magni ducimus velit dignissimos excepturi. Aut assumenda suscipit aliquid error iusto sit.', 0, '2020-07-02', NULL, NULL, 159.49),
(144, 'omnis quas nesciunt', 'Ut maxime quia eius ea ipsum libero quo. Asperiores nesciunt ea eum distinctio accusamus sequi aliquid. Delectus voluptatum at aspernatur non quibusdam.', 0, '2020-07-02', NULL, NULL, 79.29),
(145, 'sit ut debitis', 'Et autem quaerat voluptates. Excepturi repellendus aliquam autem alias et officiis ut sunt. Vero quo id et ut id suscipit iste.', 0, '2020-07-02', NULL, NULL, 169.49),
(146, 'voluptate velit molestiae', 'Corrupti officiis impedit perspiciatis cum ducimus quas. Quasi tenetur quisquam perferendis eos consequuntur debitis ad. Fuga magnam omnis quia perspiciatis ex dolorum non.', 0, '2020-07-02', NULL, NULL, 229.29),
(147, 'laboriosam earum dolorem', 'Explicabo commodi optio quam aut et. Sunt voluptatibus qui ducimus aut magni fugit ut est. Suscipit dicta ipsam praesentium autem quam corrupti.', 0, '2020-07-02', NULL, NULL, 189.29),
(148, 'et reiciendis et', 'Ad vitae sunt enim. Facilis quae qui quis voluptates similique. Quia quod debitis accusamus et iste.', 0, '2020-07-02', NULL, NULL, 229.29),
(149, 'quisquam nulla perferendis', 'Autem aut labore sit voluptatum ut. Unde sed ea et harum ad rem cum. Modi rerum omnis et rerum impedit.', 0, '2020-07-02', NULL, NULL, 339.29),
(150, 'sint quia dignissimos', 'Itaque unde reprehenderit sunt aut est aut. Voluptatem consequatur reprehenderit enim. Odit maxime occaecati a sit quis in ratione.', 0, '2020-07-02', NULL, NULL, 159.29),
(151, 'et minima aut', 'Est maxime et nihil ipsam blanditiis. Occaecati eos mollitia sit et rem. Officiis error velit id vel aut sed.', 0, '2020-07-02', NULL, NULL, 169.49),
(152, 'libero qui iure', 'Eius impedit voluptatum temporibus sed voluptatem vitae. Facilis est rerum tempora placeat. Dicta et est vero deserunt error laboriosam quia.', 0, '2020-07-02', NULL, NULL, 69.29);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
