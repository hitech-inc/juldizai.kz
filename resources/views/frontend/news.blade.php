@extends('frontend.layouts.master')

@section('content')
<style>
	@if($currentURL == !null)
            a.news{
                background-color: #b0e0c8;
            }
        @endif
</style>
	<div class="container">
		<div class="row">
			<div class="col-12">
				@foreach($news as $new)
				<div class="newsBlock">	
					<div class="row">
						<div class="col-4">
							<img src="/img/news/{{$new->img}}" alt="" style="max-width: 100%; border-radius: 15px; margin-bottom:15px;">
						</div>
						<div class="col-8" style="height: 240px; overflow: hidden; box-sizing: border-box; border: 10px solid transparent; position: relative;">
							<h3>{{$new->title}}</h3>
							{{--<p style="margin-bottom: 35px;">{!!$new->text!!}</p>--}}
							<a href="{{ url('news/' . $new->slug)}}" class="btn btn-primary" style="position: absolute; bottom: 0">Подробнее</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection