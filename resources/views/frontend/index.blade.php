@extends('frontend.layouts.master')

@section('content')
<style type="text/css">
        @if($currentURL == null)
            /*a.nav-link:hover{
                color: red !important;
            }*/
            #menu .main{
                background-color: #b0e0c8;
            }
        @endif
#projects .col-3 .bot h4 {
	font-size: 1.5rem;
}
#projects .col-3 .bot a {
	font-size: 0.8em;
}
</style>
<div class="container">
	<div class="row" id="slider">
		<div class="col-6">
			<div class="black">
				<p> @lang('a.leftbanner')</p>
				<a href="#">@lang('a.donate')</a>
			</div>
		</div>
		<div class="col-6">
			<div class="my-item">
				<div class="left"><div class="black"></div></div>
				<div class="right">	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat aperiam incidunt, odio eligendi sapiente, recusandae consequuntur, mollitia vitae nam ipsum in! Voluptas, culpa obcaecati ullam. 	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, reprehenderit!</div>
			</div>
			<div class="my-item">
				<div class="left"><div class="black"></div></div>
				<div class="right">	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur excepturi perspiciatis culpa aliquid laudantium dolore velit eligendi alias soluta! Asperiores provident labore harum quisquam perspiciatis! 	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, iusto.</div>
			</div>
			<div class="my-item">
				<div class="left"><div class="black"></div></div>
				<div class="right">	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non numquam in, et porro, debitis obcaecati eum qui corrupti ut iure sint quisquam nostrum facilis laborum! 	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, veniam.</div>
			</div>
			<div class="my-item">
				<div class="left"><div class="black"></div></div>
				<div class="right">	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem distinctio sapiente nemo odio amet alias vitae fugit deleniti enim, placeat dolores dignissimos maxime ex repudiandae. 	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, quam.</div>
			</div>
		</div>
		<div id="scroll-bar-wrap">
			<div id="point-1" class="points"></div>
			<div id="point-2" class="points"></div>
			<div id="point-3" class="points"></div>
			<div id="point-4" class="points"></div>
			<div id="scroll-bar"  class="ui-widget-content"></div>
		</div>
	</div>
	<h3>@lang('a.projects')</h3>

	<div class="row" id="projects">
		@foreach( $projects as $project )
		<div class="col-3">
			<div class="top">
				<div class="black"></div>
			</div>
			<div class="bot">
				<h4>{{ $project->title }}</h4>
				<!-- <p>Подарок во блага</p> -->
				<a href="{{ $project->url }}" target="_blank">@lang('a.more')</a>
			</div>
		</div>
		@endforeach	
	</div>

	<a href="#all-proj" style="font-size: 1.7rem">@lang('a.allprojects')</a>
	
	<div class="row" id="youtubeAndNews">
		<div>
			<h3>@lang('a.youtube')</h3>
			<p>@lang('a.online')</p>
		</div>
		<a href="#news">@lang('a.news')</a>
	</div>

	<div class="row" id="mainBlock">
		<div class="col-6">
			<iframe src="https://www.youtube.com/embed/d2hRTLdvdnk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<div class="galleryText">
				<h3>Фотогалерея</h3>
				<p>@lang('a.archive')</p>
			</div>
			<div class="gallery">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner" role="listbox">
				    <div class="carousel-item active">
				      <img class="d-block img-fluid" src="/img/index/IMG_6342_20600df08b72454baa4fe8e7b69f1755.jpg" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block img-fluid" src="/img/index/MG_6057-1.jpg" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block img-fluid" src="/img/index/MG_2896.jpg" alt="Third slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>		
			</div>

		</div>

		<div class="col-4">
			<div class="row">
				@foreach( $news as $new )

					<div class="col-6">
						<a href="/news">
							<span></span>
							<span>{{ $new->created_at }}</span>
							<div class="clear"></div>
							<div class="newsImg"></div>
							<h4>{{ $new->title }}</h4>
							<p>{!! $new->text !!}</p>
							<p href="{{ url('news/' . $new->slug)}}">@lang('a.read') ></p>
						</a>
					</div>

					@endforeach
					<a href="/news" target="_blank" style="font-size: 1.4rem">@lang('a.allnews')</a>

			</div>
		</div>

	</div>
	
	<p class="quoteTop">
		@lang('a.dream')
	</p>
	<p class="quoteBot">
		<a href="">@lang('a.donate')</a>
	</p>
	<h3 class="afterQUote">@lang('a.fond')</h3>

	<div class="row" id="article">
		<div class="articleImg">
			<div class="black"></div>
		</div>
		<div class="blueBlock">
			<h3>Lorem ipsum</h3>
			<p>	Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов </p>
		</div>
		<p class="firstText">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
		<div class="secondText">
			<div></div>
			<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
		</div>
		<p class="thirdText">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
		<!-- <a href="#all-stories">Все истории</a> -->
	</div>
	<h3>@lang('a.partners')</h3>
	<div id="partners">
		<div class="owl-carousel owl-theme partners">
		    <div class="item"><h4>1</h4></div>
		    <div class="item"><h4>2</h4></div>
		    <div class="item"><h4>3</h4></div>
		    <div class="item"><h4>4</h4></div>
		</div>
	</div>


</div> <!-- container div -->

@endsection