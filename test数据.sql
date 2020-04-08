-- MySQL dump 10.13  Distrib 8.0.19, for osx10.15 (x86_64)
--
-- Host: 127.0.0.1    Database: wanzhoujob
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'制造业','2020-04-08 07:55:14','2020-04-08 07:55:14',NULL),(2,'综合业','2020-04-08 07:55:14','2020-04-08 07:55:14',NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '公司名称',
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '公司全称',
  `introduce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '公司简介-介绍',
  `nature` tinyint NOT NULL COMMENT '公司性质',
  `scale` tinyint NOT NULL COMMENT '公司规模',
  `welfare` json NOT NULL COMMENT '公司福利',
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '公司logo图片',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '公司url地址',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '公司地址',
  `standby_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '公司备用名称',
  `contacts` int NOT NULL COMMENT '公司联系人',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '联系电话',
  `landline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '座机',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '邮箱地址',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'重庆要玩网络','重庆众恺网络科技有限公司','重庆要玩网络科技有限公司是国家级万州经济技术开发区招商引资的第一家，也是目前万州地区规模最大的集网络Web端游戏（页游）和移动端游戏（手游）研发、代理、发行、商业运营、市场推广和产业人才培训为一体的综合型互联网游戏企业。',2,2,'[\"包吃\", \"包住\", \"培训\", \"旅游\", \"岗位晋升\", \"奖金提成\"]','http://store.wanzhoujob.com/Upload/logo/201903/1552009401eo9ty.jpg','https://www.wanzhoujob.com/comabout_eaf00622416.html','重庆市万州区和平广场驿鑫城市之心A栋24楼重庆众恺网络科技有限公司','重庆市万州区和平广场驿鑫城市之心A栋24楼重庆众恺网络科技有限公司',0,'023-587***08','023-587***08','22323@qq.com','2020-04-08 07:56:26','2020-04-08 07:56:26'),(2,'重庆星米文化传媒有限公司','重庆星米文化传媒有限公司','星米文化传媒是一家集线上线下为一体的网络直播传媒公司。公司位于300多平的写字楼。有独立的更衣室，服装间。会议室。各部门分工明确。重点在于打造网络一线主播，培养网红，微电影演员等。只要你有梦想那就赶快联系我，让我们一起携手共进，砥砺前行',2,2,'[\"包吃\", \"包住\", \"培训\", \"旅游\", \"岗位晋升\", \"奖金提成\"]','http://store.wanzhoujob.com/Upload/logo/201905/1558411345dkilv.jpg','https://www.wanzhoujob.com/comabout_6e967133087.html','北山大道渝东花园路53号3-1','北山大道渝东花园路53号3-1',0,'023-583***28','023-583***28','22323@qq.com','2020-04-08 07:58:56','2020-04-08 07:58:56');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_category_maps`
--

DROP TABLE IF EXISTS `company_category_maps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_category_maps` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int NOT NULL,
  `category_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_category_maps`
--

LOCK TABLES `company_category_maps` WRITE;
/*!40000 ALTER TABLE `company_category_maps` DISABLE KEYS */;
INSERT INTO `company_category_maps` VALUES (1,1,1,'2020-04-08 07:59:16','2020-04-08 07:59:16',NULL),(2,1,2,'2020-04-08 07:59:16','2020-04-08 07:59:16',NULL),(3,2,1,'2020-04-08 07:59:20','2020-04-08 07:59:20',NULL),(4,2,2,'2020-04-08 07:59:20','2020-04-08 07:59:20',NULL);
/*!40000 ALTER TABLE `company_category_maps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_job_maps`
--

DROP TABLE IF EXISTS `company_job_maps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_job_maps` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int NOT NULL,
  `job_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_job_maps`
--

LOCK TABLES `company_job_maps` WRITE;
/*!40000 ALTER TABLE `company_job_maps` DISABLE KEYS */;
INSERT INTO `company_job_maps` VALUES (1,1,1,'2020-04-08 08:06:16','2020-04-08 08:06:16',NULL),(2,1,2,'2020-04-08 08:06:16','2020-04-08 08:06:16',NULL),(3,1,3,'2020-04-08 08:06:16','2020-04-08 08:06:16',NULL),(4,2,4,'2020-04-08 08:06:27','2020-04-08 08:06:27',NULL);
/*!40000 ALTER TABLE `company_job_maps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_fair`
--

DROP TABLE IF EXISTS `job_fair`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_fair` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `holding_time` date NOT NULL COMMENT '举办时间',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '招聘会标题',
  `host_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '主办单位',
  `introduce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '招聘会简介',
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '举办地点',
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '联系电话',
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '状态:1.可预定2.暂停预定3.已预订4.结束',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '招聘会图片',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_fair`
--

LOCK TABLES `job_fair` WRITE;
/*!40000 ALTER TABLE `job_fair` DISABLE KEYS */;
INSERT INTO `job_fair` VALUES (1,'2020-05-13','综合型人才招聘会','','招聘会的简介','万州区金泉路1号汇杰人才市场（光彩市场旁）','023-58580808',1,'','2020-04-08 08:03:58','2020-04-08 08:03:58');
/*!40000 ALTER TABLE `job_fair` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_fair_company_maps`
--

DROP TABLE IF EXISTS `job_fair_company_maps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_fair_company_maps` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `job_fair_id` int NOT NULL,
  `company_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_fair_company_maps`
--

LOCK TABLES `job_fair_company_maps` WRITE;
/*!40000 ALTER TABLE `job_fair_company_maps` DISABLE KEYS */;
INSERT INTO `job_fair_company_maps` VALUES (2,1,2,'2020-04-08 08:04:16','2020-04-08 08:04:16',NULL);
/*!40000 ALTER TABLE `job_fair_company_maps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `job_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '招聘标题',
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '招聘部门',
  `number` int NOT NULL COMMENT '招聘人数',
  `education` tinyint NOT NULL COMMENT '学历要求1.不限2.初中及以下3.初中4.高中5.大专6.本科7.硕士8.博士9.研究生',
  `work_experience` tinyint NOT NULL COMMENT '工作经验:1.不限2.应届毕业生皆可3.1年以下4.1~2年5.2~3年6.3~5年7.3年以上8.5年以上',
  `requirements` text COLLATE utf8_unicode_ci NOT NULL COMMENT '招聘要求',
  `sex` tinyint NOT NULL COMMENT '性别要求:1.不限2.男3.女',
  `min_age` int NOT NULL COMMENT '最小年龄要求',
  `max_age` int NOT NULL COMMENT '最大年龄要求',
  `manage_id` int NOT NULL COMMENT '负责人',
  `salary_above` int NOT NULL DEFAULT '0' COMMENT '初始工资',
  `salary_below` int NOT NULL DEFAULT '0' COMMENT '结束工资',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (1,'人事专员','不限',2,5,1,'1、负责招聘工作，应聘人员的预约，接待及面试；\n2、选择并且维护招聘渠道，并拓展新的招聘渠道，发布招聘广告；\n3、办理劳动关系中相关手续（报到，转正，调动，离职）。',1,20,27,0,2500,5000,'2020-04-08 08:00:25','2020-04-08 08:00:25',NULL),(2,'网游市场开发+包吃住','不限',4,1,1,'1、主要负责对方寻求合作渠道方，开拓公司旗下游戏产品市场，以及商务谈判 、关系维护为工作重点；\n2、负责渠道方客户的日常维护；\n3、负责对接产品厂商，寻求相关产品技术支持；',1,0,0,0,2500,5000,'2020-04-08 08:01:23','2020-04-08 08:01:23',NULL),(3,'产品指导员','不限',3,1,1,'1、年龄18~28岁，男女不限，专业不限，初中以上学历（中专以上应届毕业生优先），会电脑基本操作，具备网络销售推广经验者更具优势。\n2、吃苦耐劳、心态良好,反应灵敏、头脑灵活,工作积极主动、责任感强，善于网络沟通并与客户建立良好感情。',1,0,0,0,3000,6000,'2020-04-08 08:02:11','2020-04-08 08:02:11',NULL),(4,'主播','不限',100,1,1,'本公司需要活泼开朗的人才 能说会道 会才艺的优先 觉得自己有能力的都可以来试试 想咨询的可以直接加V ：yqw957 欢迎大家加入我们的团队！',1,0,0,0,2500,30000,'2020-04-08 08:02:56','2020-04-08 08:02:56',NULL);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (136,'2014_10_12_000000_create_users_table',1),(137,'2014_10_12_100000_create_password_resets_table',1),(138,'2020_04_04_140206_create_jobs_table',1),(139,'2020_04_04_142451_create_company_table',1),(140,'2020_04_04_144543_create_company_job_maps_table',1),(141,'2020_04_04_144604_create_job_fair_company_maps_table',1),(142,'2020_04_06_033318_create_job_fair_table',1),(143,'2020_04_06_050340_create_category_table',1),(144,'2020_04_08_134941_create_company_category_maps_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-08 17:00:53
