# 🧩 Website Program Studi Sarjana Informatika Institut Teknologi Del

🌐 **Website Resmi:** [https://s1if.delcom.org](https://s1if.delcom.org)

## 📖 Deskripsi Singkat
Website Content Management System (CMS) yang berisi informasi seputar Program Studi Sarjana Informatika Institut Teknologi Del, mencakup sejarah, visi dan misi, kurikulum, data dosen, mahasiswa, berita, serta kompetisi.

## 🎯 Tujuan Proyek
Proyek kolaborasi yang dikembangkan untuk implementasi mata kuliah:
- Pengembangan Aplikasi Berbasis Web  
- Analisis & Perancangan Perangkat Lunak  
- Pengujian dan Penjaminan Mutu Perangkat Lunak  

Proyek ini berfokus pada penerapan konsep rekayasa perangkat lunak dalam pengembangan sistem informasi berbasis web.

---

## ⚙️ Teknologi yang Digunakan
| Komponen | Teknologi |
|-----------|------------|
| Framework Backend | Laravel 9.52.16 |
| Database | MySQL |
| Frontend | Bootstrap |
| Bahasa Pemrograman | PHP, JavaScript |
| Tools Pendukung | Composer, NPM |

---

## 🚀 Fitur Utama
- 🔐 **Autentikasi (Auth)** dan Manajemen Penulis (Author)
- 📊 **Dashboard Admin**
- 🏫 **Sejarah Program Studi**
- 🎯 **Visi & Misi**
- 📚 **Kurikulum**
- 👨‍🏫 **Data Dosen**
- 👨‍🎓 **Data Mahasiswa**
- 📰 **Berita & Pengumuman**
- 🛠️ **CRUD (Create, Read, Update, Delete)** untuk seluruh data

---

## 🧰 Instalasi dan Setup

### 1️⃣ Clone Repository
```bash
git clone <URL-repository>
cd <nama-folder-proyek>
```

### 2️⃣ Install Dependency
```bash
composer install
npm install
```

### 3️⃣ Buat File Environment
```bash
cp .env.example .env
```

Lalu sesuaikan konfigurasi database di file .env:
```bash
APP_NAME="Website Informatika IT Del"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=informatika
DB_USERNAME=root
DB_PASSWORD=

```

### 4️⃣ Generate Key dan Migrasi Database
```bash
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
```

### 5️⃣ Jalankan Server Lokal
```bash
php artisan serve
```

Akses website di: http://127.0.0.1:8000

## 🧱 Struktur Modul

* **Halaman Publik**

  * Sejarah
  * Visi & Misi
  * Kurikulum
  * Berita
* **Halaman Admin**

  * Dashboard
  * Manajemen Dosen
  * Manajemen Mahasiswa
  * Manajemen Konten (CRUD)
  * Pengaturan User & Author

---

## 🧪 Testing

Menjalankan pengujian unit / feature (jika tersedia):

```bash
php artisan test
```

---

## 🧑‍💻 Kontributor

| Nama                                  | Peran                       |
| ------------------------------------  | --------------------        |
| Benhard Yudha                         | Back End Developer          |
| Corry Betriks Sitorus                 | Full Stack Developer        |
| Ella Tasya Marito Silaban             | Analyst, UI/UX Design       |
| Enrico Hezkiel Sirait                 | Full Stack Developer        |
| Hanny br. Kaban                       | Software Quality Assurance  |
| Pany Irene Matondang                  | Front End Developer         |

---

## 📄 Lisensi

Proyek ini dikembangkan untuk keperluan akademik dan pembelajaran internal Institut Teknologi Del.

---