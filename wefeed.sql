-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 14 mars 2018 à 20:26
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
-- Base de données :  `wefeed`
--

-- --------------------------------------------------------

--
-- Structure de la table `bookmarks`
--

DROP TABLE IF EXISTS `bookmarks`;
CREATE TABLE IF NOT EXISTS `bookmarks` (
  `art_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `art_url` text NOT NULL,
  `art_urlToImage` text NOT NULL,
  `art_title` varchar(255) NOT NULL,
  `art_preview` varchar(1000) NOT NULL,
  PRIMARY KEY (`art_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bookmarks`
--

INSERT INTO `bookmarks` (`art_id`, `user_id`, `art_url`, `art_urlToImage`, `art_title`, `art_preview`) VALUES
(1, 5, 'http://timesofindia.indiatimes.com/city/lucknow/moderate-to-low-polling-in-ls-bypolls-in-up-bihar/articleshow/63258430.cms', 'https://static.toiimg.com/thumb/msid-63258431,width-1070,height-580,imgsize-1233761,resizemode-6,overlay-toi_sw,pt-32,y_pad-40/photo.jpg', 'Moderate to low polling in LS bypolls in UP, Bihar - Times of India', 'Moderate to low polling was today recorded in the Lok Sabha by-elections in Uttar Pradesh\'s Gorakhpur and Phulpur and Bihar\'s Araria, being viewed as'),
(2, 5, 'http://fortune.com/2018/03/11/china-space-station-crash', 'https://fortunedotcom.files.wordpress.com/2018/01/gettyimages-170438905.jpg', 'China’s First Space Station Is About To Crash To Earth', ''),
(3, 5, 'http://timesofindia.indiatimes.com/city/chennai/four-young-trekkers-charred-to-death-in-forest-fire-in-theni/articleshow/63259104.cms', 'https://static.toiimg.com/thumb/msid-63259300,width-1070,height-580,imgsize-1455892,resizemode-6,overlay-toi_sw,pt-32,y_pad-40/photo.jpg', 'Four young trekkers charred to death in forest fire in Theni - Times of India', 'In a tragic incident, four youngsters who were part of a large group of trekkers were charred to death in a forest fire in Kurugumalai area in Bodinay'),
(4, 1, 'http://www.liberation.fr/france/2018/03/11/je-suis-ici-a-la-memoire-de-karim-mort-de-l-incurie-de-l-etat-francais_1635313', 'http://md1.libe.com/photo/1103922-paris-le-10-mars-hommage-pour-karim-sans-papiers-soudannais-mort-a-l-entree-de-du-centre-d-hebergeme.jpg?modified_at=1520788638&picto=fb&ratio_x=191&ratio_y=100&width=600', '«Je suis ici à la mémoire de Karim, mort de l’incurie de l’Etat français»', 'Une centaine de personnes se sont réunies à Paris ce dimanche pour honorer la mémoire d\'un trentenaire soudanais, mort jeudi 8 mars dans la rue, en face du centre de premier accueil de la porte de la Chapelle, dans le XVIIIe arrondissement.'),
(5, 1, 'http://www.lemonde.fr/europe/article/2018/03/11/empoisonnement-d-un-ex-espion-russe-deux-etablissements-contamines_5269301_3214.html', 'http://img.lemde.fr/2018/03/11/321/0/2679/1339/644/322/60/0/34fcc9f_a19f2c78325d4470a6b1f8c860e8e775-a19f2c78325d4470a6b1f8c860e8e775-0.jpg', 'Empoisonnement d’un ex-espion russe : deux établissements contaminés', 'Un restaurant et un pub de Salisbury fréquentés par Sergeï Skripal et sa fille quand ils ont été empoisonnés ont révélé des traces de contamination. Les clients ont été alertés.'),
(6, 1, 'https://news.nationalgeographic.com/2018/03/animals-dogs-emotions-pets-evolution.html', 'https://news.nationalgeographic.com/content/dam/news/2018/03/09/dogs-human-emotions/03-dogs-human-emotions-NationalGeographic_1468906.jpg', 'Your Dog Knows How You Feel—Here’s How', 'A recent study reveals dogs are more intuitive than we thought.'),
(7, 1, 'http://www.liberation.fr/mode/2018/03/12/le-couturier-hubert-de-givenchy-est-decede-a-l-age-de-91-ans_1635574', 'http://md0.libe.com/photo/981096-le-couturier-hubert-de-givenchy-le-23-novembre-2016-a-la-haye.jpg?modified_at=1483797310', 'Le couturier Hubert de Givenchy est décédé à l\'âge de 91 ans', 'Légende de la haute couture, le créateur de mode Hubert de Givenchy, connu pour avoir lancé la maison du même nom et pour avoir habillé l\'actrice Audrey Hepburn, sa muse, est décédé à l\'âge de 91 ans. «Monsieur de Givenchy s\'est éteint dans son sommeil le sam…'),
(8, 1, 'http://www.liberation.fr/mode/2018/03/12/le-couturier-hubert-de-givenchy-est-decede-a-l-age-de-91-ans_1635574', 'http://md0.libe.com/photo/981096-le-couturier-hubert-de-givenchy-le-23-novembre-2016-a-la-haye.jpg?modified_at=1483797310', 'Le couturier Hubert de Givenchy est décédé à l\'âge de 91 ans', 'Légende de la haute couture, le créateur de mode Hubert de Givenchy, connu pour avoir lancé la maison du même nom et pour avoir habillé l\'actrice Audrey Hepburn, sa muse, est décédé à l\'âge de 91 ans. «Monsieur de Givenchy s\'est éteint dans son sommeil le sam…'),
(9, 2, 'http://timesofindia.indiatimes.com/entertainment/hindi/bollywood/news/big-bs-body-to-be-fiddled-around-by-doctors/articleshow/63281523.cms', 'https://static.toiimg.com/thumb/msid-63281778,width-1070,height-580,imgsize-172934,resizemode-6,overlay-toi_sw,pt-32,y_pad-40/photo.jpg', 'Amitabh Bachchan\'s body to be \'fiddled\' around by doctors - Times of India', 'Megastar Amitabh Bachchan says his team of doctors will \"fiddle around\" with his body and set him up again.'),
(10, 2, 'http://timesofindia.indiatimes.com/entertainment/hindi/bollywood/news/big-bs-body-to-be-fiddled-around-by-doctors/articleshow/63281523.cms', 'https://static.toiimg.com/thumb/msid-63281778,width-1070,height-580,imgsize-172934,resizemode-6,overlay-toi_sw,pt-32,y_pad-40/photo.jpg', 'Amitabh Bachchan\'s body to be \'fiddled\' around by doctors - Times of India', 'Megastar Amitabh Bachchan says his team of doctors will \"fiddle around\" with his body and set him up again.'),
(11, 2, 'http://timesofindia.indiatimes.com/entertainment/hindi/bollywood/news/big-bs-body-to-be-fiddled-around-by-doctors/articleshow/63281523.cms', 'https://static.toiimg.com/thumb/msid-63281778,width-1070,height-580,imgsize-172934,resizemode-6,overlay-toi_sw,pt-32,y_pad-40/photo.jpg', 'Amitabh Bachchan\'s body to be \'fiddled\' around by doctors - Times of India', 'Megastar Amitabh Bachchan says his team of doctors will \"fiddle around\" with his body and set him up again.'),
(12, 2, 'http://timesofindia.indiatimes.com/entertainment/hindi/bollywood/news/big-bs-body-to-be-fiddled-around-by-doctors/articleshow/63281523.cms', 'https://static.toiimg.com/thumb/msid-63281778,width-1070,height-580,imgsize-172934,resizemode-6,overlay-toi_sw,pt-32,y_pad-40/photo.jpg', 'Amitabh Bachchan\'s body to be \'fiddled\' around by doctors - Times of India', 'Megastar Amitabh Bachchan says his team of doctors will \"fiddle around\" with his body and set him up again.'),
(13, 2, 'https://www.nationalgeographic.com/magazine/2018/04/from-the-editor-race-racism-history.html', 'https://www.nationalgeographic.com/content/dam/magazine/rights-exempt/2018/04/DEPARTMENTS/editorspage/editors-page-timor-island.jpg', 'For Decades, Our Coverage Was Racist. To Rise Above Our Past, We Must Acknowledge It', 'We asked a preeminent historian to investigate our coverage of people of color in the U.S. and abroad. Here’s what he found.'),
(14, 2, 'https://www.nationalgeographic.com/magazine/2018/04/from-the-editor-race-racism-history.html', 'https://www.nationalgeographic.com/content/dam/magazine/rights-exempt/2018/04/DEPARTMENTS/editorspage/editors-page-timor-island.jpg', 'For Decades, Our Coverage Was Racist. To Rise Above Our Past, We Must Acknowledge It', 'We asked a preeminent historian to investigate our coverage of people of color in the U.S. and abroad. Here’s what he found.'),
(15, 1, 'http://www.rte.ie/cspodcasts/media.mp3?c1=2&c2=16951747&ns_site=test&ns_type=clickin&rte_vs_ct=aud&rte_vs_sc=pod&rte_mt_sec=radio&rte_vs_sn=radio1&rte_mt_pub_dt=2018-02-04&rte_mt_prg_name=test-marianfinucane&title=Macron&c7=http%3A%2F%2Fpodcast.rasset.ie%2Fpodcasts%2Faudio%2F2018%2F0204%2F20180204_rteradio1-marianfinucane-macron_c21312352_21312356_232_.mp3&r=http%3A%2F%2Fpodcast.rasset.ie%2Fpodcasts%2Faudio%2F2018%2F0204%2F20180204_rteradio1-marianfinucane-macron_c21312352_21312356_232_.mp3', 'null', 'Macron', 'Journalist from France 24, Hervé Amoric, joined Marian in studio to discuss French President, Emmanuel Macron being viewed as the man assuming the role of Europe;s leading figure.'),
(16, 1, 'https://news.nationalgeographic.com/2018/03/european-clocks-six-minutes-late-serbia-kosovo-electricity-grid-spd.html', 'http://pmdvod.nationalgeographic.com/NG_Video/282/987/951617603648_640x360_951632451821.jpg', 'Why European Clocks Are Running 6 Minutes Late', 'A political disupte between Kosovo and Serbia has led to problems in the electricity grid that serves much of Europe, with a surprising result.'),
(17, 1, 'https://news.nationalgeographic.com/2018/03/snails-memory-molecules-spd.html', 'https://news.nationalgeographic.com/content/dam/news/2018/03/12/snail-flashbulb-memory/01-snail-flashbulb-memory.jpg', 'How a Pond Snail Could Someday Improve Your Memory', 'Studying memory mechanisms in simple organisms could help develop drugs for trauma and dementia patients.'),
(18, 1, 'https://news.nationalgeographic.com/2018/03/stephen-hawking-dies-black-hole-physics-universe-obituary.html', 'http://pmdvod.nationalgeographic.com/NG_Video/13/23/194344003869_Hawking_LFS_640x360_194360899721.jpg', 'Stephen Hawking, Famed Physicist, Dies at 76', 'Hawking\'s scientific claim to fame was his revelation that the universe began in a singularity, an infinitely dense point of spacetime.'),
(19, 6, 'http://www.bbc.co.uk/news/world-europe-43389032', 'https://ichef-1.bbci.co.uk/news/1024/branded_news/1A72/production/_100407760_p0612169.jpg', 'BBC reporter spied on in Russia', 'John Sweeney was investigating how the Russian state discredits its critics when it happened.'),
(20, 6, 'http://www.bbc.co.uk/news/world-europe-43389032', 'https://ichef-1.bbci.co.uk/news/1024/branded_news/1A72/production/_100407760_p0612169.jpg', 'BBC reporter spied on in Russia', 'John Sweeney was investigating how the Russian state discredits its critics when it happened.'),
(21, 6, 'https://www.nationalgeographic.com/travel/destinations/north-america/united-states/nevada/las-vegas/fast-facts.html', 'https://www.nationalgeographic.com/content/dam/travel/Guide-Pages/north-america/united-states/nevada/las-vegas/las-vegas-guide-freemont-street.jpg', 'Everything to Know About Las Vegas', 'Like the buffets, there’s something for everyone.'),
(22, 6, 'https://www.nationalgeographic.com/travel/destinations/north-america/united-states/nevada/las-vegas/fast-facts.html', 'https://www.nationalgeographic.com/content/dam/travel/Guide-Pages/north-america/united-states/nevada/las-vegas/las-vegas-guide-freemont-street.jpg', 'Everything to Know About Las Vegas', 'Like the buffets, there’s something for everyone.'),
(23, 6, 'https://www.nationalgeographic.com/travel/destinations/north-america/united-states/nevada/las-vegas/fast-facts.html', 'https://www.nationalgeographic.com/content/dam/travel/Guide-Pages/north-america/united-states/nevada/las-vegas/las-vegas-guide-freemont-street.jpg', 'Everything to Know About Las Vegas', 'Like the buffets, there’s something for everyone.'),
(24, 6, 'https://www.nationalgeographic.com/travel/destinations/north-america/united-states/nevada/las-vegas/fast-facts.html', 'https://www.nationalgeographic.com/content/dam/travel/Guide-Pages/north-america/united-states/nevada/las-vegas/las-vegas-guide-freemont-street.jpg', 'Everything to Know About Las Vegas', 'Like the buffets, there’s something for everyone.'),
(25, 6, 'https://www.nationalgeographic.com/travel/destinations/north-america/united-states/nevada/las-vegas/fast-facts.html', 'https://www.nationalgeographic.com/content/dam/travel/Guide-Pages/north-america/united-states/nevada/las-vegas/las-vegas-guide-freemont-street.jpg', 'Everything to Know About Las Vegas', 'Like the buffets, there’s something for everyone.'),
(26, 6, 'https://www.nationalgeographic.com/travel/destinations/north-america/united-states/nevada/las-vegas/fast-facts.html', 'https://www.nationalgeographic.com/content/dam/travel/Guide-Pages/north-america/united-states/nevada/las-vegas/las-vegas-guide-freemont-street.jpg', 'Everything to Know About Las Vegas', 'Like the buffets, there’s something for everyone.'),
(27, 6, 'https://www.nationalgeographic.com/travel/destinations/north-america/united-states/nevada/las-vegas/fast-facts.html', 'https://www.nationalgeographic.com/content/dam/travel/Guide-Pages/north-america/united-states/nevada/las-vegas/las-vegas-guide-freemont-street.jpg', 'Everything to Know About Las Vegas', 'Like the buffets, there’s something for everyone.'),
(28, 6, 'https://www.nationalgeographic.com/travel/destinations/north-america/united-states/nevada/las-vegas/fast-facts.html', 'https://www.nationalgeographic.com/content/dam/travel/Guide-Pages/north-america/united-states/nevada/las-vegas/las-vegas-guide-freemont-street.jpg', 'Everything to Know About Las Vegas', 'Like the buffets, there’s something for everyone.'),
(29, 6, 'https://www.nationalgeographic.com/travel/destinations/north-america/united-states/nevada/las-vegas/fast-facts.html', 'https://www.nationalgeographic.com/content/dam/travel/Guide-Pages/north-america/united-states/nevada/las-vegas/las-vegas-guide-freemont-street.jpg', 'Everything to Know About Las Vegas', 'Like the buffets, there’s something for everyone.'),
(30, 6, 'http://timesofindia.indiatimes.com/sports/badminton/all-england-badminton-championships-2018-day-1/liveblog/63298921.cms', 'https://static.toiimg.com/photo/msid-63298921/63298921.jpg?100712', 'Live: All England Badminton Championships 2018: Saina Nehwal vs Tai Tzu Ying - The Times of India', 'Check all the badminton score updates of All England Open Badminton Championships 2018 matches featuring Saina Nehwal, PV Sindhu, Kidambi Srikanth, HS'),
(31, 6, 'http://timesofindia.indiatimes.com/sports/badminton/all-england-badminton-championships-2018-day-1/liveblog/63298921.cms', 'https://static.toiimg.com/photo/msid-63298921/63298921.jpg?100712', 'Live: All England Badminton Championships 2018: Saina Nehwal vs Tai Tzu Ying - The Times of India', 'Check all the badminton score updates of All England Open Badminton Championships 2018 matches featuring Saina Nehwal, PV Sindhu, Kidambi Srikanth, HS'),
(32, 7, 'http://www.lemonde.fr/pixels/article/2018/03/14/l-intelligence-artificielle-pourrait-etre-la-pire-ou-la-meilleure-chose-qui-soit-arrivee-a-l-humanite-estimait-hawking_5270820_4408996.html', 'http://img.lemde.fr/2014/12/03/219/0/4870/2435/644/322/60/0/ill_4533136_b915_111942.jpg', 'L’intelligence artificielle « pourrait être la pire ou la meilleure chose qui soit arrivée à l’humanité », estimait Hawking', 'Dans les dernières années de sa vie, Stephen Hawking a multiplié les prises de parole remarquées sur l’intelligence artificielle, qu’il considérait comme un danger, mais aussi une source d’opportunités.'),
(33, 7, 'http://www.liberation.fr/sciences/2018/03/14/une-breve-histoire-de-stephen-hawking_1636028', 'http://s1.libe.com/newsite/images/social-placeholder.jpg', 'Une brève histoire de Stephen Hawking', 'L\'astrophysicien britannique est mort ce mercredi matin à 76 ans.'),
(34, 7, 'http://www.liberation.fr/france/2018/03/14/la-premiere-fois-que-hawking-l-homme-cerveau-est-apparu-dans-libe_1636073', 'http://md1.libe.com/photo/1104702-hawking-1989.jpg?modified_at=1521030197&picto=fb&ratio_x=191&ratio_y=100&width=600', 'La première fois que «Hawking, l\'homme-cerveau» est apparu dans «Libé»', 'Le 2 mars 1989, «Libération» relatait sa rencontre avec «l\'un des plus formidables cerveaux au monde».');

-- --------------------------------------------------------

--
-- Structure de la table `sources`
--

DROP TABLE IF EXISTS `sources`;
CREATE TABLE IF NOT EXISTS `sources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `api_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `api_url` varchar(500) CHARACTER SET latin1 NOT NULL,
  `api_lang` varchar(2) CHARACTER SET latin1 NOT NULL,
  `api_pos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `sources`
--

INSERT INTO `sources` (`id`, `api_name`, `api_url`, `api_lang`, `api_pos`) VALUES
(1, 'Libération', 'https://newsapi.org/v2/top-headlines?sources=liberation&apiKey=83644cf8558f42ea8a7c94bd4385dbbe', 'fr', 1),
(2, 'Le Monde', 'https://newsapi.org/v2/everything?sources=le-monde&apiKey=0a14f5a6544648f2ac680ea409807f2d', 'fr', 1),
(3, 'National Geographic', 'https://newsapi.org/v2/top-headlines?sources=national-geographic&apiKey=4a1c39e657c74e2ba04c3a5cdef68fe5', 'en', 2),
(4, 'The Times of India', 'https://newsapi.org/v2/top-headlines?sources=the-times-of-india&apiKey=83644cf8558f42ea8a7c94bd4385dbbe', 'en', 2),
(5, 'BBC News', 'https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=0a14f5a6544648f2ac680ea409807f2d', 'en', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(250) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `api_numbers` varchar(1125) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mail`, `mdp`, `api_numbers`) VALUES
(1, 'Thomas', 'oumar.thomas1998@gmail.com', '548723cea2899944af5f1d02c7bbc61afdb152d1', 'a:1:{i:0;s:19:\"National Geographic\";}'),
(2, 'Neferest', 'abdellah@gmail.com', '9f6eb8a9ac0634067994c87088959810b2ec8984', 'a:5:{i:0;s:11:\"Libération\";i:1;s:8:\"Le Monde\";i:2;s:19:\"National Geographic\";i:3;s:18:\"The Times of India\";i:4;s:8:\"BBC News\";}'),
(3, 'neferest001', 'abdellahsaq@gmail.com', '9f6eb8a9ac0634067994c87088959810b2ec8984', 'a:4:{i:0;s:11:\"Libération\";i:1;s:19:\"National Geographic\";i:2;s:18:\"The Times of India\";i:3;s:8:\"BBC News\";}'),
(4, 'Neferest', 'ab@gmail.com', '9f6eb8a9ac0634067994c87088959810b2ec8984', 'a:5:{i:0;s:8:\"Le Monde\";i:1;s:18:\"The Times of India\";i:2;s:19:\"National Geographic\";i:3;s:11:\"Libération\";i:4;s:8:\"BBC News\";}'),
(5, 'Jul', 'jul@jul.com', '18a6de6a0925c55116694e1a03e79c0c06251723', 'a:1:{i:0;s:8:\"Le Monde\";}'),
(6, 'toto', 'toto@toto.fr', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 'a:0:{}'),
(7, 'John', 'johndoe@gmail.com', 'a51dda7c7ff50b61eaea0444371f4a6a9301e501', 'a:2:{i:0;s:18:\"The Times of India\";i:1;s:8:\"BBC News\";}'),
(8, 'tomi', 'tom@tom.com', '1d5f29d807ee33b3f42481108436c7026584cb3d', 'a:1:{i:0;s:19:\"National Geographic\";}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
