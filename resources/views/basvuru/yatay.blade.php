
    @extends('layouts.app')

    @section('content')
    <div class="container mt-5">
      <div class="row justify-content-center">
        <form action="{{ route('create_yatay') }}" method="post">
          @csrf
          <div class="mb-3">
            <label for="tel">Telefon Numaranız</label>
            <input type="tel" id="tel" name="tel" value="" maxlength="10" class="form-control">
          </div>
          <div class="mb-3">
            <label for="notortalama">Genel Not Ortalaması</label>
            <input type="number" id="notortalama" name="notortalama" value="" max="4" min="0" maxlength="1" class="form-control" step="0.1">
          </div>

          <div class="mb-3">
            <label for="cap">ÇAP Program Tercihiniz</label>
            <input type="text" id="cap" name="cap" value="" class="form-control">
          </div>

          <div class="mb-3">
            <input type="submit"  name="submit" value="PDF Oluştur" class="btn btn-primary">
          </div>
        </form>
      </div>

    </div>

    <div class="container mt-5">
      @if($durum !="0")
      <div class="alert alert-success  alert-dismissible fade show" role="alert">
        <strong>PDF Yükleme işlemi: {{ $durum }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
          <div class="row justify-content-center">
              <form  action="{{ route('pdf_yukle') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="tip" value="cap">

                  <div class="mb-3">
                    <label for="pdf">PDF Yükle</label><br>
                    <input type="file" name="pdf" id="pdf" value="" class="form-control" required>
                  </div>
                  <div class="mb-3">
                    <input type="submit" name="submit" value="PDF Yükle" class="btn btn-primary">
                  </div>

              </form>
          </div>
    </div>
    @endsection
