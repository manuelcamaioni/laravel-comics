<footer>
    <div class="container d-flex">
        <div class="list-container">
            <h2>Dc Comics</h2>
            <ul>
                @foreach ($headerLinks as $link)
                    <li>
                        <a href="#">{{ $link['name'] }}</a>
                    </li>
                @endforeach
            </ul>
            <h2>Shop</h2>
            <ul>
                @foreach ($footerShop as $element)
                    <li>
                        <a href="#">{{ $element['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="list-container">
            <h2>DC</h2>
            <ul>
                @foreach ($footerInfo as $info)
                    <li>
                        <a href="#">{{ $info['name'] }}</a>
                    </li>
                @endforeach

            </ul>
        </div>
        <div class="list-container">
            <h2>Sites</h2>
            <ul>
                @foreach ($footerInfo as $info)
                    <li>
                        <a href="#">{{ $info['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="w-100 extended-wrapper">
        <div class="container d-flex">
            <div class="container-button">
                <button><a href="#">Sign-up now!</a></button>
            </div>
            <div class="media-list">
                <ul class="d-flex">
                    <li class="d-flex align-center">
                        <span>Follow us</span>
                    </li>
                    @foreach ($footerIcons as $icon)
                        <li class="d-flex align-center">
                            <img src="../img/{{ $icon['name'] }}" alt="" />
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <div class="overlay-container"></div>
</footer>
