# ![Vector](https://github.com/user-attachments/assets/ddcf3e4d-585b-4614-bedf-edfe1cb40a19) Universitas KA - Aplikasi Penerimaan Mahasiswa Baru 🎓

Aplikasi ini adalah sistem untuk mengelola penerimaan mahasiswa baru di Universitas KA, yang mencakup fitur CRUD untuk pengumuman, autentikasi pengguna, pendaftaran mahasiswa, dan fitur login/register.

## Dokumentasi
![Screenshot (600)](https://github.com/user-attachments/assets/505ac940-fd2c-4916-ba58-faf7d5a381be)

## 📌 Fitur Utama

- **CRUD Sistem Pengumuman** 📝
- **Pengelolaan Autentikasi dan Authorisasi User** 🔒
- **Pengelolaan Pendaftaran Mahasiswa** 🎓
- **Login dan Register Akun** 🔑

## 🛠️ Prasyarat

Sebelum memulai, pastikan perangkat lunak berikut sudah terpasang di sistem Anda:

- [PHP](https://www.php.net/downloads.php) versi 8.x atau lebih tinggi 🔧
- [Composer](https://getcomposer.org/) untuk mengelola dependencies PHP 🎶
- [Node.js](https://nodejs.org/en/) dan [npm](https://www.npmjs.com/) (digunakan oleh Laravel Breeze) 🚀
- [MySQL](https://www.mysql.com/) untuk manajemen database 🗄️
- [XAMPP](https://www.apachefriends.org/download.html)

## 📦 Dependencies

Aplikasi ini membutuhkan beberapa dependencies berikut:

- [spatie/laravel-permission](https://spatie.be/docs/laravel-permission/v6/introduction) untuk Role dan Permission (versi ^6.10) 🔑
- [yajra/laravel-datatables-oracle](https://yajrabox.com/docs/laravel-datatables/11.0) untuk Table Interaktif (versi ^11.1) 📊
- [laravel/framework](https://laravel.com/) (versi ^11.31) sebagai Framework PHP 💻
- [SweetAlert2](https://sweetalert2.github.io/#download) untuk Notifikasi Peringatan ⚠️
- [Laravel Breeze](https://github.com/laravel/breeze) untuk UI Scaffolding (Frontend) 🎨
- [Tailwind CSS](https://tailwindcss.com/) sebagai Framework CSS 🌟
- [Flowbite](https://flowbite.com/) untuk Template Tailwind Component 📦

## 🚀 Instalasi

Ikuti langkah-langkah di bawah ini untuk menginstal dan menjalankan aplikasi:

1. **Clone repositori ke komputer lokal Anda:**

```bash
   git clone https://github.com/Sertifikasi-Web-Developer-LSPP1-UMDP/assessment-batch-3-Vincent-2125250004.git
   cd assessment-batch-3-Vincent-2125250004
```
2. **Jalankan Perintah Composer Install**
```bash
   composer install
```
3. **Jalankan Perintah NPM Install**
```bash
   npm Install
```
4. **Salin file .env**
```bash
   cp .env.example .env
```
5. **Generate key Aplikasi**
```bash
   php artisan key:generate
```
6. **Jalankan XAMPP dan Hubungan Database MySQL dari *phpmyadmin***
```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=name_database
   DB_USERNAME=username
   DB_PASSWORD=password
```
7. **Lakukan Migration dan Seeder dengan perintah**
```bash
   php artisan migrate --seed
```

8. **Run Local Server dan NPM**
```bash
   npm run dev && php artisan serve
```
## 📋 Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, harap fork repositori ini dan ajukan pull request. Semua kontribusi sangat dihargai! 🙏

## 💬 Masalah & Dukungan

Jika Anda mengalami masalah atau membutuhkan bantuan lebih lanjut, buka [issue](https://github.com/Sertifikasi-Web-Developer-LSPP1-UMDP/assessment-batch-3-Vincent-2125250004/issues) di GitHub atau hubungi saya di vincent.cent@mhs.mdp.ac.id.

## 📝 Lisensi

Aplikasi ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT). Anda bebas untuk menggunakannya, mengubah, dan mendistribusikannya sesuai dengan ketentuan lisensi tersebut.

### Hak Cipta

© 2024 Assessment LSP Vincent. Semua hak dilindungi undang-undang.
