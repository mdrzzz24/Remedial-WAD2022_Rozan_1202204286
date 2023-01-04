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
            <form action="/{{ $karyawan->id }}" method="post">
                @method('put')
                @csrf
                <div class="container w-50">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Karyawan" value="{{ $karyawan->nama }}">
                    </div>
                   @if ($karyawan->jenisKelamin == "Laki-laki")
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="flexRadioDefault1" value="Laki-laki" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="flexRadioDefault1" value="Perempuan">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Perempuan
                        </label>
                    </div>
                    @else
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="flexRadioDefault1" value="Laki-laki">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="flexRadioDefault1" value="Perempuan" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Perempuan
                            </label>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat Karyawan" value="{{ $karyawan->alamat }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Posisi Pekerjaan</label>
                        <input type="text" name="posisiPekerjaan" class="form-control" placeholder="Posisi Pekerjaan" value="{{ $karyawan->posisiPekerjaan }}">
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Edit Data</button>
                </div>
            </form>
            <div class="container w-50">
                <a href="/">
                    <button class="btn btn-secondary mt-1">Kembali</button>
                </a>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
