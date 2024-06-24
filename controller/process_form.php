<?php
require '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $alamat_jalan = $_POST['alamat_jalan'];
    $rt_rw = $_POST['rt_rw'];
    $kelurahan_desa = $_POST['kelurahan_desa'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $kode_pos = $_POST['kode_pos'];
    $jenis_pendaftaran = $_POST['jenis_pendaftaran'];
    $sekolah_asal = $_POST['sekolah_asal'];
    $alamat_sekolah_asal = $_POST['alamat_sekolah_asal'];
    $prestasi = $_POST['prestasi'];
    $kebutuhan_khusus = $_POST['kebutuhan_khusus'];
    $punya_kip = $_POST['punya_kip'];
    $nama_ayah = $_POST['nama_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $penghasilan_ayah = $_POST['penghasilan_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $penghasilan_ibu = $_POST['penghasilan_ibu'];
    $nomor_handphone = $_POST['nomor_handphone'];
    $email = $_POST['email'];

    // Mulai transaksi
    $conn->begin_transaction();

    try {
        // Simpan data ke tabel students
        $stmt = $conn->prepare('INSERT INTO students (nama, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, nisn, nik, tinggi_badan) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('ssssssss', $nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $agama, $nisn, $nik, $tinggi_badan);
        $stmt->execute();
        $student_id = $conn->insert_id;

        // Simpan data ke tabel addresses
        $stmt = $conn->prepare('INSERT INTO addresses (student_id, alamat_jalan, rt_rw, kelurahan_desa, kecamatan, kabupaten, kode_pos) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('issssss', $student_id, $alamat_jalan, $rt_rw, $kelurahan_desa, $kecamatan, $kabupaten, $kode_pos);
        $stmt->execute();

        // Simpan data ke tabel registrations
        $stmt = $conn->prepare('INSERT INTO registrations (student_id, jenis_pendaftaran, sekolah_asal, alamat_sekolah_asal, prestasi, kebutuhan_khusus, punya_kip) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('issssss', $student_id, $jenis_pendaftaran, $sekolah_asal, $alamat_sekolah_asal, $prestasi, $kebutuhan_khusus, $punya_kip);
        $stmt->execute();

        // Simpan data ke tabel parents
        $stmt = $conn->prepare('INSERT INTO parents (student_id, nama_ayah, pekerjaan_ayah, penghasilan_ayah, nama_ibu, pekerjaan_ibu, penghasilan_ibu) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('issssss', $student_id, $nama_ayah, $pekerjaan_ayah, $penghasilan_ayah, $nama_ibu, $pekerjaan_ibu, $penghasilan_ibu);
        $stmt->execute();

        // Simpan data ke tabel contacts
        $stmt = $conn->prepare('INSERT INTO contacts (student_id, nomor_handphone, email) VALUES (?, ?, ?)');
        $stmt->bind_param('iss', $student_id, $nomor_handphone, $email);
        $stmt->execute();

        // Commit transaksi
        $conn->commit();

        // Arahkan ke halaman sukses jika penyimpanan berhasil
        header("Location: ../pages/data_peserta_view.php");
        exit();
    } catch (Exception $e) {
        $conn->rollback();

        // Arahkan ke halaman error jika penyimpanan gagal
        header("Location: ./pages/error_page.php?message=Data gagal disimpan: " . $e->getMessage());
        exit();
    }
}
