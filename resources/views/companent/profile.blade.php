@extends('layouts.app')
@section('content')

<article class="profilEkran">

         <div class="section-title">
             <h1 class="section-title-text">Profil</h1>
         </div>

         <span class="section-line"></span>

         <div class="profil-details">

             <div class="profil-data">
                 <div class="data-icon"><i class="fa fa-id-card-alt"></i></div>
                 <div class="data-info">
                     <span>Adınız Soyadınız</span>
                     <p>{{$name}}</p>
                 </div>
             </div>

             <div class="profil-data">
                 <div class="data-icon"><i class="far fa-envelope"></i></div>
                 <div class="data-info">
                     <span>E-Posta</span>
                     <p>{{$email}}</p>
                 </div>
             </div>

             <div class="profil-data">
                 <div class="data-icon"><i class="far fa-calendar-alt"></i></div>
                 <div class="data-info">
                     <span>Doğum tarıhınız</span>
                     <p>{{$dogum}}</p>
                 </div>
             </div>

             <div class="profil-data">
                 <div class="data-icon"><i class="fa fa-sort-numeric-up-alt"></i></div>
                 <div class="data-info">
                     <span>Öğrenci numaranız</span>
                     <p>{{$ogrenci}}</p>
                 </div>
             </div>

             <div class="profil-data">
                 <div class="data-icon"><i class="fa fa-university"></i></div>
                 <div class="data-info">
                     <span>Fakülte</span>
                     <p>{{$fakulte}}</p>
                 </div>
             </div>

             <div class="profil-data">
                 <div class="data-icon"><i class="fa fa-graduation-cap"></i></div>
                 <div class="data-info">
                     <span>Bolüm</span>
                     <p>{{$bolum}}</p>
                 </div>
             </div>
         </div>



         <img class="svg-s s2" src="./images/cone.svg" alt="image">
         <img class="svg-m m2" src="./images/cube.svg" alt="image">
         <img class="svg-l l2" src="./images/sphere.svg" alt="image">


     </article>


@endsection
