-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2020 at 04:27 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.3.21-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `w1698509_0`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('v63te25l6v3uvnro3a2b5k9j7pi1c9fc', '123.231.120.138', 1605553310, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353535333331303b),
('rbpi28qth06eh6ko7mpdf6ktqvlb0n7g', '123.231.120.138', 1605553679, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353535333637393b6f7264657249647c733a31353a226f5f35666232636462396537346631223b),
('481doq433vgre3ecspf8db8gdibmeidj', '123.231.120.138', 1605554330, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353535343333303b6f7264657249647c733a31353a226f5f35666232636533323566653261223b),
('ccjgm3fbqh81d05rip1t45fqa60adsvo', '123.231.120.138', 1605554406, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353535343333303b6f7264657249647c733a31353a226f5f35666232643065353732393939223b),
('qbc1ohccbeqm5lajtc7r4pqjq7559spf', '161.74.10.30', 1605561400, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353536313430303b),
('vnk5eg4qdon9u34o3lvqdpo9kqbalmlq', '123.231.84.174', 1607245639, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373234353434303b6f7264657249647c733a31353a226f5f35666363396563333838376431223b636172745f636f6e74656e74737c613a323a7b733a31303a22636172745f746f74616c223b643a3730303b733a343a224e505f32223b613a393a7b733a323a226964223b733a343a224e505f32223b733a363a226d65616c4964223b733a313a2232223b733a353a22696d616765223b733a32313a222f696d616765732f636f6c65736c61772e6a706567223b733a383a226d65616c54797065223b693a323b733a333a22717479223b643a323b733a353a227072696365223b643a3335303b733a343a226e616d65223b733a383a22436f6c65736c6177223b733a363a226974656d4964223b733a343a224e505f32223b733a383a22737562746f74616c223b643a3730303b7d7d),
('5bsoh7f2tj8453ard2bimgp5ci43ij4q', '161.74.10.30', 1607252851, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373235323835303b),
('ouarhmhhruj0vo50bn5nko0o6t9hrstk', '161.74.10.30', 1607252851, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630373235323835303b),
('r4jh85322akdlj6fvnsiimp1pvnk192s', '123.231.87.181', 1608559541, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383535393534313b),
('r2mgqh2g19v90778ibi42lsusduc8jkp', '123.231.87.181', 1608559852, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383535393835323b6f7264657249647c733a31353a226f5f35666530616364366265633434223b),
('4ospelqjfi4lcutceggpjku88jiso9i2', '123.231.87.181', 1608560160, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383536303136303b6f7264657249647c733a31353a226f5f35666530616462333938353432223b636172745f636f6e74656e74737c613a323a7b733a31303a22636172745f746f74616c223b643a313030303b733a333a22445f33223b613a393a7b733a323a226964223b733a333a22445f33223b733a363a226d65616c4964223b733a313a2233223b733a353a22696d616765223b733a32363a222f696d616765732f6d792d70697a7a612d74726561742e6a7067223b733a383a226d65616c54797065223b693a333b733a333a22717479223b643a313b733a353a227072696365223b643a313030303b733a343a226e616d65223b733a31343a224d792050697a7a61205472656174223b733a363a226974656d4964223b733a333a22445f33223b733a383a22737562746f74616c223b643a313030303b7d7d),
('usgqge9v1nb8lgpntfte8dq57v11fnvm', '123.231.87.181', 1608563330, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383536333333303b6f7264657249647c733a31353a226f5f35666530616532633234323765223b636172745f636f6e74656e74737c613a323a7b733a31303a22636172745f746f74616c223b643a313830303b733a333a22445f32223b613a393a7b733a323a226964223b733a333a22445f32223b733a363a226d65616c4964223b733a313a2232223b733a353a22696d616765223b733a32353a222f696d616765732f70697a7a612d70726f6d6f2d322e6a7067223b733a383a226d65616c54797065223b693a333b733a333a22717479223b643a313b733a353a227072696365223b643a313830303b733a343a226e616d65223b733a32383a224c756e63682054696d65204d656469756d2050697a7a61204465616c223b733a363a226974656d4964223b733a333a22445f32223b733a383a22737562746f74616c223b643a313830303b7d7d),
('bsc8u2nd3jhr3t369stls3tf5f6s07qk', '123.231.87.181', 1608565468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383536353436383b6f7264657249647c733a31353a226f5f35666530626239623530366639223b),
('e5isfvhgsvnjl04kv3qtqt8r96qkupvm', '123.231.87.181', 1608565976, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383536353937363b6f7264657249647c733a31353a226f5f35666530626239623530366639223b),
('2q6nl88jk1olq510gmt6fet1adokhmkm', '123.231.87.181', 1608566283, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383536363238333b6f7264657249647c733a31353a226f5f35666530626239623530366639223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a323132303b733a31353a22505f35666530633531633830646632223b613a31323a7b733a323a226964223b733a31353a22505f35666530633531633830646632223b733a363a226d65616c4964223b733a313a2234223b733a353a22696d616765223b733a32333a222f696d616765732f7665672d64656c696768742e6a7067223b733a383a226d65616c54797065223b693a313b733a343a2273697a65223b733a313a2233223b733a333a22717479223b643a313b733a353a227072696365223b643a313432303b733a343a226e616d65223b733a31343a225665676769652044656c69676874223b733a383a22746f7070696e6773223b613a333a7b693a303b733a313a2231223b693a313b733a313a2232223b693a323b733a313a2235223b7d733a31343a22746f7070696e6744657461696c73223b613a333a7b693a303b733a31313a2242656c6c20506570706572223b693a313b733a31343a22437269737020436170736963756d223b693a323b733a383a224d757368726f6f6d223b7d733a363a226974656d4964223b733a31353a22505f35666530633531633830646632223b733a383a22737562746f74616c223b643a313432303b7d733a343a224e505f32223b613a393a7b733a323a226964223b733a343a224e505f32223b733a363a226d65616c4964223b733a313a2232223b733a353a22696d616765223b733a32313a222f696d616765732f636f6c65736c61772e6a706567223b733a383a226d65616c54797065223b693a323b733a333a22717479223b643a323b733a353a227072696365223b643a3335303b733a343a226e616d65223b733a383a22436f6c65736c6177223b733a363a226974656d4964223b733a343a224e505f32223b733a383a22737562746f74616c223b643a3730303b7d7d),
('8jodvf2c3ht9r36debenor011it139u6', '123.231.87.181', 1608566638, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383536363633383b6f7264657249647c733a31353a226f5f35666530633633383662343862223b),
('ubqm0eva9m3jb2aikd0llpbcvbrl2lo9', '123.231.87.181', 1608566664, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383536363633383b6f7264657249647c733a31353a226f5f35666530633633383662343862223b),
('ajapnhirjb0db4p57i41s150ji5h03u5', '161.74.10.30', 1608570582, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383537303538313b),
('n4eupqsuatc4k48ihnbaj4cub5sh1b0e', '161.74.10.30', 1608570582, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383537303538313b),
('qnrulorn7mj2lm08rv846q46fost4obf', '161.74.10.30', 1608570582, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383537303538313b),
('5hse3c6kaskh6iffls3rs6lk6c3cn231', '116.206.246.239', 1608604061, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383630343036313b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a333638303b733a31353a22505f35666531353865313531613238223b613a31323a7b733a323a226964223b733a31353a22505f35666531353865313531613238223b733a363a226d65616c4964223b733a313a2232223b733a353a22696d616765223b733a32313a222f696d616765732f7065707065726f6e692e6a7067223b733a383a226d65616c54797065223b693a313b733a343a2273697a65223b733a313a2233223b733a333a22717479223b643a323b733a353a227072696365223b643a313534303b733a343a226e616d65223b733a393a225065707065726f6e69223b733a383a22746f7070696e6773223b613a333a7b693a303b733a313a2231223b693a313b733a313a2232223b693a323b733a313a2233223b7d733a31343a22746f7070696e6744657461696c73223b613a333a7b693a303b733a31313a2242656c6c20506570706572223b693a313b733a31343a22437269737020436170736963756d223b693a323b733a383a224a616c6170656e6f223b7d733a363a226974656d4964223b733a31353a22505f35666531353865313531613238223b733a383a22737562746f74616c223b643a333038303b7d733a343a224e505f31223b613a393a7b733a323a226964223b733a343a224e505f31223b733a363a226d65616c4964223b733a313a2231223b733a353a22696d616765223b733a32363a222f696d616765732f706f7461746f652d7765646765732e6a7067223b733a383a226d65616c54797065223b693a323b733a333a22717479223b643a323b733a353a227072696365223b643a3330303b733a343a226e616d65223b733a31333a22506f7461746f20576564676573223b733a363a226974656d4964223b733a343a224e505f31223b733a383a22737562746f74616c223b643a3630303b7d7d),
('5tiehjf9v80lg7sigpc4p2od3oav4u0j', '116.206.246.239', 1608603752, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383630333734343b),
('snvkes3e438229me6qdilrh3dnrgr6lj', '116.206.246.239', 1608604365, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383630343336353b6f7264657249647c733a31353a226f5f35666531356161353763303935223b),
('l0ptnlv496j199ki12r5i2nms7sa9t95', '116.206.246.239', 1608604812, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383630343831323b6f7264657249647c733a31353a226f5f35666531356161353763303935223b),
('t36h4hsadu9u19dodeqddgulprok61om', '116.206.246.239', 1608607633, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383630373633333b6f7264657249647c733a31353a226f5f35666531356161353763303935223b),
('h4b5fnd2n9t3k99kug7t4ka4p578v7nj', '116.206.246.239', 1608610845, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383631303834353b6f7264657249647c733a31353a226f5f35666531356161353763303935223b),
('qif1g5n4qjcqme86qqltibmtoko9hh6o', '116.206.246.239', 1608612573, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383631323537333b6f7264657249647c733a31353a226f5f35666531373534383835666639223b),
('l2bb0l8q1o29m7uhsed98jijuapqgd53', '116.206.246.239', 1608612875, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383631323837353b6f7264657249647c733a31353a226f5f35666531373534383835666639223b),
('hdj5i4h8p7cn7p7027ptaspnuqeh70t6', '116.206.246.239', 1608613348, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383631333334383b6f7264657249647c733a31353a226f5f35666531373534383835666639223b),
('dfk4gtts61g426ak1lhntlvvgj0tmqho', '116.206.246.239', 1608613904, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383631333930343b6f7264657249647c733a31353a226f5f35666531373534383835666639223b636172745f636f6e74656e74737c613a323a7b733a31303a22636172745f746f74616c223b643a313830303b733a333a22445f32223b613a393a7b733a323a226964223b733a333a22445f32223b733a363a226d65616c4964223b733a313a2232223b733a353a22696d616765223b733a32353a222f696d616765732f70697a7a612d70726f6d6f2d322e6a7067223b733a383a226d65616c54797065223b693a333b733a333a22717479223b643a313b733a353a227072696365223b643a313830303b733a343a226e616d65223b733a32383a224c756e63682054696d65204d656469756d2050697a7a61204465616c223b733a363a226974656d4964223b733a333a22445f32223b733a383a22737562746f74616c223b643a313830303b7d7d),
('7vjlmbun5f1jsfpo7dajso3hr1c42mbu', '111.223.139.213', 1608614048, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383631333830313b6f7264657249647c733a31353a226f5f35666531376666386462313130223b),
('p4arq3mebla9ehbbqtfkq9c19b1stdbj', '116.206.246.239', 1608614206, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383631343230363b6f7264657249647c733a31353a226f5f35666531383062326335393664223b),
('nn1vk3aufg34d5mpf1s8ngrbrp1nide6', '116.206.246.239', 1608614516, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383631343531363b6f7264657249647c733a31353a226f5f35666531383062326335393664223b636172745f636f6e74656e74737c613a323a7b733a31303a22636172745f746f74616c223b643a333936303b733a31353a22505f35666531383235383464633338223b613a31323a7b733a323a226964223b733a31353a22505f35666531383235383464633338223b733a363a226d65616c4964223b733a313a2232223b733a353a22696d616765223b733a32313a222f696d616765732f7065707065726f6e692e6a7067223b733a383a226d65616c54797065223b693a313b733a343a2273697a65223b733a313a2232223b733a333a22717479223b643a333b733a353a227072696365223b643a313332303b733a343a226e616d65223b733a393a225065707065726f6e69223b733a383a22746f7070696e6773223b613a353a7b693a303b733a313a2231223b693a313b733a313a2232223b693a323b733a313a2233223b693a333b733a313a2234223b693a343b733a313a2235223b7d733a31343a22746f7070696e6744657461696c73223b613a353a7b693a303b733a31313a2242656c6c20506570706572223b693a313b733a31343a22437269737020436170736963756d223b693a323b733a383a224a616c6170656e6f223b693a333b733a393a2250696e656170706c65223b693a343b733a383a224d757368726f6f6d223b7d733a363a226974656d4964223b733a31353a22505f35666531383235383464633338223b733a383a22737562746f74616c223b643a333936303b7d7d),
('j81053v3i5ghesajkt9ht41fuf629vde', '116.206.246.239', 1608614872, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383631343837323b6f7264657249647c733a31353a226f5f35666531383062326335393664223b636172745f636f6e74656e74737c613a323a7b733a31303a22636172745f746f74616c223b643a333936303b733a31353a22505f35666531383235383464633338223b613a31323a7b733a323a226964223b733a31353a22505f35666531383235383464633338223b733a363a226d65616c4964223b733a313a2232223b733a353a22696d616765223b733a32313a222f696d616765732f7065707065726f6e692e6a7067223b733a383a226d65616c54797065223b693a313b733a343a2273697a65223b733a313a2232223b733a333a22717479223b643a333b733a353a227072696365223b643a313332303b733a343a226e616d65223b733a393a225065707065726f6e69223b733a383a22746f7070696e6773223b613a353a7b693a303b733a313a2231223b693a313b733a313a2232223b693a323b733a313a2233223b693a333b733a313a2234223b693a343b733a313a2235223b7d733a31343a22746f7070696e6744657461696c73223b613a353a7b693a303b733a31313a2242656c6c20506570706572223b693a313b733a31343a22437269737020436170736963756d223b693a323b733a383a224a616c6170656e6f223b693a333b733a393a2250696e656170706c65223b693a343b733a383a224d757368726f6f6d223b7d733a363a226974656d4964223b733a31353a22505f35666531383235383464633338223b733a383a22737562746f74616c223b643a333936303b7d7d),
('ttlnust42c6jfb1m135nljpfrk5mu8fe', '116.206.246.239', 1608614872, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383631343837323b6f7264657249647c733a31353a226f5f35666531383062326335393664223b636172745f636f6e74656e74737c613a323a7b733a31303a22636172745f746f74616c223b643a333936303b733a31353a22505f35666531383235383464633338223b613a31323a7b733a323a226964223b733a31353a22505f35666531383235383464633338223b733a363a226d65616c4964223b733a313a2232223b733a353a22696d616765223b733a32313a222f696d616765732f7065707065726f6e692e6a7067223b733a383a226d65616c54797065223b693a313b733a343a2273697a65223b733a313a2232223b733a333a22717479223b643a333b733a353a227072696365223b643a313332303b733a343a226e616d65223b733a393a225065707065726f6e69223b733a383a22746f7070696e6773223b613a353a7b693a303b733a313a2231223b693a313b733a313a2232223b693a323b733a313a2233223b693a333b733a313a2234223b693a343b733a313a2235223b7d733a31343a22746f7070696e6744657461696c73223b613a353a7b693a303b733a31313a2242656c6c20506570706572223b693a313b733a31343a22437269737020436170736963756d223b693a323b733a383a224a616c6170656e6f223b693a333b733a393a2250696e656170706c65223b693a343b733a383a224d757368726f6f6d223b7d733a363a226974656d4964223b733a31353a22505f35666531383235383464633338223b733a383a22737562746f74616c223b643a333936303b7d7d),
('0831pihvp567prtpm77mdbne6fipkpke', '161.74.10.30', 1608619907, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383631393930363b),
('q4h1d2qpluod55nkrufhaeheud9krscm', '161.74.10.30', 1608619907, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383631393930363b),
('k5fh8ctnlm7b05cnkk61kq0rn74mkq1c', '161.74.10.30', 1608621106, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383632313130363b),
('b63ff1e46c1ea0tddb52gcichqga3u9a', '161.74.10.30', 1608621106, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630383632313130363b);

