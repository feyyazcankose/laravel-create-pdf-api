@extends('layouts.app')

@section('content')
<style>
  body{
    background-color:white;
  }
  h3{
    color:#2C2D30;
  }
  .card-body{
    color:#2C2D30;

  }
</style>
<div class="container">
    <div class="row ">


        <div class="col-md-6 mt-5 ml-3">
            <h3 class="text-center">PDF Analiz Raporu</h3>
            <canvas id="pdf"></canvas>
        </div>

        <div class="col-md-4 mt-5 ">
          <h3 class="text-center">Kullanıcı Analiz Raporu</h3>
            <canvas id="kullanici"></canvas>
        </div>



    </div>

    <div class="row my-5">
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

<script>
  var ctx= document.getElementById('pdf').getContext('2d');
  var chart = new Chart(ctx,{
    type: 'bar',
    data:{
      labels:['Onaylanan Başvuru','Bekleyen Başvuru','Reddedilen Başvuru','Toplam Başvuru'],
      datasets:[{
        label: 'Yüklenen PDF',
        backgroundColor: ['#85B9D6','#B7D4E8','#B7E3EA','#B7BBE7'],
        data: [{{ $onay}}, {{$bekleyen}},{{$red}},{{$toplam_pdf}}],
        borderColor:'#ffffff',
        fill:false,

      }]

    },

  });


  var ctx= document.getElementById('kullanici').getContext('2d');
  var chart = new Chart(ctx,{
    type: 'pie',
    data:{
      labels:['Toplam Kullanıcı'],
      datasets:[{
        label: 'Toplam Kullanıcı',
        backgroundColor: ['#93F187','#B7D4E8','#B7E3EA','#B7BBE7'],
        data: [{{$kullanici}}],
        borderColor:'#ffffff',
        fill:false,

      }]

    },

  });


</script>

@endsection
