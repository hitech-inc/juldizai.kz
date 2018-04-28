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

#menu{
	position: relative;
}

#menu a{
	z-index: 999;
	padding: 0 15px;
}

.dropdown{
	background-color: #dedede;
	min-width: 200px;
	position: absolute;
	top: 73px;
	left: 155px;
	display: none;
	transition: .5s;
}

.dropdown li{
	font-size: 0.75rem !important;
	list-style: none;
}

.dropdownB:hover ul.dropdown{
	display: block !important;
	z-index: 999;
}
</style>
<div class="container">
	<div class="row" id="socialLinks">
		<div class="col-4">
			<a href="https://www.instagram.com/bi_juldizai_fond/" target="_blank" title="Посетите нас в instagram"><img src="/img/header/instagram.jpg" alt="link_social"></a>
		</div>
		<div class="col-4">
			<a href="https://www.facebook.com/BIZhuldyzai/" target="_blank" title="Посетите нас в facebook"><img src="/img/header/facebook.jpg" alt="link_social"></a>
		</div>
		<div class="col-4">
			<a href="https://www.youtube.com/channel/UClPHkASw7zZ-CBnXZ9LsosQ?view_as=subscriber" target="_blank" title="Посетите нас в youtube"><img src="/img/header/youtube.jpg" alt="link_social"></a>
		</div>
	</div>
	<div class="row" id="banner">
		<img src="/img/header/girl.png" alt="banner">
		<img src="/img/logo.png" alt="logo" class="logo">
		<p>Сделай первый шаг вместе с нами</p>
	</div>
	<div class="row" id="menu">
		{{--@foreach($menus as $menu)
		<a href="{{ $menu->alias }}">{{ $menu->title }}</a>
		@endforeach--}}
		<a href="/" class="main">Главная</a>
		<div class="dropdownB">
			<a href="/our-projects" class="our-projects">Наши проекты
		</a>
		<ul class="dropdown">
				<li><a href="http://fest.juldizai.kz/" target="_blank">Фестиваль Жулдызай</a></li>
				<li><a href="http://sport.juldizai.kz/" target="_blank">Спартакиада</a></li>
				<li><a href="#">Медико-социальный проект</a></li>
			</ul>
		</div>
		<a href="/news" class="news">Новости</a>
		<a href="/mass-media-about-us" class="massMedia">СМИ о нас</a>
		<a href="/galleries" class="gallery">Галерея</a>
		<a href="/donations" class="pjr">Пожертвования</a>
		<a href="/contacts" class="contacts">Контакты</a>
	</div>
</div>	