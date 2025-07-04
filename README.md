# Laravel CSV Importer - JWT API

Ini adalah proyek API backend yang dibangun menggunakan **Laravel 10**, dirancang untuk menangani otentikasi pengguna melalui **JSON Web Tokens (JWT)** dan menyediakan fungsionalitas untuk mengimpor data CSV dalam jumlah besar secara asinkron menggunakan *queue*.

---

## Fitur Utama ✨

-   **Otentikasi JWT**: Sistem registrasi dan login yang aman menggunakan JWT.
-   **Import CSV Asinkron**: Endpoint untuk mengunggah file CSV, yang datanya diproses di latar belakang menggunakan Laravel Queue.
-   **Arsitektur API Modern**: Mengikuti praktik terbaik RESTful API.
-   **CORS Limiter**: Membatasi akses API antar origin
-   **Anti XSS**: Seluruh input akan divalidasi di sisi server
-   **Anti CSRF**: Token JWT disimpan pada local_storage

---

## Teknologi yang Digunakan 💻

-   **Backend**: Laravel 10
-   **Database**: MySQL
-   **Otentikasi**: `php-open-source-saver/jwt-auth`
-   **Antrean (Queue)**: Laravel Queue dengan driver `database`

---

## Instalasi & Setup 🚀

Ikuti langkah-langkah berikut untuk menjalankan proyek ini secara lokal.

1.  **Clone Repositori**
    ```bash
    git clone https://github.com/sulthonhere/Trial-Laravel.git
    cd laravel-import-csv   // Proyek A - import csv
    cd laravel-api          // Proyek B - authentikasi jwt
    ```

2.  **Install Dependensi**
    ```bash
    composer install
    ```

3.  **Setup Environment & Generate Kunci Aplikasi**
    -   Salin file `.env.example` menjadi `.env`.
        ```bash
        cp .env.example .env
        ```
    -   Generate kunci aplikasi
        ```bash
        php artisan key:generate
        ```
    -   Buka file `.env` dan konfigurasikan koneksi database Anda (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

        >`A` untuk Proyek A - Import CSV    
        >`B` untuk Proyek B - JWT Authentication

        - `A1` - Ubah config untuk queue driver               
            Pastikan `QUEUE_CONNECTION` diatur ke `database`.
        - `A2` - Tambahkan tabel untuk queue driver
            ```
            php artisan queue:table
            ```

        - `B1` - Generate JWT secret key
            ```
            php artisan jwt:secret
            ```



4.  **Jalankan Migrasi Database**
    
    Perintah ini akan membuat semua tabel yang diperlukan.

    ```bash
    php artisan migrate
    ```

5.  **Jalankan Server**

    Buka terminal untuk menjalankan server pengembangan:

    ```bash
    php artisan serve
    ```

    >Ubah port untuk menguji CORS API 
    >
    >```
    >php artisan server --port=9001
    >``` 

    - `A3` - Buka Buka **terminal kedua** untuk memproses *jobs*:

    ```bash
    php artisan csv:import // Jalankan import file csv -> DB
    php artisan queue:work // Jalankan worker 
    ```
---

## CORS for API 🔒
Berikut adalah origin yang diperbolehkan mengakses API Endpoint
-   `localhost:8000` **`[All Method]`**
-   `localhost:9001` **`[POST]`**
-   `localhost:9002` **`[GET]`** **`[POST]`**

## API Endpoint ⚓
Berikut adalah daftar endpoint API yang tersedia. 

1. #### `[POST]` `localhost:8000/api/register`
    Mendaftarkan pengguna baru. Tidak memerlukan otentikasi.

    -   **Body Request** (`form-data`):
        -   `name` (string, required)
        -   `email` (email, required, unique)
        -   `password` (string, required, min: 8)
        -   `password_confirmation` (string, required)

2. #### `[POST]` `localhost:8000/api/login`
    Login untuk melakukan authentikasi pengguna serta mendapatkan token JWT.

    -   **Body Request** (`form-data`):
        -   `email` (email, required, unique)
        -   `password` (string, required, min: 8)

3. #### `[GET]` `localhost:8000/api/auth/me`
    Mendapatkan data profil pengguna yang sedang login.

    -   **Authorization**: `Bearer Token` **(Wajib)**
    -   **Body Request** (`form-data`):
        -   `email` (email, required)
        -   `password` (string, required)

4. #### `[POST]` `localhost:8000/api/auth/logout`
    Membatalkan token JWT yang sedang aktif.

    -   **Authorization**: `Bearer Token` **(Wajib)**

