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
<div class="titleOne">Edit</div>
<div class="titleTwo">Edit your Reply</div>

<hr>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form action="/notes/{{$note->id}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('patch') }}

        <div class="form-group">
          <textarea name="body" class="form-control">{{ $note->body }}</textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update your reply</button>
          <a href="/cards/3" class="pull-right btn btn-primary" >Go back</a>
        </div>
      </form>

    </div>
</div>

<br>
  @include('layouts.footer')
@endsection
