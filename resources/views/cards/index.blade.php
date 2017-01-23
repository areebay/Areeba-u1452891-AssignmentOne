@extends('layouts.cardlayout')
@section('content')

<!--Add style-->
<style>
.titleOne {
  text-align: center;
  color: #000;
  font-size: 50px;
}
.titleTwo {
  font-size: 25px;
  text-align: center;
}
</style>

<!--Get style from layouts and add relevant content-->
<div class="titleOne">Feedback/Reviews</div>
<div class="titleTwo">View & Add Reviews</div>

<hr>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
      <!--Set size and add create function including its revelant buttons-->
    <div class="list-group">
      @if (empty($cards))
        <label class="label-warning">There are no reviews left by anyone!</label>
      @else
        <p><strong>Clients who have previously stayed at Mansfield Castle have said:</strong>
      @endif

      @foreach ($cards as $card)
        <li class="list-group-item list-group-item-info">
          <a href="/cards/{{ $card->id }}">{{$card->title}}</a>

          <a href="/cards/{{ $card->id }}/delete" class="pull-right  btn-primary">DELETE</a>

        </li>
      @endforeach
    <p>
      <br />
      Click on the reviews above for further information or delete a specific comment (feedback) by clicking on the
      "DELETE" button next to the review.
    </p>
</div>

<br>
  <p>
    Have you previously stayed at Mansfield Castle? If so, would you like to leave some feedback?
  </p>
  <p><strong>Enter your review below</strong></p>
  <form action="/cards" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <textarea name="title" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="pull-right btn btn-primary">POST</button>
            <a href="/" class="pull-left btn btn-primary" >GO BACK</a>
    </div>
  </form>

  <!--Set error message if feedback box is empty when submitting it-->
  @if (count($errors))
    <ul>
      @foreach ($errors->all() as $error)
        <li style="color:red">
          {{ $error }}
        </li>
      @endforeach
    </ul>
  @endif

</div>

</div>
<br>
  @include('layouts.footer')
@endsection
