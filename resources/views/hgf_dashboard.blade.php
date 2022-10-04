<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style type="text/css">
body {
-moz-transform: scale(0.8, 0.8); /* Moz-browsers */
zoom: 0.8; /* Other non-webkit browsers */
zoom: 80%; /* Webkit browsers */
}
#headingOne1 {
-moz-transform: scale(0.5, 0.5); /* Moz-browsers */
zoom: 0.5; /* Other non-webkit browsers */
zoom: 50%; /* Webkit browsers */
}
#headingOne {
  font-size: 40px;
}
      </style>
<body>
<form method="post">
  @CSRF
<div class="row">
    <div class="col text-left"><b>&nbsp;&nbsp;&nbsp;&nbsp;HGF DASHBOARD</b></div>
    <div class="col text-right"><b>First Date&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date1"></b><b>&nbsp;&nbsp;&nbsp;&nbsp;Last Date&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date2">&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="submit" name="list" id="list" value="  List  "></div>
    <!-- <div class="col text-left"><b>Last Date&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date2">&nbsp;&nbsp;&nbsp;&nbsp;</b></div> -->
    <div class="col text-right"><button type="button" class="btn btn-light">Exit</button></div>
 </div>
</form>

 <div class="row">
    <div class="col text-left"><b>Tüketim Noktası</b></div>
    <div class="col text-left"><b>Tüketim</b></div>
    <div class="col text-left"><b>Tüketim Bütçesi</b></div>
    <div class="col text-left"><b>Taşıma</b></div>
    <div class="col text-left"><b>Taşıma Bütçesi</b></div>
 </div>







  <?php
  $date1 = $date2 = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $date1 = $_POST["date1"];
          $date2 = $_POST["date2"];
          // $email = test_input($_POST["email"]);
          // $review = test_input($_POST["review"]);
          // $level = test_input($_POST["level"]);
        }
        // echo $date;
  ?>
  {{$date1}}    {{$date2}}
  </body>
</html>
