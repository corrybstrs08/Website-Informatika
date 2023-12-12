/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.9.4-MariaDB : Database - informatika
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`informatika` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `informatika`;

/*Table structure for table `dosen` */

DROP TABLE IF EXISTS `dosen`;

CREATE TABLE `dosen` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(255) NOT NULL,
  `gambar` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE dosen
ADD COLUMN deskripsi TEXT NOT NULL AFTER gambar;

DELETE FROM dosen WHERE id = 3;

UPDATE `dosen`
SET deskripsi = '<p>Jabatan&nbsp; &nbsp; &nbsp;: Ketua Program Studi Sarjana Informatika dan Ketua Senat Fakultas Informatika dan Teknik Elektro</p><p>Email&nbsp; &nbsp; &nbsp; &nbsp; : <a href="mailto:ariesatia@del.ac.id">ariesatia@del.ac.id</a></p><p>Latar Belakang Pendidikan&nbsp; &nbsp;:</p><ul><li>S1 Teknik Elektro Universitas Kristen Maranatha</li><li>S2 Teknik Informatika USU</li></ul><p><strong>Publikasi :</strong></p><ol><li>Analisis Algoritma Approximate String Matching pada Fitur Autocorrect dalam Pencarian Data, Seminar Nasional Teknologi Informasi dan Komunikasi di Daerah Rural (SNaTIKRa) 2017, 22 November 2017</li></ol>'
WHERE id = 1;

UPDATE `dosen`
SET deskripsi = '<p>Jabatan&nbsp; &nbsp; : Dosen</p><h4>Personal</h4><figure class="table"><table><tbody><tr><td>Name</td><td>:</td><td>Johannes Harungguan&nbsp;Sianipar</td></tr><tr><td>Birth</td><td>:</td><td>16 April 1973</td></tr><tr><td>Marital Status</td><td>:</td><td>Married</td></tr><tr><td>Citizenship</td><td>:</td><td>Indonesia</td></tr><tr><td>Address</td><td>:</td><td>Komp. IT Del, Jl. SM Raja Sitoluama – Kec. Laguboti, Kab. Toba, Sumatera Utara – 22381</td></tr><tr><td>Email Address</td><td>:</td><td><a href="mailto:runggu@yahoo.com">runggu@yahoo.com</a>&nbsp;,&nbsp;<a href="mailto:johannes@del.ac.id">johannes@del.ac.id</a></td></tr></tbody></table></figure><h4>Education</h4><figure class="table"><table><tbody><tr><td>2000</td><td>:</td><td><p>Bachelor Degree from STTTelkom (Telkom University)</p><p>Faculty of Telecommunication Engineering</p><p>Thesis: TDMA based MAC Protocol for ATM-PON</p></td></tr><tr><td>2010</td><td>:</td><td><p>Master Degree from Institut Teknologi Bandung (ITB)</p><p>Faculty of Informatics</p><p>Thesis: Log Analysis Application Development for User Access Control on Internet Proxy Server</p></td></tr><tr><td>2020</td><td>:</td><td><p>Ph.D from Hasso Plattner Institut, University of Potsdam Germany</p><p>Thesis: Towards Scalable &amp; Secure Virtual Laboratory for Cybersecurity e-Learning</p></td></tr></tbody></table></figure><h4>Academic Rank</h4><figure class="table"><table><tbody><tr><td>2004</td><td>:</td><td>Asisten Ahli</td></tr><tr><td>2012</td><td>:</td><td>Lektor</td></tr></tbody></table></figure><h4>Work Experiences</h4><figure class="table"><table><tbody><tr><td>2000 – 2002</td><td>:</td><td>Instructor of Cisco Networking Academy at ITB</td></tr><tr><td>2002 – 2013</td><td>:</td><td>Lecturer at Del Institut of Technology (IT Del) Indonesia</td></tr><tr><td>2002 – 2007</td><td>:</td><td>Network Administrator in IT Del</td></tr><tr><td>2004 – 2007</td><td>:</td><td>Head of Computer Engineering Department</td></tr><tr><td>2011 – 2012</td><td>:</td><td>Vice Director of General Administration and Resources at IT Del</td></tr><tr><td>2013 – 2019</td><td>:</td><td>Ph.D. Student at Hasso Plattner Institute</td></tr></tbody></table></figure><h4>Profesional Training</h4><figure class="table"><table><tbody><tr><td>2001</td><td>:</td><td>Cisco Networking Academy Program</td></tr><tr><td>2002</td><td>:</td><td>CCNA, CCDA Certified</td></tr></tbody></table></figure><h4>Profesional Training</h4><figure class="table"><table><tbody><tr><td>Programming Languages</td><td>:</td><td>Java, Python, C, Groovy, HTML, Javascripts</td></tr><tr><td>Operating Systems</td><td>:</td><td>CWindows Server, Linux Centos &amp; Ubuntu</td></tr><tr><td>Networking</td><td>:</td><td>Protocol (TCP/IP, etc), Wireless LAN, LAN, ATM, Frame Relay, ISDN, RIP etc.</td></tr><tr><td>Networking Services</td><td>:</td><td>DNS, DHCP, Active Directory, NGINX, NFS, SNMP, NAS, etc.</td></tr><tr><td>Hardware</td><td>:</td><td>Cisco Catalyst, Cisco Router, Firewall (Cisco PIX, Mikrotik, Fortigate), Mikrotik Router, Fiber Optic, etc.</td></tr></tbody></table></figure><h4><strong>Research Interest</strong></h4><figure class="table"><table><tbody><tr><td>1.</td><td>Virtual Laboratory for Cyber Security e-Learning</td></tr><tr><td>2.</td><td>Distributed System &amp; Cloud Computing</td></tr><tr><td>3.</td><td>Security in Cloud Computing</td></tr><tr><td>4.</td><td>Machine Learning in Cyber Security</td></tr></tbody></table></figure><h4><strong>Publications</strong></h4><figure class="table"><table><tbody><tr><td>1.</td><td>Sianipar, J.: Web Usage Mining Log Akses Proxy Server Untuk Pengelolaan Akses Internet., Proceeding SNEEMO 2011, Politeknik Manufaktur Astra Jakarta, ISBN 9786021904305, 2011</td></tr><tr><td>2.</td><td>Sianipar, J.: Sistem Informasi Pelaporan Penggunaan Sumber Daya Jaringan di Politeknik Informatika Del, Proceeding SNEEMO 2011, Politeknik Manufaktur Astra Jakarta, ISBN 9786021904305, 2011</td></tr><tr><td>3.</td><td>Sianipar, J., Saleh, E., Meinel, C.: Construction of Agent-Based Trust in Cloud Infrastructure. In Proceedings of the 2014 IEEE/ACM 7th International Conference on Utility and Cloud Computing, pages 941-946. IEEE Computer Society. (2014)</td></tr><tr><td>4.</td><td>Saleh, E., Sianipar, J., Meinel, C.: SecPlace: A Security-Aware Placement Model for Multi-tenant SaaS Environments. In Proceedings of IEEE 11th Intl Conf on Autonomic and Trusted Computing. IEEE ACT. (2014)</td></tr><tr><td>5.</td><td>Sianipar, J., Meinel, C.: A verification mechanism for cloud brokerage system. In Proceedings of 2015 Second International Conference on Computer Science, Computer Engineering, and Social Media (CSCESM), pages 143- 148. IEEE. (2015)</td></tr><tr><td>6.</td><td>Sianipar, J., Willems, C., Meinel, C.: A container-based virtual laboratory for internet security e-learning. In International Journal of Learning and Teaching. IJLT, vol. 2, no. 2, pp. 121{128. (2016)</td></tr><tr><td>7.</td><td>Sianipar, J., Willems, C., Meinel, C.: Crowdresourcing Virtual Laboratory Architecture On Hybrid Cloud. In INTED2016 Proceedings, 10th International Technology, Education and Development Conference, pages 2940-2949. IATED. (2016)</td></tr><tr><td>8.</td><td>Sianipar, J., Willems, C., Meinel, C.: Signed URL for an Isolated Web Server in a Virtual Laboratory. In Proceedings of the 2017 9th International Conference on Education Technology and Computers, pages 218-222. ACM. (2017)</td></tr><tr><td>9.</td><td>Sianipar, J., Willems, C., Meinel, C.: Team Placement in Crowd-Resourcing Virtual Laboratory for IT Security e-Learning. In Proceedings of the 2017 International Conference on Cloud and Big Data Computing, pages 60-66. ACM. (2017)</td></tr><tr><td>10.</td><td>Sianipar, J., Willems, C., Meinel, C.: Virtual Machine Integrity Verification in Crowd-Resourcing Virtual Laboratory. In 2018 IEEE 11th Conference on Service-Oriented Computing and Applications (SOCA), pages 169-176. ACM. (2018)</td></tr><tr><td>11.</td><td>Sianipar, J., Sukmana, M., Meinel, C.:Moving Sensitive Data Against Live Memory Dumping, Spectre and Meltdown Attacks. 2018 26th International Conference on Systems Engineering (ICSEng). IEEE. (2018)</td></tr></tbody></table></figure><h4><strong>Advising</strong></h4><figure class="table"><table><tbody><tr><td>1.</td><td><p>Roosen Gabriel Manurung</p><ul><li>Research Area: Distributed System &amp; Cloud Computing</li><li>Competencies: Analytical ability, Problem-solving</li><li>Skills: Computer Networking, Programming</li></ul></td></tr><tr><td>2.</td><td><p>Yoel Napitupulu</p><ul><li>Research Area: Distributed System &amp; Cloud Computing</li><li>Competencies: Analytical ability, Problem-solving</li><li>Skills: Computer Networking, Programming</li></ul></td></tr></tbody></table></figure><p>&nbsp;</p>'
WHERE id = 4;

