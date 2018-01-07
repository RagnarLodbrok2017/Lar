@extends('pages.master')
@section('content')
<div class="container center-block">
  <h3>{{$page->title}}</h3>
  @foreach ($page->notes as $note)
  <div class="row list-group-item">
    <div class="col-xs-8">
      {{$note->text}}
    </div>
    <div class="col-xs-4">
      <a href="/notes/{{ $note->id }}/delete" class="btn btn-danger" type="button">Delete</a>
      <a href="/notes/{{ $note->id }}/edit" class="btn btn-default" type="button">Edit</a>
    </div>
  </div>
  @endforeach
  <div class="row list-group-item">
    <form method="POST" action="{{ $page->id }}/notestore">
      {{csrf_field()}}
      <div class="input-group">
        <input type="text" name="text" class="form-control" placeholder="add the text of note">
        <span class="input-group-btn">
  				<button class="btn btn-default" type="submit">Add note</button>
  			</span>
    </form>
  </div>
</div>
<div class="center-block"><a href="../pages" class="btn btn-default">Go Back</a></div>
</div>
@stop
