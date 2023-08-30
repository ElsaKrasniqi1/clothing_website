-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2011 at 08:02 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `addbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE books (
  Title varchar(80) PRIMARY KEY NOT NULL DEFAULT '',
  Copy int  NOT NULL DEFAULT '1',
  Branch varchar(80) DEFAULT NULL,
  Cardholder varchar(80) DEFAULT NULL,
  Category varchar(80) DEFAULT NULL
  
) ;

--
-- Dumping data for table `books`
--

INSERT INTO books (Title, Copy, Branch, Cardholder, Category) VALUES
('Hayward Auto Row', 1, 'Bayfair', 'Trin Prawn', 'Travel'),
('Living in State Parks', 1, 'Downtown', 'Sashoon Nusrat', 'Consumer'),
('Living in State Parks', 2, 'Cal State', 'Bev Costco', 'Consumer'),
('WD-40', 1, 'Downtown', 'Raul Felix', 'Science'),
('WD-40', 2, 'Cal State', 'Sashoon Nusrat', 'Science'),
('"No Doc" Loans', 1, 'Downtown', 'Swanny Pottkins', 'Consumer'),
('Plastics', 1, 'Cal State', 'Swanny Pottkins', 'Business'),
('Raccoons', 1, 'Bayfair', 'Bev Costco', 'Science'),
('Same as Cash', 1, 'Bayfair', NULL, 'Consumer'),
('You''re Fired!', 1, 'Downtown', NULL, 'Business'),
('You''re Fired!', 2, 'Bayfair', NULL, 'Business'),
('Toxic Bonds', 1, 'Cal State', 'Bev Costco', 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE  branches (
  BranchName varchar(80) primary key NOT NULL DEFAULT '',
  City varchar(80) DEFAULT NULL,
  
); 

--
-- Dumping data for table `branches`
--

INSERT INTO branches (BranchName, City) VALUES
('Bayfair', 'San Leandro'),
('Cal State', 'Hayward'),
('Downtown', 'Hayward');

-- --------------------------------------------------------

--
-- Table structure for table `cardholders`
--

CREATE TABLE cardholders (
  CardholderName varchar(80) PRIMARY KEY NOT NULL DEFAULT '',
  City varchar(80) DEFAULT NULL,
  
) ;

--
-- Dumping data for table `cardholders`
--

INSERT INTO cardholders (CardholderName, City) VALUES
('Tanny Macaroon', 'Hayward'),
('Raul Felix', 'San Leandro'),
('Trin Prawn', 'Union City'),
('Sashoon Nusrat', 'Hayward'),
('Swanny Pottkins', 'Fremont'),
('Bev Costco', 'San Leandro');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE categories (
  CategoryName varchar(80) PRIMARY KEY NOT NULL DEFAULT '',
  Expert varchar(80) DEFAULT NULL
  
) ;

--
-- Dumping data for table `categories`
--

INSERT INTO categories (CategoryName, Expert) VALUES
('Business', 'Myrtle Grimes'),
('Consumer', 'Ed Fezner'),
('Science', 'Meg Molly Unruh'),
('Travel', 'Meg Molly Unruh');

-- --------------------------------------------------------

--
-- Table structure for table `dvds`
--

CREATE TABLE dvds (
  Title varchar(80) PRIMARY KEY NOT NULL DEFAULT '',
  Copy int NOT NULL DEFAULT '1',
  Branch varchar(80) DEFAULT NULL,
  Cardholder varchar(80) DEFAULT NULL,
  Category varchar(80) DEFAULT NULL,
 
) ;

--
-- Dumping data for table `dvds`
--

INSERT INTO dvds (Title, Copy, Branch, Cardholder, Category) VALUES
('Asphalt Roofing', 1, 'Cal State', 'Swanny Pottkins', 'Business'),
('Hayward by Night', 1, 'Downtown', NULL, 'Travel'),
('Hayward Auto Row', 1, 'Bayfair', 'Trin Prawn', 'Travel'),
('Inclined Planes', 1, 'Bayfair', 'Raul Felix', 'Science'),
('Living in State Parks', 1, 'Bayfair', 'Trin Prawn', 'Consumer'),
('WD-40', 1, 'Downtown', NULL, 'Science'),
('"No Doc" Loans', 1, 'Downtown', NULL, 'Consumer');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;