@extends('layouts.app')
@section('content')

<div class="container">
  <div class="text-center my-5">
      <h1 class="text-center">Kullanıcılar</h1>
  </div>
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Öğrenci Numarası</th>
              <th scope="col">Adı Soyadı</th>
              <th scope="col">Fakültesi</th>
              <th scope="col">Bölümü</th>
              <th scope="col">Sınıfı</th>
              <th scope="col">Başvuru Sayısı</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kullanicilar as $kullanici)
            <tr>
              <th >{{ strtoupper($kullanici->ogrenci) }}</th>
              <td>{{ $kullanici->name}}</td>
              <td>{{ $kullanici->fakulte }}</td>
              <td>{{ $kullanici->bolum }}</td>
              <td>{{ $kullanici->sinif }}</td>
              <td>{{ $kullanici->basvuru_sayisi }}</td>
            </tr>
            @endforeach

          </tbody>
          </table>
      </div>
</div>


@endsection
