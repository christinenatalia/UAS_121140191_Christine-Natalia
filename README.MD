**Readme berdasarkan Soal UAS pengweb 2023**

Bagian 1: Client-side Programming
1.1 membuat halaman tampilan table data penjualan gadget disertai CRUD. membuat form input dengan isi kolom : (name, type, price, email)Menampilkan data dari server kedalam sebuah halaman menggunakan tag `table`

1.2 Membuat beberapa event untuk menghandle interaksi pada halaman web berupa input

Bagian 2: Server-side Programming 
2.1 Implementasikan script PHP untuk mengelola data dari formulir pada diatas file create, edit, delete menggunakan variabel `$_POST`  dan `$_GET`.


2.2  Buatlah sebuah objek PHP berbasis OOP yaitu `Connection` dan `InputSales` serta `SelectSales` yang memiliki metode dan menggunakan objek tersebut dalam skenario koneksi ke database dan crud.


Bagian 3: Database Management
3.1 Buatlah sebuah tabel pada database MySQL

Panduan:
- Lampirkan langkah-langkah dalam membuat basisdata dengan syntax basisdata :
      CREATE TABLE sales (
          id INT AUTO_INCREMENT PRIMARY KEY,
          name VARCHAR(255) NOT NULL,
          type VARCHAR(255) NOT NULL,
          series VARCHAR(255) NOT NULL,
          price DECIMAL(10, 2) NOT NULL,
          email VARCHAR(255) NOT NULL
      );

      INSERT INTO sales (name, type, series, price, email) VALUES
      ('Samsung Galaxy S21', 'Smartphone', 'S21', 799.99, 'john.doe@example.com'),
      ('iPhone 13', 'Smartphone', 'iPhone 13', 999.99, 'jane.smith@example.com'),
      ('Dell XPS 13', 'Laptop', 'XPS 13', 1299.99, 'bob.jones@example.com'),
      ('Sony WH-1000XM4', 'Headphones', 'WH-1000XM4', 349.99, 'alice.johnson@example.com'),
      ('iPad Air', 'Tablet', 'iPad Air', 499.99, 'carol.white@example.com'),
      ('HP Spectre x360', 'Laptop', 'Spectre x360', 1199.99, 'david.black@example.com'),
      ('Google Pixel 6', 'Smartphone', 'Pixel 6', 699.99, 'emily.green@example.com'),
      ('Beats Studio Buds', 'Earbuds', 'Studio Buds', 149.99, 'frank.miller@example.com'),
      ('Microsoft Surface Pro 7', 'Tablet', 'Surface Pro 7', 899.99, 'grace.brown@example.com'),
      ('OnePlus 9', 'Smartphone', 'OnePlus 9', 699.99, 'henry.jones@example.com');


3.2  membuat konfigurasi koneksi ke database MySQL pada file config.

3.3  melakukan manipulasi data pada tabel database dengan menggunakan query SQL dalam form crud. Misalnya, tambah data, ambil data, atau update data.

Bagian 4: State Management
4.1 membuatlah skrip PHP yang menggunakan session untuk menyimpan state pengguna user kedalam variabel global `$_SESSION`.

4.2 Implementasikan pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript dengan script yang akan berjalan saat dalam halaman index.

Bagian Bonus: Hosting Aplikasi Web 

- Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
 Langkah-langkah untuk menghosting aplikasi web telah dipilih oleh penyedia hosting yang sesuai, lalu login yang mengharuskan untuk keamanan pengguna. Server databas MySQL  telah disiapkan dan koneksi diamankan.

- Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
 Penyedia layanan yang tepat telah dipilih, dengan mempertimbangkan biaya, hosting gratis 000hosting  tidak membebankan biaya bulanan atau tahunan, menjadikannya biaya pilihan yang ekonomis.
 Layanan ini juga cocok untuk proyek  atau eksperimen kecil, menyediakan lingkungan pengembangan penuh.
 Proses pendaftaran dan pengaturan dengan 000webhost cepat, memungkinkan pengguna untuk segera mulai menghosting situs web tanpa menunggu.
 Layanan hosting gratis ini dirancang untuk pemula tanpa pengetahuan luas tentang administrasi server, dengan panel kontrol  sederhana.

- Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
 Keamanan aplikasi web yang dihosting telah ditingkatkan dengan mengaktifkan SSL/TLS.
 Protokol HTTPS digunakan untuk mengenkripsi data yang dikirimkan, dan sertifikat SSL/TLS telah diperoleh dan dipasang untuk meningkatkan keamanan transmisi data.

- Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
 Konfigurasi server untuk mendukung aplikasi web  dilakukan dengan menyiapkan server database seperti MySQL atau PostgreSQL.
 Lingkungan runtime yang diperlukan, seperti PHP dan Node.js, telah ditentukan berdasarkan kebutuhan aplikasi web.
