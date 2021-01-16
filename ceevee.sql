-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 04:30 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceevee`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `eid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `elocation` varchar(50) NOT NULL,
  `edate` varchar(50) NOT NULL,
  `eabout` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`eid`, `id`, `ename`, `elocation`, `edate`, `eabout`) VALUES
(1, 1, 'ThuyLoi University', 'No. 175 Tay Son', '2019 - 2023', 'Engineers who graduate from TLU can also find themselves to work for construction companies, consultant companies, project management unitsin water sector or hydropower, or become economic, natural resources or social specialistsor lecturers for domestic or international institutes. It is recorded that over ninety percent of TLU graduates can get a good and stable job within their majors after three months since leaving the University.'),
(2, 2, 'ThuyLoi University', 'No. 175 Tay Son', '2019 - 2025', 'A public university under the supervision of Ministry of Agriculture and Rural Development, Thuyloi University is recognized as the leading technical university in the field of water resources. It was founded in 1959 with the first official name Academy of Water Resources and Electricity, and was assigned with main responsibilities for training and research in water resources and hydropower satisfying the country’s needs.'),
(3, 1, 'Tran Nhan Tong High School', 'No. 15 Huong Vien', '2016 - 2019', 'Tran Nhan Tong High School previously was named Thang Long private high school, Trung Vuong 3B School, Bach Mai School, Quynh Mai School, and was established in 1960, locating in Hai Ba Trung district. The area of Tran Nhan Tong High School previously was small and just over 2,000 square meters, located at 15 Huong Vien Street, Hai Ba Trung District, in the middle of a crowded residential area.');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `introduce` varchar(500) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `introduce`, `about`) VALUES
(1, 'Nguyen Nam', 'I am a Vietnamese based web designer creating awesome and effective visual identities for companies of all sizes around the globe. Lets start scrolling and learn more about me.', 'Just over six months ago, I decided I wanted to become a programmer. Now, I’m working as a web developer for a great company. It’s amazing to me how much has changed in such a short amount of time. I get to work with PHP, ReactJS, and a smidge of NodeJS/npm, Ruby on Rails and MySQL. I use git for version control, Foundation for CSS, and MAMP for my PHP development server. I work in the console and minimally, vim. I didn’t know how to do any of this before March… not even a little bit.'),
(2, 'Anh Tuan', 'Hi there! I am a Vietnamese based web designer. Lets start scrolling and learn more about me.', 'I’m good at what I do, which is pursue how to be better. Whether I am six months into this field or sixty years into it, I always want to be good at the things that have gotten me here today. I want to be curious, open, and determined. I want to still be searching, listening, and caring. And, I always want to be quick to laugh, both at myself and with others.');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `skype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `fb`, `insta`, `twitter`, `skype`) VALUES
(1, 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/home', 'https://join.skype.com/Xx80PZmVgQjf'),
(2, 'https://www.facebook.com/', 'https://kenh14.vn/', 'https://dantri.com.vn/', 'https://genk.vn/');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `tid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `testimonial` varchar(500) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`tid`, `id`, `testimonial`, `cname`) VALUES
(1, 1, 'Our website is amazing! Jessi is easy to communicate with and put together the perfect site for our needs. Not being technically savvy, they walked us through what we should have on our site and made it effortless.', 'Kathy E.'),
(2, 1, 'I worked with Nam for over 10 years! We both started out with brand new businesses about the same time! Nam was always prompt with updates on my web site. I had many short emails responded to and done within 15 minutes! Wow! Impressive to say the least.', 'Joyce K.'),
(3, 2, 'Please make sure that you thank everyone at Tuan for all of the work they have done, we are very happy with everything and will be recommending your services to anyone that will listen. Pass it on please.', 'John Budreau'),
(4, 2, 'As a small company, we were looking for a reasonably-priced design team to help us bring to life the website we had in mind. Tuan team offered the same services as competitors three or four times the expense and provided examples of their work to back up their talent.', 'Frank Z.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `aid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`aid`, `id`, `username`, `password`) VALUES
(1, 1, 'namtit2932k', '123456789'),
(2, 2, 'nguyentuan123', '987654321'),
(3, 1, 'rocket293', '2conga');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `wid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `wname` varchar(50) NOT NULL,
  `wlocation` varchar(50) NOT NULL,
  `wdate` varchar(50) NOT NULL,
  `wabout` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`wid`, `id`, `wname`, `wlocation`, `wdate`, `wabout`) VALUES
(1, 1, 'Full-Stack Developer - FPT Telecom', 'No. 1 Pham Van Bach Street', '2018 - Now', 'With the mission of pioneering to bring the Internet and connectivity to the people of Vietnam, with the great desire that every Vietnamese family uses at least one of the companys services, FPT Telecom has been making efforts to increase investment in infrastructure as well as product and service quality, enhancing the application of advanced technology to provide customers with constantly improved experiences.'),
(2, 1, ' Data Scientist - Viettel Group', 'E6 Pham Hung, South Tu Liem', '2015 - 2018', 'Viettel Global is proving its competences through the success of its subsidiaries when most of them taking the leading positions in their national telecom markets in term of subscribers/ revenue/ infrastructure, for instance, Metfone in Cambodia, Telemor in Timor-Leste or Movitel in Mozambique. We embrace a sustainable investment strategy that balances the benefits of corporate, governments, the people and customers.'),
(3, 2, 'Ads Specialist - Google', '240 Washington DC.', '2019 - Now', 'The Google Ads specialist is a professional accreditation that Google offers to individuals who demonstrate proficiency in basic and advanced aspects of Google Ads. There are six Google Ads certifications available today: Google Ads Search, Google Ads Display, Google Ads Video, Shopping ads, Google Ads Apps, and Google Ads Measurement. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `id3` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `id4` (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`wid`),
  ADD KEY `id2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `info` (`id`);

--
-- Constraints for table `link`
--
ALTER TABLE `link`
  ADD CONSTRAINT `id6` FOREIGN KEY (`id`) REFERENCES `info` (`id`);

--
-- Constraints for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `id3` FOREIGN KEY (`id`) REFERENCES `info` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `id4` FOREIGN KEY (`id`) REFERENCES `info` (`id`);

--
-- Constraints for table `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `id2` FOREIGN KEY (`id`) REFERENCES `info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
