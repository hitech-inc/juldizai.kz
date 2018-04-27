@extends('frontend.layouts.master')

@section('content')
	<style>
		img{
			max-width: 100%;
			border-radius: 15px;
		}
		p{
			float: left;
			width: 33%;
		}
	</style>
	<div class="container">
		<div class="row">
			<div class="col-12" style="margin: 25px 15px;">
				<h4 style="margin-bottom: 25px; text-align: center;">{{ $gallery->title }}</h4>
				<a>{!! $gallery->photos !!}</a>
			</div>
		</div>
	</div>
@endsection