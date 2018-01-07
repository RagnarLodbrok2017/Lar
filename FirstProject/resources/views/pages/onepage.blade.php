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
      <button type="button" class="btn btn-danger" name="button">Delete</button>
      <button type="button" class="btn btn-default" name="button">Edit</button>
    </div>
  </div>
  @endforeach
</div>
@stop
