-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Versie:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van shoes wordt geschreven
CREATE DATABASE IF NOT EXISTS `shoes` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `shoes`;

-- Structuur van  tabel shoes.shoes wordt geschreven
CREATE TABLE IF NOT EXISTS `shoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shoe_brand` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `shoe_size` tinyint(4) DEFAULT '0',
  `amount_of_size` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel shoes.shoes: ~6 rows (ongeveer)
/*!40000 ALTER TABLE `shoes` DISABLE KEYS */;
INSERT INTO `shoes` (`id`, `shoe_brand`, `shoe_size`, `amount_of_size`) VALUES
	(1, 'Adidas', 42, 8),
	(2, 'Calvin Klein', 38, 5),
	(3, 'Hugo Boss', 40, 2),
	(4, 'Mexx', 36, 10),
	(5, 'Nike', 40, 15),
	(6, 'Puma', 42, 12);
/*!40000 ALTER TABLE `shoes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
