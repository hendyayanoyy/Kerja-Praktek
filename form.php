<?php

include 'koneksi.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir PPDB SMP</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ecf0f1;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Formulir PPDB</h2>
        <form id="ppdbForm" method="POST" action="./controller/process_form.php">
            <!-- Page 1 - Data Pribadi -->
            <div class="card" id="page1">
                <div class="card-body">
                    <h2 class="card-title">Data Pribadi</h2>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" required>
                    </div>
                    <div class="form-group">
                        <label for="nisn">NISN (Nomor Induk Siswa Nasional)</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" required>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK/No. KITAS</label>
                        <input type="text" class="form-control" id="nik" name="nik">
                    </div>
                    <div class="form-group">
                        <label for="tinggi_badan">Tinggi Badan (cm)</label>
                        <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" required>
                    </div>
                    <button type="button" class="btn btn-primary mt-3" onclick="showPage(2)">Lanjut</button>
                </div>
            </div>

            <!-- Page 2 - Alamat -->
            <div class="card" id="page2" style="display: none;">
                <div class="card-body">
                    <h2 class="card-title">Alamat</h2>
                    <div class="form-group">
                        <label for="alamat_jalan">Alamat Jalan</label>
                        <input type="text" class="form-control" id="alamat_jalan" name="alamat_jalan" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="rt_rw">RT/RW</label>
                            <input type="text" class="form-control" id="rt_rw" name="rt_rw" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kelurahan_desa">Kelurahan/Desa</label>
                            <input type="text" class="form-control" id="kelurahan_desa" name="kelurahan_desa" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kabupaten">Kabupaten / Kota</label>
                            <input type="text" class="form-control" id="kabupaten" name="kabupaten" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="kode_pos">Kode Pos</label>
                            <input type="text" class="form-control" id="kode_pos" name="kode_pos" required>
                        </div>
                    </div>
                    <button type="button" class="btn btn-warning" onclick="showPage(1)">Kembali</button>
                    <button type="button" class="btn btn-primary" onclick="showPage(3)">Lanjut</button>
                </div>
            </div>


            <!-- Page 3 - Informasi Lain -->
            <div class="card" id="page3" style="display: none;">
                <div class="card-body">
                    <h2 class="card-title">Informasi Lain</h2>
                    <!-- Jenis Pendaftaran -->
                    <div class="form-group">
                        <label for="jenis_pendaftaran">Jenis Pendaftaran</label>
                        <select class="form-control" id="jenis_pendaftaran" name="jenis_pendaftaran" required>
                            <option value="Baru">Baru</option>
                            <option value="Pindahan">Pindahan</option>
                        </select>
                    </div>
                    <!-- Nama Sekolah Asal -->
                    <div class="form-group">
                        <label for="sekolah_asal">Nama Sekolah Asal</label>
                        <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" required>
                    </div>
                    <!-- Alamat Sekolah Asal -->
                    <div class="form-group">
                        <label for="alamat_sekolah_asal">Alamat Sekolah Asal</label>
                        <input type="text" class="form-control" id="alamat_sekolah_asal" name="alamat_sekolah_asal" required>
                    </div>

                    <!-- Prestasi yang Pernah Diraih -->
                    <div class="form-group">
                        <label for="prestasi">Prestasi yang Pernah Diraih</label>
                        <input type="text" class="form-control" id="prestasi" name="prestasi">
                    </div>
                    <!-- Kebutuhan Khusus -->
                    <div class="form-group">
                        <label for="kebutuhan_khusus">Kebutuhan Khusus</label>
                        <input type="text" class="form-control" id="kebutuhan_khusus" name="kebutuhan_khusus">
                    </div>
                    <!-- Apakah Punya KIP -->
                    <div class="form-group">
                        <label for="punya_kip">Apakah Punya KIP</label>
                        <select class="form-control" id="punya_kip" name="punya_kip">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-warning" onclick="showPage(2)">Kembali</button>
                    <button type="button" class="btn btn-primary" onclick="showPage(4)">Lanjut</button>
                </div>
            </div>


            <!-- Page 4 - Informasi Orang Tua dan Kontak -->
            <div class="card" id="page4" style="display: none;">
                <div class="card-body">
                    <h2 class="card-title">Informasi Orang Tua</h2>
                    <!-- Nama Ayah -->
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
                    </div>
                    <!-- Pekerjaan Ayah -->
                    <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
                    </div>
                    <!-- Penghasilan Bulanan Ayah -->
                    <div class="form-group">
                        <label for="penghasilan_ayah">Penghasilan Bulanan Ayah</label>
                        <input type="number" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah">
                    </div>
                    <!-- Nama Ibu -->
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                    </div>
                    <!-- Pekerjaan Ibu -->
                    <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
                    </div>
                    <!-- Penghasilan Bulanan Ibu -->
                    <div class="form-group">
                        <label for="penghasilan_ibu">Penghasilan Bulanan Ibu</label>
                        <input type="number" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu">
                    </div>

                    <!-- Kontak -->
                    <h2>Kontak</h2>
                    <!-- Nomor Handphone -->
                    <div class="form-group">
                        <label for="nomor_handphone">Nomor Handphone</label>
                        <input type="tel" class="form-control" id="nomor_handphone" name="nomor_handphone" required>
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <!-- button -->
                    <div class="mt-3 mr-3">
                        <button type="button" class="btn btn-warning" onclick="showPage(3)">Kembali</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </form>

        <script>
            function showPage(pageNumber) {
                document.getElementById('page1').style.display = 'none';
                document.getElementById('page2').style.display = 'none';
                document.getElementById('page3').style.display = 'none';
                document.getElementById('page4').style.display = 'none';
                document.getElementById('page' + pageNumber).style.display = 'block';
            }
        </script>
</body>

</html>