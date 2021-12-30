<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>

      <div class="container">
        <div class="row justify-content-center">
          <form action="{{ route('create_yaz') }}" method="post">
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

  </body>
</html>
