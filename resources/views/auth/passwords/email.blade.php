<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Parola Sıfırlama</title>
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

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
<!--
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>
    </form>
-->

    <div class="form-template">
       <div class="hosgeldin" style=" background: linear-gradient(202deg, #5276AC 15.44%, #DC4040 83.02%);">
           <div class="hosgeldin-title">
               <h2 class="auth-title">Hoş
                   geldiniz!</h2>
               <p class="auth-subtitle">
                   Kayıt sırasında girdiğiniz
                   verilerinizle giriş yapın.</p>
           </div>
           <div class="hosgeldin-icon">
               <img src="{{asset('images/parola.png')}}" alt="">
           </div>
           <div class="hosgeldin-logo">
               <img src="{{asset('images/logo-blue.png')}}" alt="">
           </div>
       </div>
       <form method="POST" action="{{ route('password.email') }}" class="form">
         @csrf
           <p>Lütfen kaydolurken kullandığınız e-posta adresini girin.</p>
           <div class="form-inputs">
               <div class="form-input">
                   <label for="email"></label>
                   <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Posta" autofocus>

                   @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               </div>
           </div>
           <button name="girisyap" class="btn-blue btn" type="submit">Parola Sıfırla</button>
           <p class="hesapsoru">Bir hesabın yok mu? <a href="/register" class="hesapsoru-link">Kayıt ol</a></p>
       </form>
   </div>
  </body>
</html>
