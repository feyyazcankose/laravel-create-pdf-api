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
   table{
    border: 1px solid black;
   }

</style>

</head>
<body>
  <div style="  position: absolute;
  top: 0px;
  right: 10px;
  font-size: 14px;"> 6/1/2022</div>
    <h1 style="text-align:center;font-weight: normal;  ">Kocaeli Üniversitesi</h1>
    <div style="font-weight: normal; text-align:center; font-size:20px;">Ders İntibak Başvuru</div>

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
    margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;">Fakülte: {{ $fakulte}}</div><br>
    <div style="
    margin-bottom: 0px; border-bottom: 1px solid black;  width:fit-content;">Bölüm: {{ $bolum}}</div><br>

    <div style="
    margin-bottom: 0px; border-bottom: 1px solid black;  width:fit-content;">Email: {{ $email}}</div><br>
    <div style="
    margin-bottom: 0px; border-bottom: 1px solid black; width:fit-content;" >Telefon Numarası: {{$tel}}</div>

<table style="  border-collapse: collapse;  width: 100%; border: 1px solid black;  margin-left: auto;
margin-right: auto; margin-top:70px" >
    <tr>
      <th style="  border: 1px solid black;">No</th>
      <th style="  border: 1px solid black;">Ders AKTS</th>
      <th style="  border: 1px solid black;">Ders Başarı Notu</th>

    </tr>
    <tr>
        <td style="  border: 1px solid black;">1</td>
         <td style="  border: 1px solid black;">{{ $ders_akts1 }}</td>
        <td style="  border: 1px solid black;">{{ $ders_basari1 }}</td>


    </tr>
    <tr>
        <td style="  border: 1px solid black;">2</td>
        <td style="  border: 1px solid black;">{{ $ders_akts2 }}</td>
        <td style="  border: 1px solid black;">{{ $ders_basari2 }}</td>

    </tr>
  </table>

  <div style="
  position: fixed;
right: 0px; bottom: 0px;
width: 200px;
height:110px;

padding: 5px;"> öğernci imza </div>



</body>
</html>
