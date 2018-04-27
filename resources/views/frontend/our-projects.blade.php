@extends('frontend.layouts.master')

@section('content')
<style>
	 h4{
	 	margin-top: 15px;
	 }
	h4, p{
		text-align: center;
	}
</style>
	<div class="container">
		<div class="row">
			@foreach( $projects as $project )
			<div class="col-3" style="padding: 25px;">
				<img src="/img/our-projects/{{ $project->img }}" alt="{{ $project->img }}" style="max-width: 100%; border-radius: 15px;">
				<h4>{{ $project->title }}</h4>
				<p>{!! $project->text !!}</p>
			</div>
			@endforeach
		</div>
	</div>
@endsection