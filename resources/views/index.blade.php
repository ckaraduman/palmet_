@extends('templates.app') <!-- şablon uygulanması için -->
@includeif('inc.menu') <!-- istenen dosyanın eklenmesi için -->
@section('title', 'Palmet Digital') <!-- şablona bilgi göndermek için -->

<!-- Tek satir php kullanimi *********************************************** -->
@php($number1=0)
<!-- *********************************************************************** -->

<!-- Standart If, Else If ve Else kullanımları ***************************** -->
<!-- @if ($number1>5)
    Sayı 5 ten büyük
    @elseif ($number1<5)
    Sayı 5 ten küçük
    @else
    Sayı 5 e eşit
@endif -->
<!-- *********************************************************************** -->

<!-- Kısa If kullanımı ***************************************************** -->
<!-- {{$number1==5 ? '5 e eşit' : 'değil'}} -->
<!-- *********************************************************************** -->
<!-- Swich - Case kullanımı ************************************************ -->
@switch($number1)
  @case(0)
    Sayı 0'a eşit
  @break
  @case(1)
    Sayı 1'e eşit
  @break
  @default
    Sayı 0 veya 1 değil
  @endswitch
<!-- *********************************************************************** -->
<hr> <!-- çizgi çiz -->
 <!-- for kullanımı ******************************************************** -->
@for($i=0; $i<=10; $i++)
  {{$i}}
@endfor
<!-- *********************************************************************** -->
<br>
<!-- dizi tanımı ve dizi elemanını yazdırma ******************************** -->
@php($dizi=['cem','hanife','şevval','zeynep'])
{{$dizi[3]}}
 <!-- ********************************************************************** -->
<br>
<!-- foreach ile dizilerin elemanlarını yazdırma *************************** -->
@foreach($dizi as $key)
{{$key}}
@endforeach
<!-- *********************************************************************** -->
<br>
<!-- while ile döngü kullanımı ********************************************* -->
@php($number=0)
@while($number<10)
  {{$number}}
  @php($number++)
@endwhile
<!-- *********************************************************************** -->
<br>
<!-- dizi elemanları varsa dizi elelmanları yazdırılır yoksa mesaj yazılır * -->
@php($dizi1=[])
@forelse($dizi1 as $key) <!--$dizi kullanılırsa elemanlar geliyor! -->
  <li>{{$key}}</li>
  @empty
  Dizi boş!
@endforelse
<!-- *********************************************************************** -->
<br><hr>
<!-- hanife elemanına gelince atlar sonrakinden yazamaya devam eder ******** -->
@foreach($dizi as $key)
    @if($key=='hanife')
      @continue
    @endif
    {{$key}}
@endforeach
<!-- *********************************************************************** -->
<br>
<!-- hanife elemanına gelince döngüyü sonlandırır ************************** -->
@foreach($dizi as $key)
    @if($key=='hanife')
      @break
    @endif
    {{$key}}
@endforeach
<!-- *********************************************************************** -->
Son çalışma -> 2022-10-04 00:12 Cem.