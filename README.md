# 📟 UAS - Laravel

Apa itu Laravel?
Laravel adalah framework PHP yang digunakan untuk membangun aplikasi web dengan struktur yang rapi, aman, dan efisien. Laravel menerapkan prinsip MVC (Model-View-Controller) untuk memisahkan logika, tampilan, dan data, sehingga memudahkan pengembangan dan pemeliharaan aplikasi.

---

## 💠 Teknologi yang Digunakan

* **Laravel 12 (Laravel Framework 12.14.1)**
* **PHP 8.3**
* **MySQL**
* UI menggunakan html, css, dan bootstrap
* **Laravel HTTP Client** untuk komunikasi ke backend eksternal (API)

---

## 📦 Instalasi Laravel dari Awal

### 1. Pastikan Software Terinstal:

* PHP 8.3+ (`php -v`)
* Composer (`composer -V`)
* MySQL/MariaDB

### 2. Buat Project Laravel Baru

```bash
laravel new frontend-uas-230102037
# atau jika pakai composer biasa:
composer create-project laravel/laravel frontend-uas-230102037
```

### 3. Masuk ke Folder Project

```bash
cd frontend-uas-230102037
```

---

## ⚙️ Konfigurasi Aplikasi

### 4. Buat File `.env`

```bash
cp .env.example .env
```

### 5. Atur Koneksi Database di `.env`

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_rumahsakit_230102037
DB_USERNAME=root
DB_PASSWORD=
```
