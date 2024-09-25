<!DOCTYPE html>
<html>

<head>
    <title>Register Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            margin: 40px auto;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0069d9;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Tambah Pegawai</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <div class="container mt-5">
            <h3>Tambah Pegawai</h3>
            <form id="registerForm" action="proses_register.php" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pegawai</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" id="nik" name="nik" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                        <option></option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="no_tlp" class="form-label">Nomor Telepon</label>
                    <input type="text" id="no_tlp" name="no_tlp" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="nama_jabatan">Jabatan</label>
                    <div class="">
                        <select name="id_jabatan" class="form-control" required="">
                            <option></option>
                            <?php
                            include "koneksi.php";
                            $qry_jabatan = mysqli_query($conn, "select * from tabel_jabatan");
                            while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                                echo '<option value="' . $data_jabatan['id_jabatan'] . '">' . $data_jabatan['nama_jabatan'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <input type="submit" value="Tambah Pegawai" class="btn btn-primary">
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </body>

    </html>
</body>