UPDATE `dosen`
SET deskripsi = '<p>Vice Rector of Academic and Student Affairs (2013-2015)<br>Dean of Faculty of Informatics and Electrical Engineering (2013-2015)<br>Of Del Institute of Technology<br>Vice Rector of Planning, Resources, and Finance Affairs (2017-now)<br>She received her Bachelor Degree from Bandung Institute of Technology, Indonesia, in Informatics Engineering (1998-2002). Then she got her master degree of ICT from Wollongong University, Australia in 2005. She pursued her PhD in Software Testing from Swinburne University of Technology, Australia (2010).</p><p>After receiving her Bachelor Degree, she took a position as a junior lecturer in Del Polytechnic of Informatics (an earlier form of Del Institute of Technology). In 2010, she was appointed as Vice Director of Academic and Student affairs and in 2012 as the Director of Del Polytechnic of Informatics. After Del Polytechnic of Informatics was transformed into Del Institute of Technology in 2013, she was appointed as Vice Rector of Academic and Student Affairs, as well as the Dean of Faculty of Informatics and Electrical Engineering.</p><p>She is contactable by email :&nbsp;<a href="mailto:arlinta@del.ac.id">arlinta@del.ac.id</a>, and&nbsp;<a href="mailto:arlintacbarus@gmail.com">arlintacbarus@gmail.com</a>&nbsp;and also by phone: +62 632 331234 (office) and +62 81375660081 (mobile)</p><p>&nbsp;</p><h4>Publications</h4><figure class="table"><table><tbody><tr><td rowspan="3">1</td><td>Nama</td><td>Arlinta Christy Barus, Tsong Yueh Chen, Fei-Ching Kuo, Huai Liu, Robert G. Merkel, Gregg Rothermel</td></tr><tr><td>Judul</td><td>A Cost-Effective Random Testing Method for Programs with Non-Numeric Inputs</td></tr><tr><td>Jurnal</td><td>Journal IEEE Transactions on Computers<br>Volume 65 Issue 12, December 2016<br><a href="http://ieeexplore.ieee.org/document/7442567/">http://ieeexplore.ieee.org/document/7442567/</a><br>doi:&nbsp;<a href="https://doi.org/10.1109/TC.2016.2547380">10.1109/TC.2016.2547380</a>, ISSN: 0018-9340<br>(<a href="http://www.del.ac.id/people/arlinta/files/01_IEEE%20Journal%20Version.pdf">file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/01_Peer%20Reviewer.pdf">peer_review</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/01_A%20Cost-Effective%20Random%20Testing%20Method%20for%20Programs%20with%20Non-Numeric%20Inputs%20versi%202.pdf">cek_turnitin</a>)</td></tr><tr><td rowspan="3">2</td><td>Nama</td><td>Arlinta C Barus, Muhammad Lukman, Ovryenni Pandiangan, Surya Simangunsong, Fitri Juliana Manurung</td></tr><tr><td>Judul</td><td>Generating Ulos Pattern by Using L-System</td></tr><tr><td>&nbsp;</td><td>Journal of Engineering and Applied Sciences 12(9): 2316-2321, 2017 (<a href="http://www.del.ac.id/people/arlinta/files/02_JurnalEngApplied%20Science.pdf">file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/02_Peer%20Reviewer.pdf">peer_review</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/02_LSystem_Ulos_Raeic_New_Cek%20Turnitin.pdf">cek_turnitin</a>)</td></tr><tr><td rowspan="3">3</td><td>Nama</td><td>Arlinta Christy Barus, Leo Siburian</td></tr><tr><td>Judul</td><td>STUDI PERBANDINGAN ALAT PENGUJIAN OTOMATIS UNTUK APLIKASI ANDROID</td></tr><tr><td>Jurnal</td><td>Jurnal Teknologi Informasi dan Ilmu Komputer (JTIIK) (<a href="http://www.del.ac.id/people/arlinta/files/03a_JTIIK_ACB.pdf">file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/03b_JTIIK_ACB_Acceptance%20proof.pdf">file2</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/03_Peer%20Reviewer.pdf">peer_review</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/03a_JTIIK_ACB.pdf">cek_turnitin</a>)</td></tr><tr><td rowspan="3">4</td><td>Nama</td><td>Arlinta Christy Barus</td></tr><tr><td>Judul</td><td>Matrix Multiplication Program: a Case Study of Metamorphic Testing</td></tr><tr><td>&nbsp;</td><td>ARPN Journal of Engineering and Applied Science, VOL. 10, NO. 3, FEBRUARY 2015 ,<br><a href="http://www.arpnjournals.com/jeas/research_papers/rp_2015/jeas_0215_1580.pdf">http://www.arpnjournals.com/jeas/research_papers/rp_2015/jeas_0215_1580.pdf</a>, ISSN 1819-6608 (Online), (<a href="http://www.del.ac.id/people/arlinta/files/04_ARPN%20Journal.pdf">file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/04_Peer%20Reviewer.pdf">peer_review</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/04_ARPN%20Journal_cek%20II.pdf">cek_turnitin</a>)</td></tr><tr><td rowspan="3">5</td><td>Nama</td><td>Arlinta Christy Barus, Dian Ira Putri Hutasoit, Joel Hunter Siringoringo, Yusfi Apriyanti Siahaan</td></tr><tr><td>Judul</td><td>White box testing tool prototype development</td></tr><tr><td>&nbsp;</td><td>2015 International Conference on Electrical Engineering and Informatics (ICEEI),<br><a href="http://ieeexplore.ieee.org/document/7352537/">http://ieeexplore.ieee.org/document/7352537/</a>&nbsp;,&nbsp;<a href="https://doi.org/10.1109/ICEEI.2015.7352537">DOI: 10.1109/ICEEI.2015.7352537</a>,<br>Electronic ISSN: 2155-6830, (<a href="http://www.del.ac.id/people/arlinta/files/05_internasional%20conference%20ICEEI.pdf">file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/05_Peer%20Reviewer.pdf">peer_review</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/05_internasional%20conference%20ICEEI-Cek%20II.pdf">cek_turnitin</a>)</td></tr><tr><td rowspan="2">6</td><td>Nama</td><td>Arlinta Christy Barus, Tsong Yueh Chen, Fei-Ching Kuo, Huai Liu, Heinz W. Schmid</td></tr><tr><td>Judul</td><td>The impact of source test case selection on the effectiveness of metamorphic testing.</td></tr></tbody></table></figure>'
WHERE id = 2;

