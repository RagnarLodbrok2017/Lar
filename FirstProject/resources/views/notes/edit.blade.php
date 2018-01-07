@extends('pages.master')
@section('content')
<div class="container center-block">
</br>
  <h2>{{ $note->text }}</h2>
  <div class="row list-group-item">
    <form method="POST" action="update">
      {{csrf_field()}}
      <div class="input-group">
        <input type="text" name="text" value="{{ $note->text }}" class="form-control" placeholder="add the text of note">
        <span class="input-group-btn">
  				<button class="btn btn-default" type="submit">Edit Note</button>
  			</span>
    </form>
  </div>
</div>
<div class="center-block"><a href="/pages/{{ $note->page_id }}" class="btn btn-default">Go Back To Page</a></div>
</div>
@stop
