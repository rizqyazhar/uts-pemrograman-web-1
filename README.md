# Project CodeIgniter 4 + TailwindCSS + XAMPP + MySQL

Panduan ini akan membantu kamu menjalankan project ini di lokal menggunakan XAMPP dan Node.js untuk TailwindCSS.

---

---

## 1️⃣ Persyaratan

Pastikan sudah meng-install:

- [XAMPP](https://www.apachefriends.org/) (PHP + MySQL)
- [Composer](https://getcomposer.org/) (untuk CodeIgniter 4)
- [Node.js + NPM](https://nodejs.org/) (untuk TailwindCSS)

---

## 2️⃣ Jalankan XAMPP

1. Buka **XAMPP Control Panel**
2. Start:
   - **Apache**
   - **MySQL**

---

## 3️⃣ Import Database MySQL

1. Buka **phpMyAdmin** → http://localhost/phpmyadmin
2. Klik **New** → buat database baru sesuai nama file SQL
3. Pilih tab **Import** → pilih file: `database/nama_file.sql`
4. Klik **Go**

Sekarang database sudah siap digunakan.

---

## 4️⃣ Atur Koneksi Database di CodeIgniter

Buka file:

app/Config/Database.php

Ubah bagian `$default` sesuai database lokal:

```php
public $default = [
    'DSN'      => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'nama_database',
    'DBDriver' => 'MySQLi',
    'DBPrefix' => '',
    'pConnect' => false,
    'DBDebug'  => (ENVIRONMENT !== 'production'),
];

--

## 5️⃣ Install Composer (Jika folder vendor/ belum ada)

composer install

## 6️⃣ Install TailwindCSS (Jika node_modules/ belum ada)
npm install

--

7️⃣ Tambahkan Script Tailwind di package.json

"scripts": {
    "dev": "tailwindcss -i ./assets/css/input.css -o ./public/css/output.css --watch",
    "build": "tailwindcss -i ./assets/css/input.css -o ./public/css/output.css --minify"
}

8️⃣ Jalankan Tailwind Watch

npm run dev

9️⃣ Jalankan Aplikasi CodeIgniter

php spark serve
```
