<ul class="navbar-nav me-auto">
    @auth
        <li class="nav-item">
            <a class="nav-link" href="{{ route('supplier.index') }}">SUPPLIER</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}">PRODUCT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('chart.index') }}">CHART</a>
        </li>
    @endauth

</ul>
