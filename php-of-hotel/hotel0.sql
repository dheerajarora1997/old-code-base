-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 09:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel0`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(20) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `sno` int(200) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email_id`, `photo`, `password`, `sno`) VALUES
('admin', 'you@admin', 'male.png', '121', 1);

-- --------------------------------------------------------

--
-- Table structure for table `custmer`
--

CREATE TABLE IF NOT EXISTS `custmer` (
  `sid` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `phone_no` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `custmer`
--

INSERT INTO `custmer` (`sid`, `name`, `lastname`, `roomtype`, `startdate`, `enddate`, `phone_no`, `password`, `email`) VALUES
(1, 'suraj', 'anand', 'viproom', '2016-02-03', '2016-02-18', 7788995566, '123', 'anand@gmail.com'),
(2, 'deepak', 'saini', 'familyroom', '2016-02-10', '2016-02-17', 7744125125, '321', 'deepak@yahoo.com'),
(7, 'dheeraj', 'arora', '', '0000-00-00', '0000-00-00', 9992993949, '121', 'arora.in');

-- --------------------------------------------------------

--
-- Table structure for table `custmers2`
--

CREATE TABLE IF NOT EXISTS `custmers2` (
  `sid` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `roomtype` varchar(200) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `custmers2`
--

INSERT INTO `custmers2` (`sid`, `name`, `lastname`, `roomtype`, `phone_no`, `startdate`, `enddate`, `password`) VALUES
(1, 'dheeraj', 'arora', '', 9992993949, '0000-00-00', '0000-00-00', '121'),
(3, '', '', '', 0, '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `sid_f` int(200) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL,
  PRIMARY KEY (`sid_f`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sid_f`, `uname`, `phone`, `email`, `subject`, `message`) VALUES
(13, 'qewr', 9879798798789, 'elvknwdlk', 'skcnlsk', 'lkn'),
(14, 'amanarora', 1234567890, 'dfg@dg', 'hbvdbvu', 'd\r\nd \r\nsd\r\n ds \r\nsd\r\n ds\r\n '),
(15, 'umang', 9818223680, 'umang@gmail.com', 'nsic', 'helle dud'),
(16, 'sunil chopra', 8569564897, 'sunilchopra24@gmail.com', 'service', 'good srvice'),
(18, 'ppp', 9999999999, 'pp@pp.pp', 'ppppp', 'pppp\r\nppp\r\npp\r\np\r\np\r\np\r\n\r\np\r\np\r\np\r\np');

-- --------------------------------------------------------

--
-- Table structure for table `indexpage`
--

CREATE TABLE IF NOT EXISTS `indexpage` (
  `page` int(50) NOT NULL AUTO_INCREMENT,
  `fev` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `con` varchar(200) NOT NULL,
  `arrowl` varchar(200) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL,
  `arrowr` varchar(200) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `roomtype1` varchar(200) NOT NULL,
  `roomtype2` varchar(200) NOT NULL,
  `roomtype3` varchar(200) NOT NULL,
  `roomtype4` varchar(200) NOT NULL,
  `roomtype5` varchar(200) NOT NULL,
  `roomtype6` varchar(200) NOT NULL,
  `roominfo` varchar(255) NOT NULL,
  `fac1` varchar(200) NOT NULL,
  `fac2` varchar(200) NOT NULL,
  `fac3` varchar(200) NOT NULL,
  `fac4` varchar(200) NOT NULL,
  `fac5` varchar(200) NOT NULL,
  `fac6` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `fnt` varchar(200) NOT NULL,
  `fntt` varchar(200) NOT NULL,
  `txt` varchar(200) NOT NULL,
  `txt1` varchar(200) NOT NULL,
  `txt2` varchar(200) NOT NULL,
  `txt3` varchar(200) NOT NULL,
  `txt4` varchar(200) NOT NULL,
  `txt5` varchar(200) NOT NULL,
  `copyrightt` varchar(200) NOT NULL,
  `service` varchar(200) NOT NULL,
  `faculity` varchar(225) NOT NULL,
  `faculity1` varchar(225) NOT NULL,
  `faculity2` varchar(225) NOT NULL,
  `rfaculity` varchar(225) NOT NULL,
  `rfaculity1` varchar(225) NOT NULL,
  `tarrif` varchar(200) NOT NULL,
  `offseason` varchar(200) NOT NULL,
  `reqularseason` varchar(200) NOT NULL,
  `peakseason` varchar(200) NOT NULL,
  `standerddoubleroom` varchar(200) NOT NULL,
  `sdroffprice` varchar(200) NOT NULL,
  `sdrreqularprice` varchar(200) NOT NULL,
  `sdrpeakprice` varchar(200) NOT NULL,
  `supperiordoubleroom` varchar(200) NOT NULL,
  `sudroffprice` varchar(200) NOT NULL,
  `sudrregularprice` int(200) NOT NULL,
  `sudrpeakprice` int(200) NOT NULL,
  `viproom` varchar(200) NOT NULL,
  `voffprice` int(200) NOT NULL,
  `vregularprice` int(200) NOT NULL,
  `vpeakprice` int(200) NOT NULL,
  `standerdsingleroom` varchar(200) NOT NULL,
  `ssroffprice` int(200) NOT NULL,
  `ssrregularprice` int(200) NOT NULL,
  `ssrpeakprice` int(200) NOT NULL,
  `suppreroiosingleroom` varchar(200) NOT NULL,
  `susroffprice` int(200) NOT NULL,
  `susrregularprice` int(200) NOT NULL,
  `susrpeakprice` int(200) NOT NULL,
  `familyroom` varchar(200) NOT NULL,
  `foffprice` int(200) NOT NULL,
  `fregularprice` int(200) NOT NULL,
  `fpeakprice` int(200) NOT NULL,
  `meal` varchar(200) NOT NULL,
  `meal1` varchar(200) NOT NULL,
  `contactus` varchar(200) NOT NULL,
  `inf` varchar(200) NOT NULL,
  `leftname` varchar(200) NOT NULL,
  `leftphone` varchar(200) NOT NULL,
  `leftidd` varchar(200) NOT NULL,
  `leftsubject` varchar(200) NOT NULL,
  `leftmessage` varchar(225) NOT NULL,
  `rinfo` varchar(200) NOT NULL,
  `rinfo1` varchar(400) NOT NULL,
  `remail` varchar(200) NOT NULL,
  `homepic` varchar(200) NOT NULL,
  `phonepic` varchar(200) NOT NULL,
  `fimg` varchar(200) NOT NULL,
  `p1r` varchar(200) NOT NULL,
  `rn1` varchar(12) NOT NULL,
  `r1` varchar(300) NOT NULL,
  `p2r` varchar(200) NOT NULL,
  `rn2` varchar(20) NOT NULL,
  `r2` varchar(200) NOT NULL,
  `p3r` varchar(200) NOT NULL,
  `rn3` varchar(20) NOT NULL,
  `r3` varchar(200) NOT NULL,
  `p4r` varchar(200) NOT NULL,
  `rn4` varchar(20) NOT NULL,
  `r4` varchar(200) NOT NULL,
  `p5r` varchar(200) NOT NULL,
  `rn5` varchar(20) NOT NULL,
  `r5` varchar(200) NOT NULL,
  `p6r` varchar(200) NOT NULL,
  `rn6` varchar(20) NOT NULL,
  `r6` varchar(200) NOT NULL,
  `ssrimg` varchar(200) NOT NULL,
  `sdrimg` varchar(200) NOT NULL,
  `vimg` varchar(200) NOT NULL,
  `sudrimg` varchar(200) NOT NULL,
  `surimg` varchar(200) NOT NULL,
  PRIMARY KEY (`page`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `indexpage`
--

INSERT INTO `indexpage` (`page`, `fev`, `content`, `con`, `arrowl`, `img1`, `img2`, `img3`, `arrowr`, `detail`, `roomtype1`, `roomtype2`, `roomtype3`, `roomtype4`, `roomtype5`, `roomtype6`, `roominfo`, `fac1`, `fac2`, `fac3`, `fac4`, `fac5`, `fac6`, `pic`, `fnt`, `fntt`, `txt`, `txt1`, `txt2`, `txt3`, `txt4`, `txt5`, `copyrightt`, `service`, `faculity`, `faculity1`, `faculity2`, `rfaculity`, `rfaculity1`, `tarrif`, `offseason`, `reqularseason`, `peakseason`, `standerddoubleroom`, `sdroffprice`, `sdrreqularprice`, `sdrpeakprice`, `supperiordoubleroom`, `sudroffprice`, `sudrregularprice`, `sudrpeakprice`, `viproom`, `voffprice`, `vregularprice`, `vpeakprice`, `standerdsingleroom`, `ssroffprice`, `ssrregularprice`, `ssrpeakprice`, `suppreroiosingleroom`, `susroffprice`, `susrregularprice`, `susrpeakprice`, `familyroom`, `foffprice`, `fregularprice`, `fpeakprice`, `meal`, `meal1`, `contactus`, `inf`, `leftname`, `leftphone`, `leftidd`, `leftsubject`, `leftmessage`, `rinfo`, `rinfo1`, `remail`, `homepic`, `phonepic`, `fimg`, `p1r`, `rn1`, `r1`, `p2r`, `rn2`, `r2`, `p3r`, `rn3`, `r3`, `p4r`, `rn4`, `r4`, `p5r`, `rn5`, `r5`, `p6r`, `rn6`, `r6`, `ssrimg`, `sdrimg`, `vimg`, `sudrimg`, `surimg`) VALUES
(1, 'fev.png', 'Book A Package', 'Sed euismod sem id consequat rutrum. Ut convallis lorem a orci mollis, eu vulputate libero aliquet. Praesent egestas nisi sed purus tincidunt faucibus. Aliquam lobortis orci lacus, sed faucibus augue ', 'arrow l.png', 'golf.png', 'pool.png', 'party.png', 'arrow r.png', 'Our Room Type', 'Standard Double Room', 'Supperior Double Room', 'VIP Rooms', 'Standerd Room', 'Supperior Single Room', 'Family Rooms', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque lectus vitae dui sollicitudin commodo.', 'ac.png', 'fan.png', 'iron.png', 'tv.png', 'wifi.png', 'cof.png', 'l.png', '143 City Locted Hotels World Wild', '"Hospitality, Quality & Good Locations. We only provide you with the best hotels" - John Doe', 'About The Hotel', 'Suspendisse erat mi, tincidunt sit amet massa quis, commodo fermentum diam. Sed nec dui nec nunc tempor interdum. Ut vulputate augue urna, ut porta dolor imperdiet a. Vestibulum nec leo eu magna aliqu', 'Lattest NEWS', 'Grand Hotel joins DeluxeHotels\r\n<br>15 AUG \r\n<br>Happy Christmas To Everyone\r\n<br>15 AUG \r\n<br>Best Places To Visit 2014\r\n<br>15 AUG \r\n<br>Various Offers \r\n<br>15 AUG ', 'JOIN DELUXEHOTELS', 'Cum sociis natoque penatibus  parturient montes.\r\nCum sociis natoque penatibus parturient montes.\r\nCum sociis natoque penatibus parturient montes.\r\nCum sociis natoque penatibus parturient montes.\r\nCum', 'All Rights &reg; HotelDelux.in', 'Services offered by our Hotel', '-24-Hour Room Service.\r\n<br />-swimming pool, Jogging Track with in 200.mtrs.\r\n<br /> -Travel Assistance. \r\n<br />-Daily conducted sightseeing tours.\r\n<br />-Snorkeling trip.\r\n', '<br />-Unique water sports package includes Parasailing & Jetski.\r\n<br />-Hot/cold water 24 hours. \r\n<br />-Car/Bike Rental Services.\r\n<br />-A walk away from business/shoping center.\r\n<br />-Currency exchange.', '<br />-Boat curises.\r\n<br />-Backwater/Crocodile Trip. \r\n', '-Tv with satelite channels.\r\n<br />-Free safe deposit.\r\n<br>-Doctor on call.\r\n<br>-Mini Bar/Refrigerator.\r\n<br>-Airport Pickup/Drop on request\r\n<br>-Parking Facility.\r\n', '<br>-Veg./Non Veg. Main Course\r\n<br>-User Id& Password  Avaliable to\r\n<br> Chack Current Bill & savaliance in Rooms.\r\n', 'TARIFF', 'OFF SEASON </b><br />(15 June to 15 Sept)', 'REGULAR SEASON</b><br />(15 Sept to 22 Dec)', 'PEAK SEASON</b><br />(22 Dec to 15 June)', 'STANDERD Double Room', '4300', '4800', '5000', 'SUPPERIOR Double Room', '4500', 5000, 5300, 'VIP Room', 6000, 6500, 7000, 'STANDERD Single Room', 3200, 4000, 4400, 'SUPPERIOR Single Room', 4000, 4400, 5000, 'FAMILY Room', 5200, 5800, 6500, '<strong> Morning </strong><br />\r\nTea/Coffee with Cookies & Sandwiches & more.\r\n<br />\r\n<br />\r\n<strong>Lunch</strong><br />\r\nVeg lunch Main Cource.<br />\r\nNon Veg lunch Main Cource.\r\n<br />\r\n<br />\r\n', '<strong>Evening</strong><br>\r\nTea/Coffee with Cookies.', 'CONTACT US.', 'We are more then happy to hear from you.Feel free to contact us by telephone or email.', 'Your Name(required)', 'Your Phone no.(required)', 'Your Email(required)', 'Your Subject', 'Your Message', 'Campal Beach Resort,<br />D. Bandokar Marg,<br />Opp,swimingpool,<br />Near Indoor Stadium,Campal\r\n<br />Panjam, Goa, India-403001</div>\r\n', '+918322463238<br />\r\n+9183224630227<br />SMS or Whatsapp on +919822101902<br />(for advance boking purpose)<br />\r\nFor queries regarding your stay and<br />sightseeing in Goa please e-mail us and<br />\r\nwe will glad to help you treavel plans.', 'Hotelluxery@campalbeachresot.com', 'home.png', 'phone.png', 'family r.png', '1r.png', 'DHEERAJ', 'Gracious service,convenient location and absolutely <br>beautiful suites. I recommended suite number 3001,<br>as it is near the exeutive Lounge.', '2r.png', 'DEEPMALA', 'Lots of choice in food Great spa services at the\r\n<br>pool. We have totally enjoy cristmas here.   \r\n', '3r.png', 'SAHIL', 'Walking past we asked if we could stop to eat.<br> The lovely lady on reception made it so nothing was<br> too much troble and pulled tables together for us.', '4r.png', 'DEEPTI', 'A nice place to stay in the Heart of the city\r\n<br> with all very nice hospitality & staff.\r\n', '5r.png', 'GOLDY', 'I Stayed here for a weekend with my family.<br>\r\n Had a lovely stay the  stuff are lovely and friendly.', '6r.png', 'DEEPAK', 'I Stayed with my friends for one day wifi connection has some problem but IT person comes and rectify.', 'standerd single r.png', 'standerd double r.png', 'vip r.png', 'supperior double r.png', 'supperior single r.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
