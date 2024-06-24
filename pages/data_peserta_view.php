<?php
require '../koneksi.php';

// Query untuk mengambil data peserta PPDB yang baru dimasukkan
$query = "SELECT students.*, addresses.*, registrations.*, parents.*, contacts.*
          FROM students
          JOIN addresses ON students.id = addresses.student_id
          JOIN registrations ON students.id = registrations.student_id
          JOIN parents ON students.id = parents.student_id
          JOIN contacts ON students.id = contacts.student_id
          ORDER BY students.id DESC LIMIT 1";

// Eksekusi query
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta PPDB</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ecf0f1;
            padding-top: 20px;
        }

        .container {
            margin-bottom: 20px;
        }

        table {
            border-bottom: 2px solid black;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-3">Data Peserta PPDB</h2>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped border-table">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td><?php echo $row['nama']; ?></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td><?php echo $row['jenis_kelamin']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td><?php echo $row['tempat_lahir']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td><?php echo $row['tanggal_lahir']; ?></td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td><?php echo $row['agama']; ?></td>
                                </tr>
                                <tr>
                                    <th>NISN</th>
                                    <td><?php echo $row['nisn']; ?></td>
                                </tr>
                                <tr>
                                    <th>NIK</th>
                                    <td><?php echo $row['nik']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tinggi Badan</th>
                                    <td><?php echo $row['tinggi_badan']; ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td><?php echo $row['alamat_jalan']; ?></td>
                                </tr>
                                <tr>
                                    <th>RT/RW</th>
                                    <td><?php echo $row['rt_rw']; ?></td>
                                </tr>
                                <tr>
                                    <th>Kelurahan/Desa</th>
                                    <td><?php echo $row['kelurahan_desa']; ?></td>
                                </tr>
                                <tr>
                                    <th>Kecamatan</th>
                                    <td><?php echo $row['kecamatan']; ?></td>
                                </tr>
                                <tr>
                                    <th>Kabupaten</th>
                                    <td><?php echo $row['kabupaten']; ?></td>
                                </tr>
                                <tr>
                                    <th>Kode Pos</th>
                                    <td><?php echo $row['kode_pos']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Jenis Pendaftaran</th>
                                    <td><?php echo $row['jenis_pendaftaran']; ?></td>
                                </tr>
                                <tr>
                                    <th>Sekolah Asal</th>
                                    <td><?php echo $row['sekolah_asal']; ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat Sekolah Asal</th>
                                    <td><?php echo $row['alamat_sekolah_asal']; ?></td>
                                </tr>
                                <tr>
                                    <th>Prestasi</th>
                                    <td><?php echo $row['prestasi']; ?></td>
                                </tr>
                                <tr>
                                    <th>Kebutuhan Khusus</th>
                                    <td><?php echo $row['kebutuhan_khusus']; ?></td>
                                </tr>
                                <tr>
                                    <th>Punya KIP</th>
                                    <td><?php echo $row['punya_kip']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Ayah</th>
                                    <td><?php echo $row['nama_ayah']; ?></td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ayah</th>
                                    <td><?php echo $row['pekerjaan_ayah']; ?></td>
                                </tr>
                                <tr>
                                    <th>Penghasilan Ayah</th>
                                    <td><?php echo $row['penghasilan_ayah']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Ibu</th>
                                    <td><?php echo $row['nama_ibu']; ?></td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ibu</th>
                                    <td><?php echo $row['pekerjaan_ibu']; ?></td>
                                </tr>
                                <tr>
                                    <th>Penghasilan Ibu</th>
                                    <td><?php echo $row['penghasilan_ibu']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nomor Handphone</th>
                                    <td><?php echo $row['nomor_handphone']; ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $row['email']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex justify-end">
                    <a href="edit_data_peserta.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="success_page.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Submit</a>
                </div>
        <?php
            }
        } else {
            echo "<p class='text-center'>Tidak ada data yang tersedia</p>";
        }
        ?>
    </div>
</body>

</html>