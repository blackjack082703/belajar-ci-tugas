
# 🛒 Toko Online - CodeIgniter 4

Sebuah aplikasi toko online sederhana berbasis **CodeIgniter 4** dengan integrasi **NiceAdmin template**, fitur **keranjang**, **transaksi**, **diskon**, serta dashboard transaksi via **webservice**.

---

## 📌 Fitur

- ✅ **Autentikasi User (Guest/Admin)**  
  Login sederhana, session berbasis role.

- 🛍️ **Manajemen Produk**  
  - Tambah, edit, dan hapus produk.
  - Upload foto produk.

- 🛒 **Keranjang Belanja**  
  - Tambah produk ke keranjang  
  - Ubah jumlah / hapus item  
  - Lihat total belanja

- 🎁 **Diskon Otomatis Harian**  
  - Diskon per item ditentukan otomatis  
  - Ditampilkan di halaman atas sidebar  
  - Diskon diterapkan langsung saat produk ditambahkan ke keranjang

- 💸 **Transaksi & Checkout**  
  - User dapat mengisi alamat dan memilih ongkir  
  - Transaksi disimpan ke database  
  - Data detail transaksi disimpan per item

- 🔁 **Webservice Dashboard (No. 4 & 5)**  
  - Webservice REST untuk menampilkan transaksi via cURL GET (Dashboard Toko)  
  - Sistem mengirim data transaksi secara otomatis via cURL POST ke dashboard setelah checkout  

- 📦 **Riwayat Transaksi (Profile)**  
  - Menampilkan riwayat pembelian  
  - Modal detail per transaksi  
  - Gambar produk, jumlah item, subtotal, dan status

- 🔍 **Search Produk**  
  - Pencarian nama produk via input keyword di halaman produk

---

## 🛠️ Cara Installasi

### 1. Clone Project
```bash
git clone https://github.com/blackjack082703/belajar-ci-tugasgit 
```

### 2. Install Dependency
```bash
composer install
```

### 3. Copy File `.env`
```bash
cp env .env
```

Edit file `.env`:
```env
database.default.hostname = localhost
database.default.database = nama_database
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
```

### 4. Buat Database & Jalankan Migrasi
```bash
php spark migrate
```

### 5. Jalankan Server
```bash
php spark serve
```

Akses di `http://localhost:8080`

---

## 📁 Struktur Proyek

```
app/
├── Config/                 # Konfigurasi aplikasi
├── Controllers/            # Semua controller, termasuk:
│   ├── Home.php
│   ├── ProdukController.php
│   ├── TransaksiController.php
│   └── ApiController.php   # RESTful Webservice
├── Models/                 # Semua model database
│   ├── ProdukModel.php
│   ├── TransactionModel.php
│   └── TransactionDetailModel.php
├── Views/
│   ├── layout/             # Template header, sidebar, footer
│   ├── v_home.php
│   ├── v_produk.php
│   ├── v_keranjang.php
│   ├── v_checkout.php
│   ├── v_profile.php
│   └── diskon/             # Manajemen diskon admin
public/
├── img/                    # Gambar produk
├── NiceAdmin/              # Template frontend
├── dashboard-toko/         # Folder dashboard (soal no. 4)
```

---

## 👤 Developer
- Nama: Akbar Dwi Saputro  
- NIM: A11.2023.15371  
- Matkul: Pemrograman Web Lanjut  
- Dosen: [Aprilyani Nur Safitri, M.Kom]

---

### ✅ Status Pengerjaan Soal UAS
| No | Soal                                      | Status |
|----|-------------------------------------------|--------|
| 1  | CRUD Produk & Kategori                    | ✅     |
| 2  | Diskon Harian dan Manajemen Diskon Admin  | ✅     |
| 3  | History Transaksi dan Detail Modal        | ✅     |
| 4  | Webservice Dashboard via cURL GET         | ✅     |
| 5  | cURL POST ke Dashboard + README.md        | ✅     |
