-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 02 mai 2021 à 07:35
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `infocovid`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `idPays` int(11) DEFAULT NULL,
  `image` varchar(50) NOT NULL,
  `estactu` tinyint(1) NOT NULL,
  `sousTitre` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idPays` (`idPays`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id`, `date`, `titre`, `description`, `idPays`, `image`, `estactu`, `sousTitre`) VALUES
(1, '2021-04-28', 'Madagascar', 'Madagascar, a l\'habitude de lutter contre les épidémies, pourtant cette fois les spécialistes sont obligés d\'adapter leurs stratégies en permanence à cette nouvelle maladie. La Covid-19 et ses variants mettent à mal les plans sanitaires élaborés en 2020. Cette seconde vague, constituée pour l\'essentiel du virus sud-africain, se diffuse encore plus rapidement et occasionne plus de morts. On compte, désormais 599 décès depuis le début du mois de mars 2021. Plus que pendant les douze mois précédents.\r\n\r\nUne fois encore, le district Analamanga est la région la plus touchée. En trois jours, les services en charge des dépistages ont enregistré 1 677 nouveaux cas positifs, dont 553 uniquement dans cette région et 375 au cœur de la capitale, précise Midi-Madagascar.', 1, 'a1.jpg', 1, 'Madagascar-Covid-19 : 1 677 nouveaux cas et 20 morts en trois jours'),
(2, '2021-04-28', 'chine', 'L\'aveu est significatif, d\'autant que le produit est déjà distribué dans plusieurs pays à travers le monde. George Gao Fu, directeur du Centre chinois de contrôle et de prévention des maladies, a déclaré lors d\'une conférence ce samedi 10 avril que les vaccins en ce moment produits par la Chine, dont le CoronaVac, \"n\'avaient pas de très haut taux de protection\".\r\n\r\nComme le souligne la BBC, l\'auteur des déclarations a rapidement semblé vouloir rectifier ses propos, expliquant au journal d\'État le Global Times que \"les niveaux de protection de tous les vaccins au monde sont parfois élevés, parfois faibles\". ', 5, 'a2.jpg', 1, 'Coronavirus : le vaccin chinois moins efficace que prévu ?'),
(3, '2021-04-28', 'France', 'On savait qu\'il s\'exprimerait prochainement, mais la date restait inconnue. C\'est finalement vendredi 30 avril qu\'Emmanuel Macron présentera \"une stratégie de sortie progressive et phasée\" des restrictions sanitaires en vigueur pour lutter contre le Covid-19. Le Premier ministre Jean Castex l\'a annoncé mercredi 28 avril, lors d\'une conférence de presse consécutive au conseil de défense sanitaire et au Conseil des ministres.\r\n\r\nS\'agira-t-il d\'une allocution ? D\'une interview ? L\'Elysée confirme au service politique de France Télévisions qu\'Emmanuel Macron s\'exprimera, mais précise que la forme de son intervention n\'est pas arrêtée.\r\n\r\nLe président de la République a déjà semé des indices sur la méthode de levée des mesures sanitaires envisagée par l\'exécutif. En déplacement à Melun (Seine-et-Marne), il avait évoqué devant les journalistes un calendrier en quatre étapes entre le 3 mai et la fin juin, et un possible décalage de l\'heure du couvre-feu.\r\n\r\nIl envisageait aussi la possibilité que les mesures concernant les restaurants dépendent du taux d\'incidence des départements, et que des lieux culturels soient parmi les premiers à rouvrir. Une orientation également exprimée mardi lors d\'une visioconférence avec des maires de toute la France.', 4, 'a4.jpg', 1, 'Covid-19 : Emmanuel Macron présentera vendredi une stratégie \"progressive\" de déconfinement'),
(4, '2021-04-28', 'Etats-Unis', 'Surfant sur le mécontentement d’une partie de la population à l’égard des restrictions sanitaires, ils campaient depuis des mois à l’entrée des supermarchés du Golden State, le plus peuplé des États américains (près de 40 millions d’habitants) et ils ont récolté 1,62 million de signatures valides, assez pour obtenir la tenue d’un vote populaire à l’automne, selon la loi californienne.\r\n\r\nFinancé par le camp républicain, le recall est principalement soutenu par des citoyens conservateurs qui tiennent le gouverneur démocrate pour un \"tyran »,\" lui reprochant l’obligation de porter le masque et la fermeture des commerces et des écoles pendant de longs mois. Et beaucoup n’ont pas digéré le scandale du French Laundry, un restaurant étoilé de la Napa Valley, où Newsom, ancien négociant en vin et ex-maire de San Francisco, avait participé à un anniversaire luxueux et sans masque en novembre 2020…', 2, 'a3.jpg', 1, 'Il a fermé les commerces, obligé au port du masque : en Californie, le gouverneur renvoyé aux urnes'),
(5, '2021-05-01', 'Madagascar', 'Madagascar, a l\'habitude de lutter contre les épidémies, pourtant cette fois les spécialistes sont obligés d\'adapter leurs stratégies en permanence à cette nouvelle maladie. La Covid-19 et ses variants mettent à mal les plans sanitaires élaborés en 2020. Cette seconde vague, constituée pour l\'essentiel du virus sud-africain, se diffuse encore plus rapidement et occasionne plus de morts. On compte, désormais 599 décès depuis le début du mois de mars 2021. Plus que pendant les douze mois précédents.', 1, 'a1.jpg', 0, 'Madagascar-Covid-19 : 1 677 nouveaux cas et 20 morts en trois jours'),
(6, '2021-05-31', ' Chine', 'L\'aveu est significatif, d\'autant que le produit est déjà distribué dans plusieurs pays à travers le monde. George Gao Fu, directeur du Centre chinois de contrôle et de prévention des maladies, a déclaré lors d\'une conférence ce samedi 10 avril que les vaccins en ce moment produits par la Chine, dont le CoronaVac, \"n\'avaient pas de très haut taux de protection\".\r\n\r\nComme le souligne la BBC, l\'auteur des déclarations a rapidement semblé vouloir rectifier ses propos, expliquant au journal d\'État le Global Times que \"les niveaux de protection de tous les vaccins au monde sont parfois élevés, parfois faibles\". ', 5, 'a1.jpg', 0, ' le vaccin chinois moins efficace que prévu ?'),
(7, '2021-05-31', ' Chine', 'L\'aveu est significatif, d\'autant que le produit est déjà distribué dans plusieurs pays à travers le monde. George Gao Fu, directeur du Centre chinois de contrôle et de prévention des maladies, a déclaré lors d\'une conférence ce samedi 10 avril que les vaccins en ce moment produits par la Chine, dont le CoronaVac, \"n\'avaient pas de très haut taux de protection\".\r\n\r\nComme le souligne la BBC, l\'auteur des déclarations a rapidement semblé vouloir rectifier ses propos, expliquant au journal d\'État le Global Times que \"les niveaux de protection de tous les vaccins au monde sont parfois élevés, parfois faibles\". ', 5, 'a3.jpg', 0, 'le vaccin chinois moins efficace que prévu ?'),
(8, '2021-05-01', 'Chine', 'L\'aveu est significatif, d\'autant que le produit est déjà distribué dans plusieurs pays à travers le monde. George Gao Fu, directeur du Centre chinois de contrôle et de prévention des maladies, a déclaré lors d\'une conférence ce samedi 10 avril que les vaccins en ce moment produits par la Chine, dont le CoronaVac, \"n\'avaient pas de très haut taux de protection\".\r\n\r\nComme le souligne la BBC, l\'auteur des déclarations a rapidement semblé vouloir rectifier ses propos, expliquant au journal d\'État le Global Times que \"les niveaux de protection de tous les vaccins au monde sont parfois élevés, parfois faibles\". ', 5, 'a3.jpg', 0, 'le vaccin chinois moins efficace que prévu ?'),
(9, '2021-05-01', 'Chine', 'L\'aveu est significatif, d\'autant que le produit est déjà distribué dans plusieurs pays à travers le monde. George Gao Fu, directeur du Centre chinois de contrôle et de prévention des maladies, a déclaré lors d\'une conférence ce samedi 10 avril que les vaccins en ce moment produits par la Chine, dont le CoronaVac, \"n\'avaient pas de très haut taux de protection\".\r\n\r\nComme le souligne la BBC, l\'auteur des déclarations a rapidement semblé vouloir rectifier ses propos, expliquant au journal d\'État le Global Times que \"les niveaux de protection de tous les vaccins au monde sont parfois élevés, parfois faibles\". ', 5, 'a2.jpg', 0, ' le vaccin chinois moins efficace que prévu ?'),
(10, '2021-05-01', 'Chine', 'L\'aveu est significatif, d\'autant que le produit est déjà distribué dans plusieurs pays à travers le monde. George Gao Fu, directeur du Centre chinois de contrôle et de prévention des maladies, a déclaré lors d\'une conférence ce samedi 10 avril que les vaccins en ce moment produits par la Chine, dont le CoronaVac, \"n\'avaient pas de très haut taux de protection\".\r\n\r\nComme le souligne la BBC, l\'auteur des déclarations a rapidement semblé vouloir rectifier ses propos, expliquant au journal d\'État le Global Times que \"les niveaux de protection de tous les vaccins au monde sont parfois élevés, parfois faibles\". ', 6, 'a3.jpg', 0, ' le vaccin chinois moins efficace que prévu ?');

