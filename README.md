Nama: Riksan Cahyowadi<br>
NIM: 121140106

**Hosting**: https://uas-pemweb-ra-riksan.000webhostapp.com/

## Sekilas tentang projek ini
Projek ini berisi CRUD (Create, Read, Update, Delete) yang mana user bisa bebas memanipulasi/menambah data identitas.

## Fitur
- Menampilkan baris data.
- Menambah identitas baru
- Update data yang sudah ada
- Menghapus identitas yang sudah ada

## Cara penggunaan
- Pada halaman awal (Daftar Profil) menampilkan semua data identitas yang ada. Selain itu ada tombol edit untuk memanipulasi data yang ada dan delete untuk menghapus data yang dipilih
- Klik tombol "Profil Baru" di kiri atas untuk menambahkan identitas profil baru

## Capaian
**Bagian 1: Client-side Programming (Bobot: 30%)**
Disini saya membuat Manipulasi DOM dengan menampilkan pemberitahuan jika ada data identitas yang berhasil dihapus

**Bagian 2: Server-side Programming (Bobot: 30%)**
Disini saya menggunakan metode GET dan POST di dalam file editdata.php & create.php
Kemudian saya membuat OOP di file mahasiswa.php untuk mengelompokkan fungsionalitas terkait bersama dalam kelas dan membuatnya lebih mudah dipahami dan dipelihara

**Bagian 3: Database Management (Bobot: 20%)**
- Pada phpmyadmin, saya membuat sebuah database bernama daftar_profil. Didalam database tersebut saya membuat tabel bernama identitas.sql
- Pada file identitas.sql tersebut terdapat attribut id, nama, email, prodi, dan semester
- Saya melakukan export sql di phpmyadmin untuk mendapatkan filenya 

**Bagian 4: State Management (Bobot: 20%)**
Untuk session_start() saya tambahkan di file create.php dan editdata.php supaya data bisa disimpan didalam server

**Bagian Bonus: Hosting Aplikasi Web (Bobot: 20%)**
Bagian bonus ini akan memberikan bobot tambahan 20% jika Anda berhasil meng-host aplikasi web yang Anda buat. Jawablah pertanyaan-pertanyaan berikut:

1. Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
    - Disini saya menggunakan hosting website gratis yaitu 000webhost.com
    - Langkah pertama adalah melakukan login atau mendaftar jika belum mempunyai akun webhost
    - Langkah kedua upload semua file yang ingin dihosting kecuali file database (sql)
    - Langkah ketiga upload file sql di halaman khusus yaitu di Database Manager lalu lakukan login seperti awal masuk tadi
    - Langkah ke-empat, Mengganti value dari masing-masing $servername, $username, $password, dan $database sesuai settingan di webhostnya
    - Langkah kelima test web hosting yang telah dibuat

2. Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
    Karena 000webhost dapat melakukan hosting website yang memiliki database, selain itu faktor utamanya karena gratis

3. Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
    000webhost memiliki keamanan yang cukup baik dinilai dari:
   - Keamanan situs web, walaupun hosting gratis, bukan berarti 000webhost tidak mementingkan keamanan penggunannya
   - Perlindungan DDoS, membantu melindungi situs web dari serangan yang dapat menyebabkan layanan menjadi tidak tersedia
   - Sistem Pemantauan, 000webhost mungkin menyertakan sistem pemantauan untuk memonitor aktivitas di server dan mendeteksi perilaku mencurigakan.

5. Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
   - Disk Space 300 MB
   - 3 GB Bandwidth
   - Database 1
