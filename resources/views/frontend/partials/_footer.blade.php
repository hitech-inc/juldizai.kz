<style>
	.requisites{
		float: left;
	}
	.requisites li{
		display: block;
	}
</style>
<div class="container">
	<div id="footerTop">
		<div class="row">
			<div class="col-6">@lang('a.we')</div>
			<div class="col-6">@lang('a.sign')</div>
			<div class="col-6">
				<div>
					<a href="https://www.instagram.com/bi_juldizai_fond/" target="_blank" title="instagram"><img src="/img/icons/icons8-instagram-48.png" alt="" style="max-width: 100%"></a>
				</div>
				<div>
					<a href="https://www.facebook.com/BIZhuldyzai/" target="_blank" title="facebook"><img src="/img/icons/icons8-facebook-48.png" alt="" style="max-width: 100%"></a>
				</div>
				<div>
					<a href="https://www.youtube.com/channel/UClPHkASw7zZ-CBnXZ9LsosQ?view_as=subscriber" target="_blank" title="youtube"><img src="/img/icons/icons8-youtube-play-48.png" alt="" style="max-width: 100%"></a>
				</div>
			</div>
			<div class="col-6">
				<form action="">
					<input type="text" placeholder="@lang('a.email')">
					<input type="submit" value="OK" style="cursor: pointer;">
				</form>
			</div>			
		</div>
		<!-- <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p> -->
		<div class="row">
			
			<h4 style="text-align: center; padding-top: 15px; width: 100%; font-family: DinProCondBold;">@lang('a.footer')</h4>
			@foreach(App\Models\Requisite::getRequisites() as $requisite)
			<ul style="list-style: none; padding-left: 65px; width: 33%;" class="requisites">
				<li><a href="#">@lang('a.pay'){{ $requisite->payment_via }}</a></li>
				<li><a href="#">WebMoney: {{ $requisite->payment_via }}</a></li>
				<li><a href="#">QIWI WALLET: {{ $requisite->qiwi_wallet }}</a></li>
			</ul>
			<ul style="list-style: none; padding-left: 65px; width: 33%" class="requisites">
				<li><a href="#">ЯНДЕКС ДЕНЬГИ: {{ $requisite->yandex_money }}</a></li>
				<li><a href="#">РНН: {{ $requisite->rnn }}</a></li>
				<li><a href="#">Р/с: {{ $requisite->checking_account }}</a></li>
			</ul>
			<ul style="list-style: none; padding-left: 65px;  width: 33%" class="requisites">
				<li><a href="#">Банк: {{ $requisite->bank }}</a></li>
				<li><a href="#">МФО: {{ $requisite->mfo }}</a></li>
				<li><a href="#">БИН: {{ $requisite->bin }}</a></li>
			</ul>
		@endforeach
		</div>
	</div>
	<div id="footerBot">
		<a href="/">@lang('a.main')</a>
		<a href="/our-projects">@lang('a.ourproj')</a>
		<a href="/news">@lang('a.news')</a>
		<a href="/mass-media-about-us">@lang('a.smi')</a>
		<a href="/galleries">Галерея</a>
		<a href="/contacts">@lang('a.contacts')</a>
	</div>
</div>