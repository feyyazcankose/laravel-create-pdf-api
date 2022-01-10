<!DOCTYPE html>
<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $email }}_cap</title>
    <style type="text/css">
  * {
      font-family: "DejaVu Sans Mono", monospace;
    },
    .l{
        border-bottom: 1px;
        margin-bottom: 20px;
    }

</style>

</head>
<body>

  <div style="  position: absolute;
    top: 0px;
    right: 10px;
    font-size: 14px;">{{date('d/m/y')}}</div>
    <h1 style="text-align:center;font-weight: normal;  ">Kocaeli Üniversitesi</h1>
    <div style="font-weight: normal; text-align:center; font-size:20px;">Çap Başvuru Formu </div>

    <h2 style=" font-weight: normal;
 ">
        Öğrenci bilgileri
	</h2>
    <div style="
    margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">TC: {{ $tc }}</div> <br>
    <div style="
    margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Ad Soyad: {{ $name }}</div> <br>
    <div style="
    margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Öğrenci No: {{ $ogrenci }}</div><br>

    <div style="
    margin-bottom: 0px; border-bottom: 1px solid black;  width:fit-content;">Email: {{ $email }}</div><br>
    <div style="
    margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;" >Telefon No: {{ $tel }}</div>
     <h2 style=" font-weight: normal;
     ">
            Eğitim bilgileri
        </h2>
        <div style="
        margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Anadal Fakültesi: {{ $fakulte }} </div> <br>
        <div style="
        margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Anadal Bölümü: {{ $bolum }} </div><br>
        <div style="
        margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Sınıf: {{ $sinif }} </div><br>
          <div style="
          margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Genel Not Ortalaması: {{ $notortalama }}</div>
          <h2 style=" font-weight: normal;
          ">Program Tercihi  </h2>
          <div style="
          margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Program Tercihi: {{ $cap }}</div>

          <div style="
           position: fixed;
  right: 0px; bottom: 0px;
  width: 200px;
  height:110px;

  padding: 5px;"> öğernci imza </div>



</body>
</html>
