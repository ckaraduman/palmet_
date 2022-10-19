<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Palmet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.palmet.com">Palmet</a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Yardım Masası
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{route('help')}}">Yardım İstekleri</a></li>
            <li><a class="dropdown-item" href="#">Talepler</a></li>
            <li><a class="dropdown-item" href="#">Ürün/Hizmet Talebi</a></li>
            <li><a class="dropdown-item" href="#">Öneriler</a></li>
            <li><a class="dropdown-item" href="#">Bildirimler</a></li>
            <li><a class="dropdown-item" href="#">Şikayetler</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Rehber Hizmetler
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{route('page1')}}" target="_blank">İletişim Bilgileri</a></li>
            <li><a class="dropdown-item" href="{{route('WebSites')}}" target="_blank">Web Sitelerimiz</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tüketim Verileri
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{route('page1')}}">Gaz Akış Tabloları</a></li>
            <li><a class="dropdown-item" href="#">Tüketim Noktaları</a></li>
            <li><a class="dropdown-item" href="#">Ayarlar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kaynak Yönetimi
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{route('page1')}}">Kaynaklar</a></li>
            <li><a class="dropdown-item" href="#">Kaynak Kullanımı</a></li>
            <li><a class="dropdown-item" href="#">Ayarlar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Varlık Yönetimi
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{route('page1')}}">IT-Donanım Varlıkları</a></li>
            <li><a class="dropdown-item" href="#">IT-Yazılım Varlıkları</a></li>
            <li><a class="dropdown-item" href="#">Diğer Kaynaklar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kütüphane
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{route('page1')}}">Projeler</a></li>
            <li><a class="dropdown-item" href="#">Belgeler</a></li>
            <li><a class="dropdown-item" href="#">Referanslar</a></li>
          </ul>
        </li>

      </ul>
    </div>

  </div>
</nav>
</html>
