@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      
      @for($i = 0; $i < count($data); $i++)
      <div class="col-md-6  mt-5">
          <div class="card">
              <div class="card-body">
                    <div class="mb-4">
                      {{ $data['title'][$i] }}
                    </div>
                    <a href="{{route($data['rote'][$i])}}" class="btn btn-primary">Görüntüle</a>
              </div>
          </div>
      </div>
      @endfor
    </div>
</div>
@endsection
