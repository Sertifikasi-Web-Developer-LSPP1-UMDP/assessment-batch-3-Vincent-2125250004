# Universitas KA

Sebuah aplikasi perangkat lunak yang berupa sistem penerimaan mahasiswa baru

## Fitur

- CRUD Sistem Pengumuman
- Pengelolaan Autentikasi dan Authorisasi User
- Pengelolaan Pendaftaran
- Login dan Register Akun

## Prasyarat

Pastikan Anda telah menginstal perangkat lunak berikut sebelum memulai:

- [PHP](https://www.php.net/downloads.php) versi 8.x atau lebih tinggi
- [Composer](https://getcomposer.org/) untuk mengelola dependencies PHP
- [Node.js](https://nodejs.org/en/) dan [npm](https://www.npmjs.com/) (Laravel Breeze)
- [MySQL](https://www.mysql.com/)untuk database

## Dependencies

Pastikan Anda telah menginstal setiap dependencies digunakan:
- [spatie/laravel-permission](https://spatie.be/docs/laravel-permission/v6/introduction) untuk Role dan Permission versi ^6.10 
- [yajra/laravel-datatables-oracle](https://yajrabox.com/docs/laravel-datatables/11.0) Library untuk Table Interaktif versi ^11.1
- [laravel/framework](https://laravel.com/) versi ^11.31 sebagai Framework PHP
- [SweetAlert2](https://sweetalert2.github.io/#download) sebagai Notifikasi Peringatan
- [Laravel Breeze](https://github.com/laravel/breeze) sebagai UI Scaffolding
- [Tailwind CSS](https://tailwindcss.com/) sebagai Framework CSS
- [Flowbite](https://flowbite.com/) sebagai Template Tailwind Component
  
## Instalasi

Ikuti langkah-langkah di bawah ini untuk menginstal aplikasi:

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
6. **Lakukan Migration dan Seeder dengan perintah**
```bash
   php artisan migrate --seed
```

7. **Run Local Server dan NPM**
```bash
   npm run dev && php artisan serve
```

