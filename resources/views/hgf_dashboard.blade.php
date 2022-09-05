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

 <div class="accordion" id="accordionExample">

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Power Plants
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <!-- <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
        <strong>Baymina</strong><br>
        <strong>Ales</strong><br>
        <strong>Delta</strong>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="heading1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
        NGD Companies
      </button>
    </h2>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <!-- <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->

        <!-- <strong>İzgaz</strong><br> -->
        
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading11">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
            <table class="table table-bordered"> 
            <th><strong>İzgaz</strong></th><th><strong>dfgdfg</strong></th>
            </table>
            </button>
          </h2>
          <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#heading1">
            <div class="accordion-body">
              <!-- <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
              <strong>Alikahya RMS/A</strong><br>
              <strong>Batı RMS/A</strong>
            </div>
          </div>
        </div>
       
        <!-- <strong>İzgaz</strong><br> -->

        <!-- <strong>Palgaz</strong><br> -->

        <div class="accordion-item">
          <h2 class="accordion-header" id="heading12">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
              <strong>Palgaz</strong>
            </button>
          </h2>
          <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#heading1">
            <div class="accordion-body">
              <!-- <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
              <strong>Pelitli RMS/A</strong><br>
              <strong>Bilişim RMS/A</strong>
            </div>
          </div>
        </div>

        <!-- <strong>Palgaz</strong><br> -->

        <!-- <strong>Palen</strong><br> -->

        <div class="accordion-item">
          <h2 class="accordion-header" id="heading13">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
              <strong>Palen</strong>
            </button>
          </h2>
          <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#heading1">
            <div class="accordion-body">
              <!-- <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
              <strong>Erzurum RMS/A</strong><br>
              <strong>Aşkale RMS/A</strong>
            </div>
          </div>
        </div>

        <!-- <strong>Palen</strong><br> -->




      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="heading2">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
        Offices
      </button>
    </h2>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <!-- <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
        <strong>Palmet QH Office</strong><br>
        <strong>Palgaz Customer Services Office</strong><br>
        <strong>İzgaz Customer Services Office</strong>
      </div>
    </div>
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