PRD — Website Undangan Digital Metatah

Project Name: Undangan Metatah Digital
Platform: Web Mobile-First
Framework: Laravel 13
Frontend: Blade + Tailwind CSS + JavaScript
Database: MySQL
Asset: Asset foto dan elemen Bali disediakan oleh client
Target utama: Smartphone / mobile browser

1. Project Overview

Buat sebuah website undangan digital untuk upacara Metatah/Potong Gigi adat Bali yang ditujukan untuk satu orang.

Website harus memiliki nuansa Bali yang elegan, sakral, modern, dan personal. Website bukan website informasi umum tentang Metatah, melainkan digital invitation experience.

Pengunjung pertama kali melihat halaman pembuka dengan tombol "Buka Undangan". Setelah tombol ditekan, website masuk ke halaman undangan utama dan musik mulai diputar.

Website memiliki fitur:

Opening invitation
Informasi orang yang melaksanakan Metatah
Informasi singkat tentang Metatah
Countdown acara
Tanggal dan waktu acara
Lokasi acara
Google Maps
3 foto
Animasi scroll
Musik background
Form konfirmasi kehadiran + ucapan dalam satu form
Daftar ucapan dari tamu
Status kehadiran ditampilkan di samping nama pengirim
Database MySQL
Backend Laravel
Admin panel sederhana untuk mengelola data ucapan/kehadiran
2. Tujuan Website

Website bertujuan untuk:

Menjadi undangan digital Metatah yang mudah dibagikan melalui WhatsApp.
Memberikan informasi acara secara jelas.
Memberikan pengalaman visual yang khas Bali.
Memungkinkan tamu melakukan konfirmasi kehadiran.
Memungkinkan tamu menuliskan ucapan/doa.
Menampilkan ucapan tamu secara langsung setelah form berhasil dikirim.
Menyimpan seluruh data tamu di MySQL.
Memudahkan pemilik acara melihat daftar tamu dan status kehadiran.
3. Konsep Visual

Gunakan konsep:

Balinese Elegant Minimalism

Website harus terasa:

Bali
elegan
hangat
sakral
modern
personal
cinematic

Hindari desain yang terlihat seperti:

dashboard
website perusahaan
website sekolah
template event generik
landing page bisnis
4. Color System

Gunakan maksimal 2 warna utama.

Primary

Deep Maroon:

#5C1F24
Secondary

Warm Gold:

#C8A45D

Gunakan warna netral seperlunya:

#F8F5EF
#FFFFFF
#171513

Warna utama harus tetap konsisten di seluruh website.

5. Asset

Client sudah menyediakan:

3 foto utama
elemen/ornamen Bali

AI agent tidak boleh mengganti asset tersebut dengan placeholder jika asset tersedia di project.

Asset harus digunakan secara optimal.

Optimalkan gambar:

WebP/AVIF jika memungkinkan
lazy loading untuk gambar non-hero
responsive image
jangan menggunakan gambar berukuran sangat besar jika tidak diperlukan

Untuk ornamen Bali:

gunakan sebagai dekorasi
jangan memenuhi seluruh layar
gunakan secara subtle
jangan mengganggu readability
6. User Journey

Flow utama:

Pengunjung membuka website
        ↓
Opening Screen
        ↓
Klik "Buka Undangan"
        ↓
Music mulai dimainkan
        ↓
Hero
        ↓
Countdown
        ↓
Tentang Metatah
        ↓
Detail Acara
        ↓
Lokasi
        ↓
Gallery 3 Foto
        ↓
Form Kehadiran + Ucapan
        ↓
Submit
        ↓
Data masuk MySQL
        ↓
Ucapan langsung muncul
        ↓
Nama + Status Kehadiran
7. Opening Screen

Ketika website pertama kali dibuka, tampilkan full-screen cover.

Contoh:

OM SWASTYASTU

Dengan penuh rasa syukur

[NAMA LENGKAP]

UPACARA METATAH

[TANGGAL]

[Buka Undangan]

Background menggunakan asset yang telah disediakan.

Tambahkan:

ornamen Bali
efek cahaya lembut
subtle particle
fade animation
scale animation
Tombol
BUKA UNDANGAN

