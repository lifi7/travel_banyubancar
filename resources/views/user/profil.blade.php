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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        .profile-container {
            max-width: 600px;
            /* background: white; */
            padding: 30px;
            border-radius: 10px;
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
            margin: auto;
            margin-top: 50px;
        }

        .padding {
            padding: 3rem !important;
            margin-left: 200px
        }

        .card-img-top {
            height: 300px;
        }

        .card-no-border .card {
            border-color: #d7dfe3;
            border-radius: 4px;
            margin-bottom: 30px;
            -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05)
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem
        }

        .pro-img {
            margin-top: -80px;
            margin-bottom: 20px
        }

        .little-profile .pro-img img {
            width: 128px;
            height: 128px;
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 100%
        }

        html body .m-b-0 {
            margin-bottom: 0px
        }

        h3 {
            line-height: 30px;
            font-size: 21px
        }

        .btn-rounded.btn-md {
            padding: 12px 35px;
            font-size: 16px
        }

        html body .m-t-10 {
            margin-top: 10px
        }

        .btn-primary,
        .btn-primary.disabled {
            background: #7460ee;
            border: 1px solid #7460ee;
            -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
            box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
            -webkit-transition: 0.2s ease-in;
            -o-transition: 0.2s ease-in;
            transition: 0.2s ease-in
        }

        .btn-rounded {
            border-radius: 60px;
            padding: 7px 18px
        }

        .m-t-20 {
            margin-bottom: 10px
        }

        .text-center {
            text-align: center !important
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #455a64;
            font-family: "Poppins", sans-serif;
            font-weight: 400
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }
    </style>
</head>

<body>

    <header id="header" class="header d-flex align-items-center sticky-top">
        <x-header />
    </header>

    <main class="main">
        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Profil</li>
                    </ol>
                </nav>
                <h1>Profil</h1>
            </div>
        </div><!-- End Page Title -->

<<<<<<< HEAD
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
=======
        <div class="profile-container">
            <div class="card">
                <img class="card-img-top" src="/assets/img/home-decor-2.jpg" alt="Card image cap">
                <div class="card-body little-profile text-center">
                    <div class="pro-img">
                        <img src="{{ Auth::user()->img ? asset('storage/' . Auth::user()->img) : '/assets/img/default-profile.jpg' }}"
                            alt="user">
                    </div>
                    <h3 class="m-b-0">{{ Auth::user()->name }}</h3>
                    <p>{{ Auth::user()->email }}</p>
                    <div class="row text-center m-t-20">
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">10434</h3><small>Pesanan</small>
                        </div>
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">434K</h3><small>Followers</small>
                        </div>
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">5454</h3><small>Following</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center gap-2 mt-3">
                        <!-- Logout Button -->
                        <a href="{{ route('logout') }}" class="btn btn-outline-danger btn-md btn-rounded"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        <a type="button" class="waves-effect waves-dark btn btn-primary btn-md btn-rounded"
                            data-bs-toggle="modal" data-bs-target="#editProfileModal">
                            Edit Profile
                        </a>
                    </div>
                </div>
            </div>
            <!-- MODAL EDIT PROFILE -->
            <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ Auth::user()->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ Auth::user()->email }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="img" class="form-label">Foto Profil</label>
                                    <input type="file" class="form-control" id="img" name="img"
                                        accept="image/*">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
>>>>>>> fitur-tertinggal
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
