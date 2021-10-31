<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/product/fooddish.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/product/fooddish.png') }}">
  <title>
    FoodDish
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
</head>
<body>
    
  <section class="min-vh-100 mb-6">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-10 m-3 border-radius-lg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <img src="{{ asset('img/product/fooddish.png') }}" class="navbar-brand-img h-20 w-20" alt="main_logo">
            <h3 class="mb-2 mt-2">Food<span class="text-warning">Dish</span></h3>
            <p class="text-lead text-dark">Selamat datang! dan rasakan banyak keuntungannya.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center">
              <h5>Daftar</h5>
            </div>
            <div class="card-body">
              <form role="form text-left" action="/register" method="POST">
                @csrf
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Nama" aria-label="Name" aria-describedby="email-addon" name="name">
                  @error('name')
                      <p class="text-sm text-danger mt-2" id="flash">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" name="email">
                  @error('email')
                      <p class="text-sm text-danger mt-2" id="flash">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Kata Sandi" aria-label="Password" aria-describedby="password-addon" name="password">
                  @error('password')
                      <p class="text-sm text-danger mt-2" id="flash">{{ $message }}</p>
                  @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn text-white bg-warning w-100 my-4 mb-2">BUAT AKUN</button>
                </div>
                <p class="text-sm mt-3 mb-0">Sudah punya akun? <a href="{{ route('login') }}" class="text-warning font-weight-bolder">Masuk</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="{{ asset('js/core/popper.min.js') }}"></script>
  <script src="{{ asset('js/core/bootstrap.min.js') }}."></script>
  <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
    const flash = document.getElementById('flash');

    setTimeout(() => {
      flash.style.display="none";
    }, 5000);
    
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
  <script src="{{ asset('js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
  </body>
  </html>