@extends('templates.app') <!-- şablon uygulanması için -->
@includeif('inc.menu') <!-- istenen dosyanın eklenmesi için -->
@section('title', 'Palmet Digital') <!-- şablona bilgi göndermek için -->
<body>
  <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
<h4>Merhaba,</h4>
<h5>Palmet "Yardım Masası"" uygulamasına hoş geldiniz!</h5>
<!-- <style media="screen">
.f1{
      background-color:red;
      position:static;
      margin-left:500px;
    }
</style> -->
<style>
    select {
        /* width: 150px;
        margin: 10px; */
    }
    select:focus {
        /* min-width: 150px; */
        /* width: auto; */
    }
    div.ck1{
      width:300px;
      margin-left: 20px;
    }
</style>

<h2>Yardım Talep Formu</h2>
<form method="post">
  @CSRF

    <div class="ck1">
      <select class="form-select" aria-label="Default select example">
        <option selected>Talep Türü</option>
        <option value="swhlp">Yazılım Destek</option>
        <option value="hwhlp">Donanım Destek</option>
        <option value="swlcn">Yazılım Lisans</option>
        <option value="newsw">Yeni Yazılım</option>
        <option value="newhw">Yeni Donanım</option>
        <option value="bilgi">Bilgi Talebi</option>
      </select>
    </div>

  <br><br><br>

  Name:
  <input type="text" name="name">
  <br>
  E-mail:
  <input type="text" name="email">
  <br>
  Talebinizin açıklaması
    <textarea class="f1" name="review"
        rows="5" cols="40">
    </textarea>
  <br>
  <br>
  Talebinizin önem derecesi;
  <input type="radio" name="level"
    value="acil">Acil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="level"
    value="orta">Orta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="level"
    value="bekler">Bekleyebilir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <br>
  <br>
  <input class="f1" type="submit" name="submit"
    value="Gönder">
</form>

</body>
