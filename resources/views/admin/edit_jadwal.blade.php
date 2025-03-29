<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit / Tambah Jadwal Perjalanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4 class="mb-3">Edit / Tambah Jadwal Perjalanan</h4>
        <form action="{{ route('jadwal.storeOrUpdate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($jadwal))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Kota Tujuan</label>
                <input type="text" name="kota_tujuan" class="form-control" value="{{ $jadwal->kota_tujuan ?? '' }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" value="{{ $jadwal->harga ?? '' }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control">{{ $jadwal->deskripsi ?? '' }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>