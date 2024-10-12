
        <h2>Product Dekho</h2>
        <ul>
            <li><a href="{{route('dashboard')}}"><i class="fa-solid fa-list"></i>Products List </a></li>
            <li><a href="{{route('add')}}"><i class="fa-sharp fa-solid fa-plus"></i>Add New</a></li>
            <li class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
