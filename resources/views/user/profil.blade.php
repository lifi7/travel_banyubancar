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

      <main class="main">
        <div class="profile-container">
            <div class="profile-header">
                <img src="{{asset('assets/img/pp.jpeg') }}" alt="Foto Profil" class="profile-picture">
                <h2>Ulfi Tamami</h2>
                <p class="text-muted">example@email.com</p>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Nama Lengkap</label>
                <input type="text" class="form-control" value="Ulfi Tamami" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Email</label>
                <input type="email" class="form-control" value="example@email.com" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Nomor Telepon</label>
                <input type="text" class="form-control" value="0812-3456-7890" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Alamat Lengkap</label>
                <textarea class="form-control" rows="3" disabled>Jl. Raya No. 123, Malang, Jawa Timur</textarea>
            </div>

            <a href="{{ url('/profil/edit') }}" class="btn btn-primary btn-edit">Edit Profil</a>
        </div>
    </main>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
