@extends('layouts.app')
@section('content')



<!-- Full screen modal -->








<div class="container">
  <div class="text-center my-5">
      <h1 class="text-center">{{ strtoupper($basvurular['basvuru_tipi']) }} Başvuruları</h1>
  </div>

  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Sonuçlanmamış</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Onaylandı</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Reddedildi</button>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Basvuran</th>
              <th scope="col">Basvuru Tipi</th>
              <th scope="col">Başvuru Durumu</th>
              <th scope="col">Başvuru Tarihi</th>
              <th scope="col">Başvuru Dosyası</th>
              <th scope="col">Başvuru Düzenle</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($basvurular['bekleme'] as $basvuru)
            <tr>
              <th scope="row">{{ strtoupper($basvuru->ogrenci_name) }}</th>
              <th >{{ strtoupper($basvuru->basvuru_tipi) }}</th>
              <td>
                  <form action="{{ route('guncelle') }}" method="post" id="durum-form{{ $basvuru->_id }}">
                    @csrf
                    <input type="hidden" name="pdfid" value="{{ $basvuru->_id }}">
                    <select class="input" name="durum">
                      @if($basvuru->durum==1)
                        <option value="1" name="durum" selected>Beklemede</option>
                        <option value="2" name="durum" >Onaylandı</option>
                        <option value="3" name="durum" >Reddedildi</option>
                      @elseif($basvuru->durum==2)
                        <option value="1" name="durum" >Beklemede</option>
                        <option value="2" name="durum" selected>Onaylandı</option>
                        <option value="3" name="durum" >Reddedildi</option>
                      @else
                        <option value="1" name="durum" >Beklemede</option>
                        <option value="2" name="durum" >Onaylandı</option>
                        <option value="3" name="durum" selected>Beklemede</option>
                      @endif

                    </select>
                  </form>

              </td>

              <td>{{ $basvuru->created_at }}</td>
              <td><a href="{{ asset($basvuru->url)}}" target="_blank">Dosya Görüntüle</a></td>
              <td>
                <a href="#" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('durum-form{{ $basvuru->_id }}').submit();" >Güncelle</a>
              </td>
            </tr>
            @endforeach

          </tbody>
          </table>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Basvuran</th>
            <th scope="col">Basvuru Tipi</th>
            <th scope="col">Başvuru Durumu</th>
            <th scope="col">Başvuru Tarihi</th>
            <th scope="col">Başvuru Dosyası</th>
            <th scope="col">Başvuru Düzenle</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($basvurular['onay'] as $basvuru)
          <tr>
            <th scope="row">{{ strtoupper($basvuru->ogrenci_name) }}</th>
            <th >{{ strtoupper($basvuru->basvuru_tipi) }}</th>
            <td>
                <form action="{{ route('guncelle') }}" method="post" id="durum-form{{ $basvuru->_id }}">
                  @csrf
                  <input type="hidden" name="pdfid" value="{{ $basvuru->_id }}">
                  <select class="input" name="durum">
                    @if($basvuru->durum==1)
                      <option value="1" name="durum" selected>Beklemede</option>
                      <option value="2" name="durum" >Onaylandı</option>
                      <option value="3" name="durum" >Reddedildi</option>
                    @elseif($basvuru->durum==2)
                      <option value="1" name="durum" >Beklemede</option>
                      <option value="2" name="durum" selected>Onaylandı</option>
                      <option value="3" name="durum" >Reddedildi</option>
                    @else
                      <option value="1" name="durum" >Beklemede</option>
                      <option value="2" name="durum" >Onaylandı</option>
                      <option value="3" name="durum" selected>Beklemede</option>
                    @endif

                  </select>
                </form>

            </td>

            <td>{{ $basvuru->created_at }}</td>
            <td><a href="{{ asset($basvuru->url)}}" target="_blank">Dosya Görüntüle</a></td>
            <td>
              <a href="#" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('durum-form{{ $basvuru->_id }}').submit();" >Güncelle</a>
            </td>
          </tr>
          @endforeach

        </tbody>
        </table>





    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Basvuran</th>
            <th scope="col">Basvuru Tipi</th>
            <th scope="col">Başvuru Durumu</th>
            <th scope="col">Başvuru Tarihi</th>
            <th scope="col">Başvuru Dosyası</th>
            <th scope="col">Başvuru Düzenle</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($basvurular['red'] as $basvuru)
          <tr>
            <th scope="row">{{ strtoupper($basvuru->ogrenci_name) }}</th>
            <th >{{ strtoupper($basvuru->basvuru_tipi) }}</th>
            <td>
                <form action="{{ route('guncelle') }}" method="post" id="durum-form{{ $basvuru->_id }}">
                  @csrf
                  <input type="hidden" name="pdfid" value="{{ $basvuru->_id }}">
                  <select class="input" name="durum">
                    @if($basvuru->durum==1)
                      <option value="1" name="durum" selected>Beklemede</option>
                      <option value="2" name="durum" >Onaylandı</option>
                      <option value="3" name="durum" >Reddedildi</option>
                    @elseif($basvuru->durum==2)
                      <option value="1" name="durum" >Beklemede</option>
                      <option value="2" name="durum" selected>Onaylandı</option>
                      <option value="3" name="durum" >Reddedildi</option>
                    @else
                      <option value="1" name="durum" >Beklemede</option>
                      <option value="2" name="durum" >Onaylandı</option>
                      <option value="3" name="durum" selected>Reddedildi</option>
                    @endif

                  </select>
                </form>

            </td>

            <td>{{ $basvuru->created_at }}</td>
            <td><a href="{{ asset($basvuru->url)}}" target="_blank">Dosya Görüntüle</a></td>
            <td>
              <a href="#" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('durum-form{{ $basvuru->_id }}').submit();" >Güncelle</a>
            </td>
          </tr>
          @endforeach

        </tbody>
        </table>


    </div>
  </div>


</div>


@endsection