-- --------------------------------------------------------

--
-- Table structure for table `MealDeals`
--

CREATE TABLE `MealDeals` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `pizzaCount` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MealDeals`
--

INSERT INTO `MealDeals` (`id`, `name`, `slug`, `price`, `description`, `pizzaCount`, `image`) VALUES
(1, 'Lunch Time Large Pizza Deal', 'lunch-time-large-pizza-deal', '2500.00', 'Buy 2 Large Pizza and get Rs 800 OFF', 2, '/images/pizza-promo-1.jpg'),
(2, 'Lunch Time Medium Pizza Deal', 'lunch-time-medium-pizza-deal', '1800.00', 'Buy 2 Medium pizza and get Rs 500 OFF', 2, '/images/pizza-promo-2.jpg'),
(3, 'My Pizza Treat', 'my-pizza-treat', '1000.00', 'Buy Small pizza with potatoes wedges and Pepsi with Rs 200 off', 1, '/images/my-pizza-treat.jpg'),
(4, 'Family Pizza Deal', 'family-pizza-deal', '4000.00', '2 medium-size pizzas with potato wedges, coleslaw and Pepsi\r\n', 2, '/images/family-pizza-deal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `NonPizzas`
--

CREATE TABLE `NonPizzas` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `type` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `NonPizzas`
--

INSERT INTO `NonPizzas` (`id`, `name`, `slug`, `type`, `price`, `image`) VALUES
(1, 'Potato Wedges', 'potato-wedges', 1, '300.00', '/images/potatoe-wedges.jpg'),
(2, 'Coleslaw', 'coleslaw', 1, '350.00', '/images/coleslaw.jpeg'),
(3, 'Chicken Wings', 'chicken-wings', 1, '500.00', '/images/chicken-wings.jpg'),
(4, 'Chocolate Lava Cake', 'chocolate-lava-cake', 1, '250.00', '/images/chocolate-lava-cake.png'),
(5, 'Pepsi', 'pepsi', 2, '150.00', '/images/pepsi.jpg'),
(6, 'Seven Up', 'seven-up', 2, '150.00', '/images/sevenup7j.jpg'),
(8, 'Mountain Dew', 'mountain-dew', 2, '150.00', '/images/mountioundew.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderMealDeals`
--

