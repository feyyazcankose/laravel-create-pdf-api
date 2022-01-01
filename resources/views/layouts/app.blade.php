<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div id="app">

        <main>
          <aside class="sidebar">
             <div class="sidebar-logo">
               <img src="{{ asset('/images/logo-blue.png') }}" alt="">
             </div>

             <div class="menu">
               <a href="{{ route('home') }}" class="menu-item active">
                 <i class="fa fa-bars"></i>
                 <span>Ana Ekran</span>
               </a>

               @guest
                   @if (Route::has('login'))
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                       </li>
                   @endif

                   @if (Route::has('register'))
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                       </li>
                   @endif
               @else

               @if(Auth::user()->rol==1)
               <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     Başvur
                 </a>

                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('basvur_cap') }}">ÇAP Başvurusu</a>
                     <a class="dropdown-item" href="{{ route('basvur_yaz') }}">Yaz Ders Başvurusu</a>
                     <a class="dropdown-item" href="{{ route('basvur_dgs') }}">DGS Başvurusu</a>
                     <a class="dropdown-item" href="{{ route('basvur_yatay') }}">Yatay Geçiş Başvurusu</a>
                     <a class="dropdown-item" href="{{ route('basvur_ders') }}">Ders İntikabı Başvurusu</a>




                 </div>
               </li>
               @endif

               @if(Auth::user()->rol==1)
               <li class="nav-item">

                     <a class="nav-link" href="{{ route('basvurularim') }}">
                       <i class="fa fa-book-open"></i>
                       <span>Başvurularım</span>
                     </a>


                   </li>

               @else
               <li class="nav-item">
                 <a class="nav-link" href="{{ route('rapor') }}">Raporlar</a>
                   </li>

                   <li class="nav-item">
                     <a class="nav-link" href="{{ route('kullanici') }}">Kullanıcılar</a>
                       </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('basvuru') }}">Başvurular</a>
                     </li>
               @endif


                   <li class="nav-item dropdown">
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           {{ Auth::user()->name }}
                       </a>

                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               {{ __('Çıkış Yap') }}
                           </a>



                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                               @csrf
                           </form>

                       </div>
                   </li>
               @endguest
           </aside>



            @yield('content')
        </main>
    </div>

</body>
</html>
