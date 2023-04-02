-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 02 avr. 2023 à 14:54
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `la_fabrique_du_savoir`
--

-- --------------------------------------------------------

--
-- Structure de la table `authors`
--

CREATE TABLE `authors` (
  `id_author` int(11) NOT NULL,
  `first_name_author` varchar(50) DEFAULT NULL,
  `last_name_author` varchar(50) NOT NULL,
  `date_birth_author` date NOT NULL,
  `date_death_author` date DEFAULT NULL,
  `biography_author` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `authors`
--

INSERT INTO `authors` (`id_author`, `first_name_author`, `last_name_author`, `date_birth_author`, `date_death_author`, `biography_author`) VALUES
(1, 'Romain', 'Gary', '1914-01-01', '1980-01-01', 'Romain Gary est connu pour ses œuvres romanesques qui abordent des thèmes tels que la mémoire, l\'identité et les relations amoureuses. Parmi ses ouvrages les plus connus, on peut citer \'La Vie devant soi\', qui a remporté le Prix Goncourt en 1975, ainsi que \'Les Racines du ciel\', \'Prometheus enchaîné\' et \'King Solomon\'. \r\n\r\nGary était également un diplomate et un aviateur, ce qui a inspiré bon nombre de ses écrits. Ses livres sont considérés comme des exemples de la littérature française moderne et sont appréciés pour leur style poétique et leur réflexion sur les grands thèmes de la vie.'),
(2, 'Denis', 'Diderot', '1713-01-01', '1784-01-01', 'Denis Diderot était un philosophe et écrivain français du XVIIIe siècle, connu pour son engagement en faveur des Lumières. Il était également un pionnier en matière d\'encyclopédie, ayant co-dirigé la publication de l\'Encyclopédie française, qui a joué un rôle clé dans la diffusion des idées des Lumières.\r\n\r\nDiderot a écrit de nombreux essais, notamment sur la religion, la morale et la politique, dans lesquels il défendait des idées telles que la liberté d\'expression et la séparation de l\'Église et de l\'État. Ses écrits ont également été influencés par la pensée de Jean-Jacques Rousseau, avec lequel il a entretenu une correspondance.\r\n\r\nEn plus de son travail sur l\'Encyclopédie, Diderot a écrit plusieurs pièces de théâtre et des romans dans lesquels il a exploré les thèmes de la liberté, de la condition humaine et de la responsabilité individuelle.\r\nL\'œuvre de Diderot reflète sa croyance en la raison et la liberté individuelle, ainsi que son engagement en faveur d\'une société plus juste et égalitaire.'),
(3, 'Guy', 'Maupassant', '1850-01-01', '1893-01-01', 'Guy de Maupassant était un écrivain français connu pour ses nouvelles et ses récits courtes. Il est considéré comme l\'un des plus grands maîtres de la forme courte en France et est souvent associé à la réalisme. \r\n\r\nSes œuvres, comme \'Boule de Suif\' et \'Bel-Ami\', décrivent la société française du XIXe siècle avec ironie et sarcasme, tout en explorant les thèmes de la vie humaine.'),
(4, 'Antoine', 'Saint-Exupery', '1900-01-01', '1944-01-01', 'Antoine de Saint-Exupéry (1900-1944) était un écrivain et aviateur français. Il est surtout connu pour son livre \'Le Petit Prince\', un conte pour enfants qui a été publié pour la première fois en 1943 et qui est devenu un classique mondial de la littérature. \r\nCe livre explore les thèmes de la solitude, de l\'amitié et de la quête de sens dans la vie, et est considéré comme un chef-d\'œuvre de la littérature française.'),
(5, 'Jean-Philippe', 'Jaworski', '1975-01-01', '0000-00-00', 'Jean-Philippe Jaworski est un écrivain français contemporain. Il est surtout connu pour ses romans, qui abordent souvent des thèmes tels que l\'identité, la culture et l\'immigration. \r\nSes écrits sont marqués par un style original et une voix unique, et il est considéré comme l\'un des écrivains français les plus talentueux de sa génération.'),
(6, 'Emile', 'Zola', '0000-00-00', '1902-01-01', 'Emile Zola était un écrivain français connu pour son engagement en faveur de la vérité et de la justice. Il est considéré comme l\'un des fondateurs du mouvement littéraire du naturalisme, qui s\'efforçait de décrire les aspects les plus réels et les plus sombres de la vie humaine. \r\n\r\nSes œuvres les plus connues, telles que \'Germinal\' et \'L\'Assommoir\', décrivent les conditions de vie des travailleurs et les injustices sociales dans la France du XIXe siècle.'),
(7, 'Man', 'Ray', '0000-00-00', '1976-01-01', ''),
(8, 'Choderlos', 'Laclos', '1741-01-01', '1803-01-01', 'Choderlos de Laclos était un écrivain français du XVIIIe siècle, connu pour son roman \'Les Liaisons Dangereuses\'. \r\nCe livre, qui explore les thèmes de la moralité, de l\'amour et de la manipulation, a été considéré comme un chef-d\'œuvre de la littérature française et a exercé une influence considérable sur la littérature et la culture ultérieures.'),
(9, 'Jacques', 'Prevert', '1900-01-01', '1977-01-01', 'Jacques Prévert était un poète et scénariste français, connu pour sa poésie colorée et populaire. Il a été l\'un des plus importants poètes de la poésie française du XXe siècle et a exercé une influence considérable sur les générations suivantes de poètes. \r\nSes poèmes, souvent écrits dans un style simple et accessible, abordent souvent des thèmes sociaux et politiques, et sont considérés comme des commentaires sur la société de son époque.'),
(10, 'Jules', 'Verne', '1828-01-01', '1905-01-01', ''),
(11, 'Guillaume', 'Apollinaire', '1880-01-01', '1918-01-01', ''),
(12, 'Pierre', 'Lemaitre', '1951-01-01', '0000-00-00', ''),
(13, 'Honore', 'Balzac', '1799-01-01', '1850-01-01', ''),
(14, 'Andre', 'Gide', '1869-01-01', '1951-01-01', ''),
(15, '', 'Stendhal', '1783-01-01', '1842-01-01', ''),
(16, 'Maurice', 'Druon', '1918-01-01', '2009-01-01', ''),
(17, 'Louis-Ferdinand', 'Celine', '1894-01-01', '1961-01-01', ''),
(18, 'Bernard', 'Werber', '1961-01-01', '0000-00-00', ''),
(19, '', 'Alain-Fournier', '1886-01-01', '1914-01-01', ''),
(20, 'Olivier', 'Bourdeaut', '1980-01-01', '0000-00-00', ''),
(21, 'Alain', 'Damasio', '1969-01-01', '0000-00-00', ''),
(22, 'Michel', 'Montaigne', '1533-01-01', '1592-01-01', ''),
(23, 'Rene', 'Barjavel', '1911-01-01', '1985-01-01', ''),
(24, 'Jonathan', 'Littell', '1967-01-01', '0000-00-00', ''),
(25, 'Paul', 'Eluard', '1895-01-01', '1952-01-01', ''),
(26, 'Jean', 'Racine', '1639-01-01', '1699-01-01', ''),
(27, 'Francois', 'Rabelais', '1494-01-01', '1553-01-01', ''),
(28, 'Pierre', 'Desproges', '1939-01-01', '1988-01-01', ''),
(29, 'Simone', 'Beauvoir', '1908-01-01', '1986-01-01', ''),
(30, 'Etienne', 'Boetie', '1530-01-01', '1563-01-01', ''),
(31, 'Laurent', 'Gaude', '1972-01-01', '0000-00-00', ''),
(32, 'Victor', 'Hugo', '1802-01-01', '1885-01-01', ''),
(33, 'Charles', 'Baudelaire', '1821-01-01', '1867-01-01', ''),
(34, 'Robert', 'Merle', '1908-01-01', '2004-01-01', ''),
(35, 'Pierre', 'Corneille', '1606-01-01', '1684-01-01', ''),
(36, 'Alfred', 'Musset', '1810-01-01', '1857-01-01', ''),
(37, 'Jean', 'Fontaine', '1621-01-01', '1695-01-01', ''),
(38, 'Alexandre', 'Dumas', '1824-01-01', '1895-01-01', ''),
(39, 'Albert', 'Camus', '1913-01-01', '1960-01-01', ''),
(40, '', 'Voltaire', '1694-01-01', '1778-01-01', ''),
(41, 'Edmond', 'Rostand', '1868-01-01', '1918-01-01', ''),
(42, 'Marcel', 'Proust', '1871-01-01', '1922-01-01', ''),
(43, 'Marguerite', 'Yourcenar', '1903-01-01', '1987-01-01', ''),
(44, 'Jean', 'Anouilh', '1910-01-01', '1987-01-01', ''),
(45, 'Lucien', 'Rebatet', '1903-01-01', '1972-01-01', ''),
(46, 'Gael', 'Faye', '1982-01-01', '0000-00-00', ''),
(47, 'Comte', 'Lautreamont', '1846-01-01', '1870-01-01', ''),
(48, 'Alfred', 'Jarry', '1873-01-01', '1907-01-01', ''),
(49, 'Arthur', 'Rimbaud', '1854-01-01', '1891-01-01', ''),
(50, 'Gaston', 'Leroux', '1868-01-01', '1927-01-01', ''),
(51, 'Michel', 'Tournier', '1924-01-01', '0000-00-00', ''),
(52, 'Marguerite', 'Duras', '1914-01-01', '1996-01-01', ''),
(53, 'Jean-Jacques', 'Rousseau', '1712-01-01', '1778-01-01', ''),
(54, 'Blaise', 'Pascal', '1623-01-01', '1662-01-01', ''),
(55, 'Christelle', 'Dabos', '1980-01-01', '0000-00-00', ''),
(56, 'Raymond', 'Queneau', '1903-01-01', '1976-01-01', ''),
(57, 'Michel', 'Houellebecq', '1956-01-01', '0000-00-00', ''),
(58, 'Pierre', 'Boulle', '1912-01-01', '1994-01-01', ''),
(59, 'Julien', 'Gracq', '1910-01-01', '2007-01-01', ''),
(60, 'Gustave', 'Flaubert', '1821-01-01', '1880-01-01', ''),
(61, 'Eugene', 'Ionesco', '1909-01-01', '1994-01-01', ''),
(62, '', 'Moliere', '1622-01-01', '1673-01-01', ''),
(63, 'Andre', 'Malraux', '1901-01-01', '1976-01-01', ''),
(64, 'Virginie', 'Despentes', '1969-01-01', '0000-00-00', ''),
(65, 'Boris', 'Vian', '1920-01-01', '1959-01-01', ''),
(66, 'Khaled', 'Hosseini', '1965-01-01', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id_book` int(11) NOT NULL,
  `title_book` varchar(50) NOT NULL,
  `publication_date_book` date NOT NULL,
  `pdf_book` varchar(100) NOT NULL,
  `pages_book` int(11) NOT NULL,
  `summary_book` text DEFAULT NULL,
  `cover_book` varchar(100) NOT NULL DEFAULT 'no-cover'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id_book`, `title_book`, `publication_date_book`, `pdf_book`, `pages_book`, `summary_book`, `cover_book`) VALUES
(1, 'L\'Etranger', '1942-01-01', '1_letranger', 97, 'Le roman suit l\'histoire de Meursault, un homme apathique et indifférent aux conventions sociales, qui vit à Alger. Lorsqu\'il tue un homme sur une plage, il est jugé pour son manque d\'émotion et de remords. Tout au long du livre, Meursault doit faire face à des jugements et des préjugés sociaux qui mettent en évidence les thèmes de l\'absurdité de la vie et de la liberté individuelle.\r\nLe livre explore la nature complexe de la condition humaine et examine les conséquences de vivre sans but apparent, ainsi que la difficulté de trouver un sens dans un monde qui peut sembler dépourvu de sens. En décrivant la vie de Meursault, Camus soulève des questions fondamentales sur la nature de la moralité, de la responsabilité et de la justice.\r\n\r\n', 'no-cover'),
(2, 'Voyage au bout de la nuit', '1932-01-01', '2_voyage_au_bout_de_la_nuit', 341, 'Le roman suit le personnage principal, Ferdinand Bardamu, un médecin qui s\'engage dans l\'armée française pendant la Première Guerre mondiale et qui ensuite, désillusionné par l\'expérience, poursuit sa vie à travers différents voyages et occupations. \r\nTout au long du livre, Bardamu rencontre divers personnages, certains dont la vie est caractérisée par la violence, la folie et la misère, tandis que d\'autres cherchent désespérément à trouver un sens à leur existence.', 'no-cover'),
(3, 'Le Petit Prince', '1943-01-01', '3_le_petit_prince', 96, 'Le livre suit les aventures d\'un aviateur qui s\'écrase dans le désert du Sahara et qui rencontre un petit prince venu d\'une autre planète. Le petit prince raconte au narrateur ses aventures et ses rencontres sur les différentes planètes qu\'il a visitées.\r\n\r\nLe livre est une méditation poétique sur l\'enfance, l\'innocence, l\'imagination et la solitude. Les personnages que rencontre le petit prince sont des métaphores de la nature humaine, des caractères ridicules et vains qui soulignent les absurdités de la société.\r\n\r\nLe livre est rempli de citations célèbres qui résonnent encore aujourd\'hui, telles que \"On ne voit bien qu\'avec le cœur. L\'essentiel est invisible pour les yeux\". En fin de compte, \"Le Petit Prince\" est un conte philosophique intemporel qui plaira aux enfants comme aux adultes, offrant une réflexion sur la vie, l\'amour et la perte, et sur la nécessité de garder son cœur d\'enfant intact.', 'no-cover'),
(4, 'Les Fleurs du mal', '1857-01-01', '4_les_fleurs_du_mal', 202, '\"Les Fleurs du Mal\" est un recueil de poèmes qui explore les thèmes de la beauté, de la mort, de la décadence et de l\'érotisme. Les poèmes de Baudelaire sont souvent sombres et mélancoliques, exprimant une vision du monde pessimiste et désillusionnée.\r\n\r\nLe livre a été critiqué pour sa sexualité explicite et ses descriptions choquantes de la vie urbaine, qui ont scandalisé la société française conservatrice de l\'époque. Cependant, au fil du temps, il est devenu l\'un des recueils de poésie les plus influents et les plus célèbres de la langue française.\r\n\r\nBaudelaire a innové en introduisant des thèmes et des images inhabituels dans la poésie, tels que la laideur, la prostitution et la mort. En explorant ces sujets controversés, il a défié les conventions littéraires de son époque et créé une œuvre qui a résisté à l\'épreuve du temps. \"Les Fleurs du Mal\" reste un chef-d\'œuvre de la poésie française, explorant les aspects les plus sombres de l\'expérience humaine et offrant une réflexion profonde sur la nature de la vie et de l\'art.', 'no-cover'),
(5, 'Les Miserables I', '1862-01-01', '5_les_miserables_1', 743, 'Le premier tome de \"Les Misérables\" suit l\'histoire de Jean Valjean, un ancien forçat qui tente de réintégrer la société. L\'histoire se déroule dans la France du 19ème siècle, une période de grandes inégalités sociales, de pauvreté et de révoltes. Valjean doit faire face à sa propre culpabilité et son passé criminel tout en luttant pour trouver sa place dans la société. Il rencontre Fantine, une jeune femme poussée dans la prostitution par la pauvreté, et tente de l\'aider. Cependant, Valjean est également poursuivi par l\'inspecteur Javert, qui est obsédé par la loi et la justice. L\'intrigue explore les thèmes de la rédemption, de la justice et de l\'humanité.', 'no-cover'),
(6, 'Les Miserables II', '1862-01-01', '5_les_miserables_2', 669, 'Le deuxième tome de \"Les Misérables\" suit les destins de plusieurs personnages alors que la France traverse des périodes tumultueuses de révolution et de changements sociaux. L\'intrigue suit la vie de Cosette, la fille adoptive de Valjean, qui tombe amoureuse de Marius, un jeune étudiant idéaliste. Pendant ce temps, les Thénardier, une famille de criminels, cherchent à s\'enrichir aux dépens des autres. L\'histoire est une épopée sociale qui explore les thèmes de l\'amour, de la misère, de la révolution et de la destinée humaine.', 'no-cover'),
(7, 'L\'Ecume des jours', '1947-01-01', '6_lecume_des_jours', 192, '\"L\'écume des jours\" de Boris Vian est un roman d\'amour poétique et surréaliste qui raconte l\'histoire de Colin et Chloé, deux jeunes amoureux qui vivent dans un Paris imaginaire et merveilleux. Leur bonheur est toutefois éphémère lorsque Chloé tombe malade d\'une étrange fleur qui pousse dans ses poumons. \r\nColin doit alors trouver un moyen de sauver sa bien-aimée et affronter les obstacles qui se dressent sur son chemin. Entre rêve et réalité, amour et mort, \"L\'écume des jours\" est une exploration profonde et sensible de la condition humaine.', 'no-cover'),
(8, 'La Horde du contrevent', '2004-01-01', '7_la_horde_du_contrevent', 603, '\"La Horde du Contrevent\" d\'Alain Damasio est un roman de science-fiction et d\'aventure qui suit le parcours d\'une horde de 23 individus aux personnalités et compétences complémentaires, qui traversent un monde balayé par un vent perpétuel. \r\nLeur mission est de découvrir l\'origine du vent et d\'atteindre son point de naissance. \r\nTout au long de leur voyage, la horde affronte des épreuves physiques et psychologiques, des ennemis redoutables, des paysages hostiles et des rencontres qui bouleversent leur équilibre. Au-delà de l\'histoire épique, \"La Horde du Contrevent\" explore des thèmes tels que la quête de soi, la résilience, la diversité, la communication, la liberté et l\'existence de l\'individu dans un univers chaotique.', 'no-cover'),
(9, 'Le Comte de Monte-Cristo I', '1844-01-01', '8_le_comte_de_monte-cristo_1', 558, 'Dans le premier tome du \"Comte de Monte-Cristo\" d\'Alexandre Dumas, nous suivons l\'histoire d\'Edmond Dantès, un jeune marin injustement emprisonné pour trahison et envoyé dans la terrible prison du château d\'If. Après des années de captivité, il parvient à s\'évader et découvre un trésor qui lui permettra de se venger de ceux qui l\'ont trahi. Sous l\'identité du mystérieux comte de Monte-Cristo, il met en place un plan complexe pour se venger de ceux qui l\'ont condamné, en utilisant leur cupidité, leur jalousie et leur ambition contre eux. Mais sa quête de vengeance risque de le plonger dans une spirale de violence et de cruauté, remettant en question sa propre moralité et sa soif de justice.', 'no-cover'),
(10, 'Le Comte de Monte-Cristo II', '1844-01-01', '8_le_comte_de_monte-cristo_2', 582, 'Dans le deuxième tome du \"Comte de Monte-Cristo\" d\'Alexandre Dumas, le comte poursuit sa quête de vengeance implacable contre ceux qui l\'ont trahi dans le passé. Il s\'immisce dans la vie de ses ennemis, semant le trouble et la discorde dans leurs relations, tout en se faisant passer pour un personnage énigmatique et mystérieux. Au fil de l\'intrigue, il rencontre de nouveaux personnages qui mettent sa moralité à l\'épreuve, comme la jeune Valentine de Villefort, qui est victime des machinations de sa propre famille. Le comte devra faire des choix difficiles pour mener à bien sa mission et rétablir la justice dans un monde corrompu. À travers son style captivant et ses personnages complexes, le \"Comte de Monte-Cristo\" continue de captiver les lecteurs, explorant des thèmes tels que la vengeance, la trahison, la rédemption et l\'amitié.', 'no-cover'),
(11, 'Les Liaisons dangereuses', '1782-01-01', '9_les_liaisons_dangereuses', 294, 'Ce roman épistolaire dépeint de manière acerbe et incisive la société aristocratique du XVIIIe siècle en France. La marquise de Merteuil et le vicomte de Valmont, deux personnages cyniques et manipulateurs, se lancent dans un jeu de séduction dangereux, manipulant et trompant ceux qui les entourent. \r\nLeurs actions ont des conséquences tragiques, révélant l\'aspect cruel et destructeur de leur comportement. \r\n\"Les liaisons dangereuses\" est un classique de la littérature française qui explore les thèmes de l\'amour, de la manipulation et de la moralité humaine.', 'no-cover'),
(12, 'Cyrano de Bergerac', '1897-01-01', '10_cyrano_de_bergerac', 372, '\"Cyrano de Bergerac\" est une pièce de théâtre en vers qui raconte l\'histoire d\'un poète et soldat au nez proéminent nommé Cyrano. Bien que talentueux, Cyrano souffre d\'un manque de confiance en soi en raison de son apparence. \r\nIl est éperdument amoureux de Roxane, mais sa laideur physique l\'empêche de lui déclarer sa flamme. Ainsi, il aide son rival, Christian, à conquérir le cœur de Roxane en lui écrivant des lettres d\'amour passionnées. \r\nLa pièce est une ode à la beauté de l\'âme et de l\'esprit, à l\'amour, à l\'amitié et à la bravoure.', 'no-cover'),
(13, 'Bel-Ami', '1885-01-01', '11_bel-ami', 342, '\"Bel-Ami\" de Guy de Maupassant raconte l\'histoire d\'un homme ambitieux et séduisant nommé Georges Duroy, qui tente de gravir les échelons de la société parisienne au XIXe siècle. Sans éducation ni scrupules, il use de son charme pour obtenir des faveurs de la haute société et gravit rapidement les échelons de la presse en épousant une femme riche. \r\nCependant, les conséquences de ses actions vont l\'entraîner dans une spirale de scandales et de tromperies qui menacent de ruiner sa réputation et ses ambitions. \r\n\"Bel-Ami\" est un portrait impitoyable de la société parisienne de l\'époque et une critique acerbe de l\'ambition et de la corruption.', 'no-cover'),
(14, 'Madame Bovary', '1857-01-01', '12_madame_bovary', 420, '\"Madame Bovary\" de Gustave Flaubert est un roman qui raconte l\'histoire d\'Emma Bovary, une jeune femme mariée à Charles Bovary, un médecin de campagne. Emma, insatisfaite de sa vie conjugale et de son existence ennuyeuse en province, s\'évade dans ses rêves de romantisme et d\'aventure. \r\nElle commence une série d\'infidélités et s\'endette pour satisfaire ses désirs. Mais son comportement finit par avoir des conséquences désastreuses pour elle et son entourage. \r\n\"Madame Bovary\" est une critique de la bourgeoisie provinciale, de la condition féminine et une réflexion sur le désir, l\'illusion et l\'ennui.', 'no-cover'),
(15, 'Fables', '1694-01-01', '13_fables', 185, 'Dans les Fables de La Fontaine, le fabuliste nous présente un bestiaire de personnages qui, sous leur apparence animale, dépeignent avec humour et ironie les travers humains. De la cigale insouciante à la fourmi laborieuse, en passant par le corbeau vaniteux et le renard rusé, chaque fable délivre une morale souvent cruelle pour celui qui ne l\'a pas comprise. Les fables, écrites en vers, constituent un véritable trésor de la littérature française.', 'no-cover'),
(16, 'A la recherche du temps perdu', '1927-01-01', '14_a_la_recherche_du_temps_perdu', 467, 'Proust nous emmène dans une quête de la recherche du temps perdu, à travers les souvenirs du narrateur qui se remémore son passé et son amour pour la duchesse de Guermantes. Nous sommes transportés dans une société parisienne aristocratique du début du 20ème siècle, avec ses salons, ses conventions sociales et ses intrigues amoureuses. À travers la plume élégante et descriptive de Proust, nous suivons la quête du narrateur pour comprendre les souvenirs de sa jeunesse et pour découvrir la vérité sur l\'amour de sa vie. C\'est un roman dense et complexe, qui explore les thèmes de la mémoire, de l\'amour, de la société et du temps qui passe. Proust nous offre une vision intime de la vie bourgeoise de l\'époque, avec ses plaisirs, ses hypocrisies et ses frustrations. C\'est un livre qui demande de la patience et de la concentration, mais qui récompense le lecteur avec une richesse inépuisable de détails et d\'émotions.', 'no-cover'),
(17, 'La Promesse de l\'aube', '1960-01-01', '15_la_promesse_de_laube', 182, '\"La Promesse de l\'aube\" de Romain Gary est un roman semi-autobiographique racontant l\'histoire d\'un jeune homme, Romain, et de sa mère, Nina, qui se bat pour son fils afin qu\'il devienne un grand écrivain. Le livre suit Romain de sa naissance en Russie à son adolescence à Nice, où il a lutté contre le racisme et le rejet pour devenir un écrivain reconnu. La relation complexe entre Romain et Nina est au centre du livre, ainsi que la promesse qu\'elle lui a faite de devenir célèbre un jour. C\'est une histoire touchante sur la détermination et l\'amour inconditionnel d\'une mère pour son fils, qui a inspiré des générations de lecteurs.', 'no-cover'),
(18, 'Le Rouge et le Noir', '1830-01-01', '16_le_rouge_et_le_noir', 1086, '\"Le Rouge et le Noir\" de Stendhal raconte l\'histoire de Julien Sorel, un jeune homme ambitieux de la campagne, qui rêve de réussir dans la haute société parisienne. Mais pour atteindre son objectif, il doit surmonter de nombreux obstacles, y compris sa condition sociale modeste. Julien parvient à s\'introduire dans la famille de Madame de Rênal, dont il devient l\'amant, mais leur liaison ne peut être qu\'éphémère. Julien s\'en va à Paris pour poursuivre sa carrière, où il devient le secrétaire du Marquis de La Mole, un homme influent. Julien tombe amoureux de la fille du marquis, Mathilde, mais leur amour est contrarié par les différences sociales et la jalousie de Mathilde. Julien finit par se faire un nom dans la haute société, mais ses choix et ses ambitions vont le mener vers sa chute. \"Le Rouge et le Noir\" est un roman d\'apprentissage qui explore les thèmes de l\'ambition, de l\'amour, de la société et de la morale, à travers le parcours de Julien Sorel, un personnage complexe et attachant.', 'no-cover'),
(19, 'La Nuit des temps', '1968-01-01', '17_la_nuit_des_temps', 0, 'L\'histoire commence avec une équipe de scientifiques qui découvre, en Antarctique, une civilisation disparue depuis des milliers d\'années, ensevelie sous la glace. Dans cette cité enfouie, ils trouvent un couple de corps parfaitement conservés dans un bloc de glace. Les scientifiques parviennent à ramener les corps à la vie et découvrent qu\'ils appartiennent à Eléa et Païkan, deux amants qui ont vécu il y a plus de 900 000 ans.\r\n\r\nLe roman suit alors les aventures de ces deux amants qui racontent leur vie à l\'époque de leur civilisation disparue, où les habitants avaient atteint un niveau de développement technologique très avancé. Ils avaient réussi à maîtriser l\'énergie atomique et à voyager dans le temps et l\'espace. Eléa et Païkan ont été choisis pour un voyage dans le temps qui avait pour but de sauver leur civilisation. Mais les choses ne se sont pas déroulées comme prévu et ils se sont retrouvés coincés dans la glace.', 'no-cover'),
(20, 'La Peste', '1947-01-01', '18_la_peste', 280, 'La Peste d\'Albert Camus raconte l\'histoire d\'une épidémie de peste qui se propage dans la ville d\'Oran, en Algérie. Le roman explore les différentes réactions des personnages face à la maladie, allant de la panique à la résignation en passant par l\'entraide et le courage.\r\n\r\nLe personnage principal, le Docteur Rieux, lutte contre la maladie aux côtés de ses confrères et des autorités locales, tandis que des personnages tels que le journaliste Rambert cherchent à quitter la ville pour retrouver leur vie normale. La Peste est également un roman politique, montrant comment la ville d\'Oran est gouvernée par un système bureaucratique inefficace et comment les habitants, en temps de crise, se tournent vers des leaders charismatiques qui promettent des solutions simples mais dangereuses.', 'no-cover'),
(21, 'Le Horla', '1886-01-01', '19_le_horla', 278, '\"Le Horla\" est un récit se présente sous la forme d\'un journal intime, tenu par un personnage qui commence à être victime de phénomènes étranges et inexpliqués.\r\n\r\nAu fil des pages, le narrateur relate ses troubles : il est victime de pertes de mémoire, de somnambulisme et de cauchemars effrayants. Il est convaincu qu\'une entité surnaturelle, appelée \"Le Horla\", s\'attaque à lui et aspire sa force vitale.\r\n\r\nAu fil des jours, le narrateur sombre dans la folie et décide de se débarrasser de \"Le Horla\" en mettant le feu à sa maison. Mais la fin reste ouverte, laissant planer le doute sur la réalité des événements.', 'no-cover'),
(22, 'Candide ou l\'Optimisme', '1759-01-01', '20_candide_ou_loptimisme', 147, 'L\'histoire suit les aventures de Candide, un jeune homme innocent et optimiste qui est chassé de son château et qui traverse le monde dans l\'espoir de retrouver sa bien-aimée, Cunégonde. Au cours de ses voyages, Candide rencontre de nombreux personnages et est témoin de plusieurs événements tragiques, notamment la guerre, la famine, l\'esclavage et l\'injustice.\r\n\r\nAu fil de ses aventures, Candide commence à remettre en question sa vision du monde et à réaliser que l\'optimisme aveugle n\'est pas suffisant pour faire face aux réalités de la vie. Malgré cela, Candide ne perd jamais complètement son optimisme et sa foi en l\'humanité.', 'no-cover'),
(23, 'Germinal', '1885-01-01', '21_germinal', 616, 'Dans ce roman réaliste de Zola, on suit l\'histoire d\'Etienne Lantier, un jeune homme qui se rend dans le Nord de la France à la recherche d\'un emploi dans les mines de charbon. Il est embauché et découvre vite les terribles conditions de travail des mineurs et leur pauvreté. Etienne, révolté par cette situation, commence à organiser les mineurs pour qu\'ils se révoltent contre leurs patrons et luttent pour leurs droits. La grève qui en découle est impitoyablement réprimée et la tension entre les deux camps monte.\r\n\r\nMais la révolte n\'est pas sans conséquence, elle divise les mineurs entre eux et les affaiblit face à leurs adversaires. Etienne, porté par son idéalisme, tente de mener la grève à sa conclusion, mais ses espoirs seront rapidement confrontés à la dure réalité de la vie dans une société capitaliste et oppressante. Germinal est un roman poignant sur les luttes sociales, la solidarité et les sacrifices que les travailleurs doivent faire pour lutter contre les inégalités sociales.', 'no-cover'),
(24, 'Notre-Dame de Paris', '1831-01-01', '22_notre-dame_de_paris', 556, NULL, 'no-cover'),
(25, 'Les Trois Mousquetaires I', '1844-01-01', '23_les_trois_mousquetaires_1', 529, NULL, 'no-cover'),
(26, 'Les Trois Mousquetaires II', '1844-01-01', '23_les_trois_mousquetaires_2', 504, NULL, 'no-cover'),
(27, 'Les Trois Mousquetaires III', '1844-01-01', '23_les_trois_mousquetaires_3', 526, NULL, 'no-cover'),
(28, 'Les Fourmis', '1991-01-01', '24_les_fourmis', 157, NULL, 'no-cover'),
(29, 'Gagner la guerre', '2009-01-01', '25_gagner_la_guerre', 0, NULL, 'no-cover'),
(30, 'Le Pere Goriot', '1835-01-01', '26_le_pere_goriot', 527, NULL, 'no-cover'),
(31, 'Dom Juan', '1665-01-01', '27_dom_juan', 82, NULL, 'no-cover'),
(32, 'Les Chants de Maldoror', '1869-01-01', '28_les_chants_de_maldoror', 0, NULL, 'no-cover'),
(33, 'Vingt Mille Lieues sous les mers', '1869-01-01', '29_vingt_mille_lieues_sous_les_mers', 544, NULL, 'no-cover'),
(34, 'Du cote de chez Swann', '1913-01-01', '30_du_cote_de_chez_swann', 0, NULL, 'no-cover'),
(35, 'L\'Assommoir', '1877-01-01', '31_lassommoir', 425, NULL, 'no-cover'),
(36, 'Le Dernier Jour d\'un condamne', '1829-01-01', '32_le_dernier_jour_dun_condamne', 269, NULL, 'no-cover'),
(37, 'Les Rois maudits', '1995-01-01', '33_les_rois_maudits', 102, NULL, 'no-cover'),
(38, 'Memoires d\'Hadrien', '1951-01-01', '34_memoires_dhadrien', 100, NULL, 'no-cover'),
(39, 'Phedre', '1677-01-01', '35_phedre', 78, NULL, 'no-cover'),
(40, 'Illusions perdues', '1839-01-01', '36_illusions_perdues', 591, NULL, 'no-cover'),
(41, 'Antigone', '1944-01-01', '37_antigone', 64, NULL, 'no-cover'),
(42, 'Alcools', '1913-01-01', '38_alcools', 139, NULL, 'no-cover'),
(43, 'La Condition humaine', '1933-01-01', '39_la_condition_humaine', 0, NULL, 'no-cover'),
(44, 'La Zone du dehors', '2001-01-01', '40_la_zone_du_dehors', 337, NULL, 'no-cover'),
(45, 'La Vie devant soi', '1975-01-01', '41_la_vie_devant_soi', 168, NULL, 'no-cover'),
(46, 'En attendant Bojangles', '2016-01-01', '42_en_attendant_bojangles', 0, NULL, 'no-cover'),
(47, 'L\'Education sentimentale', '1869-01-01', '43_leducation_sentimentale', 994, NULL, 'no-cover'),
(48, 'L\'Ile mysterieuse', '1874-01-01', '44_lile_mysterieuse', 777, NULL, 'no-cover'),
(49, 'Vernon Subutex', '2015-01-01', '45_vernon_subutex', 0, NULL, 'no-cover'),
(50, 'Ravage', '1943-01-01', '46_ravage', 205, NULL, 'no-cover'),
(51, 'La Planete des singes', '1963-01-01', '47_la_planete_des_singes', 0, NULL, 'no-cover'),
(52, 'Les Fiances de l\'hiver', '2013-01-01', '48_les_fiances_de_lhiver', 248, NULL, 'no-cover'),
(53, 'Le Spleen de Paris', '1869-01-01', '49_le_spleen_de_paris', 131, NULL, 'no-cover'),
(54, 'Le Tour du monde en 80 jours', '1873-01-01', '50_le_tour_du_monde_en_80_jours', 465, NULL, 'no-cover'),
(55, 'J\'irai cracher sur vos tombes', '1946-01-01', '51_jirai_cracher_sur_vos_tombes', 0, NULL, 'no-cover'),
(56, 'Le Misanthrope', '1666-01-01', '52_le_misanthrope', 95, NULL, 'no-cover'),
(57, 'A l\'ombre des jeunes filles en fleurs', '1919-01-01', '53_a_lombre_des_jeunes_filles_en_fleurs', 447, NULL, 'no-cover'),
(58, 'Les Essais', '1595-01-01', '54_les_essais', 512, NULL, 'no-cover'),
(59, 'Au bonheur des dames', '1883-01-01', '55_au_bonheur_des_dames', 904, NULL, 'no-cover'),
(60, 'Les Contemplations', '1856-01-01', '56_les_contemplations', 496, NULL, 'no-cover'),
(61, 'La Chute', '1956-01-01', '57_la_chute', 112, NULL, 'no-cover'),
(62, 'Les Faux-Monnayeurs', '1925-01-01', '58_les_faux-monnayeurs', 350, NULL, 'no-cover'),
(63, 'Malevil', '1972-01-01', '59_malevil', 0, NULL, 'no-cover'),
(64, 'Caligula', '1944-01-01', '60_caligula', 105, NULL, 'no-cover'),
(65, 'Au revoir la-haut', '2013-01-01', '61_au_revoir_la-haut', 0, NULL, 'no-cover'),
(66, 'Voyage au centre de la Terre', '1864-01-01', '62_voyage_au_centre_de_la_terre', 477, NULL, 'no-cover'),
(67, 'L\'Homme qui rit', '1869-01-01', '63_lhomme_qui_rit', 690, NULL, 'no-cover'),
(68, 'La Religieuse', '1796-01-01', '64_la_religieuse', 361, NULL, 'no-cover'),
(69, 'La Cantatrice chauve', '1950-01-01', '65_la_cantatrice_chauve', 37, NULL, 'no-cover'),
(70, 'Discours de la servitude volontaire', '1576-01-01', '66_discours_de_la_servitude_volontaire', 18, NULL, 'no-cover'),
(71, 'Les Cerfs-volants', '2006-01-01', '67_les_cerfs-volants', 293, NULL, 'no-cover'),
(72, 'Paroles', '1946-01-01', '68_paroles', 223, NULL, 'no-cover'),
(73, 'Le Cid', '1637-01-01', '69_le_cid', 75, NULL, 'no-cover'),
(74, 'L\'Amant', '1984-01-01', '70_lamant', 109, NULL, 'no-cover'),
(75, 'Le Grand Meaulnes', '1913-01-01', '71_le_grand_meaulnes', 231, NULL, 'no-cover'),
(76, 'Zazie dans le metro', '1959-01-01', '72_zazie_dans_le_metro', 131, NULL, 'no-cover'),
(77, 'Berenice', '1670-01-01', '73_berenice', 58, NULL, 'no-cover'),
(78, 'Les Thanatonautes', '1994-01-01', '74_les_thanatonautes', 253, NULL, 'no-cover'),
(79, 'Le Rivage des Syrtes', '1951-01-01', '75_le_rivage_des_syrtes', 228, NULL, 'no-cover'),
(80, 'Le Soleil des Scorta', '2004-01-01', '76_le_soleil_des_scorta', 243, NULL, 'no-cover'),
(81, 'Le Deuxieme Sexe I', '1949-01-01', '77_le_deuxieme_sexe_1', 0, NULL, 'no-cover'),
(82, 'Mort a credit', '1936-01-01', '78_mort_a_credit', 0, NULL, 'no-cover'),
(83, 'Une Saison en enfer', '1873-01-01', '79_une_saison_en_enfer', 29, NULL, 'no-cover'),
(84, 'Therese Raquin', '1867-01-01', '80_therese_raquin', 420, NULL, 'no-cover'),
(85, 'Le Bateau ivre', '1871-01-01', '81_le_bateau_ivre', 3, NULL, 'no-cover'),
(86, 'Pensees', '1670-01-01', '82_pensees', 157, NULL, 'no-cover'),
(87, 'Nana', '1880-01-01', '83_nana', 860, NULL, 'no-cover'),
(88, 'Janua Vera', '2007-01-01', '84_janua_vera', 407, NULL, 'no-cover'),
(89, 'Gargantua', '1534-01-01', '85_gargantua', 186, NULL, 'no-cover'),
(90, 'Petit pays', '2016-01-01', '86_petit_pays', 0, NULL, 'no-cover'),
(91, 'La Chartreuse de Parme', '1839-01-01', '87_la_chartreuse_de_parme', 554, NULL, 'no-cover'),
(92, 'Lorenzaccio', '1834-01-01', '88_lorenzaccio', 153, NULL, 'no-cover'),
(93, 'Le Mystere de la chambre jaune', '1907-01-01', '89_le_mystere_de_la_chambre_jaune', 526, NULL, 'no-cover'),
(94, 'Les Deux Etendards', '1951-01-01', '90_les_deux_etendards', 0, NULL, 'no-cover'),
(95, 'La Dame aux camelias', '1848-01-01', '91_la_dame_aux_camelias', 457, NULL, 'no-cover'),
(96, 'Les Mains libres', '1937-01-01', '92_les_mains_libres', 0, NULL, 'no-cover'),
(97, 'Le Roi des Aulnes', '1970-01-01', '93_le_roi_des_aulnes', 343, NULL, 'no-cover'),
(98, 'De la Terre a la Lune', '1865-01-01', '94_de_la_terre_a_la_lune', 362, NULL, 'no-cover'),
(99, 'Les Bienveillantes', '2006-01-01', '95_les_bienveillantes', 352, NULL, 'no-cover'),
(100, 'Les Justes', '1949-01-01', '96_les_justes', 190, NULL, 'no-cover'),
(101, 'Ubu Roi', '1896-01-01', '97_ubu_roi', 192, NULL, 'no-cover'),
(102, 'Les Reveries du promeneur solitaire', '1778-01-01', '98_les_reveries_du_promeneur_solitaire', 99, '\"Les Rêveries du promeneur solitaire\" est un ouvrage autobiographique écrit par Jean-Jacques Rousseau. Il se compose de dix promenades où l\'auteur, dans la solitude de la nature, réfléchit sur sa vie, son existence et sa relation avec la société.\r\n\r\nAu fil de ces promenades, Rousseau se livre à une introspection profonde, évoquant notamment son enfance, son parcours personnel et professionnel, ses amours et ses amitiés. Il évoque également ses réflexions sur la philosophie, la politique et la religion.\r\n\r\nL\'oeuvre est marquée par une profonde mélancolie et une certaine amertume face à la vie et à la société. Elle constitue une méditation profonde sur l\'existence humaine, la nature et la condition de l\'homme moderne. C\'est un texte majeur de la littérature française, qui a influencé de nombreux écrivains et philosophes.', 'no-cover');

-- --------------------------------------------------------

--
-- Structure de la table `book_author`
--

CREATE TABLE `book_author` (
  `id_book` int(11) NOT NULL,
  `id_author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `book_author`
--

INSERT INTO `book_author` (`id_book`, `id_author`) VALUES
(1, 39),
(2, 17),
(3, 4),
(4, 33),
(5, 32),
(6, 32),
(7, 65),
(8, 21),
(9, 38),
(10, 38),
(11, 8),
(12, 41),
(13, 3),
(14, 60),
(15, 37),
(16, 42),
(17, 1),
(18, 15),
(19, 23),
(20, 39),
(21, 3),
(22, 40),
(23, 6),
(24, 32),
(25, 38),
(26, 38),
(27, 38),
(28, 18),
(29, 5),
(30, 13),
(31, 62),
(32, 47),
(33, 10),
(34, 42),
(35, 6),
(36, 32),
(37, 16),
(38, 43),
(39, 26),
(40, 13),
(41, 44),
(42, 11),
(43, 63),
(44, 21),
(45, 1),
(46, 20),
(47, 60),
(48, 10),
(49, 64),
(50, 23),
(51, 58),
(52, 55),
(53, 33),
(54, 10),
(55, 65),
(56, 62),
(57, 42),
(58, 22),
(59, 6),
(60, 32),
(61, 39),
(62, 14),
(63, 34),
(64, 39),
(65, 12),
(66, 10),
(67, 32),
(68, 2),
(69, 61),
(70, 30),
(71, 66),
(72, 9),
(73, 35),
(74, 52),
(75, 19),
(76, 56),
(77, 26),
(78, 18),
(79, 59),
(80, 31),
(81, 29),
(82, 17),
(83, 49),
(84, 6),
(85, 49),
(86, 54),
(87, 6),
(88, 5),
(89, 27),
(90, 46),
(91, 15),
(92, 36),
(93, 50),
(94, 45),
(95, 38),
(96, 7),
(96, 25),
(97, 51),
(98, 10),
(99, 24),
(100, 39),
(101, 48),
(102, 53);

-- --------------------------------------------------------

--
-- Structure de la table `book_genre`
--

CREATE TABLE `book_genre` (
  `id_book` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `book_genre`
--

INSERT INTO `book_genre` (`id_book`, `id_genre`) VALUES
(1, 11),
(2, 11),
(3, 1),
(3, 2),
(4, 15),
(5, 11),
(6, 11),
(7, 11),
(8, 8),
(8, 11),
(8, 16),
(9, 11),
(10, 11),
(11, 11),
(12, 5),
(13, 11),
(14, 11),
(15, 15),
(16, 11),
(17, 4),
(17, 11),
(17, 12),
(18, 11),
(19, 11),
(19, 16),
(20, 11),
(21, 7),
(22, 1),
(22, 9),
(23, 11),
(24, 11),
(25, 11),
(26, 11),
(27, 11),
(28, 11),
(29, 8),
(29, 11),
(30, 11),
(31, 5),
(31, 6),
(32, 15),
(33, 11),
(33, 16),
(34, 11),
(35, 11),
(36, 11),
(37, 11),
(38, 11),
(39, 5),
(39, 6),
(40, 11),
(41, 5),
(42, 15),
(43, 11),
(44, 11),
(45, 11),
(46, 11),
(47, 11),
(48, 11),
(48, 16),
(49, 11),
(50, 11),
(50, 16),
(51, 11),
(51, 16),
(52, 2),
(52, 11),
(53, 15),
(54, 11),
(54, 16),
(55, 10),
(55, 11),
(56, 5),
(57, 11),
(58, 3),
(58, 9),
(59, 11),
(60, 15),
(61, 11),
(62, 11),
(63, 11),
(63, 16),
(64, 5),
(65, 11),
(65, 14),
(66, 11),
(66, 16),
(67, 11),
(68, 11),
(69, 5),
(70, 3),
(70, 9),
(71, 11),
(72, 15),
(73, 5),
(74, 11),
(75, 11),
(76, 11),
(77, 5),
(78, 8),
(78, 11),
(79, 11),
(80, 11),
(81, 3),
(81, 9),
(82, 11),
(83, 15),
(84, 11),
(85, 15),
(86, 3),
(86, 9),
(87, 11),
(88, 7),
(88, 8),
(89, 11),
(90, 11),
(91, 11),
(92, 5),
(93, 10),
(93, 11),
(94, 11),
(95, 11),
(96, 15),
(97, 11),
(98, 11),
(98, 16),
(99, 11),
(100, 5),
(101, 5),
(102, 4),
(102, 9),
(102, 12);

-- --------------------------------------------------------

--
-- Structure de la table `borrowed_books`
--

CREATE TABLE `borrowed_books` (
  `id_book` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `borrow_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `pages_followed` int(11) NOT NULL DEFAULT 1,
  `state` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `borrowed_books`
--

INSERT INTO `borrowed_books` (`id_book`, `id_user`, `borrow_date`, `pages_followed`, `state`) VALUES
(2, 5, '2023-03-19 17:57:39', 1, 0),
(4, 4, '2023-03-18 17:29:46', 1, 0),
(5, 4, '2023-03-18 18:35:30', 743, 1),
(5, 5, '2023-03-20 21:15:57', 743, 1),
(6, 4, '2023-03-18 17:29:26', 1, 0),
(6, 5, '2023-03-18 16:53:21', 669, 1),
(13, 4, '2023-03-18 17:02:54', 342, 1),
(14, 4, '2023-03-25 18:06:30', 1, 0),
(16, 5, '2023-03-19 08:39:26', 26, 0),
(21, 5, '2023-03-18 13:55:47', 278, 1),
(24, 4, '2023-03-18 16:56:36', 12, 0),
(26, 5, '2023-03-25 14:29:10', 1, 0),
(33, 5, '2023-03-20 21:15:23', 1, 0),
(53, 5, '2023-03-20 21:15:50', 1, 0),
(58, 5, '2023-03-20 21:15:37', 512, 1),
(85, 5, '2023-03-20 20:36:42', 3, 1),
(98, 3, '2023-03-28 08:26:08', 18, 0),
(98, 4, '2023-03-28 08:40:39', 1, 0),
(101, 5, '2023-03-20 21:16:05', 192, 1);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `content_comment` text NOT NULL,
  `date_comment` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) DEFAULT NULL,
  `id_post` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comment`, `content_comment`, `date_comment`, `id_user`, `id_post`) VALUES
(1, 'Je pourrais relire \"Jane Eyre\" cent fois !', '2023-03-28 07:58:58', 3, 2),
(3, 'test', '2023-03-28 08:38:47', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE `genres` (
  `id_genre` int(11) NOT NULL,
  `name_genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id_genre`, `name_genre`) VALUES
(1, 'Conte'),
(2, 'Jeunesse'),
(3, 'Essai'),
(4, 'Memoire'),
(5, 'Theatre'),
(6, 'Romance'),
(7, 'Nouvelle'),
(8, 'Fantastique'),
(9, 'Philosophie'),
(10, 'Policier'),
(11, 'Roman'),
(12, 'Autobiographie'),
(13, 'Horreur'),
(14, 'Histoire'),
(15, 'Poesie'),
(16, 'Science-Fiction');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id_image` int(11) NOT NULL,
  `name_image` varchar(50) NOT NULL,
  `url_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `possess_images`
--

CREATE TABLE `possess_images` (
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `title_post` varchar(100) NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT current_timestamp(),
  `content_post` text NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id_post`, `title_post`, `date_post`, `content_post`, `id_user`) VALUES
