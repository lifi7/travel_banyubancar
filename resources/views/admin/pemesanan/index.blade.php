@extends('components._app')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <!-- Navbar -->
  <x-navbar title="Pemesanan"/>
  <!-- End Navbar -->
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <div class="col-xl-6 mb-xl-0 mb-4">
            <div class="card bg-transparent shadow-xl">
              <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
                <span class="mask bg-gradient-dark"></span>
                <div class="card-body position-relative z-index-1 p-3">
                  <i class="fas fa-wifi text-white p-2"></i>
                  <h5 class="text-white mt-4 mb-5 pb-2">4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852</h5>
                  <div class="d-flex">
                    <div class="d-flex">
                      <div class="me-4">
                        <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                        <h6 class="text-white mb-0">Jack Peterson</h6>
                      </div>
                      <div>
                        <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                        <h6 class="text-white mb-0">11/22</h6>
                      </div>
                    </div>
                    <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                      <img class="w-60 mt-2" src="../assets/img/logos/mastercard.png" alt="logo">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header mx-4 p-3 text-center">
                    <div class="icon icon-shape icon-lg bg-primary shadow text-center border-radius-lg">
                      <i class="fas fa-landmark opacity-10"></i>
                    </div>
                  </div>
                  <div class="card-body pt-0 p-3 text-center">
                    <h6 class="text-center mb-0">Salary</h6>
                    <span class="text-xs">Belong Interactive</span>
                    <hr class="horizontal dark my-3">
                    <h5 class="mb-0">+$2000</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mt-md-0 mt-4">
                <div class="card">
                  <div class="card-header mx-4 p-3 text-center">
                    <div class="icon icon-shape icon-lg bg-primary shadow text-center border-radius-lg">
                      <i class="fab fa-paypal opacity-10"></i>
                    </div>
                  </div>
                  <div class="card-body pt-0 p-3 text-center">
                    <h6 class="text-center mb-0">Paypal</h6>
                    <span class="text-xs">Freelance Payment</span>
                    <hr class="horizontal dark my-3">
                    <h5 class="mb-0">$455.00</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-lg-0 mb-4">
            <div class="card mt-4">
              <div class="card-header pb-0 p-3">
                <div class="row">
                  <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">Payment Method</h6>
                  </div>
                  <div class="col-6 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                  </div>
                </div>
              </div>
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-md-6 mb-md-0 mb-4">
                    <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                      <img class="w-10 me-3 mb-0" src="../assets/img/logos/mastercard.png" alt="logo">
                      <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                      <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                      <img class="w-10 me-3 mb-0" src="../assets/img/logos/visa.png" alt="logo">
                      <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                      <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Invoices</h6>
              </div>
              <div class="col-6 text-end">
                <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
              </div>
            </div>
          </div>
          <div class="card-body p-3 pb-0">
            <ul class="list-group">
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                  <span class="text-xs">#MS-415646</span>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $180
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                  <span class="text-xs">#RV-126749</span>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $250
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                  <span class="text-xs">#FB-212562</span>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $560
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                  <span class="text-xs">#QW-103578</span>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $120
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                  <span class="text-xs">#AR-803481</span>
                </div>
                <div class="d-flex align-items-center text-sm">
                  $300
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                <h6>Pemesanan</h6>
                <a class="btn bg-gradient-warning mb-0" href="{{ route('jadwals.create') }}">
                  <i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Pesanan
                </a>              
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pemesan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Tiket</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rute</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Keberangkatan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tarif</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="foto-pemesan">
                            </div>
                          </div>
                        </td>
                        <td>
                          <h6 class="mb-0 text-sm">Ulfi Tamami</h6>
                          <p class="text-xs text-secondary mb-0">ulfi@example.com</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">TRVL123456</span>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">Lamongan - Malang</span><br>
                          <span class="text-xs text-secondary">Berangkat dari Tuban</span>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">10 April 2025 - 07:00 WIB</span>
                        </td>
                        <td>
                          <span class="text-secondary text-xs font-weight-bold">Rp.145.000,00</span>
                        </td>
                        <td>
                          <span class="badge badge-sm bg-gradient-success">Dibayar</span>
                        </td>
                      </tr>
        
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="foto-pemesan">
                            </div>
                          </div>
                        </td>
                        <td>
                          <h6 class="mb-0 text-sm">Michael Levi</h6>
                          <p class="text-xs text-secondary mb-0">michaellevi@example.com</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">TRVL789012</span>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">Tuban - Gresik</span><br>
                          <span class="text-xs text-secondary">Berangkat dari Terminal Bungurasih</span>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">12 April 2025 - 09:30 WIB</span>
                        </td>
                        <td>
                          <span class="text-secondary text-xs font-weight-bold">Rp.165.000,00</span>
                        </td>
                        <td>
                          <span class="badge badge-sm bg-gradient-warning">Belum Dibayar</span>
                        </td>
                      </tr>
  
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="foto-pemesan">
                            </div>
                          </div>
                        </td>
                        <td>
                          <h6 class="mb-0 text-sm">Ulfi Tamami</h6>
                          <p class="text-xs text-secondary mb-0">ulfi@example.com</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">TRVL123456</span>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">Lamongan - Malang</span><br>
                          <span class="text-xs text-secondary">Berangkat dari Tuban</span>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">10 April 2025 - 07:00 WIB</span>
                        </td>
                        <td>
                          <span class="text-secondary text-xs font-weight-bold">Rp.145.000,00</span>
                        </td>
                        <td>
                          <span class="badge badge-sm bg-gradient-success">Dibayar</span>
                        </td>
                      </tr>
  
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="foto-pemesan">
                            </div>
                          </div>
                        </td>
                        <td>
                          <h6 class="mb-0 text-sm">Alexa Liras</h6>
                          <p class="text-xs text-secondary mb-0">alexaliras@example.com</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">TRVL789012</span>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">Tuban - Gresik</span><br>
                          <span class="text-xs text-secondary">Berangkat dari Terminal Bungurasih</span>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">12 April 2025 - 09:30 WIB</span>
                        </td>
                        <td>
                          <span class="text-secondary text-xs font-weight-bold">Rp.165.000,00</span>
                        </td>
                        <td>
                          <span class="badge badge-sm bg-gradient-warning">Belum Dibayar</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
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
  <!--   Core JS Files   -->
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