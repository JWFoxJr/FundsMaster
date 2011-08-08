--
-- FundDrive Database Creation Script
--

--
-- Table structure for address table
--

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address` (
	`id` INT(5) NOT NULL AUTO_INCREMENT,
	`rtcode` INT(4) NOT NULL,
	`resident` VARCHAR(50) NOT NULL,
	`house` CHAR(4) NOT NULL,
	`apt` CHAR(4),
	`street` VARCHAR(50) NOT NULL,
	`suffix` VARCHAR(10),
	`city` VARCHAR(30) NOT NULL,
	`state` CHAR(2) NOT NULL,
	`zip` CHAR(5) NOT NULL,
	`plus4` CHAR(4),
	PRIMARY KEY (`id`),
	KEY `rtcode` (`rtcode`)
	) ENGINE=InnoDB;

--
-- Table structure for funds table
--

DROP TABLE IF EXISTS `funds`;

CREATE TABLE `funds` (
  `id` INT(5) NOT NULL,
  `amount` DECIMAL(4,2) NOT NULL,
  `entered` TIMESTAMP NOT NULL,
  KEY `id` (`id`)
  ) ENGINE=InnoDB;

--
-- Table structure for routes table
--

DROP TABLE IF EXISTS `routes`;

CREATE TABLE `routes` (
  `rtcode` INT(3) NOT NULL,
  `description` VARCHAR(100) NOT NULL,
  `assignment` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`rtcode`)
  ) ENGINE=InnoDB;

--
-- Table structure for history table
--

DROP TABLE IF EXISTS `history`;

CREATE TABLE `history` (
  `id` INT(5) NOT NULL,
  `rtcode` INT(3) NOT NULL,
  `year` CHAR(4) NOT NULL,
  KEY `id` (`id`),
  KEY `rtcode` (`rtcode`)
) ENGINE=InnoDB;