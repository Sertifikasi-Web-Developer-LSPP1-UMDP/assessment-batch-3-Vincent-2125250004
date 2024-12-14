# ![Vector](https://github.com/user-attachments/assets/ddcf3e4d-585b-4614-bedf-edfe1cb40a19) Universitas KA - Aplikasi Penerimaan Mahasiswa Baru 🎓

Aplikasi ini adalah sistem untuk mengelola penerimaan mahasiswa baru di Universitas KA, yang mencakup fitur CRUD untuk pengumuman, autentikasi pengguna, pendaftaran mahasiswa, dan fitur login/register.

## Dokumentasi
**Landing Page**
![Screenshot (600)](https://github.com/user-attachments/assets/505ac940-fd2c-4916-ba58-faf7d5a381be)
**Admin Dashboard**
![Screenshot 2024-12-13 231912](https://github.com/user-attachments/assets/46b6e377-655c-46a5-85bc-c18279d612a3)
**Admin Pengelolaan Pendaftaran**
![Screenshot 2024-12-13 232004](https://github.com/user-attachments/assets/3581b178-e2f2-4fd1-8bf2-90c351e9904e)
**Admin Pengelolaan Pengumuman**
![Screenshot 2024-12-13 232147](https://github.com/user-attachments/assets/911bd277-9e18-48ac-a94a-625409a5cc4a)
**Admin Verfikasi Akun User**
![Screenshot 2024-12-13 232307](https://github.com/user-attachments/assets/d3412348-ea61-4b44-8c20-79c3a8ee8980)
**User Dashboard**
![Screenshot 2024-12-13 232640](https://github.com/user-attachments/assets/5f47a618-c150-4bf6-92eb-5806f7a0ab92)
![Screenshot 2024-12-13 232536](https://github.com/user-attachments/assets/d360eea0-1772-43b2-95fb-456e4e3a716d)
**User Pendaftaran**
![Screenshot 2024-12-13 232721](https://github.com/user-attachments/assets/96727194-94d1-4122-a1c2-27076c7ecfec)
![Screenshot 2024-12-13 233111](https://github.com/user-attachments/assets/cfd27d31-1b15-4616-8caa-350f60243b8f)
![Screenshot 2024-12-13 233138](https://github.com/user-attachments/assets/581221af-d29c-4533-bca7-0a7f170d2292)
![Screenshot 2024-12-13 233154](https://github.com/user-attachments/assets/d875721f-efc4-4891-8cb6-f6552fb364be)
![Screenshot 2024-12-13 233111](https://github.com/user-attachments/assets/d2157db2-e6b8-4289-86e0-71bb6422c064)

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
