<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Navegación</li>
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ setActiveRoute('dashboard') }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Inicio
                </p>
            </a>
        </li>
        <li class="nav-item {{ setActiveRoute('admin.posts.index', 'menu-open') }}">
            <a href="#" class="nav-link {{ setActiveRoute('admin.posts.index') }}">
                <i class="nav-icon fas fa-bars"></i>
                <p>
                    Blog
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.posts.index') }}" class="nav-link {{ setActiveRoute('admin.posts.index') }}">
                        <i class="far fa-eye nav-icon"></i>
                        <p>Ver todos los posts</p>
                    </a>
                </li>

                @can('create', new App\Post)
                <li class="nav-item">
                    @if (request()->is('admin/posts/*'))
                        <a href="{{ route('admin.posts.index', '#create') }}" class="nav-link">
                            <i class="fas fa-pencil-alt nav-icon"></i>
                            <p>Crear post</p>
                        </a>
                    @else
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-pencil-alt nav-icon"></i>
                            <p>Crear post</p>
                        </a>
                    @endif
                </li>
                @endcan
            </ul>
        </li>        

        @can('view', new App\User)
        <li class="nav-item {{ setActiveRoute(['admin.users.index', 'admin.users.create'], 'menu-open') }}">
            <a href="#" class="nav-link {{ setActiveRoute(['admin.users.index', 'admin.users.create']) }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Usuarios
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link {{ setActiveRoute('admin.users.index') }}">
                        <i class="far fa-eye nav-icon"></i>
                        <p>Ver todos los usuarios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.create') }}" class="nav-link {{ setActiveRoute('admin.users.create') }}">
                        <i class="fas fa-pencil-alt nav-icon"></i>
                        <p>Crear un usuario</p>
                    </a>
                </li>
            </ul>
        </li>
        @else
        <li class="nav-item">
            <a 
                href="{{ route('admin.users.show', auth()->user()) }}" 
                class="nav-link {{ setActiveRoute(['admin.users.edit', 'admin.users.show']) }}"
            >
                <i class="fas fa-user"></i>&nbsp;
                <p>
                    Perfil
                </p>
            </a>
        </li>
        @endcan

        @can('view', new \Spatie\Permission\Models\Role)
        <li class="nav-item">
            <a 
                href="{{ route('admin.roles.index') }}" 
                class="nav-link {{ setActiveRoute(['admin.roles.index', 'admin.roles.edit']) }}"
            >
                <i class="fas fa-pencil-alt"></i>&nbsp;
                <p>
                    Roles
                </p>
            </a>
        </li>
        @endcan

        @can('view', new \Spatie\Permission\Models\Permission)
        <li class="nav-item">
            <a 
                href="{{ route('admin.permissions.index') }}" 
                class="nav-link {{ setActiveRoute(['admin.permissions.index', 'admin.permissions.edit']) }}"
            >
                <i class="fas fa-pencil-alt"></i>&nbsp;
                <p>
                    Permissions
                </p>
            </a>
        </li>
        @endcan
    </ul>
</nav>
