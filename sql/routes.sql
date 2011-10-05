-- MySQL dump 10.11
--
-- Host: mysql.jwfoxjr.com    Database: jwfoxjr_firenet
-- ------------------------------------------------------
-- Server version	5.1.53-log

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
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `routes` (
  `rtcode` int(3) NOT NULL,
  `description` varchar(100) NOT NULL,
  `assignment` varchar(30) NOT NULL,
  PRIMARY KEY (`rtcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `routes`
--

LOCK TABLES `routes` WRITE;
/*!40000 ALTER TABLE `routes` DISABLE KEYS */;
INSERT INTO `routes` VALUES (1,'ALLENDALE ROAD','WAYNE DORR'),(2,'ORCHARD PARK ROAD',''),(3,'BRADWOOD ROAD / ERWIN ROAD','MIKE KERL'),(4,'CHERYL ROAD  / DAVIS ROAD / ELWOOD DRIVE','TIM MCQUADE'),(5,'BARNETT DRIVE / HARWOOD AVE / TOBEY HILL DRIVE','KURT ZECHMANN'),(6,'BRIANWOOD DRIVE / REYNOLDS ROAD','FRANK GULLO/ED BAUERLEIN'),(7,'HEMLOCK DRIVE / NINA TERR / OAKHILL DRIVE','RUSS TYCZKA'),(8,'BERG ROAD / NORMA DRIVE / SHIRLEY DRIVE','DAVE WEITZEL'),(9,'BERG ROAD / SCHAEFFER','WILLIAM SWART'),(10,'ELMSFORD CT /  ELMSFORD DRIVE','MIKE ENNIS'),(11,'LAURELTON DRIVE','RON PIWOWARCZYK'),(12,'CHIPPEWA CT / WILLOWCREST / ANGLE ROAD','RUSSELL PEREZ'),(13,'HYBANK DRIVE / LEACLIFF LANE / BELMONT','DAVE MAZUROWSKI'),(14,'LEOCREST CT',''),(15,'NEUBAUER CT','DAN KRAKOWSKI'),(16,'CHARLESCREST CT','JIM UNGER'),(17,'CARMELITE DRIVE / WEST BIRHWOOD DRIVE','GEORGE PAUL'),(18,'SIBLEY DRIVE / WOODWARD DRIVE','YVETTE SCHOENHALS'),(19,'WOODWARD DRIVE','KURT SCHOENHALS'),(20,'COLONIAL MNR CT / VILLA MARIA  RD. / SOUTHWESTERN BLVD.','JIM NICHOLAS'),(21,'HI VIEW TER','ANDREW LAFORCE'),(22,'SHAWNEE PLACE / WESTGATE BLVD','BOB RAUX'),(23,'CHEROKEE DRIVE / DAUER DRIVE','DAN FRONTERA'),(24,'TREEHAVEN ROAD','MIKE WALSH'),(25,'TREEHAVEN ROAD','MIKE  WALSH'),(26,'CHRISTOPHER DRIVE','JIM BOCHENSKI'),(27,'DOVER DRIVE',''),(28,'GREENMEADOW DRIVE','WILLIAM MAYER'),(29,'BEECHWOOD / LARKWOOD / PINEVALLEY CT / PINETREE LN.','ROGER  LEISING'),(30,'RESERVE ROAD',''),(31,'BROOKE LN / SUNSET CREEK','MARK FIALKIEWICZ'),(32,'GREENHILL TER','ED BAUERLEIN/FRANK GULLO'),(33,'GREENBRANCH ROAD / WOODMAR TER','ERIC PAUL'),(34,'HERITAGE FARM ROAD','CHRIS BOLTZ'),(35,'WINDMILL ROAD','PAUL HINTERMIER'),(36,'OLD FARM CIRCLE / ROUNDTRAIL ROAD / WINDMILL ROAD NORTH','JAMES KOSMOWSKI'),(37,'CIRCLE END STREET / GERVAN DRIVE / PARK LANE','JIM BOCHENSKI'),(38,'ROSEWOOD DRIVE','RAY JONES'),(39,'ROLLING HILLS DRIVE / WEDGEWOOD DRIVE','THOMAS MCQUADE'),(40,'FISHER ROAD / MOSSIDE LOOP / THISTLE CT.','TIMOTHY AGUGLIA'),(41,'BERNADETTE TER',''),(42,'MILL ROAD','DAVID SOBOLEWSKI'),(43,'MILL ROAD','JOE CASTIGLIA'),(44,'CRANWOOD DRIVE / WEST CRANWOOD','ROBERT KAMINSKI'),(45,'UNION ROAD / TIMOTHY CT.',''),(46,'UNION ROAD','MIKE KLUCK'),(47,'CAMPBELL LANE / NANCYCREST LANE','BILL HIAM'),(48,'FIELDCREST CT','JOE HIPPERT'),(49,'WALTERCREST TER',''),(50,'ANGELACREST LANE / MARYCREST LANE / NORTH DRIVE','CHARLIE WILDER'),(51,'BLAIR LANE / WOODWARD CRES / WOODWARD CT. / ALMA  DR.','ANDREW KAZMIERSKI'),(52,'HILLTOP CT / VERMONT PLACE / WESTWOOD DRIVE','CARY PELOW'),(53,'NAPLES DRIVE / ROYCROFT DRIVE','JOE FOX JR.'),(55,'MARILYN DRIVE / THOMAS DRIVE','MIKE ENNIS'),(56,'HEATHER HILL DRIVE','JUDY KAROVSKI'),(57,'CARRIAGE PARK ROAD','BOB EDEL'),(58,'MARLIN DRIVE / SUBURBAN CT','MARTY WENDLE'),(59,'BERNICE DRIVE / PHYLLIS DRIVE',''),(60,'EAST & WEST ROAD',''),(61,'EAST & WEST ROAD',''),(62,'EAST & WEST ROAD',''),(63,'EAST & WEST ROAD',''),(64,'ORCHARD PARK ROAD','TOM ULRICH'),(65,'ORCHARD PARK ROAD',''),(66,'ORCHARD PARK ROAD',''),(67,'MICHAEL ROAD / PAMELA CT','JOHN MONTALDI'),(68,'LISA ANN / TRACY LYNN /  THERESA CT','DON KRUGER'),(69,'CROWNLAND CIRCLE / MOLNAR CT / MOLNAR DRIVE','JEREMY BAUER/'),(70,'PATRICIA DRIVE / RESERVE ROAD','GREG RAMSDELL'),(71,'PACECREST CT','ED GEMZA'),(72,'AZALEA DRIVE / CARDINAL LANE / EAST BIRHWOOD DRIVE','ROB PAWLIK'),(73,'COVE CREEK RUN / COVE HOLLOW / ROLLING WOODS','LINDA GRUBER'),(74,'PARK MEADOW DR.','MARK FIALKIEWICZ'),(75,'WESTVIEW DRIVE / PINEVIEW CT.','BILL MAYER'),(76,'DENNYBROOKE LN.','DANIEL FRONTERA'),(77,'CALDWELL / ALEXANDER / LOCKHART RD',''),(81,'SOUTHRIDGE /  GLENMAR / KELLYBROOK / ASHLEY','FRANK DIRSCHBERGER'),(82,'NORTHRIDGE DRIVE','PAT POWERS'),(83,'TAYLOR DRIVE / TAYLOR CT. / CONNER DR./ CONNER CT.','YVETTE SCHOENHALS'),(84,'CAMELOT / CARLA LANE',''),(85,'CROFTON / RENE','PETER BORZILLERI'),(86,'OAKBROOK',''),(88,'LANGNER / TANGLEWOOD',''),(90,'ABBOTT RD / RIDGE  RD.','HOUSE ACCOUNT'),(91,'COLONIAL MANOR APTS.','HOUSE ACCOUNT'),(99,'RESERVE FIREFIGHTERS','HOUSE ACCOUNT'),(110,'SENECA POINTE','HOUSE ACCOUNT'),(117,'SOUTH FISHER ROAD','HOUSE ACCOUNT');
/*!40000 ALTER TABLE `routes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-08-26 13:54:13
