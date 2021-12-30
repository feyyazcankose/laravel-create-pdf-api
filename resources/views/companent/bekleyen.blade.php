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
          @foreach ($users as $user)
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>Otto</td>
          </tr>
          @endforeach

        </tbody>
        </table>


    </div>
</div>


@endsection
