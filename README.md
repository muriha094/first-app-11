# 📖 Light in Letters

**Light in Letters** adalah sebuah platform blog berbasis **Laravel 11** yang dirancang untuk berbagi cerita, inspirasi, dan ide-ide segar.

Nama *Light in Letters* memiliki filosofi:
* **Light (cahaya)** → simbol harapan, ilmu, inspirasi, dan kehangatan.
* **Letters (huruf/kata-kata)** → makna dari tulisan, pesan, dan refleksi pribadi.
* Jika digabung: **"Cahaya yang lahir dari kata-kata."** ✨

---

## 🚀 Fitur Utama

* 🔐 **Authentication** (Login & Register pengguna).
* 📝 **Blog Management** – buat, baca, dan kelola artikel.
* 👥 **User Statistik** – menampilkan jumlah pengguna & artikel di beranda.
* 📱 **Responsive Design** – dibangun dengan **TailwindCSS + Alpine.js**.
* 🎨 **Animasi Interaktif** – halaman memiliki efek transisi yang lembut (fade-in/slide-in).
* 📄 **Halaman Khusus**:
  * **Home** → statistik & ajakan bergabung.
  * **Blog** → daftar artikel dengan kategori & penulis.
  * **About Us** → penjelasan filosofi *Light in Letters*.
  * **Contact** → form & informasi kontak.

---

## 🛠️ Tech Stack

* [Laravel 11](https://laravel.com/) – PHP Framework
* [TailwindCSS](https://tailwindcss.com/) – Styling
* [Alpine.js](https://alpinejs.dev/) – Interactivity
* [Flowbite](https://flowbite.com/) – UI Components
* [Font Awesome](https://fontawesome.com/) – Ikon

---

## ⚡ Instalasi

1. Clone repository:
```bash
   git clone https://github.com/muriha-code/first-app-11.git
   cd first-app-11
```
2. Install dependencies:

```bash   
   composer install
   npm install && npm run dev
```
3. Copy .env.example → .env lalu atur database:

```bash   
   cp .env.example .env
   php artisan key:generate
```
4. Jalankan migrasi
```bash   
   php artisan migrate --seed
```
5. Jalankan server
```bash   
   php artisan serve
```

## Tampilan Website
![Screenshoot](/images/1.png)

![Screenshoot](/images/2.png)

![Screenshoot](/images/3.png)

![Screenshoot](/images/4.png)

![Screenshoot](/images/5.png)