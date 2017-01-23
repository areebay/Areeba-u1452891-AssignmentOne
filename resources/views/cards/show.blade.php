@extends('layouts.cardlayout')
<title>Mansfield Castle</title>
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
<div class="titleOne">Review</div>
<div class="titleTwo">You have clicked on the review below:</div>

<hr>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
      <!--Set size and add display/read function including its revelant buttons-->
      <h1> {{$card->title}} </h1>
    <hr>
      <p>View replies for this review displayed below:</p>
      <ul class="list-group">
        @foreach ($card->notes as $note)
          <li class="list-group-item list-group-item-info">
            <a href="/notes/{{ $note->id }}/edit">{{ $note->body }}</a>

            <a href="/index"class="pull-right  btn-primary">VIEW MAIN COMMENT</a>

          </li>
        @endforeach
      </ul>
      <p>To edit your reply, click on your post (in yellow) you submitted above.</p>

      <br>

      <!--Add create(reply) function including its revelant buttons-->

      <p><strong>Reply to this review:</strong></p>
      <form action="/cards/{{$card->id}}/notes" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="pull-right btn btn-primary">POST YOUR REPLY</button>
          <a href="/index" class="pull-left btn btn-primary">GO BACK</a>
        </div>
      </form>

      <!--Set error message if reply box is empty when submitting it-->
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
