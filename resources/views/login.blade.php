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

<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-4">
                <div class="card-header pb-0 text-center bg-transparent">
                  <img src="{{ asset('img/product/fooddish.png') }}" class="navbar-brand-img h-30 w-30 mb-2" alt="main_logo">
                  <h3 class="font-weight-bolder text-center">Food<span class="text-warning">Dish</span></h3>
                  <p class="mb-0 text-left text-lead">Selamat Datang Kembali! Masukkan Email dan Kata Sandi</p>
                </div>
                <div class="card-body">
                  @if(session()->has('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="flash">
                      {{ session()->get('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                    </div>
                  @endif

                  @error('error')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="flash">
                    Credentials Is Not Match
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                  </div>
                  @enderror

                  <form role="form" action="/login" method="POST">
                    @csrf
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" name="email">
                      @error('email')
                          <p class="text-sm text-danger mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label>Kata Sandi</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Kata Sandi" aria-label="Password" aria-describedby="password-addon" name="password">
                      @error('password')
                          <p class="text-sm text-danger mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-warning w-100 mt-4 mb-0 text-white">MASUK</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-warning font-weight-bold">Buat akun</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


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