<li>
    <a href="{{ route('home') }}" class="{{ active_link('/*') }}">
        Главная
    </a>
</li>
<li>
    <a href="{{ route('catalog') }}" class="{{ active_link('catalog*') }}">
        Каталог
    </a>
</li>
<li>
    <a href="{{ route('how-we-working') }}" class="{{ active_link('how-we-working*') }}">
        Как мы работаем
    </a>
</li>
<li>
    <a href="{{ route('about-company') }}" class="{{ active_link('about-company*') }}">
        О компании
    </a>
</li>
<li>
    <a href="{{ route('contacts') }}" class="{{ active_link('contacts*') }}">
        Контакты
    </a>
</li>
