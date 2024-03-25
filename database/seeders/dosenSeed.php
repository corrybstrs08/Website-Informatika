<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dosenSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            [
                'nama' => "Arie Satia Dharma, S.T, M.Kom.",
                'deskripsi' => '<p>Jabatan&nbsp; &nbsp; &nbsp;: Ketua Program Studi Sarjana Informatika dan Ketua Senat Fakultas Informatika dan Teknik Elektro</p>
                <p>Email&nbsp; &nbsp; &nbsp; &nbsp; : <a href="mailto:ariesatia@del.ac.id">ariesatia@del.ac.id</a></p><p>Latar Belakang Pendidikan&nbsp; &nbsp;:</p>
                <ul><li>S1 Teknik Elektro Universitas Kristen Maranatha</li><li>S2 Teknik Informatika USU</li></ul><p><strong>Publikasi :</strong></p>
                <ol><li>Analisis Algoritma Approximate String Matching pada Fitur Autocorrect dalam Pencarian Data, Seminar Nasional Teknologi Informasi dan Komunikasi
                di Daerah Rural (SNaTIKRa) 2017, 22 November 2017</li></ol>',
                'gambar' => "Arie.jpg",
                'status' => 'Aktif',
            ],

            [
                'nama' => "Dr. Arlinta Christy Barus, ST., M.InfoTech.",
                'deskripsi' => '<p>Vice Rector of Academic and Student Affairs (2013-2015)<br>Dean of Faculty of Informatics and Electrical Engineering (2013-2015)
                <br>Of Del Institute of Technology<br>Vice Rector of Planning, Resources, and Finance Affairs (2017-now)<br>She received her Bachelor Degree from
                Bandung Institute of Technology, Indonesia, in Informatics Engineering (1998-2002). Then she got her master degree of ICT from Wollongong University,
                Australia in 2005. She pursued her PhD in Software Testing from Swinburne University of Technology, Australia (2010).</p><p>After receiving her Bachelor Degree,
                she took a position as a junior lecturer in Del Polytechnic of Informatics (an earlier form of Del Institute of Technology). In 2010, she was appointed as
                Vice Director of Academic and Student affairs and in 2012 as the Director of Del Polytechnic of Informatics. After Del Polytechnic of Informatics was transformed
                into Del Institute of Technology in 2013, she was appointed as Vice Rector of Academic and Student Affairs, as well as the Dean of Faculty of Informatics and
                Electrical Engineering.</p><p>She is contactable by email :&nbsp;<a href="mailto:arlinta@del.ac.id">arlinta@del.ac.id</a>, and&nbsp;
                <a href="mailto:arlintacbarus@gmail.com">arlintacbarus@gmail.com</a>&nbsp;and also by phone: +62 632 331234 (office) and +62 81375660081 (mobile)</p><p>&nbsp;</p>
                <h4>Publications</h4><figure class="table"><table><tbody><tr><td rowspan="3">1</td><td>Nama</td><td>Arlinta Christy Barus, Tsong Yueh Chen, Fei-Ching Kuo,
                Huai Liu, Robert G. Merkel, Gregg Rothermel</td></tr><tr><td>Judul</td><td>A Cost-Effective Random Testing Method for Programs with Non-Numeric Inputs</td></tr>
                <tr><td>Jurnal</td><td>Journal IEEE Transactions on Computers<br>Volume 65 Issue 12, December 2016<br><a href="http://ieeexplore.ieee.org/document/7442567/">
                http://ieeexplore.ieee.org/document/7442567/</a><br>doi:&nbsp;<a href="https://doi.org/10.1109/TC.2016.2547380">10.1109/TC.2016.2547380</a>, ISSN: 0018-9340<br>
                (<a href="http://www.del.ac.id/people/arlinta/files/01_IEEE%20Journal%20Version.pdf">file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/01_Peer%20Reviewer.pdf">
                peer_review</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/01_A%20Cost-Effective%20Random%20Testing%20Method%20for%20Programs%20with%20Non-Numeric%20Inputs%20versi%202.pdf">
                cek_turnitin</a>)</td></tr><tr><td rowspan="3">2</td><td>Nama</td><td>Arlinta C Barus, Muhammad Lukman, Ovryenni Pandiangan, Surya Simangunsong, Fitri Juliana Manurung</td></tr><tr><td>Judul</td>
                <td>Generating Ulos Pattern by Using L-System</td></tr><tr><td>&nbsp;</td><td>Journal of Engineering and Applied Sciences 12(9): 2316-2321, 2017
                (<a href="http://www.del.ac.id/people/arlinta/files/02_JurnalEngApplied%20Science.pdf">file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/02_Peer%20Reviewer.pdf">
                peer_review</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/02_LSystem_Ulos_Raeic_New_Cek%20Turnitin.pdf">cek_turnitin</a>)</td></tr><tr><td rowspan="3">3</td>
                <td>Nama</td><td>Arlinta Christy Barus, Leo Siburian</td></tr><tr><td>Judul</td><td>STUDI PERBANDINGAN ALAT PENGUJIAN OTOMATIS UNTUK APLIKASI ANDROID</td></tr><tr><td>Jurnal</td>
                <td>Jurnal Teknologi Informasi dan Ilmu Komputer (JTIIK) (<a href="http://www.del.ac.id/people/arlinta/files/03a_JTIIK_ACB.pdf">file1</a>,&nbsp;
                    <a href="http://www.del.ac.id/people/arlinta/files/03b_JTIIK_ACB_Acceptance%20proof.pdf">file2</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/03_Peer%20Reviewer.pdf">
                    peer_review</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/03a_JTIIK_ACB.pdf">cek_turnitin</a>)</td></tr><tr><td rowspan="3">4</td><td>Nama</td><td>Arlinta Christy Barus
                    </td></tr><tr><td>Judul</td><td>Matrix Multiplication Program: a Case Study of Metamorphic Testing</td></tr><tr><td>&nbsp;</td><td>ARPN Journal of Engineering and Applied Science,
                    VOL. 10, NO. 3, FEBRUARY 2015 ,<br><a href="http://www.arpnjournals.com/jeas/research_papers/rp_2015/jeas_0215_1580.pdf">http://www.arpnjournals.com/jeas/research_papers/rp_2015/jeas_0215_1580.pdf</a>,
                    ISSN 1819-6608 (Online), (<a href="http://www.del.ac.id/people/arlinta/files/04_ARPN%20Journal.pdf">file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/04_Peer%20Reviewer.pdf">peer_review</a>,
                    &nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/04_ARPN%20Journal_cek%20II.pdf">cek_turnitin</a>)</td></tr><tr><td rowspan="3">5</td><td>Nama</td><td>Arlinta Christy Barus,
                    Dian Ira Putri Hutasoit, Joel Hunter Siringoringo, Yusfi Apriyanti Siahaan</td></tr><tr><td>Judul</td><td>White box testing tool prototype development</td></tr><tr><td>&nbsp;</td>
                    <td>2015 International Conference on Electrical Engineering and Informatics (ICEEI),<br><a href="http://ieeexplore.ieee.org/document/7352537/">http://ieeexplore.ieee.org/document/7352537/</a>&nbsp;,&nbsp;
                        <a href="https://doi.org/10.1109/ICEEI.2015.7352537">DOI: 10.1109/ICEEI.2015.7352537</a>,<br>Electronic ISSN: 2155-6830, (<a href="http://www.del.ac.id/people/arlinta/files/05_internasional%20conference%20ICEEI.pdf">
                        file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/05_Peer%20Reviewer.pdf">peer_review</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/05_internasional%20conference%20ICEEI-Cek%20II.pdf">
                        cek_turnitin</a>)</td></tr><tr><td rowspan="3">6</td><td>Nama</td><td>Arlinta Christy Barus, Tsong Yueh Chen, Fei-Ching Kuo, Huai Liu, Heinz W. Schmid</td></tr><tr><td>Judul</td><td>The impact of source test
                        case selection on the effectiveness of metamorphic testing.</td></tr><tr><td>&nbsp;</td><td>MET@ICSE 2016: 5-11&nbsp;<a href="http://ieeexplore.ieee.org/document/7811323/">http://ieeexplore.ieee.org/document/7811323/</a>,&nbsp;
                            <a href="https://doi.org/10.1109/MET.2016.010">DOI: 10.1109/MET.2016.010</a>&nbsp;(<a href="http://www.del.ac.id/people/arlinta/files/06_2016%20IWMT.pdf">file1</a>,&nbsp;
                            <a href="http://www.del.ac.id/people/arlinta/files/06_Peer%20Reviewer.pdf">peer_review</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/06_2016%20IWMT-Cek%20II.pdf">cek_turnitin</a>)</td></tr>
                            <tr><td rowspan="3">7</td><td>Nama</td><td>Dr. Arlinta Christy Barus, S.T., M.InfoTech1, Muhamad Lukman, ST, MT, Abed Nego Lubis, Hartanti Saragih, Grace Naomi Damanik</td></tr><tr><td>Judul</td>
                            <td>Constructing Modules for Determining Image Quality Criteria for DiTenun Mobile Application</td></tr><tr><td>&nbsp;</td><td>Bandung Creative Movement 2018
                            (<a href="http://www.del.ac.id/people/arlinta/files/07a_2018_Constructing%20Modules%20for%20Determining%20Image%20Quality%20Criteria%20for%20DiTenun%20Mobile%20Application.pdf">file1</a>,&nbsp;
                            <a href="http://www.del.ac.id/people/arlinta/files/07b_2018_LoA_Paper.jpeg">file2</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/07_Peer%20Reviewer.pdf">peer_review</a>,&nbsp;
                            <a href="http://www.del.ac.id/people/arlinta/files/turnitin/07a_2018_Constructing%20Modules%20for%20Determining%20Image%20Quality%20Criteria%20for%20DiTenun%20Mobile%20Application.pdf">cek_turnitin</a>)</td></tr>
                            <tr><td rowspan="3">8</td><td>Nama</td><td>Arlinta Christy Barus, Roy Deddy Hasiholan Tobing, Dani Novita Pratiwi, Siska Adelina Damanik, Jenny Pasaribu</td></tr><tr><td>Judul</td>
                            <td>Mobile game testing: Case study of a puzzle game genre</td></tr><tr><td>&nbsp;</td><td>2015 International Conference on Automation, Cognitive Science, Optics, Micro Electro-Mechanical System,
                            and Information Technology (ICACOMIT),<br><a href="http://ieeexplore.ieee.org/document/7440194/">http://ieeexplore.ieee.org/document/7440194/</a>, DOI:&nbsp;<a href="https://doi.org/10.1109/ICACOMIT.2015.7440194">
                                10.1109/ICACOMIT.2015.7440194</a><br>(<a href="http://www.del.ac.id/people/arlinta/files/08_MobileTesting.pdf">file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/08_Peer%20Reviewer.pdf">
                                peer_review</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/08_MobileTesting%20Cek%20II.pdf">cek_turnitin</a>)</td></tr><tr><td rowspan="3">9</td><td>Nama</td><td>Arlinta Christy BARUS,
                                Mariana SIMANJUNTAK, Frans Simanjuntak</td></tr><tr><td>Judul</td><td>Cultural Innovation of Ulos Pattern Heritage as Creative Campaign to Promote Tourism in Toba Highland</td></tr><tr><td>&nbsp;</td>
                                <td>6th Arte-Polis International Conference–“Imagining Experiences: Creative Tourism and The Making of Place” (<a href="http://www.del.ac.id/people/arlinta/files/09a_artepolis_paper.pdf">file1</a>,&nbsp;
                                <a href="http://www.del.ac.id/people/arlinta/files/09b_artepolis.pdf">file2</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/09_Peer%20Reviewer.pdf">peer_review</a>,&nbsp;
                                <a href="http://www.del.ac.id/people/arlinta/files/turnitin/09a_artepolis_paper.pdf">cek_turnitin</a>)</td></tr><tr><td rowspan="3">10</td><td>Nama</td><td>Arlinta Christy Barus, Rich Simamora,
                                Hanna Tobing, Sumiati Hutagalung</td></tr><tr><td>Judul</td><td>Testing of A Grade Calculation Program: A Case Study of Metamorphic Testing</td></tr><tr><td>Prosiding</td><td>International Symposium on Open,
                                Distance, and e-Learning (ISODEL) 2012, (<a href="http://www.del.ac.id/people/arlinta/files/10a_ISODEL.pdf">file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/10b_ISODEL_cover.rar">file2</a>,&nbsp;
                                <a href="http://www.del.ac.id/people/arlinta/files/10_Peer%20Reviewer.pdf">peer_review</a>)</td></tr><tr><td rowspan="3">11</td><td>Nama</td><td>Dr Alinta Christy Barus</td></tr><tr><td>Judul</td>
                                <td>Matrix Multiplication Program: a Case Study of Metamorphic Testing</td></tr><tr><td>&nbsp;</td><td>ADVCIT 2014 (<a href="http://www.del.ac.id/people/arlinta/files/17_ADVCIT.pdf">file1</a>)</td></tr>
                                <tr><td rowspan="3">12</td><td>Nama</td><td>Arlinta Christy Barus, Rich Simamora, Hanna Tobing, Sumiati Hutagalung</td></tr><tr><td>Judul</td><td>Penerapan Metamorphic Testing pada Aplikasi Tebak Kendaraan</td></tr>
                                <tr><td>&nbsp;</td><td>Konferensi Nasional ICT-M Politeknik Telkom (KNIP) 2012, (<a href="http://www.del.ac.id/people/arlinta/files/11a_KNIP.pdf">file1</a>,&nbsp;
                                <a href="http://www.del.ac.id/people/arlinta/files/11b_KNIP.pdf">file2</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/12_Peer%20Reviewer.pdf">peer_review</a>)</td></tr><tr><td rowspan="3">13</td>
                                <td>Nama</td><td>Arlinta Christy Barus,Olga Minar Viona Sianturi, Milca Satriyani Sagala, Janesa Mark Viktor Perkasa Tarigan</td></tr><tr><td>Judul</td><td>Kajian Metamorphic Relation dengan Pendekatan
                                Perbedaan Path Coverage Antara Source dan Follow-up Test Cases</td></tr><tr><td>&nbsp;</td><td>Seminar Nasional Ilmu Komputer (SeNAIK) 2013, (<a href="http://www.del.ac.id/people/arlinta/files/12_Senaik.pdf">
                                file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/13_Peer%20Reviewer.pdf">peer_review</a>)</td></tr><tr><td rowspan="3">14</td><td>Nama</td><td>Arlinta Christy Barus, Octarina D Panjaitan,
                                Kristiani Sirait, Harris Silitonga</td></tr><tr><td>Judul</td><td>Kajian Perbandingan Implementasi ART dengan Struktur Data Berbeda</td></tr><tr><td>&nbsp;</td>
                                <td>SNIKOM 2014 (<a href="http://www.del.ac.id/people/arlinta/files/13_SNIKOM.pdf">file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/14_Peer%20Reviewer.pdf">peer_review</a>,&nbsp;
                                <a href="http://www.del.ac.id/people/arlinta/files/turnitin/14_CatPartInternPerpus.pdf">cek_turnitin</a>)</td></tr><tr><td rowspan="3">15</td><td>Nama</td><td>Arlinta Christy Barus</td></tr><tr><td>Judul</td>
                                <td>Category Partition Method untuk Program dengan Non-Numerik Input</td></tr><tr><td>&nbsp;</td><td>Perpustakaan Institut Teknologi Del, (<a href="http://www.del.ac.id/people/arlinta/files/4_CategoryPartitionMethod.pdf">
                                file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/14_CatPartInternPerpus.pdf">file2</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/15_DokInternalJTenun.pdf">cek_turnitin</a>)</td></tr>
                                <tr><td rowspan="3">16</td><td>Nama</td><td>Dr Alinta Christy Barus</td></tr><tr><td>Judul</td><td>Penelitian DiTenun</td></tr><tr><td>&nbsp;</td><td>Perpustakaan Institut Teknologi Del
                                (<a href="http://www.del.ac.id/people/arlinta/files/15_DokInternalJTenun.pdf">file1</a>,&nbsp;<a href="http://www.del.ac.id/people/arlinta/files/turnitin/16_DikPerpustakaan_PatternExtraction.pdf">cek_turnitin</a>)</td></tr>
                                <tr><td rowspan="3">17</td><td>Nama</td><td>Dr Alinta Christy Barus</td></tr><tr><td>Judul</td><td>Ektraksi Pola Dalam Gambar Ulos</td></tr><tr><td>&nbsp;</td><td>Perpustakaan Institut Teknologi Del
                                (<a href="http://www.del.ac.id/people/arlinta/files/16_DikPerpustakaan_PatternExtraction.pdf">file1</a>)</td></tr></tbody></table></figure>',
                'gambar' => "Arlinta.png",
                'status' => 'Aktif',
            ],
            [
                'nama' => "Dr. Johannes Harungguan Sianipar, S.T., M.T.",
                'deskripsi' => '<p>Jabatan&nbsp; &nbsp; : Dosen</p><h4>Personal</h4><figure class="table"><table><tbody><tr><td>Name</td><td>:</td><td>Johannes Harungguan&nbsp;Sianipar</td></tr><tr><td>Birth</td><td>:</td><td>16 April 1973</td></tr>
                <tr><td>Marital Status</td><td>:</td><td>Married</td></tr><tr><td>Citizenship</td><td>:</td><td>Indonesia</td></tr><tr><td>Address</td><td>:</td><td>Komp. IT Del, Jl. SM Raja Sitoluama – Kec. Laguboti, Kab. Toba, Sumatera Utara – 22381</td></tr>
                <tr><td>Email Address</td><td>:</td><td><a href="mailto:runggu@yahoo.com">runggu@yahoo.com</a>&nbsp;,&nbsp;<a href="mailto:johannes@del.ac.id">johannes@del.ac.id</a></td></tr></tbody></table></figure><h4>Education</h4><figure class="table">
                <table><tbody><tr><td>2000</td><td>:</td><td><p>Bachelor Degree from STTTelkom (Telkom University)</p><p>Faculty of Telecommunication Engineering</p><p>Thesis: TDMA based MAC Protocol for ATM-PON</p></td></tr><tr><td>2010</td><td>:</td>
                <td><p>Master Degree from Institut Teknologi Bandung (ITB)</p><p>Faculty of Informatics</p><p>Thesis: Log Analysis Application Development for User Access Control on Internet Proxy Server</p></td></tr><tr><td>2020</td><td>:</td>
                <td><p>Ph.D from Hasso Plattner Institut, University of Potsdam Germany</p><p>Thesis: Towards Scalable &amp; Secure Virtual Laboratory for Cybersecurity e-Learning</p></td></tr></tbody></table></figure><h4>Academic Rank</h4><figure class="table">
                <table><tbody><tr><td>2004</td><td>:</td><td>Asisten Ahli</td></tr><tr><td>2012</td><td>:</td><td>Lektor</td></tr></tbody></table></figure><h4>Work Experiences</h4><figure class="table"><table><tbody><tr><td>2000 – 2002</td><td>:</td>
                <td>Instructor of Cisco Networking Academy at ITB</td></tr><tr><td>2002 – 2013</td><td>:</td><td>Lecturer at Del Institut of Technology (IT Del) Indonesia</td></tr><tr><td>2002 – 2007</td><td>:</td><td>Network Administrator in IT Del</td></tr>
                <tr><td>2004 – 2007</td><td>:</td><td>Head of Computer Engineering Department</td></tr><tr><td>2011 – 2012</td><td>:</td><td>Vice Director of General Administration and Resources at IT Del</td></tr><tr><td>2013 – 2019</td><td>:</td>
                <td>Ph.D. Student at Hasso Plattner Institute</td></tr></tbody></table></figure><h4>Profesional Training</h4><figure class="table"><table><tbody><tr><td>2001</td><td>:</td><td>Cisco Networking Academy Program</td></tr><tr><td>2002</td><td>:</td>
                <td>CCNA, CCDA Certified</td></tr></tbody></table></figure><h4>Profesional Training</h4><figure class="table"><table><tbody><tr><td>Programming Languages</td><td>:</td><td>Java, Python, C, Groovy, HTML, Javascripts</td></tr><tr><td>Operating Systems</td>
                <td>:</td><td>CWindows Server, Linux Centos &amp; Ubuntu</td></tr><tr><td>Networking</td><td>:</td><td>Protocol (TCP/IP, etc), Wireless LAN, LAN, ATM, Frame Relay, ISDN, RIP etc.</td></tr><tr><td>Networking Services</td><td>:</td><td>DNS, DHCP,
                Active Directory, NGINX, NFS, SNMP, NAS, etc.</td></tr><tr><td>Hardware</td><td>:</td><td>Cisco Catalyst, Cisco Router, Firewall (Cisco PIX, Mikrotik, Fortigate), Mikrotik Router, Fiber Optic, etc.</td></tr></tbody></table></figure>
                <h4><strong>Research Interest</strong></h4><figure class="table"><table><tbody><tr><td>1.</td><td>Virtual Laboratory for Cyber Security e-Learning</td></tr><tr><td>2.</td><td>Distributed System &amp; Cloud Computing</td></tr><tr><td>3.</td>
                <td>Security in Cloud Computing</td></tr><tr><td>4.</td><td>Machine Learning in Cyber Security</td></tr></tbody></table></figure><h4><strong>Publications</strong></h4><figure class="table"><table><tbody><tr><td>1.</td><td>Sianipar, J.:
                Web Usage Mining Log Akses Proxy Server Untuk Pengelolaan Akses Internet., Proceeding SNEEMO 2011, Politeknik Manufaktur Astra Jakarta, ISBN 9786021904305, 2011</td></tr><tr><td>2.</td><td>Sianipar, J.: Sistem Informasi Pelaporan Penggunaan
                Sumber Daya Jaringan di Politeknik Informatika Del, Proceeding SNEEMO 2011, Politeknik Manufaktur Astra Jakarta, ISBN 9786021904305, 2011</td></tr><tr><td>3.</td><td>Sianipar, J., Saleh, E., Meinel, C.: Construction of Agent-Based
                Trust in Cloud Infrastructure. In Proceedings of the 2014 IEEE/ACM 7th International Conference on Utility and Cloud Computing, pages 941-946. IEEE Computer Society. (2014)</td></tr><tr><td>4.</td><td>Saleh, E., Sianipar, J., Meinel,
                C.: SecPlace: A Security-Aware Placement Model for Multi-tenant SaaS Environments. In Proceedings of IEEE 11th Intl Conf on Autonomic and Trusted Computing. IEEE ACT. (2014)</td></tr><tr><td>5.</td><td>Sianipar, J., Meinel,
                C.: A verification mechanism for cloud brokerage system. In Proceedings of 2015 Second International Conference on Computer Science, Computer Engineering, and Social Media (CSCESM), pages 143- 148. IEEE. (2015)</td></tr><tr><td>6.</td>
                <td>Sianipar, J., Willems, C., Meinel, C.: A container-based virtual laboratory for internet security e-learning. In International Journal of Learning and Teaching. IJLT, vol. 2, no. 2, pp. 121{128. (2016)</td></tr><tr><td>7.</td>
                    <td>Sianipar, J., Willems, C., Meinel, C.: Crowdresourcing Virtual Laboratory Architecture On Hybrid Cloud. In INTED2016 Proceedings, 10th International Technology, Education and Development Conference, pages 2940-2949. IATED. (2016)</td></tr>
                    <tr><td>8.</td><td>Sianipar, J., Willems, C., Meinel, C.: Signed URL for an Isolated Web Server in a Virtual Laboratory. In Proceedings of the 2017 9th International Conference on Education Technology and Computers, pages 218-222. ACM. (2017)</td></tr>
                    <tr><td>9.</td><td>Sianipar, J., Willems, C., Meinel, C.: Team Placement in Crowd-Resourcing Virtual Laboratory for IT Security e-Learning. In Proceedings of the 2017 International Conference on Cloud and Big Data Computing, pages 60-66. ACM.
                    (2017)</td></tr><tr><td>10.</td><td>Sianipar, J., Willems, C., Meinel, C.: Virtual Machine Integrity Verification in Crowd-Resourcing Virtual Laboratory. In 2018 IEEE 11th Conference on Service-Oriented Computing and Applications (SOCA),
                    pages 169-176. ACM. (2018)</td></tr><tr><td>11.</td><td>Sianipar, J., Sukmana, M., Meinel, C.:Moving Sensitive Data Against Live Memory Dumping, Spectre and Meltdown Attacks. 2018 26th International Conference on Systems Engineering (ICSEng). IEEE.
                    (2018)</td></tr></tbody></table></figure><h4><strong>Advising</strong></h4><figure class="table"><table><tbody><tr><td>1.</td><td><p>Roosen Gabriel Manurung</p><ul><li>Research Area: Distributed System &amp; Cloud Computing</li><li>Competencies:
                    Analytical ability, Problem-solving</li><li>Skills: Computer Networking, Programming</li></ul></td></tr><tr><td>2.</td><td><p>Yoel Napitupulu</p><ul><li>Research Area: Distributed System &amp; Cloud Computing</li><li>Competencies: Analytical ability,
                    Problem-solving</li><li>Skills: Computer Networking, Programming</li></ul></td></tr></tbody></table></figure><p>&nbsp;</p>',
                'gambar' => "Johannes.jpg",
                'status' => 'Aktif',
            ],
            [
                'nama' => "Herimanto, S.Kom., M.Kom",
                'deskripsi' => "",
                'gambar' => "Herimanto.jpeg",
                'status' => 'Aktif',
            ],
            [
                'nama' => "Iustisia Natalia Simbolon, S.Kom., M.T.",
                'deskripsi' => '<p>&nbsp;</p><figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td>iustisia.simbolon@del.ac.id</td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td><td>&nbsp;</td></tr></tbody></table></figure><p>&nbsp;</p>',
                'gambar' => "Iustisia.png",
                'status' => 'Aktif',
            ],
            [
                'nama' => "Nenni Mona Aruan, S.Pd., M.Si",
                'deskripsi' => '<figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td>nenni.aruan@del.ac.id</td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td><td>&nbsp;</td></tr></tbody></table></figure>',
                'gambar' => "Nenni.jpeg",
                'status' => "Tidak Aktif",
            ],

            [
                'nama' => "Tahan HJ Sihombing, S.Pd., M. App Ling",
                'deskripsi' => "",
                'gambar' => "Tahan.jpeg",
                'status' => "Tidak Aktif",
            ],
            [
                'nama' => "Anthon Roberto Tampubolon, S.Kom, M.T.",
                'deskripsi' => '<figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td>anthon.roberto@del.ac.id</td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td><td><ul><li>S1 Teknik Informatika STIKOM UYELINDO Kupang</li>
                <li>S2 Informatika Institut Teknologi Bandung</li></ul></td></tr></tbody></table></figure><h4>Publikasi</h4><figure class="table"><table><tbody><tr><td>1</td><td>Document Clustering using Combination of Kmeans and Single Linkage Clustering Algorithm</td></tr><tr><td>2</td>
                <td>Implementation of Sentiment Analysis on Twitter Using Naive Bayes Algorithm to Know the People Responses to the Debate of DKI Jakarta Governor Election, The 2017 3rd Recent Advancement in Informatics, Electrical and Electronics Engineering International Conference (RAIEIC),
                20-22 November 2017</td></tr></tbody></table></figure>',
                'gambar' => "Anton.jpg",
                'status' => "Tidak Aktif",
            ],
            [
                'nama' => "Lit Malem Ginting, S.Si, MT",
                'deskripsi' => '<figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td><a href="mailto:litmalem.ginting@del.ac.id">litmalem.ginting@del.ac.id</a></td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td>
                <td><ul><li>S1 Fisika ITB 2005</li><li>S2 Informatika ITB 2012</li></ul></td></tr></tbody></table></figure><h4>Publikasi</h4><figure class="table"><table><tbody><tr><td><ol><li>&nbsp;</li></ol></td><td>Kajian Algoritma Craig Raynold pada Kerumunan (Flocking),
                Seminar Nasional Teknologi Informasi dan Komunikasi di Daerah Rural (SNaTIKRa) 2017, 22 November 2017</td></tr></tbody></table></figure>',
                'gambar' => "LitMalem.jpg",
                'status' => "Tidak Aktif",
            ],
            [
                'nama' => "Yaya Setiadi, S.Si., MT",
                'deskripsi' => '<figure class="table"><table><tbody><tr><td>Jabatan</td><td>:</td><td>Dosen</td></tr><tr><td>Email</td><td>:</td><td>yaya@del.ac.id</td></tr><tr><td>Latar Belakang Pendidikan</td><td>:</td><td><ul><li>S1 Matematika ITB 2000</li>
                <li>S2 Informatika ITB 2011</li></ul></td></tr></tbody></table></figure>',
                'gambar' => "Yaya.jpg",
                'status' => "Tidak Aktif",
            ],

            [
                'nama' => "Ranty Deviana Siahaan, S.Kom, M.Eng.",
                'deskripsi' => "",
                'gambar' => "Ranti.jpeg",
                'status' => 'Aktif',
            ],
        ]);
    }
}
