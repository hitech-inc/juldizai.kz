<style>
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown li a{
	text-align: left !important;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdownNew:hover .dropdown-content {
    display: block;
}

.dropdownHelp:hover .dropdown-content {
    display: block;
}

#menu{
	position: relative;
	display: flex;
    justify-content: center;
}

#menu a{
	z-index: 999;
	padding: 0 50px;
}

.dropdown{
	background-color: #dedede;
	min-width: 200px;
	position: absolute;
	top: 0;
	left: 0;
	display: none;
	transition: .5s;
}

.dropdownNew{
	background-color: #dedede;
	min-width: 200px;
	position: absolute;
	top: 73px;
	left: 0;
	display: none;
	transition: .5s;
}

.dropdownHelp{
	background-color: #dedede;
	min-width: 200px;
	position: absolute;
	top: 73px;
	left: 0;
	display: none;
	transition: .5s;
}

.dropdown li, .dropdownNew li, .dropdownHelp li{
	font-size: 0.75rem !important;
	list-style: none;
}

.dropdownB:hover ul.dropdown{
	display: block !important;
	z-index: 999;
}

.dropdownN:hover ul.dropdownNew{
	display: block !important;
	z-index: 999;
}

.dropdownH:hover ul.dropdownHelp{
	display: block !important;
	z-index: 999;
}

.lang {
	right: 0;
	top: 0;
	position: absolute;
	width: 5%;
	height: 30px;
	background-color: #efefef;
}

.lang a {
	display: block;
	width: 50%;
	color: #636363;
	height: 100%;
	line-height: 30px;
	float: left;
	font-size: 1.5em;
	text-align: center;
}

.lang a:hover {
	background-color: #b0e0c8;
}

.dropdown li, .dropdownNew li, .dropdownHelp li {
	height: 35px;
}

#menu .dropdown li a, #menu .dropdownNew li a, #menu .dropdownHelp li a {
	line-height: 35px;
	text-align: left !important;
}

.bannerTitle{
	font-size: 2.5em;
    position: absolute;
    top: 35%;
    width: 30%;
    left: 53%;
    line-height: 1em;
}

.dropdownNew li a.massMedia{
	text-align: left;
}

.dropdownH, .dropdownN, .dropdown{
	position: relative;
}

ul.dropdown li a.ourP{
	padding: 0 20px !important;
}
</style>
<div class="container">
	<div class="row" id="socialLinks">
		<div class="col-4">
			<a href="https://www.instagram.com/bi_juldizai_fond/" target="_blank" title="@lang('a.insta')"><img src="/img/header/instagram.jpg" alt="link_social"></a>
		</div>
		<div class="col-4">
			<a href="https://www.facebook.com/BIZhuldyzai/" target="_blank" title="@lang('a.fb')"><img src="/img/header/facebook.jpg" alt="link_social"></a>
		</div>
		<div class="col-4"> 
			<a href="https://www.youtube.com/channel/UClPHkASw7zZ-CBnXZ9LsosQ?view_as=subscriber" target="_blank" title="@lang('a.yt')"><img src="/img/header/youtube.jpg" alt="link_social"></a>
		</div>
	</div>
	<div class="row" id="banner">
		<a href="/galleries" title="Перейти в галерею"><img src="/img/header/girl.png" alt="banner"></a>
		<a href="/" title="Перейти на главную" style="cursor: pointer;"><img src="/img/logo2.png" alt="logo" class="logo"></a>
		<a href="/galleries" class="bannerTitle" title="Перейти в галерею">@lang('a.header')</a>
		<div class="lang">
			<a href="/lang/kz">KZ</a>
			<a href="/lang/ru">RU</a>
		</div>
	</div>
	<div class="row" id="menu">
		<a href="/" class="main">@lang('a.main')</a>
		<div class="dropdownB">
			<a href="/our-projects" class="our-projects">@lang('a.ourproj')
			</a>
			<ul class="dropdown">
				<li><a href="http://fest.juldizai.kz/" target="_blank" class="ourP">@lang('a.fest')</a></li>
				<li><a href="http://sport.juldizai.kz/" target="_blank" class="ourP">Спартакиада</a></li>
				<li><a href="http://centr.juldizay.kz" class="ourP">@lang('a.med')</a></li>
				<li><a href="#" target="_blank" class="ourP">Тұсай кесер</a></li>
				<li><a href="#" target="_blank" class="ourP">День именниника</a></li>
			</ul>
		</div>
		<div class="dropdownN">
			<a href="/news" class="news">@lang('a.news')</a>
			<ul class="dropdownNew">
				<li><a href="/mass-media-about-us" class="massMedia">@lang('a.smi')</a></li>
			</ul>
		</div>	
		<!-- <a href="/galleries" class="gallery">Галерея</a> -->
		<div class="dropdownH">
			<a href="/help-is-needed" class="pjr">@lang('a.helpIsNeeded')</a>
			<ul class="dropdownHelp">
				<li><a href="/contacts" class="contacts">@lang('a.contacts')</a></li>
			</ul>
		</div>
		<a href="/donations" class="iWantToHelp">@lang('a.iWantToHelp')</a>
	</div>
</div>	