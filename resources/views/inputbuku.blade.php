<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 text-center">Tambah Buku</h3>
                    </div>
                    <div class="card-body">
                        <form action="/buku" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nobuku" class="form-label">No Buku</label>
                                <input type="text" class="form-control" name="nobuku" id="nobuku" required>
                            </div>

                            <div class="mb-3">
                                <label for="namabuku" class="form-label">Judul</label>
                                <input type="text" class="form-control" name="namabuku" id="namabuku" required>
                            </div>

                            <div class="mb-3">
                                <label for="jumlahbuku" class="form-label">Jumlah Buku</label>
                                <input type="number" class="form-control" name="jumlahbuku" id="jumlahbuku" required>
                            </div>

                            <div class="mb-3">
                                <label for="tahunterbit" class="form-label">Tahun Terbit</label>
                                <input type="date" class="form-control" name="tahunterbit" id="tahunterbit" required>
                            </div>

                            <div class="mb-3">
                                <label for="pengarang" class="form-label">Pengarang</label>
                                <input type="text" class="form-control" name="pengarang" id="pengarang" required>
                            </div>

                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" name="penerbit" id="penerbit" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
