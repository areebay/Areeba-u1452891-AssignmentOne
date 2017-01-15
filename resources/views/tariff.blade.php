@extends('layouts.cardlayout')
@section('content')
@endsection

<html>
<head>

@include('layouts.master')

<body>

<div class="sidebar-logo">
  <a href="./">
    <img src="{{asset('resources/images/sidebar-logo.jpeg')}}"/>
  </a>
</div>

  <div style="margin-left:25%; padding:1px 16px;">
    <div class="titleOne">2017 Tariff</div>

    <br>

    <p>
      Rates quoted are per room per night, based on 2 people sharing and are
      inclusive of full Scottish Breakfast and VAT.
    </p>

    <table style="width:100%">
      <tr>
        <th>Room Type</th>
        <th>Double Occupancy</th>
        <th>Single Occupancy</th>
      </tr>
      <tr>
        <td>Standard Double/Twin</td>
        <td>£150</td>
        <td>£110</td>
      </tr>
      <tr>
        <td>Superior Double</td>
        <td>£180</td>
        <td>£160</td>
      </tr>
      <tr>
        <td>Tower Suite</td>
        <td>£290 (for 2 adults and up to 2 children)</td>
        <td>N/A</td>
      </tr>
    </table>

<br>

    <p>
      Further adults will be charged at 50% of the room rate, and further children
      (over 4) are charged at 30% of the room rate. Children under the age of four are
      free of charge. There is a supplement of £30 per person for dinner.
    </p>

<br>

  <a class="button" href="index">View feedback from people who have stayed at the castle
    in the past >></a>
  </div>

</body>
</head>
</html>
