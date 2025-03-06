<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Starter Page - Arsha Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    body {
        background-color: #f8f9fa;
    }
    .profile-container {
        max-width: 600px;
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: auto;
        margin-top: 50px;
    }
    .profile-header {
        text-align: center;
        margin-bottom: 20px;
    }
    .profile-picture {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
        border: 3px solid #007bff;
    }
    .btn-edit {
        width: 100%;
    }
</style>
</head>

<body>

    <header id="header" class="header d-flex align-items-center sticky-top">
        <x-header />
      </header>

      <section class="px-5 py-5">
        <div class="container pt-5 mx-auto w-100 mw-100" style="margin-top: 3px;">
            <div class="container ">
                <div class="row justify-content-center">
                    <!-- Profile Card -->
                    <div class="col-md-4">
                        <div class="card text-center p-3 h-100">
                            <img src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : asset('assets/img/pp.jpeg') }}"
                                class="rounded-circle mx-auto" width="120" height="120">
                            <h4 class="mt-3 fw-bold text-dua">{{ auth()->user()->name }}</h4>
                            <p class="text-muted fw-medium">{{ auth()->user()->email }}</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-secondary text-white w-100" data-bs-toggle="modal"
                                    data-bs-target="#editProfileModal">
                                    Edit Profil
                                </button>
                                <button class="btn btn-primary text-white w-100 ms-2" data-bs-toggle="modal"
                                    data-bs-target="#changePasswordModal">
                                    Ubah Kata Sandi
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Details -->
                    <div class="col-md-8">
                        <div class="card p-4 h-100">
                            <h4>Informasi Profil</h4>
                            <ul class="list-group ">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-3"><strong>Nama</strong></div>
                                        <div class="col-9">: {{ auth()->user()->name }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-3"><strong>Email</strong></div>
                                        <div class="col-9">:{{ auth()->user()->email }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-3"><strong>Alamat</strong></div>
                                        <div class="col-9">:{{ auth()->user()->address }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-3"><strong>No Telepon</strong></div>
                                        <div class="col-9">:{{ auth()->user()->phone }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-3"><strong>Bergabung</strong></div>
                                        <div class="col-9">:{{ auth()->user()->created_at->format('d M Y') }}</div>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                    {{-- End Profile Card --}}
                  
            </div>
        
          

            <!-- Edit Profile Modal -->
            <div class="modal fade" id="editProfileModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Profil</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Avatar</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ auth()->user()->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ auth()->user()->email }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="address"
                                        value="{{ auth()->user()->address }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No Telepon</label>
                                    <input type="text" class="form-control" name="phone"
                                        value="{{ auth()->user()->phone }}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Change Password Modal -->
            <div class="modal fade" id="changePasswordModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ubah Kata Sandi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form action="{{ route('profile.password') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Kata Sandi Lama</label>
                                    <input type="password" class="form-control" name="current_password">
                                    @error('current_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kata Sandi Baru</label>
                                    <input type="password" class="form-control" name="new_password">
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" name="new_password_confirmation">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Perbarui</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('showModal'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var myModal = new bootstrap.Modal(document.getElementById("{{ session('showModal') }}"));
                myModal.show();
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1700,
                background: ' fff',
                color: ' #114232',
            });
        </script>
    @endif

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
