@extends('frontend.layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="newsBlock" style="text-align: center; margin: 25px 0;">
					<img src="/img/news/{{$selectedNews->img}}" alt="" style="max-width: 100%; border-radius: 15px;">
					<h3 style="margin-top: 15px;">{{ $selectedNews->title }}</h3>
					<p>{!! $selectedNews->text !!}</p>
					<a href="../news" class="btn btn-primary">Назад</a>
				</div>
			</div>
		</div>
	</div>
@endsection