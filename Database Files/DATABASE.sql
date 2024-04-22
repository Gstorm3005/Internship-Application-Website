-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 07:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `offer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `application_progress` enum('step1','step2','step3','step4','step5','step6') NOT NULL,
  `cv` mediumblob NOT NULL,
  `motivation_letter` mediumblob NOT NULL,
  `internship_agreement` mediumblob NOT NULL,
  `validation_sheet` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`offer_id`, `user_id`, `student_id`, `application_progress`, `cv`, `motivation_letter`, `internship_agreement`, `validation_sheet`) VALUES
(1, 1, 1, 'step6', '', '', '', ''),
(2, 2, 1, 'step5', '', '', '', ''),
(3, 3, 1, 'step2', '', '', '', ''),
(4, 4, 1, 'step3', '', '', '', ''),
(5, 5, 1, 'step4', '', '', '', ''),
(6, 6, 1, 'step5', '', '', '', ''),
(7, 7, 1, 'step1', '', '', '', ''),
(8, 8, 1, 'step3', '', '', '', ''),
(9, 9, 1, 'step5', '', '', '', ''),
(10, 10, 1, 'step6', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `activity_sector` char(50) NOT NULL,
  `NB_CESI_interns_accepted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `name`, `activity_sector`, `NB_CESI_interns_accepted`) VALUES
(1, 'Microsoft', 'software engineering', 2),
(2, 'Sony', 'game developement', 1),
(3, 'Algerie telecom', 'cyber security', 4),
(4, 'OOREDOO', 'Networking', 3),
(5, 'ExxonMobil', 'mobile developement', 2);

-- --------------------------------------------------------

--
-- Table structure for table `deleguate`
--

