<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Edit Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container ">
        <h1 class="mt-5 text-center">Edit Data Karyawan PT Maju Mundur</h1>
        <div class="mt-3">
            <?php
            include 'connect.php';
            $id = $_GET['id'];
            $query = "SELECT * FROM karyawan WHERE id='$id'";
            $show = mysqli_query($conn, $query);
            $data = mysqli_fetch_array($show)
            ?>
            <form action="update.php?id=<?php echo $id ?>" method="post">
                <div class="container w-50">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Karyawan" value="<?php echo $data['nama']; ?>">
                    </div>
                    <?php
                    if ($data['jenisKelamin'] == 'Laki-laki'){?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="Laki-laki" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="Perempuan">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Perempuan
                        </label>
                    </div>
                    <?php }else{ ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="Laki-laki">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="Perempuan" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Perempuan
                            </label>
                        </div>
                    <?php } ?>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat Karyawan" value="<?php echo $data['alamat']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Posisi Pekerjaan</label>
                        <input type="text" name="posisi" class="form-control" placeholder="Posisi Pekerjaan" value="<?php echo $data['posisiPekerjaan']; ?>">
                    </div>
                    <button class="btn btn-primary" type="submit" name="edit">Edit Data</button>
                </div>
            </form>
            <div class="container w-50">
                <a href="index.php">
                    <button class="btn btn-secondary mt-1">Kembali</button>
                </a>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
