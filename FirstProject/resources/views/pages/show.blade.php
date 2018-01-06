@extends('pages.master')

@section('content')

<h4>All Pages</h4>
@foreach($pages as $page)
<div class="row list-group-item page-title-list">
	<div class="col-xs-8">
		{{ $page->title }}
	</div>
	<div class="col-xs-4">
		<div><a href="#" class="btn btn-danger pull-right">Delete</a></div>
	</div>
</div>
@endforeach
<div class="row list-group-item">
	<form method="POST" action="pagesstore">
		{{csrf_field()}}
		<div class="input-group">
			<input type="text" name="title" class="form-control" placeholder="Add Page . . .">
			<span class="input-group-btn">
				<button class="btn btn-default" type="submit">Add</button>
			</span>
		</div>
	</form>
</div>
@stop