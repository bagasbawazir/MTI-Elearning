<h1>✨ Hallo Selamat Datang di Web E-Learning ✨</h1>
<ul>
    <li>
        <h5>Autentikasi</h5>
    </li>
    <ul>
        <li>Login mahasiswa, dosen dan admin</li>
        <li>Lupa password</li>
    </ul>
    <li>
        <h5>Mahasiswa</h5>
    </li>
    <ul>
        <li>absen sesuai waktu yang ditentukan</li>
        <li>Akses Materi dan Tugas</li>
        <li>Submit Tugas</li>
    </ul>
    <li>
        <h5>Dosen</h5>
    </li>
    <ul>
        <li> Membuat Absensi untuk mahasiswa</li>
        <li>Membuat Materi dan Tugas</li>
        <li>Input nilai</li>
        <li>Export absensi dan nilai mahasiswa ke excel</li>
    </ul>
    <li><h5>Admin</h5></li>
    <ul>
        <li>Manage dosen, mahasiswa, matakuliah, jadwal, kelas, fakultas</li>
    </ul>
</ul>

<h1>Cara instalasi project ⚙️ </h1>
<h4> Zip </h4>
<p>Klik button Code disamping kanan atas, lalu klik <b>download zip</b></p>
<h4> Git Clone </h4>
<p>Copy code dibawah, buka terminal lalu paste dan enter</p>

```
git clone https://github.com/bagasbawazir/MTI-Elearning.git
```

<br>
<p>Setelah berhasil install file project nya</p>
<h3> Konfigurasi Project </h3>
<ol>
    <li>Copy file <b>.env.example</b> rename menjadi <b>.env</b></li>
    <li>Buat nama database pada file <b>.env</b> <code> DB_DATABASE=elearning </code></li>
    <li>Setelah membuat database, Buka terminal lalu masuk ke folder project web-elearning</li>
    <li>Lalu masukan <code> FILESYSTEM_DRIVER=public </code> ke <b> .env </b> </li>
    <li>Lalu ketikan <code> php artisan migrate </code> enter, setelah berhasil ketikan <code>php artisan storage:link</code> enter</li>
    <li>Setelah itu setup email untuk verifikasi lupa password pada file <b>.env</b></li>
    <code>MAIL_MAILER=smtp</code>
    <br>
    <code>MAIL_HOST=smtp.gmail.com</code>
    <br>
    <code>MAIL_PORT=465</code>
    <br>
    <code>MAIL_USERNAME=youremail@gmail.com</code>
    <br>
    <code>MAIL_PASSWORD=yourpassword</code>
    <br>
    <code>MAIL_ENCRYPTION=ssl</code>
    <br>
    <code>MAIL_FROM_ADDRESS=elarning@noreply.com</code>
    <br>
    <code>MAIL_FROM_NAME="${APP_NAME}"</code>
    <li>Lalu buat key app nya dengan cara <code> php artisan key:generate </code> </li>
    <li>Setelah itu download semua package dengan cara <code> composer install </code> </li>
    <li>
        Setelah step diatas sudah berhasil semua tinggal kita memasukan data dummy nya dengan cara
        <ul>
            <li>Ketik diterminal <code>php artisan tinker</code> setelah itu masukan code dibawah</li>
            <h4>Factory/Dummy Dosen</h5>
            <li>
            <code>Dosen::factory()->count(50)->create();</code>
            </li>
                <h4>Factory/Dummy Mahasiswa</h5>
            <li>
                <code>Mahasiswa::factory()->count(400)->create();</code>
            </li>
        </ul>
    </li>
    <li>Setelah berhasil, masukan data-data nya dengan cara <code> php artisan db:seed </code> pada terminal lalu enter</li>
    <li>Terakhir jalankan server nya <code> php artisan serve </code></li>
    <li>dan buka url nya diweb browser <code> http://127.0.0.1:8000 </code></li>
</ol>

<h1>Data Login 🔐</h1>

</ul>
<table border="1px" cellspacing="0" cellpadding="5px">
    <tr>
        <th>Level</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    <tr>
        <td>Admin</td>
        <td>admin@gmail.com</td>
        <td>password</td>
    </tr>
    <tr>
        <td>Dosen</td>
        <td>dosen@gmail.com</td>
        <td>password</td>
    </tr>
    <tr>
        <td>Mahasiswa</td>
        <td>mahasiswa@gmail.com</td>
        <td>password</td>
    </tr>
</table>
