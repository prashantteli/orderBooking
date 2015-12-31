CREATE DATABASE  IF NOT EXISTS `products` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `products`;
-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: products
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `address_details`
--

DROP TABLE IF EXISTS `address_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address_details` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `person_id` bigint(20) DEFAULT NULL,
  `addr_type` varchar(20) DEFAULT NULL,
  `addr1` varchar(255) DEFAULT NULL,
  `addr2` varchar(255) DEFAULT NULL,
  `addr3` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address_details`
--

LOCK TABLES `address_details` WRITE;
/*!40000 ALTER TABLE `address_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `address_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `cat_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_details`
--

DROP TABLE IF EXISTS `customer_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_details` (
  `customer_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `person_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_details`
--

LOCK TABLES `customer_details` WRITE;
/*!40000 ALTER TABLE `customer_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employment_details`
--

DROP TABLE IF EXISTS `employment_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employment_details` (
  `emp_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `person_id` bigint(20) DEFAULT NULL,
  `date_of_joining` varchar(12) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `employment_type` varchar(50) DEFAULT NULL,
  `departmant` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employment_details`
--

LOCK TABLES `employment_details` WRITE;
/*!40000 ALTER TABLE `employment_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `employment_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_details`
--

DROP TABLE IF EXISTS `item_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_details` (
  `item_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) DEFAULT NULL,
  `item_desc` varchar(255) DEFAULT NULL,
  `item_price` mediumtext,
  `item_icon` varchar(255) DEFAULT NULL,
  `added_by` bigint(20) DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `creation_date` varchar(15) DEFAULT NULL,
  `modification_date` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_details`
--

LOCK TABLES `item_details` WRITE;
/*!40000 ALTER TABLE `item_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_description`
--

DROP TABLE IF EXISTS `order_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_description` (
  `order_desc_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) DEFAULT NULL,
  `item_id` bigint(20) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `tds` int(3) DEFAULT NULL,
  PRIMARY KEY (`order_desc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_description`
--

LOCK TABLES `order_description` WRITE;
/*!40000 ALTER TABLE `order_description` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_details` (
  `order_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `table_id` bigint(20) DEFAULT NULL,
  `data_time` varchar(15) DEFAULT NULL,
  `order_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `person_details`
--

DROP TABLE IF EXISTS `person_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `person_details` (
  `person_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `dob` varchar(12) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `mobile_number` varchar(13) DEFAULT NULL,
  `std_code` varchar(10) DEFAULT NULL,
  `home_telephone` varchar(13) DEFAULT NULL,
  `business_telephone` varchar(13) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `person_details`
--

LOCK TABLES `person_details` WRITE;
/*!40000 ALTER TABLE `person_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `person_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tables_details`
--

DROP TABLE IF EXISTS `tables_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tables_details` (
  `table_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `table_no` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tables_details`
--

LOCK TABLES `tables_details` WRITE;
/*!40000 ALTER TABLE `tables_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `tables_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_details` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `person_id` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(150) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `creation_date` varchar(15) DEFAULT NULL,
  `modification_date` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_details`
--

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-31 10:22:21
