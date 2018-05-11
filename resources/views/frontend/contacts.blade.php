@extends('frontend.layouts.master')

@section('content')
<script type="text/javascript">
        ymaps.ready(init);

        var longitude = {{ App\Models\Contact::getCoords()['longitude'] }};
        var latitude = {{ App\Models\Contact::getCoords()['latitude'] }};
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map("map", {
                center: [longitude, latitude],
                zoom: 17
            }); 
            
            myPlacemark = new ymaps.Placemark([longitude, latitude], {
                hintContent: 'BI Zhuldizai!',
                balloonContent: '@lang("a.df")'
            });
            
            myMap.geoObjects.add(myPlacemark);
        }
    </script>
<style>
	@if($currentURL == !null)
  a.contacts{
  	background-color: #b0e0c8;
  }
  @endif
</style>
	<div class="container" style="padding: 50px 0">
		<div class="row">
			<div class="col-6">
				{{--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A693a952ed65579015c42677ac5ae94a2c61aaf4c7cc3541b3002efc03a152968&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>--}}
				<div id="map" style="width: 100%; height: 600px"></div>
			</div>
			<div class="col-6">
				<h2 style="text-align: center;">@lang('a.office')</h2>
				@foreach($contacts as $contact)
					@if($loop->index == 1)
					<p><i class="fas fa-phone-square"></i>&nbsp;{{ $contact->tel }}</p>
					<p><i class="fas fa-envelope"></i>&nbsp;{{ $contact->email }}</p>
					<p><i class="fas fa-home"></i>&nbsp;{{ $contact->address }}</p>
					<h4 style="text-align: center;">@lang('a.questions')</h4>
					<form action="" style="padding-right: 15px;">
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="@lang('a.name')">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="@lang('a.email')">
						</div>
						<div class="form-group">
							<textarea name="text" class="form-control" id="" cols="30" rows="9" placeholder="@lang('a.message')"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="@lang('a.send')">
						</div>
					</form>
					@endif
				@endforeach
			</div>
		</div>
	</div>
@endsection