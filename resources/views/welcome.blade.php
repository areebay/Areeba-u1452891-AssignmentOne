@extends('layouts.cardlayout')
@section('content')
@endsection

<html>
<head>
  <style>



  </style>

  <body>
@include('layouts.master')

  <div class="sidebar-logo">
    <a href="./">
      <img src="{{asset('resources/images/sidebar-logo.jpeg')}}"/>
    </a>
  </div>

  <div style="margin-left:25%; padding:1px 16px; height:900px;">
    <div class="titleOne">Welcome to Mansfield Castle</div>
    <div class="titleTwo">Mansifeld Castle is an imposing Victorian building set in 3.5 acres of picturesque
    countryside, with award winning cuisine and magnificent oak panelling throughout.</div>

<br>

      <p>Mansfield Castle Hotel has been sumptously refurbished to exceptionally high standards.
      Each the castle's 19 spacious rooms has its own distinctive character and most offer
      stunning views over the castle grounds, the Moray Firth to the south east and the Dornoch
      Firth to the north east.</p>
      <p>The castle is located in the Royal Burgh of Tain, just one hour from Inverness Airport
      and in the heart of the Highlands of Scotland.</p>
      <p>Tain has something for everyone. It is steeped in history with stunning scenery,
      magnificent architecture, abundant wildlife and plenty of sporting and leisure activities.</p>
      <p>Mansfield Castle is the perfect venuw for an event, a short break or a complete
      get-away to indulge in a few rounds of golf, sea and loch fishing, walking, stalking, dolphin
      and seal watching, whisky tasting and clan associations.</p>
<hr>

      <p><strong>Free upgrades to Celtic Castles customers (where available)</strong></p>



  <div class="box-set">
    <figure class="boxWelcome">
      <div class="boxWelcomeTitle">Accommodation</div>
    <p class="boxWelcomeText">19 individual bedrooms with stunning views over the castle grounds,
    the Moray Firth to the south east and the Dornoch firth to the north east.</p>
          <br>
      <a class="boxButton" href="accommodation">MORE>></a>
    </figure>

    <figure class="boxWelcome">
      <div class="boxWelcomeTitle">Dining</div>
      <p class="boxWelcomeText">Dining at Mansfield Castle is a memorable experience. This elegent
      dining room boasts wonderful picture windows overlooking the castle grounds.</p>
          <br>
      <a class="boxButton" href="dining">MORE>></a>
    </figure>

    <figure class="boxWelcome">
      <div class="boxWelcomeTitle">Location</div>
      <p class="boxWelcomeText">At Mansfield Castle you will be made to feel as welcome as the Laird himself, to sample
      the splending hospitality, compfortable surroundings and first rate food.</p>
          <br>
      <a class="boxButton" href="location">MORE>></a>
    </figure>
    </div>

<br>

  @include('layouts.footer')

</div>

</body>
</head>
</html>