UPDATE `dosen`
SET deskripsi = '<p>&nbsp;</p><figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td>iustisia.simbolon@del.ac.id</td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td><td>&nbsp;</td></tr></tbody></table></figure><p>&nbsp;</p>'
WHERE id = 6;

UPDATE `dosen`
SET deskripsi = '<figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td>nenni.aruan@del.ac.id</td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td><td>&nbsp;</td></tr></tbody></table></figure>'
WHERE id = 7;

UPDATE `dosen`
SET deskripsi = '<figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td>yaya@del.ac.id</td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td><td><ul><li>S1 Matematika ITB 2000</li><li>S2 Informatika ITB 2011</li></ul></td></tr></tbody></table></figure>'
WHERE id = 13;

UPDATE `dosen`
SET deskripsi = '<figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td><a href="mailto:litmalem.ginting@del.ac.id">litmalem.ginting@del.ac.id</a></td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td><td><ul><li>S1 Fisika ITB 2005</li><li>S2 Informatika ITB 2012</li></ul></td></tr></tbody></table></figure><h4>Publikasi</h4><figure class="table"><table><tbody><tr><td><ol><li>&nbsp;</li></ol></td><td>Kajian Algoritma Craig Raynold pada Kerumunan (Flocking), Seminar Nasional Teknologi Informasi dan Komunikasi di Daerah Rural (SNaTIKRa) 2017, 22 November 2017</td></tr></tbody></table></figure>'
WHERE id = 12;

UPDATE `dosen`
SET deskripsi = '<figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td>anthon.roberto@del.ac.id</td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td><td><ul><li>S1 Teknik Informatika STIKOM UYELINDO Kupang</li><li>S2 Informatika Institut Teknologi Bandung</li></ul></td></tr></tbody></table></figure><h4>Publikasi</h4><figure class="table"><table><tbody><tr><td>1</td><td>Document Clustering using Combination of Kmeans and Single Linkage Clustering Algorithm</td></tr><tr><td>2</td><td>Implementation of Sentiment Analysis on Twitter Using Naive Bayes Algorithm to Know the People Responses to the Debate of DKI Jakarta Governor Election, The 2017 3rd Recent Advancement in Informatics, Electrical and Electronics Engineering International Conference (RAIEIC), 20-22 November 2017</td></tr></tbody></table></figure>'
WHERE id = 11;

