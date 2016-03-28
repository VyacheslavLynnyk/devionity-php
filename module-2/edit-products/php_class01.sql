-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2016 at 12:40 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_class01`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(63) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `vendor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `is_active`, `vendor`) VALUES
(1, 'Alumina, Bellis perennis, Causticum, Collinsonia canadensis, Hy', 'Duis mattis egestas metus. Aenean fermentum.', 681, '', 1, 'Youspansdf'),
(2, 'SILICON DIOXIDE', 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.', 852, '', 0, 'Snaptags'),
(3, 'Baclofen', 'Etiam faucibus cursus urna. Ut tellus. Nulla ut erat id mauris vulputate elementum.', 2534, '', 1, 'Skynoodle'),
(4, 'Ranitidine', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel ', 26, '', 0, 'Quinu'),
(5, 'mycobacterium bovis', 'Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue.', 58, '', 1, 'Jaloo'),
(6, 'Acetaminophen', 'Nunc purus. Phasellus in felis. Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 12, '', 1, 'Voomm'),
(7, 'Ketorolac Tromethamine', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam.', 90, '', 0, 'Edgetag'),
(8, 'ARSENICUM ALBUM', 'Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 43, '', 0, 'Tekfly'),
(9, 'Fentanyl', 'Sed ante. Vivamus tortor.', 19, '', 0, 'Oodoo'),
(10, 'Candida albicans', 'Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc.', 89, '', 0, 'Tagfeed'),
(11, 'TITANIUM DIOXIDE', 'Nulla tellus. In sagittis dui vel nisl. Duis ac nibh.', 47, '', 1, 'Feedfire'),
(12, 'Phenazopyridine Hydrochloride', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', 54, '', 0, 'Feedmix'),
(13, 'CEFOTAXIME', 'Nullam molestie nibh in lectus.', 65, '', 0, 'Pixonyx'),
(14, 'ASPIRIN', 'Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 41, '', 1, 'Kazu'),
(15, 'Acetaminophen', 'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit.', 30, '', 0, 'Edgeify'),
(16, 'Homosalate and Octinoxate and Octisalate and Octocrylene and Ox', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', 79, '', 0, 'Flipstorm'),
(17, 'Doxylamine Succinate, Pseudoephedrine Hydrochloride', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', 80, '', 1, 'Yambee'),
(18, 'Titanium Dioxide', 'Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat. Nulla nisl. Nunc nisl.', 88, '', 1, 'Dynazzy'),
(19, 'Nabumetone', 'Pellentesque ultrices mattis odio. Donec vitae nisi. Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus. Curabitur at ipsum ac ', 57, '', 1, 'Avavee'),
(20, 'Octinoxate', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat. Curabitur gravida nisi at nibh.', 35, '', 0, 'Realbridge'),
(21, 'Naproxen sodium, Pseudoephedrine HCl', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem. Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 89, '', 0, 'Abata'),
(22, 'TRICLOSAN', 'Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 40, '', 1, 'Oozz'),
(23, 'bisoprolol fumarate and hydrochlorothiazide', 'Proin at turpis a pede posuere nonummy. Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliqu', 59, '', 1, 'Zoomzone'),
(24, 'ALCOHOL', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', 27, '', 0, 'Cogidoo'),
(25, 'diphenhydramine citrate, ibuprofen', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 58, '', 1, 'Tagpad'),
(26, 'Carvedilol', 'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit. Nam nulla.', 32, '', 0, 'Dabjam'),
(27, 'dimethicone', 'Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae', 66, '', 1, 'Tagtune'),
(28, 'LIFTING FIRMING DAY FLUID', 'Pellentesque ultrices mattis odio.', 37, '', 1, 'Livepath'),
(29, 'COMFREY PLANT', 'Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 34, '', 0, 'Jabbercube'),
(30, 'Cefazolin', 'Nulla nisl. Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum. In hac habitasse platea dictumst.', 99, '', 0, 'Eamia'),
(31, 'norgestimate and ethinyl estradiol', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus.', 97, '', 1, 'Dynava'),
(32, 'ALCOHOL', 'Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.', 94, '', 1, 'Oyonder'),
(33, 'Fexofenadine Hydrochloride', 'Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. S', 37, '', 1, 'Gabvine'),
(34, 'Galantamine', 'Morbi vel lectus in quam fringilla rhoncus.', 5, '', 0, 'Yadel'),
(35, 'Pramipexole Dihydrochloride', 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.', 44, '', 0, 'Thoughtbeat'),
(36, 'bismuth subsalicylate', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis. Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus. Mauris eni', 23, '', 1, 'Jabberstorm'),
(37, 'Benzocaine', 'Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 29, '', 1, 'Quimba'),
(38, 'Alprazolam', 'Nunc rhoncus dui vel sem. Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus. Pellentesque at nulla. Suspendisse potenti.', 75, '', 0, 'Voolia'),
(39, 'Amoxicillin/Clavulanate Potassium', 'Vestibulum rutrum rutrum neque. Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo.', 59, '', 0, 'Mybuzz'),
(40, 'Venlafaxine Hydrochloride', 'Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices.', 90, '', 0, 'Wikivu'),
(41, 'Diphenhydramine Hydrochloride', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio.', 84, '', 1, 'Thoughtbeat'),
(42, 'Oxaliplatin', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus. Pe', 35, '', 0, 'Twiyo'),
(43, 'hydroxyzine pamoate', 'In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem. Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices ve', 91, '', 0, 'Topicshots'),
(44, 'Loratadine', 'Nam tristique tortor eu pede.', 12, '', 0, 'Cogilith'),
(45, 'White petrolatum', 'Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien ia', 50, '', 0, 'Browseblab'),
(46, 'Octinoxate, Octisalate, Titanium Dioxide, Zinc Oxide', 'Nulla justo. Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis. Sed ante. Vivamus tortor. Duis mattis egestas metus.', 73, '', 0, 'Plajo'),
(47, 'ALCOHOL', 'Nullam porttitor lacus at turpis.', 46, '', 1, 'Photolist'),
(48, 'AVOBENZONE, OCTINOXATE', 'Curabitur gravida nisi at nibh.', 20, '', 0, 'Gigazoom'),
(49, 'PAMIDRONATE DISODIUM', 'In hac habitasse platea dictumst. Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 21, '', 1, 'Trilith'),
(50, 'OXYMETAZOLINE HYDROCHLORIDE', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 56, '', 1, 'Devpulse');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL DEFAULT 'none',
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`) VALUES
(14, 'Litter', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE `products` ADD `edit_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `vendor`;