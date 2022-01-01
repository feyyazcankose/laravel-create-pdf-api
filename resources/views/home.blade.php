@extends('layouts.app')

@section('content')

<article class="anaEkran">

      <div class="section-title">
        <h1 class="section-title-text">Hemen Başvur!</h1>
      </div>

      <span class="section-line"></span>


      <a href="{{route($data['rote2'][1])}}" class="btn-success btn-bas">
        {{ $data['title'][1] }}
      </a>

      <a href="{{route($data['rote2'][0])}}" class="btn-success btn-gon">
        {{ $data['title'][0] }}
      </a>
      <div class="bas-cards">

        @for($i = 0; $i < count($data['basvurular']); $i++)

        @if($data['rol']==2)
        <a href="basvuru/listele/{{ $data['rote'][$i] }}" class="bas-card card-{{$i}}">
        @else
        <a href="{{ route($data['rote'][$i]) }}" class="bas-card card-{{$i}}">
        @endif
           <div class="card-details">
            <h3 class="card-title">{{ $data['basvurular'][$i] }}</h3>
            <i class="card-icon {{ $data['icon'][$i]  }}"></i>
          </div>

          <div class="card-indicator">
            <span href="#" class="line1"></span>
            <span href="#" class="line2"></span>
          </div>

        </a>


          @endfor
        </div>

      <img class="svg-s" src="./images/SuperToroid-2.svg" alt="image">
      <img class="svg-m" src="./images/SuperToroid-1.svg" alt="image">
      <img class="svg-l" src="./images/SuperToroid-3.svg" alt="image">


    </article>


@endsection
