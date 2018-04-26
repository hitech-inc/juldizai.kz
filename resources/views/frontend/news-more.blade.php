@extends('frontend.layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="newsBlock" style="text-align: center;">
					<img src="/img/news/{{$selectedNews->img}}" alt="" style="max-width: 100%">
					<h3>{{ $selectedNews->title }}</h3>
					<p>{!! $selectedNews->text !!}</p>
					<a href="/news" class="btn btn-primary">Назад</a>
				</div>
			</div>
		</div>
	</div>
@endsection