<div align=center>

|    NRP     |      Name      |
| :--------: | :------------: |
| 5025221253 | Farel Hanif Andaru |

# Laporan Tugas Section 3

</div>

### Daftar Perubahan

- Routing

- Tailwind Navbar

- Blade Components


### Routing

- web.php

    Pada proyek ini dilakukan routing pada web.php, halaman yang tersedia diantaranya adalah: home sebagai halaman default, halaman blog yang berisi artikel, about berisi perkenalan sederhana dan contact berisi contact saya sendiri

    ```php
    Route::get('/', function () {
        return view('home', ['title' => 'Home Page']);
    });

    Route::get('/blog', function () {
        return view('blog', ['title' => 'Blog']);
    });

    Route::get('/contact', function () {
        return view('contact', ['title' => 'My Contact', 'nama' => 'Farel Hanif Andaru', 'email' => 'farelhanifandaru@gmail.com', 'nohp' => '082233878635']);
    });

    Route::get('/about', function () {
        return view('about', ['title' => 'About']);
    });
    ```
    Hal ini dapat dicapai dengan menyertakan file blade.php pada view untuk dilakukan rendering saat link tertentu pada web.php diakses. Selain melakukan routing pada web.php ini saya juga melakukan passing array to string yang nantinya akan mempermudah penggunakan komponen blade.


### Tailwind Navbar
- Template Tailwind
    
    Setelah melakukan instalasi tailwind sesuai dokumentasi pada situs resmi tailwind agar dapat terintegrasi pada laravel saya menggunakan komponen template yang tersedia secara gratis pada situs tailwind dalam bentuk navigation bar.

- Halmaan Navbar

    Seperti routing sebelumnya, setiap halaman memiliki blade.php yang berbeda beda. isi dari setiap halaman menyesuaikan dengan tugas pada video yang diberikan pada section ini.

    Halaman Home:

    Halaman Blog:

    Halaman About:

    Halaman Contact:

### Blade Components

- Header
    
    file ini akan menampilkan header pada setiap halaman sesuai dengan string yang sebelumnya di-passing pada web.php

- Layout

    file ini menampung doctype html setiap halaman, agar tidak melakukan perulangan maka dibuatlah komponen layout yang nantinya dapat dimodifikasi sesuai dengan parameter yang di-passing pada setiap halaman. File ini akan memanggil file navbar untuk menampilkan navbar tailwind yang sebelumnya sudah diinstall.

- Navbar

    file ini berisi template tailwind yang dipakai, sebelumnya saya lakukan modifikasi sesuai instruksi situs resmi tailwind agar template ini dapat bekerja, selain itu saya juga memodifikasi button pada template ini agar dapat bekerja dengan benar sesuai dengan halaman yang saya punya.

- Navlink

    file ini berisi pewarnaan button pada navbar, perilaku button pada navbar akan berubah ketika tidak dalam halaman tersebut, ketika pada halaman tersebut, dan ketika mouse di-hover pada button tersebut. komponen ini akan mengecek halaman apa yang sedang dibuka sekarang dan mengganti perilaku button tersebut menggunakan fungsi bawaan dari laravel.