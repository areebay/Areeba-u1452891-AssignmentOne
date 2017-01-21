@extends('layouts.cardlayout')
<title>Mansfield Castle</title>
@section('content')
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
<div class="titleOne">Review</div>
<div class="titleTwo">You have clicked on the review below:</div>

<hr>

<div class="row">
    <div class="col-md-6 col-md-offset-3">

      <h1> {{$card->title}} </h1>
    <hr>
      <p>View replies for this review displayed below:</p>
      <ul class="list-group">
        @foreach ($card->notes as $note)
          <li class="list-group-item">
            <a href="/notes/{{ $note->id }}/edit">{{ $note->body }}</a>
            <a href="#" class="pull-right" data-toggle="tooltip" title="{{ $note->user->name }}, {{ $note->user->email}}">{{ $note->user->name }}</a>
          </li>
        @endforeach
      </ul>
      <p>To edit your reply, click on your post you submitted above.</p>

      <br>


      <p><strong>Reply to this review:</strong></p>
      <form action="/cards/{{$card->id}}/notes" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Post your reply</button>
          <a href="/index" class="pull-right btn btn-primary" >Go back</a>
        </div>
      </form>

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