(1, 'Un jour, un auteur : Jane Austen', '2023-02-16 13:19:27', 'L\'un des écrivains classiques les plus populaires est Jane Austen, une romancière anglaise connue pour son esprit, ses commentaires sociaux et ses personnages mémorables. Née en 1775, Austen a commencé à écrire à un jeune âge et a publié son premier roman, \"Sense and Sensibility\", en 1811. Elle a ensuite publié quatre autres romans, dont \"Pride and Prejudice\", \"Mansfield Park\" et \"Emma \", qui sont tous considérés comme des classiques de la littérature anglaise.\r\n\r\nCe qui rend les romans d\'Austen si durables et si appréciés, c\'est sa capacité à créer des personnages complexes et bien équilibrés qui ressemblent à de vraies personnes. Ses héroïnes, en particulier, sont fortes, intelligentes et indépendantes, et elles ont souvent du mal à trouver leur place dans une société qui les valorise avant tout pour leur beauté et leur capacité à bien se marier.\r\n\r\nEn plus de ses personnages bien développés, les romans d\'Austen sont également connus pour leur commentaire social pointu. Elle était une fine observatrice des coutumes et des mœurs de son temps, et ses romans se penchent souvent sur des questions de classe, de richesse et de mariage. Malgré le fait que ses romans se déroulent à la fin du XVIIIe et au début du XIXe siècle, bon nombre des thèmes qu\'elle explore sont toujours d\'actualité.\r\n\r\nLa popularité d\'Austen n\'a fait que croître au fil des ans et ses romans ont été adaptés dans de nombreux films, émissions de télévision et productions scéniques. En plus d\'être considérés comme des classiques de la littérature anglaise, les romans d\'Austen sont également appréciés par les lecteurs de tous âges et de tous horizons. Si vous n\'avez pas encore lu l\'un de ses romans, nous vous recommandons fortement de les essayer !', 4),
(2, 'Les 9 classiques à lire ou à relire !', '2023-02-16 13:19:27', '\"Pride and Prejudice\" de Jane Austen : ce roman classique raconte l\'histoire de la famille Bennett, en particulier les relations et les mariages des cinq sœurs Bennett. Le roman explore les thèmes de l\'amour, de la classe et des attentes de la société.\r\n\r\n\"To Kill a Mockingbird\" de Harper Lee : ce roman lauréat du prix Pulitzer suit l\'histoire d\'une jeune fille nommée Scout Finch alors qu\'elle grandit dans une petite ville du Sud pendant la Grande Dépression. Le roman aborde les thèmes de la race, des préjugés et de l\'injustice, et a été largement célébré pour sa description de problèmes moraux complexes.\r\n\r\n\"The Great Gatsby\" de F. Scott Fitzgerald : situé dans les années folles, ce roman classique raconte l\'histoire du riche et mystérieux Jay Gatsby, sa relation tumultueuse avec la belle Daisy Buchanan, ainsi que la décadence et les excès de l\'époque.\r\n\r\n\"Moby-Dick\" d\'Herman Melville : ce conte épique suit les aventures du marin Ishmael alors qu\'il se lance dans une quête pour chasser la baleine blanche Moby-Dick, rencontrant un casting de personnages mémorables en cours de route. Le roman est un chef-d\'œuvre de la littérature américaine, explorant les thèmes de l\'obsession, de l\'identité et de l\'expérience humaine.\r\n\r\n\"Wuthering Heights\" d\'Emily Brontë : ce roman classique raconte l\'histoire de la relation tumultueuse et passionnée entre Catherine Earnshaw et Heathcliff, dans le contexte des landes sauvages et balayées par le vent du nord de l\'Angleterre.\r\n\r\n\"Jane Eyre\" de Charlotte Brontë : Ce roman classique raconte l\'histoire de Jane éponyme, une orpheline qui devient gouvernante au mystérieux Thornfield Hall. Le roman explore les thèmes de l\'amour, de l\'indépendance et de la découverte de soi, et a été largement célébré pour sa protagoniste féminine forte et complexe.\r\n\r\n\"The Catcher in the Rye\" de JD Salinger : ce roman classique sur le passage à l\'âge adulte suit l\'histoire de Holden Caulfield, un jeune homme qui lutte pour trouver sa place dans le monde après avoir été expulsé de l\'école préparatoire. Le roman est devenu un incontournable des programmes de littérature du secondaire et a été largement célébré pour sa représentation de l\'aliénation et de la rébellion des adolescents.\r\n\r\n\"The Grapes of Wrath\" de John Steinbeck : ce roman lauréat du prix Pulitzer raconte l\'histoire de la famille Joad, qui est forcée de quitter son domicile dans l\'Oklahoma et de voyager vers l\'ouest pendant la Grande Dépression à la recherche d\'une vie meilleure. Le roman explore les thèmes de la pauvreté, des difficultés et de l\'esprit humain.\r\n\r\n\"To the Lighthouse\" de Virginia Woolf : Ce roman moderniste suit la vie de la famille Ramsay et de ses invités alors qu\'ils passent un été dans leur maison de vacances sur l\'île de Skye. Le roman explore les thèmes de la mémoire, de la perte et du passage du temps.\r\n', 4),
(3, 'Un jour, un auteur : Philip K.Dick', '2023-02-16 13:20:24', 'P hilip K. Dick était un écrivain de science-fiction américain dont le travail a eu une influence significative sur la culture populaire. Né à Chicago, Illinois en 1928, Dick était un écrivain prolifique qui a publié 44 romans et 121 nouvelles au cours de sa vie. Beaucoup de ses œuvres ont été adaptées en films, émissions de télévision et pièces de théâtre, et il est considéré comme l\'un des écrivains de science-fiction les plus importants du XXe siècle.\r\nL\'un des thèmes qui apparaît fréquemment dans l\'œuvre de Dick est le concept de réalité et la façon dont elle peut être manipulée. Dans son roman \"The Man in the High Castle\", Dick explore l\'idée d\'une histoire alternative dans laquelle les puissances de l\'Axe ont remporté la Seconde Guerre mondiale et règnent désormais sur les États-Unis. Dans \"Les androïdes rêvent-ils de moutons électriques ?\" il se penche sur la question de savoir ce que signifie être humain, alors que le personnage principal, Rick Deckard, chasse des androïdes qui ne se distinguent pas des humains.\r\nUn autre thème récurrent dans le travail de Dick est l\'idée d\'identité personnelle et comment elle peut être manipulée ou modifiée. Dans \"Les trois stigmates de Palmer Eldritch\", le personnage principal se voit offrir la possibilité d\'entrer dans un monde de réalité virtuelle qui lui permet de faire l\'expérience d\'une autre identité. Dans \"Total Recall\", le personnage principal, Douglas Quaid, commence à remettre en question ses propres souvenirs et son identité après avoir subi une procédure pour lui donner de nouveaux souvenirs.\r\nLe travail de Dick traite souvent de questions philosophiques et métaphysiques, et son écriture est connue pour ses personnages complexes et ses intrigues imaginatives. Beaucoup de ses romans et histoires explorent également les dangers potentiels de la technologie et son impact sur la société.\r\nMalgré son succès en tant qu\'écrivain, Dick a lutté contre des problèmes de santé mentale et a lutté contre la toxicomanie. Il est mort en 1982 à l\'âge de 53 ans, mais son travail a continué à être largement lu et adapté dans d\'autres médias.\r\nDans l\'ensemble, Philip K. Dick était un écrivain de science-fiction pionnier dont le travail a eu un impact durable sur la culture populaire. Ses histoires imaginatives et stimulantes continuent d\'être pertinentes et influentes aujourd\'hui.', 4),
(4, 'Qu’est ce nous apprend 1984 de George Orwell ?', '2023-02-16 13:21:56', '\"1984\" est un roman dystopique écrit par George Orwell et publié en 1949. Le livre présente une vision négative de l\'avenir dans laquelle la société est contrôlée par un gouvernement puissant et oppressif qui utilise la propagande, la surveillance et la censure pour contrôler tous les aspects de la vie des gens.\r\nD\'un point de vue philosophique, « 1984 » peut être vu comme une critique du totalitarisme et des dangers d\'un État tout-puissant. Le roman explore l\'idée d\'un pouvoir absolu corrompant absolument et les dangers de permettre à une seule entité d\'avoir trop de contrôle sur la société. Il aborde également le concept de totalitarisme et la manière dont un tel régime peut manipuler la vérité et contrôler la façon dont les gens pensent et agissent.\r\nDe plus, le roman soulève des questions sur le rôle du langage et de la communication dans la société et sur la manière dont ils peuvent être utilisés pour manipuler et contrôler les gens. Le concept de «double pensée», qui est la capacité d\'avoir deux croyances contradictoires en même temps et de les croire toutes deux vraies, est un thème clé du livre et sert de commentaire sur la manière dont le langage peut être utilisé pour tromper et contrôler.\r\nDans l\'ensemble, \"1984\" est un récit stimulant et édifiant qui met en lumière les dangers du totalitarisme et l\'importance de la liberté et de l\'individualité dans une société.', 4),
(5, 'Comment \"Les Misérables\" de Victor Hugo a inspiré une révolution sociale et culturelle', '2023-02-16 13:21:56', '\"Les Misérables\" est un roman emblématique de Victor Hugo qui a été publié pour la première fois en 1862. Le livre explore des thèmes tels que la pauvreté, l\'injustice sociale, la rédemption et l\'amour. Ces thèmes ont une grande pertinence pour la société d\'aujourd\'hui, car de nombreuses personnes luttent toujours contre les mêmes problèmes.\r\n\r\nL\'un des thèmes les plus importants dans \"Les Misérables\" est celui de la pauvreté. Hugo décrit de manière très réaliste les conditions de vie difficiles des pauvres de l\'époque. Les personnages du livre, tels que Fantine et Cosette, vivent dans une extrême pauvreté et sont obligés de travailler dur pour survivre. Leur lutte est dépeinte avec une grande sensibilité et humanité, et cela nous rappelle que la pauvreté est toujours une réalité pour de nombreuses personnes aujourd\'hui.\r\nUn autre thème important dans le livre est l\'injustice sociale. Hugo montre comment les pauvres étaient souvent traités avec mépris et considérés comme des criminels. Les personnages du livre sont souvent victimes d\'un système qui les opprime et les prive de leurs droits. Cette injustice sociale est encore présente aujourd\'hui, en particulier dans les pays où la corruption et l\'inégalité sont des problèmes majeurs.\r\n\r\nCependant, malgré la dureté de la vie, Hugo insuffle une note d\'espoir dans \"Les Misérables\". Le personnage de Jean Valjean est un exemple de rédemption et de transformation personnelle. Il est en mesure de surmonter son passé difficile et de devenir un homme bon et généreux. Cela nous rappelle qu\'il est toujours possible de changer et de s\'améliorer, même dans les situations les plus difficiles.\r\n\r\nEnfin, l\'amour est un autre thème important dans \"Les Misérables\". L\'amour est présent sous de nombreuses formes dans le livre, allant de l\'amour romantique entre Marius et Cosette à l\'amour maternel de Fantine pour sa fille. L\'amour est présenté comme une force qui peut aider les personnages à surmonter les difficultés de la vie.\r\n\r\nEn conclusion, \"Les Misérables\" est un livre qui aborde des thèmes universels qui sont toujours d\'actualité. La pauvreté, l\'injustice sociale, la rédemption et l\'amour sont des problèmes auxquels de nombreuses personnes sont confrontées aujourd\'hui. Cependant, le livre nous rappelle qu\'il est possible de surmonter ces difficultés et de trouver de l\'espoir et de l\'amour dans les moments les plus sombres.', 4);

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id_review` int(11) NOT NULL,
  `title_review` varchar(100) NOT NULL,
  `date_review` timestamp NOT NULL DEFAULT current_timestamp(),
  `comment_review` text NOT NULL,
  `rating_review` int(11) NOT NULL,
  `id_book` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reviews`
