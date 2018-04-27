@extends('frontend.layouts.master')

@section('content')
<style>
    @if($currentURL == !null)
            a.our-projects{
                background-color: #b0e0c8;
            }
        @endif
	 h4{
	 	margin-top: 15px;
	 }
	h4, p{
		text-align: center;
	}

	a{
		cursor: pointer;
	}
</style>
	<div class="container">
		<div class="row">
			@foreach( $projects as $project )
			<div class="col-3" style="padding: 25px;">
				<img src="/img/our-projects/{{ $project->img }}" alt="{{ $project->img }}" style="max-width: 100%; border-radius: 15px;">
				<h4><a href="{{ $project->url }}" target="_blank">{{ $project->title }}</a></h4>
				<p>{!! $project->text !!}</p>
			</div>
			@endforeach
		</div>
	</div>
@endsection