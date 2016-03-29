-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2016 at 12:55 
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
  `vendor` varchar(50) NOT NULL,
  `edit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `is_active`, `vendor`, `edit_date`) VALUES
(1, 'asdfa123', 'Duis mattis egestas metus. Aenean fermentum.', 4531, '', 0, 'Yo975', '2016-03-28 22:51:11'),
(2, 'asdf', 'Duis mattis egestas metus. Aenean fermentum.', 69, '', 1, 'Youansdf', '2016-03-27 21:56:36'),
(3, 'Baclofen', 'Etiam faucibus cursus urna. Ut tellus. Nulla ut erat id mauris vulputate elementum.', 2534, '', 1, 'Skynoodle', '2016-03-27 21:56:39'),
(4, 'Ranitidine', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel ', 26, '', 0, 'Quinu', '2016-03-27 21:45:05'),
(5, 'mycobacterium bovis', 'Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue.', 581, '', 1, 'Jaloo', '2016-03-28 21:38:54'),
(6, 'Acetaminophen', 'Nunc purus. Phasellus in felis. Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 12, '', 1, 'Voomm', '2016-03-27 21:45:05'),
(7, 'Ketorolac Tromethamine', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam.', 90, '', 0, 'Edgetag', '2016-03-27 21:45:05'),
(8, 'ARSENICUM ALBUM', 'Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 43, '', 0, 'Tekfly', '2016-03-27 21:45:05'),
(9, 'Fentanyl', 'Sed ante. Vivamus tortor.', 19, '', 0, 'Oodoo', '2016-03-27 21:45:05'),
(10, 'Candida albicans', 'Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc.', 89, '', 0, 'Tagfeed', '2016-03-27 21:45:05'),
(11, 'TITANIUM DIOXIDE', 'Nulla tellus. In sagittis dui vel nisl. Duis ac nibh.', 47, '', 1, 'Feedfire', '2016-03-27 21:45:05'),
(12, 'asdf', 'Duis mattis egestas metus. Aenean fermentum.', 69, '', 1, 'Youspansdf', '2016-03-27 21:45:05'),
(13, 'CEFOTAXIME', 'Nullam molestie nibh in lectus.', 65, '', 0, 'Pixonyx', '2016-03-27 21:45:05'),
(14, 'ASPIRIN', 'Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 41, '', 1, 'Kazu', '2016-03-27 21:45:05'),
(15, 'Acetaminophen', 'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit.', 30, '', 0, 'Edgeify', '2016-03-27 21:45:05'),
(16, 'Homosalate and Octinoxate and Octisalate and Octocrylene and Ox', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', 79, '', 0, 'Flipstorm', '2016-03-27 21:45:05'),
(17, 'Doxylamine Succinate, Pseudoephedrine Hydrochloride', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', 80, '', 1, 'Yambee', '2016-03-27 21:45:05'),
(18, 'Titanium Dioxide', 'Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat. Nulla nisl. Nunc nisl.', 88, '', 1, 'Dynazzy', '2016-03-27 21:45:05'),
(19, 'Nabumetone', 'Pellentesque ultrices mattis odio. Donec vitae nisi. Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus. Curabitur at ipsum ac ', 57, '', 1, 'Avavee', '2016-03-27 21:45:05'),
(20, 'Octinoxate', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat. Curabitur gravida nisi at nibh.', 35, '', 0, 'Realbridge', '2016-03-27 21:45:05'),
(21, 'Naproxen sodium, Pseudoephedrine HCl', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem. Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 89, '', 0, 'Abata', '2016-03-27 21:45:05'),
(22, 'TRICLOSAN', 'Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 40, '', 1, 'Oozz', '2016-03-27 21:45:05'),
(23, 'bisoprolol fumarate and hydrochlorothiazide', 'Proin at turpis a pede posuere nonummy. Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliqu', 59, '', 1, 'Zoomzone', '2016-03-27 21:45:05'),
(24, 'ALCOHOL', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', 27, '', 0, 'Cogidoo', '2016-03-27 21:45:05'),
(25, 'diphenhydramine citrate, ibuprofen', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 58, '', 1, 'Tagpad', '2016-03-27 21:45:05'),
(26, 'Carvedilol', 'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit. Nam nulla.', 32, '', 0, 'Dabjam', '2016-03-27 21:45:05'),
(27, 'dimethicone', 'Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae', 66, '', 1, 'Tagtune', '2016-03-27 21:45:05'),
(28, 'LIFTING FIRMING DAY FLUID', 'Pellentesque ultrices mattis odio.', 37, '', 1, 'Livepath', '2016-03-27 21:45:05'),
(29, 'COMFREY PLANT', 'Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 34, '', 0, 'Jabbercube', '2016-03-27 21:45:05'),
(30, 'Cefazolin', 'Nulla nisl. Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum. In hac habitasse platea dictumst.', 99, '', 0, 'Eamia', '2016-03-27 21:45:05'),
(31, 'norgestimate and ethinyl estradiol', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus.', 97, '', 1, 'Dynava', '2016-03-27 21:45:05'),
(32, 'ALCOHOL', 'Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.', 94, '', 1, 'Oyonder', '2016-03-27 21:45:05'),
(33, 'Fexofenadine Hydrochloride', 'Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. S', 37, '', 1, 'Gabvine', '2016-03-27 21:45:05'),
(34, 'Galantamine', 'Morbi vel lectus in quam fringilla rhoncus.', 5, '', 0, 'Yadel', '2016-03-27 21:45:05'),
(35, 'Pramipexole Dihydrochloride', 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.', 44, '', 0, 'Thoughtbeat', '2016-03-27 21:45:05'),
(36, 'bismuth subsalicylate', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis. Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus. Mauris eni', 23, '', 1, 'Jabberstorm', '2016-03-27 21:45:05'),
(37, 'Benzocaine', 'Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 29, '', 1, 'Quimba', '2016-03-27 21:45:05'),
(38, 'Alprazolam', 'Nunc rhoncus dui vel sem. Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus. Pellentesque at nulla. Suspendisse potenti.', 75, '', 0, 'Voolia', '2016-03-27 21:45:05'),
(39, 'Amoxicillin/Clavulanate Potassium', 'Vestibulum rutrum rutrum neque. Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo.', 59, '', 0, 'Mybuzz', '2016-03-27 21:45:05'),
(40, 'Venlafaxine Hydrochloride', 'Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices.', 90, '', 0, 'Wikivu', '2016-03-27 21:45:05'),
(41, 'Diphenhydramine Hydrochloride', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio.', 84, '', 1, 'Thoughtbeat', '2016-03-27 21:45:05'),
(42, 'Oxaliplatin', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus. Pe', 35, '', 0, 'Twiyo', '2016-03-27 21:45:05'),
(43, 'hydroxyzine pamoate', 'In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem. Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices ve', 91, '', 0, 'Topicshots', '2016-03-27 21:45:05'),
(44, 'Loratadine', 'Nam tristique tortor eu pede.', 12, '', 0, 'Cogilith', '2016-03-27 21:45:05'),
(45, 'White petrolatum', 'Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien ia', 50, '', 0, 'Browseblab', '2016-03-27 21:45:05'),
(46, 'Octinoxate, Octisalate, Titanium Dioxide, Zinc Oxide', 'Nulla justo. Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis. Sed ante. Vivamus tortor. Duis mattis egestas metus.', 73, '', 0, 'Plajo', '2016-03-27 21:45:05'),
(47, 'ALCOHOL', 'Nullam porttitor lacus at turpis.', 46, '', 1, 'Photolist', '2016-03-27 21:45:05'),
(48, 'AVOBENZONE, OCTINOXATE', 'Curabitur gravida nisi at nibh.', 20, '', 0, 'Gigazoom', '2016-03-27 21:45:05'),
(49, 'PAMIDRONATE DISODIUM', 'In hac habitasse platea dictumst. Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 21, '', 1, 'Trilith', '2016-03-27 21:45:05'),
(50, 'OXYMETAZOLINE HYDROCHLORIDE', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 56, '', 1, 'Devpulse', '2016-03-27 21:45:05'),
(51, 'Viktor', 'Duis mattis egestas metus. Aenean fermentum.', 4532, '', 0, 'Youspansdf', '2016-03-30 00:54:13'),
(53, 'ÐÐ¾Ð²Ñ‹Ð¹ Ñ‚Ð¾Ñ€Ð²Ð°ÐµÑ†', 'ÐžÐ¿Ð¸ÑÑÐ»Ð¾Ð²ÐºÐ°', 4000, '/home/img.png', 1, 'ÐÐ¾Ñ€Ð¼Ð°Ð»ÑŒÐ½Ñ‹Ð¹', '2016-03-27 22:01:06'),
(54, 'Admin ', 'Can', 349, '/add', 1, 'LALAL', '2016-03-28 22:50:04'),
(55, 'I can add', 'hehehe', 0, 'eheh ', 0, 'ehehe', '2016-03-28 22:51:57'),
(56, 'd'', desc=''lalala''', '', 34, 'kasdj', 1, 'vasya', '2016-03-29 22:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL DEFAULT 'none',
  `pass` varchar(100) NOT NULL,
  `role` char(5) NOT NULL DEFAULT 'guest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `role`) VALUES
(15, 'Litter', '19c24dbc09cb6ec6ad5a4e1f977425ab', 'user'),
(16, 'admin', 'd3c1b6688ca4aad2ad3a4f315087813a', 'admin'),
(17, 'guest', 'e7432d738ff12f7b1e744d3a20fdc765', 'guest'),
(18, 'asdfasdfasdf', 'e583aec8a2de63e81896bf9aba86cf63', 'guest');

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
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
