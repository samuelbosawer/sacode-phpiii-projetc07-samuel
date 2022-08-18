<?php
    // panggil file konfigurasi
    require_once('config.php');


    // cek data terima/kirim dari form 
    if(isset($_POST['nama_lengkap']) && $_POST['nama_lengkap'] != '')
    {
       $nama_lengkap = $_POST['nama_lengkap'];
       $alamat_email = $_POST['alamat_email'];
       $kata_sandi = $_POST['kata_sandi'];

        // query tambah data ke database
        $sql = "INSERT INTO `anggota` (`nama_lengkap`,`email`, `kata_sandi`) VALUES ('$nama_lengkap','$alamat_email','$kata_sandi');
        ";
        if($koneksi->query($sql) === TRUE)
        {
            // Mulai session 
            session_start();

            // membuat session untuk menyimpan data
            $_SESSION['nama_lengkap']  = $nama_lengkap;
            $_SESSION['alamat_email'] = $alamat_email;

            // jika proses berhasil, tampilkan halaman
            header('location:dasbor.php');
        }
        else
        {
            echo "GAGAL !!, silahkan coba lagi ... ";
        }

    }else{
        echo "Silahkan lengkapi data";
    }
?>