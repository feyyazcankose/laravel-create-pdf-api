@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="ogrenci" class="col-md-4 col-form-label text-md-end">{{ __('Öğrenci Numarası') }}</label>

                            <div class="col-md-6">
                                <input id="ogrenci" type="text" class="form-control @error('ogrenci') is-invalid @enderror" name="ogrenci" value="{{ old('ogrenci') }}" required autocomplete="ogrenci" autofocus>

                                @error('ogrenci')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tc" class="col-md-4 col-form-label text-md-end">{{ __('TC Numarası') }}</label>

                            <div class="col-md-6">
                                <input id="tc" type="text" class="form-control @error('tc') is-invalid @enderror" name="tc" value="{{ old('tc') }}" required autocomplete="ogrenci" autofocus>

                                @error('tc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Ad Soyad') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="fakulte" class="col-md-4 col-form-label text-md-end">{{ __('Fakülte') }}</label>
                            <div class="col-md-6">
                              <select class="form-select" aria-label="Default select example" name="fakulte">
                                <option selected>Fakülte Seçiniz</option>
                                <option name="fakulte" value="Teknoloji Fakültesi">Teknoloji Fakültesi</option>
                                <option name="fakulte" value="Mühendislik Fakültesi">Mühendislik Fakültesi</option>
                                <option name="fakulte" value="Eğitim Fakültesi">Eğitim Fakültesi</option>
                              </select>
                                @error('fakulte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bolum" class="col-md-4 col-form-label text-md-end">{{ __('Bölümünüz') }}</label>
                            <div class="col-md-6">
                              <select class="form-select" aria-label="Default select example" name="bolum">
                                <option selected>Bölüm Seçiniz</option>
                                <option name="bolum" value="Bilişim Sistemleri">Bilişim Sistemleri</option>
                                <option name="bolum" value="Makina Mühendisliği">Makina Mühendisliği</option>
                                <option name="bolum" value="İnşaat Mühendisliği">İnşaat Mühendisliği</option>
                              </select>
                                @error('bolum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="sinif" class="col-md-4 col-form-label text-md-end">{{ __('Sınıf') }}</label>

                            <div class="col-md-6">
                                <input id="sinif" type="number" class="form-control @error('sinif') is-invalid @enderror" name="sinif" value="{{ old('sinif') }}" required autocomplete="sinif" min="1" max="4" >

                                @error('sinif')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dogum" class="col-md-4 col-form-label text-md-end">{{ __('Doğum Tarihi') }}</label>

                            <div class="col-md-6">
                                <input id="dogum" type="date" class="form-control @error('dogum') is-invalid @enderror" name="dogum" value="{{ old('dogum') }}" required autocomplete="dogum" >

                                @error('dogum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E Posta') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input id="rol" type="hidden" name="rol" value="1">

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Parola') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Parola Doğrula') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
