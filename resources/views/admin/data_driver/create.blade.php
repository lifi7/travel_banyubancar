@extends('components._app')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  
    <div class="container-fluid py-4">
        <div class="content-wrapper pb-5">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-bold fs-3">Tambah Jadwal</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow-sm rounded">
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Upload Gambar -->
                                    <div class="mb-3">
                                        <label class="form-label font-weight-bold">Foto</label>
                                        <input type="file" name="images" class="form-control" multiple accept="image/*"
                                            required>
                                    </div>
        
                                    <!-- Kota Tujuan  -->
                                    <div class="mb-3">
                                        <label class="form-label font-weight-bold">Kota Tujuan</label>
                                        <input type="text" name="kota_tujuan" class="form-control"
                                            placeholder="Masukkan nama kota tujuan" required>
                                    </div>
        
                                    <!-- Harga  -->
                                    <div class="mb-3">
                                        <label class="form-label font-weight-bold">Harga</label>
                                        <input type="number" name="harga" class="form-control"
                                            placeholder="Masukkan harga" required>
                                    </div>
        
                                    <!-- Deskripsi -->
                                    <div class="mb-3">
                                        <label class="form-label font-weight-bold">Deskripsi</label>
                                        <textarea id="editor" name="deskripsi" class="form-control" rows="4" placeholder="Masukkan deskripsi" required></textarea>
                                    </div>
        
                                    <!-- Tombol Submit -->
                                    <button type="submit" class="btn bg-gradient-success text-white">Simpan Jadwal</button>
                                    <button type="reset" class="btn bg-gradient-warning text-white">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    document.querySelector('#editor').value = editor.getData();
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection