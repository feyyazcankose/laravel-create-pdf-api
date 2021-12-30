@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-6  mt-5">
            <div class="card">
                <div class="card-header">Sonuçlanmış Başvurularım</div>
                <div class="card-body">
                      <div class="mb-4">
                        Yaz Okulu başvurunuzu yapmadan önce pdf oluşturun
                        oluşturduğunuz pdf yükleyerek başvurunuzu yapın.
                      </div>
                      <a href="{{ route('sonuc') }}" class="btn btn-primary">Görüntüle</a>

                </div>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-header">Bekleyen Başvurularım</div>

                <div class="card-body">
                  <div class="mb-4">
                    Yaz Okulu başvurunuzu yapmadan önce pdf oluşturun
                    oluşturduğunuz pdf yükleyerek başvurunuzu yapın.
                  </div>
                  <a href="/basvur/cap" class="btn btn-primary">Görüntüle</a>

                </div>
            </div>
        </div>


    </div>
</div>
@endsection
