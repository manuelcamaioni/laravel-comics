<header>
    <div class="container">
        <nav class="d-flex">
            <div class="img-container d-flex">
                <img src="../assets/vue-dc-comics-1/img/dc-logo.png" alt="" />
            </div>
            <div class="list-container d-flex h-100">
                <ul class="d-flex h-100">
                    @foreach ($headerLinks as $link)
                        <li class="d-flex align-center {{ $link['active'] ? 'active' : '' }}">
                            <a href="{{ route($link['link']) }}"
                                class="{{ $link['active'] ? 'active' : '' }}">{{ $link['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</header>
