<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Deteksi Kerusakan Motor - SI Pakar</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="user/html/assets/images/favicon.ico" />
  <link rel="stylesheet" href="user/html/assets/css/backend-plugin.min.css">
  <link rel="stylesheet" href="user/html/assets/css/backend.css?v=1.0.0">
  <link rel="stylesheet" href="user/html/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="user/html/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="user/html/assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class="  ">


  <!-- Wrapper Start -->
  <div class="wrapper">

    <div class="iq-top-navbar">
      <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
            <a href="/" class="header-logo">
              <img src="user/html/assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
              <h5 class="logo-title ml-3">SISTEM PAKAR DETEKSI KERUSAKAN MOTOR - SPDKM</h5>
            </a>
            <!-- <button class="btn btn-danger" onclick="window.onscroll = function() {};">klik</button> -->
          </div>

          <div class="d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
              <i class="ri-menu-3-line"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto navbar-list align-items-center">
                <li class="nav-item nav-icon">
                  <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Petunjuk penggunaan Aplikasi</button>
                </li>

                <li class="nav-item nav-icon dropdown caption-content">
                  <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="user/html/assets/images/user/1.png" class="img-fluid rounded" alt="user">
                  </a>
                  <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="card shadow-none m-0">
                      <div class="card-body p-0 text-center">
                        <div class="media-body profile-detail text-center">
                          <img src="user/html/assets/images/page-img/profile-bg.jpg" alt="profile-bg" class="rounded-top img-fluid mb-4">
                          <img src="user/html/assets/images/user/1.png" alt="profile-img" class="rounded profile-img img-fluid avatar-70">
                        </div>
                        <div class="p-3">
                          <h5 class="mb-1">SPDKM</h5>

                          <div class="d-flex align-items-center justify-content-center mt-3">
                            <a href="/login" class="btn border">Login</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
          <div class="modal-body">
            <div class="popup text-left">
              <h4 class="mb-3">Petunjuk!</h4>
              <div class="content create-workform bg-body">
                <p class="badge bg-primary">Aplikasi ini merupakan aplikasi yang digunakan untuk mempermudah Anda mendeteksi kerusakan sepeda motor.</p> <br>
                Silahkan klik gejala (beberapa) yang ada pada tabel sesuai dengan kerusakan yang
                dialami oleh motor anda, kemudian klik tombol KIRIM DATA GEJALA yang berada di bawah tabel
                untuk melihat solusi untuk kerusakan motor yang anda alami.
                <div class="col-lg-12 mt-4">
                  <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <form action="/hitungTeoremaBayes" method="post">
      @csrf
      <div class="content-page">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                <div>
                  <p class="mb-0">Silahkan pilih jenis gejala kerusakan motor Anda !</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="table-responsive rounded mb-3">
                <table class=" text-left table mb-0 tbl-server-info">
                  <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                      <th>
                        <div class="checkbox d-inline-block">
                          <input type="checkbox" class="checkbox-input" id="checkbox1">
                          <label for="checkbox1" class="mb-0"></label>
                        </div>
                      </th>
                      <th>Kode</th>
                      <th>Jenis Gejala</th>
                    </tr>
                  </thead>
                  <tbody class="ligth-body">

                    @foreach ($gejala as $g)
                    <tr>
                      <td>
                        <div class="checkbox d-inline-block">
                          <input type="checkbox" class="checkbox-input" id="checkbox10" name="bobot_gejala{{ $loop->iteration }}" value=" {{ $g->bobot_gejala  }}">
                          <input type="hidden" name="kode_kerusakan{{ $loop->iteration }}" value="{{ $g->kode_kerusakan }}">
                          <label for="checkbox10" class="mb-0"></label>
                        </div>
                      </td>
                      <td>
                        {{ $g->kode_gejala }}
                        <input type="hidden" name="kode_gejala{{ $loop->iteration }}" value="{{ $g->kode_gejala }}">
                      </td>
                      <td class="text-left"> {{ $g->jenis_gejala }} </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <input type="hidden" name="total_gejala" value="{{ $total_gejala }}">
                <button type="submit" class="btn btn-success">Kirim data gejala</button>

              </div>
            </div>
          </div>
          <!-- Page end  -->
        </div>
        <!-- Modal Edit -->
        <div class="modal fade" id="edit-note" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <div class="popup text-left">
                  <div class="media align-items-top justify-content-between">
                    <h3 class="mb-3">Product</h3>
                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                  </div>
                  <div class="content edit-notes">
                    <div class="card card-transparent card-block card-stretch event-note mb-0">
                      <div class="card-body px-0 bukmark">
                        <div class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">
                          <div class="quill-tool">
                          </div>
                        </div>
                        <div id="quill-toolbar1">
                          <p>Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p>
                        </div>
                      </div>
                      <div class="card-footer border-0">
                        <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                          <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                          <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- Wrapper End-->
  <footer class="iq-footer">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="user/html/backend/privacy-policy.html">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="user/html/backend/terms-of-service.html">Terms of Use</a></li>
              </ul>
            </div>
            <div class="col-lg-6 text-right">
              <span class="mr-1">
                <script>
                  document.write(new Date().getFullYear())
                </script>©
              </span> <a href="#" class="">POS Dash</a>.
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="admin/html/assets/js/core/libs.min.js"></script>
  <!-- Backend Bundle JavaScript -->
  <script src="user/html/assets/js/backend-bundle.min.js"></script>


  <!-- app JavaScript -->
  <script src="user/html/assets/js/app.js"></script>
  <script src="admin/html/assets/js/charts/dashboard.js"></script>

  <script>
    // disableScroll();

    function disableScroll() {
      // Get the current page scroll position
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,

        // if any scroll is attempted, set this to the previous value
        window.onscroll = function() {
          window.scrollTo(scrollLeft, scrollTop);
        };
    }



    function enableScroll() {
      window.onscroll = function() {};
    }
  </script>
  </form>
</body>

</html>