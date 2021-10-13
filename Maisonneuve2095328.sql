-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 12, 2021 at 03:19 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Maisonneuve2095328`
--

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaiss` date NOT NULL,
  `ville_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `phone`, `email`, `datenaiss`, `ville_id`, `created_at`, `updated_at`) VALUES
(2, 'Neha Kassulke', '281-428-4867', 'jordane39@gmail.com', '1992-12-16', 3, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(3, 'Frederick Labadie', '954-788-1878', 'welch.amalia@gmail.com', '2020-02-10', 6, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(4, 'Catherine Bergnaum', '+1-424-982-3867', 'soledad.howell@bahringer.com', '1974-09-05', 14, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(5, 'Sierra Haag', '1-443-858-6668', 'aileen80@yahoo.com', '1991-09-30', 12, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(6, 'Prof. Carley Thompson I', '+1.516.209.2376', 'lloyd68@yahoo.com', '1976-10-13', 13, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(7, 'Claudia Mante DDS', '+1 (559) 598-0495', 'vesta.kuhic@hotmail.com', '2020-11-15', 15, '2021-09-04 06:14:13', '2021-09-11 18:00:50'),
(8, 'Katharina Bednar', '937-692-5183', 'connor42@hotmail.com', '2011-08-28', 12, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(10, 'Reese Goyette', '820-276-2014', 'jaquelin.bashirian@hotmail.com', '1986-07-16', 14, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(11, 'Renee Heaney Sr.', '678.646.7278', 'kessler.maegan@yahoo.com', '2002-12-16', 8, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(12, 'Dr. Wilber Hettinger', '1-903-662-7854', 'pasquale.mertz@gmail.com', '1992-03-01', 6, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(13, 'Sheila Schoen', '585.455.1382', 'abshire.raina@gmail.com', '1974-11-25', 8, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(14, 'Clementine Cruickshank', '1-270-620-4729', 'simonis.carlotta@yahoo.com', '1975-09-13', 4, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(15, 'Craig Beer', '1-775-339-4633', 'rhea.jakubowski@reilly.com', '1998-07-18', 7, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(16, 'Megane Williamson II', '234.424.4059', 'nolan.israel@marvin.com', '2005-07-29', 4, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(17, 'Angelica Senger IV', '1-940-387-8898', 'obreitenberg@gleichner.com', '1995-08-16', 1, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(18, 'Brionna Casper', '+1.380.509.2108', 'dennis.kutch@prosacco.com', '2000-04-26', 15, '2021-09-04 06:14:13', '2021-09-12 07:43:37'),
(19, 'Dena Jacobi', '602.398.0353', 'kulas.clovis@hotmail.com', '2004-11-02', 3, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(20, 'Dayna Torp', '+1-425-413-3010', 'welch.eunice@gmail.com', '1978-03-21', 8, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(21, 'Randal Beier III', '276.348.9755', 'eliezer67@yahoo.com', '2008-02-10', 14, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(22, 'Jess Gorczany', '650-414-4857', 'effertz.eloy@langworth.net', '2008-07-19', 12, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(23, 'Dante Kovacek', '1-269-266-9737', 'janelle.roberts@willms.com', '2016-08-08', 11, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(24, 'Lia Klocko', '(845) 291-7201', 'brooke32@bayer.com', '1992-11-17', 13, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(25, 'Berneice Upton V', '(732) 741-8813', 'vanessa47@herman.com', '2021-06-26', 1, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(26, 'Prof. Stephany Lebsack', '831-337-4651', 'rice.jana@hartmann.org', '1993-01-13', 4, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(27, 'Leonora Reichel', '1-726-580-1342', 'imcglynn@yahoo.com', '2007-02-23', 2, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(28, 'Jace Toy', '+1-601-691-2561', 'wava.brekke@yahoo.com', '1995-02-16', 12, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(29, 'Prof. Kassandra Spinka DVM', '234-351-0367', 'rosamond35@gmail.com', '1971-03-04', 8, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(30, 'Javon Denesik', '(985) 762-7666', 'okon.hellen@ondricka.com', '1974-08-25', 13, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(31, 'Mr. Tevin McDermott', '+1.972.521.1604', 'karolann.jacobs@boehm.com', '2018-02-12', 3, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(32, 'Dr. German Corwin Sr.', '+1.283.918.9762', 'qeichmann@gmail.com', '2013-03-18', 6, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(33, 'Lorine Bashirian', '(828) 881-2906', 'zbaumbach@cronin.biz', '1985-02-18', 8, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(34, 'Cydney Vandervort III', '+1-435-861-9605', 'chet.russel@hotmail.com', '1987-11-12', 2, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(35, 'Dylan Kris', '1-209-642-7567', 'margie44@mraz.com', '1982-06-10', 14, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(36, 'Hillard O\'Hara Jr.', '+17798323744', 'herman89@yahoo.com', '1988-10-17', 8, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(37, 'Helga Padberg', '812.658.0574', 'kwalker@bauch.net', '2002-05-19', 2, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(38, 'Dr. Clemens Bailey Jr.', '+1.218.486.9143', 'rbeer@yahoo.com', '2000-07-28', 15, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(39, 'Dale Berge', '+1 (331) 442-6963', 'nhoeger@yahoo.com', '2003-05-08', 8, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(40, 'Miss Litzy Hane', '1-813-723-3932', 'maryse97@hotmail.com', '1977-05-16', 14, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(41, 'Salvatore Stanton', '+1-351-324-9857', 'elliott53@hotmail.com', '1999-02-10', 4, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(42, 'Miss Makayla Lynch DVM', '(681) 636-5600', 'effertz.don@gmail.com', '1998-01-03', 6, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(43, 'Fatima Mueller IV', '1-203-998-1775', 'corkery.kathlyn@denesik.com', '1982-01-19', 5, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(44, 'Abner Bins', '1-559-599-1407', 'gbartoletti@langosh.com', '1988-05-08', 15, '2021-09-04 06:14:13', '2021-09-12 07:54:06'),
(45, 'Jenifer Cartwright', '283-830-6950', 'fisher.bette@senger.com', '1974-04-16', 15, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(46, 'Lyda Trantow', '770.416.4526', 'brennan99@gmail.com', '2005-10-22', 8, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(47, 'Prof. Coy Corkery IV', '+1.270.626.4409', 'bwilkinson@collier.com', '1991-08-21', 4, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(48, 'Eino Thiel', '+16517055309', 'lavern.beer@blanda.com', '2004-03-31', 11, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(49, 'Vernon Fisher', '1-605-635-1365', 'nedra85@bradtke.com', '2018-07-26', 5, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(50, 'Prof. Gilda Wisozk MD', '1-928-417-7421', 'odell.paucek@hotmail.com', '2004-01-14', 14, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(51, 'Miss Carissa Beatty', '252.678.2966', 'connelly.walton@gmail.com', '1994-11-12', 9, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(52, 'Juvenal Metz', '+1-661-713-8530', 'okohler@gmail.com', '1975-01-22', 2, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(53, 'Mrs. Kaylee Grant', '651.544.6565', 'sschmidt@hotmail.com', '1989-08-05', 7, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(54, 'Ms. Alaina Zulauf', '+1 (747) 417-9395', 'elfrieda.okeefe@gmail.com', '1973-01-25', 3, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(55, 'Levi Kutch', '+1 (765) 883-9349', 'turner.angus@gmail.com', '2012-04-20', 7, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(56, 'Darrell Lehner', '+1.312.905.3225', 'colby29@feest.net', '2009-03-12', 5, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(57, 'Tate Jones', '689-271-4615', 'malinda00@rohan.com', '2020-12-30', 7, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(58, 'Kellie Dickens', '+1 (475) 959-0935', 'bradtke.aurelio@lehner.net', '1990-07-01', 3, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(59, 'Darrion Weissnat I', '+1 (272) 595-5500', 'henry.mccullough@mayert.org', '1991-06-27', 9, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(60, 'Retha Romaguera', '+1 (504) 855-3879', 'fsimonis@renner.biz', '2003-12-09', 5, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(61, 'Daphnee Armstrong', '1-405-416-9015', 'maryse.jaskolski@larkin.com', '1992-04-12', 8, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(62, 'Doyle Raynor', '(281) 742-4385', 'annalise.willms@hotmail.com', '2006-06-18', 15, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(63, 'Edmond Lueilwitz', '281-633-1785', 'mlynch@hotmail.com', '2021-02-08', 13, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(64, 'Cullen Prohaska', '1-929-623-1861', 'antonetta.schaefer@gmail.com', '2009-10-03', 7, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(65, 'Dr. Cecelia Stroman', '820-855-3589', 'keeley.murray@block.biz', '2011-12-09', 7, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(66, 'Freda Block', '(520) 996-1901', 'duncan86@hotmail.com', '1996-07-28', 6, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(67, 'Brenna Ruecker', '878.663.8909', 'gussie.mills@ohara.com', '2005-06-10', 7, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(68, 'Malvina Nitzsche', '1-424-631-3913', 'josiah85@botsford.com', '1989-06-24', 8, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(69, 'Hassan Hammes', '+1.640.936.9993', 'champlin.alayna@gmail.com', '1984-02-29', 11, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(70, 'Tiara Baumbach', '+1.757.922.8489', 'purdy.agustin@bins.org', '2018-04-15', 3, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(71, 'Frida Ebert', '1-240-201-8174', 'marks.alize@moen.net', '1981-06-10', 14, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(72, 'Liam Abbott', '934-221-5112', 'victor29@kuhn.com', '2020-11-01', 6, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(73, 'Breanne Greenfelder IV', '+1-202-876-7012', 'fleta.abernathy@gmail.com', '1988-12-13', 6, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(74, 'Dashawn Casper', '(773) 761-7517', 'mkertzmann@hotmail.com', '1991-04-22', 10, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(75, 'Prof. Douglas Altenwerth', '1-607-676-9302', 'treutel.edwardo@prosacco.biz', '1974-02-19', 13, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(76, 'Rowan Lowe MD', '445-838-3185', 'kendall55@roberts.info', '1977-12-24', 1, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(77, 'Kellen Runolfsdottir', '859.914.9994', 'giovani23@hotmail.com', '2010-01-14', 2, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(78, 'Elian Parisian', '1-814-297-8248', 'ystamm@hotmail.com', '1993-04-22', 14, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(79, 'Aliza Skiles III', '435-328-0412', 'corbin40@schuppe.com', '1998-12-02', 15, '2021-09-04 06:14:13', '2021-09-12 08:18:07'),
(80, 'Lucas Christiansen', '732-712-7496', 'zkoelpin@schmeler.com', '2011-01-27', 12, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(81, 'Prof. Bethany D\'Amore III', '+1.424.713.9310', 'megane06@walsh.com', '1993-07-30', 5, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(82, 'Prof. Percy Mills', '706-978-4020', 'susanna.wyman@hotmail.com', '1994-09-23', 4, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(83, 'Alia Towne', '862.731.2946', 'qcormier@yahoo.com', '1979-11-06', 1, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(84, 'Amparo Fritsch', '253.609.4837', 'kkreiger@sporer.org', '1971-11-02', 15, '2021-09-04 06:14:13', '2021-09-12 07:45:02'),
(85, 'Prof. Nathaniel Boehm', '+1-458-212-8371', 'jessika60@yahoo.com', '1992-03-08', 11, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(86, 'Sydnie Huel', '+1-954-822-5603', 'gabrielle.kuvalis@yahoo.com', '1991-10-15', 8, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(87, 'Cassidy Krajcik Jr.', '225.367.3506', 'crona.vada@feil.com', '1972-03-04', 2, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(88, 'Zackary Johnson', '804.628.1552', 'plueilwitz@lesch.org', '2003-05-09', 6, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(89, 'Mr. Boris Block Jr.', '520-560-0536', 'sschroeder@gmail.com', '2008-12-02', 3, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(90, 'Miss Tess Ernser', '+1-817-328-1557', 'percival.robel@hotmail.com', '1986-11-02', 2, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(91, 'Jacinthe Wilkinson', '+1.725.974.6013', 'jerrold.raynor@upton.org', '2020-06-13', 8, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(92, 'Darryl Welch', '+1-640-735-4397', 'bednar.verna@dooley.com', '1981-06-12', 15, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(93, 'Mr. Quinn Leffler DDS', '417.830.1967', 'ritchie.ervin@funk.com', '1990-11-07', 2, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(94, 'Dashawn Wehner', '330-217-5270', 'rose.crist@gmail.com', '1973-10-30', 6, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(95, 'Dr. Cory Marvin III', '(913) 437-1107', 'smetz@lesch.org', '1979-02-07', 11, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(96, 'Briana Kutch', '602.454.0043', 'karina.pouros@gmail.com', '1993-07-08', 12, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(97, 'Maci McClure', '1-206-585-6517', 'leta72@gmail.com', '2015-10-19', 5, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(98, 'Ms. Cathrine Becker PhD', '1-716-207-5090', 'earline06@hotmail.com', '2003-01-12', 5, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(99, 'Charlene Schultz', '(970) 494-8107', 'runolfsdottir.vallie@gmail.com', '1992-03-24', 13, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(100, 'Odie Walsh', '704.319.6328', 'llakin@wyman.com', '2002-05-22', 2, '2021-09-04 06:14:13', '2021-09-04 06:14:13'),
(101, 'Djaouida Kharchi', '5146218952', 'Djaouida.kharchi@gmail.com', '2021-09-08', 15, '2021-09-11 05:03:55', '2021-09-11 05:03:55'),
(103, 'Issam Mahdid', '5149557942', 'mahdid.issam@gmail.com', '2021-09-14', 15, '2021-09-11 05:42:53', '2021-09-11 05:42:53'),
(106, 'Ayoub Mahdid', '5146218952', 'Djaouida.kharchi@gmail.com', '2021-09-02', 15, '2021-09-11 07:09:16', '2021-09-11 07:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_03_163141_create_villes_table', 1),
(6, '2021_09_03_163154_create_etudiants_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `villes`
--

CREATE TABLE `villes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `villes`
--

INSERT INTO `villes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kundehaven', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(2, 'Goyetteview', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(3, 'North Shanelleshire', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(4, 'Cummerataberg', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(5, 'Jacquesport', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(6, 'Earleneburgh', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(7, 'West Einarbury', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(8, 'Danielstad', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(9, 'Cathystad', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(10, 'Rethaville', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(11, 'North Abbie', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(12, 'Port Kaileystad', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(13, 'Bergnaumfurt', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(14, 'North Borismouth', '2021-09-04 06:06:52', '2021-09-04 06:06:52'),
(15, 'New Angieport', '2021-09-04 06:06:52', '2021-09-04 06:06:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etudiants_ville_id_foreign` (`ville_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_ville_id_foreign` FOREIGN KEY (`ville_id`) REFERENCES `villes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