--

INSERT INTO `reviews` (`id_review`, `title_review`, `date_review`, `comment_review`, `rating_review`, `id_book`, `id_user`) VALUES
(1, 'Un coup de cœur absolu ', '2023-03-25 16:10:15', 'Je viens juste de terminer \"L\'étranger\" d\'Albert Camus et je suis encore sous le choc. Ce livre est un chef-d\'œuvre de la littérature qui a suscité en moi des sentiments profonds et contradictoires.\r\n\r\nD\'un côté, j\'ai été troublé par le personnage principal, Meursault, qui semble dépourvu d\'émotions et de conscience morale. Sa passivité face aux événements qui se déroulent dans sa vie et sa réaction à l\'annonce de la mort de sa mère m\'ont laissé perplexe.\r\n\r\nD\'un autre côté, j\'ai été fasciné par la façon dont Camus a réussi à explorer des thèmes existentiels complexes tels que la condition humaine, l\'absurdité de la vie et la recherche de sens dans un monde apparemment sans but. Sa prose est simple, mais poignante, et ses réflexions sur la vie ont réussi à m\'émouvoir et à me faire réfléchir.', 5, 1, 5),
(3, 'Déception totale', '2023-03-26 13:12:26', 'Bien que ce livre ait été largement acclamé, je dois dire que j\'ai été profondément déçu par son contenu. Tout d\'abord, l\'histoire en elle-même manque de profondeur. Les personnages sont peu développés et leurs motivations sont souvent floues. J\'ai eu du mal à m\'attacher à eux et à m\'intéresser à leur destin.\nDe plus, la structure du livre est assez plate et prévisible. Camus suit une trame chronologique linéaire qui n\'apporte pas beaucoup de suspense ou de tension dramatique. J\'ai trouvé l\'intrigue un peu ennuyeuse et prévisible, avec peu de rebondissements ou de surprises.', 1, 1, 3),
(4, 'test', '2023-03-28 08:25:51', 'test123', 4, 98, 3),
(5, 'Bof', '2023-03-30 13:19:19', 'J\'aime pas trop', 2, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id_role`, `name_role`) VALUES
(1, 'admin'),
(10, 'member');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(20) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `pswd_user` varchar(255) NOT NULL,
  `registration_date_user` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_role` int(11) DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `email_user`, `pswd_user`, `registration_date_user`, `id_role`) VALUES
