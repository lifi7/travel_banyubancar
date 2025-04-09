@extends('components._app')
@section('content')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <x-navbar title="Data Armada"/>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                  <h6>Data Armada</h6>
                  <a class="btn bg-gradient-warning mb-0" href="">
                    <i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Armada
                  </a>              
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Armada</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis & Tahun</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plat Nomor</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Kursi</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status Armada</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="foto-armada">
                              </div>
                            </div>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm">LUX Express</h6>
                          </td>
                          <td>
                            <p class="text-xs text-secondary mb-0">Toyota Hiace 2014</p>
                          </td>
                          <td>
                            <p class="text-xs text-secondary mb-0">N 1234 AB</p>
                          </td>
                          <td>
                            <p class="text-xs text-secondary mb-0">12 Kursi</p>
                          </td>
                          <td>
                            <span class="badge bg-gradient-success">Tersedia</span>
                          </td>
                        </tr>
          
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="foto-armada">
                              </div>
                            </div>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm">Travel Surya</h6>
                          </td>
                          <td>
                            <p class="text-xs text-secondary mb-0">Isuzu Elf 2016</p>
                          </td>
                          <td>
                            <p class="text-xs text-secondary mb-0">L 5678 CD</p>
                          </td>
                          <td>
                            <p class="text-xs text-secondary mb-0">14 Kursi</p>
                          </td>
                          <td>
                            <span class="badge bg-gradient-warning">Dalam Perjalanan</span>
                          </td>
                        </tr>
          
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="foto-armada">
                              </div>
                            </div>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm">Bintang Timur</h6>
                          </td>
                          <td>
                            <p class="text-xs text-secondary mb-0">Suzuki APV 2015</p>
                          </td>
                          <td>
                            <p class="text-xs text-secondary mb-0">AG 9012 EF</p>
                          </td>
                          <td>
                            <p class="text-xs text-secondary mb-0">8 Kursi</p>
                          </td>
                          <td>
                            <span class="badge bg-gradient-danger">Dalam Perbaikan</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  @endsection
  @section('script')
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>
  @endsection
  