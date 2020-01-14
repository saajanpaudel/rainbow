-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2019 at 01:28 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rainbow_airlines`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `contents` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `contents`) VALUES
(1, 'Rainbow Nepal Airlines is one of the leading airline companies of Nepal. This airlines was established in the year 2010 with an objective of providing quality and modern services to customers. The company invites anyone to join for the ultimate experiences in a country that is rich in its nature as well as cultural diversity. The company aims at providing sound travel services and tour facilities as well.'),
(3, 'It is located in the heart of Nepal; Pokhara city. We are dedicated to excellence, your satisfaction is our priority.'),
(17, 'More than 90 percent of Nepal\'s area is covered by mountains. Moreover, Nepal is also landlocked. Without the use of air transport, remote places are cut off from point of view of tourism, food supply and other essential requirement. There are places in Nepal where there are airports, where even though that particular district does not have even a decent road to use bicycles.\r\n\r\nThe transport system being the main factor for the economic development of the country, and NAC is a strong vehicle for national integration and has proved to be a symbol of freedom movement, both within and outside the country. It is the pride of Nepal.'),
(18, 'Currently Rainbow Airlines is running 2 Airbus A330-200 viz: Airbus A330-200 -9N ALY known as Annapurna and Airbus A330-200 -9N ALZ known as Makalu. It is a 274 seated aircraft with 256 Economy class and 18 Business class.'),
(19, 'Tara Air is the newest and biggest airline service provider in the Nepalese mountains. This company has started business with the mission of helping develop the rural Nepal. Accordingly, our service is concentrated in the hills and mountains of the country from the Far East to the Far West.'),
(20, 'We can arrange Arial sightseeing tours, heli trek tours for people who have limited time or elderly, who are not able to trek due to physical conditions.'),
(21, '\r\nCargo transportation is the physical process of transportaing  commodities and mercandise goods and cargo. The term shipping originally referred to transport by sea, but is extended in  American English to refer to transport by land or air (International English: \"carriage\") as well. \" logistic\", a term borrowed from the military environment, is also fashionably used in the same sense. Our aircrafts are currently based in Surkhet for Cargo Transportation to places like Humla, Rara, Bajura and Dolpa in Province No.6. ');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `ausername` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `ausername`, `name`, `password`) VALUES
(1, 'saajan', 'saajan', 'f5b43cd3d2e001f8abde1a99cb4b53b0a897cc33'),
(13, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(15, 'sundar', 'Sundar Gurung', '333a3f71d3ad6e01fc953c4fa06bc1f3cd014910'),
(16, 'rabin', 'Rabin Subedi', '6bd3f43fd5b2b5689bccc97f6d09e3eb28307598'),
(17, 'anupam', 'Anupam Shah', '1b271a68bbe8fd523ee3750303f9258db14a5109'),
(18, 'aniketr', 'Aniket Ramdam', 'd310c8d60a0a012eec20de6ee6bebb25b7abf25d'),
(19, 'bikal', 'Bikal Poudel', '7afa818f74de2d579f10764b5e606d7ca5d8c94c');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `message`, `email`, `Date`) VALUES
(99, 'nitesh', 'hello', 'nitesh@gmail.com', '2019-08-05'),
(103, 'saajan', 'hi', 'unish@gmail.com', '2019-08-11'),
(104, 'Sundar Gurung', 'I am very happy with the customer services you provide', 'sundar@gmail.com', '2019-08-11'),
(106, 'anie', 'hello', 'nazaax7@gmail.com', '2019-08-22'),
(108, 'Saajan Paudel', 'Hello Rainbow! I\'m very happy with the services you provide. Keep it up! ', 'saajanpaudel18@gmail.com', '2019-09-03'),
(109, 'Saajan Paudel', 'hi', 'nazaax7@gmail.com', '2019-09-13'),
(110, 'Saajanpaudel18@gmail.com', '5678987jhj', 'nazaax7@gmail.com', '2019-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `email`, `username`, `password`, `phone`) VALUES
(31, 'Saajan Paudel', 'Nayagaun-15, Pokhara', 'Saajanpaudel18@gmail.com', 'saajan', 'f5b43cd3d2e001f8abde1a99cb4b53b0a897cc33', 9816695947),
(32, 'Aniket Ramdam', 'Prative Tole-15, Pokhara', 'aniketramdam1998@gmail.com', 'aniket', 'd310c8d60a0a012eec20de6ee6bebb25b7abf25d', 9846272827),
(33, 'Sabin Devkota', 'Malepatan-5, Pokhara', 'sabindev34@gmail.com', 'sabin', '5c87879f9cc6875a3854ee137ac3436deb1ad3d7', 9827472392),
(34, 'Keshav Prasad Paudel', 'Arukharka-7, Syangja', 'keshav84@hotmail.com', 'keshav', '2ab70542c05cad92571c31555fe23e6190384014', 9827645845),
(36, 'Richa Thapa', 'Sangam Marga-15, Pokhara', 'richathegreat@gmail.com', 'richa', '6abfa67492625d865847950d3425e386ecc192ea', 9866427435),
(79, 'Dilasha Pokhrel', 'Mahatgauda, Pokhara', 'dilupkrl@gmail.com', 'dilasha', '7ad29dada5869d974d5c134d19abb198fe5f31c1', 9825674324),
(80, 'Anie Ruth', 'Siddhartha Chowk, Pokhara', 'anie@gmail.com', 'anie', '1af64f18ffa79ab9791c0c27eff1b286c599180e', 9874567324),
(81, 'Rachana Pokhrel', 'Rastrabank Chowk, Pokhara', 'rachana@gmail.com', 'rachana', '0a304278d0ad57760113c7f6d50b26a5f6bc725d', 9846281783),
(82, 'Sandhya Sigdel', 'Newroad, Kathmandu', 'sandhya56@outlook.com', 'sandhya', '794b0cd116149a76b1fb223bb6beb0e7a306a7c6', 9812345665),
(86, 'Saajan Paudel', 'Pokhara', 'nazaax7@gmail.com', 'admin12', 'd033e22ae348aeb5660fc2140aec35850c4da997', 14312342314),
(93, 'Badri Sharma', 'Kathmandu', 'badri@gmail.com', 'badri', 'ac60c37d87f0f6cdeb8b5cdaaf71c8801c4384d8', 9876545678),
(94, 'Mahesh GC', 'Ktm', 'mahesh@gmail.com', 'mahesh', '6a890e1065a1d4e8df9dcf1d9a2c9c740bbcf8aa', 9876543456);

-- --------------------------------------------------------

--
-- Table structure for table `exploremore`
--

CREATE TABLE `exploremore` (
  `id` int(11) NOT NULL,
  `contents` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exploremore`
