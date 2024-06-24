<?php
require '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $student_id = $_GET['id'];

    // Query untuk mengambil data peserta PPDB berdasarkan id
    $query = "SELECT students.*, addresses.*, registrations.*, parents.*, contacts.*
              FROM students
              JOIN addresses ON students.id = addresses.student_id
              JOIN registrations ON students.id = registrations.student_id
              JOIN parents ON students.id = parents.student_id
              JOIN contacts ON students.id = contacts.student_id
              WHERE students.id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $student_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $student_id = $_POST['student_id'];
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
        // Update data di tabel students
        $stmt = $conn->prepare('UPDATE students SET nama=?, jenis_kelamin=?, tempat_lahir=?, tanggal_lahir=?, agama=?, nisn=?, nik=?, tinggi_badan=? WHERE id=?');
        $stmt->bind_param('ssssssssi', $nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $agama, $nisn, $nik, $tinggi_badan, $student_id);
        $stmt->execute();

        // Update data di tabel addresses
        $stmt = $conn->prepare('UPDATE addresses SET alamat_jalan=?, rt_rw=?, kelurahan_desa=?, kecamatan=?, kabupaten=?, kode_pos=? WHERE student_id=?');
        $stmt->bind_param('ssssssi', $alamat_jalan, $rt_rw, $kelurahan_desa, $kecamatan, $kabupaten, $kode_pos, $student_id);
        $stmt->execute();

        // Update data di tabel registrations
        $stmt = $conn->prepare('UPDATE registrations SET jenis_pendaftaran=?, sekolah_asal=?, alamat_sekolah_asal=?, prestasi=?, kebutuhan_khusus=?, punya_kip=? WHERE student_id=?');
        $stmt->bind_param('ssssssi', $jenis_pendaftaran, $sekolah_asal, $alamat_sekolah_asal, $prestasi, $kebutuhan_khusus, $punya_kip, $student_id);
        $stmt->execute();

        // Update data di tabel parents
        $stmt = $conn->prepare('UPDATE parents SET nama_ayah=?, pekerjaan_ayah=?, penghasilan_ayah=?, nama_ibu=?, pekerjaan_ibu=?, penghasilan_ibu=? WHERE student_id=?');
        $stmt->bind_param('ssssssi', $nama_ayah, $pekerjaan_ayah, $penghasilan_ayah, $nama_ibu, $pekerjaan_ibu, $penghasilan_ibu, $student_id);
        $stmt->execute();

        // Update data di tabel contacts
        $stmt = $conn->prepare('UPDATE contacts SET nomor_handphone=?, email=? WHERE student_id=?');
        $stmt->bind_param('ssi', $nomor_handphone, $email, $student_id);
        $stmt->execute();

        // Commit transaksi
        $conn->commit();

        // Arahkan ke halaman sukses jika penyimpanan berhasil
        header("Location: ../pages/success_page.php");
        exit();
    } catch (Exception $e) {
        $conn->rollback();

        // Arahkan ke halaman error jika penyimpanan gagal
        header("Location: ../pages/error_page.php?message=Data gagal diperbarui: " . $e->getMessage());
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peserta PPDB</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-3">Edit Data Peserta PPDB</h2>
        <?php if ($data) { ?>
            <form action="" method="POST">
                <input type="hidden" name="student_id" value="<?php echo $data['id']; ?>">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Laki-laki" <?php if ($data['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                        <option value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="agama">Agama:</label>
                    <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $data['agama']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nisn">NISN:</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $data['nisn']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nik">NIK:</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data['nik']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tinggi_badan">Tinggi Badan:</label>
                    <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?php echo $data['tinggi_badan']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="alamat_jalan">Alamat Jalan:</label>
                    <input type="text" class="form-control" id="alamat_jalan" name="alamat_jalan" value="<?php echo $data['alamat_jalan']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="rt_rw">RT/RW:</label>
                    <input type="text" class="form-control" id="rt_rw" name="rt_rw" value="<?php echo $data['rt_rw']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="kelurahan_desa">Kelurahan/Desa:</label>
                    <input type="text" class="form-control" id="kelurahan_desa" name="kelurahan_desa" value="<?php echo $data['kelurahan_desa']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan:</label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?php echo $data['kecamatan']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="kabupaten">Kabupaten:</label>
                    <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?php echo $data['kabupaten']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="kode_pos">Kode Pos:</label>
                    <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?php echo $data['kode_pos']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="jenis_pendaftaran">Jenis Pendaftaran:</label>
                    <input type="text" class="form-control" id="jenis_pendaftaran" name="jenis_pendaftaran" value="<?php echo $data['jenis_pendaftaran']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="sekolah_asal">Sekolah Asal:</label>
                    <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" value="<?php echo $data['sekolah_asal']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="alamat_sekolah_asal">Alamat Sekolah Asal:</label>
                    <input type="text" class="form-control" id="alamat_sekolah_asal" name="alamat_sekolah_asal" value="<?php echo $data['alamat_sekolah_asal']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="prestasi">Prestasi:</label>
                    <input type="text" class="form-control" id="prestasi" name="prestasi" value="<?php echo $data['prestasi']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="kebutuhan_khusus">Kebutuhan Khusus:</label>
                    <input type="text" class="form-control" id="kebutuhan_khusus" name="kebutuhan_khusus" value="<?php echo $data['kebutuhan_khusus']; ?>">
                </div>
                <div class="form-group">
                    <label for="punya_kip">Punya KIP:</label>
                    <input type="text" class="form-control" id="punya_kip" name="punya_kip" value="<?php echo $data['punya_kip']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama_ayah">Nama Ayah:</label>
                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?php echo $data['nama_ayah']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                    <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?php echo $data['pekerjaan_ayah']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="penghasilan_ayah">Penghasilan Ayah:</label>
                    <input type="text" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" value="<?php echo $data['penghasilan_ayah']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama_ibu">Nama Ibu:</label>
                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?php echo $data['nama_ibu']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                    <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?php echo $data['pekerjaan_ibu']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="penghasilan_ibu">Penghasilan Ibu:</label>
                    <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" value="<?php echo $data['penghasilan_ibu']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nomor_handphone">Nomor Handphone:</label>
                    <input type="text" class="form-control" id="nomor_handphone" name="nomor_handphone" value="<?php echo $data['nomor_handphone']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        <?php } else { ?>
            <p class="text-center">Data tidak ditemukan</p>
        <?php } ?>
    </div>
</body>

</html>