-- --------------------------------------------------------

--
-- Structure de la table `motcle`
--

DROP TABLE IF EXISTS `motcle`;
CREATE TABLE IF NOT EXISTS `motcle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mot` varchar(20) DEFAULT NULL,
  `idActu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idActu` (`idActu`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `motcle`
--

INSERT INTO `motcle` (`id`, `mot`, `idActu`) VALUES
(1, 'Chine', 2);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`) VALUES
(1, 'Madagascar'),
(2, 'Etats-Unies'),
(3, 'Inde'),
(4, 'France'),
(5, 'Chine'),
(6, 'Afrique du sud');

-- --------------------------------------------------------

--
-- Structure de la table `statistiques`
--

DROP TABLE IF EXISTS `statistiques`;
CREATE TABLE IF NOT EXISTS `statistiques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `nbrCas` int(11) DEFAULT NULL,
  `nbrGueris` int(11) DEFAULT NULL,
  `enTraitement` int(11) DEFAULT NULL,
  `nbrTest` int(11) DEFAULT NULL,
  `nbrDeces` int(11) DEFAULT NULL,
  `totalCas` int(11) DEFAULT NULL,
  `totalDeces` int(11) DEFAULT NULL,
  `totalTest` int(11) DEFAULT NULL,
  `idPays` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idPays` (`idPays`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vaccin`
--

DROP TABLE IF EXISTS `vaccin`;
CREATE TABLE IF NOT EXISTS `vaccin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vaccin`
--

INSERT INTO `vaccin` (`id`, `date`, `titre`, `description`) VALUES
(1, '2021-04-26', 'Les vaccins les plus utilisés dans le monde ', 'À ce jour, environ un milliard de doses de vaccins anti-Covid-19 ont été administrées dans le monde, soit environ 13 doses pour 100 personnes, mais l\'avancement des campagnes reste très variable selon les pays. On compte désormais 11 vaccins en service dans le monde, dont un seul à dose unique, celui récemment déployé par Johnson & Johnson. Ce vaccin est actuellement utilisé aux États-Unis, Afrique du Sud, et dans certains pays européens tels que l\'Italie et la Pologne. Selon Reuters, la France, l\'Allemagne et les Pays-Bas devraient également l\'utiliser dans les semaines à venir. Au total, Johnson & Johnson devrait livrer 55 millions doses de vaccins à l\'Union européenne d\'ici fin juin.\r\n\r\nComme le montre notre graphique, basé sur les données d\'Our World in Data rapportées dans le New York Times, c\'est le vaccin d\'Oxford-AstraZeneca qui est actuellement le plus utilisé dans le monde. Le 26 avril, 135 pays répartis sur les cinq continents administraient ce vaccin malgré son parcours plutôt chaotique. Le vaccin avait effectivement temporairement été suspendu en France et dans plusieurs autres pays en raison d\'effets secondaires suspectés. L\'Agence nationale de sécurité du médicament avait confirmé l\'existence d\'un risque \"rare\" de thrombose atypique associé à ce vaccin, tout en soulignant que sa balance bénéfice/risque restait \"favorable\".\r\n\r\nParmi les autres vaccins contre le Covid-19 les plus utilisés, on retrouve en deuxième position celui de Pfizer-BioNTech (89 pays), puis celui de Moderna (37 pays). Ailleurs, les vaccins chinois Sinopharm (Beijing/Wuhan), Sinovac et CanSino sont administrés par respectivement 35, 23 et 2 pays, principalement en Asie et en Amérique du Sud, alors que Spoutnik V (Russie) est utilisé par 28 pays, dont la Hongrie, et ce malgré l\'absence pour le moment d\'autorisation à l\'échelle de l\'UE.\r\n\r\nGraphique actualisé avec les données du 26 avril 2021. Si le texte et l\'infographie venaient à ne pas correspondre, nous conseillons de vider la mémoire cache du navigateur.');

-- --------------------------------------------------------

--
-- Structure de la table `variant`
--

DROP TABLE IF EXISTS `variant`;
CREATE TABLE IF NOT EXISTS `variant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `sousTitre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `variant`
--

INSERT INTO `variant` (`id`, `nom`, `titre`, `description`, `sousTitre`) VALUES
(1, 'variants anglais', 'Quel vaccin est efficace contre le variant anglais ?', 'L’arrivée de variants de ce virus – plus contagieux ou plus létaux selon les cas – a conduit les autorités à mettre en place, dès le début du mois de mars, des adaptations locales de cette stratégie, dans un nombre limité de départements. Notamment en Moselle où la proportion des variants sud-africain et brésilien atteint 30% et en Guyane, à la Réunion et à Mayotte où ils représentent entre 40 et 48% des cas. Dans ce contexte, la Haute autorité de santé (HAS) a étudié l’efficacité des différents vaccins contre les variants identifiés sur le territoire français, afin d’évaluer, pour le mois d’avril, la nécessité d’une adaptation de la stratégie vaccinale.', ''),
(2, 'variants sud-africains', 'Dans le monde, au 13 avril 2021, le variant 20H/501Y.V2 a été rapporté dans 82 pays selon l’OMS.', 'Des études préliminaires suggèrent que ce variant est associé à une transmissibilité plus élevée de 50% et un risque plus élevé d’échappement immunitaire et de réinfection (comprendre : le risque de l\'attraper à nouveau après une première infection). Certaines recherches indiquent un risque accru de décès à l’hôpital, indique Santé Publique France.\r\n\r\nPour résumer, le variant sud-africain serait donc moins sensible aux vaccins, aux anticorps de sujets déjà infectés, aux anticorps monoclonaux. En effet, de très nombreuses 2ème infection par le variant ont été observées en Afrique du Sud au cours de ces derniers mois chez des patients ayant déjà fait un Covid. \"Cette moindre sensibilité est en soi un problème, de plus elle pourrait favoriser l’apparition de mutants résistants à l’intérieur de la population virale SA\", souligne le Conseil scientifique (avis du 12 février).', ''),
(3, 'variant indien', 'Que sat-on du variant Indien?', 'Les premiers cas d\'un variant venu d\'Inde, le B.1.617, ou communément appelé le \"variant indien\" sont confirmés en France le 29 avril. Ce variant est un mutant détecté pour la première fois en octobre 2020 dans l\'Etat de Maharashtra au centre du pays. Il serait porteur de deux mutations particulièrement puissantes et résistantes aux vaccins, d\'où le nom de \"double mutant\". Des cas confirmés du variant B.1.617 ont également été signalés dans plusieurs pays d\'Europe (Allemagne, Belgique, Italie, Espagne, Suisse, Irlande). Le variant B.1.617 représenterait, au 14 avril 2021, 61% des échantillons séquencés dans l\'Etat du Maharastra où il a été découvert. Mais l\'Inde séquence moins de 1% des prélèvements positifs et jusque récemment seuls les variants 20I/501Y.V1 et le 20H/501Y.V2 étaient recherchés.', ''),
(4, 'variant brésilien', 'Que sait-on du variant brésilien (20J/501Y.V3) ?', 'Au Brésil, la proportion du variant 20J/501Y.V3 est passée de 28 % des spécimens collectés en janvier 2021 à 73 % en mars 2021, d\'après les données générées par le réseau génomique Fiocruz et GISAID. La proportion du variant était plus élevée dans les régions du sud-est et du nord du pays, qui comprennent l\'État d\'Amazonas.\r\n\r\n\"Plusieurs études montrent une transmissibilité plus importante par rapport aux souches autres que variantes. De plus, ce variant aurait la capacité d’échapper à la réponse immunitaire induite par un premier contact avec des souches d’origine, et pourrait par conséquent accroître le risque de réinfection\", analyse Santé Publique France dans son bulletin du 15 avril.\r\n\r\nConséquence aussi : ce variant serait moins sensible au vaccin. Certains travaux conduits en laboratoire suggèrent en effet que l’efficacité de la vaccination pourrait être atténuée pour ce variant, tandis qu’une récente communication scientifique publiée dans le New England Journal of Medicine montre que le vaccin Pfizer/BioNTech aurait un effet neutralisant.', '');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD CONSTRAINT `actualites_ibfk_1` FOREIGN KEY (`idPays`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `motcle`
--
ALTER TABLE `motcle`
  ADD CONSTRAINT `motcle_ibfk_1` FOREIGN KEY (`idActu`) REFERENCES `actualites` (`id`);

--
-- Contraintes pour la table `statistiques`
--
ALTER TABLE `statistiques`
  ADD CONSTRAINT `statistiques_ibfk_1` FOREIGN KEY (`idPays`) REFERENCES `pays` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