--

INSERT INTO `exploremore` (`id`, `contents`) VALUES
(1, 'Upcoming features of this website will appear in this page! Please stay updated :)'),
(11, 'After the success of Visit Nepal Year 1998 and Nepal Tourism Year 2011, the Tourism Board of Nepal introduced Visit Nepal Campaign 2020. The Campaign was announced in 2015 to be held in 2018 but was later postponed to 2020.  \r\n\r\nThe mainstream media publicized Nepal as utterly devastated by the earthquake in 2015 and failed to show that Kathmandu with other major cities was almost intact. The earthquake significantly affected the inflow of tourists in 2016 as the number of tourists halved compared with previous year.'),
(12, 'The year 2017 saw the inflow of tourists bounce back to the pre-earthquake numbers. The year 2017 saw 940,218 foreigners enter the country. Some came for recreational activities while some visited to support the people of affected areas and with the motive to help the country economically by visiting Nepal.'),
(13, '\r\nThe Visit Nepal 2020 campaign was scheduled in 2018 to promote that Nepal was a safe place to travel and only 12 of 75 districts were affected by the earthquake. The crawling upgrading activity of Tribhuwan International Airport and delayed construction of Gautam Buddha International Airport in Lumbini and improper transportation infrastructure led the Tourism Board to postpone the campaign to 2020.'),
(14, 'Nepal is fifth among the Top 10 countries to visit in the world and number one in Best Valued Destination in the World. Why wouldnâ€™t they be, Nepal boasts pristine natural beauty, sky-high Himalayas Range and endless culture and traditions spread out all over the country.'),
(15, '<br> TREKKING AND MOUNTAIN CLIMBING <br> One of the reasons to visit Nepal is for trekking and climbing mountains. You can climb to the top of the World by scaling and conquering the Everest, the highest peak in the World. Trekking comes with viewing the natural beauty of Himalayas and knowing the lifestyle of people living in altitudes above 4000 meters. <br> <br> CULTURE TRADITION AND UNESCO WORLD HERITAGE SITES <br> Nepal is also rich in culture and traditions. There are countless ethnic groups each following their distinct art and religions. This diverse traditions and lifestyle is a prominent feature of Nepalese people.\r\n<br>\r\nNepal boasts in cultural diversity, and this vast tradition showcases in the heritage and temples. In Kathmandu alone, there are 7 UNESCO World Heritage sites including Pashupatinath, Boudhanath and Durbar Squares. <br> BIODIVERSITY OF BIRDS AND WATCHING ENDANGERED ANIMALS <br> <br>Nepal is not only about trekking and mountain climbing. Nepal boasts a wide range of animals and plants, some found just in Nepal. Nepal has 852 species of birds and bird watching has evolved into a sought out activity of tourists. Nepal also homes several endangered species such as the Bengal Tiger, One Horned Rhinoceros, Bengal Fox, Red Panda and the elusive Snow Leopard. ');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `feedtitle` varchar(255) NOT NULL,
  `feedback` text DEFAULT NULL,
  `feeddate` datetime DEFAULT current_timestamp(),
  `feedstatus` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `username`, `feedtitle`, `feedback`, `feeddate`, `feedstatus`) VALUES
