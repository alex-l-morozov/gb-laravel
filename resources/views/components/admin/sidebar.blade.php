<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.index') }}">
                    <span data-feather="home"></span>
                    Главная
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.categories.index') }}">
                    <span data-feather="file"></span>
                    Категории
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.news.index') }}">
                    <span data-feather="shopping-cart"></span>
                    Новости
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.index') }}">
                    <span data-feather="shopping-cart"></span>
                    Пользователи
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.feedback.index') }}">
                    <span data-feather="users"></span>
                    Обратная связь
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.upload.index') }}">
                    <span data-feather="users"></span>
                    Заказ на получение выгрузки данных
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Загрузки
                </a>
            </li>
        </ul>
    </div>
</nav>
