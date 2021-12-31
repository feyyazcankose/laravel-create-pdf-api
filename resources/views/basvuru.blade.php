@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">

      @for($i = 0; $i < count($data['basvurular']); $i++)

          <div class="col-md-6  mt-5">
            <div class="card">
                <div class="card-body">
                      <div class="mb-4">
                        {{ $data['basvurular'][$i] }}
                      </div>
                      @if($data['rol']==2)
                      <a href="basvuru/listele/{{ $data['rote'][$i] }}" class="btn btn-primary">Başvuru {{ $data['button'] }}</a>
                      @else
                      <a href="{{ route($data['rote'][$i]) }}" class="btn btn-primary">Başvuru {{ $data['button'] }}</a>
                      @endif
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