(6, 'saajan', 'lags', 'Website runs very slow even if my internet speed is fast', '2019-08-11', 1),
(8, 'saajan', 'Booking issue', 'I have not received my flight confirmation message yet! Please make it fast.\r\n\r\nRegards, Saajan Paudel', '2019-09-03', 1),
(9, 'saajan', 'Use of apostrophe', 'Using apostrophe is not possible! It is not woking.', '2019-09-03', 1),
(10, 'badri', 'hello', 'hi', '2019-09-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `originair` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `destinationair` varchar(255) NOT NULL,
  `flightname` varchar(255) DEFAULT NULL,
  `totalseats` int(11) NOT NULL,
  `availableseats` int(11) NOT NULL,
  `departdate` date DEFAULT NULL,
  `departtime` time DEFAULT NULL,
  `arrivedate` date DEFAULT NULL,
  `arrivetime` time DEFAULT NULL,
  `duration` time DEFAULT NULL,
  `fare` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `origin`, `originair`, `destination`, `destinationair`, `flightname`, `totalseats`, `availableseats`, `departdate`, `departtime`, `arrivedate`, `arrivetime`, `duration`, `fare`) VALUES
(1, 'Pokhara', 'Buddha Air', 'Kathmandu', 'Kathmandu Airlines', 'BA20F', 30, 25, '2019-08-03', '13:00:00', '2019-08-03', '12:30:00', '00:30:00', 3000),
(2, 'Pokhara', 'Nepal Airlines', 'Siddharthanagar', 'Gautam Buddha International Airport', 'GB201', 40, 40, '2019-09-01', '11:00:00', '2019-09-01', '12:00:00', '01:00:00', 5000),
(3, 'Birgunj', 'Birgunj Air', 'Pokhara', 'Nepal Airlines', 'BA2015', 50, 50, '2019-08-17', '13:00:00', '2019-08-17', '15:00:00', '02:00:00', 5000),
(4, 'Pokhara', 'Rainbow Airlines', 'Kathmandu', 'Swayambhu Air', 'RA1805', 30, 30, '2019-09-07', '11:00:00', '2019-09-07', '11:25:00', '00:25:00', 3500),
(6, 'Kathmandu', 'Simrik Air', 'Pokhara', 'Nepal Airlines', 'SA1911', 25, 25, '2019-09-07', '16:00:00', '2019-09-07', '04:40:00', '00:40:00', 2750),
(7, 'Janakpur', 'Janaki Airlines', 'Mustang', 'Himalayan Airlines', 'HA1012', 20, 20, '2019-09-08', '13:25:00', '2019-09-08', '14:25:00', '01:00:00', 6000),
(8, 'Janakpur', 'Janaki Airlines', 'Pokhara', 'Rainbow Airlines', 'JA2018', 40, 40, '2019-09-08', '15:15:00', '2019-09-08', '16:05:00', '00:50:00', 4000),
(9, 'Pokhara', 'Buddha Airlines', 'Mugu', 'Rara Air', 'Rara365', 35, 35, '2019-09-09', '07:00:00', '2019-09-09', '08:30:00', '01:30:00', 7000),
(10, 'Kathmandu, Nepal', 'Tribhuvan International Airport', 'San Francisco, California, USA', 'Golden Gate Airlines', 'SF1770', 60, 59, '2019-09-10', '19:00:00', '2019-09-11', '02:00:00', '07:00:00', 97800),
(11, 'Kathmandu, Nepal', 'Tribhuvan International Airport', 'Honkong, China', 'Fly HK Air', 'Hk559', 50, 50, '2019-09-10', '14:00:00', '2019-09-10', '19:00:00', '05:00:00', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `image_text` text DEFAULT NULL,
  `frontimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`, `frontimage`) VALUES
