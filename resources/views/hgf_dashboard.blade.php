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
.tablo1{
  width: 100%;
  border:1px solid black;
}
.style1{
  border:1px solid black;
}
/* .gas{
  position: absolute;
  left: 100px;
  top: 150px; */
} */
      </style>
<body>
<form method="post">
  @CSRF
  <table class="tablo1">
    <tr>
      <td width="20%"></td>
      <td align="center" width="5%">First Date</td>
      <td align="center" width="8%"><input type="date" name="date1"></td>
      <td width="4%"></td>
      <td align="center" width="5%">Last Date</td>
      <td align="center" width="8%"><input type="date" name="date2"></td>
      <td align="center" width="10%"><input type="submit" name="list" id="list" value="  List  "></td>
      <td width="40%"></td>
    </tr>
  </table>
<!-- <div class="row">
    <div class="col text-left"><b>&nbsp;&nbsp;&nbsp;&nbsp;HGF DASHBOARD</b></div>
    <div class="col text-right"><b>First Date&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date1"></b><b>&nbsp;&nbsp;&nbsp;&nbsp;Last Date&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date2">&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="submit" name="list" id="list" value="  List  "></div> -->
    <!-- <div class="col text-left"><b>Last Date&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date2">&nbsp;&nbsp;&nbsp;&nbsp;</b></div> -->
    <!-- <div class="col text-right"><button type="button" class="btn btn-light">Exit</button></div>
 </div> -->
</form>
 <!-- <style>
 table, th, td {
   border: 1px solid black;
 }
 </style> -->

<table style="width:100%">
  <tr>
    <td style="width:20%" align="center">Tüketim Noktası</td>
    <td style="width:20%" align="center">Tüketim</td>
    <td style="width:20%" align="center">Tüketim Bütçesi</td>
    <td style="width:20%" align="center">Taşıma</td>
    <td style="width:20%" align="center">Toplam</td>
  <!-- <th style="width:400px"><h6><b>Tüketim Noktası</b></h6></th>
  <th style="width:400px"><h6><b>Tüketim</b></h6></th>
  <th style="width:400px"><h6><b>Tüketim Bütçesi</b></h6></th>
  <th style="width:400px"><h6><b>Taşıma</b></h6></th>
  <th style="width:400px"><h6><b>Taşıma Bütçesi</b></h6></th> -->
  </tr>
  <tr>
    <td align="left"><h6 onclick="change1(this)">+ Power Generation Plants</h6></td>
  </tr>
  <tr>
    <td id="baymina" align="left">&nbsp;&nbsp;&nbsp;&nbsp;Baymina</td>
  </tr>
  <tr>
    <td id="delta" align="left">&nbsp;&nbsp;&nbsp;&nbsp;Delta</td>
  </tr>
  <tr>
    <td id="ales" align="left">&nbsp;&nbsp;&nbsp;&nbsp;Ales</td>
  </tr>
  <tr>
    <td id="gas" align="left">+ Natural Gas Distribution Companies</td>
  </tr>
</table>

<script>
function change1(id) {
  if (id.innerHTML=="+ Power Generation Plants") {
      id.innerHTML = "- Power Generation Plants"
      document.getElementById("baymina").style.visibility = "visible";
      document.getElementById("delta").style.visibility = "visible";
      document.getElementById("ales").style.visibility = "visible";
      document.getElementById("gas").style.top = "180px";
  } else if (id.innerHTML == "- Power Generation Plants") {
    id.innerHTML = "+ Power Generation Plants";
    document.getElementById("baymina").style.visibility = "hidden";
    document.getElementById("delta").style.visibility = "hidden";
    document.getElementById("ales").style.visibility = "hidden";
    document.getElementById("gas").style.position = "absolute";
    document.getElementById("gas").style.top = "90px";
  }
}
</script>

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
