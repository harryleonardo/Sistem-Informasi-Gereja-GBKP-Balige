/*
SQLyog Ultimate v8.6 Beta2
MySQL - 5.5.27 : Database - siger
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`siger` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `siger`;

/*Table structure for table `auth_assignment` */

DROP TABLE IF EXISTS `auth_assignment`;

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_assignment` */

insert  into `auth_assignment`(`item_name`,`user_id`,`created_at`) values ('admin','2',NULL),('member','1',NULL);

/*Table structure for table `auth_item` */

DROP TABLE IF EXISTS `auth_item`;

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item` */

insert  into `auth_item`(`name`,`type`,`description`,`rule_name`,`data`,`created_at`,`updated_at`) values ('admin',1,'admin can manage system',NULL,NULL,NULL,NULL),('member',1,'member can acces system',NULL,NULL,NULL,NULL);

/*Table structure for table `auth_item_child` */

DROP TABLE IF EXISTS `auth_item_child`;

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item_child` */

insert  into `auth_item_child`(`parent`,`child`) values ('admin','member');

/*Table structure for table `auth_rule` */

DROP TABLE IF EXISTS `auth_rule`;

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_rule` */

/*Table structure for table `dataanak` */

DROP TABLE IF EXISTS `dataanak`;

CREATE TABLE `dataanak` (
  `id_anak` int(10) NOT NULL AUTO_INCREMENT,
  `nama_anak` varchar(64) DEFAULT NULL,
  `tempat_lahir` varchar(64) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tanggal_baptis` date DEFAULT NULL,
  `id_keluarga` int(11) NOT NULL,
  PRIMARY KEY (`id_anak`),
  KEY `keluarga_ref` (`id_keluarga`),
  CONSTRAINT `keluarga_ref` FOREIGN KEY (`id_keluarga`) REFERENCES `datakeluarga` (`id_datakeluarga`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

/*Data for the table `dataanak` */

insert  into `dataanak`(`id_anak`,`nama_anak`,`tempat_lahir`,`tanggal_lahir`,`tanggal_baptis`,`id_keluarga`) values (1,'Harry Leonardo Lumbanraja','1996-10-16','0000-00-00','0000-00-00',1),(2,'Harry Leonardo Lumbanraja','1996-10-16','0000-00-00','0000-00-00',2),(3,'Jokowi','Sidikalang','1999-01-16','0000-00-00',2),(4,'Harry Leonardo Lumbanraja','1996-10-16','0000-00-00','0000-00-00',3),(5,'Jokowi','Sidikalang','1999-01-16','0000-00-00',3),(6,'','','0000-00-00','0000-00-00',4),(7,'ALOINA MAJESTI TARIGAN','Balige','2000-11-09','2000-12-26',5),(8,'NINTA ELSHADAI TARIGAN','Medan','2004-05-15','2004-06-20',5),(9,'PAULUS PENGARAPEN TARIGAN','Balige','2008-01-18','2008-02-17',5),(10,'DINDA CAROLINE DEPARI','Medan','1997-09-17','1998-06-28',6),(11,'ALENDE BASTOTONTA DEPARI','Medan','2000-03-27','2002-07-14',6),(13,'ELYSIA FIORENZA PURBA','Balige','2012-11-28','2014-06-22',8),(14,'DICKY SURYA AIDIMA SIHOTANG','Balige','2003-09-09','2003-11-16',9),(15,'','','0000-00-00','0000-00-00',10),(16,'DAVIN ABIEL GINTING','Medan','2009-07-20','0000-00-00',11),(17,'DENI PRIMA PUTRA ROLI SEMBIRING','Porsea','1992-06-19','1993-05-07',12),(18,'INDRA ELIESER SEMBIRING','Porsea','1994-04-22','1994-10-31',12),(19,'DANIEL PRANATA SEMBIRING','Porsea','1996-03-05','1996-09-01',12),(20,'SEPRIYANTI VERONIKA BARUS','Porsea','1992-09-18','0000-00-00',13),(21,'MEDY SAPUTRA BARUS','Porsea','1994-03-11','1994-10-30',13),(22,'JOSUA KRISTIAN BARUS','Porsea','1997-12-11','1998-03-22',13),(23,'CHIA REHULINA BARUS','Porsea','2000-05-06','2001-07-29',13),(24,'CHRISTOVER PASARIBU','Balige','1993-02-12','1993-05-02',14),(25,'GRACE ELVIORETHA','Laguboti','1996-02-02','1996-09-01',14),(26,'EGY RENAYU PASARRIBU','Laguboti','1997-10-22','2000-06-01',14),(27,'MELIYONANDA PASARIBU','Laguboti','1999-12-05','2000-06-01',14),(28,'DIN YULIETHA PASARIBU','Laguboti','2002-07-28','2002-09-08',14),(29,'OSNIELD STEVEN BARUS','Berastagi','2008-09-29','2009-02-15',15),(30,'GERALD VALENTINO BARUS','Laguboti','2010-02-16','2011-07-10',15),(31,'CAROL PATRICIA BARUS','Balige','2012-07-27','2013-05-13',15),(32,'DELLA HAGATA TARIGAN','Delitua','2008-06-26','2008-12-28',16),(33,'','','0000-00-00','0000-00-00',17),(34,'BANTA SOLAGRATIA','Balige','2000-02-13','2000-06-01',18),(35,'LOUIS RIEMENN','Balige','2001-05-09','2001-10-14',18),(36,'ALBERT PERSADA SITEPU','Medan','2005-01-04','0000-00-00',19),(37,'KELVIN GHANINTA SITEPU','Medan','2007-01-09','2007-04-22',19),(38,'WINNY TAMARA SITEPU','Medan','2009-07-07','2010-05-30',19),(39,'SONNY FRISKO TIMMYANTO KARO-KARO','Porsea','1989-06-12','1989-12-26',20),(40,'ANDRIE ANDREAS KARO-KARO','Porsea','1991-07-17','1991-12-26',20),(41,'ERON FEBRINATA KARO-KARO','Lubuk Pakam','1994-02-20','1994-08-28',20),(42,'YOSEPH VERNANDO KARO KARO','Porsea','1997-01-05','1997-07-20',20),(43,'WIDA LAUREN KARO KARO','Medan','1990-10-12','0000-00-00',21),(44,'RUTH FEBRIANA KARO KARO','Medan','1995-02-21','0000-00-00',21),(45,'FRANS JOSUA KARO KARO','Medan','2000-03-16','0000-00-00',21),(46,'ELSANTA KARO KARO','Pancur Batu','2002-05-14','0000-00-00',21),(47,'AYUB KARO KARO','Medan','2005-01-25','0000-00-00',21),(49,'MARWANTA DACE SINULINGGA','Tuntungan','1987-03-12','0000-00-00',22),(50,'LELY OPHINE BR SINULINGGA','Tuntungan','1989-10-25','1989-11-12',22),(51,'NOPIGA PAHALA SINULINGGA','Tuntungan','1991-11-08','1993-07-25',22),(52,'HAGAI RAJA SINULINGGA','Tuntungan','1998-06-21','1999-12-26',22),(53,'BELTSAZAR GINTING','Pancur Batu','1995-08-02','1996-09-01',23),(54,'WIDYA OKTAVIA GINTING','Porsea','1997-10-11','1998-03-22',23),(55,'ECHI ANESIA BR GINTING','Porsea','2000-05-29','1003-11-16',23),(56,'','','0000-00-00','0000-00-00',24),(57,'MADELINE ALONA GIZA SURBAKTI','','2014-09-06','0000-00-00',25),(58,'SARI LAMTIO','Balige','1998-02-23','1999-08-01',26),(59,'IRVAN TUAH KRISTIAN','Laguboti','2001-01-08','2001-10-14',26),(60,'ID GUNAWAN','Laguboti','2004-01-03','2007-05-17',26),(61,'ELMA DEMINA BR TARIGAN','Medan','2015-06-01','0000-00-00',27),(62,'','','0000-00-00','0000-00-00',28),(63,'SAMUEL GURUSINGA','Siborong-borong','2000-08-10','2001-10-14',29),(64,'ANDRE GURUSINGA','Porsea','2002-05-15','2004-10-31',29),(65,'NICO GURUSINGA','Porsea','2004-09-26','2004-10-31',29),(66,'RAFAEL SAMUDRA GINTING','Medan','2012-04-24','2012-07-15',30),(67,'JEPRI HARATUA SEMBIRING','Porsea','1994-05-01','1994-08-28',31),(68,'SANDY LESMANA SEMBIRING','Porsea','1996-07-21','1997-07-20',31),(69,'HAFNI SAGITA BR SEMBIRING','Balige','1999-03-08','2002-12-26',31),(70,'HAFSA RITA THREESIA BR SEMBIRING','Balige','1999-03-08','2002-12-26',31),(71,'','','0000-00-00','0000-00-00',32);

/*Table structure for table `databaptis` */

DROP TABLE IF EXISTS `databaptis`;

CREATE TABLE `databaptis` (
  `id_databaptis` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_baptis` date DEFAULT NULL,
  `tempat_baptis` varchar(64) DEFAULT NULL,
  `no_registrasi` int(16) DEFAULT NULL,
  `dilayani_oleh` varchar(64) DEFAULT NULL,
  `id_datagereja` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_databaptis`),
  KEY `ref_datagereja` (`id_datagereja`),
  CONSTRAINT `ref_datagereja` FOREIGN KEY (`id_datagereja`) REFERENCES `datagereja` (`id_datagereja`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `databaptis` */

insert  into `databaptis`(`id_databaptis`,`tanggal_baptis`,`tempat_baptis`,`no_registrasi`,`dilayani_oleh`,`id_datagereja`) values (1,'2000-10-16','Sidikalang',10,'Pdt Bonar',1),(2,'2000-10-16','Sidikalang',1,'Pdt Bonar',2),(3,'2000-10-16','Sidikalang',10,'Pdt Bonar',3),(4,'0000-00-00','GPDI Bethesda Kabanjahe',0,'Pdt Yosua Sinukaban',4),(5,'0000-00-00','',0,'',5),(6,'1981-04-05','GBKP Pembangunan USU',43988,'Pdt S K Ginting S',6),(12,'1991-02-24','GBKP',36227,'Pdt G Surbakti',12),(13,'1960-11-20','KATOLIK Hutaginjang',0,'Pastor P J Wynen',13),(14,'1982-02-21','GBKP Runggun Batusanggehen',24089,'Pdt M Tarigan',14),(15,'0000-00-00','',0,'',15),(16,'0000-00-00','',0,'',16),(17,'1982-05-09','GBKP Peria-ria',2546,'Pdt S Surbakti',17),(18,'1967-08-27','HKBP Gunting Kopo',1943,'Pdt K Tampubolon',18),(19,'1984-12-02','GBKP',68034,'Pdt S Sembiring',19),(20,NULL,'GBKP Delitua',0,'',20),(21,'1981-12-13','GBKP Klasis Lubuk Pakam',11043,'Pdt P Bukit',21),(22,'1988-11-27','GBKP Kuala Lau Bicik',33090,'Pdt J Barus',22),(23,'1967-05-07','GBKP Rg Madong Lubis',18796,'Pdt T H Sidabutar MTh',23),(24,'0000-00-00','',0,'',24),(25,'0000-00-00','GBKP Lau Peranggunen',0,'',25),(26,'1978-09-24','GBKP KSD K Tani',20617,'Pdt S Sitepu',26),(27,'1973-09-02','KERISTEN INJIL DIDIAS PORA KOTA RAJA',25,'Pdt A Pattiasina',27),(28,'0000-00-00','',0,'',28),(29,'0000-00-00','GBKP Medan Helvetia',0,'',29),(30,'1977-01-16','GBKP Tanjung Langkat',4214,'Pdt P Pandia',30),(31,'1977-09-04','GBKP Rg Tebing Tinggi',0,'Pdt Arsyad Pandia',31),(32,'0000-00-00','',0,'',32),(33,'1997-05-14','GBKP Paya Itik',0,'Pdt J Keliat',33),(34,'1985-11-03','GBKP Pancur Batu',29330,'Pdt S Sitepu',34),(35,'1982-07-04','GBKP Desa Beganding',60288,'Pdt Ng Surbakti',35),(36,'1991-11-10','GBKP RG Suka',84945,'Pdt U Purba',36);

/*Table structure for table `datadiri` */

DROP TABLE IF EXISTS `datadiri`;

CREATE TABLE `datadiri` (
  `id_datadiri` int(10) NOT NULL AUTO_INCREMENT,
  `nomor_anggota` int(16) DEFAULT NULL,
  `sektor` varchar(64) DEFAULT NULL,
  `nama_lengkap` varchar(64) DEFAULT NULL,
  `tempat_lahir` varchar(64) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `alamat_jelas` varchar(64) DEFAULT NULL,
  `golDarah` varchar(10) DEFAULT NULL,
  `pendidikan` varchar(64) DEFAULT NULL,
  `bidang_Ilmu` varchar(64) DEFAULT NULL,
  `spesifikasi` varchar(64) DEFAULT NULL,
  `pekerjaan` varchar(64) DEFAULT NULL,
  `aktivitasDiMasyarakat` varchar(64) DEFAULT NULL,
  `no_telp` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_datadiri`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `datadiri` */

insert  into `datadiri`(`id_datadiri`,`nomor_anggota`,`sektor`,`nama_lengkap`,`tempat_lahir`,`tanggal_lahir`,`jenis_kelamin`,`status`,`alamat_jelas`,`golDarah`,`pendidikan`,`bidang_Ilmu`,`spesifikasi`,`pekerjaan`,`aktivitasDiMasyarakat`,`no_telp`) values (1,11314024,'1','Harry Leonardo Lumbanraja','Sidikalang',NULL,'L','Belum Menikah','Jalan Trikora No 63','A','D3','Tekhnik','Test','BUMN','Aktif','+6281362799552'),(2,11314024,'2','Harry Leonardo Lumbanraja','Sidikalang',NULL,'L','Belum Menikah','Jalan Trikora No 63','A','D3','Tekhnik','Test','TNI','Aktif','+6282272762580'),(3,11314024,'3','Marvin Gaye','Sidikalang',NULL,'L','Istri','Jalan Trikora No 63','B','D3','Tekhnik','Test','Pegawai Negeri','Test','+6282273527390'),(4,11016,'1','JUSAK NATARDIKA TARIGAN ','Kabanjahe','1982-12-19','L','Menikah','Jalan TB Silalahi Kel Pagar Batu-Balige','A','D3','Tekhnik','Tekhnik Industri','Pegawai Negeri','Guru KA - Organis','+6282272762581'),(5,11016,'1','SANIOVA TARIGAN','Medan','1971-10-20','L','Menikah','Kompleks Lestari Jln Baba Lubis No 6 Kel Pardede Onan Kec Balige','O','S2','Ekonomi','Ekonomi','BUMN','Pelayan Gereja','+628126307066'),(6,11015,'1','UNITERA ABDI LIMPAR DEPARI','Perbesi','1965-07-03','L','Menikah','Jalan Adhiyaksa Ujung No 138','B','S1',NULL,NULL,'Pegawai Negeri',NULL,NULL),(13,110155138,'1','SUNARDI PURBA','Kuta Raya',NULL,'L','Menikah','Jalan Patuan Nagari Polsek Balige','O','SLTA','Hukum','Polri','POLRI','Jemaat','+6281263932136'),(14,110155142,'1','MANGASI SIHOTANG','Hutaginjang',NULL,'L','Menikah','Jalan TB Silalahi','O','S1','Pendidikan','Pendidikan Kimia','Guru','Jemaat','+6285296757262'),(15,110155143,'1','SASTRAWAN SITEPU ','Sibolangit',NULL,'L','Belum Menikah','Jalan Kartini Soposurung','O','SD','','','Wiraswasta','Jemaat','+6281397504961'),(16,110153962,'3','LIT MALEM GINTING','Medan','1978-09-18','L','Menikah','Perumahan Dosen Del - Desa Sitoluama','AB','S2','Tekhnik',NULL,'Dosen',NULL,'+6281362799552'),(17,110154046,'2','JAKUP SEMBIRING','Pancur Batu','1966-08-16','L','Menikah','Kompleks TPL - Desa Banjar Ganjang','B','S1','Hukum',NULL,'Pegawai Negeri','Jemaat','+6281396031597'),(18,110154045,'2','JASMANI BARUS ','Penungkiren',NULL,'L','Menikah','Kompleks PT TPL 16 F','O','SLTA','','','Pegawai Swasta','Masyarakat','+6281375099707'),(19,110153950,'3','RIHAT PASARIBU','Gonting Kopo','1967-01-02','L','Menikah','Jalan Simpang Arjuna Pintu Bosi Kec Laguboti','A','S1','Ekonomi',NULL,'Pegawai Negeri','Masyarakat','+6281361374650'),(20,110154034,'3','IWAN BOY BARUS ','Berastagi','1983-09-17','L','Menikah','Kompleks Perumahan KORPRI No 79 Sibarani Nasampulu','O','SLTA','','','Wiraswasta','','+6281376689565'),(21,110154031,'3','PUTRA NATAL TARIGAN ','Deli Tua','1965-12-24','L','Menikah','Laguboti Jalan Sisingamangaraja','O','S1','Tekhnik','','Pegawai Negeri','Masyarakat','+6281375875245'),(22,110154030,'1','FRANKY HADINATA SITEPU','Medan','1980-12-08','L','Menikah','Jalan Aek Batu, Desa Sariburaja Janji Maria','B','S1','Kedokteran','Dokter Umum','Pegawai Negeri','Pengurus IDI Cabang Tobasa','+6281340779940'),(23,110154033,'3','BANTU GINTING','Kuala Lau Bicik','1972-09-23','L','Menikah','Sitoluama','B','S1','Pendidikan','Matematika','Guru','Masyarakat','+6282272762582'),(24,110154041,'2','THOMAS BAHAGIA SITEPU ','Medan','1966-04-10','L','Menikah','Kompleks PT TPL Porsea Town Site A No 14 E/B','O','D3','','','Pegawai Swasta','Masyarakat','+6281361691030'),(25,110153956,'2','ELYAS SADAR KARO-KARO','Deli Tua','1964-04-09','L','Menikah','Town Side B','B','SLTA','','','Pegawai Swasta','Masyarakat','+628137534039'),(26,110153955,'2','PIRMAN KARO KARO ','Lau Peranggunen','1961-03-22','L','Menikah','Kompleks Perumahan PT TPL Porsea','B','S1','Tekhnik','Sarjana Teknik Mesin','Pegawai Swasta','Masyarakat','+6281376937200'),(27,110153948,'2','GOSPIN SINULINGGA ','Keriahen Tani','1962-07-25','L','Menikah','Kompleks PT TPL TS A 16 D','O','S1','','Fisika','Pegawai Swasta','Masyarakat','+6281361736003'),(28,110153947,'2','DANIEL JAYA GINTING ','Pyramid Jayawijaya Irja','1970-01-17','L','Menikah','Kompleks PT TPL TS C No 93 F','O','SLTA','','','Pegawai Swasta','Masyarakat','+6281375922373'),(29,110154035,'3','ERSON SEMBIRING ','Sukandebi','1978-06-01','L','Menikah','Jalan Sisingamangaraja','O','S1','Tekhnik','Sipil Struktur','Wiraswasta','Masyarakat','+6281375247768'),(30,110154032,'3','ARI PRANATA SURBAKTI ','Medan','1989-08-06','L','Menikah','Perumahan KORPRI Sibarani Nasampulu','O','S1','Hukum','','POLRI','Masyarakat','+6285359698687'),(31,110153958,'3','SERASI SEMBIRING','Buluh Duri','1969-12-29','L','Menikah','Perumahan KORPRI No 148 Landbolu Sibarabi Nasampulu Namungkup','B','SLTA','Hukum','','Pegawai Negeri','Masyarakat','+6281396223981'),(32,110156440,'1','MAKARIOS TARIGAN ','Tebing Tinggi','1977-08-29','L','Menikah','Soposurung','O','D1','Komputer','','Wiraswasta','Masyarakat','+6281260370900'),(33,110156441,'1','TENANG GINTING ','Pancur Batu','1972-01-20','L','Menikah','Jalan Patuan Nagari No 01 Balige Kec Balige Kab Tobasa','O','SLTA','Hukum','TNI','TNI','Masyarakat',''),(34,110153961,'1','HENDRA GURUSINGA ','Sibiru-biru','1975-02-12','L','Menikah','Jalan Tarutung','O','SD','Ekonomi','Niaga','Wiraswasta','Masyarakat','+6282167798514'),(35,110155141,'1','SENIORA NUSANTARA GINTING ','Medan','1984-03-17','L','Menikah','Jalan Serma Muda','O','S1','Ekonomi',NULL,'Pegawai Negeri','Masyarakat','+6281364640569'),(36,110154040,'2','ROBION SEMBIRING','Kabanjahe','1966-05-12','L','Menikah','Kompleks PT TPL TS A No 11E','AB','SLTA','','','Pegawai Swasta','Masyarakat',''),(37,110153959,'1','HERI PINDONTA GINTING','Suka','1985-11-07','L','Menikah','Tambunan Sunge','B','S1','Teologia','Praktika','Pendeta','Masyarakat','+6281396695096');

/*Table structure for table `datagereja` */

DROP TABLE IF EXISTS `datagereja`;

CREATE TABLE `datagereja` (
  `id_datagereja` int(11) NOT NULL AUTO_INCREMENT,
  `asal_gereja` varchar(64) DEFAULT NULL,
  `aktivitas_diGereja` varchar(64) DEFAULT NULL,
  `status_keanggotaan` varchar(64) DEFAULT NULL,
  `id_datadiri` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_datagereja`),
  UNIQUE KEY `id_datadiri` (`id_datadiri`),
  CONSTRAINT `FK_datadiri` FOREIGN KEY (`id_datadiri`) REFERENCES `datadiri` (`id_datadiri`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `datagereja` */

insert  into `datagereja`(`id_datagereja`,`asal_gereja`,`aktivitas_diGereja`,`status_keanggotaan`,`id_datadiri`) values (1,'GKPI','Pemuda-pemudi','Aktif',1),(2,'GKPI','Pemuda-pemudi','Aktif',2),(3,'GKPI','Pemuda-pemudi','Aktif',3),(4,'GPDI Bethesda Kabanjahe','Organis','Aktif',4),(5,'GBKP','Pelayan Gereja','Aktif',5),(6,'','','',6),(12,'Jalan Kutacane Tiga Binanga','Jemaat','Aktif',13),(13,'KATOLIK','Jemaat','Anggota',14),(14,'GBKP Runggun Batu Sanggehen','Jemaat','Aktif',15),(15,'GBKP Pokok Mangga Medan','Jemaat','Aktif',16),(16,'GBKP Gunung Tinggi Pancur Batu','Jemaat','Aktif',17),(17,'GBKP Peria-ria','Jemaat','Aktif',18),(18,'HKBP Gunting Kopo','Serayaan (Diaken)','Aktif',19),(19,'GBKP','Jemaat','Aktif',20),(20,'DELITUA','Bendahara Mamre','Aktif',21),(21,'GBKP Rg Ketaren','Pengurus Pjj Sektor','Aktif',22),(22,'GBKP Kuala Lau Bicik','Guru Kakr','Aktif',23),(23,'GBKP Rg Bangun Mulia','Anggota Ngawan/Pengurus PJJ/Organis','Aktif',24),(24,'GBKP Pasar VI Deli Tua','Jemaat','Aktif',25),(25,'GBKP Runggun Km 4 Padang Bulan Medan','Pengurus Gereja, Ketua Marturia Runggun','Aktif',26),(26,'KSD Tuntungan','Jemaat','Aktif',27),(27,'KERISTEN INJIL DIDIAS PORA KOTA RAJA','Jemaat','Aktif',28),(28,'GBKP Sukandebi','Jemaat','Aktif',29),(29,'GBKP Medan Helvetia','Jemaat','Aktif',30),(30,'GBKP Tanjung Langkat','Jemaat','Aktif',31),(31,'GBKP Rg Balige','Anggota/Ngawan','Aktif',32),(32,'GBKP Pancur Batu','Jemaat','Aktif',33),(33,'GBKP Paya Itik','Jemaat','Aktif',34),(34,'GBKP','Pengurus Pembangunan Pengurus PJJ Sektor','Aktif',35),(35,'GBKP Desa Beganding Kec Simp IV Kab Karo','Jemaat','Aktif',36),(36,'GBKP Runggun Suka','Pendeta','Aktif',37);

/*Table structure for table `dataistri` */

DROP TABLE IF EXISTS `dataistri`;

CREATE TABLE `dataistri` (
  `id_istri` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(64) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tanggal_baptis` date DEFAULT NULL,
  `no_baptis` int(11) DEFAULT NULL,
  `tanggal_sidi` date DEFAULT NULL,
  `no_registrasi` int(16) DEFAULT NULL,
  `asal_gereja` varchar(64) DEFAULT NULL,
  `id_keluarga` int(10) NOT NULL,
  PRIMARY KEY (`id_istri`),
  KEY `dataistri_ref` (`id_keluarga`),
  CONSTRAINT `dataistri_ref` FOREIGN KEY (`id_keluarga`) REFERENCES `datakeluarga` (`id_datakeluarga`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `dataistri` */

insert  into `dataistri`(`id_istri`,`nama`,`tanggal_lahir`,`tanggal_baptis`,`no_baptis`,`tanggal_sidi`,`no_registrasi`,`asal_gereja`,`id_keluarga`) values (1,'H Lumbanraja','1999-10-16','2000-12-12',10,'2025-10-16',10,'Sidikalang',1),(2,'H Lumbanraja','1990-12-12','1239-12-12',10,'2025-10-16',192,'GKPI',2),(3,'H Lumbanraja','1999-12-10','1999-10-09',10,'2025-10-16',10,'GBKP',3),(4,'Siska br Sinuraya Spd','1987-06-17',NULL,4184,NULL,NULL,'GBKP Rg Balige',4),(5,'Dewi Romauli Barasa','1971-06-23',NULL,NULL,NULL,NULL,'GKPPD Dairi',5),(6,'Evalyna Sunlingga','1974-07-31','1980-05-25',80,'1991-11-24',7424,'GBKP Pembangunan USU',6),(8,'NERVI LAOREN E.SIMAJUNTAK','1984-02-21','1984-06-24',1660,'2001-06-10',3,'Huria Kristen Indonesia (HKI)',8),(9,'CARINTA BR TARIGAN','1971-07-23','1980-12-21',16020,'1995-07-15',384,'GBKP Sarimunte',9),(10,'',NULL,NULL,NULL,NULL,NULL,'',10),(11,'NOVA LOVIGA SEMBIRING','1980-11-11',NULL,NULL,NULL,NULL,'GBKP Berastagi Kota',11),(12,'RUSMANI BR MANURUNG','1968-01-30',NULL,NULL,'1983-09-11',NULL,'HKBP Lumban Huala',12),(13,'SONTA SINAGA','1968-12-17','0000-00-00',0,'1991-02-23',NULL,'HKBP Pardomuan',13),(14,'ERNITA TARIGAN','1965-12-19','0000-00-00',0,'1980-08-24',1195,'GBKP Rg Penara Klasis GBKP Lubuk Pakam',14),(15,'RIA MASTA MANIK','1982-06-29','1989-12-31',1252,'2008-04-13',397,'GBKP Pasar Pitu Padang Bulan',15),(16,'JOHELITA BR KELIAT','1963-10-04','0000-00-00',0,'1980-07-13',66,'GBKP Sikeben',16),(17,'','0000-00-00','0000-00-00',0,'0000-00-00',0,'',17),(18,'RISTA SIREGAR','1973-07-29','0000-00-00',0,'0000-00-00',0,'HKBP Sukandebi',18),(19,'ROHANSA EFERIDA GINTING','1971-07-27','0000-00-00',0,'1988-12-25',9831,'GBKP Rg Galang',19),(20,'BONUR DORLAN Br BUTAR-BUTAR','1965-08-19','1966-02-27',0,'0000-00-00',0,'HKBP Pardomuan',20),(21,'MINARIA PANDIA','1980-10-23','0000-00-00',0,'2001-07-29',141,'GBI Pertampilen Pancur Batu',21),(22,'HOTRIA BR SINAGA','1965-03-25','1965-12-26',0,'1984-12-23',NULL,'HKBP Pancurbatu',22),(23,'SENEN KRISTINA BR BARUS','1967-12-18','1981-05-24',15769,'1994-03-21',15769,'GBKP Peria-ria',23),(24,'SISKA RIA BR SITEPU','1981-10-28','1984-02-26',4463,'1998-03-22',11171,'GBKP Km 8 Padang Bulan Medan',24),(25,'EXAUDI FITRI SIANTURI','1988-05-16','1989-02-12',8,'2005-04-24',5,'HKBP Sidorame Medan',25),(26,'RAPHITA SILITONGA','1966-09-02','0000-00-00',0,'0000-00-00',0,'HKBP Simarompu-ompu',26),(27,'HERLINA BR PURBA','1975-07-12','1979-03-11',49704,'0000-00-00',0,'GBKP Rg Balige',27),(28,'MERRY BR SURBAKTI','1979-07-14','1989-05-25',0,'2000-12-10',176,'GBKP Pancur Batu',28),(29,'RASMITA BR SEMBIRING','1971-09-10','1971-11-14',0,'0000-00-00',0,'GKPS Pertumbuken',29),(30,'VICTORIA EVANTA BR KARO','1987-09-17','1987-11-08',9146,'2007-04-29',9326,'GBKP',30),(31,'HOTMAIDA GULTOM','1969-10-17','0000-00-00',0,'0000-00-00',0,'HKBP Balata',31),(32,'ANGGRAINI ARDA JUNITA BR SITEPU','1985-06-13','1990-06-03',81311,'2001-06-17',6873,'GBKP Runggun Simpang Awas Binjai',32);

/*Table structure for table `datakeluarga` */

DROP TABLE IF EXISTS `datakeluarga`;

CREATE TABLE `datakeluarga` (
  `id_datakeluarga` int(11) NOT NULL AUTO_INCREMENT,
  `nama_istri` varchar(64) DEFAULT NULL,
  `tanggal_pernikahan` date DEFAULT NULL,
  `tempat_menikah` varchar(64) DEFAULT NULL,
  `nama_pendeta` varchar(64) DEFAULT NULL,
  `no_registrasi` int(16) DEFAULT NULL,
  `status_dalam_keluarga` varchar(64) DEFAULT NULL,
  `nama_ayah` varchar(64) DEFAULT NULL,
  `nama_ibu` varchar(64) DEFAULT NULL,
  `jumlah_anak` int(11) DEFAULT NULL,
  `id_datadiri` int(10) NOT NULL,
  PRIMARY KEY (`id_datakeluarga`),
  KEY `ref_datadiri` (`id_datadiri`),
  CONSTRAINT `ref_datadiri` FOREIGN KEY (`id_datadiri`) REFERENCES `datadiri` (`id_datadiri`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `datakeluarga` */

insert  into `datakeluarga`(`id_datakeluarga`,`nama_istri`,`tanggal_pernikahan`,`tempat_menikah`,`nama_pendeta`,`no_registrasi`,`status_dalam_keluarga`,`nama_ayah`,`nama_ibu`,`jumlah_anak`,`id_datadiri`) values (1,'Teman Hidup','2020-10-16','Swiss','CPDT',10,'Anak Kandung','K Lumbanraja','D Simangunsong',4,1),(2,'Teman Hidup','2020-10-16','Swiss','CPDT',10,'Anak Kandung','K Lumbanraja','D Simangunsong',4,2),(3,'Teman Hidup','2020-10-16','Swiss','CPDT',10,'Anak Kandung','K Lumbanraja','D Simangunsong',4,3),(4,'Siska br Sinuraya','2014-10-10','GBKP Rg Ketaren','Pdt K Sinulingga STh',9749,'Suami','Petrus Tarigan','Desman br Barus',NULL,4),(5,'Dewi Romauli Barasa','2000-01-28','GBKP Tebing Tinggi','Pdt Darma Sembiring',NULL,'Suami','Josep Tarigan','Rasmi Sembiring',3,5),(6,'Evalyna Sinullingga','1995-10-21','GBKP Pembangunan USU','Pdt Musa Sinullingga',NULL,'Suami','K Depari','B br Sinullingga',2,6),(8,'NERVI LAOREN E.SIMAJUNTAK','2010-09-16','GBKP','Pdt Pardis br Ginting',8072,'Suami','Deka Purba','Darmawati Ginting',1,13),(9,'CARINTA BR TARIGAN','1995-07-15','GBKP Balige','Pdt DH Sembiring',384,'Suami','Wilmar Sihotang','Mahenna br Manullang',1,14),(10,'',NULL,'','',NULL,'','Terombo Sitepu','Rohan Br Tarigan',NULL,15),(11,'NOVA LOVIGA SEMBIRING','2007-11-16','GBKP Berastagi Kota',NULL,NULL,'Suami','Matius Ginting','Nani Sembiring',1,16),(12,'RUSMANI MANURUNG','1989-05-06','HKBP Lumban Huala','Pdt J Damanik',NULL,'Suami','Maleh Sembiring','Nungnung Surbakti',3,17),(13,'SONTA SINAGA','1992-01-07','GBKP Peria-ria','Pdt S Surbakti',2546,'Suami','','Tursi Br Tarigan',4,18),(14,'ERNITA TARIGAN','1992-01-08','GBKP Penara','Pdt D Surbakti',1152,'Suami','J Pasaribu(+)','R Silitonga(+)',5,19),(15,'RIA MASTA MANIK','2008-04-14','GBKP Pasar Pitu Padang Bulan','Pdt Bagin Barus',745,'Suami','David Umum Barus','Martini Tarigan',3,20),(16,'JOHELITA BR KELIAT','2000-07-02','SIKEBEN (GBKP)','Pdt Kasna Barus',10179,'Suami','A Kasim Tarigan','Ruth Br Sitepu',1,21),(17,'SELVI ENGELINA PUTRI PERDANA Br GINTING','1997-11-30','GBKP Rg INDRA KASIH','Pdt Elvita R Br Sembiring STh',5,'Suami','Makmur Sitepu','Mery Dalena Br Bangun',0,22),(18,'RISTA SIREGAR','1999-06-21','GBKP Kuala Lau Bicik','',0,'Suami','Nabari Ginting(+)','Narima Br Karo(+)',2,23),(19,'ROHANSA EFERIDA GINTING','2003-10-10','GBKP Rg Galang','Pdt Natalidna Br Tarigan STh',2590,'Suami','Tarun Sitepu','Ngamehi Br Ginting',3,24),(20,'BONUR DORLAN Br BUTAR-BUTAR','1988-07-19','GBKP Lubuk Pakam','Pdt JP Ginting',872,'Suami','Biduan Butar-butar','Timoria Br Sitorus',4,25),(21,'MINARIA PANDIA','1980-10-23','GBKP Durin Simbelang','Pdt Raskita Sembiring STh',0,'Suami','Kadim Pandia','Jenda Ngena Br Ginting',5,26),(22,'HOTRIA BR SINAGA','1986-06-02','GBKP KSD Tuntungan','Pdt S Sitepu',1643,'Suami','T M Sinaga','G Br Sihaloho',4,27),(23,'SENEN KRISTINA BR BARUS','1994-03-21','GBKP Peria-ria','Pdt N Kelit STh',2046,'Suami','Niked Ginting','Sinar Asniwaty Br Ketaren',4,28),(24,'SISKA RIA BR SITEPU','2014-08-07','GBKP KM 8 Medan','Pdt Daut Sinuraya',0,'Suami','Piara Sembiring(+)','Senang Ukur Br Perangin-angin',0,29),(25,'EXAUDI FITRI SIANTURI','1988-05-16','GBKP Medan Helvetia','Pdt Agustinus Sembiring',5,'Suami','Indra Bakti Surbakti','Sontiar Br Sinaga',1,30),(26,'RAPHITA SILITONGA','1997-03-22','GBKP Tanjung Langkat','Pdt Tamat Kaban STh',2024,'Suami','B Sembiring(+)','Jenda Pengadaan Br Sinuraya(+)',3,31),(27,'HERLINA BR PURBA','2005-03-04','GBKP Rg Kacaribu','Pdt E Saragih',284,'Suami','Josep Tarigan','Rasmi Br Sembiring',1,32),(28,'MERRY BR SURBAKTI','1979-07-14','GBKP Pancur Batu','Pdt Kantor Barus STh',71,'Suami','Cawur Ginting','Kontan Br Surbakti',0,33),(29,'RASMITA BR SEMBIRING','1997-05-14','GBKP Paya Itik','Pdt Keliat',0,'Suami','Kusur Gurusinga','Malem Ukur Perangin-angin',3,34),(30,'VICTORIA EVANTA BR KARO','2011-07-15','GBKP Bena Meriah','Pdt Natalidna Br Tarigan MTh',4178,'Suami','Reksa Ginting','Emmawaty Br Sitepu',1,35),(31,'HOTMAIDA GULTOM','1993-11-30','GBKP Desa Beganding','Pdt Ng Surbakti',4709,'Suami','Maksa Sembiring','Mdera Br Sitepu',3,36),(32,'ANGGRAINI ARDA JUNITA BR SITEPU','2014-01-03','GBKP Runggun Simpang Arus Binjai','Pdt Agustinus P Purba STh MTh',5153,'Suami','Elieser Ginting','Permina Br Sembiring',0,37);

/*Table structure for table `datasidi` */

DROP TABLE IF EXISTS `datasidi`;

CREATE TABLE `datasidi` (
  `id_datasidi` int(11) NOT NULL AUTO_INCREMENT,
  `id_datagereja` int(11) NOT NULL,
  `tanggal_sidi` date DEFAULT NULL,
  `tempat_sidi` varchar(64) DEFAULT NULL,
  `no_registrasi` int(16) DEFAULT NULL,
  `nama_pendeta` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id_datasidi`),
  KEY `datagereja_ref` (`id_datagereja`),
  CONSTRAINT `datagereja_ref` FOREIGN KEY (`id_datagereja`) REFERENCES `datagereja` (`id_datagereja`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `datasidi` */

insert  into `datasidi`(`id_datasidi`,`id_datagereja`,`tanggal_sidi`,`tempat_sidi`,`no_registrasi`,`nama_pendeta`) values (1,1,NULL,'Sidikalang',10,'Pdt Vikar'),(2,2,NULL,'Sidikalang',10,'Pdt Vikar'),(3,3,NULL,'Sidikalang',10,'Pdt Vikar'),(4,4,NULL,'GBKP Rg Simpang Enam Kabanjahe',6411,'Pdt Jekson Barus STh'),(5,5,NULL,NULL,NULL,NULL),(6,6,'1981-04-05','GBKP Bt Serangan Medan',43988,'Pdt Musa Sinulingga'),(12,12,NULL,'GBKP',8331,'Pdt J Surbakti'),(13,13,NULL,'PAROKI PAKKAT',NULL,'Uskup MGR Pius Batubara'),(14,14,NULL,'GBKP Runggun Batusanggehen',1333,'Pdt Riahta Br Kaban'),(15,15,NULL,NULL,NULL,NULL),(16,16,NULL,NULL,NULL,NULL),(17,17,NULL,'GBKP Peria-ria',2546,'Pdt S Surbakti'),(18,18,'1982-04-18','HKBP Gunting Kopo',NULL,'Pdt D Ambarita'),(19,19,'2008-04-14','GBKP Pasar Pitu Padang Bulan',1742,'Pdt Ng Surbakti'),(20,20,'1983-04-05','GBKP Delitua',406,'Pdt Firman P Ginting'),(21,21,'1997-11-30','GBKP Peceren Klasis Berastagi',995,'Pdt K Kaban STh'),(22,22,'1988-11-27','',33090,'Pdt J Barus'),(23,23,'1988-06-05','GBKP Rg Bangun Mulia',10796,'Pdt Gideon Ginting MMin'),(24,24,'1978-10-08','GBKP Pasar VI',3638,'Pdt Ganti Y S Meliala STh'),(25,25,'0000-00-00','GBKP Berastagi Kota',0,''),(26,26,'1978-09-24','GBKP KSD K Tani',20617,'Pdt S Sitepu'),(27,27,'1988-07-03','GBKP Durin Simbelang Klasis Sibolangit',3123,'Pdt J K Barus'),(28,28,'0000-00-00','',0,''),(29,29,'2004-12-26','GBKP Medan Helvetia',0,''),(30,30,'0000-00-00','GBKP Tanjung Langkat',2577,'Pdt Andreas Tarigan'),(31,31,'0000-00-00','GBKP Rg Tebing Tinggi',NULL,'Pdt Alm M Sitanggan'),(32,32,'1989-11-19','GBKP Pancur Batu',29959,'Pdt J K Barus'),(33,33,'1997-05-14','GBKP Paya Itik',NULL,'Pdt J Keliat'),(34,34,'2000-06-11','GBKP Bena Meriah',11658,'Pdt Pasu Bukit'),(35,35,'1982-07-04','GBKP Desa Beganding',60288,'Pdt Ng Surbakti'),(36,36,'2001-07-01','GBKP Rg Suka',2400,'Pdt John M Sinulingga');

/*Table structure for table `informasi` */

DROP TABLE IF EXISTS `informasi`;

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(30) DEFAULT NULL,
  `id` int(11) DEFAULT '0',
  PRIMARY KEY (`id_informasi`),
  KEY `FK_informasi` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `informasi` */

/*Table structure for table `jadwal_ibadah` */

DROP TABLE IF EXISTS `jadwal_ibadah`;

CREATE TABLE `jadwal_ibadah` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `hari_tanggal` datetime NOT NULL,
  `jenis_minggu` varchar(255) NOT NULL,
  `Bahasa` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `jadwal_ibadah` */

insert  into `jadwal_ibadah`(`id_jadwal`,`hari_tanggal`,`jenis_minggu`,`Bahasa`,`ket`) values (14,'2016-04-20 21:00:00','Palmarum','Batak Karo','jadwal_ibadah/14.png'),(15,'2016-04-13 08:00:00','Palmarum','Batak Karo','jadwal_ibadah/15.doc'),(16,'2016-04-24 09:00:00','Advent','Batak Karo','jadwal_ibadah/16.doc'),(17,'2016-05-11 17:00:00','Advent','Batak Karo','jadwal_ibadah/17.png'),(18,'2016-05-03 19:25:00','Palmarum','Batak Karo','jadwal_ibadah/18.png');

/*Table structure for table `kegiatan` */

DROP TABLE IF EXISTS `kegiatan`;

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `jumlah_hadir` int(10) NOT NULL,
  `total` float NOT NULL,
  `jenis_kegiatan` varchar(64) NOT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `kegiatan` */

insert  into `kegiatan`(`id_kegiatan`,`tanggal`,`jumlah_hadir`,`total`,`jenis_kegiatan`) values (1,'1996-10-16',10,1900,'Persembahan Personal'),(2,'1999-12-12',10,120,'Persembahan Pjj'),(3,'2000-12-19',160,19,'Persembahan Kakr'),(4,'2015-08-06',20,126000,'Persembahan Pjj'),(5,'2015-08-12',18,121000,'Persembahan Pjj'),(6,'2015-08-16',10,65000,'Persembahan Pjj'),(7,'2015-08-25',16,110000,'Persembahan Pjj'),(8,'2015-09-04',15,105000,'Persembahan Pjj'),(9,'2015-09-11',19,125000,'Persembahan Pjj'),(10,'2015-09-18',15,96000,'Persembahan Pjj'),(11,'2015-09-24',19,107000,'Persembahan Pjj'),(12,'2015-10-02',18,92000,'Persembahan Pjj'),(13,'2015-10-09',16,134000,'Persembahan Pjj'),(14,'2015-10-15',21,155000,'Persembahan Pjj'),(15,'2015-10-23',16,77000,'Persembahan Pjj'),(16,'2015-10-28',18,210000,'Persembahan Pjj'),(17,'2015-11-06',18,210000,'Persembahan Pjj'),(18,'2015-11-13',16,90000,'Persembahan Pjj'),(19,'2015-11-16',8,45000,'Persembahan Pjj'),(20,'2015-11-18',8,69000,'Persembahan Pjj'),(21,'2015-11-18',8,59000,'Persembahan Pjj'),(22,'2015-11-19',10,90000,'Persembahan Pjj'),(23,'2016-06-09',20,100000,'Persembahan Pjj'),(24,'2016-06-09',20,100000,'Persembahan Pjj'),(25,'2016-06-09',20,100000,'Persembahan Pjj'),(26,'2016-06-09',20,100000,'Persembahan Pjj');

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `migration` */

insert  into `migration`(`version`,`apply_time`) values ('m000000_000000_base',1460983477),('m130524_201442_init',1460983483),('m140506_102106_rbac_init',1465455505);

/*Table structure for table `ozekimessagein` */

DROP TABLE IF EXISTS `ozekimessagein`;

CREATE TABLE `ozekimessagein` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) DEFAULT NULL,
  `receiver` varchar(30) DEFAULT NULL,
  `msg` text,
  `senttime` varchar(100) DEFAULT NULL,
  `receivedtime` varchar(100) DEFAULT NULL,
  `operator` varchar(100) DEFAULT NULL,
  `msgtype` varchar(160) DEFAULT NULL,
  `reference` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `ozekimessagein` */

insert  into `ozekimessagein`(`id`,`sender`,`receiver`,`msg`,`senttime`,`receivedtime`,`operator`,`msgtype`,`reference`) values (1,'+6282272762580','+441234567','Hai.','2016-05-10 21:13:21','2016-05-10 21:14:41','GSMMODEM1','SMS:TEXT',NULL),(2,'+6282272762580','+441234567','Wahai sesungguhnya kemerdekaan itu ialah hak segala bangsa dan oleh sebab itu maka penjajahan diatas dunia harus dihapuskan.','2016-05-10 21:16:38','2016-05-10 21:18:03','GSMMODEM1','SMS:TEXT',NULL),(3,'+6282272762580','+441234567','Joko tampan.','2016-05-10 21:20:15','2016-05-10 21:21:35','GSMMODEM1','SMS:TEXT',NULL),(4,'+6282272762580','+441234567','* Ucapan Syukur * Bersyukur atas pernikahan yang akan berlangsung','2016-05-11 16:19:21','2016-05-11 16:20:43','GSMMODEM1','SMS:TEXT',NULL),(5,'+6282273527395','+441234567','* Ucapan Syukur * Bersyukur atas pernikahan yang akan berlangsung','2016-06-08 14:11:03','2016-06-08 14:13:00','GSMMODEM1','SMS:TEXT',NULL),(7,'+6281362799552','+441234567','Pa 2','2016-06-09 17:39:46','2016-06-09 17:41:34','GSMMODEM1','SMS:TEXT',NULL),(8,'+6281362799552','+441234567','*20*1*100000*Pekan P.layanen Keluarga Bp.Agnes Ginting*Pekan P.layanen Keluarga Bp.Sari Sembiring','2016-06-09 17:45:34','2016-06-09 17:47:20','GSMMODEM1','SMS:TEXT',NULL);

/*Table structure for table `ozekimessageout` */

DROP TABLE IF EXISTS `ozekimessageout`;

CREATE TABLE `ozekimessageout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) DEFAULT NULL,
  `receiver` varchar(30) DEFAULT NULL,
  `msg` text,
  `senttime` varchar(100) DEFAULT NULL,
  `receivedtime` varchar(100) DEFAULT NULL,
  `reference` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `msgtype` varchar(160) DEFAULT NULL,
  `operator` varchar(100) DEFAULT NULL,
  `errormsg` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ozekimessageout` */

/*Table structure for table `pers_kakr` */

DROP TABLE IF EXISTS `pers_kakr`;

CREATE TABLE `pers_kakr` (
  `id_kakr` int(11) NOT NULL AUTO_INCREMENT,
  `anak_kecil` float NOT NULL,
  `jumlah_hadirAK` int(11) NOT NULL,
  `anak_tanggung` float NOT NULL,
  `jumlah_hadirAT` int(11) NOT NULL,
  `anak_remaja` float NOT NULL,
  `jumlah_hadirR` int(11) NOT NULL,
  `ket` varchar(64) NOT NULL,
  `id_mingguan` int(11) NOT NULL,
  PRIMARY KEY (`id_kakr`),
  KEY `kakr_ref` (`id_mingguan`),
  CONSTRAINT `kakr_ref` FOREIGN KEY (`id_mingguan`) REFERENCES `pers_mingguan` (`id_mingguan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pers_kakr` */

insert  into `pers_kakr`(`id_kakr`,`anak_kecil`,`jumlah_hadirAK`,`anak_tanggung`,`jumlah_hadirAT`,`anak_remaja`,`jumlah_hadirR`,`ket`,`id_mingguan`) values (1,19,12,12,12,12,12,'Nice',1);

/*Table structure for table `pers_mingguan` */

DROP TABLE IF EXISTS `pers_mingguan`;

CREATE TABLE `pers_mingguan` (
  `id_mingguan` int(11) NOT NULL AUTO_INCREMENT,
  `jumlah_lk` int(11) NOT NULL,
  `jumlah_pr` int(11) NOT NULL,
  `pers1` float NOT NULL,
  `pers2` float NOT NULL,
  `pers3` float NOT NULL,
  `total` float NOT NULL,
  `pers_kakr` float NOT NULL,
  `ket` varchar(64) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  PRIMARY KEY (`id_mingguan`),
  KEY `mingguan_ref` (`id_kegiatan`),
  CONSTRAINT `mingguan_ref` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pers_mingguan` */

insert  into `pers_mingguan`(`id_mingguan`,`jumlah_lk`,`jumlah_pr`,`pers1`,`pers2`,`pers3`,`total`,`pers_kakr`,`ket`,`id_kegiatan`) values (1,19,19,10,12,12,123,12,'Test',3);

/*Table structure for table `pers_personal` */

DROP TABLE IF EXISTS `pers_personal`;

CREATE TABLE `pers_personal` (
  `id_personal` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(64) NOT NULL,
  `jenis_pers` varchar(64) NOT NULL,
  `jumlah` float NOT NULL,
  `pos` varchar(64) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  PRIMARY KEY (`id_personal`),
  KEY `personal_ref` (`id_kegiatan`),
  CONSTRAINT `personal_ref` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pers_personal` */

insert  into `pers_personal`(`id_personal`,`nama`,`jenis_pers`,`jumlah`,`pos`,`id_kegiatan`) values (1,'Joko Tampan','Ucapan Syukur atas diterima Rohani',19000000,'Siborong-borong',1);

/*Table structure for table `pers_pjj` */

DROP TABLE IF EXISTS `pers_pjj`;

CREATE TABLE `pers_pjj` (
  `id_pjj` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `jumlah_hadir` int(11) NOT NULL,
  `sektor` varchar(64) NOT NULL,
  `total` float NOT NULL,
  `tempat_pjj` varchar(64) NOT NULL,
  `pjj_selanjutnya` varchar(64) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  PRIMARY KEY (`id_pjj`),
  KEY `pjj_ref` (`id_kegiatan`),
  CONSTRAINT `pjj_ref` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `pers_pjj` */

insert  into `pers_pjj`(`id_pjj`,`tanggal`,`jumlah_hadir`,`sektor`,`total`,`tempat_pjj`,`pjj_selanjutnya`,`id_kegiatan`) values (1,'1996-10-16',189,'1',2000000,'Sidikalang','Medan',2),(2,'2015-09-04',15,'1',105000,'Rumah Bp.Alona Surbakti','Rumah bp.Davin Ginting',4),(3,'2015-08-12',18,'1',121000,'Rumah Bp.Christoper Pasaribu','Rumah Bp.Della Tarigan',5),(4,'2015-08-16',10,'1',65000,'Rumah Bp.Della ','Rumah Bp.Cleonina sembiring',6),(5,'2015-08-25',16,'1',110000,'Rumah Bp.Cleonina ','Rumah Bp.Alona Surbakti',7),(6,'2015-09-04',15,'1',105000,'Rumah Bp.Alona Surbakti ','Rumah bp.Davin Ginting',8),(7,'2015-09-11',19,'1',125000,'Rumah bp.Davin Ginting','Rumah Bp.Sari Sembiring',9),(8,'2015-09-18',15,'1',96000,'Rumah Bp.Sari sembiring','Rumah bp.Banta Ginting',10),(9,'2015-09-24',19,'1',107000,'Rumah Bp.Banta ginting','Rumah bp.Sri ginting',11),(10,'2015-10-09',18,'1',92000,'Rumah Sri ginting','Rumah Bp.Agnes ginting',12),(11,'2015-10-09',16,'1',134000,'Rumah Bp.Agnes ginting','Rumah Bp.Wahyu sitepu',13),(12,'2015-10-15',21,'1',155000,'Rumah Bp.Wahyu sitepu','Rumah Bp.Rafael sibarani ',14),(13,'2015-10-23',16,'1',77000,'Rumah Bp.Rafael sibarani','Rumah Bp.Osniel barus',15),(14,'2015-10-28',18,'1',210000,'Rumah Bp.Osniel barus ','Rumah Bp.Christoper Pasaribu',16),(15,'2015-11-06',18,'1',210000,'Rumah Bp.Christoper Pasaribu','Rumah Bp.Della Tarigan',17),(16,'2015-11-13',16,'1',90000,'Rumah Bp.Della tarigan','Pekan  p.layanan Keuarga Sembiring Del',18),(17,'2015-11-16',8,'1',45000,'Pekan P.layanen Keluarga Sembiring Del','Pekan P.layanen Keluarga Bp.Osniel barus',19),(18,'2015-11-18',8,'1',69000,'Pekan P.layanen Keluarga Bp.Osniel barus','Pekan  p.layanen Keluarga Agnes ginting',20),(19,'2015-11-18',8,'1',59000,'Pekan P.layanen Keluarga Bp.Agnes Ginting','Pekan P.layanen Keluarga Bp.Sari Sembiring',21),(32,'2015-08-25',16,'1',11000,'Rumah Bp. Cleonina','Rumah Bp.Alona Surbakti',22),(33,'2016-06-09',20,'1',100000,'Pekan P.layanen Keluarga Bp.Agnes Ginting','Pekan P.layanen Keluarga Bp.Sari Sembiring',23),(34,'2016-06-09',20,'1',100000,'Pekan P.layanen Keluarga Bp.Agnes Ginting','Pekan P.layanen Keluarga Bp.Sari Sembiring',24),(35,'2016-06-09',20,'1',100000,'Pekan P.layanen Keluarga Bp.Agnes Ginting','Pekan P.layanen Keluarga Bp.Sari Sembiring',25),(36,'2016-06-09',20,'1',100000,'Pekan P.layanen Keluarga Bp.Agnes Ginting','Pekan P.layanen Keluarga Bp.Sari Sembiring',26);

/*Table structure for table `program_kerja` */

DROP TABLE IF EXISTS `program_kerja`;

CREATE TABLE `program_kerja` (
  `id_program` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(255) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `Ket` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_program`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `program_kerja` */

/*Table structure for table `renungan` */

DROP TABLE IF EXISTS `renungan`;

CREATE TABLE `renungan` (
  `id_renungan` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  PRIMARY KEY (`id_renungan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `renungan` */

insert  into `renungan`(`id_renungan`,`judul`,`penulis`,`detail`) values (1,'Berbahagialah !!!','Admin','uploads/1.pdf'),(2,'Bersyukurlah','Admin','uploads/2.pdf'),(3,'Berhasil','Admin','uploads/3.pdf'),(4,'Bersyukurlah','Admin','uploads/4.png'),(5,'Test','Admin','uploads/5.png'),(6,'Bebahagialah dan Bersyukurlah','Admin','uploads/6.png');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`auth_key`,`password_hash`,`password_reset_token`,`email`,`status`,`created_at`,`updated_at`) values (1,'admin','bbYVBbdFuR2ZGgjnCKivRkGIJTB4e2qW','$2y$13$cix0L2cqqq0M7EaAwpCU3.J8jjUCB9U8YGnZl2GoqkYw8SXKASDPq',NULL,'admin@gmail.com',10,1460983885,1460983885),(2,'aldo','bIBYyCyrDdoA9hx9zoB5rbdkSBCDXqqH','$2y$13$764QVy2jNJ1sMjFOW9LzMO.6zYzwqgIEpKmrKuJ7K4XJvk9KKKX4u',NULL,'aldo@del.ac.id',10,1465455103,1465455103),(8,'command','T1OGip6SpiCr_w99jCralZOtQTcpK0PH','$2y$13$tDPKhVh0XCGY40DPfrJVieizhlcN/uw/5fF2RTvU9DyHh3J2Foobq',NULL,'command12@del.ac.id',10,1465456780,1465456780);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
