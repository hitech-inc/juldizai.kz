@extends('frontend.layouts.master')

@section('content')
<style>
	@if($currentURL == !null)
            a.news{
                background-color: #b0e0c8;
            }
    @endif
    .newsBlock:last-child {
		margin-bottom: 20px;
    }
    .newsBlock .col-4 {
    	margin-top: 15px;
    }
    .newsBlock .col-4 div {
    	background-size: cover;
    	background-position: top center;
    	border-radius: 25px;
    	width: 100%;
    	height: 100%;
    }
    .newsBlock .col-8 {
		height: 240px; 
		overflow: hidden; 
		box-sizing: border-box; 
		border: 10px solid transparent; 
		position: relative;
    }
</style>
	<div class="container">
		<div class="row">
			<div class="col-12">
				@foreach($news as $new)
				<div class="newsBlock">	
					<div class="row">
						<div class="col-4">
							<div style="background-image: url('/img/news/{{$new->img}}');"></div>
						</div>
						<div class="col-8">
							<h3>{{$new->title}}</h3>
							{{--<p style="margin-bottom: 35px;">{!!$new->text!!}</p>--}}
							<a href="{{ url('news/' . $new->slug)}}" class="btn btn-primary">@lang('a.more')</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection