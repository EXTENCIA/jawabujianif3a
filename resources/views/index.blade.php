<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 text-center">Peminjaman Buku</h3>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('denda'))
                            <div class="alert alert-warning">
                                <h4>Denda: Rp {{ session('denda') }}</h4>
                            </div>
                        @endif

                        <form action="/peminjaman/simpan" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nopinjam" class="form-label">No Pinjam</label>
                                <input type="text" class="form-control" name="nopinjam" id="nopinjam" required>
                            </div>

                            <div class="mb-3">
                                <label for="noanggota" class="form-label">No Anggota</label>
                                <select class="form-select" name="noanggota" id="noanggota" required>
                                    @foreach($anggota as $a)
                                        <option value="{{ $a->noanggota }}">{{ $a->namaanggota }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nobuku" class="form-label">No Buku</label>
                                <select class="form-select" name="nobuku" id="nobuku" required>
                                    @foreach($buku as $b)
                                        <option value="{{ $b->nobuku }}">{{ $b->namabuku }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="tanggalpinjam" class="form-label">Tanggal Pinjam</label>
                                <input type="date" class="form-control" name="tanggalpinjam" id="tanggalpinjam" required>
                            </div>

                            <div class="mb-3">
                                <label for="tanggalkembali" class="form-label">Tanggal Kembali</label>
                                <input type="date" class="form-control" name="tanggalkembali" id="tanggalkembali">
                            </div>

                            <div class="mb-3">
                                <label for="denda" class="form-label">Denda</label>
                                <input type="text" class="form-control" name="denda" id="denda" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Pinjam Buku</button>
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
