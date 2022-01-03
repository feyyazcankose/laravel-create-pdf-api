
    @extends('layouts.app')

    @section('content')
    <style>
    body{
      background: #212024;
      section{
        width: 100%;
      }
    }
    </style>

    <section style="width:100%;">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-6">
            <div class="section-title bas-title">
                <h1 class="section-title-text">Çift Andal Başvuru!</h1>
            </div>
            <hr class="section-line  bas-line">
          </div>
          <div class="col-md-6">
            <a href="{{ route('basvuru') }}" class="btn-outline btn-bas">
                <i class="fas fa-sign-in-alt btn-icon"></i>
                Başvurlar
            </a>
          </div>
        </div>



        <div class="row ">


          <div class="col-md-6">
            <form action="{{ route('create_cap') }}" method="post">
              @csrf
              <div class="mb-3">
                <label for="tel">Telefon Numaranız</label>
                <input input-100 type="tel" id="tel" name="tel" value="" maxlength="10" class="input input-100">
              </div>
              <div class="mb-3">
                <label for="notortalama">Genel Not Ortalaması</label>
                <input input-100 type="number" id="notortalama" name="notortalama" value="" max="4" min="0" maxlength="1" class="input input-100" step="0.01">
              </div>

              <div class="mb-3">
                <label for="cap">ÇAP Program Tercihiniz</label>
                <input input-100 type="text" id="cap" name="cap" value="" class="input input-100">
              </div>

              <div class="mb-3">
                <input input-100 type="submit"  name="submit" value="PDF Oluştur" class="btn-submit bg-blue">
              </div>
            </form>
          </div>


          <div class="col-md-6">
            @if($durum !="0")
            <div class="alert alert-success  alert-dismissible fade show" role="alert">
              <strong>PDF Yükleme işlemi: {{ $durum }}</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form  action="{{ route('pdf_yukle') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input input-100 type="hidden" name="tip" value="cap">

              <div class="mb-5 text-center">
                  <img class="upload-image" src="{{asset('images/upload_blue.svg')}}" alt="">
                  <p class="mt-3">Dikkat Bu alandan oluşturulan başvurular Çift Anadal Programı için geçerlidir. Lütfen oluşturduğunuz başvuru dosyasını imzalayıp yükleyiniz.
                  </p>
                </div>

                <div class="row m-5">
                    <div class="col-md-6">
                      <input type="file" id="pdf" name="pdf" hidden required/>
                      <label for="pdf" class="btn-outline btn-upload">PDF Yükle</label>
                    </div>
                    <div class="col-md-5">
                      <input input-100 type="submit" name="submit" value="Başvuru Oluştur" class="btn-outline btn-upload">

                    </div>
                </div>

            </form>
          </div>


        </div>




    </section>

    @endsection

    <section>

      

    </section>
