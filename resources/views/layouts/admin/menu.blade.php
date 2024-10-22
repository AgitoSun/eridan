<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ active_link('dashboard*') }}">
        <a href="{{ route('dashboard.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div>Главная</div>
        </a>
    </li>

    <!-- Каталог -->
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Каталог</span>
    </li>
    <li class="menu-item {{ active_link('products*') }}">
        <a href="{{ route('products.index') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-diamond'></i>
            <div>Товары</div>
        </a>
    </li>
    <li class="menu-item {{ active_link('categories*') }}">
        <a href="{{ route('categories.index') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-category'></i>
            <div>Категории</div>
        </a>
    </li>
    <li class="menu-item {{ active_link('tags*') }}">
        <a href="{{ route('tags.index') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-tag'></i>
            <div>Теги</div>
        </a>
    </li>

    <!-- Приложение -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Приложение</span>
        </li>
        <li class="menu-item {{ active_link('users*') }}">
            <a href="{{-- route('users.index') --}}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-user-account'></i>
                <div>Учетные записи</div>
            </a>
        </li>
        <li class="menu-item {{ active_link('roles*') }}">
            <a href="{{-- route('roles.index') --}}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-lock-alt'></i>
                <div>Права доступа</div>
            </a>
        </li>
        <li class="menu-item {{ active_link('settings*') }}">
            <a href="{{ route('settings') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-cog'></i>
                <div>Настройки</div>
            </a>
        </li>

    <li></li>
</ul>