Ketika tombol ditekan:

Opening transition berjalan.
Main invitation muncul.
Background music dimainkan.
Music control muncul.

Jangan mencoba autoplay audio sebelum user melakukan interaksi, karena browser dapat memblokir autoplay audio.

8. Background Music

Tambahkan satu file audio dari asset project.

Contoh:

public/audio/music.mp3

JavaScript:

User click "Buka Undangan"
        ↓
audio.play()

Tambahkan floating music button.

Contoh:

♫

atau gunakan icon dari icon library, jangan emoji.

Button:

fixed
bottom
right

Fungsi:

Playing → Pause
Pause → Playing
9. Hero Section

Setelah opening:

OM SWASTYASTU

Dengan penuh rasa syukur,
kami mengundang Bapak/Ibu/Saudara/i
untuk hadir dalam acara

METATAH

[NAMA LENGKAP]

[FOTO UTAMA]

[TANGGAL]

Hero harus menjadi bagian visual utama.

Gunakan:

typography elegant
foto utama
ornamen Bali
animation
whitespace yang cukup
10. Countdown

Tampilkan countdown menuju waktu acara.

Format:

Menuju Hari Pelaksanaan

12       04       31       20
Hari     Jam     Menit    Detik

Countdown harus berjalan menggunakan JavaScript.

Target waktu harus berasal dari konfigurasi event.

Contoh:

event_date = 2026-12-20
event_time = 10:00

Jika waktu sudah melewati acara:

Acara telah berlangsung

Jangan menampilkan angka negatif.

11. Tentang Metatah

Buat section pendek dan elegan.

Judul:

Tentang Metatah

Isi harus menjelaskan secara singkat bahwa Metatah/Mepandes merupakan bagian dari perjalanan kehidupan masyarakat Hindu Bali dan memiliki makna berkaitan dengan kedewasaan serta pengendalian diri.

Jangan membuat section terlalu panjang.

Tambahkan catatan bahwa detail pelaksanaan dapat mengikuti adat, keluarga, dan tradisi setempat.

12. Makna / Filosofi

Buat section visual mengenai makna Metatah.

Contoh:

MAKNA METATAH

Sebuah perjalanan menuju kedewasaan
dan pengendalian diri.

Kemudian tampilkan konsep Sad Ripu secara singkat:

Kama
Lobha
Krodha
Mada
Moha
Matsarya

Gunakan animasi reveal ketika user melakukan scroll.

13. Detail Acara

Tampilkan:

WAKTU & TEMPAT

[Tanggal]

[Hari]

[Jam]

[Nama Tempat]

[Alamat]

Contoh:

Minggu
20 Desember 2026
10.00 WITA

Puri / Rumah
Jl. ................
Bali

Data acara harus mudah diubah.

Jangan hardcode terlalu banyak informasi di banyak file.

Idealnya konfigurasi event disimpan di database atau config.

14. Google Maps

Tambahkan button:

BUKA LOKASI

Ketika ditekan:

Google Maps

terbuka di tab/browser.

URL Google Maps harus berasal dari konfigurasi event.

15. Gallery

Gunakan tepat 3 foto yang disediakan client.

Layout mobile:

┌──────────────────┐
│                  │
│      FOTO 1      │
│                  │
│                  │
│                  │
│                  │
└──────────────────┘
I Komang ardentara &
iputu bagus arjuna

┌──────────────────┐
│                  │
│      FOTO 2      │
│                  │
│                  │
│                  │
│                  │
└──────────────────┘
I Komang satia &
iputu bagus aldi

┌──────────────────┐
│                  │
│      FOTO 3      │
│                  │
│                  │
│                  │
│                  │
└──────────────────┘
I Komang widyana &
iputu rembulan
9

Desktop boleh dibuat lebih cinematic.

Ketika foto ditekan:

Fullscreen Lightbox

Fitur:

close
next
previous
mobile swipe jika memungkinkan
16. Section RSVP + Ucapan

PENTING: Nama, kehadiran, dan ucapan harus berada dalam SATU FORM.

Jangan membuat dua form terpisah.

Judul:

Konfirmasi Kehadiran

Form:

Nama Lengkap

[________________________]


Kehadiran

