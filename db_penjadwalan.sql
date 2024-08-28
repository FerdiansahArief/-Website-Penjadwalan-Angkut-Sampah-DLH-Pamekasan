# Host: localhost  (Version 5.6.16)
# Date: 2022-09-02 00:38:25
# Generator: MySQL-Front 6.1  (Build 1.18)


#
# Structure for table "anggota"
#

DROP TABLE IF EXISTS `anggota`;
CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `id_petugas` int(11) NOT NULL,
  `id_pengangkut` int(11) DEFAULT NULL,
  `id_jadwal` int(11) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

#
# Data for table "anggota"
#

INSERT INTO `anggota` VALUES (9,9,5,3),(10,9,13,3),(11,9,0,3),(12,9,0,3),(13,3,8,4),(14,3,4,4),(15,3,0,4),(16,3,0,4);

#
# Structure for table "anggota_history"
#

DROP TABLE IF EXISTS `anggota_history`;
CREATE TABLE `anggota_history` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `id_petugas` int(11) NOT NULL,
  `id_pengangkut` int(11) DEFAULT NULL,
  `id_jadwal` int(11) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4;

#
# Data for table "anggota_history"
#

INSERT INTO `anggota_history` VALUES (69,3,4,48),(70,3,16,48),(71,3,17,48),(72,3,0,48),(73,3,4,1),(74,3,5,1),(75,3,15,1),(76,3,0,1),(77,5,8,2),(78,5,9,2),(79,5,0,2),(80,5,0,2),(81,9,5,3),(82,9,13,3),(83,9,0,3),(84,9,0,3),(85,3,8,4),(86,3,4,4),(87,3,0,4),(88,3,0,4);

#
# Structure for table "history"
#

DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `id_history` int(11) NOT NULL AUTO_INCREMENT,
  `id_jadwal` int(11) NOT NULL,
  `petugas` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_history`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4;

#
# Data for table "history"
#

INSERT INTO `history` VALUES (56,3,9,'2022-08-31','11:58:04','dikonfirmasi'),(57,4,3,'2022-08-31','11:59:47','dikonfirmasi');

#
# Structure for table "jadwal"
#

DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_petugas` int(11) DEFAULT NULL,
  `nama_rute` varchar(255) NOT NULL,
  `shift` varchar(255) DEFAULT NULL,
  `id_kendaraan` int(11) DEFAULT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "jadwal"
#

INSERT INTO `jadwal` VALUES (3,9,'Rute Bahar','06.00-09.00',1,'nonaktif'),(4,3,'Rute Nurrahman','06.00-09.00',4,'aktif');

#
# Structure for table "jadwal_history"
#

DROP TABLE IF EXISTS `jadwal_history`;
CREATE TABLE `jadwal_history` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_petugas` int(11) DEFAULT NULL,
  `nama_rute` varchar(255) NOT NULL,
  `shift` varchar(255) DEFAULT NULL,
  `id_kendaraan` int(11) DEFAULT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

#
# Data for table "jadwal_history"
#

INSERT INTO `jadwal_history` VALUES (49,3,'Rute Bahar','09.00-12.00',1,'aktif'),(50,5,'RUTE JAELANI','09.00-12.00',7,'aktif'),(51,9,'Rute Bahar','06.00-09.00',1,'aktif'),(52,3,'Rute Nurrahman','06.00-09.00',4,'aktif');

#
# Structure for table "kendaraan"
#

DROP TABLE IF EXISTS `kendaraan`;
CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT,
  `no_polisi` varchar(20) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kendaraan`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "kendaraan"
#

INSERT INTO `kendaraan` VALUES (1,'m 6969 kjx','Roda 3'),(4,'j 78 n','Roda 4'),(5,'m 111 k','Roda 3'),(6,'m 67679 k','Roda 3'),(7,'m 1111 k','Roda 3'),(8,'j 78 nk','Roda 4');

#
# Structure for table "laporan"
#