CREATE TABLE `deleguate` (
  `user_id` int(11) NOT NULL,
  `deleguate_id` int(11) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `name` char(50) NOT NULL,
  `surname` char(50) NOT NULL,
  `center` char(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deleguate`
--

INSERT INTO `deleguate` (`user_id`, `deleguate_id`, `permission`, `name`, `surname`, `center`, `login`, `password`, `location_id`) VALUES
(1, 1, '\"login\",\"home\",\"logout\",\"aboutus\",\"StudentofferPage\"', 'Marigold', 'Hill', 'Algiers', 'Marigold_Hill7988@tonsy.org', 'Marigold_Hill', 11),
(3, 2, '\"login\",\"home\",\"logout\",\"aboutus\",\"manage\",\"managecompanies\",\"addcom\",\"delcom\",\"updcom\"', 'Marvin', 'Ring', 'Algiers', 'Marvin_Ring1184@supun.biz', 'Marvin_Ring', 7),
(11, 6, '\"login\",\"home\",\"logout\",\"aboutus\",\"manage\",\"managedeleguates\",\"adddel\",\"deldel\",\"upddel\"', 'Carrie', 'Fenton', 'Oran', 'Carrie_Fenton7435@nickia.com', 'Carrie_Fenton', 2),
(13, 7, '\"login\",\"home\",\"logout\",\"aboutus\",\"manage\",\"manageoffers\",\"addoff\",\"deloff\",\"updoff\",\"managepilots\",\"addpil\",\"delpil\",\"updpil\"', 'Florence', 'Kelly', 'Oran', 'Florence_Kelly126@cispeto.com', 'Florence_Kelly', 2),
(21, 3, '\"login\",\"home\",\"logout\",\"aboutus\",\"manage\",\"managestudents\",\"addstu\",\"delstu\",\"updstu\"', 'Denny', 'Collins', 'Algiers', 'Denny_Collins7660@qater.org', 'Denny_Collin', 11),
(22, 4, '\"login\",\"home\",\"logout\",\"aboutus\",\"manage\",\"managepilots\",\"addpil\",\"delpil\",\"updpil\"', 'Abbey', 'Dale', 'Algiers', 'Abbey_Dale2740@iatim.tech', 'Abbey_Dale', 8),
(23, 5, '\"login\",\"home\",\"logout\",\"aboutus\",\"manage\",\"manageoffers\",\"addoff\",\"deloff\",\"updoff\"', 'Dalia', 'Hobson', 'Algiers', 'Dalia_Hobson1394@joiniaa.com', 'Dalia_Hobson', 7),
(24, 8, '\"login\",\"home\",\"logout\",\"aboutus\",\"manage\",\"managepilots\",\"addpil\",\"delpil\",\"updpil\",\"managecompanies\",\"addcom\",\"delcom\",\"updcom\"', 'Emmanuelle', 'Shaw', 'Oran', 'Emmanuelle_Shaw5394@famism.biz', 'Emmanuelle_Shaw', 2),
(25, 9, '\"login\",\"home\",\"logout\",\"aboutus\",\"manage\",\"managestudents\",\"addstu\",\"delstu\",\"updstu\",\"managecompanies\",\"addcom\",\"delcom\",\"updcom\"', 'Britney', 'Talbot', 'Oran', 'Britney_Talbot6699@guentu.biz', 'Britney_Talbot', 2),
(26, 10, '\"login\",\"home\",\"logout\",\"aboutus\",\"manage\",\"managestudents\",\"addstu\",\"delstu\",\"updstu\",\"manageoffers\",\"addoff\",\"deloff\",\"updoff\"', 'Alexa', 'Riley', 'Oran', 'Alexa_Riley2665@bungar.biz', 'Alexa_Riley', 2);

-- --------------------------------------------------------

--
-- Table structure for table `internshipoffer`
--

CREATE TABLE `internshipoffer` (
  `offer_id` int(11) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `duration` int(11) NOT NULL,
  `compensation_basis` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `NB_places_offered` int(11) NOT NULL,
  `promotion_type` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internshipoffer`
--

INSERT INTO `internshipoffer` (`offer_id`, `skills`, `duration`, `compensation_basis`, `date`, `NB_places_offered`, `promotion_type`, `adress`, `company_id`) VALUES
(1, 'Networking', 3, '', '2022-04-01', 5, 'A1', 'Blida', 4),
(2, 'mobile developement', 3, '', '2022-04-15', 6, 'A1', 'Strasbourg', 5),
(3, 'mobile developement', 3, '', '2022-04-17', 3, 'A2', 'Strasbourg', 5),
(4, 'cyber security', 3, '', '2022-04-19', 4, 'A2', 'Oran', 3),
(5, 'software engineering', 3, '', '2022-04-11', 5, 'A3', 'Berlin', 2),
(6, 'Networking', 3, '', '2022-04-10', 6, 'A3', 'Blida', 4),
(7, 'game developement', 3, '', '2022-04-11', 2, 'A4', 'Algiers', 1),
(8, 'game developement', 3, '', '2022-04-13', 3, 'A4', 'Algiers', 1),
(9, 'game developement', 3, '', '2022-04-29', 4, 'A5', 'Algiers', 1),
(10, 'cyber security', 3, '', '2022-04-20', 6, 'A5', 'Oran', 3),
(11, 'Networking', 3, '', '2022-04-26', 3, 'A1', 'Blida', 4),
(12, 'mobile developement', 3, '', '2022-04-22', 2, 'A1', 'Strasbourg', 5),
(13, 'mobile developement', 3, '', '2022-04-24', 4, 'A2', 'Strasbourg', 5),
(14, 'cyber security', 3, '', '2022-04-15', 6, 'A2', 'Oran', 3),
(15, 'Networking', 3, '', '2022-04-04', 5, 'A3', 'Blida', 4),
(16, 'software engineering', 3, '', '2022-04-02', 4, 'A3', 'Berlin', 2),
(17, 'game developement', 3, '', '2022-04-22', 3, 'A4', 'Algiers', 1),
(18, 'cyber security', 3, '', '2022-04-22', 4, 'A4', 'Oran', 3),
(19, 'game developement', 3, '', '2022-04-10', 3, 'A5', 'Algiers', 1),
(20, 'software engineering', 3, '', '2022-04-09', 2, 'A5', 'Berlin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `located`
--

CREATE TABLE `located` (
  `location_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `located`
--

INSERT INTO `located` (`location_id`, `company_id`) VALUES
(1, 1),
(2, 3),
(3, 5),
(4, 2),
(6, 1),
(7, 3),
(8, 4),
(10, 2),
(11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `city` char(50) NOT NULL,
  `country` char(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `city`, `country`, `postal_code`) VALUES
(1, 'Paris', 'France', '75000'),
(2, 'Oran', 'Algeria', '31019'),
(3, 'Strasbourg', 'France', '77000'),
(4, 'Berlin', 'Germany', '10115'),
(5, 'Cologne', 'Germany', '50677'),
(6, 'New york', 'USA', '10001'),
(7, 'Tizi ouzou', 'Algeria', '15000'),
(8, 'Blida', 'Algeria', '09000'),
(9, 'Washinton', 'USA', '20001'),
(10, 'Toulouse', 'France', '31000'),
(11, 'Algiers', 'Algeria', '16000');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `year`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'A5');

-- --------------------------------------------------------

--
-- Table structure for table `promotionpilot`
--

CREATE TABLE `promotionpilot` (
  `user_id` int(11) NOT NULL,
  `pilot_id` int(11) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `name` char(50) NOT NULL,
  `surname` char(50) NOT NULL,
  `center` char(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `promotion_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotionpilot`
--

INSERT INTO `promotionpilot` (`user_id`, `pilot_id`, `rating`, `name`, `surname`, `center`, `login`, `password`, `company_id`, `promotion_id`, `location_id`) VALUES
(27, 1, '5', 'Jamie', 'Clarkson', 'Algiers', 'Jamie_Clarkson2979@deavo.com', 'Jamie_Clarkson', 5, 1, 11),
(28, 2, '4', 'Johnathan', 'Furnell', 'Algiers', 'Johnathan_Furnell9454@gembat.biz', 'Johnathan_Furnell', 4, 2, 8),
(29, 3, '3', 'Owen', 'Alldridge', 'Algiers', 'Owen_Alldridge9305@typill.biz', 'Owen_Alldridge', 3, 3, 7),
(30, 4, '1', 'Kurt', 'Smith', 'Algiers', 'Kurt_Smith1697@sheye.org', 'Kurt_Smith', 2, 4, 11),
(31, 5, '2', 'Jamie', 'Holmes', 'Algiers', 'Jamie_Holmes7105@irrepsy.com', 'Jamie_Holmes', 1, 5, 8),
(32, 6, '4', 'William', 'Jackson', 'Oran', 'William_Jackson8769@ovock.tech', 'William_Jackson', 5, 1, 2),
(33, 7, '5', 'Phoebe', 'Edwards', 'Oran', 'Phoebe_Edwards3515@joiniaa.com', 'Phoebe_Edwards', 4, 2, 2),
(34, 8, '2', 'Josh', 'James', 'Oran', 'Josh_James4277@womeona.net', 'Josh_James', 3, 3, 2),
(35, 9, '3', 'Julian', 'Snell', 'Oran', 'Julian_Snell3376@muall.tech', 'Julian_Snell', 2, 4, 2),
(36, 10, '1', 'Julia', 'Chappell', 'Oran', 'Julia_Chappell8597@famism.biz', 'Julia_Chappell', 1, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `user_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `name` char(50) NOT NULL,
  `surname` char(50) NOT NULL,
  `center` char(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `promotion_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`user_id`, `student_id`, `rating`, `name`, `surname`, `center`, `login`, `password`, `company_id`, `promotion_id`, `location_id`) VALUES
(1, 1, '3', 'Marigold', 'Hill', 'Algiers', 'Marigold_Hill7988@tonsy.org', 'Marigold_Hill', 4, 1, 11),
(2, 2, '4', 'Ema', 'Dubois', 'Algiers', 'Ema_Dubois3522@guentu.biz', 'Ema_Dubois', 5, 1, 8),
(3, 3, '3', 'Marvin', 'Ring', 'Algiers', 'Marvin_Ring1184@supunk.biz', 'Marvin_Ring', 5, 2, 7),
(4, 4, '5', 'Savannah', 'James', 'Algiers', 'Savannah_James459@iatim.tech', 'Savannah_James', 3, 2, 11),
(5, 5, '5', 'Wade', 'Whitmore', 'Algiers', 'Wade_Whitmore6230@hourpy.biz', 'Wade_Whitmore', 2, 3, 8),
(6, 6, '4', 'Roger', 'Haines', 'Algiers', 'Roger_Haines9759@deons.tech', 'Roger_Haines', 4, 3, 11),
(7, 7, '3', 'Sebastian', 'Nurton', 'Algiers', 'Sebastian_Nurton6856@ubusive.com', 'Sebastian_Nurton', 1, 4, 8),
(8, 8, '4', 'Evelynn', 'Larkin', 'Algiers', 'Evelynn_Larkin6281@qater.org', 'Evelynn_Larkin', 1, 4, 7),
(9, 9, '3', 'Boris', 'Long', 'Algiers', 'Boris_Long2825@typill.biz', 'Boris_Long', 1, 5, 11),
(10, 10, '5', 'Andrea', 'Oakley', 'Algiers', 'Andrea_Oakley1220@typill.biz', 'Andrea_Oakley', 3, 5, 8),
(11, 11, '4', 'Carrie', 'Fenton', 'Oran', 'Carrie_Fenton7435@nickia.com', 'Carrie_Fenton', 4, 1, 2),
(12, 12, '2', 'Tyler', 'Rycroft', 'Oran', 'Tyler_Rycroft9523@sheye.org', 'Tyler_Rycroft', 5, 1, 2),
(13, 13, '1', 'Florence', 'Kelly', 'Oran', 'Florence_Kelly126@cispeto.com', 'Florence_Kelly', 5, 2, 2),
(14, 14, '3', 'Bree', 'Watson', 'Oran', 'Bree_Watson2282@hourpy.biz', 'Bree_Watson', 3, 2, 2),
(15, 15, '4', 'Hayden', 'Rodgers', 'Oran', 'Hayden_Rodgers8680@naiker.biz', 'Hayden_Rodgers', 4, 3, 2),
(16, 16, '3', 'Tara', 'Judd', 'Oran', 'Tara_Judd9086@cispeto.com', 'Tara_Judd', 2, 3, 2),
(17, 17, '4', 'David', 'Reid', 'Oran', 'David_Reid2562@womeona.net', 'David_Reid', 1, 4, 2),
(18, 18, '3', 'Erin', 'Evans', 'Oran', 'Erin_Evans8659@corti.com', 'Erin_Evans', 3, 4, 2),
(19, 19, '3', 'Nicholas', 'Stubbs', 'Oran', 'Nicholas_Stubbs6880@supunk.biz', 'Nicholas_Stubbs', 1, 5, 2),
(20, 20, '2', 'Aurelia', 'Weatcroft', 'Oran', 'Aurelia_Weatcroft7613@kideod.biz', 'Aurelia_Weatcroft', 2, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `surname` char(50) NOT NULL,
  `center` char(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `surname`, `center`, `login`, `password`, `location_id`) VALUES
(1, 'Marigold', 'Hill', 'Algiers', 'Marigold_Hill7988@tonsy.org', 'Marigold_Hill', 11),
(2, 'Ema', 'Dubois', 'Algiers', 'Ema_Dubois3522@guentu.biz', 'Ema_Dubois', 8),
(3, 'Marvin', 'Ring', 'Algiers', 'Marvin_Ring1184@supunk.biz', 'Marvin_Ring', 7),
(4, 'Savannah', 'James', 'Algiers', 'Savannah_James459@iatim.tech', 'Savannah_James', 11),
(5, 'Wade', 'Whitmore', 'Algiers', 'Wade_Whitmore6230@hourpy.biz', 'Wade_Whitmore', 8),
(6, 'Roger', 'Haines', 'Algiers', 'Roger_Haines9759@deons.tech', 'Roger_Haines', 11),
(7, 'Sebastian', 'Nurton', 'Algiers', 'Sebastian_Nurton6856@ubusive.com', 'Sebastian_Nurton', 8),
(8, 'Evelynn', 'Larkin', 'Algiers', 'Evelynn_Larkin6281@qater.org', 'Evelynn_Larkin', 7),
(9, 'Boris', 'Long', 'Algiers', 'Boris_Long2825@typill.biz', 'Boris_Long', 11),
(10, 'Andrea', 'Oakley', 'Algiers', 'Andrea_Oakley1220@typill.biz', 'Andrea_Oakley', 8),
(11, 'Carrie', 'Fenton', 'Oran', 'Carrie_Fenton7435@nickia.com', 'Carrie_Fenton', 2),
(12, 'Tyler', 'Rycroft', 'Oran', 'Tyler_Rycroft9523@sheye.org', 'Tyler_Rycroft', 2),
(13, 'Florence', 'Kelly', 'Oran', 'Florence_Kelly126@cispeto.com', 'Florence_Kelly', 2),
(14, 'Bree', 'Watson', 'Oran', 'Bree_Watson2282@hourpy.biz', 'Bree_Watson', 2),
(15, 'Hayden', 'Rodgers', 'Oran', 'Hayden_Rodgers8680@naiker.biz', 'Hayden_Rodgers', 2),
(16, 'Tara', 'Judd', 'Oran', 'Tara_Judd9086@cispeto.com', 'Tara_Judd', 2),
(17, 'David', 'Reid', 'Oran', 'David_Reid2562@womeona.net', 'David_Reid', 2),
(18, 'Erin', 'Evans', 'Oran', 'Erin_Evans8659@corti.com', 'Erin_Evans', 2),
(19, 'Nicholas', 'Stubbs', 'Oran', 'Nicholas_Stubbs6880@supunk.biz', 'Nicholas_Stubbs', 2),
(20, 'Aurelia', 'Weatcroft', 'Oran', 'Aurelia_Weatcroft7613@kideod.biz', 'Aurelia_Weatcroft', 2),
(21, 'Denny', 'Collins', 'Algiers', 'Denny_Collins7660@qater.org', 'Denny_Collins', 11),
(22, 'Abbey', 'Dale', 'Algiers', 'Abbey_Dale2740@iatim.tech', 'Abbey_Dale', 8),
(23, 'Dalia', 'Hobson', 'Algiers', 'Dalia_Hobson1394@joiniaa.com', 'Dalia_Hobson', 7),
(24, 'Emmanuelle', 'Shaw', 'Oran', 'Emmanuelle_Shaw5394@famism.biz', 'Emmanuelle_Shaw', 2),
(25, 'Britney', 'Talbot', 'Oran', 'Britney_Talbot6699@guentu.biz', 'Britney_Talbot', 2),
(26, 'Alexa', 'Riley', 'Oran', 'Alexa_Riley2665@bungar.biz', 'Alexa_Riley', 2),
(27, 'Jamie', 'Clarkson', 'Algiers', 'Jamie_Clarkson2979@deavo.com', 'Jamie_Clarkson', 11),
(28, 'Johnathan', 'Furnell', 'Algiers', 'Johnathan_Furnell9454@gembat.biz', 'Johnathan_Furnell', 8),
(29, 'Owen', 'Alldridge', 'Algiers', 'Owen_Alldridge9305@typill.biz', 'Owen_Alldridge', 7),
(30, 'Kurt', 'Smith', 'Algiers', 'Kurt_Smith1697@sheye.org', 'Kurt_Smith', 11),
(31, 'Jamie', 'Holmes', 'Algiers', 'Jamie_Holmes7105@irrepsy.com', 'Jamie_Holmes', 8),
(32, 'William', 'Jackson', 'Oran', 'William_Jackson8769@ovock.tech', 'William_Jackson', 2),
(33, 'Phoebe', 'Edwards', 'Oran', 'Phoebe_Edwards3515@joiniaa.com', 'Phoebe_Edwards', 2),
(34, 'Josh', 'James', 'Oran', 'Josh_James4277@womeona.net', 'Josh_James', 2),
(35, 'Julian', 'Snell', 'Oran', 'Julian_Snell3376@muall.tech', 'Julian_Snell', 2),
(36, 'Julia', 'Chappell', 'Oran', 'Julia_Chappell8597@famism.biz', 'Julia_Chappell', 2),
(37, 'Nadir', 'ZAMOUCHE', 'Algiers', 'Nadir.ZAMOUCHE.dz@viacesi.fr', 'Nadir_ZAMOUCHE', 11),
(38, 'Mohammed', 'GUELLATI', 'Algiers', 'Mohammed.GUELLATI.dz@viacesi.fr', 'Mohammed_GUELLATI', 11),
(39, 'Ilyes', 'MERAKEB', 'Oran', 'Ilyes.MERAKEB.dz@viacesi.fr', 'Ilyes_MERAKEB', 2),
(40, 'Nabil', 'TALEB', 'Oran', 'Nabil.TALEB.dz@viacesi.fr', 'Nabil_TALEB', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`offer_id`,`user_id`,`student_id`),
  ADD KEY `Apply_Student0_FK` (`user_id`,`student_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `deleguate`
--
ALTER TABLE `deleguate`
  ADD PRIMARY KEY (`user_id`,`deleguate_id`),
  ADD KEY `Deleguate_Location0_FK` (`location_id`),
  ADD KEY `deleguate_id` (`deleguate_id`);

--
-- Indexes for table `internshipoffer`
--
ALTER TABLE `internshipoffer`
  ADD PRIMARY KEY (`offer_id`),
  ADD KEY `InternshipOffer_Company_FK` (`company_id`);

--
-- Indexes for table `located`
--
ALTER TABLE `located`
  ADD PRIMARY KEY (`location_id`,`company_id`),
  ADD KEY `Located_Company0_FK` (`company_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `promotionpilot`
--
ALTER TABLE `promotionpilot`
  ADD PRIMARY KEY (`user_id`,`pilot_id`),
  ADD KEY `PromotionPilot_Company0_FK` (`company_id`),
  ADD KEY `PromotionPilot_Promotion1_FK` (`promotion_id`),
  ADD KEY `PromotionPilot_Location2_FK` (`location_id`),
  ADD KEY `pilot_id` (`pilot_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`user_id`,`student_id`),
  ADD KEY `Student_Company0_FK` (`company_id`),
  ADD KEY `Student_Promotion1_FK` (`promotion_id`),
  ADD KEY `Student_Location2_FK` (`location_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `User_Location_FK` (`location_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `deleguate`
--
ALTER TABLE `deleguate`
  MODIFY `deleguate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `internshipoffer`
--
ALTER TABLE `internshipoffer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `promotionpilot`
--
ALTER TABLE `promotionpilot`
  MODIFY `pilot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
