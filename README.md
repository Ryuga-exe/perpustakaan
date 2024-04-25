<h1 align="center">Projek ukk perpustakaan by robby</h1>

---

<h2 id="tentang">Konsep aplikasi</h2>

Sebuah platform perpustakaan digital yang memukau, menampilkan desain modern yang teratur. Halaman ini menonjolkan bagian utama dengan deskripsi layanan, ulasan, dan navigasi lokasi yang mudah digunakan.

<h2 id="fitur">Fitur</h2>

-   [Mazer Bootstrap Template](https://github.com/zuramai/mazer)
    -   Mode gelap dan mode terang 
    -   Dashboard UI
-   Halaman Awal (Landing Page)
    -   Halaman Beranda
    -   Buku
    -   Kategori Buku
-   Authentication
    -   register
    -   Login
-   Multi User
    -   Admin
        -   Pengguna yang dapat dikelola 
        -   Buku yang dapat dikelola
        -   Kategori buku yang dapat dikelola
        -   Melihat semua data
        -   Generate Laporan (EXCEL, CSV, HTML, PDF)
    -   Petugas
        -   Buku yang dapat di kelola
        -   Kategori Buku yang dapat di kelola
        -   Melihat semua data
        -   Generate Laporan (EXCEL, CSV, HTML, PDF)
    
    -   -   Peminjam / Pembaca
        -   Mencari buku
        -   Memberikan Rating dan Ulasan buku
        -   Melihat peminjaman buku mereka sendiri
        -   Register (membuat akun sebagai peminjam)
    -   Semua
        -   Mengulas buku di Halaman Show Buku
        -   Login
        -   Logout
-   Pencarian Halaman Awal (Landing Page)
    -   Buku
    -   kategori buku
    
    <h2 id="testing-account">Akun Default untuk Pengujian</h2>
    
    ### Admin

-   Nama Pengguna: admin
-   Kata Sandi: 123

      Peminjam

-   Nama Pengguna: mira
-   Kata Sandi: 12345678


<h2 id="demo"> ERD & Relasi antar tabel</h2>

![ERD](https://github.com/Ryuga-exe/perpustakaan/assets/90815976/218734a7-9c59-4e92-b078-47c5f83ead5b)

![RAT](https://github.com/Ryuga-exe/perpustakaan/assets/90815976/74befc72-7267-46bf-8436-bf51f9a2c6ae)


noted
Tabel Failed_Jobs,Personal_access_tokens,Password_reset_tokens karena itu bawaan dari laravel


<h2 id="demo"> UML Diagram Use Case</h2>


![uml](https://github.com/Ryuga-exe/perpustakaan/assets/90815976/cfa4edce-bc40-4c99-93eb-ae950e9a4145)


<h2 id="pre-requisite"> Prasyarat</h2>

<p>Berikut adalah prasyarat yang diperlukan untuk menginstal dan menjalankan aplikasi.</p>

-   PHP 8.2.8 & Web Server (Apache, Lighttpd, atau Nginx)
-   Database (MariaDB dengan v11.0.3 atau PostgreSQL)
-   Web Browser (Chrome, Firefox, Opera, dll)

<h2 id="installation">💻 Instalasi</h2>

<h3 id="develop-yourself"> Mengembangkan Sendiri</h3>
1. Klona repositori

```bash
git clone https://github.com/Ryuga-exe/perpustakaan
cd perpustakaan
composer install
npm install
npm run dev
npm run build
cp .env.example .env
```
2. Konfigurasi database melalui file `.env`

```conf
APP_DEBUG=true
DB_DATABASE=dbperpustakaan
DB_USERNAME=nama-pengguna-anda
DB_PASSWORD=kata-sandi-anda
```

3. Migrasi dan symlink

```bash
php artisan key:generate
php artisan storage:link
php artisan migrate --seed

4. Mulai situs web

```bash
php artisan serve
```
<br>

<h2 align="center">⚒️ Languages-Frameworks-Tools yangg digunakan ⚒️</h2>
<br/>
<div align="center">
    <img src="https://skillicons.dev/icons?i=react,bootstrap,html,css,vscode,github,git,r" />
    <img src="https://skillicons.dev/icons?i=nodejs,javascript,typescript,mysql" /><br>
</div>


