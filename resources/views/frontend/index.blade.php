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
    </style>
<div class="container">
	<div class="row" id="slider">
		<div class="col-6">
			<div class="black">
				<p>ЭТО ЛУЧШЕЕ ЧТО ВЫ  МОЖЕТЕ сделать В ЭТОМ МИРЕ</p>
				<a href="#">Сделать пожертвование</a>
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
	<h3>Проекты</h3>

	<div class="row" id="projects">
		@foreach( $projects as $project )
		<div class="col-3">
			<div class="top">
				<div class="black"></div>
			</div>
			<div class="bot">
				<h4>{{ $project->title }}</h4>
				<!-- <p>Подарок во блага</p> -->
				<a href="{{ $project->url }}" target="_blank">Подробнее</a>
			</div>
		</div>
		@endforeach	
	</div>

	<a href="#all-proj">Все проекты</a>
	
	<div class="row" id="youtubeAndNews">
		<div>
			<h3>Youtube online</h3>
			<p>Мы в прямом эфире</p>
		</div>
		<a href="#news">Новости</a>
	</div>

	<div class="row" id="mainBlock">
		<div class="col-6">
			<iframe src="https://www.youtube.com/embed/d2hRTLdvdnk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<div class="galleryText">
				<h3>Фотогалерея</h3>
				<p>Фотоархив всех событий</p>
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
					<span></span>
					<span>{{ $new->created_at }}</span>
					<div class="clear"></div>
					<div class="newsImg"></div>
					<h4>{{ $new->title }}</h4>
					<p>{!! $new->text !!}</p>
					<a href="{{ url('news/' . $new->slug)}}">Читать ></a>
				</div>
				@endforeach
				<!-- <div class="col-6">
					<span></span>
					<span>24.11.2017</span>
					<div class="clear"></div>
					<div class="newsImg"></div>
					<h4>Серик Сапиев: «Хочу, чтобы все дети были здоровыми!»</h4>
					<p>Мечта – это сокровенное желание, исполнение которого принесет человеку огромное счастье. Мечты однозначно должны сбываться, тем более у наших особенных детишек. Мечтой Эмиля, подопечного медицинского центра «Жұлдызай», было встретиться со своим кумиром – олимпийским чемпионом...</p>
					<a href="#read">Читать ></a>
				</div>
				<div class="col-6">
					<span></span>
					<span>27.10.2017</span>
					<div class="clear"></div>
					<div class="newsImg"></div>
					<h4>«BI-Жұлдызай» обсудили ряд проблем с Вице-министром Образования и науки РК!</h4>
					<p>Благотворительный Корпоративный фонд «BI-Жұлдызай» создан  в 2004 году инвестиционно-строительным холдингом «BI Group» и  реализует крупномасштабные проекты, направленные поддержку детей с ограниченными возможностями. Но, вместе с тем многолетний опыт проведения Фестиваля выявил ряд проблем, которые возможно...</p>
					<a href="#read">Читать ></a>
				</div>
				<div class="col-6">
					<span></span>
					<span>15.02.2018</span>
					<div class="clear"></div>
					<div class="newsImg"></div>
					<h4>Секционное заседания педагогических работников в сфере специального образования прошла в Астане</h4>
					<p>Секционное заседания педагогических работников в сфере специального образования в рамках Коллегии по разъяснению ежегодного Послания Президента Республики Казахстан. Система образования в Казахстане предусматривает целенаправленную работу с различными категориями детей с особыми образовательными потребностями в рамках единого образовательного...</p>
					<a href="#read">Читать ></a>
				</div>
				<div class="col-6">
					<span></span>
					<span>12.02.2018</span>
					<div class="clear"></div>
					<div class="newsImg"></div>
					<h4>Меморандум был подписан о сотрудничестве между Корпоративным благотворительным фондом «BI-Жұлдызай» и Общественным объединением «Мир равных возможностей».</h4>
					<p>Меморандум был подписан о сотрудничестве между Корпоративным благотворительным фондом «BI-Жұлдызай» и Общественным объединением «Мир равных возможностей». Настоящий Меморандум разработан в целях сотрудничества между Корпоративным благотворительным фондом «BI-Жұлдызай» и Общественным объединением «Мир равных возможностей по проведению...</p>
					<a href="#read">Читать ></a>
				</div>
				<div class="col-6">
					<span></span>
					<span>26.01.2018</span>
					<div class="clear"></div>
					<div class="newsImg"></div>
					<h4>150 детей-инвалидов в Жанаозене взяты под особый контроль</h4>
					<p>В результате проекта «Здоровые дети», инициированного фондом «BI-Жұлдызай» при спонсорской поддержке Samruk Kazyna Trust, 150 детей из Жанаозена включены в базу подопечных фонда, а 145 из них прошли полный курс специализированной реабилитации. Дети получили квалифицированные...</p>
					<a href="#read">Читать ></a>
				</div> -->
				<a href="/news" target="_blank">Все новости</a>
			</div>
		</div>

	</div>
	
	<p class="quoteTop">
		Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов
	</p>
	<p class="quoteBot">
		Lorem Ipsum - это текст-"рыба"
	</p>
	<h3 class="afterQUote">О фонде</h3>

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
		<a href="#all-stories">Все истории</a>
	</div>
	<h3>Партнеры фонда</h3>
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