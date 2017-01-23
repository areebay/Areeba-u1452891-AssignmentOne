@extends('layouts.cardlayout')
@section('content')
@endsection

<html>
<head>

<body>
  <!--Add image-->
@include('layouts.master')

  <!--Add image-->
  <div class="sidebar-logo">
    <a href="./">
      <img src="{{asset('resources/images/sidebar-logo.jpeg')}}"/>
    </a>
  </div>

  <!--Set size and add relevant content-->
  <div style="margin-left:25%; padding:1px 16px; height:1000px;">

  <div class="titleOne">Location</div>

  <div class="titleTwo">Mansfield Castle is just one hour from Inverness, the
  capital city of the Highlands of Scotland, on the main A9 road. The castle
  is clearly signposted.</div>

  <br>

  <p>
    If you are driving, click on the button below for detailed directions to Tain from Inverness.
  </p>

  <!--Get styles from layout page and add it to the relevant content-->
  <div class="boxLocation">
    <a class="button" href="#popup">Directons by car</a>
  </div>

  <div id="popup" class="overlay">
    <div class="popup">
      <h2>Directions by car</h2>
      <a class="close" href="#">x</a>
      <div class="content">
        <p>
          From Inverness follow the A9 north over the Kessock and Cromarty Bridges. Just after the
            Cromarty Bridge you will come across a roundabout where you take the second exit, following
            the signs for Thurso (A9 North). As you continue north you will pass Alness on your left-hand
            side and Invergordon on your right. Finally you will come to a final roundabout where you take
            the first exit for Tain.
        </p>
        <br>
        <p>
          You should ignore the first turn on your right into Tain (this turn-off has a brickwork display
          with a 'Royal Burgh of Tain' plaque on it). Continue for about another 500 yards and take the next
          right, following the signs for Tain Royal Academy. This will take you onto Scotsburn Road, where you
          will find Mansfield Castle on your right-hand side directly opposite the Royal Academy.
        </p>
      </div>
    </div>
  </div>

  <p><strong>By Ferry</strong></p>
  <p>
    There are a wide selection of ferry services offering easy access to Scotland from Scandinavia, Belgium, the
    Netherlands, France and Spain, including the direct Zeebrugge-Rosyth ferry service operated by Superfast
    www.superfast.com (Rosyth is only two and a half hours' drive from the Highlands).
  </p>

  <br>

  <p><strong>By Air</strong></p>
  <p>
    For full timetable information on flights to and from the Highlands, Orkney, Shetlans and the Western Isles,
    visit the Highlands & Islands Airports Lts web-site www.hial.co.uk.
  </p>

  <!--Create link-->

  <ol type="disc">
    <li>Birmingham- Inverness, Eastern Airways, tel: 01652 680600
    <br>www.easternairways.com</li>
    <li>Edinburgh- Inverness, British Airways, tel: 0870 8509850
    <br>www.ba.com</li>
    <li>Glasgow- Inverness, British Airways, tel: 0870 8509850
    <br>www.ba.com</li>
    <li>London Gatwick- Inverness, British Airways, tel: 0870 8509850
    <br>www.ba.com</li>
    <li>London Gatwick- Inverness, easyJet, tel: 0870 6000000
    <br>www.easyjet.com</li>
    <li>London Heathrow- Inverness, BMI, tel: 0870 6070555
    <br>www.flybmi.com</li>
    <li>London Luton- Inverness, easyJet, tel: 0870 6000000
    <br>www.easyjet.com</li>
    <li>Manchester- Inverness, Eastern Airways, tel: 01652 680600
    <br>www.easternairways.com</li>
  </ol>

  <p><strong>By Rail</strong></p>
  <p>
    Services to and from Inverness connect the Highlands with all major UK cities
    including Aberdeen, Edinburgh, Glasgow and London. For fares and Train times,
    call the national rail enquiry line on 08457 484950, www.nationalrail.co.uk
  </p>
  <p>
    Other useful rail contacts are: <br>
    First Scotrail, tell: 0845 7550 003, www.firstscotrail.com
    <br> First Scotrail operates a range of services in Scotland as well as the
    daily (except Saturday evenings) sleeper service from London Euston to Inverness.
    <br> GNER, tell: 0845 7225 225, www.gner.co.uk
    <br> GNER operates a range of services in Scotland and from London to the Highlands.
  </p>

  <p><strong>By Coch or Bus</strong></p>
  <p>
    Several coach operators run daily services to the Highlands from Aberdeen, Glasgow,
    Edinburgh and London, with connections available from all other parts of the UK.
    For further information:
  </p>
  <ol type="disc">
    <li>Scottish Citylink, tel: 0870 5505050
    <br>www.citylink.co.uk</li>
    <li>Stagecoach
    <br>www.stagecoachbus.com</li>
    <li>National Express, tel: 0870 5808080
    <br>www.nationalexpress.co.uk</li>
    <li>Rapsons- tel: 01463 710555
    <br>www.rapsons.co.uk</li>
  </ol>

<br>

<!--Add footer from layouts folder-->
@include('layouts.footer')

</div>
</body>
</head>
</html>
