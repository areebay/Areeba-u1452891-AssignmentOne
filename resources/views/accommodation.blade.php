@extends('layouts.cardlayout')
@section('content')
@endsection
<html>
<head>
<body>

  <!--Add styles from layouts folder-->
@include('layouts.master')

  <!--Set size and add relevant content-->
  <div style="margin-left:25%; padding:1px 16px;">
    <div class="titleOne">Accommodation</div>

      <div class="titleTwo">"Your sanctuary in the Highlands of Scotland."</div>
      <br>
        <p>The Tower Suite is perfect for the family, with two bedrooms, a spacious
            bathroom and an extremely comfortable tower lounge with breathtaking views from
            every room.</p>
        <p>If you are feeling a little adventerous, follow the original spiral staircase
            to the very top of the tower where there is virtually a 360 degree view.</p>
        <p>Most of the 19 sumptuous bedrooms have stunning views over the castle grounds,
            the Moray Firth to the south east and the Dornoch Firth to the north east.</p>

            <br>
            <!--Add image-->
        <img src="http://www.celticcastles.com/castles/mansfield-castle/images/room4.jpg" alt="..." class="img-responsive">

            <br>
        <p>All rooms are ensuite, some with Jacuzzis and each room has tea and coffee making
          facilities, hairdyer and television.
        </p>

          <br>
          <!--Add image-->
      <img src="http://www.celticcastles.com/castles/mansfield-castle/images/fourposter.jpg" alt="..." class="img-responsive">
          <br>
        <hr>

        <!--Add button and link it to the correct page-->
          <a class="button" href="tariff">See current tariff >></a>
          <br>
    </div>
</body>
</head>
</html>
