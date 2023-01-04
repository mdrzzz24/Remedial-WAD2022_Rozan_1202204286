<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="mt-5 text-center">Data Karyawan PT Maju Mundur</h1>
        <div class="container w-75">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Posisi</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connect.php';
                $query = "SELECT * FROM karyawan";
                $show = mysqli_query($conn, $query);
                while ($data = mysqli_fetch_array($show)) {
                ?>
                <tr>
                <th scope="row"><?php echo $data['id']; ?></th>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jenisKelamin']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['posisiPekerjaan']; ?></td>
                <td>
                    <div class="container">
                        <a  style="color:white;" href="updatedata.php?id=<?php echo $data['id']; ?>">
                            <button class="btn btn-primary" type="submit">Edit</button>
                        </a>
                        <a href="delete.php?id=<?php echo $data['id']; ?>&delete=yes">
                            <button" name="delete" class="btn btn-danger" type="submit">Delete</button>
                        </a>
                    </div>
                </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <a href="inputdata.php">
            <button class="btn btn-primary">Input Data</button>
        </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
