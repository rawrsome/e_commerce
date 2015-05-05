-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: e_commerce2
-- ------------------------------------------------------
-- Server version	5.5.38

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--
CREATE DATABASE ecom;
USE ecom;
DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'christophe@gmail.com','swag'),(2,'chris@gmail.com','swag'),(3,'cam@gmail.com','swag');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billings`
--

DROP TABLE IF EXISTS `billings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `address2` varchar(500) DEFAULT NULL,
  `city` varchar(150) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `card_number` bigint(20) DEFAULT NULL,
  `security_code` int(11) DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billings`
--

LOCK TABLES `billings` WRITE;
/*!40000 ALTER TABLE `billings` DISABLE KEYS */;
INSERT INTO `billings` VALUES (1,'Uriel','Becker','Ap #737-2204 In St.','585-3841 Ullamcorper St.','Lancaster','Lancashire',75064,5192309464677667,668,'2015-10-10',NULL),(2,'Tasha','Stanley','6866 Nunc. Rd.','Ap #952-3439 Eu Rd.','Rio Grande','Rio Grande do Sul',6418,5339413614891675,827,'2015-05-09',NULL),(3,'Judah','Weeks','107-9415 In St.','Ap #893-7123 Etiam Av.','Columbus','OH',87335,5516183134315753,529,'2015-12-10',NULL),(4,'Rina','Gaines','Ap #945-8771 Ut Av.','P.O. Box 278, 2066 Ut Ave','Middelkerke','WV',12432,5513901223708049,864,'2014-09-19',NULL),(5,'Jerry','Vaughan','804-4255 Vitae St.','P.O. Box 997, 9335 Felis Ave','Kano','Kano',39532,5533212350311771,912,'2015-06-22',NULL),(6,'Brielle','Hammond','Ap #141-2567 Mollis. St.','Ap #106-2829 Leo. Avenue','Adelaide','South Australia',834212,5120021791849961,313,'2014-05-04',NULL),(7,'Lucius','Kirkland','Ap #160-7734 Eu, St.','810-5635 Ac Av.','Coventry','WA',54105,5597966053354304,921,'2014-06-13',NULL),(8,'Lars','Delaney','P.O. Box 319, 4504 Dolor. Rd.','6340 Non Road','Vienna','Wie',7355,5128734650459555,869,'2014-05-23',NULL),(9,'Jermaine','Velazquez','P.O. Box 440, 3322 Eu, St.','Ap #626-1253 Sem Street','Macon','HE',38237,5202957913706236,401,'2014-08-28',NULL),(10,'Todd','Duke','Ap #930-6521 Varius Ave','Ap #598-6054 Phasellus Av.','Amersfoort','Utrecht',11189,5434379532362889,998,'2015-11-21',NULL),(11,'Avye','Farrell','Ap #320-3307 Eget St.','P.O. Box 548, 3027 Et Road','Borchtlombeek','VB',867,5185895798166863,616,'2014-05-21',NULL),(12,'Lisandra','Hopkins','Ap #237-592 Lorem Av.','247-3940 Sapien Road','Málaga','Andalucía',0,5402753277582398,888,'2015-05-15',NULL),(13,'Maxine','Mcfarland','5843 Elementum, Street','Ap #200-4065 Risus. Street','Rock Springs','Wyoming',3402,5259951611448029,362,'2015-08-26',NULL),(14,'Kristen','Harvey','322 Nisl Street','Ap #600-6848 Nunc Avenue','Grand Island','NE',230980,5531677828816290,814,'2014-05-21',NULL),(15,'Uriah','Morse','793-5766 Purus St.','705-6470 Auctor Rd.','Te Puke','NI',95330,5308835701388032,193,'2015-03-20',NULL),(16,'Jescie','Lopez','235-3846 Fusce St.','1278 Vestibulum, Avenue','Alençon','Basse-Normandie',9579,5480061054422985,481,'2016-03-07',NULL),(17,'Arden','Finley','5917 Eleifend Road','P.O. Box 442, 7509 Adipiscing Road','Vienna','Wie',34,5244709271621642,691,'2014-09-15',NULL),(18,'Willa','Cannon','Ap #221-6005 Luctus Rd.','P.O. Box 705, 8636 Cras Street','Heusden','N.',0,5408420744114346,708,'2015-12-08',NULL),(19,'Denton','Park','P.O. Box 433, 2804 Nisi St.','Ap #675-8661 Arcu. Rd.','Katsina','KT',0,5421369224289347,994,'2015-08-12',NULL),(20,'Axel','Roach','2627 Vulputate Road','2938 Donec St.','Ripalta Guerina','LOM',4851,5171000498472325,802,'2014-05-08',NULL),(21,'Ori','Bush','7425 Nunc Rd.','7100 Nulla. St.','Port Pirie','South Australia',1951,5350691651345549,947,'2016-03-27',NULL),(22,'Derek','Hale','Ap #389-399 Mauris. St.','2989 Odio Road','Kingston','Ontario',89,5124488649653349,614,'2015-05-13',NULL),(23,'Quincy','Sanders','396-952 Diam Av.','Ap #713-7002 Sed, Street','Poitiers','Poitou-Charentes',61311,5512193724114619,991,'2015-12-24',NULL),(24,'Stone','Watson','Ap #959-1237 Nisl. St.','P.O. Box 397, 5878 Quam. Rd.','San Pedro','SJ',16173,5364895999068853,384,'2014-07-04',NULL),(25,'Arsenio','Chambers','Ap #338-7312 Ultrices. Rd.','P.O. Box 235, 5061 Dictum Road','Piagge','Marche',8057,5463197232269129,310,'2016-03-21',NULL),(26,'Sybill','Lang','P.O. Box 593, 4875 Interdum. Rd.','1891 Risus. Avenue','Starachowice','SK',0,5405332176614748,268,'2014-11-05',NULL),(27,'Melissa','Hughes','5515 Sit Road','9465 Luctus Street','Vienna','Wie',7497,5116367334100529,590,'2016-01-12',NULL),(28,'Meredith','Wolfe','7562 Maecenas St.','255-7731 Mus. Road','College','Alaska',85046,5255661425504834,416,'2015-09-20',NULL),(29,'Emily','Gould','Ap #676-5262 Elit Rd.','P.O. Box 746, 364 Quis Av.','Colwood','BC',16752,5560534965254096,111,'2016-04-29',NULL),(30,'Dakota','Fernandez','564-2724 Dictum Rd.','355-8252 Eu St.','Belfast','Ulster',55644,5359836613796302,220,'2014-05-28',NULL),(31,'Zenaida','Espinoza','3962 Duis St.','P.O. Box 612, 8913 Non St.','Largs','AY',71744,5303665486376554,371,'2014-05-10',NULL),(32,'Barbara','Clark','P.O. Box 752, 531 Proin Av.','8026 Vestibulum Avenue','Alajuela','A',45382,5247087005404495,376,'2014-07-01',NULL),(33,'Jaquelyn','Conley','487-3617 Nascetur Road','P.O. Box 704, 5260 Pede, St.','Fairbanks','Alaska',4426,5314161536907918,909,'2015-03-02',NULL),(34,'Gannon','Davenport','603-6426 Molestie Rd.','Ap #370-4937 Convallis St.','Weesp','Noord Holland',547825,5253405896742941,518,'2015-06-07',NULL),(35,'Josephine','Dillard','204-8585 Dui Ave','P.O. Box 959, 1246 Lobortis St.','Sunshine Coast Regional District','BC',53584,5383516592014311,608,'2016-04-28',NULL),(36,'Dolan','Meyer','9719 Lobortis Road','536-5232 Luctus St.','Aurora','IL',8936,5482452768114257,414,'2015-12-01',NULL),(37,'Kirsten','Downs','P.O. Box 876, 5694 Tincidunt St.','532-2439 Risus. Rd.','Dutse','Jigawa',32,5102144185364033,111,'2014-11-08',NULL),(38,'Maggie','Fleming','Ap #147-6011 Cras Rd.','6212 Odio Road','Ottawa','Ontario',55,5204023263836723,293,'2015-05-12',NULL),(39,'Mason','Buckner','734-4886 Erat Street','150-8598 Sed Ave','Toowoomba','QLD',247,5362667176825302,571,'2016-03-10',NULL),(40,'Barrett','Alexander','667-4178 Posuere St.','Ap #150-5871 Nullam St.','Istanbul','Istanbul',8865,5138793011081837,425,'2014-06-04',NULL),(41,'Piper','Foster','Ap #539-8523 Elit, Ave','6346 Nisi. Rd.','Sokoto','SO',24273,5373742652980090,350,'2016-03-25',NULL),(42,'Joseph','Dotson','829-3494 Augue Rd.','Ap #426-7433 Lectus Street','Fairbanks','AK',4086,5468749300888902,200,'2014-08-02',NULL),(43,'Hop','Macdonald','171-1712 Consectetuer Rd.','Ap #727-9173 In St.','Roxburgh','RO',25507,5536869581539491,765,'2015-07-05',NULL),(44,'Cynthia','Craft','P.O. Box 193, 343 Ornare, Av.','Ap #821-486 Nonummy Ave','Leverkusen','North Rhine-Westphalia',967350,5353551093300501,352,'2014-10-02',NULL),(45,'George','Mejia','Ap #291-9413 Aliquam Ave','P.O. Box 627, 1757 Cum Avenue','Bremerhaven','HB',57608,5171970389270493,986,'2014-09-18',NULL),(46,'Karina','Hardin','9713 Natoque Rd.','203-6802 Amet St.','Watson Lake','YK',3168,5229173647595122,780,'2016-01-22',NULL),(47,'Christopher','Jefferson','P.O. Box 353, 640 Et Av.','P.O. Box 392, 4399 Quam. Ave','Londrina','PR',24376,5479134221624305,839,'2015-10-08',NULL),(48,'Urielle','Cline','5065 Faucibus. Avenue','Ap #565-4430 Duis Road','Gasteiz','PV',484971,5527366988175749,424,'2015-12-28',NULL),(49,'Astra','Compton','Ap #481-9349 Posuere, St.','782 Aliquam Rd.','Casnate con Bernate','LOM',3082,5138617935392931,823,'2015-11-28',NULL),(50,'Thomas','Crawford','6071 In Av.','Ap #826-8937 Ut St.','Leighton Buzzard','BD',4035,5453180050415406,305,'2014-06-25',NULL),(51,'Dawn','Roy','688-6528 Amet, Rd.','P.O. Box 901, 557 Accumsan Rd.','Hyderabad','Andhra Pradesh',57458,5551530392338461,630,'2016-04-20',NULL),(52,'Brenden','Bruce','Ap #607-3162 Enim, Road','1318 Nec St.','Golspie','SU',16572,5192359768161595,312,'2015-01-26',NULL),(53,'Aquila','Holland','635 Duis Av.','P.O. Box 766, 4931 Justo. Rd.','Parramatta','New South Wales',784380,5541520976999732,528,'2015-06-16',NULL),(54,'Nora','Velasquez','6119 Eu St.','Ap #952-2416 Justo Ave','Woking','Surrey',7451,5366686672022079,369,'2014-07-19',NULL),(55,'Ivor','Barrera','P.O. Box 874, 6045 Dui Rd.','Ap #559-7358 Sodales Ave','Wichita','Kansas',5840,5153972613923725,496,'2014-12-13',NULL),(56,'Iola','Acevedo','6541 Libero Street','328-4982 Egestas. Rd.','Barasat','West Bengal',633679,5191056500218284,353,'2014-06-14',NULL),(57,'Carter','Whitaker','P.O. Box 292, 2556 Orci Ave','P.O. Box 946, 3940 Lorem Street','Hamburg','Hamburg',29331,5568558927647222,991,'2015-03-16',NULL),(58,'Jacqueline','Rowe','P.O. Box 860, 5467 Ac Avenue','6302 Porttitor Street','Berlin','BE',18588,5171627954536803,540,'2015-10-21',NULL),(59,'Harrison','Abbott','P.O. Box 108, 946 Felis St.','P.O. Box 894, 6353 Fames Road','Ödemi?','?z',6119,5426316869808100,151,'2015-04-01',NULL),(60,'Slade','Bates','754-8885 Per Rd.','454 At Rd.','Izmir','?z',7707,5466238231199151,757,'2015-10-21',NULL),(61,'Shoshana','Delacruz','976-3964 Est, Avenue','Ap #541-3644 Auctor Rd.','Neuville','QC',58084,5286786406230142,437,'2015-03-07',NULL),(62,'Olympia','Roy','869 Etiam Road','P.O. Box 849, 5236 Aenean Rd.','Sundrie','Alberta',10,5306691378728840,710,'2016-03-13',NULL),(63,'Todd','Owens','688-1605 Mollis. Avenue','Ap #338-1276 Mus. Street','Scarborough','Ontario',42026,5292186403705950,832,'2015-09-05',NULL),(64,'Brady','Gallagher','3195 Convallis, Rd.','P.O. Box 943, 1602 Netus Avenue','South Portland','Maine',40211,5109275649583785,883,'2015-04-25',NULL),(65,'Jescie','Guerrero','P.O. Box 997, 8888 Elit Street','3896 In, Road','Matamata','NI',80011,5277632252949057,259,'2014-05-14',NULL),(66,'Xander','Gilmore','P.O. Box 344, 2210 Interdum. Street','446-2475 Dui. Rd.','Bowling Green','Kentucky',412160,5533258090532754,447,'2015-10-10',NULL),(67,'Alika','Walker','5384 Dui. Ave','5953 Integer Ave','Beypazar?','Ank',7096,5325227714669807,210,'2015-03-13',NULL),(68,'Kadeem','Zimmerman','414-9487 Vestibulum Road','161-4642 Duis Av.','Grado','FVG',6002,5284236339651792,449,'2016-03-17',NULL),(69,'Elizabeth','Munoz','P.O. Box 964, 8335 Facilisis Street','Ap #431-9203 A Street','Windsor','Ontario',88,5251753957968380,212,'2015-04-23',NULL),(70,'Dakota','Conley','Ap #590-8813 Eget, Rd.','P.O. Box 433, 9639 Ut, St.','Alert Bay','BC',4161,5287324328756199,883,'2015-09-18',NULL),(71,'Clinton','Arnold','Ap #617-3799 Nunc Av.','8940 Ultrices Ave','Goes','Zeeland',0,5429367858916260,607,'2014-06-19',NULL),(72,'Keegan','Albert','1028 Vel Rd.','P.O. Box 283, 7511 Et, Road','Vienna','Vienna',788691,5360382705323462,294,'2015-09-01',NULL),(73,'Clayton','Cooke','5264 Lorem Road','379 Ridiculus Av.','Laramie','WY',823804,5575579235208391,419,'2014-05-09',NULL),(74,'Xavier','Black','Ap #868-9041 Varius. Rd.','Ap #409-5785 Aenean Street','Nijkerk','Gl',16913,5338601934623346,228,'2016-04-24',NULL),(75,'Tara','Huff','328 Eu, Road','Ap #802-7373 Sit Road','Carbonear','Newfoundland and Labrador',20194,5414388338274663,153,'2016-03-21',NULL),(76,'Julie','Farley','Ap #910-5414 Pede. Av.','P.O. Box 928, 7585 Justo Ave','Zaria','KD',4859,5386864860626466,114,'2014-05-08',NULL),(77,'Rigel','Brennan','P.O. Box 286, 569 Aliquam St.','224-7193 Velit Ave','Dos Hermanas','Andalucía',134929,5351561956399997,397,'2015-11-17',NULL),(78,'Clementine','Ratliff','Ap #427-6829 Integer Road','Ap #317-3889 Sed Road','Bilbo','Euskadi',74523,5548765246524017,765,'2015-10-24',NULL),(79,'Natalie','Delgado','882-4080 Vel Street','252 Purus, St.','Kano','Kano',848356,5456087050003792,496,'2015-11-15',NULL),(80,'Megan','Hodges','P.O. Box 239, 5177 Tellus Avenue','Ap #632-6640 Vitae Ave','Meppel','Dr',76,5308278739499226,347,'2015-02-15',NULL),(81,'Hayley','Cooke','P.O. Box 371, 8176 Tempor Rd.','Ap #327-468 Aliquam Avenue','Kollam','KL',61730,5177156333315832,397,'2015-02-09',NULL),(82,'Laura','Powell','586 Quisque Av.','711-6787 Velit. Av.','Ipís','San José',0,5330164487357307,254,'2015-11-08',NULL),(83,'Alfonso','Baldwin','P.O. Box 988, 9006 Aliquam St.','273-3857 Arcu Road','Berlin','Berlin',52768,5507705029052843,840,'2015-05-20',NULL),(84,'Larissa','Livingston','4316 Ligula. Road','964-1787 Dignissim Av.','Pangnirtung','Nunavut',89572,5107026799460908,317,'2016-03-06',NULL),(85,'Xyla','Fox','574-7991 Nulla. St.','332-1341 Adipiscing Ave','Sadiqabad','PB',20015,5516740919250867,334,'2016-01-04',NULL),(86,'Len','Morrison','2326 Metus. Avenue','405-1295 Ultricies St.','Pukekohe','North Island',9204,5380846370965639,844,'2015-11-28',NULL),(87,'Anika','Johnston','P.O. Box 834, 3793 Odio Rd.','P.O. Box 830, 4306 Donec Av.','Vienna','Vienna',5867,5297037267404476,456,'2014-12-13',NULL),(88,'Signe','Carter','6833 Ante, Ave','Ap #965-280 Rutrum Rd.','Unnao','Uttar Pradesh',62944,5433032220415292,556,'2015-09-22',NULL),(89,'Chantale','Shaffer','Ap #737-8762 Et St.','913-6126 Placerat Ave','Candela','PUG',6723,5447718024411552,706,'2014-09-18',NULL),(90,'Jordan','Mayo','Ap #380-4880 Ipsum St.','P.O. Box 622, 7391 Donec Ave','Bonefro','MOL',9174,5111314302174701,286,'2015-06-30',NULL),(91,'Lee','Wheeler','P.O. Box 660, 5947 In Ave','907-6643 Dolor St.','Orvault','PA',30708,5210292767611310,525,'2014-09-12',NULL),(92,'Jayme','Whitney','P.O. Box 945, 4572 Felis. Avenue','3687 Sagittis. Ave','Pontevedra','GA',0,5409732185364886,254,'2015-10-27',NULL),(93,'Leonard','Sweet','P.O. Box 810, 7355 Mattis. St.','925-3168 Vitae Rd.','Duluth','Minnesota',0,5192755454912409,204,'2015-07-05',NULL),(94,'Shelby','Lane','Ap #312-2976 Ipsum St.','592-8653 Nibh. Rd.','Vezirköprü','Samsun',5901,5310896550471275,391,'2016-02-18',NULL),(95,'Ian','Griffith','P.O. Box 951, 247 Elit, Av.','P.O. Box 934, 7320 Aliquet Rd.','Badajoz','EX',72421,5443847389023167,790,'2016-04-20',NULL),(96,'Scarlet','Tillman','Ap #982-8862 Dolor Road','475-4462 Pellentesque St.','High Wycombe','BK',3074,5327319374090875,694,'2015-02-22',NULL),(97,'Darryl','Steele','9751 Vel, St.','P.O. Box 151, 6625 Iaculis Av.','Cincinnati','Ohio',5976,5172853412185103,739,'2015-12-20',NULL),(98,'Nevada','Hays','4750 Lorem. Av.','379-5188 Posuere St.','Kinross','KR',5141,5318149844566126,230,'2015-08-25',NULL),(99,'Maia','Pope','8417 Nunc St.','P.O. Box 742, 9877 Pulvinar Ave','Christchurch','SI',359298,5495295943606027,573,'2016-04-19',NULL),(100,'Kyle','Hogan','Ap #787-8150 Arcu Rd.','P.O. Box 530, 1963 Sit Road','Ravenstein','Noord Brabant',8913,5564047079395826,625,'2015-07-15',NULL);
/*!40000 ALTER TABLE `billings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'black'),(2,'brown'),(3,'green'),(4,'red'),(5,'yellow'),(6,'purple'),(7,'instant');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(800) DEFAULT NULL,
  `img_status` varchar(50) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'/Users/cameronkilner/Pictures/coffee/coffee_yellow.gif','secondary',6),(2,'/Users/cameronkilner/Pictures/coffee/coffee_yellow.gif','secondary',6),(3,'/Users/cameronkilner/Pictures/coffee/coffee_yellow.gif','secondary',6),(4,'/Users/cameronkilner/Pictures/coffee/coffee_yellow.gif','secondary',6),(5,'/Users/cameronkilner/Pictures/coffee/coffee_yellow.gif','secondary',6),(6,'/Users/cameronkilner/Pictures/coffee/coffee_yellow.gif','main',6),(7,'/Users/cameronkilner/Pictures/coffee/coffee_brown.png','main',5),(8,'/Users/cameronkilner/Pictures/coffee/coffee_brown.png','secondary',5),(9,'/Users/cameronkilner/Pictures/coffee/coffee_brown.png','secondary',5),(10,'/Users/cameronkilner/Pictures/coffee/coffee_brown.png','secondary',5),(11,'/Users/cameronkilner/Pictures/coffee/coffee_brown.png','secondary',5),(12,'/Users/cameronkilner/Pictures/coffee/coffee_brown.png','secondary',5),(13,'/Users/cameronkilner/Pictures/coffee/coffee_purple.png','secondary',4),(14,'/Users/cameronkilner/Pictures/coffee/coffee_purple.png','secondary',4),(15,'/Users/cameronkilner/Pictures/coffee/coffee_purple.png','secondary',4),(16,'/Users/cameronkilner/Pictures/coffee/coffee_purple.png','secondary',4),(17,'/Users/cameronkilner/Pictures/coffee/coffee_purple.png','secondary',4),(18,'/Users/cameronkilner/Pictures/coffee/coffee_purple.png','main',4),(19,'/Users/cameronkilner/Pictures/coffee/coffee_green.png','main',3),(20,'/Users/cameronkilner/Pictures/coffee/coffee_green.png','secondary',3),(21,'/Users/cameronkilner/Pictures/coffee/coffee_green.png','secondary',3),(22,'/Users/cameronkilner/Pictures/coffee/coffee_green.png','secondary',3),(23,'/Users/cameronkilner/Pictures/coffee/coffee_green.png','secondary',3),(24,'/Users/cameronkilner/Pictures/coffee/coffee_green.png','secondary',3),(25,'/Users/cameronkilner/Pictures/coffee/coffee_red.png','secondary',2),(26,'/Users/cameronkilner/Pictures/coffee/coffee_red.png','secondary',2),(27,'/Users/cameronkilner/Pictures/coffee/coffee_red.png','secondary',2),(28,'/Users/cameronkilner/Pictures/coffee/coffee_red.png','secondary',2),(29,'/Users/cameronkilner/Pictures/coffee/coffee_red.png','secondary',2),(30,'/Users/cameronkilner/Pictures/coffee/coffee_red.png','main',2),(31,'/Users/cameronkilner/Pictures/coffee/coffee_black.png','main',1),(33,'/Users/cameronkilner/Pictures/coffee/coffee_black.png','secondary',1),(34,'/Users/cameronkilner/Pictures/coffee/coffee_black.png','secondary',1),(35,'/Users/cameronkilner/Pictures/coffee/coffee_black.png','secondary',1),(36,'/Users/cameronkilner/Pictures/coffee/coffee_black.png','secondary',1),(37,'/Users/cameronkilner/Pictures/coffee/coffee_black.png','secondary',1),(38,'/Users/cameronkilner/Pictures/coffee/coffee_instant.png','secondary',7),(39,'/Users/cameronkilner/Pictures/coffee/coffee_instant.png','secondary',7),(40,'/Users/cameronkilner/Pictures/coffee/coffee_instant.png','secondary',7),(41,'/Users/cameronkilner/Pictures/coffee/coffee_instant.png','secondary',7),(42,'/Users/cameronkilner/Pictures/coffee/coffee_instant.png','secondary',7),(43,'/Users/cameronkilner/Pictures/coffee/coffee_instant.png','main',7);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_has_product`
--

DROP TABLE IF EXISTS `order_has_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_has_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_has_product`
--

LOCK TABLES `order_has_product` WRITE;
/*!40000 ALTER TABLE `order_has_product` DISABLE KEYS */;
INSERT INTO `order_has_product` VALUES (1,1,4),(2,2,5),(3,3,2),(4,4,6),(5,5,6),(6,6,6),(7,7,5),(8,8,4),(9,9,2),(10,10,1),(11,11,3),(12,12,2),(13,13,6),(14,14,7),(15,15,2),(16,16,3),(17,17,3),(18,18,4),(19,19,6),(20,20,6),(21,21,4),(22,22,2),(23,23,5),(24,24,5),(25,25,3),(26,26,7),(27,27,1),(28,28,6),(29,29,3),(30,30,2),(31,31,4),(32,32,6),(33,33,4),(34,34,6),(35,35,2),(36,36,7),(37,37,7),(38,38,4),(39,39,6),(40,40,2),(41,41,7),(42,42,2),(43,43,7),(44,44,7),(45,45,1),(46,46,3),(47,47,7),(48,48,1),(49,49,7),(50,50,2),(51,51,1),(52,52,3),(53,53,6),(54,54,4),(55,55,7),(56,56,1),(57,57,3),(58,58,3),(59,59,2),(60,60,4),(61,61,2),(62,62,5),(63,63,7),(64,64,7),(65,65,6),(66,66,5),(67,67,7),(68,68,2),(69,69,2),(70,70,5),(71,71,7),(72,72,2),(73,73,1),(74,74,2),(75,75,4),(76,76,6),(77,77,4),(78,78,4),(79,79,1),(80,80,7),(81,81,3),(82,82,1),(83,83,4),(84,84,6),(85,85,1),(86,86,3),(87,87,4),(88,88,3),(89,89,4),(90,90,6),(91,91,4),(92,92,4),(93,93,5),(94,94,3),(95,95,1),(96,96,5),(97,97,7),(98,98,6),(99,99,4),(100,100,1),(101,82,3),(102,85,7),(103,65,4),(104,39,3),(105,72,4),(106,73,5),(107,25,1),(108,43,5),(109,12,7),(110,71,3),(111,12,6),(112,71,2),(113,30,7),(114,76,2),(115,74,7),(116,100,4),(117,2,1),(118,77,7),(119,48,4),(120,71,2),(121,63,4),(122,100,6),(123,99,5),(124,6,2),(125,39,6),(126,30,5),(127,47,7),(128,75,5),(129,51,5),(130,22,5),(131,90,5),(132,32,4),(133,16,3),(134,3,7),(135,29,7),(136,20,1),(137,88,4),(138,29,1),(139,69,6),(140,46,5),(141,8,7),(142,95,5),(143,89,6),(144,78,6),(145,11,5),(146,77,3),(147,10,6),(148,48,4),(149,17,4),(150,15,1),(151,51,2),(152,89,1),(153,70,7),(154,18,3),(155,64,2),(156,94,7),(157,39,2),(158,7,2),(159,57,4),(160,12,4),(161,42,6),(162,76,1),(163,1,3),(164,75,7),(165,70,4),(166,89,2),(167,82,3),(168,27,3),(169,81,5),(170,21,3),(171,18,5),(172,24,1),(173,93,5),(174,24,3),(175,40,6),(176,93,2),(177,62,5),(178,6,7),(179,31,2),(180,31,4),(181,76,1),(182,28,6),(183,81,6),(184,53,5),(185,56,6),(186,57,4),(187,18,4),(188,90,3),(189,5,5),(190,69,2),(191,67,1),(192,76,4),(193,72,3),(194,24,5),(195,100,7),(196,4,7),(197,98,4),(198,60,2),(199,93,1),(200,7,7);
/*!40000 ALTER TABLE `order_has_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billing_id` int(11) DEFAULT NULL,
  `shipping_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,73,'shipped','2014-09-10 09:32:39'),(2,2,59,'cancelled','2016-01-24 11:25:40'),(3,3,69,'cancelled','2015-12-26 05:24:53'),(4,4,49,'shipped','2015-07-27 06:54:10'),(5,5,71,'processing','2015-06-11 14:23:53'),(6,6,48,'processing','2014-08-30 11:30:27'),(7,7,21,'cancelled','2015-09-10 02:51:39'),(8,8,79,'processing','2015-05-14 05:49:01'),(9,9,54,'shipped','2016-03-15 18:09:03'),(10,10,18,'shipped','2015-09-04 18:41:57'),(11,11,89,'shipped','2015-03-15 16:43:33'),(12,12,31,'shipped','2015-12-22 01:34:18'),(13,13,7,'processing','2015-03-15 09:01:19'),(14,14,80,'shipped','2014-09-20 14:13:42'),(15,15,24,'processing','2015-02-27 08:11:18'),(16,16,47,'cancelled','2014-09-14 08:44:53'),(17,17,48,'processing','2015-06-08 18:55:48'),(18,18,16,'shipped','2016-02-09 23:44:37'),(19,19,95,'processing','2016-04-12 00:06:43'),(20,20,50,'cancelled','2014-11-29 21:41:52'),(21,21,19,'cancelled','2014-06-15 23:36:32'),(22,22,59,'shipped','2014-12-31 16:49:39'),(23,23,3,'processing','2014-12-30 14:00:55'),(24,24,84,'cancelled','2015-04-08 20:10:55'),(25,25,26,'shipped','2016-03-24 00:00:39'),(26,26,31,'shipped','2015-06-13 20:11:00'),(27,27,46,'shipped','2014-07-13 04:06:05'),(28,28,97,'processing','2014-06-15 07:51:57'),(29,29,45,'shipped','2015-11-19 12:56:45'),(30,30,8,'shipped','2014-10-15 17:11:39'),(31,31,84,'shipped','2014-09-15 23:08:23'),(32,32,97,'shipped','2014-06-17 06:25:35'),(33,33,29,'cancelled','2015-04-17 09:26:00'),(34,34,16,'cancelled','2014-10-01 10:04:28'),(35,35,17,'processing','2014-12-15 16:02:20'),(36,36,67,'shipped','2015-03-28 00:55:38'),(37,37,62,'shipped','2015-06-23 19:20:18'),(38,38,43,'cancelled','2015-06-26 02:35:48'),(39,39,68,'shipped','2016-04-02 05:51:58'),(40,40,18,'shipped','2015-11-07 18:07:11'),(41,41,90,'cancelled','2014-10-01 12:44:46'),(42,42,64,'processing','2015-02-14 13:50:58'),(43,43,34,'processing','2015-08-28 10:42:09'),(44,44,25,'shipped','2016-03-29 15:14:07'),(45,45,65,'shipped','2016-03-28 10:05:15'),(46,46,63,'shipped','2015-03-11 09:04:48'),(47,47,50,'cancelled','2015-09-16 13:20:24'),(48,48,71,'cancelled','2014-06-15 06:11:23'),(49,49,99,'cancelled','2015-07-12 06:33:30'),(50,50,7,'cancelled','2015-07-15 13:31:16'),(51,51,7,'shipped','2016-05-02 22:06:36'),(52,52,38,'processing','2016-04-28 19:53:36'),(53,53,89,'shipped','2015-03-02 20:06:19'),(54,54,82,'processing','2015-05-08 02:36:47'),(55,55,18,'processing','2016-03-05 17:50:25'),(56,56,40,'cancelled','2015-01-17 00:04:06'),(57,57,95,'shipped','2015-01-07 11:03:45'),(58,58,72,'cancelled','2016-03-11 03:30:22'),(59,59,81,'cancelled','2015-06-10 07:17:25'),(60,60,38,'shipped','2014-08-03 15:18:45'),(61,61,3,'shipped','2016-02-21 09:17:42'),(62,62,12,'cancelled','2014-12-17 14:38:48'),(63,63,70,'processing','2015-04-26 06:39:20'),(64,64,89,'shipped','2014-08-09 00:08:28'),(65,65,60,'cancelled','2016-02-12 09:05:58'),(66,66,52,'processing','2016-01-08 18:02:50'),(67,67,47,'shipped','2014-05-28 16:20:55'),(68,68,68,'processing','2014-08-28 22:59:10'),(69,69,71,'shipped','2015-12-11 15:54:25'),(70,70,32,'processing','2014-06-08 04:37:27'),(71,71,38,'processing','2016-04-09 06:28:23'),(72,72,33,'processing','2014-06-18 19:09:51'),(73,73,91,'shipped','2015-04-22 23:21:39'),(74,74,64,'shipped','2016-03-09 09:37:48'),(75,75,46,'cancelled','2016-03-17 08:06:23'),(76,76,3,'cancelled','2015-03-23 08:19:01'),(77,77,29,'shipped','2014-12-25 23:43:26'),(78,78,10,'cancelled','2015-10-27 08:57:39'),(79,79,27,'shipped','2016-01-20 04:10:56'),(80,80,66,'processing','2014-05-13 10:01:18'),(81,81,100,'processing','2016-03-28 04:05:06'),(82,82,77,'processing','2015-03-27 04:25:32'),(83,83,96,'shipped','2014-08-01 19:53:28'),(84,84,79,'shipped','2015-01-19 11:47:12'),(85,85,90,'processing','2014-06-21 00:58:29'),(86,86,4,'processing','2015-10-06 11:08:15'),(87,87,43,'processing','2015-07-04 08:01:48'),(88,88,87,'cancelled','2015-09-22 14:47:56'),(89,89,57,'processing','2016-04-24 23:34:39'),(90,90,80,'shipped','2015-10-29 19:55:01'),(91,91,60,'shipped','2014-08-20 17:26:55'),(92,92,97,'shipped','2016-02-01 02:03:22'),(93,93,40,'cancelled','2016-01-03 02:37:06'),(94,94,16,'cancelled','2015-02-13 05:00:40'),(95,95,54,'shipped','2014-09-01 03:28:43'),(96,96,31,'processing','2015-02-21 07:58:48'),(97,97,53,'processing','2014-08-04 12:16:43'),(98,98,27,'cancelled','2015-12-31 08:27:41'),(99,99,25,'cancelled','2014-10-18 04:10:41'),(100,100,6,'processing','2016-02-20 15:19:15');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL,
  `inventory` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Black Mac','a super black variety thats black',19.90,45,1,'2015-05-03 20:28:31','2015-05-03 20:28:31'),(2,'Red Ded','a super red variety thats ded',14.50,25,4,'2015-05-03 20:29:15','2015-05-03 20:29:15'),(3,'Green Bean','a super green variety thats bean',8.25,63,3,'2015-05-03 20:29:57','2015-05-03 20:29:57'),(4,'Purple Nurple','a super purple variety thats erkle',28.25,23,6,'2015-05-03 20:30:54','2015-05-03 20:30:54'),(5,'Brown Town','a super brown variety thats from town',14.05,29,2,'2015-05-03 20:31:34','2015-05-03 20:31:34'),(6,'Yellow Mellow','a super yellow variety thats a waste of water',5.75,89,5,'2015-05-03 20:32:20','2015-05-03 20:32:20'),(7,'Instant Coffee','tastes likes shit',3.75,89,7,'2015-05-03 20:33:19','2015-05-03 20:33:19');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shippings`
