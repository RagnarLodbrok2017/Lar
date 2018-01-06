@extends('pages.master')

@section('content')

<h4>All Pages</h4>
@foreach($pages as $page)
<li>{{$page->title}}</li>
@endforeach
@stop