<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>KOU Başvuru Oluşturucu</title>
    <link rel="shortcut icon" href="{{ asset('/images/logo-blue.png') }}" type="image/x-icon" >


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
  <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>


    <div class="form-template" style="height: auto;">
       <div class="hosgeldin" style="background: linear-gradient(225deg, #9379FF 0%, #5EC9FF 100%);">
           <div class="hosgeldin-title">
               <h2 class="auth-title">Hoş
                   geldiniz!</h2>
               <p class="auth-subtitle">
                   Kayıt Olup ve Şimdi Başvur!</p>
           </div>
           <div class="hosgeldin-icon" style="width: 90px;">
               <img src="{{ asset('images/plus.png')}}" alt="">
           </div>
           <div class="hosgeldin-logo" style="top:130px;">
               <img src="{{asset('images/logo-blue.png')}}" alt="">
           </div>

       </div>

       <form method="POST" action="{{ route('register') }}" class="form">
           @csrf
           <div class="form-input rows-80 form-input rows ">

          <div class="form-input row">
            <div class="col-md-6">
              <label for="ogrenci" ></label>
              <input id="ogrenci" type="text" class="input-100 input @error('ogrenci') is-invalid @enderror" name="ogrenci" value="{{ old('ogrenci') }}" required autocomplete="ogrenci" placeholder="Öğrenci Numarası" autofocus>
              @error('ogrenci')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="tc" ></label>
               <input id="tc" type="text" class="input-100 input @error('tc') is-invalid @enderror" name="tc" value="{{ old('tc') }}" required autocomplete="ogrenci" placeholder="TC Kimlik Numarası"  autofocus>

               @error('tc')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
            </div>


           </div>



           <div class="form-input row">

               <div class="col-md-6">
                 <label for="name" ></label>
                     <input id="name" type="text" class="input-100 input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Ad Soyad" autofocus>

                     @error('name')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
               </div>

               <div class="col-md-6">
                 <label for="sinif" ></label>

                     <input id="sinif" type="number" class="input-100 input @error('sinif') is-invalid @enderror" name="sinif" value="{{ old('sinif') }}" required autocomplete="sinif" min="1" max="4" placeholder="Sınıf" >

                     @error('sinif')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror

               </div>

           </div>



           <div class="form-input row">
             <div class="col-md-6">
               <label for="fakulte" ></label>
                 <select class="input" aria-label="Default select example" name="fakulte">
                   <option selected>Fakülte Seçiniz</option>
                   <option name="fakulte" value="Teknoloji Fakültesi">Teknoloji Fakültesi</option>
                   <option name="fakulte" value="Mühendislik Fakültesi">Mühendislik Fakültesi</option>
                   <option name="fakulte" value="Eğitim Fakültesi">Eğitim Fakültesi</option>
                 </select>
                   @error('fakulte')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
             </div>

              <div class="col-md-6">
                <label for="bolum" ></label>
                  <select class="input" aria-label="Default select example" name="bolum">
                    <option selected>Bölüm Seçiniz</option>
                    <option name="bolum" value="Bilişim Sistemleri">Bilişim Sistemleri</option>
                    <option name="bolum" value="Makina Mühendisliği">Makina Mühendisliği</option>
                    <option name="bolum" value="İnşaat Mühendisliği">İnşaat Mühendisliği</option>
                  </select>
                    @error('bolum')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
           </div>




           <div class="form-input row">
             <div class="col-md-6">
               <label for="dogum" ></label>

                   <input id="dogum" type="date" class="input-100 input @error('dogum') is-invalid @enderror" name="dogum" value="{{ old('dogum') }}" required autocomplete="dogum" placeholder="Doğum günü" >

                   @error('dogum')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
             </div>
             <div class="col-md-6">
               <label for="email" ></label>
                   <input id="email" type="email" class="input-100 input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Posta">

                   @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
             </div>



           </div>

           <input id="rol" type="hidden" name="rol" value="1">

           <div class="form-input row">
             <div class="col-md-6">
               <label for="password" ></label>

                   <input id="password" type="password" class="input-100 input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Parola">

                   @error('password')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
             </div>
             <div class="col-md-6">
               <label for="password-confirm" ></label>
              <input id="password-confirm" type="password" class="input-100 input" name="password_confirmation" required autocomplete="new-password" placeholder="Parola Tekrar">
             </div>
           </div>




           <div class="row mt-5 ">
               <div class="text-center">
                   <button type="submit" class="btn-blue btn">
                       {{ __('Kayıt Ol') }}
                   </button>
               </div>
               <div class="text-center">
                 <p class="hesapsoru text-center">Bir hesaba sahibim <a href="/login" class="hesapsoru-link"> Giriş yap.</a></p>
               </div>

           </div>
       </form>


</div>





  </body>
</html>
