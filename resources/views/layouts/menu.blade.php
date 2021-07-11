<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('siswas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('siswas.index') }}"><i class="fas fa-building"></i><span>Siswas</span></a>
</li>

<li class="side-menus {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-building"></i><span>Products</span></a>
</li>

