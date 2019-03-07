-- MySQL dump 10.13  Distrib 8.0.12, for macos10.13 (x86_64)
--
-- Host: 127.0.0.1    Database: bd_lojavirtual
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_caracteristicas`
--

DROP TABLE IF EXISTS `tb_caracteristicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_caracteristicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulocaracteristicas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textcaracteristicas` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `datecreate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_caracteristicas`
--

LOCK TABLES `tb_caracteristicas` WRITE;
/*!40000 ALTER TABLE `tb_caracteristicas` DISABLE KEYS */;
INSERT INTO `tb_caracteristicas` VALUES (1,'teste caracteristica','- Os objetos que ambientam as fotos não acompanham o produto.\n\n- Verifique as dimensões do produto e certifique-se que o percurso que ele fará até o local de uso permite sua passagem. Nós não nos responsabilizamos por transporte de produtos, caso não caibam em elevadores, acima de três lances de escada e não cabendo na passagem das escadas, por içamentos ou desmontagens de produtos. Quaisquer despesas deste tipo ficam a cargo do cliente.\n\n- Favor verificar se os pés estão dentro do forro inferior do produto.\n\n- Fique atento, nossas cores podem sofrer alterações dependendo do seu monitor.','2019-03-05 13:14:43');
/*!40000 ALTER TABLE `tb_caracteristicas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-07 20:42:34