CREATE TABLE `orderMealDeals` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `mealDealId` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `OrderNonPizzas`
--

CREATE TABLE `OrderNonPizzas` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `nonPizzaId` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `OrderPizzas`
--

CREATE TABLE `OrderPizzas` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `pizzaId` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `OrderPizzaToppings`
--

CREATE TABLE `OrderPizzaToppings` (
  `id` int(11) NOT NULL,
  `orderPizzaId` int(11) NOT NULL,
  `pizzaToppingId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `id` int(11) NOT NULL,
  `orderId` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNo` varchar(15) NOT NULL,
  `deliveryAddress` varchar(100) NOT NULL,
  `orderCreatedAt` time NOT NULL,
  `orderDeliveredAt` time DEFAULT NULL,
  `orderDate` date DEFAULT NULL,
  `orderTotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PizzaPrices`
--

CREATE TABLE `PizzaPrices` (
  `id` int(11) NOT NULL,
  `pizzaId` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PizzaPrices`
--

INSERT INTO `PizzaPrices` (`id`, `pizzaId`, `size`, `price`) VALUES
(3, 1, 1, '400.00'),
(4, 1, 2, '800.00'),
(5, 1, 3, '1200.00'),
(6, 2, 1, '420.00'),
(7, 2, 2, '820.00'),
(8, 2, 3, '1220.00'),
(9, 3, 1, '450.00'),
(10, 3, 2, '850.00'),
(11, 3, 3, '1250.00'),
(12, 4, 1, '350.00'),
(13, 4, 2, '700.00'),
(14, 4, 3, '1100.00'),
(15, 5, 1, '500.00'),
(16, 5, 2, '900.00'),
(17, 5, 3, '1300.00');

-- --------------------------------------------------------

--
-- Table structure for table `Pizzas`
--

CREATE TABLE `Pizzas` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Pizzas`
--

INSERT INTO `Pizzas` (`id`, `name`, `slug`, `description`, `image`) VALUES
(1, 'Margherita', 'margherita', 'Topped with a combination of chicken bacon, chicken sausage, BBQ chicken and spicy chicken with a double layer of mozzarella cheese, layered with mozzarella cheese.', '/images/margherita.jpg'),
(2, 'Pepperoni', 'pepperoni', 'Australian beef pepperoni in pizza sauce with a double layer of mozzarella cheese.', '/images/pepperoni.jpg'),
(3, 'Meat Delight', 'meat-delight', 'A combination of spicy chicken and kotchchi sausage meat with crunchy onions and jalapenos placed on a layer of cream cheese and a layer of mozzarella.', '/images/chicken-delight.jpg'),
(4, 'Veggie Delight', 'veggie-delight', 'Mushrooms, tomatoes, onions, black olives and bell peppers with a double layer of mozzarella cheese', '/images/veg-delight.jpg'),
(5, 'Breakfast Special', 'breakfast-special', 'Spicy veggie masala & paneer accompanied with pineapple, topped with a double layer of mozzarella cheese', '/images/breakfast-delight.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Toppings`
--

CREATE TABLE `Toppings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `type` int(2) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Toppings`
--

INSERT INTO `Toppings` (`id`, `name`, `slug`, `type`, `price`) VALUES
(1, 'Bell Pepper', 'bell-pepper', 1, '100.00'),
(2, 'Crisp Capsicum', 'crisp-capsicum', 1, '120.00'),
(3, 'Jalapeno', 'jalapeno', 1, '100.00'),
(4, 'Pineapple', 'pineapple', 1, '80.00'),
(5, 'Mushroom', 'mushroom', 1, '100.00'),
(6, 'Onion', 'onion', 1, '100.00'),
(7, 'Paprika', 'paprika', 1, '100.00'),
(13, 'Fresh Tomatoes', 'fresh-tomatoes', 1, '100.00'),
(14, 'Black Olives', 'black-olives', 1, '150.00'),
(15, 'Extra Cheese', 'extra-cheese', 1, '150.00'),
(16, 'BBQ Chicken', 'bbq-chicken', 2, '200.00'),
(17, 'Devils Chicken', 'devils-chcicken', 2, '220.00'),
(18, 'Mutton Keema', 'mutton-keema', 2, '250.00'),
(19, 'Tandoori Chicken', 'tandoori-chicken', 2, '250.00'),
(20, 'Chicken Sausages', 'chicken-sausages', 2, '250.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD KEY `ci_session_timestamp` (`timestamp`);

--
-- Indexes for table `MealDeals`
--
ALTER TABLE `MealDeals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `NonPizzas`
--
ALTER TABLE `NonPizzas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderMealDeals`
--
ALTER TABLE `orderMealDeals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderId` (`orderId`),
  ADD KEY `mealDealId` (`mealDealId`);

--
-- Indexes for table `OrderNonPizzas`
--
ALTER TABLE `OrderNonPizzas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderId` (`orderId`),
  ADD KEY `nonPizzaId` (`nonPizzaId`);

--
-- Indexes for table `OrderPizzas`
--
ALTER TABLE `OrderPizzas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderId` (`orderId`),
  ADD KEY `pizzaId` (`pizzaId`);

--
-- Indexes for table `OrderPizzaToppings`
--
ALTER TABLE `OrderPizzaToppings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderPizzaId` (`orderPizzaId`),
  ADD KEY `PizzaToppingId` (`pizzaToppingId`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `PizzaPrices`
--
ALTER TABLE `PizzaPrices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizzaId` (`pizzaId`);

--
-- Indexes for table `Pizzas`
--
ALTER TABLE `Pizzas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Toppings`
--
ALTER TABLE `Toppings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `MealDeals`
--
ALTER TABLE `MealDeals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `NonPizzas`
--
ALTER TABLE `NonPizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orderMealDeals`
--
ALTER TABLE `orderMealDeals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `OrderNonPizzas`
--
ALTER TABLE `OrderNonPizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `OrderPizzas`
--
ALTER TABLE `OrderPizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `OrderPizzaToppings`
--
ALTER TABLE `OrderPizzaToppings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PizzaPrices`
--
ALTER TABLE `PizzaPrices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `Pizzas`
--
ALTER TABLE `Pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Toppings`
--
ALTER TABLE `Toppings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderMealDeals`
--
ALTER TABLE `orderMealDeals`
  ADD CONSTRAINT `orderMealDeals_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `Orders` (`id`),
  ADD CONSTRAINT `orderMealDeals_ibfk_2` FOREIGN KEY (`mealDealId`) REFERENCES `MealDeals` (`id`);

--
-- Constraints for table `OrderNonPizzas`
--
ALTER TABLE `OrderNonPizzas`
  ADD CONSTRAINT `OrderNonPizzas_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `Orders` (`id`),
  ADD CONSTRAINT `OrderNonPizzas_ibfk_2` FOREIGN KEY (`nonPizzaId`) REFERENCES `NonPizzas` (`id`);

--
-- Constraints for table `OrderPizzas`
--
ALTER TABLE `OrderPizzas`
  ADD CONSTRAINT `OrderPizzas_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `Orders` (`id`),
  ADD CONSTRAINT `OrderPizzas_ibfk_2` FOREIGN KEY (`pizzaId`) REFERENCES `Pizzas` (`id`);

--
-- Constraints for table `OrderPizzaToppings`
--
ALTER TABLE `OrderPizzaToppings`
  ADD CONSTRAINT `OrderPizzaToppings_ibfk_1` FOREIGN KEY (`orderPizzaId`) REFERENCES `OrderPizzas` (`id`),
  ADD CONSTRAINT `OrderPizzaToppings_ibfk_2` FOREIGN KEY (`pizzaToppingId`) REFERENCES `Toppings` (`id`);

--
-- Constraints for table `PizzaPrices`
--
ALTER TABLE `PizzaPrices`
  ADD CONSTRAINT `PizzaPrices_ibfk_1` FOREIGN KEY (`pizzaId`) REFERENCES `Pizzas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;