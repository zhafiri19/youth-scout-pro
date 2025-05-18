# ⚽ Youth Scout Pro

**Youth Scout Pro** adalah aplikasi web untuk mendukung proses scouting dan pengembangan pemain muda sepak bola. Platform ini dirancang untuk memfasilitasi pelatih, pencari bakat, dan manajemen tim dalam mengevaluasi performa pemain serta mempromosikan mereka ke level lebih tinggi.

---

## 🚀 Fitur Utama

- 🔍 **Manajemen Profil Pemain**: Tambah, edit, dan pantau perkembangan pemain muda
- 📊 **Evaluasi Performa**: Penilaian berdasarkan aspek teknis, fisik, dan mental
- 🆙 **Promosi Pemain**: Sistem tracking pemain yang direkomendasikan ke tim senior
- 👥 **Multi-Role Admin**: Role seperti pelatih, scout, dan manajer dengan hak akses berbeda
- 📈 **Dashboard Interaktif**: Statistik dan laporan performa pemain secara visual
- 🌐 **RESTful API**: Backend Laravel untuk komunikasi data yang efisien
- 💻 **Frontend Modern**: Antarmuka dinamis dengan React.js & Bootstrap 5

---

## 🛠️ Tech Stack

| Layer     | Teknologi               |
|-----------|-------------------------|
| Frontend  | React.js, Bootstrap 5   |
| Backend   | Laravel 11 (PHP 8+)     |
| Database  | MySQL                   |
| Server    | XAMPP (Apache, PHP, MySQL) |

---

## ⚙️ Instalasi Lokal

### 1. Clone Repository
```bash
git clone https://github.com/username/youth-scout-pro.git

### 2. Backend (Laravel)
```bash
cd youth-scout-pro/backend
composer install
cp .env.example .env
php artisan key:generate
# Edit konfigurasi DB di .env
php artisan migrate --seed
php artisan serve

### 3. Frontend (React.js)
```bash
Copy
Edit
cd ../frontend
npm install
npm run dev
