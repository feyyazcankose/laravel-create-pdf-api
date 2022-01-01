<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KOU Başvuru Oluşturucu</title>
    <link rel="shortcut icon" href="{{ asset('/images/logo-blue.png') }}" type="image/x-icon" >


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body id="home-body">

    <main class="home">

        <div class="home-details">
            <div class="small-title"> <span class="">Kocaeli Üniversitesi</span> </div>
            <h1>Kocaeli Online <br>
                PDF Oluşturucu</h1>
            <p>Onlarca pdf dosyasını tek tıkla oluştur. Tek yapman gereken kayıt olmak.</p>

            <div class="home-details-buttons">
                <button class="btn-home"><a href="/login">Giriş Yap</a> </button>
                <button class="btn-home-outline"><a href="/register">Kayıt Ol</a></button>
            </div>
        </div>

        <div class="home-image">
            <img src="{{asset('images/main.png')}}" alt="">
        </div>

    </main>

</body>

</html>
