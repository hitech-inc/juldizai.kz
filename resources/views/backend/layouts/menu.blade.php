<li class="{{ Request::is('menus*') ? 'active' : '' }}">
    <a href="{!! route('menus.index') !!}"><i class="fa fa-edit"></i><span>Меню</span></a>
</li>

<li class="{{ Request::is('contacts*') ? 'active' : '' }}">
    <a href="{!! route('contacts.index') !!}"><i class="fa fa-edit"></i><span>Контакты</span></a>
</li>

<li class="{{ Request::is('requisites*') ? 'active' : '' }}">
    <a href="{!! route('requisites.index') !!}"><i class="fa fa-edit"></i><span>Наши реквизиты</span></a>
</li>

<li class="{{ Request::is('allNews*') ? 'active' : '' }}">
    <a href="{!! route('allNews.index') !!}"><i class="fa fa-edit"></i><span>Новости</span></a>
</li>

<li class="{{ Request::is('galleries*') ? 'active' : '' }}">
    <a href="{!! route('galleries.index') !!}"><i class="fa fa-edit"></i><span>Фото-галерея</span></a>
</li>

<li class="{{ Request::is('massMediaAboutuses*') ? 'active' : '' }}">
    <a href="{!! route('massMediaAboutuses.index') !!}"><i class="fa fa-edit"></i><span>СМИ о нас</span></a>
</li>

<li class="{{ Request::is('massMediaAboutuses*') ? 'active' : '' }}">
    <a href="{!! route('projects.index') !!}"><i class="fa fa-edit"></i><span>Наши проекты</span></a>
</li>

<li class="{{ Request::is('testmenus*') ? 'active' : '' }}">
    <a href="{!! route('testmenus.index') !!}"><i class="fa fa-edit"></i><span>Testmenus</span></a>
</li>

