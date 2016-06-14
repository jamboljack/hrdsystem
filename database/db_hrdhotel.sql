/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.25 : Database - db_hrdhotel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `hrd_blood` */

DROP TABLE IF EXISTS `hrd_blood`;

CREATE TABLE `hrd_blood` (
  `blood_id` int(2) NOT NULL AUTO_INCREMENT,
  `blood_name` varchar(10) NOT NULL,
  PRIMARY KEY (`blood_id`),
  KEY `name` (`blood_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_blood` */

insert  into `hrd_blood`(`blood_id`,`blood_name`) values (1,'A'),(3,'AB'),(2,'B'),(4,'O'),(5,'TIDAK TAHU');

/*Table structure for table `hrd_company` */

DROP TABLE IF EXISTS `hrd_company`;

CREATE TABLE `hrd_company` (
  `company_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_address` text,
  `company_phone` varchar(30) DEFAULT NULL,
  `company_email` varchar(30) DEFAULT NULL,
  `company_type` varchar(50) DEFAULT NULL,
  `company_position` varchar(50) DEFAULT NULL,
  `company_manager` varchar(50) DEFAULT NULL,
  `company_salary` int(10) DEFAULT NULL,
  `company_date_join` date DEFAULT NULL,
  `company_date_resign` date DEFAULT NULL,
  `company_job_desc` text,
  `company_web` varchar(50) DEFAULT NULL,
  `company_date_update` date DEFAULT NULL,
  `company_time_update` time DEFAULT NULL,
  `user_username` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`company_id`),
  KEY `name` (`company_name`),
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `hrd_company_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hrd_employee` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_company` */

insert  into `hrd_company`(`company_id`,`emp_id`,`company_name`,`company_address`,`company_phone`,`company_email`,`company_type`,`company_position`,`company_manager`,`company_salary`,`company_date_join`,`company_date_resign`,`company_job_desc`,`company_web`,`company_date_update`,`company_time_update`,`user_username`) values (2,1,'PT. VISIONE SYSTEM','Jl. Dr. Soeharso No. 50','-','','SOFTWARE HOUSE','PROGRAMMER','hendro nirantoro',1500000,'2016-06-01','2016-06-02','Membuat program','www.visione-system.com','2016-06-02','08:39:25','admin'),(3,3,'@HOM HOTEL KUDUS','Jl. Tanjung No. 14-16, Kudus','0291-4258999','info@hotelhomkudus.com','HOTEL','FRONT OFFICE','Ridlo Azka',1400000,'2016-06-09','2016-06-09','Menerima Tamu Reservasi','www.hotelhomkudus.com','2016-06-09','20:31:21','admin');

/*Table structure for table `hrd_country` */

DROP TABLE IF EXISTS `hrd_country`;

CREATE TABLE `hrd_country` (
  `country_id` varchar(20) NOT NULL,
  `province_id` varchar(20) DEFAULT NULL,
  `country_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`country_id`),
  KEY `fk_kotaPropKode` (`province_id`),
  KEY `kotaNama` (`country_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `hrd_country` */

insert  into `hrd_country`(`country_id`,`province_id`,`country_name`) values ('','',''),('0101','01','KABUPATEN KEPULAUAN SERIBU'),('0151','01','JAKARTA SELATAN'),('0152','01','JAKARTA TIMUR'),('0153','01','JAKARTA PUSAT'),('0154','01','JAKARTA BARAT'),('0155','01','JAKARTA UTARA'),('0201','02','KABUPATEN BOGOR'),('0202','02','KABUPATEN SUKABUMI'),('0203','02','KABUPATEN CIANJUR'),('0204','02','KABUPATEN BANDUNG'),('0205','02','KABUPATEN GARUT'),('0206','02','KABUPATEN TASIKMALAYA'),('0207','02','KABUPATEN CIAMIS'),('0208','02','KABUPATEN KUNINGAN'),('0209','02','KABUPATEN CIREBON'),('0210','02','KABUPATEN MAJALENGKA'),('0211','02','KABUPATEN SUMEDANG'),('0212','02','KABUPATEN INDRAMAYU'),('0213','02','KABUPATEN SUBANG'),('0214','02','KABUPATEN PURWAKARTA'),('0215','02','KABUPATEN KARAWANG'),('0216','02','KABUPATEN BEKASI'),('0217','02','KABUPATEN BANDUNG BARAT'),('0251','02','BOGOR'),('0252','02','SUKABUMI'),('0253','02','BANDUNG'),('0254','02','CIREBON'),('0255','02','BEKASI'),('0256','02','DEPOK'),('0257','02','CIMAHI'),('0258','02','TASIKMALAYA'),('0259','02','BANJAR'),('0301','03','KABUPATEN CILACAP'),('0302','03','KABUPATEN BANYUMAS'),('0303','03','KABUPATEN PURBALINGGA'),('0304','03','KABUPATEN BANJARNEGARA'),('0305','03','KABUPATEN KEBUMEN'),('0306','03','KABUPATEN PURWOREJO'),('0307','03','KABUPATEN WONOSOBO'),('0308','03','KABUPATEN MAGELANG'),('0309','03','KABUPATEN BOYOLALI'),('0310','03','KABUPATEN KLATEN'),('0311','03','KABUPATEN SUKOHARJO'),('0312','03','KABUPATEN WONOGIRI'),('0313','03','KABUPATEN KARANGANYAR'),('0314','03','KABUPATEN SRAGEN'),('0315','03','KABUPATEN GROBOGAN'),('0316','03','KABUPATEN BLORA'),('0317','03','KABUPATEN REMBANG'),('0318','03','KABUPATEN PATI'),('0319','03','KABUPATEN KUDUS'),('0320','03','KABUPATEN JEPARA'),('0321','03','KABUPATEN DEMAK'),('0322','03','KABUPATEN SEMARANG'),('0323','03','KABUPATEN TEMANGGUNG'),('0324','03','KABUPATEN KENDAL'),('0325','03','KABUPATEN BATANG'),('0326','03','KABUPATEN PEKALONGAN'),('0327','03','KABUPATEN PEMALANG'),('0328','03','KABUPATEN TEGAL'),('0329','03','KABUPATEN BREBES'),('0351','03','MAGELANG'),('0352','03','SURAKARTA'),('0353','03','SALATIGA'),('0354','03','SEMARANG'),('0355','03','PEKALONGAN'),('0356','03','TEGAL'),('0401','04','KABUPATEN KULON PROGO'),('0402','04','KABUPATEN BANTUL'),('0403','04','KABUPATEN GUNUNG KIDUL'),('0404','04','KABUPATEN SLEMAN'),('0451','04','YOGYAKARTA'),('0501','05','KABUPATEN PACITAN '),('0502','05','KABUPATEN PONOROGO'),('0503','05','KABUPATEN TRENGGALEK'),('0504','05','KABUPATEN TULUNGAGUNG'),('0505','05','KABUPATEN BLITAR'),('0506','05','KABUPATEN KEDIRI'),('0507','05','KABUPATEN MALANG'),('0508','05','KABUPATEN LUMAJANG'),('0509','05','KABUPATEN JEMBER'),('0510','05','KABUPATEN BANYUWANGI'),('0511','05','KABUPATEN BONDOWOSO'),('0512','05','KABUPATEN SITUBONDO'),('0513','05','KABUPATEN PROBOLINGGO'),('0514','05','KABUPATEN PASURUAN'),('0515','05','KABUPATEN SIDOARJO'),('0516','05','KABUPATEN MOJOKERTO'),('0517','05','KABUPATEN JOMBANG'),('0518','05','KABUPATEN NGANJUK'),('0519','05','KABUPATEN MADIUN'),('0520','05','KABUPATEN MAGETAN'),('0521','05','KABUPATEN NGAWI'),('0522','05','KABUPATEN BOJONEGORO'),('0523','05','KABUPATEN TUBAN'),('0524','05','KABUPATEN LAMONGAN'),('0525','05','KABUPATEN GRESIK'),('0526','05','KABUPATEN BANGKALAN'),('0527','05','KABUPATEN SAMPANG'),('0528','05','KABUPATEN PAMEKASAN'),('0529','05','KABUPATEN SUMENEP'),('0551','05','KEDIRI'),('0552','05','BLITAR'),('0553','05','MALANG'),('0554','05','PROBOLINGGO'),('0555','05','PASURUAN'),('0556','05','MOJOKERTO'),('0557','05','MADIUN'),('0558','05','SURABAYA'),('0559','05','BATU'),('0601','06','KABUPATEN SIMEULUE'),('0602','06','KABUPATEN ACEH SINGKIL'),('0603','06','KABUPATEN ACEH SELATAN'),('0604','06','KABUPATEN ACEH TENGGARA'),('0605','06','KABUPATEN ACEH TIMUR'),('0606','06','KABUPATEN ACEH TENGAH'),('0607','06','KABUPATEN ACEH BARAT'),('0608','06','KABUPATEN ACEH BESAR'),('0609','06','KABUPATEN PIDIE'),('0610','06','KABUPATEN BIREUEN'),('0611','06','KABUPATEN ACEH UTARA'),('0612','06','KABUPATEN ACEH BARAT DAYA'),('0613','06','KABUPATEN GAYO LUWES'),('0614','06','KABUPATEN ACEH TAMIANG'),('0615','06','KABUPATEN NAGAN RAYA'),('0616','06','KABUPATEN ACEH JAYA'),('0617','06','KABUPATEN BENER MERIAH'),('0618','06','PIDIE JAYA'),('0651','06','BANDA ACEH'),('0652','06','SABANG'),('0653','06','LANGSA'),('0654','06','LHOKSEUMAWE'),('0655','06','SUBUSLUSSALAM'),('0701','07','KABUPATEN NIAS'),('0702','07','KABUPATEN MANDAILING NATAL'),('0703','07','KABUPATEN TAPANULI SELATAN'),('0704','07','KABUPATEN TAPANULI TENGAH'),('0705','07','KABUPATEN TAPANULI UTARA'),('0706','07','KABUPATEN TOBA SAMOSIR'),('0707','07','KABUPATEN LABUHAN BATU'),('0708','07','KABUPATEN ASAHAN'),('0709','07','KABUPATEN SIMALUNGUN'),('0710','07','KABUPATEN DAIRI'),('0711','07','KABUPATEN KARO'),('0712','07','KABUPATEN DELI SERDANG'),('0713','07','KABUPATEN LANGKAT'),('0714','07','KABUPATEN NIAS SELATAN'),('0715','07','KABUPATEN HUMBANG HASUNDUTAN'),('0716','07','KABUPATEN PAKPAK BHARAT'),('0717','07','KABUPATEN SERDANG BEDAGAI'),('0718','07','KABUPATEN LABUHAN BATU SELATAN'),('0719','07','KABUPATEN LABUHAN BATU UTARA'),('0720','07','KABUPATEN NIAS UTARA'),('0721','07','KABUPATEN NIAS BARAT'),('0722','07','KABUPATEN SAMOSIR'),('0723','07','KABUPATEN PADANG LAWAS UTARA'),('0724','07','KABUPATEN PADANG LAWAS'),('0725','07','KABUPATEN BATU BARA'),('0751','07','SIBOLGA'),('0752','07','TANJUNG BALAI'),('0753','07','PEMATANG SIANTAR'),('0754','07','TEBING TINGGI'),('0755','07','MEDAN'),('0756','07','BINJAI'),('0757','07','PADANGSIDIMPUAN'),('0758','07','GUNUNGSITOLI'),('0801','08','KABUPATEN KEPULAUAN MENTAWAI'),('0802','08','KABUPATEN PESISIR SELATAN'),('0803','08','KABUPATEN SOLOK'),('0804','08','KABUPATEN SOLOK SELATAN'),('0805','08','KABUPATEN TANAH DATAR'),('0806','08','KABUPATEN PADANG PARIAMAN'),('0807','08','KABUPATEN AGAM'),('0808','08','KABUPATEN LIMA PULUH KOTO'),('0809','08','KABUPATEN PASAMAN'),('0810','08','KABUPATEN SIJUNJUNG'),('0811','08','KABUPATEN DHARMASRAYA'),('0812','08','KABUPATEN PASAMAN BARAT'),('0813','08','KABUPATEN PAYAKUMBUH'),('0851','08','PADANG'),('0852','08','SOLOK'),('0853','08','SAWAH LUNTO'),('0854','08','PADANG PANJANG'),('0855','08','BUKITTINGGI'),('0856','08','PAYAKUMBUH'),('0857','08','PARIAMAN'),('0901','09','KABUPATEN KUANTAN SINGINGI'),('0902','09','KABUPATEN INDRAGIRI HULU'),('0903','09','KABUPATEN INDRAGIRI HILIR'),('0904','09','KABUPATEN PELALAWAN'),('0905','09','KABUPATEN SIAK'),('0906','09','KABUPATEN KAMPAR'),('0907','09','KABUPATEN ROKAN HULU'),('0908','09','KABUPATEN BENGKALIS'),('0909','09','KABUPATEN ROKAN HILIR'),('0951','09','PEKANBARU'),('0953','09','DUMAI'),('1001','10','KABUPATEN KERINCI'),('1002','10','KABUPATEN MERANGIN'),('1003','10','KABUPATEN SAROLANGUN'),('1004','10','KABUPATEN BATANG HARI'),('1005','10','KABUPATEN MUARO JAMBI'),('1006','10','KABUPATEN TANJUNG JABUNG TIMUR'),('1007','10','KABUPATEN TANJUNG JABUNG BARAT'),('1008','10','KABUPATEN TEBO'),('1009','10','KABUPATEN BUNGO'),('1010','10','KABUPATEN SUNGAI PENUH'),('1051','10','JAMBI'),('1101','11','KABUPATEN OGAN KOMERING ULU'),('1102','11','KABUPATEN OGAN KOMERING ILIR'),('1103','11','KABUPATEN MUARA ENIM'),('1104','11','KABUPATEN LAHAT'),('1105','11','KABUPATEN MUSI RAWAS'),('1106','11','KABUPATEN MUSI BANYUASIN'),('1107','11','KABUPATEN BANYUASIN'),('1108','11','KABUPATEN OGAN ILIR'),('1109','11','KABUPATEN OKU TIMUR'),('1110','11','KABUPATEN OKU SELATAN'),('1111','11','KABUPATEN EMPAT LAWANG'),('1151','11','PALEMBANG'),('1152','11','PRABUMULIH'),('1153','11','PAGAR ALAM'),('1154','11','LUBUK LINGGAU'),('1201','12','KABUPATEN LAMPUNG BARAT'),('1202','12','KABUPATEN TANGGAMUS'),('1203','12','KABUPATEN LAMPUNG SELATAN'),('1204','12','KABUPATEN LAMPUNG TIMUR'),('1205','12','KABUPATEN LAMPUNG TENGAH'),('1206','12','KABUPATEN LAMPUNG UTARA'),('1207','12','KABUPATEN WAY KANAN'),('1208','12','KABUPATEN TULANG BAWANG'),('1209','12','KABUPATEN PESAWARAN'),('1251','12','BANDAR LAMPUNG'),('1252','12','METRO'),('1301','13','KABUPATEN SAMBAS'),('1302','13','KABUPATEN BENGKAYANG'),('1303','13','KABUPATEN LANDAK'),('1304','13','KABUPATEN PONTIANAK'),('1305','13','KABUPATEN SANGGAU'),('1306','13','KABUPATEN KETAPANG'),('1307','13','KABUPATEN SINTANG'),('1308','13','KABUPATEN KAPUAS HULU'),('1309','13','KABUPATEN SEKADAU'),('1310','13','KABUPATEN MELAWI'),('1311','13','KABUPATEN KAYONG UTARA'),('1312','13','KABUPATEN KUBU RAYA'),('1351','13','PONTIANAK'),('1352','13','SINGKAWANG'),('1401','14','KABUPATEN KOTAWARINGIN BARAT'),('1402','14','KABUPATEN KOTAWARINGIN TIMUR'),('1403','14','KABUPATEN KAPUAS'),('1404','14','KABUPATEN BARITO SELATAN'),('1405','14','KABUPATEN BARITO UTARA'),('1406','14','KABUPATEN SUKAMARA'),('1407','14','KABUPATEN LAMANDAU'),('1408','14','KABUPATEN SERUYAN'),('1409','14','KABUPATEN KATINGAN'),('1410','14','KABUPATEN PULANG PISAU'),('1411','14','KABUPATEN GUNUNG MAS'),('1412','14','KABUPATEN BARITO TIMUR'),('1413','14','KABUPATEN MURUNG RAYA'),('1451','14','PALANGKA RAYA'),('1501','15','KABUPATEN TANAH LAUT'),('1502','15','KABUPATEN KOTABARU'),('1503','15','KABUPATEN BANJAR'),('1504','15','KABUPATEN BARITO KUALA'),('1505','15','KABUPATEN TAPIN'),('1506','15','KABUPATEN HULU SUNGAI SELATAN'),('1507','15','KABUPATEN HULU SUNGAI TENGAH'),('1508','15','KABUPATEN HULU SUNGAI UTARA'),('1509','15','KABUPATEN TABALONG'),('1510','15','KABUPATEN TANAH BUMBU'),('1511','15','KABUPATEN BALANGAN'),('1551','15','BANJARMASIN'),('1552','15','BANJARBARU'),('1601','16','KABUPATEN PASER'),('1602','16','KABUPATEN KUTAI BARAT'),('1603','16','KABUPATEN KUTAI KARTANEGARA'),('1604','16','KABUPATEN KUTAI TIMUR'),('1605','16','KABUPATEN BERAU'),('1606','16','KABUPATEN MALINAU'),('1607','16','KABUPATEN BULUNGAN'),('1608','16','KABUPATEN NUNUKAN'),('1609','16','KABUPATEN PENAJAM PASER UTARA'),('1610','16','KABUPATEN TANA TIDUNG'),('1651','16','BALIKPAPAN'),('1652','16','SAMARINDA'),('1653','16','TARAKAN'),('1654','16','BONTANG'),('1701','17','KABUPATEN BOLAANG MONGONDOW'),('1702','17','KABUPATEN MINAHASA'),('1703','17','KABUPATEN KEPULAUAN SANGIHE'),('1704','17','KABUPATEN KEPULAUAN TALAUD'),('1705','17','KABUPATEN MINAHASA SELATAN'),('1706','17','KABUPATEN MINAHASA UTARA'),('1707','17','KAB BOLAANG MONGONDOW TIMUR'),('1708','17','KAB BOLAANG MONGONDOW SELATAN'),('1709','17','KABUPATEN MINAHASA TENGGARA'),('1710','17','KAB BOLAANG MONGONDOW UTARA'),('1711','17','KAB SIAU TAGULANDANG BIARO'),('1751','17','MANADO'),('1752','17','BITUNG'),('1753','17','TOMOHON'),('1754','17','KOTAMOBAGU'),('1801','18','KABUPATEN BANGGAI KEPULAUAN'),('1802','18','KABUPATEN BANGGAI'),('1803','18','KABUPATEN MOROWALI'),('1804','18','KABUPATEN POSO'),('1805','18','KABUPATEN DONGGALA'),('1806','18','KABUPATEN TOLI-TOLI'),('1807','18','KABUPATEN BUOL'),('1808','18','KABUPATEN PARIGI MOUTONG'),('1809','18','KABUPATEN TOJO UNA-UNA'),('1810','18','KABUPATEN SIGI'),('1851','18','PALU'),('1901','19','KABUPATEN SELAYAR'),('1902','19','KABUPATEN BULUKUMBA'),('1903','19','KABUPATEN BANTAENG'),('1904','19','KABUPATEN JENEPONTO'),('1905','19','KABUPATEN TAKALAR'),('1906','19','KABUPATEN GOWA'),('1907','19','KABUPATEN SINJAI'),('1908','19','KABUPATEN MAROS'),('1909','19','KABUPATEN PANGKAJENE'),('1910','19','KABUPATEN BARRU'),('1911','19','KABUPATEN BONE'),('1912','19','KABUPATEN SOPPENG'),('1913','19','KABUPATEN WAJO'),('1914','19','KABUPATEN SIDENRENG RAPPANG'),('1915','19','KABUPATEN PINRANG'),('1916','19','KABUPATEN ENREKANG'),('1917','19','KABUPATEN LUWU'),('1918','19','KABUPATEN TANA TORAJA'),('1922','19','KABUPATEN LUWU UTARA'),('1925','19','KABUPATEN LUWU TIMUR'),('1926','19','KABUPATEN TORAJA UTARA'),('1951','19','MAKASSAR'),('1952','19','PARE-PARE'),('1953','19','PALOPO'),('2001',NULL,'KABUPATEN BUTON'),('2002',NULL,'KABUPATEN MUNA'),('2003',NULL,'KABUPATEN KONAWE'),('2004',NULL,'KABUPATEN KOLAKA'),('2005',NULL,'KABUPATEN WAKATOBI'),('2006',NULL,'KABUPATEN BOMBANA'),('2007',NULL,'KABUPATEN KOLAKA UTARA'),('2008',NULL,'KABUPATEN KONAWE SELATAN'),('2009',NULL,'KABUPATEN KONAWE UTARA'),('2010',NULL,'KABUPATEN BUTON UTARA'),('2051',NULL,'KENDARI'),('2052',NULL,'BAU-BAU'),('2053',NULL,'KONAWE SELATAN'),('2101','21','KABUPATEN MALUKU TENGGARA BARA'),('2102','21','KABUPATEN MALUKU TENGGARA'),('2103','21','KABUPATEN MALUKU TENGAH'),('2104','21','KABUPATEN BURU'),('2105','21','KABUPATEN SERAM BAGIAN BARAT'),('2106','21','KABUPATEN SERAM BARAT TIMUR'),('2107','21','KABUPATEN KEPULAUAN ARU'),('2108','21','KABUPATEN MALUKU BARAT DAYA'),('2109','21','KABUPATEN BURU SELATAN'),('2151','21','AMBON'),('2152','21','TUAL'),('2201','22','KABUPATEN JEMBRANA'),('2202','22','KABUPATEN TABANAN'),('2203','22','KABUPATEN BADUNG'),('2204','22','KABUPATEN GIANYAR'),('2205','22','KABUPATEN KLUNGKUNG'),('2206','22','KABUPATEN BANGLI'),('2207','22','KABUPATEN KARANGASEM'),('2208','22','KABUPATEN BULELENG'),('2251','22','DENPASAR'),('2301','23','KABUPATEN LOMBOK BARAT'),('2302','23','KABUPATEN LOMBOK TENGAH'),('2303','23','KABUPATEN LOMBOK TIMUR'),('2304','23','KABUPATEN SUMBAWA'),('2305','23','KABUPATEN DOMPU'),('2306','23','KABUPATEN BIMA'),('2307','23','KABUPATEN SUMBAWA BARAT'),('2308','23','KABUPATEN LOMBOK UTARA'),('2351','23','MATARAM'),('2352','23','BIMA'),('2401','24','KABUPATEN SUMBA BARAT'),('2402','24','KABUPATEN SUMBA TIMUR'),('2403','24','KABUPATEN KUPANG'),('2404','24','KABUPATEN TIMOR TENGAH SELATAN'),('2405','24','KABUPATEN TIMOR TENGAH UTARA'),('2406','24','KABUPATEN BELU'),('2407','24','KABUPATEN ALOR'),('2408','24','KABUPATEN LEMBATA'),('2409','24','KABUPATEN FLORES TIMUR'),('2410','24','KABUPATEN SIKKA'),('2411','24','KABUPATEN ENDE'),('2412','24','KABUPATEN NGADA'),('2413','24','KABUPATEN MANGGARAI'),('2414','24','KABUPATEN ROTE NDAO'),('2415','24','KABUPATEN MANGGARAI BARAT'),('2416','24','KABUPATEN SUMBA TENGAH'),('2417','24','KABUPATEN SUMBA BARAT DAYA'),('2418','24','KABUPATEN SABU RAIJUA'),('2419','24','KABUPATEN NAGEKEO'),('2420','24','KABUPATEN MANGGARAI TIMUR'),('2451','24','KUPANG'),('2501','25','KABUPATEN MERAUKE'),('2502','25','KABUPATEN JAYAWIJAYA'),('2503','25','KABUPATEN JAYAPURA'),('2504','25','KABUPATEN NABIRE'),('2505','25','KABUPATEN YAPEN WAROPEN'),('2506','25','KABUPATEN BIAK NUMFOR'),('2507','25','KABUPATEN PANIAI'),('2508','25','KABUPATEN PUNCAK JAYA'),('2509','25','KABUPATEN MIMIKA'),('2510','25','KABUPATEN BOVEN DIGOEL'),('2511','25','KABUPATEN MAPPI'),('2512','25','KABUPATEN ASMAT'),('2513','25','KABUPATEN YAKUHIMO'),('2514','25','KABUPATEN PEGUNUNGAN BINTANG'),('2515','25','KABUPATEN TOLIKARA'),('2516','25','KABUPATEN SARMI'),('2517','25','KABUPATEN KEEROM'),('2518','25','KABUPATEN WAROPEN'),('2519','25','KABUPATEN SUPIORI'),('2520','25','KABUPATEN NDUGA'),('2521','25','KABUPATEN LANNY JAYA'),('2522','25','KABUPATEN MAMBERAMO TENGAH'),('2523','25','KABUPATEN YALIMO'),('2524','25','KABUPATEN MAMBERAMO RAYA'),('2525','25','KABUPATEN PUNCAK'),('2526','25','KABUPATEN INTAN JAYA'),('2527','25','KABUPATEN DEIYAI'),('2528','25','KABUPATEN DOGIYAI'),('2551','25','JAYAPURA'),('2601','26','KABUPATEN BENGKULU SELATAN'),('2602','26','KABUPATEN REJANG LEBONG'),('2603','26','KABUPATEN BENGKULU UTARA'),('2604','26','KABUPATEN KAUR'),('2605','26','KABUPATEN SELUMA'),('2606','26','KABUPATEN MUKO-MUKO'),('2607','26','KABUPATEN LEBONG'),('2608','26','KABUPATEN KEPAHIANG'),('2609','26','KABUPATEN BENGKULU TENGAH'),('2651','26','BENGKULU'),('2801','28','KABUPATEN PANDEGLANG'),('2802','28','KABUPATEN LEBAK'),('2803','28','KABUPATEN TANGERANG'),('2804','28','KABUPATEN SERANG'),('2851','28','TANGERANG'),('2852','28','CILEGON'),('2853','28','SERANG'),('2854','28','TANGERANG SELATAN'),('2901','29','KABUPATEN HALMAHERA BARAT'),('2902','29','KABUPATEN HALMAHERA TENGAH'),('2903','29','KABUPATEN KEPULAUAN SULA'),('2904','29','KABUPATEN HALMAHERA SELATAN'),('2905','29','KABUPATEN HALMAHERA UTARA'),('2906','29','KABUPATEN HALMAHERA TIMUR'),('2907','29','KABUPATEN PULAU MOROTAI'),('2951','29','TERNATE'),('2952','29','TIDORE'),('3001','30','KABUPATEN BANGKA'),('3002','30','KABUPATEN BELITUNG'),('3003','30','KABUPATEN BANGKA SELATAN'),('3004','30','KABUPATEN BANGKA TENGAH'),('3005','30','KABUPATEN BANGKA BARAT'),('3006','30','KABUPATEN BELITUNG TIMUR'),('3051','30','PANGKALPINANG'),('3101','31','KABUPATEN BOALEMO'),('3102','31','KABUPATEN GORONTALO'),('3103','31','KABUPATEN PUHUWATO'),('3104','31','KABUPATEN BONE BOLANGO'),('3151','31','GORONTALO'),('3201','32','KABUPATEN FAK-FAK'),('3202','32','KABUPATEN SORONG'),('3203','32','KABUPATEN MANOKWARI'),('3204','32','KABUPATEN KAIMANA'),('3205','32','KABUPATEN SORONG SELATAN'),('3206','32','KABUPATEN RAJA AMPAT'),('3207','32','KABUPATEN TELUK BINTUNI'),('3208','32','KABUPATEN TELUK WONDANA'),('3251','32','SORONG'),('3301','33','KABUPATEN KARIMUN'),('3302','33','KABUPATEN KEPULAUAN ANAMBAS'),('3303','33','KABUPATEN NATUNA'),('3304','33','KABUPATEN BINTAN'),('3305','33','KABUPATEN LINGGA'),('3351','33','BATAM'),('3352','33','TANJUNG PINANG'),('3401','34','KABUPATEN MAMUJU'),('3402','34','KABUPATEN MAMUJU UTARA'),('3403','34','KABUPATEN MAJENE'),('3404','34','KABUPATEN POLEWALI MANDAR'),('3405','34','KABUPATEN MAMASA');

/*Table structure for table `hrd_department` */

DROP TABLE IF EXISTS `hrd_department`;

CREATE TABLE `hrd_department` (
  `department_id` int(2) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(50) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_department` */

insert  into `hrd_department`(`department_id`,`department_name`) values (1,'A & G'),(2,'FRONT OFFICE'),(3,'FB SERVICE'),(4,'FB PRODUCT'),(5,'ENGINEERING'),(6,'ACCOUNTING'),(7,'HOUSEKEEPING'),(8,'SALES & MARKETING'),(9,'SECURITY'),(10,'HRD');

/*Table structure for table `hrd_education` */

DROP TABLE IF EXISTS `hrd_education`;

CREATE TABLE `hrd_education` (
  `education_id` int(2) NOT NULL AUTO_INCREMENT,
  `education_name` varchar(50) NOT NULL,
  PRIMARY KEY (`education_id`),
  KEY `name` (`education_name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_education` */

insert  into `hrd_education`(`education_id`,`education_name`) values (5,'D1'),(6,'D3'),(7,'S1'),(8,'S2'),(2,'SD / MI'),(4,'SMA / MA'),(3,'SMP / MTS'),(1,'TIDAK SEKOLAH'),(9,'TIDAK TAHU');

/*Table structure for table `hrd_employee` */

DROP TABLE IF EXISTS `hrd_employee`;

CREATE TABLE `hrd_employee` (
  `emp_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_nik` varchar(15) NOT NULL,
  `emp_finger` varchar(10) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_birthdate` date DEFAULT NULL,
  `emp_birthplace` varchar(50) DEFAULT NULL,
  `emp_gender` enum('-','Male','Female') DEFAULT '-',
  `emp_address` text,
  `province_id` varchar(20) DEFAULT NULL,
  `country_id` varchar(20) DEFAULT NULL,
  `education_id` int(2) DEFAULT NULL,
  `marriage_id` int(2) DEFAULT NULL,
  `religion_id` int(2) DEFAULT NULL,
  `blood_id` int(2) DEFAULT NULL,
  `department_id` int(2) DEFAULT NULL,
  `emp_district` varchar(30) DEFAULT NULL,
  `emp_zipcode` varchar(5) DEFAULT NULL,
  `emp_ktp_id` varchar(30) DEFAULT NULL,
  `emp_phone` varchar(30) DEFAULT NULL,
  `emp_email` varchar(50) DEFAULT NULL,
  `emp_tb` int(5) DEFAULT NULL,
  `emp_bb` int(5) DEFAULT NULL,
  `emp_bpjs_h_id` varchar(30) DEFAULT NULL,
  `emp_join_date_h` date DEFAULT NULL,
  `emp_bpjs_k_id` varchar(30) DEFAULT NULL,
  `emp_join_date_k` date DEFAULT NULL,
  `emp_bank` varchar(50) DEFAULT NULL,
  `emp_no_account` varchar(30) DEFAULT NULL,
  `emp_name_account` varchar(50) DEFAULT NULL,
  `position_id` int(2) DEFAULT NULL,
  `emp_worktype` enum('-','Monthly','Daily') DEFAULT '-',
  `status_id` int(2) DEFAULT NULL,
  `emp_first_salary` int(10) DEFAULT NULL,
  `emp_photo` varchar(100) DEFAULT NULL,
  `emp_start_join` date DEFAULT NULL,
  `emp_start_contract` date DEFAULT NULL,
  `emp_end_contract` date DEFAULT NULL,
  `emp_status` enum('ACTIVE','NON-ACTIVE') NOT NULL DEFAULT 'ACTIVE',
  `emp_date_update` date DEFAULT NULL,
  `emp_time_update` time DEFAULT NULL,
  `user_username` varchar(30) NOT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `nik` (`emp_nik`),
  KEY `name` (`emp_name`),
  KEY `hrd_employee_ibfk_1` (`education_id`),
  KEY `hrd_employee_ibfk_2` (`marriage_id`),
  KEY `religion_id` (`religion_id`),
  KEY `blood_id` (`blood_id`),
  KEY `province_id` (`province_id`),
  KEY `country_id` (`country_id`),
  KEY `position_id` (`position_id`),
  KEY `status_id` (`status_id`),
  KEY `department_id` (`department_id`),
  CONSTRAINT `hrd_employee_ibfk_1` FOREIGN KEY (`education_id`) REFERENCES `hrd_education` (`education_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  CONSTRAINT `hrd_employee_ibfk_2` FOREIGN KEY (`marriage_id`) REFERENCES `hrd_marriage` (`marriage_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  CONSTRAINT `hrd_employee_ibfk_3` FOREIGN KEY (`religion_id`) REFERENCES `hrd_religion` (`religion_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  CONSTRAINT `hrd_employee_ibfk_4` FOREIGN KEY (`blood_id`) REFERENCES `hrd_blood` (`blood_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  CONSTRAINT `hrd_employee_ibfk_5` FOREIGN KEY (`province_id`) REFERENCES `hrd_province` (`province_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  CONSTRAINT `hrd_employee_ibfk_6` FOREIGN KEY (`country_id`) REFERENCES `hrd_country` (`country_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  CONSTRAINT `hrd_employee_ibfk_7` FOREIGN KEY (`position_id`) REFERENCES `hrd_position` (`position_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  CONSTRAINT `hrd_employee_ibfk_8` FOREIGN KEY (`status_id`) REFERENCES `hrd_status` (`status_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  CONSTRAINT `hrd_employee_ibfk_9` FOREIGN KEY (`department_id`) REFERENCES `hrd_department` (`department_id`) ON DELETE SET NULL ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_employee` */

insert  into `hrd_employee`(`emp_id`,`emp_nik`,`emp_finger`,`emp_name`,`emp_birthdate`,`emp_birthplace`,`emp_gender`,`emp_address`,`province_id`,`country_id`,`education_id`,`marriage_id`,`religion_id`,`blood_id`,`department_id`,`emp_district`,`emp_zipcode`,`emp_ktp_id`,`emp_phone`,`emp_email`,`emp_tb`,`emp_bb`,`emp_bpjs_h_id`,`emp_join_date_h`,`emp_bpjs_k_id`,`emp_join_date_k`,`emp_bank`,`emp_no_account`,`emp_name_account`,`position_id`,`emp_worktype`,`status_id`,`emp_first_salary`,`emp_photo`,`emp_start_join`,`emp_start_contract`,`emp_end_contract`,`emp_status`,`emp_date_update`,`emp_time_update`,`user_username`) values (1,'210787','5','JAMA\' ROCHMAD MUTTAQIN','1987-07-21','KUDUS','Male','Tersono Rt. 02 Rw. 03','03','0319',7,1,1,4,1,'KALIWUNGU','59316','33102107870002','085640969727','jama.muttaqin@gmail.com',170,50,'333433','2016-05-01','55555','2016-05-02','BANK MANDIRI','454545454','JAMA\' ROCHMAD MUTTAQIN',14,'Monthly',2,1600000,'Foto_jama-rochmad-muttaqin_1464661302.jpg','2014-05-04','0000-00-00','0000-00-00','ACTIVE','2016-06-14','08:42:52','admin'),(2,'1','1','DESI KURNIASARI','2016-05-01','KUDUS','Female','kajeksan','03','0319',7,2,1,1,6,'menara','59312','331021020120001','08564021554545','desy.act@hotelhomkudus.com',160,70,'3232323','0000-00-00','','0000-00-00','BANK MANDIRI','33562326556','DESI KURNIASARI',2,'Monthly',2,2000000,'Foto_desi_kurniasari_1464579806.jpg','2016-05-01','2016-05-02','2016-05-04','ACTIVE','2016-06-14','10:16:14','admin'),(3,'123','456','IRENE SAMPOUW','2016-06-01','KUDUS','Female','Pasar Kliwon','03','0319',7,1,1,5,10,'kota','59033','331092107870003','085640969727','hrd@hotelhomkudus.com',0,0,'','0000-00-00','','0000-00-00','','','',6,'Monthly',2,1500000,'Foto_irene-sampouw_1465478177.jpg','2015-06-01','2016-06-09','2016-06-09','ACTIVE','2016-06-14','10:15:59','admin');

/*Table structure for table `hrd_family` */

DROP TABLE IF EXISTS `hrd_family`;

CREATE TABLE `hrd_family` (
  `family_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) NOT NULL,
  `relation_id` int(2) NOT NULL,
  `family_name` varchar(50) NOT NULL,
  `family_address` text,
  `family_phone` varchar(30) DEFAULT NULL,
  `family_work` varchar(50) DEFAULT NULL,
  `family_status` enum('Alive','Dead','-') DEFAULT '-',
  `family_date_update` date DEFAULT NULL,
  `family_time_update` time DEFAULT NULL,
  `user_username` varchar(30) NOT NULL,
  PRIMARY KEY (`family_id`),
  KEY `relation_id` (`relation_id`),
  KEY `hrd_family_ibfk_1` (`emp_id`),
  CONSTRAINT `hrd_family_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hrd_employee` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `hrd_family_ibfk_2` FOREIGN KEY (`relation_id`) REFERENCES `hrd_relation` (`relation_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_family` */

insert  into `hrd_family`(`family_id`,`emp_id`,`relation_id`,`family_name`,`family_address`,`family_phone`,`family_work`,`family_status`,`family_date_update`,`family_time_update`,`user_username`) values (1,1,2,'AMBAR SETIYANI','Dusun Tersono Rt. 02/03, Garung Lor - Kaliwungu','0875653235656','karyawan swasta','Alive','2016-06-02','13:35:23','admin'),(2,1,4,'SITI SULASI','Undaan Kidul','-','Petani','Alive','2016-06-02','13:46:14','admin'),(3,3,1,'ANDI KUSNANTO','Jl. Pasar Kliwon','-','','Alive','2016-06-09','20:33:25','admin');

/*Table structure for table `hrd_mail_decree` */

DROP TABLE IF EXISTS `hrd_mail_decree`;

CREATE TABLE `hrd_mail_decree` (
  `decree_id` int(10) NOT NULL AUTO_INCREMENT,
  `decree_no` varchar(50) NOT NULL,
  `decree_title` varchar(100) DEFAULT NULL,
  `decree_date` date DEFAULT NULL,
  `decree_desc` text,
  `decree_sign` varchar(50) DEFAULT NULL,
  `decree_file` varchar(100) DEFAULT NULL,
  `decree_date_update` date DEFAULT NULL,
  `decree_time_update` time DEFAULT NULL,
  `user_username` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`decree_id`),
  KEY `decree_no` (`decree_no`),
  KEY `decree_title` (`decree_title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_mail_decree` */

insert  into `hrd_mail_decree`(`decree_id`,`decree_no`,`decree_title`,`decree_date`,`decree_desc`,`decree_sign`,`decree_file`,`decree_date_update`,`decree_time_update`,`user_username`) values (1,'1234VVV','Surat Pengangkatan Karyawan Kontrak','2016-06-01','<p>Menyatakan dengan Hormat bahwa</p><p>Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Jama\' Rochmad Muttaqin</p>Jabatan&nbsp;&nbsp;&nbsp;&nbsp; : IT Officer','Pak Arifandi','Surat_Keputusan_1465544091.jpg','2016-06-10','14:50:07','admin'),(2,'55653232/V/2016','Surat Pernyataan Pegawai','2016-06-13','<p>Surat ini bertujuan untuk<br></p>','Pak Arifandi',NULL,'2016-06-13','15:23:01','admin');

/*Table structure for table `hrd_marriage` */

DROP TABLE IF EXISTS `hrd_marriage`;

CREATE TABLE `hrd_marriage` (
  `marriage_id` int(2) NOT NULL AUTO_INCREMENT,
  `marriage_name` varchar(50) NOT NULL,
  PRIMARY KEY (`marriage_id`),
  KEY `name` (`marriage_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_marriage` */

insert  into `hrd_marriage`(`marriage_id`,`marriage_name`) values (2,'BELUM KAWIN'),(4,'DUDA'),(3,'JANDA'),(1,'KAWIN');

/*Table structure for table `hrd_mutation` */

DROP TABLE IF EXISTS `hrd_mutation`;

CREATE TABLE `hrd_mutation` (
  `mutation_id` int(10) NOT NULL AUTO_INCREMENT,
  `decree_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `mutation_date` date NOT NULL,
  `department_id` int(2) NOT NULL,
  `position_id` int(2) NOT NULL,
  `department_id2` int(2) NOT NULL,
  `position_id2` int(2) NOT NULL,
  `mutation_date_update` date NOT NULL,
  `mutation_time_update` time NOT NULL,
  `user_username` varchar(30) NOT NULL,
  PRIMARY KEY (`mutation_id`),
  KEY `emp_id` (`emp_id`),
  KEY `user_username` (`user_username`),
  KEY `decree_id` (`decree_id`),
  CONSTRAINT `hrd_mutation_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `hrd_employee` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `hrd_mutation_ibfk_3` FOREIGN KEY (`user_username`) REFERENCES `hrd_users` (`user_username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `hrd_mutation_ibfk_4` FOREIGN KEY (`decree_id`) REFERENCES `hrd_mail_decree` (`decree_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `hrd_mutation` */

/*Table structure for table `hrd_position` */

DROP TABLE IF EXISTS `hrd_position`;

CREATE TABLE `hrd_position` (
  `position_id` int(2) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(50) NOT NULL,
  PRIMARY KEY (`position_id`),
  KEY `name` (`position_name`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_position` */

insert  into `hrd_position`(`position_id`,`position_name`) values (26,'ACCOUNT RECEIVABLE'),(37,'BELL DRIVE'),(20,'CDP'),(2,'CHIEF ACCOUNTING'),(3,'CHIEF ENGINEERING'),(11,'CHIEF SECURITY'),(12,'CHINEESE CHEF'),(32,'COMMIS 2'),(33,'ENGINEERING'),(23,'ENGINEERING SUPERVISOR'),(4,'EXECUTIVE CHEF'),(31,'FB ATTENDANCE'),(9,'FB MANAGER'),(19,'FB SUPERVISOR'),(17,'FO SUPERVISOR'),(29,'FRONT DESK AGENT'),(7,'FRONT OFFICE MANAGER'),(13,'GENERAL CASHIER'),(1,'GENERAL MANAGER'),(22,'GRO'),(8,'HK COORDINATOR'),(18,'HK SUPERVISOR'),(6,'HR MANAGER'),(27,'INCOME AUDIT'),(14,'IT OFFICER'),(15,'NIGHT MANAGER'),(35,'PUBLIC AREA (PA)'),(25,'PURCHASING'),(21,'QUALITY ASSURANCE'),(30,'ROOM ATTENDANCE'),(24,'SALES ADMIN'),(16,'SALES EXECUTIVE'),(10,'SALES MARKETING'),(5,'SALES MARKETING MANAGER'),(34,'SECURITY'),(28,'SECURITY LEADER'),(36,'STEWARD');

/*Table structure for table `hrd_province` */

DROP TABLE IF EXISTS `hrd_province`;

CREATE TABLE `hrd_province` (
  `province_id` varchar(20) NOT NULL DEFAULT '',
  `province_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`province_id`),
  KEY `propinsiNama` (`province_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `hrd_province` */

insert  into `hrd_province`(`province_id`,`province_name`) values ('06','ACEH DARUSSALAM'),('22','BALI'),('30','BANGKA BELITUNG'),('28','BANTEN'),('26','BENGKULU'),('04','D I YOGYAKARTA'),('01','DKI JAKARTA'),('31','GORONTALO'),('32','IRIAN JAYA BARAT'),('10','JAMBI'),('02','JAWA BARAT'),('03','JAWA TENGAH'),('05','JAWA TIMUR'),('13','KALIMANTAN BARAT'),('15','KALIMANTAN SELATAN'),('14','KALIMANTAN TENGAH'),('16','KALIMANTAN TIMUR'),('33','KEPULAUAN RIAU'),('12','LAMPUNG'),('99','LUAR NEGERI'),('21','MALUKU'),('29','MALUKU UTARA'),('23','NUSA TENGGARA BARAT'),('24','NUSA TENGGARA TIMUR'),('25','PAPUA'),('09','RIAU'),('34','SULAWESI BARAT'),('19','SULAWESI SELATAN'),('18','SULAWESI TENGAH'),('17','SULAWESI UTARA'),('08','SUMATERA BARAT'),('11','SUMATERA SELATAN'),('07','SUMATERA UTARA');

/*Table structure for table `hrd_punishment` */

DROP TABLE IF EXISTS `hrd_punishment`;

CREATE TABLE `hrd_punishment` (
  `punishment_id` int(2) NOT NULL AUTO_INCREMENT,
  `punishment_name` varchar(50) NOT NULL,
  PRIMARY KEY (`punishment_id`),
  KEY `punishment_name` (`punishment_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_punishment` */

insert  into `hrd_punishment`(`punishment_id`,`punishment_name`) values (3,'BLOCK LEAVE'),(2,'CUT OF SERVICE CHARGE'),(1,'WARNING 1'),(4,'WARNING 2'),(5,'WARNING 3');

/*Table structure for table `hrd_record` */

DROP TABLE IF EXISTS `hrd_record`;

CREATE TABLE `hrd_record` (
  `record_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) NOT NULL,
  `record_date` date DEFAULT NULL,
  `record_desc` text,
  `record_date_update` date DEFAULT NULL,
  `record_time_update` time DEFAULT NULL,
  `user_username` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`record_id`),
  KEY `emp_id` (`emp_id`),
  KEY `record_date` (`record_date`),
  CONSTRAINT `hrd_record_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hrd_employee` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_record` */

insert  into `hrd_record`(`record_id`,`emp_id`,`record_date`,`record_desc`,`record_date_update`,`record_time_update`,`user_username`) values (1,1,'2016-06-14','<p>Telat 2 Menit<br></p>','2016-06-14','14:18:54','admin');

/*Table structure for table `hrd_relation` */

DROP TABLE IF EXISTS `hrd_relation`;

CREATE TABLE `hrd_relation` (
  `relation_id` int(2) NOT NULL AUTO_INCREMENT,
  `relation_name` varchar(50) NOT NULL,
  PRIMARY KEY (`relation_id`),
  KEY `relation_name` (`relation_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_relation` */

insert  into `hrd_relation`(`relation_id`,`relation_name`) values (3,'AYAH'),(4,'IBU'),(2,'ISTRI'),(1,'SUAMI');

/*Table structure for table `hrd_religion` */

DROP TABLE IF EXISTS `hrd_religion`;

CREATE TABLE `hrd_religion` (
  `religion_id` int(2) NOT NULL AUTO_INCREMENT,
  `religion_name` varchar(50) NOT NULL,
  PRIMARY KEY (`religion_id`),
  KEY `name` (`religion_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_religion` */

insert  into `hrd_religion`(`religion_id`,`religion_name`) values (4,'BUDHA'),(5,'HINDHU'),(1,'ISLAM'),(3,'KATOLIK'),(2,'KRISTEN');

/*Table structure for table `hrd_resign` */

DROP TABLE IF EXISTS `hrd_resign`;

CREATE TABLE `hrd_resign` (
  `resign_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) NOT NULL,
  `resign_date` date NOT NULL,
  `resign_desc` text NOT NULL,
  `resign_date_update` date NOT NULL,
  `resign_time_update` time NOT NULL,
  `user_username` varchar(30) NOT NULL,
  PRIMARY KEY (`resign_id`),
  KEY `emp_id` (`emp_id`),
  CONSTRAINT `hrd_resign_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hrd_employee` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_resign` */

/*Table structure for table `hrd_reward` */

DROP TABLE IF EXISTS `hrd_reward`;

CREATE TABLE `hrd_reward` (
  `reward_id` int(2) NOT NULL AUTO_INCREMENT,
  `reward_name` varchar(50) NOT NULL,
  PRIMARY KEY (`reward_id`),
  KEY `reward_name` (`reward_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_reward` */

insert  into `hrd_reward`(`reward_id`,`reward_name`) values (3,'EXTRA OFF'),(2,'FRESH MONEY'),(1,'VOUCHER');

/*Table structure for table `hrd_school` */

DROP TABLE IF EXISTS `hrd_school`;

CREATE TABLE `hrd_school` (
  `school_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) NOT NULL,
  `education_id` int(2) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_periode_1` date DEFAULT NULL,
  `school_periode_2` date DEFAULT NULL,
  `school_department` varchar(50) DEFAULT NULL,
  `school_address` text,
  `school_phone` varchar(30) DEFAULT NULL,
  `school_email` varchar(30) DEFAULT NULL,
  `school_web` varchar(30) DEFAULT NULL,
  `school_date_update` date DEFAULT NULL,
  `school_time_update` time DEFAULT NULL,
  `user_username` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`school_id`),
  KEY `name` (`school_name`),
  KEY `emp_id` (`emp_id`),
  KEY `education_id` (`education_id`),
  CONSTRAINT `hrd_school_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hrd_employee` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `hrd_school_ibfk_2` FOREIGN KEY (`education_id`) REFERENCES `hrd_education` (`education_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_school` */

insert  into `hrd_school`(`school_id`,`emp_id`,`education_id`,`school_name`,`school_periode_1`,`school_periode_2`,`school_department`,`school_address`,`school_phone`,`school_email`,`school_web`,`school_date_update`,`school_time_update`,`user_username`) values (1,1,2,'SD 4 NEGERI UNDAAN KIDUL','2016-05-04','2016-05-31','-','undaan kidul gang 4','','','','2016-05-31','15:21:14','admin'),(2,1,3,'MTS NAHDLATUL MUSLIMIN','2002-08-01','2004-01-06','-','Undaan kidul gang 12','','','','2016-05-31','09:23:19','admin'),(5,3,2,'SD KANISIUS KUDUS','2016-06-09','2016-06-09','','Jl. Paijan','','','','2016-06-09','20:28:34','admin');

/*Table structure for table `hrd_status` */

DROP TABLE IF EXISTS `hrd_status`;

CREATE TABLE `hrd_status` (
  `status_id` int(2) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) NOT NULL,
  PRIMARY KEY (`status_id`),
  KEY `name` (`status_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_status` */

insert  into `hrd_status`(`status_id`,`status_name`) values (2,'CONTRACT (KONTRAK)'),(4,'DAILY WORKER (DW)'),(3,'MT (MANAGEMENT TRAINEE)');

/*Table structure for table `hrd_transaction_punishment` */

DROP TABLE IF EXISTS `hrd_transaction_punishment`;

CREATE TABLE `hrd_transaction_punishment` (
  `trans_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) NOT NULL,
  `punishment_id` int(2) NOT NULL,
  `trans_no` varchar(50) DEFAULT NULL,
  `trans_date` date DEFAULT NULL,
  `trans_desc` text,
  `trans_date_update` date NOT NULL,
  `trans_time_update` time NOT NULL,
  `user_username` varchar(30) NOT NULL,
  PRIMARY KEY (`trans_id`),
  KEY `emp_id` (`emp_id`),
  KEY `punishment_id` (`punishment_id`),
  CONSTRAINT `hrd_transaction_punishment_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hrd_employee` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `hrd_transaction_punishment_ibfk_2` FOREIGN KEY (`punishment_id`) REFERENCES `hrd_punishment` (`punishment_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_transaction_punishment` */

insert  into `hrd_transaction_punishment`(`trans_id`,`emp_id`,`punishment_id`,`trans_no`,`trans_date`,`trans_desc`,`trans_date_update`,`trans_time_update`,`user_username`) values (1,1,1,'1234','2016-06-03','<p>Telat<br></p>','2016-06-06','16:27:50','admin'),(3,3,2,'45454/3434','2016-06-10','<p>Telat beberapa Hari<br></p>','2016-06-10','13:28:14','admin');

/*Table structure for table `hrd_transaction_reward` */

DROP TABLE IF EXISTS `hrd_transaction_reward`;

CREATE TABLE `hrd_transaction_reward` (
  `trans_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) NOT NULL,
  `trans_no` varchar(50) DEFAULT NULL,
  `reward_id` int(2) NOT NULL,
  `trans_date` date DEFAULT NULL,
  `trans_desc` text,
  `trans_date_update` date NOT NULL,
  `trans_time_update` time NOT NULL,
  `user_username` varchar(30) NOT NULL,
  PRIMARY KEY (`trans_id`),
  KEY `emp_id` (`emp_id`),
  KEY `reward_id` (`reward_id`),
  CONSTRAINT `hrd_transaction_reward_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `hrd_employee` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `hrd_transaction_reward_ibfk_2` FOREIGN KEY (`reward_id`) REFERENCES `hrd_reward` (`reward_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_transaction_reward` */

insert  into `hrd_transaction_reward`(`trans_id`,`emp_id`,`trans_no`,`reward_id`,`trans_date`,`trans_desc`,`trans_date_update`,`trans_time_update`,`user_username`) values (2,2,'5522/GM/HOMKUDUS/2016',3,'2016-06-06','<p>Penambahan Off 1 hari<br></p>','2016-06-06','15:20:09','admin'),(3,3,'3343/HOMKUDUS/VI/2016',3,'2016-06-10','<p>Diberikan Extra Off 1 Hari karena Loyalitas<br></p>','2016-06-10','13:19:07','admin');

/*Table structure for table `hrd_users` */

DROP TABLE IF EXISTS `hrd_users`;

CREATE TABLE `hrd_users` (
  `user_username` varchar(30) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_level` enum('Admin','User','-') NOT NULL DEFAULT '-',
  `user_status` enum('Active','Non Active','-') DEFAULT '-',
  PRIMARY KEY (`user_username`),
  KEY `name` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `hrd_users` */

insert  into `hrd_users`(`user_username`,`user_password`,`user_name`,`user_level`,`user_status`) values ('admin','d033e22ae348aeb5660fc2140aec35850c4da997','Administratro','Admin','Active');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