○ Hadir
○ Tidak Hadir


Ucapan & Doa

┌────────────────────────┐
│                        │
│                        │
│                        │
└────────────────────────┘


[ KIRIM ]

Semua data dikirim bersamaan.

17. Database RSVP

Buat tabel:

guests

Schema:

CREATE TABLE guests (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    attendance ENUM('hadir', 'tidak_hadir') NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

Karena form sekarang hanya membutuhkan:

nama
kehadiran
ucapan

Tidak perlu guest_count terlebih dahulu, kecuali nanti ingin menambahkan jumlah tamu.

18. Laravel Migration

Buat migration:

create_guests_table

Struktur Laravel:

$table->id();
$table->string('name', 100);
$table->enum('attendance', ['hadir', 'tidak_hadir']);
$table->text('message');
$table->timestamps();
19. Model

Buat:

app/Models/Guest.php

Dengan:

protected $fillable = [
    'name',
    'attendance',
    'message',
];
20. Form Submission

Ketika user submit:

Browser
   ↓
POST /guest
   ↓
GuestController
   ↓
Validation
   ↓
Guest::create()
   ↓
MySQL

Setelah berhasil:

redirect back

dengan success message.

Contoh:

Terima kasih atas konfirmasi
dan ucapan yang diberikan.
21. Validation

Gunakan Laravel validation.

Rules:

name:
required
string
max:100

attendance:
required
in:hadir,tidak_hadir

message:
required
string
max:1000

Jangan menerima input kosong.

Jika validation gagal, tampilkan error yang jelas di dekat field.

22. Menampilkan Ucapan

Setelah data berhasil disimpan, ucapan tersebut harus muncul pada section:

Ucapan & Doa

Data diambil dari:

guests

Urutan:

created_at DESC

Artinya:

Ucapan terbaru berada paling atas.

Contoh tampilan:

UCAPAN & DOA

┌────────────────────────────┐
│ Made Arya        ✓ Hadir   │
│                            │
│ Selamat melaksanakan       │
│ upacara Metatah. Semoga    │
│ selalu diberikan kerahayuan│
│                            │
│ 2 menit yang lalu          │
└────────────────────────────┘

Untuk yang tidak hadir:

┌────────────────────────────┐
│ Komang       Tidak Hadir   │
│                            │
│ Mohon maaf tidak dapat     │
│ hadir. Semoga acaranya     │
│ berjalan lancar.           │
└────────────────────────────┘
PENTING

Status kehadiran harus berada di samping nama.

Contoh:

Made Arya    • Hadir

atau:

Komang       • Tidak Hadir

Gunakan badge kecil yang jelas.

Jangan membuat status kehadiran terlihat seperti tombol.

23. Setelah Submit

Setelah user mengirim form:

Form
 ↓
Loading
 ↓
Success
 ↓
Form reset
 ↓
Ucapan muncul di daftar

Jika memungkinkan gunakan AJAX/fetch agar tidak perlu reload seluruh halaman.

Namun jika implementasi AJAX membuat project terlalu kompleks, Laravel redirect biasa juga diperbolehkan.

Yang penting data berhasil masuk database dan ucapan langsung terlihat setelah submit.

24. Empty State

Jika belum ada ucapan:

Belum ada ucapan.

Jadilah yang pertama
mengirimkan doa dan ucapan.

Jangan tampilkan section kosong.

25. Animasi Scroll

Setiap section harus memiliki animasi saat masuk viewport.

Tetapi jangan menggunakan animasi yang sama untuk semua section.

Gunakan kombinasi:

Hero
fade + scale
About
fade-up
Filosofi
stagger animation
Event
slide + fade
Gallery
scale reveal
RSVP
fade + slide
Guest Wishes
stagger card reveal
26. Bali Signature Animation

Tambahkan animasi khusus untuk ornamen Bali.

Contoh:

Ornamen
   ↓
opacity 0
   ↓
opacity 1
   ↓
translateY

Bisa juga menggunakan parallax ringan:

scroll
 ↓
background bergerak lambat
ornament bergerak sedang
content bergerak normal

Tujuannya membuat website terasa seperti digital invitation cinematic, bukan kumpulan section HTML.

27. Mobile First

Prioritas utama adalah mobile.

Website harus dirancang terlebih dahulu untuk:

320px
360px
375px
390px
414px
430px

Kemudian:

tablet
desktop

Desktop hanya merupakan enhancement.

28. Mobile UX

Pastikan:

tombol minimal sekitar 44px tinggi
form mudah disentuh
input tidak terlalu kecil
font nyaman dibaca
countdown tidak overflow
gallery mudah disentuh
ornamen tidak menutupi text
music button tidak menutupi form
section tidak terlalu panjang
tidak ada horizontal scrolling
29. Admin Panel

Tambahkan admin sederhana agar pemilik acara dapat melihat data tamu.

Route:

/admin

Admin dapat melihat:

Total Responden
Hadir
Tidak Hadir

Contoh:

Total
120

Hadir
95

Tidak Hadir
25

Kemudian tabel:

Nama          Kehadiran       Ucapan
------------------------------------------------
Made Arya     Hadir           Selamat...
Komang        Hadir           Rahajeng...
Wayan         Tidak Hadir     Mohon maaf...

Admin dapat:

melihat data
menghapus data
melihat statistik kehadiran
30. Admin Authentication

Jangan membuat halaman admin terbuka untuk siapa saja.

Gunakan authentication Laravel.

Minimal:

/admin/login

Setelah login:

/admin

Admin dapat mengakses data RSVP.

Jangan menyimpan password admin dalam plaintext.

Gunakan sistem authentication Laravel dan hashing password.

31. Database Final

Untuk versi pertama, gunakan:

users
guests
users

Untuk authentication admin Laravel.

guests
id
name
attendance
message
created_at
updated_at

Jika informasi event ingin dapat diubah dari admin, versi berikutnya bisa menambahkan:

events

Tetapi untuk MVP, informasi satu acara bisa diletakkan di configuration/database sederhana.

32. Routes

Public:

GET  /
POST /guest

Admin:

GET /admin/login
POST /admin/login
POST /admin/logout

GET /admin
GET /admin/guests
DELETE /admin/guests/{guest}

Jika menggunakan Laravel authentication package, sesuaikan route dengan implementasinya.

33. Controller

Minimal:

GuestController

Method:

store()
index()
destroy()

Contoh tanggung jawab:

store()
→ validate
→ save guest
→ redirect

index()
→ get guests
→ statistics
→ return admin view

destroy()
→ delete guest
→ redirect
34. Security

Walaupun website hanya undangan, tetap gunakan basic security:

CSRF protection
Laravel validation
Eloquent ORM
escaped Blade output
authentication admin
authorization admin
rate limiting untuk form jika memungkinkan
jangan expose database credentials
.env tidak boleh masuk Git
jangan menyimpan password plaintext
35. Performance

Karena mobile-first, prioritaskan:

Images
WebP / AVIF
Lazy loading

Semua gambar kecuali hero:

loading="lazy"
JavaScript

Jangan memasukkan library yang tidak diperlukan.

Animation

Gunakan:

transform
opacity

sebisa mungkin.

Hindari animasi berat yang menyebabkan layout recalculation.

Tambahkan:

@media (prefers-reduced-motion: reduce)

untuk mengurangi animasi bagi pengguna yang memilih reduced motion.

36. SEO & WhatsApp Preview

Tambahkan:

<title>Undangan Metatah [Nama]</title>
<meta name="description" content="Undangan Upacara Metatah [Nama]">

Open Graph:

og:title
og:description
og:image
og:url

Tujuannya ketika link dikirim ke WhatsApp/social media, preview undangan terlihat profesional.

37. Accessibility

Gunakan:

semantic HTML
alt pada gambar
label pada form
keyboard accessibility
focus state
contrast yang cukup
button bukan <div>
input memiliki label
error message yang jelas
38. Struktur Section Final

Urutan final halaman:

1. Opening
        ↓
2. Hero
        ↓
3. Countdown
        ↓
4. Tentang Metatah
        ↓
5. Makna / Filosofi
        ↓
6. Detail Acara
        ↓
7. Lokasi
        ↓
8. Gallery 3 Foto
        ↓
9. RSVP + Ucapan
        ↓
10. Daftar Ucapan
        ↓
11. Closing
39. Acceptance Criteria

Project dianggap selesai jika:

Opening
 Opening muncul saat website dibuka.
 Tombol Buka Undangan berfungsi.
 Musik mulai setelah tombol ditekan.
 Music toggle berfungsi.
Event
 Nama orang yang melakukan Metatah tampil.
 Tanggal tampil.
 Waktu tampil.
 Countdown berjalan.
 Countdown berhenti/berubah setelah acara berlangsung.
 Lokasi tampil.
 Google Maps dapat dibuka.
Gallery
 3 foto client digunakan.
 Foto responsive.
 Lightbox berfungsi.
RSVP
 Nama wajib diisi.
 User dapat memilih Hadir.
 User dapat memilih Tidak Hadir.
 User wajib mengisi ucapan.
 Semua data dikirim dalam satu form.
 Data tersimpan ke MySQL.
 Validation bekerja.
 Success message tampil.
Guest Wishes
 Semua ucapan tersimpan.
 Ucapan terbaru berada di atas.
 Nama tampil.
 Status kehadiran tampil di samping nama.
 Isi ucapan tampil.
 Ucapan baru tampil setelah submit.
 Empty state tersedia.
Admin
 Admin login.
 Admin dapat melihat statistik.
 Admin dapat melihat daftar tamu.
 Admin dapat melihat status kehadiran.
 Admin dapat menghapus ucapan/data.
 User biasa tidak dapat membuka admin panel.
Responsive
 320px tidak rusak.
 375px tidak rusak.
 390px tidak rusak.
 430px tidak rusak.
 Tablet responsive.
 Desktop responsive.
 Tidak ada horizontal scrolling.
40. Prinsip Desain yang Wajib Dipatuhi AI Agent

JANGAN:

membuat dashboard sebagai halaman utama
menggunakan terlalu banyak warna
menggunakan emoji sebagai elemen visual utama
menggunakan placeholder jika asset client tersedia
membuat ornamen Bali memenuhi layar
menggunakan animasi berlebihan sampai mengganggu pembacaan
membuat layout seperti template admin
membuat form RSVP dan form ucapan terpisah
menyimpan password plaintext
meng-hardcode database credentials
membuat satu urutan prosesi Metatah seolah berlaku universal

WAJIB:

mobile-first
elegant
Bali atmosphere
cinematic
smooth scroll animation
menggunakan asset yang disediakan
Laravel + MySQL
form nama + kehadiran + ucapan menjadi satu form
status kehadiran berada di samping nama
data masuk database
ucapan langsung tampil setelah submit
admin dapat melihat data
responsive
performant
accessible
Database Relationship

Untuk MVP tidak diperlukan relationship kompleks.

┌─────────────────────┐
│       users         │
│─────────────────────│
│ id                  │
│ name                │
│ email               │
│ password            │
└─────────────────────┘


┌─────────────────────┐
│       guests        │
│─────────────────────│
│ id                  │
│ name                │
│ attendance          │
│ message             │
│ created_at          │
│ updated_at          │
└─────────────────────┘

Karena ini satu undangan untuk satu orang, kita tidak perlu membuat database terlalu kompleks.

Alur data yang paling penting
                 WEBSITE
                    │
                    ▼
        ┌──────────────────────┐
        │   FORM RSVP + UCAPAN │
        │                      │
        │ Nama                 │
        │ Kehadiran            │
        │ Ucapan               │
        └──────────┬───────────┘
                   │
                   │ POST
                   ▼
          Laravel Controller
                   │
                   ▼
              Validation
                   │
                   ▼
             Guest Model
                   │
                   ▼
                MySQL
                   │
                   ▼
          ┌─────────────────┐
          │ Guest berhasil  │
          │ tersimpan       │
          └────────┬────────┘
                   │
                   ▼
             Website reload
             / AJAX update
                   │
                   ▼
          ┌───────────────────────┐
          │ UCAPAN & DOA          │
          │                       │
          │ Made    • HADIR       │
          │ "Selamat..."          │
          │                       │
          │ Komang  • TIDAK HADIR │
          │ "Mohon maaf..."       │
          └───────────────────────┘