<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Tampil Pegawai</title>
</head>

<body>
    <h3 align="center">Tampil Pegawai</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA PEGAWAI</th>
                <th>NIP</th>
                <th>ALAMAT</th>
                <th>JABATAN</th>
                <th>USERNAME</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            

            mysqli_close($conn); // close the connection after finishing the query
            ?>
            <td>
                <a href="ubah_pegawai.php?id_pegawai=<?= $data_pegawai['id_pegawai'] ?>"
                    class="btn btn-success">Ubah</a> |
                <a href="hapus.php?id_pegawai=<?= $data_pegawai['id_pegawai'] ?>"
                    onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
            <?php

            ?>
        </tbody>
    </table>
    <div class="text-left">
        <a href="tambah_pegawai.php" class="btn btn-primary">Tambah Pegawai</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>