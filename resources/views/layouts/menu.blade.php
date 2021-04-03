<li class="nav-item">
    <a href="{{ route('article.index')}}" class="nav-link {{ Request::is('article*') ? 'active' : ''}}">
        <i class="nav-icon fas fa-copy"></i>
        <p>Article</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('category.index')}}" class="nav-link {{ Request::is('category*') ? 'active' : ''}}">
        <i class="nav-icon fas fa-table"></i>
        <p>Category</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link {{ Request::is('user*') ? 'active' : ''}}">
        <i class="nav-icon fas fa-edit"></i>
        <p>User</p>
    </a>
</li>