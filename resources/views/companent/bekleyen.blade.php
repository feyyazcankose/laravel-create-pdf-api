@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Basvuru Tipi</th>
            <th scope="col">Başvuru Durumu</th>
            <th scope="col">Başvuru Tarihi</th>
            <th scope="col">Başvuru Dosyası</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($basvurular as $basvuru)
          <tr>
            <th scope="row">{{ strtoupper($basvuru->basvuru_tipi) }}</th>
            <td>{{ $basvuru->_durum}}</td>
            <td>{{ $basvuru->created_at }}</td>
            <td> <a href="{{ asset($basvuru->url)}}" target="_blank">Dosya Görüntüle</a></td>
          </tr>
          @endforeach

        </tbody>
        </table>


    </div>
</div>


@endsection