--

DROP TABLE IF EXISTS `shippings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shippings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `address2` varchar(500) DEFAULT NULL,
  `city` varchar(150) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shippings`
--

LOCK TABLES `shippings` WRITE;
/*!40000 ALTER TABLE `shippings` DISABLE KEYS */;
INSERT INTO `shippings` VALUES (1,'Jenette','Conway','P.O. Box 669, 8228 Suspendisse Ave','P.O. Box 632, 1722 Sodales St.','Huelva','AN',41207,'2015-08-27 18:05:19'),(2,'Erica','Williamson','764-2637 Felis Rd.','P.O. Box 232, 9519 Mi Avenue','Blind River','Ontario',38015,'2015-12-07 19:35:33'),(3,'Hakeem','Pierce','4661 Facilisis. Road','P.O. Box 492, 139 Vitae, Av.','Vienna','Vienna',71,'2015-11-17 11:24:38'),(4,'Zachary','Padilla','P.O. Box 509, 2867 Tellus, Ave','810-5345 Metus. St.','Hathras','Uttar Pradesh',9075,'2015-05-22 03:25:26'),(5,'Alexander','Smith','P.O. Box 486, 1962 Volutpat. Av.','961 Nisl. Street','Sapele','DE',4783,'2014-10-22 00:25:48'),(6,'Bradley','Simpson','396 Odio Avenue','4339 Curabitur Avenue','Koekelberg','BU',84,'2016-02-27 06:25:38'),(7,'Cassady','Savage','9401 Vitae Rd.','Ap #480-3584 Fusce Rd.','Mount Isa','Queensland',82374,'2015-08-13 11:24:25'),(8,'Penelope','Morrow','542 Malesuada Avenue','P.O. Box 368, 8662 Sagittis Street','Augusta','GA',619080,'2015-08-28 09:50:21'),(9,'Victoria','Frost','5152 Amet Street','627-2023 Metus. Rd.','Trois-Rivi?res','QC',40302,'2016-03-19 22:15:28'),(10,'Rigel','Welch','P.O. Box 323, 9884 Mollis. St.','707-9107 Sed Avenue','Mildura','Victoria',15717,'2015-01-01 15:06:05'),(11,'Rose','Tillman','411-3598 Et St.','Ap #571-5823 Leo. St.','Bremen','HB',13050,'2015-12-30 12:14:27'),(12,'Tasha','Joyner','P.O. Box 234, 4796 In Ave','P.O. Box 927, 8543 Quis, Av.','Baie-d\'Urf?','Quebec',51342,'2016-01-28 11:13:11'),(13,'Damian','Lambert','444 Lorem Av.','P.O. Box 371, 7263 Scelerisque Street','?skenderun','Hatay',679932,'2015-06-26 21:02:20'),(14,'Echo','Blanchard','7994 Orci. Avenue','825-1071 Urna. Avenue','Bowling Green','Kentucky',122808,'2015-07-22 05:55:33'),(15,'Lydia','Wheeler','352-6200 In Rd.','8457 Cursus Ave','Joliet','IL',8159,'2015-07-30 04:00:40'),(16,'Maggie','Allen','586-8119 Tellus. Road','P.O. Box 602, 8628 Non Rd.','Oria','Puglia',173262,'2014-09-11 13:37:45'),(17,'Victoria','Freeman','Ap #294-9728 Tincidunt Road','Ap #251-2669 Sed St.','Mersin','Mersin',11808,'2015-01-31 22:46:01'),(18,'Wynne','Petty','Ap #976-4404 Ipsum. Rd.','6202 Venenatis St.','Te Puke','North Island',7486,'2014-10-07 02:17:14'),(19,'Liberty','Mcfarland','8081 Dolor Rd.','P.O. Box 227, 3472 Aliquet Street','Manukau','NI',0,'2015-12-20 11:11:39'),(20,'Dacey','Todd','8948 Quisque Rd.','Ap #770-7562 Non Av.','Los Angeles','CA',993,'2015-07-28 01:27:29'),(21,'Oliver','Ortiz','863-7999 Pellentesque Rd.','P.O. Box 983, 8911 Pharetra Rd.','Comox','BC',7463,'2015-08-09 07:36:16'),(22,'Caryn','Rogers','877-7856 Luctus. Av.','1922 Pede. Rd.','Kessel','Antwerpen',2187,'2015-01-22 01:50:13'),(23,'Evelyn','Riddle','Ap #215-101 Lobortis. Av.','Ap #815-9302 Maecenas Street','Whangarei','North Island',7396,'2014-05-06 22:29:15'),(24,'Lenore','Stanley','Ap #488-637 Donec Road','690-3880 Ipsum Rd.','Rutigliano','PUG',0,'2015-07-30 04:25:01'),(25,'Minerva','Snow','1809 Neque. Av.','212-8602 A, Rd.','Purnea','Jharkhand',45291,'2014-11-06 23:31:49'),(26,'Rooney','Mayo','544-5429 Eu Ave','P.O. Box 988, 5223 Enim. Av.','Belfast','Ulster',7917,'2014-08-04 01:05:30'),(27,'Matthew','Roy','114-3090 Nibh Avenue','P.O. Box 687, 9488 Dignissim Road','R?sselsheim','Hesse',16723,'2015-03-21 05:42:50'),(28,'Wendy','Molina','306-7940 Tristique Road','P.O. Box 900, 192 Ligula. St.','Melazzo','PIE',0,'2016-02-14 08:21:48'),(29,'Tanisha','Keith','2691 Justo Avenue','2188 Nullam Street','Berlin','Berlin',26987,'2015-10-12 16:01:02'),(30,'Willa','Kemp','Ap #344-7993 Risus. Rd.','170-2719 Consequat Road','Berlin','BE',9011,'2015-10-19 06:27:27'),(31,'Wylie','Strickland','P.O. Box 314, 2903 Malesuada Rd.','680-6185 Varius Road','Kumluca','Antalya',764634,'2015-08-05 18:49:40'),(32,'Mariko','Donaldson','P.O. Box 687, 2074 Ut Avenue','Ap #198-407 Diam. Street','Quesada','A',93947,'2015-10-26 00:43:44'),(33,'Dai','Spence','892-5921 Urna. Road','4372 Ligula St.','Warren','Michigan',9146,'2014-08-04 06:57:46'),(34,'Kaseem','Ramsey','6425 Etiam Rd.','1322 Proin Ave','Sete Lagoas','Minas Gerais',35126,'2015-03-14 08:34:44'),(35,'Basil','Yang','2668 Tincidunt Rd.','122-2905 Ultrices. Rd.','Limón (Puerto Limón)','L',0,'2015-11-10 00:05:02'),(36,'Lewis','Byrd','Ap #938-5886 Dolor. St.','178-8350 Leo. St.','Vienna','Vienna',0,'2015-03-18 10:01:12'),(37,'Azalia','Moody','399-2474 Est Rd.','5475 Augue St.','Farciennes','HE',14,'2015-08-16 12:46:24'),(38,'Shelley','Greene','545-4165 Adipiscing Road','P.O. Box 947, 731 Facilisis St.','Osgoode','ON',4784,'2014-11-11 01:43:40'),(39,'Rafael','Fleming','4798 Libero. St.','530-2182 Non Ave','Gravilias','San José',76,'2015-11-21 16:52:36'),(40,'Shelly','Pollard','4907 Scelerisque Av.','P.O. Box 212, 3596 Sed Rd.','Belcarra','British Columbia',87907,'2016-04-17 00:15:05'),(41,'Hollee','Kelley','Ap #366-2530 Quam Ave','Ap #720-4392 Sociis St.','Dublin','L',23201,'2015-09-26 18:09:23'),(42,'Christopher','Cantu','3976 Facilisis, Avenue','898-1935 Elementum St.','Castelseprio','LOM',25332,'2015-08-08 18:26:36'),(43,'Alexis','Horn','P.O. Box 769, 8891 Per Street','4638 Lacinia Street','Angers','PA',0,'2014-06-09 07:07:30'),(44,'Winifred','Levy','P.O. Box 733, 9927 Vel Av.','Ap #213-4409 Mauris, Avenue','Fort Worth','Texas',2536,'2014-07-19 02:27:09'),(45,'Kiona','Obrien','1144 Nisi. Avenue','2161 Magna. Ave','Den Helder','Noord Holland',83892,'2015-05-17 01:10:07'),(46,'Nell','Campos','Ap #645-1453 Vitae Road','Ap #448-7167 Semper. Ave','Galway','C',783022,'2015-09-01 09:46:12'),(47,'Jasmine','Jacobson','P.O. Box 445, 9024 Commodo Rd.','P.O. Box 953, 5615 Lacus. Road','Silchar','Assam',24781,'2015-05-16 21:35:02'),(48,'Hanna','Kim','390-6368 A Rd.','377 Cursus Ave','Galway','C',6434,'2014-12-02 23:53:10'),(49,'Rashad','Schwartz','P.O. Box 735, 4855 Neque Rd.','P.O. Box 580, 6722 Tincidunt, Ave','Tarnów','MP',8929,'2015-01-27 02:49:30'),(50,'Howard','Freeman','Ap #112-2501 Aenean St.','P.O. Box 562, 3084 Nullam Avenue','Belfast','U',8696,'2014-11-17 13:06:03'),(51,'Danielle','Molina','P.O. Box 777, 2052 Leo. Avenue','4819 Eleifend. Avenue','Llanidloes','Montgomeryshire',9140,'2015-07-18 22:31:31'),(52,'Jillian','Heath','930-4824 Auctor Ave','872-8730 Turpis Av.','Gary','Indiana',44357,'2014-09-07 19:32:45'),(53,'Colby','Hill','Ap #331-7410 Risus Rd.','391-499 Quisque St.','Roccabruna','Piemonte',0,'2014-08-29 08:57:29'),(54,'Nichole','Mclaughlin','Ap #547-319 Quis Ave','5644 Fames Ave','Wellington','North Island',962034,'2015-07-25 21:25:03'),(55,'Noelani','Velazquez','Ap #421-287 Ante, Ave','P.O. Box 816, 2723 Justo Street','Whitchurch-Stouffville','ON',821,'2015-06-30 22:46:41'),(56,'Todd','Frazier','Ap #135-3492 Amet Rd.','120-6928 Pharetra. St.','Te Puke','NI',71248,'2016-02-17 19:47:19'),(57,'Dahlia','Short','163-582 Nulla Road','1731 Aliquet. Av.','Champlain','QC',709781,'2014-08-31 12:25:40'),(58,'Dieter','Armstrong','P.O. Box 254, 4159 Et Avenue','Ap #202-4557 Nascetur Street','Hondelange','Luxemburg',2879,'2015-03-25 16:37:26'),(59,'Tanisha','Patel','1224 Proin Av.','P.O. Box 260, 2281 Eget, Avenue','Isnes','NA',424196,'2014-09-28 01:39:42'),(60,'Blythe','Ratliff','P.O. Box 457, 7860 Auctor, Rd.','P.O. Box 810, 2436 Vel Avenue','Siquirres','Limón',1056,'2014-09-11 22:41:02'),(61,'Ronan','Wall','Ap #472-2894 Lacus. Rd.','568-6904 Dis Rd.','Barcelona','CA',14886,'2016-01-01 09:37:30'),(62,'Irene','Lott','327-9095 Sed St.','875-1780 Varius Street','Dublin','Leinster',61,'2014-06-03 10:00:00'),(63,'Audrey','Parrish','P.O. Box 300, 9416 Quam. Rd.','Ap #908-9487 Nec Rd.','Band?rma','Bal',96897,'2016-03-06 03:47:38'),(64,'Kennedy','Riddle','P.O. Box 723, 8125 Eget St.','P.O. Box 712, 5859 Adipiscing, Avenue','Torrejón de Ardoz','MA',61720,'2016-01-17 10:46:18'),(65,'Cleo','Atkins','9965 Arcu Av.','863-4955 Ac Ave','Nelson','South Island',58621,'2016-01-18 05:39:36'),(66,'Theodore','Williams','P.O. Box 194, 514 Hendrerit Road','261-134 Natoque St.','Belfast','Ulster',35118,'2015-02-26 20:08:53'),(67,'Patience','Frank','1650 Metus Rd.','Ap #360-1387 Molestie Avenue','Cork','Munster',3947,'2014-11-13 20:02:26'),(68,'Noah','Olson','Ap #525-5375 Netus Av.','P.O. Box 618, 7815 Praesent Av.','Olathe','Kansas',0,'2015-11-14 16:18:16'),(69,'Vincent','Waters','P.O. Box 413, 7186 Sodales Rd.','Ap #149-4082 Velit. Road','Vienna','Wie',18462,'2014-10-18 13:54:43'),(70,'Callie','Barker','P.O. Box 775, 7299 Penatibus Rd.','Ap #657-7808 Nisl. St.','Dollard-des-Ormeaux','QC',58055,'2015-09-09 02:48:31'),(71,'Mari','Obrien','P.O. Box 622, 4917 Tincidunt Road','Ap #752-2084 Lacus. Ave','Dublin','Leinster',8587,'2014-07-07 14:59:31'),(72,'Jade','Roberts','Ap #424-1374 Lacus. Rd.','Ap #265-5557 Aenean Av.','Gorakhpur','Uttar Pradesh',94359,'2015-11-12 15:43:21'),(73,'Byron','Paul','215 Ipsum. St.','135-2988 Turpis St.','Berlin','Berlin',5745,'2015-01-26 02:47:43'),(74,'Joel','York','P.O. Box 773, 1384 Praesent St.','6478 Arcu. Ave','Vienna','Vienna',5596,'2015-12-28 09:06:26'),(75,'Charles','Blackburn','Ap #124-5832 Maecenas Avenue','466-8408 Magna Av.','Kimberly','British Columbia',92187,'2015-03-03 06:55:34'),(76,'Branden','Garcia','5897 Nascetur Ave','981-6262 Velit Avenue','Vienna','Vienna',36347,'2015-11-02 06:38:08'),(77,'Rina','Serrano','5955 Nibh Ave','Ap #783-6124 Purus. Rd.','Amersfoort','U.',2423,'2015-05-21 17:15:50'),(78,'Autumn','Adams','P.O. Box 354, 1388 Pellentesque Street','P.O. Box 532, 6276 Rutrum. Rd.','Almere','Fl',70204,'2014-05-17 03:05:28'),(79,'Lucian','Humphrey','857-2680 Justo Avenue','6660 Orci, Street','Saint-Pierre','Luxemburg',78011,'2015-05-31 11:46:04'),(80,'Tyler','Bowman','Ap #336-635 Mollis. St.','P.O. Box 325, 3478 Pretium Rd.','Montauban','Midi-Pyrénées',841010,'2014-12-28 01:37:18'),(81,'Plato','Mcguire','P.O. Box 660, 3339 Arcu. Rd.','654-3029 Tortor, St.','Osasco','SP',8323,'2016-03-26 15:40:56'),(82,'Asher','Holland','P.O. Box 920, 2072 Non St.','Ap #332-8205 Aliquam Rd.','Workum','Friesland',9077,'2015-07-12 14:10:54'),(83,'Bruce','Bullock','9266 Enim. Rd.','8399 Nullam Avenue','Monticelli d\'Ongina','ERM',50511,'2014-12-12 15:30:41'),(84,'Thomas','Martinez','3969 Id Road','Ap #489-4468 Porttitor Rd.','Flint','MI',4562,'2016-01-28 20:24:04'),(85,'Raja','Hart','Ap #839-4828 Ornare Rd.','645-143 Lobortis. Ave','Casacalenda','MOL',23416,'2015-06-26 19:46:08'),(86,'Kerry','Strong','Ap #257-2775 Donec Rd.','P.O. Box 333, 4147 Ornare Street','Istanbul','Istanbul',0,'2015-11-19 16:01:37'),(87,'Julie','Branch','P.O. Box 459, 790 Semper Road','P.O. Box 778, 3681 Vel Avenue','Turrialba','Cartago',422301,'2015-02-15 22:05:12'),(88,'Abbot','Pennington','5545 Justo. Street','Ap #377-4298 Non Road','Belfast','U',3642,'2016-01-18 14:07:58'),(89,'George','Jennings','163-2318 Non Rd.','6330 Sit St.','Upper Hutt','North Island',8745,'2016-03-10 00:32:10'),(90,'Jaime','Sharpe','579-2037 Aliquam Road','Ap #259-9934 Donec Street','Baracaldo','PV',70999,'2014-09-05 02:51:22'),(91,'Samuel','Berger','830-3001 Arcu St.','5526 Diam. Ave','Dublin','Leinster',342123,'2015-09-27 04:21:38'),(92,'Allegra','Watts','Ap #278-4504 Mi. Ave','7490 Velit. St.','Vitória da Conquista','BA',6872,'2014-07-11 09:09:24'),(93,'Shafira','Frost','931-2563 Aliquam Rd.','6488 Id, Street','Arrah','Bihar',368930,'2016-05-02 07:28:48'),(94,'Christine','Woodard','Ap #902-1539 Integer Av.','666-8117 Sed Rd.','Cawdor','Nairnshire',208683,'2016-04-02 11:14:32'),(95,'Owen','Bonner','P.O. Box 986, 3501 Risus. Ave','P.O. Box 409, 7830 Lobortis, Street','Columbus','OH',70329,'2016-03-10 17:57:28'),(96,'Neve','Ryan','4854 Phasellus Avenue','8657 Class Avenue','Che?m','LU',2578,'2015-07-11 22:46:03'),(97,'Rhona','Skinner','P.O. Box 578, 8731 Ut, Street','P.O. Box 966, 1723 Mi Av.','Istanbul','Istanbul',9391,'2014-10-16 21:29:14'),(98,'Deborah','Roy','2621 Vitae, Av.','7716 Donec Avenue','Tavigny','LX',0,'2015-06-19 05:55:50'),(99,'Kenyon','Montoya','P.O. Box 189, 2333 Maecenas Ave','Ap #635-3147 Lorem Rd.','Hay-on-Wye','Brecknockshire',0,'2014-06-08 09:24:18'),(100,'Ulysses','Holloway','205-534 Et Street','9107 Tristique St.','Gespeg','Quebec',11811,'2015-02-09 08:56:43');
/*!40000 ALTER TABLE `shippings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-05 13:41:12