UPDATE `dosen`
SET deskripsi = ''
WHERE id = ;

/*Data for the table `dosen` */

INSERT  INTO `dosen`(`id`,`nama`,`gambar`,`created_at`,`updated_at`) VALUES 
(1,'Arie Satia Dharma, S.T, M.Kom.','t.png',NULL,NULL),
(2,'Dr. Arlinta Christy Barus, ST., M.InfoTech.','t.png',NULL,NULL),
(3,'Dr. Inggriani Liem','t.png',NULL,NULL),
(4,'Dr. Johannes Harungguan Sianipar, S.T., M.T.','t.png',NULL,NULL),
(5,'Herimanto, S.Kom., M.Kom','t.png',NULL,NULL),
(6,'Iustisia Natalia Simbolon, S.Kom., M.T.','t.png',NULL,NULL),
(7,'Nenni Mona Aruan, S.Pd., M.Si','t.png',NULL,NULL),
(8,'Prof.Dr. Roberd Saragih, MT','t.png',NULL,NULL),
(9,'Rusyadi, PAI., M.Pd.','t.png',NULL,NULL),
(10,'Tahan HJ Sihombing, S.Pd., M. App Ling','t.png',NULL,NULL),
(11,'Anthon Roberto Tampubolon, S.Kom, M.T.','t.png',NULL,NULL),
(12,'Lit Malem Ginting, S.Si, MT','t.png',NULL,NULL),
(13,'Yaya Setiadi, S.Si., MT','t.png',NULL,NULL);

INSERT  INTO `dosen`(`id`,`nama`,`gambar`, `deskripsi`, `created_at`,`updated_at`) VALUES
(14, 'Ranty Deviana Siahaan, S.Kom, M.Eng.', 't.png', 'Ranty Deviana Siahaan, S.Kom, M.Eng.',  NULL, NULL);

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(255) NOT NULL,
  `waktu_mulai` DATETIME NOT NULL,
  `waktu_selesai` DATETIME NOT NULL,
  `deskripsi_singkat` VARCHAR(255) NOT NULL,
  `jenis` VARCHAR(255) NOT NULL,
  `lokasi` VARCHAR(255) NOT NULL,
  `penyelenggara` VARCHAR(255) NOT NULL,
  `kontak` VARCHAR(255) NOT NULL,
  `deskripsi` TEXT NOT NULL,
  `penjelasan` TEXT NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `events` */

