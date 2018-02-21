@extends('posts.master')

@section('content')

<div class="row">
	<div class="col-lg-15">
		<div class="pull-left">
			<h3>Show Post </h3> <p><a class="btn btn-xs btn-primary" href="{{ route('posts.index') }}">Back</a></p>
		</div>
	</div>
</div>


<div class="row">

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>Title : </strong></p>
			{{ $post->title }}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>Body : </strong></p>
			{{ $post->body }}
		</div>
	</div>

</div>






@endsection