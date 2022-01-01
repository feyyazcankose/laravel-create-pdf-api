
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
                <h1 class="section-title-text">Yatay Geçiş Başvurusu!</h1>
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
            <form action="{{ route('create_yatay') }}" method="post">
              @csrf
              <div class="my-5 ">
                <label for="">Okulunuz ve Kişisel Bilgileriniz</label>
              </div>
              <div class="mb-3">
                <label for="tel">Telefon Numaranız</label>
                <input input-100 type="tel" id="tel" name="tel" value="" maxlength="10" class="input input-100" required>
              </div>
              <div class="mb-3">
                <label for="notortalama">Genel Not Ortalaması</label>
                <input input-100 type="number" id="notortalama" name="notortalama" value="" max="4" min="0" maxlength="1" class="input input-100" step="0.1" required>
              </div>

              <div class="mb-3">
                <label for="giris_yil">Giriş Yılı</label>
                <input input-100 type="number" id="giris_yil" name="giris_yil" value="2021"  maxlength="1" class="input input-100" required>
              </div>


              <div class="my-5 ">
                <label for="">Yatay Geçiş Yapılacak Program Bilgileri</label>
              </div>

              <div class="mb-3">
                <label for="fakulte">Fakülte</label>
                <input input-100 type="text" id="fakulte" name="fakulte" value="" class="input input-100" required>
              </div>

              <div class="mb-3">
                <label for="bolum">Bölüm</label>
                <input input-100 type="text" id="bolum" name="bolum" value="" class="input input-100" required>
              </div>

              <div class="mb-3">
                <label for="taban">Taban Puanı</label>
                <input input-100 type="number" id="taban" name="taban" value="180" class="input input-100" required>
              </div>

              <div class="mb-3">
                <input input-100 type="submit"  name="submit" value="PDF Oluştur" class="btn-submit bg-purple">
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
              <input input-100 type="hidden" name="tip" value="yatay">

              <div class="mb-5 text-center">
                  <img class="upload-image" src="{{asset('images/upload_mor.svg')}}" alt="">
                  <p class="my-3">Dikkat Bu alandan oluşturulan başvurular Yatay Geçiş Başvurusu için geçerlidir. Lütfen oluşturduğunuz başvuru dosyasını imzalayıp yükleyiniz.
                  </p>

                  <div class="row m-5">
                      <div class="col-md-6">
                        <input type="file" id="pdf" name="pdf" hidden required/>
                        <label for="pdf" class="btn-outline btn-upload">PDF Yükle</label>
                      </div>
                      <div class="col-md-5">
                        <input input-100 type="submit" name="submit" value="Başvuru Oluştur" class="btn-outline btn-upload">

                      </div>
                  </div>


             </div>
            </form>
          </div>


        </div>




    </section>

    @endsection
