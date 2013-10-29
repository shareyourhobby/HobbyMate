-- Create the database
CREATE DATABASE  IF NOT EXISTS `hbmt` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hbmt`;
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

CREATE USER 'hbuser'@'localhost' IDENTIFIED BY 'h0obi$1q';
GRANT ALL PRIVILEGES ON hbmt.* TO 'hbuser'@'localhost';


-- login table 
CREATE  TABLE `hbmt`.`login` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NOT NULL COMMENT 'login name for user' ,
  `password` VARCHAR(100) NOT NULL COMMENT 'the password' ,
  `verified` BINARY NULL DEFAULT 0 COMMENT 'If the user has verified his email id' ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) )
COMMENT = 'Contains data for user login';


-- hobby table
CREATE  TABLE `hbmt`.`hobbydetails` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `uid` INT NOT NULL ,
  `hobbyname` VARCHAR(45) NULL ,
  `learn` BINARY NULL DEFAULT 0 ,
  `share` BINARY NULL DEFAULT 0 ,
  `teach` BINARY NULL DEFAULT 0 ,
  PRIMARY KEY (`id`) ,
  INDEX `userid_idx` (`uid` ASC) ,
  CONSTRAINT `userid`
    FOREIGN KEY (`uid` )
    REFERENCES `hbmt`.`login` (`id` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
COMMENT = 'This table contains hobby details';

ALTER TABLE `hbmt`.`hobbydetails` CHANGE COLUMN `learn` `learn` TINYINT NULL DEFAULT '0'  , CHANGE COLUMN `share` `share` TINYINT NULL DEFAULT '0'  , CHANGE COLUMN `teach` `teach` TINYINT NULL DEFAULT '0'  ;

-- create the unique index...
CREATE UNIQUE INDEX uidhb ON hobbydetails(uid, hobbyname);

