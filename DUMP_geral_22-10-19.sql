-- MySQL dump 10.13  Distrib 8.0.18, for Linux (x86_64)
--
-- Host: localhost    Database: vistoria_tecnica
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `codigos`
--

DROP TABLE IF EXISTS `codigos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `codigos` (
  `idcodigos` int(11) NOT NULL AUTO_INCREMENT,
  `unidades_codigos` bigint(14) NOT NULL,
  PRIMARY KEY (`idcodigos`,`unidades_codigos`),
  UNIQUE KEY `unidades_codigos_UNIQUE` (`unidades_codigos`),
  UNIQUE KEY `idcodigos_UNIQUE` (`idcodigos`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codigos`
--

LOCK TABLES `codigos` WRITE;
/*!40000 ALTER TABLE `codigos` DISABLE KEYS */;
INSERT INTO `codigos` VALUES (12,22222222222222),(13,55555555555555),(14,1),(15,2),(16,3);
/*!40000 ALTER TABLE `codigos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indigena`
--

DROP TABLE IF EXISTS `indigena`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `indigena` (
  `idindigena` int(11) NOT NULL AUTO_INCREMENT,
  `localizacao_diff_indigena` varchar(45) NOT NULL,
  `endereco_indigena` varchar(200) NOT NULL,
  `municipio_indigena` varchar(50) NOT NULL,
  `codigo_unidade_indigena` bigint(14) NOT NULL,
  PRIMARY KEY (`idindigena`,`codigo_unidade_indigena`),
  UNIQUE KEY `codigos_unidades_codigos_UNIQUE` (`codigo_unidade_indigena`),
  KEY `fk_indigena_codigos1_idx` (`codigo_unidade_indigena`),
  CONSTRAINT `fk_indigena_codigos1` FOREIGN KEY (`codigo_unidade_indigena`) REFERENCES `codigos` (`unidades_codigos`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indigena`
--

LOCK TABLES `indigena` WRITE;
/*!40000 ALTER TABLE `indigena` DISABLE KEYS */;
INSERT INTO `indigena` VALUES (8,'Terra indígena','uehueheuheuehueheuheu','Jordão',55555555555555),(9,'Terra indígena','UM AI 1','Tarauacá',1);
/*!40000 ALTER TABLE `indigena` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rural`
--

DROP TABLE IF EXISTS `rural`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rural` (
  `idrural` int(11) NOT NULL AUTO_INCREMENT,
  `municipio_rural` varchar(50) NOT NULL,
  `localizacao_diff_rural` varchar(45) NOT NULL,
  `endereco_rural` varchar(200) NOT NULL,
  `codigo_unidade_rural` bigint(14) NOT NULL,
  PRIMARY KEY (`idrural`,`codigo_unidade_rural`),
  UNIQUE KEY `codigos_unidades_codigos_UNIQUE` (`codigo_unidade_rural`),
  KEY `fk_rural_codigos1_idx` (`codigo_unidade_rural`),
  CONSTRAINT `fk_rural_codigos1` FOREIGN KEY (`codigo_unidade_rural`) REFERENCES `codigos` (`unidades_codigos`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rural`
--

LOCK TABLES `rural` WRITE;
/*!40000 ALTER TABLE `rural` DISABLE KEYS */;
INSERT INTO `rural` VALUES (1,'Porto Walter','Unidade de uso sustentável em terra indígena','asdasdasdf',22222222222222),(2,'Tarauacá','Unidade de uso sustentável','UM AI 2',2);
/*!40000 ALTER TABLE `rural` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidade`
--

DROP TABLE IF EXISTS `unidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `unidade` (
  `idunidades` int(11) NOT NULL AUTO_INCREMENT,
  `nome_unidade` varchar(255) NOT NULL,
  `localizacao_unidade` varchar(15) NOT NULL,
  `dep_admin_unidade` varchar(15) NOT NULL,
  `resp_unidade` varchar(255) NOT NULL,
  `num_resp_unidade` bigint(15) NOT NULL,
  `codigo_unidade` bigint(14) NOT NULL,
  PRIMARY KEY (`idunidades`,`codigo_unidade`),
  UNIQUE KEY `codigos_unidades_codigos_UNIQUE` (`codigo_unidade`),
  KEY `fk_unidade_codigos_idx` (`codigo_unidade`),
  CONSTRAINT `fk_unidade_codigos` FOREIGN KEY (`codigo_unidade`) REFERENCES `codigos` (`unidades_codigos`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci KEY_BLOCK_SIZE=1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidade`
--

LOCK TABLES `unidade` WRITE;
/*!40000 ALTER TABLE `unidade` DISABLE KEYS */;
INSERT INTO `unidade` VALUES (12,'teste2','Rural','Estadual','asdfasdf',12313413,22222222222222),(13,'mecanica simas turbando','Indígena','Municipal','simas turbo',55555555555,55555555555555),(14,'TUPANIR GALDENCIO DA COSTA','Indígena','Municipal','JUBILEU',24242424242,1),(15,'ROSAURA MOURÃO DA ROCHA','Rural','Estadual','UM TIFU DOIS TIFU TRÊS TIFU QUANTOS TIFU DEU?',40028922,2),(16,'EDMUNDO PINTO DE ALMEIDA NETO','Urbana','Federal','UM TIFU DOIS TIFU TRÊS TIFU QUANTOS TIFU DEU?',99999999999,3);
/*!40000 ALTER TABLE `unidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `urbana`
--

DROP TABLE IF EXISTS `urbana`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `urbana` (
  `idurbana` int(11) NOT NULL AUTO_INCREMENT,
  `municipio_urbana` varchar(50) NOT NULL,
  `endereco_rua_urbana` varchar(150) NOT NULL,
  `endereco_bairro_urbana` varchar(50) NOT NULL,
  `endereco_num_urbana` varchar(20) NOT NULL,
  `codigo_unidade_urbana` bigint(14) NOT NULL,
  PRIMARY KEY (`idurbana`,`codigo_unidade_urbana`),
  UNIQUE KEY `codigos_unidades_codigos_UNIQUE` (`codigo_unidade_urbana`),
  KEY `fk_urbana_codigos1_idx` (`codigo_unidade_urbana`),
  CONSTRAINT `fk_urbana_codigos1` FOREIGN KEY (`codigo_unidade_urbana`) REFERENCES `codigos` (`unidades_codigos`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `urbana`
--

LOCK TABLES `urbana` WRITE;
/*!40000 ALTER TABLE `urbana` DISABLE KEYS */;
INSERT INTO `urbana` VALUES (5,'Tarauacá','PERTO DA LOJA DA PAULA TEJANO','PINTO DURÃO','24',3);
/*!40000 ALTER TABLE `urbana` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'teste1','$2y$10$iyF0U.21UmLJyXuQyovByeWCiMmwl59CV1kygGCJBJTD5n229Wk8W'),(2,'teste2','$2y$10$Mk7KQpzrV8x0h1N.IunKVeODjmZlNskcMWfmV7Xt7H8qcLUr6rsbG'),(3,'teste3','$2y$10$OmqXTBbBwwG1/UmwYif7W.ZBK/PAUkD5leKoj1XO2zumchFoc5Hoi');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-22 17:19:17
