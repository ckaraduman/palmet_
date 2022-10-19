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
            HelpDesk
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{route('page1')}}">Help Request</a></li>
            <li><a class="dropdown-item" href="#">Request</a></li>
            <li><a class="dropdown-item" href="#">Product/Service Request</a></li>
            <li><a class="dropdown-item" href="#">Suggestions</a></li>
            <li><a class="dropdown-item" href="#">Notifications</a></li>
            <li><a class="dropdown-item" href="#">Complaints</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Routine
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{route('page1')}}" target="_blank">Contact</a></li>
            <li><a class="dropdown-item" href="{{route('WebSites')}} target="_blank">WebSites</a></li>
            <li><a class="dropdown-item" href="#">Guide</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Action
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{route('page1')}}">HGF DashBoard</a></li>
            <li><a class="dropdown-item" href="#">Consumption Point</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Asset Management
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{route('page1')}}">IT HW Asset</a></li>
            <li><a class="dropdown-item" href="#">IT SW Asset</a></li>
            <li><a class="dropdown-item" href="#">Resources</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Documentation
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{route('page1')}}">Project</a></li>
            <li><a class="dropdown-item" href="#">Documents</a></li>
            <li><a class="dropdown-item" href="#">References</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            HelpDesk
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{route('page1')}}">Help Request</a></li>
            <li><a class="dropdown-item" href="#">Request</a></li>
            <li><a class="dropdown-item" href="#">Product/Service Request</a></li>
            <li><a class="dropdown-item" href="#">Suggestions</a></li>
            <li><a class="dropdown-item" href="#">Notifications</a></li>
            <li><a class="dropdown-item" href="#">Complaints</a></li>
          </ul>
        </li>

      </ul>
    </div>

  </div>
</nav>
</html>
