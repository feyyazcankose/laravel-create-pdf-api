@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-6  mt-5">
            <div class="card">
                <div class="card-body">
                      <div class="mb-4">
                        Bekleyen Başvurular: {{ $bekleyen }}
                      </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="card">

                <div class="card-body">
                  <div class="mb-4">
                    Onaylanmış Başvurular: {{ $onay }}
                  </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-5">
            <div class="card">

                <div class="card-body">
                  <div class="mb-4">
                    Reddedilmiş Başvurular: {{ $red }}
                  </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-5">
            <div class="card">

                <div class="card-body">
                  <div class="mb-4">
                    Toplam Başvurular: {{ $toplam_pdf }}
                  </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-5">
            <div class="card">

                <div class="card-body">
                  <div class="mb-4">
                    Toplam Kullanıcı Sayısı: {{ $kullanici }}
                  </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
