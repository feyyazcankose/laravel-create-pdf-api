@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-6  mt-5">
            <div class="card">
                <div class="card-body">
                      <div class="mb-4">
                        Sonuçlanmış Başvurularını Görüntüle
                      </div>
                      <a href="{{ route('sonuc') }}" class="btn btn-primary">Görüntüle</a>

                </div>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="card">

                <div class="card-body">
                  <div class="mb-4">
                    Bekleyen Başvurularını Görüntüle
                  </div>
                  <a href="{{ route('bekleme') }}" class="btn btn-primary">Görüntüle</a>

                </div>
            </div>
        </div>


    </div>
</div>
@endsection
