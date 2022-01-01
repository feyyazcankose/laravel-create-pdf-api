<!DOCTYPE html>
<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tset pdf</title>
    <style type="text/css">
  * {
      font-family: "DejaVu Sans Mono", monospace;
    },


</style>

</head>
<body>
    <h1 style="text-align:center;font-weight: normal;  ">Kocaeli Üniversitesi</h1>
    <div style="font-weight: normal; text-align:center; font-size:20px;">Dikey Geçiş Başvuru </div>

    <h2 style=" font-weight: normal;
 ">
        Öğrenci bilgileri
	</h2>
    <div style="
    margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">TC: {{ $tc}}</div> <br>
    <div style="
    margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Ad Soyad: {{ $name}}</div> <br>
    <div style="
    margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Öğrenci No: {{ $ogrenci}}</div><br>
     <div style="
     margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Uyruk: TC</div><br>

    <div style="
    margin-bottom: 0px; border-bottom: 1px solid black;  width:fit-content;">Email: {{ $email}}</div><br>
    <div style="
    margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;" >Telefon No: {{ $tel }}</div>
     <h2 style=" font-weight: normal;
     ">
            Eğitim bilgileri
        </h2>
        <div style="
        margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Üniversite Adı: {{ $title}}</div> <br>
        <div style="
        margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Program: {{ $bolum}}</div><br>
        <div style="
        margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Diploma Notu: {{ $diploma }}</div><br>
          <div style="
          margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Mezun Yılı: {{ $mezun }}</div>
          <h2 style=" font-weight: normal;
          ">Sınav Merkez Tercihi  </h2>
          <div style="
          margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Merkez Tercihi: {{ $merkez }}</div>

          <div style="
           position: fixed;
  right: 0px; bottom: 0px;
  width: 200px;
  height:110px;

  padding: 5px;"> öğernci imza </div>



</body>
</html>
