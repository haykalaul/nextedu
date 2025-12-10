# NextEdu

<p align="center">
  <img src="public/assets/logo/logo-typo.png" alt="NextEdu Logo" width="200">
</p>

[![Laravel](https://img.shields.io/badge/Laravel-%23FF2D20.svg?logo=laravel&logoColor=white)](#)
[![Google Gemini](https://img.shields.io/badge/Google%20Gemini-886FBF?logo=googlegemini&logoColor=fff)](#)
[![Vite](https://img.shields.io/badge/Vite-5.4.2-yellow.svg)](https://vitejs.dev/)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.4.1-38B2AC.svg)](https://tailwindcss.com/)
[![Supabase](https://img.shields.io/badge/Supabase-2.57.4-3ECF8E.svg)](https://supabase.com/)

<p align="center">
  Platform bimbingan karir dan pendidikan berbasis web untuk membantu siswa dalam menentukan jurusan dan karir masa depan.
</p>

## 📋 Overview Proyek

NextEdu adalah aplikasi web yang dirancang untuk membantu siswa dalam proses bimbingan karir dan pendidikan. Platform ini menyediakan berbagai fitur interaktif seperti tes minat, rekomendasi jurusan, informasi sekolah, artikel edukasi, dan sistem manajemen konten untuk administrator.

## ✨ Fitur MVP

### 👤 Fitur Pengguna
- **Autentikasi Lengkap**: Registrasi, login, verifikasi email, reset password
- **Tes Minat (TanyaJurpan)**: Sistem forward chaining untuk rekomendasi jurusan
- **Hasil Tes**: Laporan hasil tes dengan rekomendasi jurusan dan pekerjaan
- **Artikel Edukasi**: Kumpulan artikel bimbingan karir dengan kategori
- **Informasi Sekolah**: Database sekolah berdasarkan jurusan
- **Testimoni**: Sistem ulasan dan pengalaman pengguna
- **Manajemen Profil**: Edit profil dan foto pengguna

### 🛠️ Fitur Admin
- **Dashboard Admin**: Panel kontrol lengkap
- **Manajemen Konten**: CRUD untuk pertanyaan, jurusan, saran pekerjaan, artikel, sekolah
- **Manajemen Pengguna**: Kontrol akses dan data pengguna
- **Ekspor Data**: PDF export untuk berbagai laporan
- **Manajemen Testimoni**: Moderasi dan publikasi testimoni

## 🛠️ Teknologi yang Digunakan

### Backend
- **Laravel 12**: Framework PHP untuk backend
- **PHP 8.2+**: Bahasa pemrograman utama
- **PostgreSQL**: Database utama (via Supabase)

### Frontend
- **Blade Templates**: Template engine Laravel
- **Tailwind CSS**: Framework CSS untuk styling
- **Vite**: Build tool dan asset bundler
- **Alpine.js**: JavaScript framework untuk interaktivitas

### Libraries & Tools
- **Laravel Sanctum**: API authentication
- **Laravel Socialite**: OAuth integration (Google)
- **Intervention Image**: Manipulasi gambar
- **DomPDF**: Generate PDF
- **AOS (Animate On Scroll)**: Animasi scroll
- **Pest**: Testing framework

## 📋 Prasyarat

Sebelum menjalankan proyek ini, pastikan Anda memiliki:
- **PHP 8.2 atau lebih tinggi**
- **Composer** (Dependency manager PHP)
- **Node.js & NPM** (untuk frontend assets)
- **PostgreSQL** atau akun **Supabase**
- **Git** (untuk cloning repository)

## 🚀 Setup Lokal

### 1. Clone Repository
```bash
git clone https://github.com/username/nextedu-v2.git
cd nextedu-v2
```

### 2. Install Dependencies PHP
```bash
composer install
```

### 3. Install Dependencies Node.js
```bash
npm install
```

### 4. Setup Environment
```bash
cp .env.example .env
```

Edit file `.env` dan sesuaikan konfigurasi:
```env
APP_NAME=NextEdu
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database (untuk development lokal)
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite

# Atau gunakan MySQL/PostgreSQL
# DB_CONNECTION=pgsql
# DB_HOST=127.0.0.1
# DB_PORT=5432
# DB_DATABASE=nextedu
# DB_USERNAME=your_username
# DB_PASSWORD=your_password
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Setup Database
```bash
# Buat database SQLite
touch database/database.sqlite

# Jalankan migrasi
php artisan migrate

# Jalankan seeder (opsional)
php artisan db:seed
```

### 7. Build Assets
```bash
npm run build
# atau untuk development
npm run dev
```

### 8. Jalankan Aplikasi
```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

### 9. Jalankan dengan Laragon (Alternatif)
Jika menggunakan Laragon:
1. Import folder proyek ke Laragon
2. Pastikan PHP dan PostgreSQL/MySQL aktif
3. Akses via domain yang disediakan Laragon

## 🗄️ Setup Database Supabase

### 1. Buat Akun Supabase
- Kunjungi [supabase.com](https://supabase.com)
- Buat akun baru atau login

### 2. Buat Project Baru
- Klik "New Project"
- Isi detail proyek (nama, database password, region)

### 3. Konfigurasi Environment
Update file `.env` dengan kredensial Supabase:
```env
DB_CONNECTION=pgsql
DB_HOST=db.your-project-ref.supabase.co
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=your-database-password
```

### 4. Setup Database Schema
```bash
# Jalankan migrasi ke Supabase
php artisan migrate

# Jalankan seeder
php artisan db:seed
```

### 5. Konfigurasi Storage (Opsional)
Jika menggunakan Supabase Storage untuk upload gambar:
```env
# Supabase Storage
SUPABASE_URL=https://your-project-ref.supabase.co
SUPABASE_ANON_KEY=your-anon-key
SUPABASE_SERVICE_ROLE_KEY=your-service-role-key
```

## 🚀 Setup Deploy ke Railway

### 1. Buat Akun Railway
- Kunjungi [railway.app](https://railway.app)
- Buat akun baru atau login

### 2. Connect Repository
- Klik "New Project" > "Deploy from GitHub repo"
- Pilih repository NextEdu
- Railway akan otomatis mendeteksi sebagai Laravel app

### 3. Konfigurasi Environment Variables
Di Railway dashboard, tambahkan environment variables:
```env
APP_NAME=NextEdu
APP_ENV=production
APP_KEY=your-generated-key
APP_DEBUG=false
APP_URL=https://your-railway-domain.up.railway.app

# Database (gunakan PostgreSQL dari Railway atau eksternal)
DB_CONNECTION=pgsql
DB_HOST=containers-us-west-1.railway.app
DB_PORT=5432
DB_DATABASE=railway
DB_USERNAME=postgres
DB_PASSWORD=your-db-password

# Redis (jika menggunakan)
REDIS_HOST=containers-us-west-1.railway.app
REDIS_PORT=6379
REDIS_PASSWORD=your-redis-password

# Mail Configuration (opsional)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"

# Google OAuth (jika menggunakan)
GOOGLE_CLIENT_ID=your-google-client-id
GOOGLE_CLIENT_SECRET=your-google-client-secret
```

### 4. Setup Database
Railway menyediakan PostgreSQL otomatis. Pastikan:
- Migrasi database sudah dijalankan
- Seeder sudah dijalankan jika diperlukan

### 5. Build & Deploy
Railway akan otomatis:
- Install dependencies PHP & Node.js
- Build assets dengan Vite
- Jalankan migrasi database
- Deploy aplikasi

### 6. Custom Domain (Opsional)
- Di Railway dashboard, tambahkan custom domain
- Update `APP_URL` di environment variables

## 🤝 Kontribusi

Kami sangat menghargai kontribusi dari komunitas! Berikut adalah panduan untuk berkontribusi:

### 1. Fork Repository
```bash
git clone https://github.com/your-username/nextedu-v2.git
cd nextedu-v2
git checkout -b feature/nama-fitur-anda
```

### 2. Setup Development Environment
Ikuti langkah setup lokal di atas.

### 3. Buat Perubahan
- Pastikan kode mengikuti standar PSR-12
- Tambahkan test untuk fitur baru
- Update dokumentasi jika diperlukan

### 4. Commit Perubahan
```bash
git add .
git commit -m "feat: tambah fitur [nama fitur]"
```

### 5. Push & Pull Request
```bash
git push origin feature/nama-fitur-anda
```
Buat Pull Request di GitHub dengan deskripsi yang jelas.

### Panduan Commit
Gunakan conventional commits:
- `feat:` untuk fitur baru
- `fix:` untuk perbaikan bug
- `docs:` untuk dokumentasi
- `style:` untuk formatting
- `refactor:` untuk refactoring kode
- `test:` untuk testing

### Code Style
- Ikuti PSR-12 untuk PHP
- Gunakan ESLint untuk JavaScript
- Pastikan semua test pass sebelum commit

## 📄 Lisensi

Proyek ini menggunakan lisensi MIT. Lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.

## 📞 Kontak

Jika ada pertanyaan atau masukan, silakan hubungi tim development atau buat issue di repository ini.

---

**NextEdu** - Membantu siswa menemukan jalan karir mereka. 🚀