INSERT  INTO `events`(`id`,`nama`,`waktu_mulai`,`waktu_selesai`,`deskripsi_singkat`,`jenis`,`lokasi`,`penyelenggara`,`kontak`,`deskripsi`,`penjelasan`,`created_at`,`updated_at`) VALUES 
(1,'Pengukuhan anggota baru HIMASTI','2022-10-12 00:00:00','2022-10-12 00:00:00','Pengukuhan mahasiswa angkatan 2022 sebagai anggota HIMASTI.','Program Kerja Tahunan HIMASTI','Pantai Lumban Bul-Bul','Kepengurusan HIMASTI','Reindhard (+6282367xxxxxx)','Kegiatan ini diwajibkan untuk seluruh mahasiswa S1 Informatika angakatan 2019, 2020, 2021, dan 2022. Dengan dresscode training pack Del. ','Pengukuhan mahasiswa angkatan 2022 sebagai anggota HIMASTI. Pengukuhan ini dilakukan sebagai bentuk dan simbol bahwa angakatan 2022 telah dikukuhkan dan disahkan menjadi bagian dari keluarga HIMASTI. Dengan adanya kegiatan ini, diharapkan mahasiswa dan mahasiswi baru dapat merasakan kehangatan dan solidaritas dari keluarga HIMASTI. Setelah menjadi bagian dari keluarga Himpunan Mahasiswa Sarjana Informatika, maka mahasiswa dan mahasiswi Himpunan Mahasiswa Sarjana Informatika secara sadar harus siap menerima dan bertanggung jawab terhadap aturan dan peraturan serta menjaga nama baik Himpunan.',NULL,NULL),
(2,'Natal Himpunan Mahasiswa Informatika','2022-10-12 00:00:00','2022-10-12 00:00:00','Perayaan hari natal untuk semua anggota HIMASTI','Kegiatan Tahunan Program Studi','Gereja HKBP Sitoluama','Mahasiswa-mahasiswi S1 Informatika','Guntur (+6282367xxxxxx)','Seluruh mahasiwa dan mahasiswi S1 Informatika diharapkan berpartisipasi dan turut hadir dalam acara natal ini. Dengan dresscode berwarna hijau. ','Perayaan hari natal untuk seluruh anggota HIMASTI. Natal adalah sebuah perayaan yang di lakukan oleh semua umat Kristiani di seluruh dunia untuk menyambut sang Juru Selamat, yaitu Tuhan Yesus Kristus. Tidak perlu dengan perayaan yang besar dan mewah tetapi bagaimana kita benar-benar meresapi dan mengenang bagaimana kedatangan Tuhan Yesus Kristus datang ke dunia ini untuk menyelamatkan kita. Melalui perayaan Natal ini, yang diharapakan mahasiswa/i menjadi generasi muda intelektual yang selalu takut akan Tuhan.',NULL,NULL),
(3,'Malam Keakraban Program Studi S1 Informatika','2023-02-04 00:00:00','2022-02-05 00:00:00','Acara ini bertujuan untuk mempererat tali persaudaraan antar mahasiswa/i informatika dari angkatan terkecil hingga yang terbesar.','Kegiatan Refreshing','Lapangan Napitupulu','Informatika angkatan 2019',' 08218766xxxx (Judah)','Kegiatan ini diwajibkan untuk seluruh mahasiswa S1 Informatika angakatan 2019, 2020, 2021, dan 2022.','Pada acara ini seluruh mahasiswa/i akan bermalam dengan menggunakan tenda. Setiap mahasiswa/i wajib membawa peralatan pribadi yang mungkin dibutuhkan selama acara. Untuk rangkaian kegiatan yang akan dilakukan, akan dibagikan melalui grup antar angkatan prodi S1 Informatika. Diharapkan seluruh mahasiswa/i Informatika angkatan 2019 hingga 2022 mengikuti kegiatan ini dengan baik dan tertib. Tiada kesan tanpa kehadiran rekan-rekan sekalian.',NULL,NULL),
(4,'HIMASTI Coding Challenge (HCC)','2023-03-10 00:00:00','2023-03-15 00:00:00',' Acara ini bertujuan untuk mengasah kemampuan pada mahasiswa/i di Institut Teknologi Del.','Kompetisi','Institut Teknologi Del','HIMASTI','08137520xxxx (Guntur Sinaga)','Kegiatan ini diwajibkan untuk seluruh mahasiswa S1 Informatika angakatan 2020, 2021, dan 2022.','HIMASTI Coding Challenge adalah sebuah kompetisi yang diadakan oleh pengurus HIMASTI untuk menjelankan salah satu program kerja yang telah mereka rancang di awal pembentukan kepanitian HIMASTI.\n                Program ini biasanya di adakan di Institut Teknologi Del dan diikuti oleh mahasiswa/i Institut Teknologi dari berbagai bidang program studi. Dan di rencanakan di tahun ini program ini di berlakukan untuk mahasiswa/i dari luar kampus Institut Teknologi Del.\n                Tujuan dari HCC:\n                A. Melatih kemampuan mahasiswa/I dan Siswa dalam menyelesaikan suatu masalah dengan menggunakan bahasa pemrograman.\n                B. Melatih jiwa kompetitif mahasiswa/I dan Siswa agar mampu bersaing untuk kompetisi yang sama tingkat nasional hingga internasional.\n                Menambah pengalaman dan pengetahuan mahasiswa/I dan Siswa yang berhubungan dengan pemrograman kompetitif\n                ',NULL,NULL),
(5,'HIMASTI PHOTOGRAPHY COMPETITION ','2023-01-23 00:00:00','2023-01-23 00:00:00','Melakukan event yang dimana seluruh rekan himasti akan mengikuti Kompetisi Fotografi yang mengenai seputar HIMASTI ','Kompetisi','Institut Teknologi Del',' Pengurus HIMASTI Divisi Komunikasi dan Informasi','08218766xxxx (Dian Jorgy)\n                ','','Himasti Photography Competition ini adalah suatu kegiatan kompetisi yang diselenggarakan oleh kepanitian Himasti untuk seluruh anggota Himasti dalam  hal mengabadikan momen-momen yang ada di Institut Teknologi Del yang sesuai dengan tema yang dibuat oleh penyelenggara.\n                Program ini berguna untuk mengembangkan bakat mahasiswa/i Institut Teknologi Del di bidang photography.\n                ',NULL,NULL),
(6,'Webinar','2023-03-20 00:00:00','2023-03-20 00:00:00','Mengadakan diskusi dan sharing knowledge oleh alumni kepada seluruh anggota HIMASTI','Kegiatan Belajar','Institut Teknologi Del','Pengurus HIMASTI Divisi Pendidikan','08218766xxxx (Nanchy Siadari)','','Kegiatan webinar ini di adakan guna untuk menambah ilmu setiap mahasiswa/i prodi S1 Informatika terkait ilmu di luar proses pembelajaran yang di sistemkan oleh kampus. Misalnya webinar yang diadakan oleh ikatan alumni untuk memberikan wawasan terkait dunia pekerjaan kepada mahasiswa/i prodi S1 Informatika.',NULL,NULL),
(7,'KM Cup','2023-01-20 00:00:00','2023-01-20 00:00:00','Setiap anggota HIMASTI akan melakukan pertandingan olahraga dan kesenian.\n                ','Kompetisi','Institut Teknologi Del','Pengurus HIMASTI Divisi Minat dan Bakat','08218766xxxx (Kevin Samosir)','Partisipasi akan kegiatan yang diadakan oleh BEM','Kompetisi ini dirancang oleh kepengurusan HIMASTI untuk anggota HIMASTI guna melatih skill dan meningkatkan solidaritas antar setiap anggota HIMASTI.',NULL,NULL),
(8,'Sprint','2023-11-24 00:00:00','2023-11-24 15:00:00','Review bersama Pak Arie','Proyek','721  DEL','IT Del','081312345678','Awkwkw','Awomwokowk',NULL,NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` VARCHAR(255) NOT NULL,
  `connection` TEXT NOT NULL,
  `queue` TEXT NOT NULL,
  `payload` LONGTEXT NOT NULL,
  `exception` LONGTEXT NOT NULL,
  `failed_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `jumlah` */

DROP TABLE IF EXISTS `jumlah`;

CREATE TABLE `jumlah` (
  `Mahasiswa` INT(11) NOT NULL,
  `StaffDosen` INT(11) NOT NULL,
  `Publikasi` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jumlah` */

INSERT  INTO `jumlah`(`Mahasiswa`,`StaffDosen`,`Publikasi`) VALUES 
(223,261,13);

/*Table structure for table `kompetisi` */

DROP TABLE IF EXISTS `kompetisi`;

CREATE TABLE `kompetisi` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(100) NOT NULL,
  `tanggal` DATE NOT NULL,
  `penyelenggara` VARCHAR(100) NOT NULL,
  `keterangan` TEXT NOT NULL,
  `gambar` VARCHAR(255) NOT NULL,
  `link` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kompetisi` */

INSERT  INTO `kompetisi`(`id`,`nama`,`tanggal`,`penyelenggara`,`keterangan`,`gambar`,`link`) VALUES 
(1,'International Design Challenge 2022','2022-08-31','Binus University','Lomba Design internasional yang diadakan oleh binus','k1.jpg','https://sis.binus.ac.id/idc'),
(2,'INTERNATIONAL ENTREPRENEUR VIEW 2022','2022-08-21','Universitas indonesia','Kompetisi Business Plan','2.jpg','https://drive.google.com/file/d/1wHq78V4b_7axgbV3fpKi1ZTO9oPKCn-I/view?usp=sharing'),
(3,'Management Startup Challenge (MSC)','2022-09-18','Universitas Airlangga','Kompetisi Business Plan','3.jpg','https://mexpounair.com/wp-content/uploads/2022/07/booklet-penyisihan-msc-2022.pdf'),
(4,'IDEANATION X KSBN 2022','2022-08-31','Institut Pertanian Bandung','Kompetisi Business Case','4.jpg','https://drive.google.com/drive/folders/1hH5dbClkrFrYFUSG8XwH0LMu5xmrR8M6'),
(5,'INVENTION 2022 UNIVERSITAS UDAYANA','2022-08-28','Universitas Udayana','Kompetisi Desain Web dan Poster','5.jpg','http://invention-udayana.com/');

/*Table structure for table `kurikulum` */

DROP TABLE IF EXISTS `kurikulum`;

CREATE TABLE `kurikulum` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kode` VARCHAR(100) NOT NULL,
  `nama` VARCHAR(100) NOT NULL,
  `semester` INT(11) NOT NULL,
  `sks` INT(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kurikulum` */

INSERT  INTO `kurikulum`(`id`,`kode`,`nama`,`semester`,`sks`) VALUES 
(1,'KUS1102','Pembentukan Karakter Del',1,2),
(2,'MAS1101','Matematika Dasar I',1,4),
(3,'TIS1101','Inovasi Digital',1,2),
(4,'KUS1101','Bahasa Inggris I',1,2),
(5,'KUS1001','Penulisan Karya Ilmiah',1,2),
(6,'10S1001','Matematika Diskrit',1,3),
(7,'FIS1102','Fisika Dasar IB',1,3),
(8,'MAS1201','Matematika Dasar II',2,4),
(9,'KUS1201','Bahasa Inggris II',2,2),
(10,'KUS1202','Pengantar Rekayasa dan Desain',2,2),
(11,'FIS1202','Fisika Dasar IIB',2,3),
(12,'11S1213','Rekayasa Perangkat Lunak',2,3),
(13,'10S1201','Dasar Pemograman',2,4),
(14,'KUS3002','	Agama dan Etika',3,2),
(15,'MAS2001','Probabilitas dan Statistika',3,3),
(16,'12S2102','Basis Data',3,4),
(17,'11S2110','Pemrograman Berorientasi Objek',3,4),
(18,'14S2106','Sistem Digital',3,3),
(19,'10S2001','Arsitektur dan Organisasi Komputer',3,3),
(20,'10S2201','Aljabar Linier',4,3),
(21,'10S2202','Jaringan Komputer',4,3),
(22,'10S2203','Sistem Operasi',4,3),
(23,'10S2102','Algoritma dan Struktur Data',4,4),
(24,'11S2206','Logika Informatika',4,3),
(25,'11S2203','Interaksi Manusia Komputer',4,3),
(26,'11S3109','Pengembangan Aplikasi Berbasis Web',5,4),
(27,'11S3101','Analisis dan Perancangan Perangkat Lunak',5,3),
(28,'10S3109','Kecerdasan Buatan',5,3),
(29,'11S3116','	Teori Bahasa Formal dan Automata',5,3),
(30,'11S3112','	Pengujian dan Penjaminan Mutu Perangkat Lunak',5,3),
(31,'11S3105','Kriptografi dan Keamanan Informasi',5,3),
(32,'KUS2001','	Bahasa Inggris III',6,2),
(33,'11S3204','Keamanan Perangkat Lunak',6,3),
(34,'11S3211','	Pengembangan Aplikasi Mobile',6,4),
(35,'11S3207','Pembelajaran Mesin',6,3),
(36,'11S3208','Manajemen Proyek Perangkat Lunak',6,4),
(37,'13S3215','Sistem Paralel dan Terdistribusi',6,3),
(38,'11S4190','	Kerja Praktik',7,3),
(39,'11S4093','	Tugas Akhir 1',7,4),
(40,'11S4028','	Rekayasa Perangkat Lunak Berbasis Komponen',7,3),
(41,'11S4031','Ethical Hacking and Penetration Testing',7,3),
(42,'11S4037','Pemrosesan Bahasa Alami',7,3),
(43,'11S4026','Pengembangan Aplikasi Platform Khusus',7,3),
(44,'12S4056','Visualisasi Data',7,3),
(45,'KUS4101','Pancasila dan Kewarganegaraan',8,2),
(46,'TIS3001','	Keteknowiraan',8,3),
(47,'KUS3001','Analisis Dampak Lingkungan',8,2),
(48,'11S4095','	Kapita Selekta',8,1),
(49,'11S4030','UI/UX Design',8,3),
(50,'11S4025','Pembangunan Aplikasi Berbasis Service',8,3),
(51,'31S4201','Etika Keprofesian',8,2),
(52,'12S4005','Hukum dan Etika Siber',8,2),
(53,'11S4032','Information Security Governance and Risk Manajemen',8,3),
(54,'11S4035','	Interpretasi dan Pengolahan Citra',8,3),
(55,'13S4033','Keamanan Jaringan',8,3),
(56,'11S4036','Pembelajaran Mesin Lanjut',8,3);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

INSERT  INTO `migrations`(`id`,`migration`,`batch`) VALUES 
(15,'2014_10_12_000000_create_users_table',1),
(16,'2014_10_12_100000_create_password_resets_table',1),
(17,'2019_08_19_000000_create_failed_jobs_table',1),
(18,'2019_12_14_000001_create_personal_access_tokens_table',1);

/*Table structure for table `misi` */

DROP TABLE IF EXISTS `misi`;

CREATE TABLE `misi` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `misi` TEXT NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `misi` */

INSERT  INTO `misi`(`id`,`misi`) VALUES 
(1,'Menyelenggarakan pendidikan teknik informatika yang bermutu, profesional dan diperhitungkan secara nasional.'),
(2,'Menyelenggarakan penelitian yang menghasilkan dan memanfaatkan teknologi untuk mengembangkan potensi lokal.'),
(3,'Melakukan pengabdian kepada masyarakat dalam bidang teknik informatika.');

/*Table structure for table `news_article` */

DROP TABLE IF EXISTS `news_article`;

CREATE TABLE `news_article` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul` VARCHAR(255) NOT NULL,
  `deskripsi` VARCHAR(255) NOT NULL,
  `isi` TEXT NOT NULL,
  `gambar` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `news_article` */

INSERT  INTO `news_article`(`id`,`judul`,`deskripsi`,`isi`,`gambar`,`created_at`,`updated_at`) VALUES 
(1,'3 Mahasiswa Informatika IT DEL lolos Garuda ACE 2022','Garuda Research And Academic Of Excellence (Garuda ACE) merupakan salah satu program MBKM berjenis Penelitian yang diberikan kepada mahasiswa berprestasi  yang ingin berkolaborasi dengan profesor di AS.','Program Garuda ACE ini adalah program capacity building selama dua tahun, untuk murid-murid Indonesia (dosen/peneliti/profesional muda) yang akan mendapatkan bimbingan langsung dari para Profesor dan peneliti di UChicago Amerika, sehingga diharapkan mereka dapat mendapatkan ‘Letter of Acceptance (LoA)’ dalam PhD program di UChicago atau di universitas terkemuka lainnya, karena pembimbingan intensif sebelumnya.\n\n            Dan dari Institut Teknologi Del ada 5 mahasiswa terpilih yang akan dikirimkan untuk mengikuti program ini, yaitu:\n            1. Natanael Jansudin Siregar\n            2. Marcellino Kelly N Lumban Gaol\n            3. Wordyka Yehezkiel Nainggolan\n            4. Yoel Napitupulu\n            5. Roosen Gabriel Manurung\n            \n            Tiga di antara lima mahasiswa tersebut yaitu Natanael Jansudin Siregar, Yoel Napitupulu, dan Roosen Gabriel Manurung adalah mahasiswa yang berasal dari HMASTI (Himpunan Mahasiswa S1 Informatika).','1.jpg',NULL,NULL),
(2,'Mahasiswa prodi Informatika lolos Penerima  P2MW 2022','Mahasiswa IT Del Prodi Informatika yang lolos sebagai Penerima Bantuan Program Pembinaan Mahasiswa Wirausaha (P2MW) 2022: Samuel Sibuea, Guntur Sinaga, Lamboy Sirait, Michael Napitupulu','Dengan Judul Usaha \'Manajemen Sumber Daya Tambak Toba\' 3 mahasiswa IT del pada Prodi Informatika lolos sebagai Penerima Bantuan Program Pembinaan Mahasiswa Wirausaha (P2MW) 2022:  Samuel Sibuea, Guntur Sinaga, Lamboy Sirait, Michael Napitupulu\n\n                Program Pembinaan Mahasiswa Wirausaha (P2MW) merupakan program pengembangan usaha mahasiswa yang telah memiliki usaha melalui bantuan dana pengembangan dan pembinaan dengan melakukan pendampingan serta pelatihan (coaching) usaha kepada mahasiswa yang bertujuan untuk mendorong dan mencetak mahasiswa dalam menjalankan dan mengembangkan wirausaha serta meningkatkan program kewirausahaan di perguruan tinggi.\n                \n                Kategori usaha yang tersedia juga berbagai jenis, yakni: \n                Makanan dan Minuman\n                Menghasilkan produk makanan dan minuman baik dari bahan mentah menjadi setengah jadi, bahan setengah jadi diolah menjadi produk akhir (bukan reseller).\n                Produksi atau Budidaya\n                Proses produksi dari hulu ke hilir bidang-bidang agrokomplek (pertanian tanaman pangan, hortikultura, kehutanan, peternakan, dan perikanan).\n                Industri Kreatif, Seni, Budaya, dan Pariwisata\n                Proses penciptaan produk dan jasa yang memiliki nilai kreativitas dan ide yang dijadikan produk ekonomi dalam bidang seni, budaya, dan pariwisata.\n                Jasa dan Perdagangan\n                Melakukan aktivitas jual beli barang dan/atau jasa yang dilakukan antara pedagang dan pembeli.\n                Teknologi Terapan\n                Penerapan teknologi tepat guna di berbagai sektor kehidupan.\n                ','2.png',NULL,NULL),
(3,'Tim CICAKCICAK DIDINDING Ist Runner UP Hackathon Code','Selamat kepada tim Cicak cicak didinding yang memperoleh 1st Runner Up Hackathon Code For The Nation pada tanggal 28 Oktober 2022, juga sebagai Best Speaker pada Hackathon Code For The Nation ','Hackathon : Code for the Nation merupakan kompetisi  yang diadakan oleh tiga pihak (riset.ai, Biznet Gio, IT Del) untuk menguji pemahaman terkait bidang keprofesian dalam teknologi informasi serta menguji kemampuan problem solving untuk mahasiswa S1/D3 di daerah Medan dan sekitarnya. Hackathon Competition ini akan diadakan dalam 2 (dua) jenis babak:\n                    1. Preliminary Round\n                    Tahap Preliminary Round, peserta akan diberikan sebuah studi kasus yang harus diselesaikan dengan membuat proposal dan video penjelasan atas masalah yang ada.\n                    2. Final Round\n                    Final Round, peserta akan merealisasikan proposal yang ditawarkan dalam bentuk demo produk dan diuji dengan melakukan presentasi proposal beserta dengan demo produk. Solusi yang diberikan harus diselesaikan dengan memanfaatkan keberadaan dan perkembangan teknologi informasi khususnya Artificial Intelligence (AI) .\n                    Kompetisi ini sudah selesai dilaksanakan. Dan 1 tim yaitu tim CICAKCICAK DIDINDING yang terdiri dari  Natanael Jansudin Siregar, Yoel Napitupulu, dan Roosen Gabriel Manurung memenangkan kompetisi tersebut di kedudukan no 1.\n                    ','3.jpg',NULL,NULL),
(4,'3 Mahasiswa Informatika berhasil menjadi finalis pada Asia Jakarta Regional Contest pada ICPC\n                ','3 Mahasiswa Informatika berangkat ke Jakarta untuk menjadi finalis Asia Jakarta Regional Contest setelah lolos pada tahap pertama INC (Indonesia National Contest)\n                ','ICPC merupakan sebuah program inovatif untuk meningkatkan ambisi, kemampuan memecahkan masalah, dan peluang siswa terkuat di bidang komputasi. Kontes telah berkembang menjadi kolaborasi universitas di seluruh dunia yang menjadi tuan rumah kompetisi regional yang memajukan tim ke putaran kejuaraan global tahunan, ICPC World Final.\n\n                International Collegiate Programming Contest (ICPC) adalah kompetisi pemrograman global utama yang diselenggarakan oleh dan untuk universitas dunia. ICPC berafiliasi dengan Yayasan ICPC.\n                Setelah lulus pada tahap pertama yakni tahap INC (Indonesia National Contest) 3 mahasiswa Informatika: Yosua Haloho, Michael Napitupulu, Samuel Sibuea dengan dukungan kampus IT Del berangkat ke Jakarta sebagai finalis Asia Jakarta Regional Contest.\n                    ','4.jpg',NULL,NULL),
(5,'Salah satu Mahasiswa Informatika menjadi peserta Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam Tingkat Nasional Tahun 2022\n\n                ','Enrico Hezkiel Sirait yang merupakan Mahasiswa Informatika angkatan 2021 yang berhasil lolos mengikuti Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam (ONMIPA) Tingkat Nasional Tahun 2022\n\n                ','Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia melalui Balai Pengembangan Talenta Indonesia telah melaksanakan seleksi tingkat wilayah Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam (ON MIPA) tahun 2022 pada tanggal  28-29 Juli 2022 secara daring.\n                Berdasarkan hasil seleksi dari tim juri ON MIPA tahun 2022, telah ditetapkan para peserta yang lolos seleksi ON MIPA tingkat Wilayah pada tanggal 10 Agustus 2022. Penetapan ini diumumkan melalui surat resmi dari Balai Pengembangan Talenta Indonesia dengan Nomor : 0383/J7.1/PN.00/2022 dan ditandatangani oleh Asep Sukmayadi selaku kepala.\n                Penetapan tersebut menjadi babak baru bagi para peserta terpilih untuk melangkah ke seleksi tingkat nasional yang merupakan tahap akhir sekaligus penentuan juara utama dari ON MIPA 2022.\n                Seleksi tingkat nasional ON MIPA 2022 rencananya akan dilaksanakan pada 20-24 September 2022 di Malang, sedangkan pengumuman pemenang akan digelar pada 25 September 2022 di lokasi yang sama.\n                Adapun kontingen Institut Teknologi Del yang akan melanjutkan perjuangan ke seleksi tingkat nasional adalah sebagai berikut :\n                Bidang Matematika :\n                Enrico Hezkiel Sirait (S1 Informatika 2021)\n                Bidang Biologi:\n                Febri Chatarina Sianipar (S1 Teknik Bioproses 2019)                \n                    ','5.jpg',NULL,NULL),
(6,' 3 Mahasiswa menjadi sebagai Partisipasi babak Final Schematics 2022\n                ','Selamat kepada 3 mahasiswa Informatika: Guntur Sinaga, Michael Napitupulu, dan Samuel Sibuea sebagai finalis pada Schematics 2022\n                ','Schematics adalah salah satu event terbesar ITS yang diselenggarakan oleh mahasiswa Teknik Informatika ITS. Schematics merupakan event yang berfokus pada kompetisi pemrograman dan logika, serta memperkenalkan perkembangan teknologi kepada masyarakat luas melalui subevent-subevent Schematics. \n\n                3 Mahasiswa Informatika; Guntur Sinaga, Michael Napitupulu, dan Samuel Sibuea mengikuti tahap 1 secara online hingga akhirnya lolos sebagai partisipan tahap final pada Schematics 2022. \n                Selamat kepada 3 Mahasiswa Informatika, terus berkarya dan tebarkan pesonamu.\n                \n                    ','6.png',NULL,NULL);

/*Table structure for table `organisasi` */

DROP TABLE IF EXISTS `organisasi`;

CREATE TABLE `organisasi` (
  `organisasi` VARCHAR(100) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `organisasi` */

INSERT  INTO `organisasi`(`organisasi`) VALUES 
('organisasi.png');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` VARCHAR(255) NOT NULL,
  `token` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` VARCHAR(255) NOT NULL,
  `tokenable_id` BIGINT(20) UNSIGNED NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `token` VARCHAR(64) NOT NULL,
  `abilities` TEXT DEFAULT NULL,
  `last_used_at` TIMESTAMP NULL DEFAULT NULL,
  `expires_at` TIMESTAMP NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `sejarah` */

DROP TABLE IF EXISTS `sejarah`;

CREATE TABLE `sejarah` (
  `sejarah` TEXT NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sejarah` */

INSERT  INTO `sejarah`(`sejarah`) VALUES 
('Program Studi S1 Teknik Informatika merupakan salah satu dari 4 (empat) program studi di bawah Fakultas Teknik Informatika dan Elektro di Institut Teknologi Del. Program studi ini dibentuk “ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate quam vitae purus efficitur pulvinar id a lectus. Phasellus at magna.\n\n            Prodi S1 Informatika ini di rancang sejak tahun 2013 dan beroperasi pada tahun 2014 bersama dengan 2 prodi lainnya yaitu prodi S1 Teknik Elektro dan S1 Sistem Informasi. Ketiga prodi ini tergabung dalam 1 fakultas yaitu FITE (Fakultas Teknik Elektro dan Informatika).\n            \n            Fakultas ini berdiri pada tahun 2013 seiring dengan perubahan Politeknik Informatika Del (PI Del) menjadi Institut Teknologi Del (IT Del).');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(2,'Admin','kel8@del.ac.id','2023-11-20 15:18:41','$2y$10$CaayWnGPKummOurR1Om8ZO..nugopj1C9TwOsj02LyopC890wTh7e',NULL,'2023-11-20 15:18:41','2023-11-20 15:18:41'),
(3,'Kelompok18','admin@del.ac.id',NULL,'$2y$10$mkVZkqWJOWnwIMpxUK0PO.Oidueo/OGXgl6D7l8tBc8dEIyiw/dMy',NULL,'2023-11-22 08:53:02','2023-11-22 08:53:02'),
(4,'Admin','admin@pabwe.com',NULL,'$2y$10$9.zToHg5qRg8d6DdkpxyzuQ/t0yWtDQljDXbc.J2n7FgbSxscfVxy',NULL,'2023-11-24 01:57:42','2023-11-24 01:57:42');

/*Table structure for table `visi` */

DROP TABLE IF EXISTS `visi`;

CREATE TABLE `visi` (
  `visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `visi` */

insert  into `visi`(`visi`) values 
('Menjadi program Teknik Informatika yang unggul yang berperan dalam menghasilkan dan memanfaatkan teknologi untuk mengembangkan potensi lokal bagi kemajuan bangsa pada tahun 2023.');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
