@extends('templates.app') <!-- şablon uygulanması için -->
@includeif('inc.menu') <!-- istenen dosyanın eklenmesi için -->
@section('title', 'Palmet Digital') <!-- şablona bilgi göndermek için -->
<body>
  <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
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


<h2>Yardım Talep Formu</h2>
<form method="post">
  @CSRF
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