(3, 'Giani', 'giani@mail.com', '$2y$10$0cnSNqJy1U3ZL8yHzYMIruookAb.EjuLHL2RRQjbH1htNkFlh0.86', '2023-03-11 15:38:36', 10),
(4, 'Admin', 'contact@fmusaeva.com', '$2y$10$bMqfvAwtThfOs5EBsopCie5p8RHD41JquOYmrCDu6VkuFBM8k1uXq', '2023-03-11 15:41:41', 1),
(5, 'Harry', 'harry@gmail.com', '$2y$10$C.S9QQAbNO.hEEUHFpXsoONSNqtnVTJzLIjOGq343XBKjQPFg3leK', '2023-03-14 17:53:32', 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id_author`);

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`);

--
-- Index pour la table `book_author`
--
ALTER TABLE `book_author`
  ADD PRIMARY KEY (`id_book`,`id_author`),
  ADD KEY `id_author` (`id_author`);

--
-- Index pour la table `book_genre`
--
ALTER TABLE `book_genre`
  ADD PRIMARY KEY (`id_book`,`id_genre`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Index pour la table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  ADD PRIMARY KEY (`id_book`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_post` (`id_post`);

--
-- Index pour la table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `possess_images`
--
ALTER TABLE `possess_images`
  ADD PRIMARY KEY (`id_user`,`id_book`,`id_post`,`id_image`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_image` (`id_image`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `name_user` (`name_user`),
  ADD UNIQUE KEY `email_user` (`email_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `authors`
--
ALTER TABLE `authors`
  MODIFY `id_author` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `genres`
--
ALTER TABLE `genres`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `book_author`
--
ALTER TABLE `book_author`
  ADD CONSTRAINT `book_author_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`),
  ADD CONSTRAINT `book_author_ibfk_2` FOREIGN KEY (`id_author`) REFERENCES `authors` (`id_author`);

--
-- Contraintes pour la table `book_genre`
--
ALTER TABLE `book_genre`
  ADD CONSTRAINT `book_genre_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`),
  ADD CONSTRAINT `book_genre_ibfk_2` FOREIGN KEY (`id_genre`) REFERENCES `genres` (`id_genre`);

--
-- Contraintes pour la table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  ADD CONSTRAINT `borrowed_books_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`),
  ADD CONSTRAINT `borrowed_books_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`);

--
-- Contraintes pour la table `possess_images`
--
ALTER TABLE `possess_images`
  ADD CONSTRAINT `possess_images_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `possess_images_ibfk_2` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`),
  ADD CONSTRAINT `possess_images_ibfk_3` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`),
  ADD CONSTRAINT `possess_images_ibfk_4` FOREIGN KEY (`id_image`) REFERENCES `images` (`id_image`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