DROP TABLE IF EXISTS `laporan`;
CREATE TABLE `laporan` (
  `id_hari` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_hari`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "laporan"
#


#
# Structure for table "rute"
#

DROP TABLE IF EXISTS `rute`;
CREATE TABLE `rute` (
  `id_jalan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jalan` varchar(255) DEFAULT NULL,
  `batas_armada` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jalan`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

#
# Data for table "rute"
#

INSERT INTO `rute` VALUES (9,'Jl. Jokotole','4'),(10,'Jl. Panglima Sudirman','4'),(11,'Jl. Diponogoro','4'),(12,'Jl. Kabupaten','4'),(13,'Jl. Bahagia','4'),(14,'Jl. Dirgahayu','4'),(15,'Jl. Trunojoyo','4'),(16,'Jl. Raya Panglegur','4'),(17,'Jl. Jalmak','4'),(18,'Jl. Teja','4'),(19,'Jl. Gurem','4'),(20,'Jl. Cokro Atmojo','4'),(21,'Jl. Bonorogo','4'),(22,'Jl. Nugroho','4'),(23,'Jl. Letnan Maksum','4'),(24,'Jl. Ronggosukowati','4'),(25,'Jl. Gatot Koco','4'),(26,'Jl. Wahid Hasyim','4'),(27,'Jl. Niaga','4'),(28,'Jl. Kemuning','4'),(29,'Jl. Kamboja','4'),(30,'Jl. Sruni','4'),(31,'Jl. Agus Salim','4'),(32,'Jl. Brawijaya','4'),(33,'Ds. Buddagan','4'),(34,'Jl. Balaikambang','4'),(35,'Jl. Kesehatan','4'),(36,'Jl. Mandilaras','4'),(37,'Jl. Sersan Mesrul','4'),(38,'Jl. Pintu Gerbang','4'),(39,'Jl. Stadion','4'),(40,'Jl. Jingga','4'),(41,'Jl. Purba','4'),(42,'Jl. Abd. Aziz','4'),(43,'Jl. Segara','4'),(44,'Jl. KH. Amin Jakfar','4');

#
# Structure for table "rute_rute"
#

DROP TABLE IF EXISTS `rute_rute`;
CREATE TABLE `rute_rute` (
  `id_rute` int(11) NOT NULL AUTO_INCREMENT,
  `nama_rute` varchar(255) NOT NULL,
  `id_jalan` int(11) NOT NULL,
  PRIMARY KEY (`id_rute`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;

#
# Data for table "rute_rute"
#

INSERT INTO `rute_rute` VALUES (37,'Rute Bahar',9),(38,'Rute Bahar',10),(39,'Rute Bahar',11),(40,'Rute Bahar',12),(41,'Rute Bahar',13),(42,'Rute Bahar',14),(43,'Rute Nurrahman',15),(44,'Rute Nurrahman',16),(45,'Rute Nurrahman',17),(46,'Rute Nurrahman',18),(47,'Rute Nurrahman',19),(48,'Rute Nurrahman',20),(49,'RUTE SAID',39),(50,'RUTE SAID',40),(51,'RUTE SAID',41),(52,'RUTE SAID',42),(53,'RUTE SAID',43),(54,'RUTE SAID',44),(55,'RUTE JAELANI',34),(56,'RUTE JAELANI',35),(57,'RUTE JAELANI',36),(58,'RUTE JAELANI',37),(59,'RUTE JAELANI',38),(60,'RUTE JAELANI',31),(61,'RUTE SAHRAJI',27),(62,'RUTE SAHRAJI',28),(63,'RUTE SAHRAJI',30),(64,'RUTE SAHRAJI',32),(65,'RUTE SAHRAJI',33);

#
# Structure for table "tb_pengangkut"
#

DROP TABLE IF EXISTS `tb_pengangkut`;
CREATE TABLE `tb_pengangkut` (
  `id_pengangkut` int(11) NOT NULL AUTO_INCREMENT,
  `nik_pengangkut` int(20) NOT NULL,
  `nama_pengangkut` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  PRIMARY KEY (`id_pengangkut`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tb_pengangkut"
#

INSERT INTO `tb_pengangkut` VALUES (4,2147483647,'FARUQ','JL. GHAZALI','Islam','Laki-Laki','087456123456','aktif'),(5,789787896,'HASAN','JL. SHINHAJI','Islam','Laki-Laki','08564777412','aktif'),(8,6788,'JOKO','JL. BHAYANGKARA','Islam','Laki-Laki','082561345784','aktif'),(9,12345,'HENDRA','JL. PURBA','Islam','Laki-Laki','-','aktif'),(11,1212,'SULI','JL. GHAZALI','Islam','Laki-Laki','087236541478','aktif'),(12,7845,'ARIFIN','JL. NIAGA','Islam','Laki-Laki','0835621367894','aktif'),(13,8745,'JAMALI','JL. PANEMPAN','Islam','Laki-Laki','082145623541','aktif'),(14,78456,'RIZALDI','JL. BALAIKAMBANG','Islam','Laki-Laki','087750456231','aktif'),(15,854697,'SONI','JL. VETRAN','Islam','Laki-Laki','08775042014578','aktif'),(16,12345678,'FIRMAN','JL. MASJID PATEMON','Islam','Laki-Laki','083256345124','aktif'),(17,6789,'BAMBANG','JL. LETNAN MAKSUM','Islam','Laki-Laki','081114568452','aktif');

#
# Structure for table "tb_status"
#

DROP TABLE IF EXISTS `tb_status`;
CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `id_jadwal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tb_status"
#

INSERT INTO `tb_status` VALUES (56,45,3,'2022-08-30','15:46:33','dikonfirmasi'),(58,47,3,'2022-08-30','16:04:39','dikonfirmasi'),(60,48,3,'2022-08-30','16:15:56','dikonfirmasi'),(61,3,9,'2022-08-31','11:58:04','dikonfirmasi'),(62,4,3,'2022-08-31','11:59:47','dikonfirmasi');

#
# Structure for table "tbl_user"
#

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(20) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "tbl_user"
#

INSERT INTO `tbl_user` VALUES (1,12345607,'Susi ','Madura','Islam','Perempuan','susisusi','8911111','super','aktif'),(2,12345608,'susan','pmksan','Islam','Perempuan','1234','98765','admin','aktif'),(3,671283,'NURRAHMAN','JL. MASEGIT','Islam','Laki-Laki','NURRAHMAN','08258745136','petugas','aktif'),(4,1234567,'kepalamu','jwasqat','Islam','Laki-Laki','12345','9999999','kepala','aktif'),(5,1234,'BAHAR','JL. LETNAN MAKSUM','Islam','Laki-Laki','BAHAR','087750124567','petugas','aktif'),(9,5675467,'JAELANI','JL. KAMBOJA','Islam','Laki-Laki','JAELANI','083451124754','petugas','aktif'),(10,11112222,'kobo','yututu','Katolik','Laki-Laki','1234','765432','admin','aktif'),(11,12345,'SAID','JL. NIAGA','Islam','Laki-Laki','SAID','087874445512','petugas','aktif'),(12,12,'MUHARRAM','JL. BONOROGO','Islam','Laki-Laki','MUHARRAM','081939145224','petugas','aktif'),(13,87281,'SAHRAJI','DS. MURTAJIH','Islam','Laki-Laki','SAHRAJI','085451323657','petugas','aktif');
