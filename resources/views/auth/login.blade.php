<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  </head>
  <body>

    <div class="form-template mt-5">
      <div class="hosgeldin">
          <div class="hosgeldin-title">
              <h2 class="auth-title">Hoş
                  geldiniz!</h2>
              <p class="auth-subtitle">
                  Kayıt sırasında girdiğiniz
                  verilerinizle giriş yapın.</p>
          </div>

          <div class="hosgeldin-icon">
              <img src="{{asset('images/login.png')}}" alt="">
          </div>

          <div class="hosgeldin-logo">
              <img src="{{asset('images/logo-blue.png')}}" alt="">
          </div>

      </div>





      <form method="POST" action="{{ route('login') }}" class="form">
        @csrf
          <div class="form-inputs">
              <div class="form-input">
                  <label for="email"></label>
                  <!-- <img class="input-icon" src="./images/Icons/search.png" alt=""> -->
                  <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-posta">

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

              </div>

              <div class="form-input">
                  <label for="password"></label>
                  <input id="password" type="password" placeholder="Parola" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>


              @if (Route::has('password.request'))
                  <a class="passowrd" href="{{ route('password.request') }}">
                      <i class="fas fa-unlock-alt"></i> Şifremi unuttum!
                  </a>
              @endif

          </div>



          <button name="girisyap" type="submit" class="btn-blue btn">Giriş
              yap</button>

          <p class="hesapsoru">Bir hesabın yok mu? <a href="/register" class="hesapsoru-link">Kayıtol.</a>
          </p>

      </form>



  </div>

  </body>
</html>