(25, '../imgs/uploads/page0001.jpg', 'saajan', 'admin/imgs/uploads/page0001.jpg'),
(26, '../imgs/uploads/2stupa.jpg', 'World Peace Pagoda, Pokhara', 'admin/imgs/uploads/2stupa.jpg'),
(27, '../imgs/uploads/3rara.jpg', 'Rara Lake, Mugu', 'admin/imgs/uploads/3rara.jpg'),
(28, '../imgs/uploads/4gorkha.jpg', 'Gorkha Durbar', 'admin/imgs/uploads/4gorkha.jpg'),
(29, '../imgs/uploads/5lumbini.jpg', 'Lumbini', 'admin/imgs/uploads/5lumbini.jpg'),
(30, '../imgs/uploads/6ranimahal.jpg', 'Rani Mahal, Palpa', 'admin/imgs/uploads/6ranimahal.jpg'),
(31, '../imgs/uploads/7saswatdham.jpg', 'Saswatdham (CG)', 'admin/imgs/uploads/7saswatdham.jpg'),
(32, '../imgs/uploads/10nagarkot.jpg', 'Nagarkot', 'admin/imgs/uploads/10nagarkot.jpg'),
(33, '../imgs/uploads/11mustang.jpg', 'Mustang', 'admin/imgs/uploads/11mustang.jpg'),
(34, '../imgs/uploads/aero1.jpg', 'Fly with us safely!', 'admin/imgs/uploads/aero1.jpg'),
(43, '../imgs/uploads/colorful.jpg', 'Colorful like Rainbow', 'admin/imgs/uploads/colorful.jpg'),
(44, '../imgs/uploads/interior.jpg', 'Royal Interiors', 'admin/imgs/uploads/interior.jpg'),
(45, '../imgs/uploads/interior1.jpg', 'Feel like home', 'admin/imgs/uploads/interior1.jpg'),
(46, '../imgs/uploads/tour.jpg', 'Enjoy your tour with Rainbow', 'admin/imgs/uploads/tour.jpg'),
(47, '../imgs/uploads/album.jpeg', 'Create your new album', 'admin/imgs/uploads/album.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `id` int(11) NOT NULL,
  `sponser` varchar(255) DEFAULT NULL,
  `sponserid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `passcity` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `contactname` varchar(255) NOT NULL,
  `contactphone` bigint(20) DEFAULT NULL,
  `bookingid` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`id`, `sponser`, `sponserid`, `name`, `dob`, `gender`, `passcity`, `nationality`, `contactname`, `contactphone`, `bookingid`, `status`) VALUES
(60, 'Saajan Paudel', 31, 'Sundar Gurung', '1995-07-12', 'Male', '438945267', 'Nepali', 'Peter White', 9876543456, 1, 1),
(61, 'Saajan Paudel', 31, 'Amisha Thapa', '1997-10-28', 'Female', '772383832', 'Others', 'Peter White', 9876543456, 1, 2),
(74, 'Saajan Paudel', 31, 'Anish Thapa', '1997-10-28', 'Male', '772383832', 'Others', 'Peter White', 9876543456, 1, 1),
(75, 'Saajan Paudel', 31, 'Sabin Pokhrel', '1999-07-06', 'Male', '555334454', 'Chinese ', 'Hopey ', 987654321, 1, 1),
(76, 'Saajan Paudel', 31, 'Dipesh Baral', '2001-04-22', 'Male', '345243124', 'Nepali', 'Hopey ', 987654321, 1, 1),
(77, 'Saajan Paudel', 31, 'Prince ', '2001-04-23', 'Male', '154532455', 'Korean', 'Hopey ', 987654321, 1, 2),
(78, 'Saajan Paudel', 31, 'Kamal Paudel', '1995-07-13', 'Male', '7732817392', 'Nepali', 'Saugat Paudel', 9816624428, 10, 1),
(79, 'Saajan Paudel', 31, 'Bimala Paudel', '1996-02-06', 'Female', '4324535334', 'Nepali', 'Saugat Paudel', 9816624428, 10, 0),
(80, 'Badri Sharma', 93, 'Saugat Paudel', '2000-06-13', 'Male', 'dfad3412341234', 'Nepali', 'Badri Sharma', 2222222, 1, 0),
(81, 'Badri Sharma', 93, 'Saajan Paudel', '1998-10-20', 'Male', 'dfsaf3432142134', 'Nepali', 'Badri Sharma', 2222222, 1, 0),
(82, 'Badri Sharma', 93, 'Saugat Paudel', '2019-09-04', 'Male', 'dfad3412341234', 'Nepali', 'Badri Sharma', 2437777777, 1, 0),
(83, 'Badri Sharma', 93, 'Saajan Paudel', '2019-09-23', 'Male', 'dfsaf3432142134', 'Others', 'Badri Sharma', 2437777777, 1, 0),
(84, 'Saajan Paudel', 31, 'saajan', '2000-02-08', 'Male', 'dfad3412341234', 'Others', 'Mahesh', 9876544567, 1, 2),
(85, 'Saajan Paudel', 31, 'nisha', '1999-07-21', 'Female', '3241341234', 'Nepali', 'Mahesh', 9876544567, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`ausername`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- Indexes for table `exploremore`
--
ALTER TABLE `exploremore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `exploremore`
--
ALTER TABLE `exploremore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
