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
<div class="titleOne">Edit</div>
<div class="titleTwo">Edit and update your Reply</div>

<!--Gap-->
<br>

<!--Set size and add update function including its revelant buttons-->

<div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form action="/notes/{{$note->id}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('patch') }}

        <div class="form-group">
          <textarea name="body" class="form-control">{{ $note->body }}</textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="pull-right btn btn-primary">EDIT & UPDATE</button>
          <a href="/" class="pull-left btn btn-primary" >EXIT</a>

        </div>
      </form>

    </div>
</div>

<br>
  @include('layouts.footer')
@endsection
